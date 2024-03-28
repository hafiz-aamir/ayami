<?php

namespace App\Http\Controllers\faqs;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Faq;
use Illuminate\Http\Request;
use Image;
use File;

class FaqsController extends Controller
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
        $model = str_slug('faqs','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $faqs = Faq::where('question', 'LIKE', "%$keyword%")
                ->orWhere('answer', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $faqs = Faq::paginate($perPage);
            }

            return view('faqs.faqs.index', compact('faqs'));
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
        $model = str_slug('faqs','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('faqs.faqs.create');
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
        $model = str_slug('faqs','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            

            $faqs = new Faq($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $faqs_path = 'uploads/faqss/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($faqs_path) . DIRECTORY_SEPARATOR. $profileImage);

                $faqs->image = $faqs_path.$profileImage;
            }
            
            $faqs->save();
            return redirect()->back()->with('message', 'Faq added!');
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
        $model = str_slug('faqs','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $faq = Faq::findOrFail($id);
            return view('faqs.faqs.show', compact('faq'));
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
        $model = str_slug('faqs','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $faq = Faq::findOrFail($id);
            return view('faqs.faqs.edit', compact('faq'));
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
        $model = str_slug('faqs','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $faqs = Faq::where('id', $id)->first();
            $image_path = public_path($faqs->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/faqss/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/faqss/'.$fileNameToStore;               
        }


            $faq = Faq::findOrFail($id);
            $faq->update($requestData);
            return redirect()->back()->with('message', 'Faq updated!');
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
        $model = str_slug('faqs','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Faq::destroy($id);
            return redirect()->back()->with('message', 'Faq deleted!');
        }
        return response(view('403'), 403);

    }
}
