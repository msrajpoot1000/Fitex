<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Companyinfo;
use Illuminate\Http\Request;
use App\Models\Faq;

class AboutController extends Controller
{
    public function about()
    {   
        $faqs = Faq::limit(5)->get();
        $companyinfos = Companyinfo::first();
        return view('user.pages.aboutus', compact( 'companyinfos','faqs'));
    }
}
