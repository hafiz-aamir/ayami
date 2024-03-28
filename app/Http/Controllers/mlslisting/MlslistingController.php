<?php

namespace App\Http\Controllers\mlslisting;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Mlslisting;
use Illuminate\Http\Request;
use Image;
use File;

class MlslistingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('mlslisting','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $mlslisting = Mlslisting::where('name', 'LIKE', "%$keyword%")
                ->orWhere('location', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $mlslisting = Mlslisting::paginate($perPage);
            }

            return view('mlslisting.mlslisting.index', compact('mlslisting'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('mlslisting','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('mlslisting.mlslisting.create');
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $model = str_slug('mlslisting','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            

            $mlslisting = new Mlslisting($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $mlslisting_path = 'uploads/mlslistings/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($mlslisting_path) . DIRECTORY_SEPARATOR. $profileImage);

                $mlslisting->image = $mlslisting_path.$profileImage;
            }
            
            $mlslisting->save();
            return redirect()->back()->with('message', 'Mlslisting added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('mlslisting','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $mlslisting = Mlslisting::findOrFail($id);
            return view('mlslisting.mlslisting.show', compact('mlslisting'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('mlslisting','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $mlslisting = Mlslisting::findOrFail($id);
            return view('mlslisting.mlslisting.edit', compact('mlslisting'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('mlslisting','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $mlslisting = Mlslisting::where('id', $id)->first();
            $image_path = public_path($mlslisting->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/mlslistings/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/mlslistings/'.$fileNameToStore;               
        }


            $mlslisting = Mlslisting::findOrFail($id);
            $mlslisting->update($requestData);
            return redirect()->back()->with('message', 'Mlslisting updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('mlslisting','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Mlslisting::destroy($id);
            return redirect()->back()->with('message', 'Mlslisting deleted!');
        }
        return response(view('403'), 403);

    }
}
