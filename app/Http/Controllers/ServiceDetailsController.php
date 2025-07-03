<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Productcategory;

use App\Models\Allbanner;

use App\Models\Companyinfo;

class ServiceDetailsController extends Controller
{
    public function serviceDetails()
    {   
        return view('user.pages.service-details');
    }

}
