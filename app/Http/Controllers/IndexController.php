<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companyinfo;

use App\Models\HomeSlider;

use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Industry;
use App\Models\IndustryPage;


class IndexController extends Controller
{
    public function index()
    {   
        $testimonials = Testimonial::latest()->get();
        $companyinfos = Companyinfo::first();
         $homeSliders = HomeSlider::all();
         $industries = Industry::latest()->get();
       $faqs = Faq::limit(5)->get();

        return view('user.pages.index', compact('homeSliders','faqs','testimonials','companyinfos','industries'));
    }


   public function industryPage($id)
{
    // dd($id);    
    $industry = Industry::findOrFail($id);
    $industryPages = IndustryPage::where('ref_id', $id)->latest()->get();

    return view('user.pages.industry-page', compact('industry', 'industryPages'));
}

}
