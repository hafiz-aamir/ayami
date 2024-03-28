<?php

namespace App\Http\Controllers\Sell_with_ayami;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Sell_with_ayami;
use Illuminate\Http\Request;
use Image;
use File;

class Sell_with_ayamiController extends Controller
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
        $model = str_slug('sell_with_ayami','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $sell_with_ayami = Sell_with_ayami::where('receive_a_home', 'LIKE', "%$keyword%")
                ->orWhere('property_type1', 'LIKE', "%$keyword%")
                ->orWhere('unit', 'LIKE', "%$keyword%")
                ->orWhere('property_type2', 'LIKE', "%$keyword%")
                ->orWhere('condition_property', 'LIKE', "%$keyword%")
                ->orWhere('property_type3', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $sell_with_ayami = Sell_with_ayami::paginate($perPage);
            }

            return view('sell_with_ayami.sell_with_ayami.index', compact('sell_with_ayami'));
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
        $model = str_slug('sell_with_ayami','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('sell_with_ayami.sell_with_ayami.create');
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
        $model = str_slug('sell_with_ayami','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            

            $sell_with_ayami = new Sell_with_ayami($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $sell_with_ayami_path = 'uploads/sell_with_ayamis/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($sell_with_ayami_path) . DIRECTORY_SEPARATOR. $profileImage);

                $sell_with_ayami->image = $sell_with_ayami_path.$profileImage;
            }
            
            $sell_with_ayami->save();
            return redirect()->back()->with('message', 'Sell_with_ayami added!');
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
        $model = str_slug('sell_with_ayami','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $sell_with_ayami = Sell_with_ayami::findOrFail($id);
            return view('sell_with_ayami.sell_with_ayami.show', compact('sell_with_ayami'));
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
        $model = str_slug('sell_with_ayami','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $sell_with_ayami = Sell_with_ayami::findOrFail($id);
            return view('sell_with_ayami.sell_with_ayami.edit', compact('sell_with_ayami'));
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
        $model = str_slug('sell_with_ayami','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $sell_with_ayami = Sell_with_ayami::where('id', $id)->first();
            $image_path = public_path($sell_with_ayami->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/sell_with_ayamis/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/sell_with_ayamis/'.$fileNameToStore;               
        }


            $sell_with_ayami = Sell_with_ayami::findOrFail($id);
            $sell_with_ayami->update($requestData);
            return redirect()->back()->with('message', 'Sell_with_ayami updated!');
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
        $model = str_slug('sell_with_ayami','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Sell_with_ayami::destroy($id);
            return redirect()->back()->with('message', 'Sell_with_ayami deleted!');
        }
        return response(view('403'), 403);

    }
}
