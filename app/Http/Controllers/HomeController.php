<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\inquiry;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;
use App\Page;
use Image;
use App\Blog;
use App\Models\Localinsight;
use App\Models\Categoryy;
use App\Models\Faq;
use App\Models\Sellwithayami;
use File;


class HomeController extends Controller
{
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;

    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();

        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first();

        View()->share('logo',$logo);
        View()->share('favicon',$favicon);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $page = DB::table('pages')->where('id', 1)->first();
       $section = DB::table('section')->where('page_id', 1)->get();
       $blogs = Blog::take(3)->get();

       return view('welcome', compact('page', 'section', 'blogs'));
    }

    public function cash_bonus_calculator(){
        $page = DB::table('pages')->where('id', 2)->first();
        $faqs = Faq::all();

        return view('cash-bonus-calculator', compact('page', 'faqs'));
    }

    public function how_it_work(){
        $page = DB::table('pages')->where('id', 3)->first();

        return view('how-it-work', compact('page'));
    }

    public function seller(){
        $page = DB::table('pages')->where('id', 4)->first();

        return view('seller', compact('page'));
    }

    public function properties(){
        
        $page = DB::table('pages')->where('id', 5)->first();
        
        $get_mls_listing = DB::table('mlslistings')->where('status', '1')->get();

        return view('properties', compact('page', 'get_mls_listing'));
    }

    public function about(){
        $page = DB::table('pages')->where('id', 6)->first();

        return view('about', compact('page'));
    }

    public function about_ayami(){
        $page = DB::table('pages')->where('id', 7)->first();

        return view('about-ayami', compact('page'));
    }

    public function founders_and_team_advisor(){
        $page = DB::table('pages')->where('id', 8)->first();

        return view('founders-and-team-advisor', compact('page'));
    }

    public function giving_back(){
        $page = DB::table('pages')->where('id', 9)->first();

        return view('giving-back', compact('page'));
    }

    public function our_business_partners(){
        $page = DB::table('pages')->where('id', 10)->first();

        return view('our-business-partners', compact('page'));
    }


    public function sell_with_ayami(){
        // $page = DB::table('pages')->where('id', 10)->first();

        return view('sell_with_ayami');
    }
 


    public function post_sell_with_ayami(Request $request)
    {  
        
        // dd($request->all());

        $sellwithayami = new Sellwithayami($request->all());
    
        $sellwithayami->save();

        return redirect()->back()->with('message', 'Form submitted successfully');
        
    }



    public function contact(){
        $page = DB::table('pages')->where('id', 11)->first();

        return view('contact', compact('page'));
    }

    public function blogs(){
        $page = DB::table('pages')->where('id', 12)->first();

        $blogs = Blog::all();
        $localinsights = Localinsight::all();
        $categoryys = Categoryy::all(); 
        

        return view('blogs', compact('page', 'blogs', 'localinsights', 'categoryys'));
    }

    public function blog_detail($id){
        $blog_detail = Blog::find($id);

        return view('blog-detail', compact('blog_detail'));
    }

    public function faqs(){
        $page = DB::table('pages')->where('id', 13)->first();
        $faqs = Faq::all();

        return view('faqs', compact('page', 'faqs'));
    }

    public function resources(){
        $page = DB::table('pages')->where('id', 14)->first();

        return view('resources', compact('page'));
    }

    public function terms_and_condition(){
        $page = DB::table('pages')->where('id', 15)->first();

        return view('terms-and-condition', compact('page'));
    }

    public function privacy_policy(){
        $page = DB::table('pages')->where('id', 16)->first();

        return view('privacy-policy', compact('page'));
    }

    public function accessibility(){
        $page = DB::table('pages')->where('id', 17)->first();

        return view('accessibility', compact('page'));
    }


    public function careerSubmit(Request $request)
    {


        inquiry::create($request->all());


        return response()->json(['message'=>'Thank you for creating your own AyAMi account!  Congratulations on taking this step in your next home purchase journey!  You are on the right path to receive your Cash Bonus!   Now you can save your home searches and favorites and setup home and market e-mail alerts.  We will share with you new articles, events, and other information if you have signed up to our newsletter as well.', 'status' => true]);
        return back();
    }

    public function newsletterSubmit(Request $request){

        $is_email = newsletter::where('newsletter_email',$request->newsletter_email)->count();
        if($is_email == 0) {
            $inquiry = new newsletter;
            $inquiry->newsletter_email = $request->newsletter_email;
            $inquiry->save();
            return response()->json(['message'=>'Thank you for contacting us. We will get back to you asap', 'status' => true]);

        }else{
            return response()->json(['message'=>'Email already exists', 'status' => false]);
        }

    }

    public function updateContent(Request $request){
        $id = $request->input('id');
        $keyword = $request->input('keyword');
        $htmlContent = $request->input('htmlContent');
        if($keyword == 'page'){
            $update = DB::table('pages')
                        ->where('id', $id)
                        ->update(array('content' => $htmlContent));

            if($update){
                return response()->json(['message'=>'Content Updated Successfully', 'status' => true]);
            }else{
                return response()->json(['message'=>'Error Occurred', 'status' => false]);
            }
        }else if($keyword == 'section'){
            $update = DB::table('section')
                        ->where('id', $id)
                        ->update(array('value' => $htmlContent));
            if($update){
                return response()->json(['message'=>'Content Updated Successfully', 'status' => true]);
            }else{
                return response()->json(['message'=>'Error Occurred', 'status' => false]);
            }
        }
    }

}
