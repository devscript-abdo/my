<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Project;
use App\Service;
use App\Slider;
use App\Technology;
use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class SiteController extends Controller
{
    //
    public function index()
    {
        $sliders = Slider::all();
        $projects = Project::all();
        $pro = Project::whereTop(1)->first();

        $technologies = Technology::all();

        $testimonials = Testimonial::all();

        return view('site.home.index', compact('sliders', 'projects', 'pro', 'testimonials', 'technologies'));
    }
    public function about()
    {
        $page = Page::whereSlug('about')->whereStatus('active')->firstOrFail();
        return view('site.about.index', compact('page'));
    }
    public function services()
    {
        $services = Service::all();
        return view('site.service.index', compact('services'));
    }
    public function portfolio()
    {
        $projects = Project::all();
        return view('site.portfolio.index', compact('projects'));
    }
    public function blog()
    {
        $posts = Post::all();
        return view('site.blog.index', compact('posts'));
    }
    public function blogSingle($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();
        return view('site.blog.single.index', compact('post'));
    }
    public function contact()
    {
        return view('site.contact.index');
    }

    public function contactPost(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'address' =>  'nullable|string',
            'tele' =>  'nullable|string',
            'message' =>  'required|string',
            //'g-recaptcha-response' => 'required|recaptcha'
        ]);

        $data = array(

            'name'       =>   $request->name,
            'email'      =>   $request->email,
            'address'    =>   $request->address,
            'tele'       =>   $request->tele,
            'message'    =>   $request->message,
        );

        Mail::to('abdelgha4or@gmail.com')->send(new Contact($data));
        return back()->with('successmsg', 'Thanks for contacting me!');
    }
}
