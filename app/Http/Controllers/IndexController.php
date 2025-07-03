<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Homeslider;

use App\Models\Productcategory;

use App\Models\Product;

use App\Models\Companyinfo;
use App\Models\Blog;

use App\Models\Testimonial;

use App\Models\Serve;

class IndexController extends Controller
{
    public function index()
    {   
        $sliders = Homeslider::all();
        $categories = Productcategory::all();
        $products = Product::all(); 
        $testimonials = Testimonial::latest()->get();
        $companyinfos = Companyinfo::first();
        $serves = Serve::all();
        $blogs = Blog::all();
        return view('user.pages.index', compact('sliders', 'categories', 'products', 'testimonials','companyinfos', 'serves','blogs'));
    }
}
