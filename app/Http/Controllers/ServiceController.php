<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Productcategory;

use App\Models\Allbanner;

use App\Models\Companyinfo;

class ServiceController extends Controller
{
    public function services()
    {   
        return view('user.pages.services');
    }

}
