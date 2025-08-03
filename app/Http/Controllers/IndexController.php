<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companyinfo;
use App\Models\Blog;
use App\Models\HomeSlider;

use App\Models\Testimonial;
use App\Models\Faq;

class IndexController extends Controller
{
    public function index()
    {   
        $testimonials = Testimonial::latest()->get();
        $companyinfos = Companyinfo::first();
        $blogs = Blog::all();
         $homeSliders = HomeSlider::all();
       $faqs = Faq::limit(5)->get();

        return view('user.pages.index', compact('homeSliders','faqs','testimonials','companyinfos','blogs'));
    }
}
