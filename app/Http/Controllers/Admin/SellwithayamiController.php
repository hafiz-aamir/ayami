<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Sellwithayami;
use Illuminate\Http\Request;
use Image;
use File;

class SellwithayamiController extends Controller
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
        $model = str_slug('sellwithayami','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $sellwithayami = Sellwithayami::where('receive_a_home', 'LIKE', "%$keyword%")
                ->orWhere('property_type1', 'LIKE', "%$keyword%")
                ->orWhere('unit', 'LIKE', "%$keyword%")
                ->orWhere('property_type2', 'LIKE', "%$keyword%")
                ->orWhere('condition_property', 'LIKE', "%$keyword%")
                ->orWhere('property_type3', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $sellwithayami = Sellwithayami::paginate($perPage);
            }

            return view('sellwithayami.sellwithayami.index', compact('sellwithayami'));
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
        $model = str_slug('sellwithayami','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('sellwithayami.sellwithayami.create');
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
        $model = str_slug('sellwithayami','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            

            $sellwithayami = new Sellwithayami($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $sellwithayami_path = 'uploads/sellwithayamis/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($sellwithayami_path) . DIRECTORY_SEPARATOR. $profileImage);

                $sellwithayami->image = $sellwithayami_path.$profileImage;
            }
            
            $sellwithayami->save();
            return redirect()->back()->with('message', 'Sellwithayami added!');
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
        $model = str_slug('sellwithayami','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $sellwithayami = Sellwithayami::findOrFail($id);
            return view('sellwithayami.sellwithayami.show', compact('sellwithayami'));
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
        $model = str_slug('sellwithayami','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $sellwithayami = Sellwithayami::findOrFail($id);
            return view('sellwithayami.sellwithayami.edit', compact('sellwithayami'));
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
        $model = str_slug('sellwithayami','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $sellwithayami = Sellwithayami::where('id', $id)->first();
            $image_path = public_path($sellwithayami->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/sellwithayamis/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/sellwithayamis/'.$fileNameToStore;               
        }


            $sellwithayami = Sellwithayami::findOrFail($id);
            $sellwithayami->update($requestData);
            return redirect()->back()->with('message', 'Sellwithayami updated!');
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
        $model = str_slug('sellwithayami','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Sellwithayami::destroy($id);
            return redirect()->back()->with('message', 'Sellwithayami deleted!');
        }
        return response(view('403'), 403);

    }
}
