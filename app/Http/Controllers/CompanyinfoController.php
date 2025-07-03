<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Companyinfo;

class CompanyinfoController extends Controller
{
    
   public function edit_companyinfo()
   {
       $companyinfos = Companyinfo::first();
        return view('admin.pages.companyinfo', compact('companyinfos'));   
    }
    
    

      public function store(Request $request)
    {
        // Validating input
        $request->validate([
            'companyname' => 'required|string|max:255',
            'email'       => 'required|email',
            'phone'       => 'required|string|max:15',
            'phone2'       => 'nullable|string|max:15',
            'phone3'       => 'nullable|string|max:15',
            'address'     => 'required|string|max:500',
            'facebook'    => 'nullable|url',
            'instagram'  => 'nullable|url',
            'linkedin'   => 'nullable|url',
            'pinterest'  => 'nullable|url',
            'logo'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Fetch existing record or create new
        $company = Companyinfo::first() ?: new Companyinfo;

       if ($request->hasFile('logo')) {
    $file = $request->file('logo');

    // Generate a unique filename
    $filename = time() . '.' . $file->getClientOriginalExtension();

    // Define destination path
    $destination = public_path('assets/images/logo');

    // Move file to destination
    $file->move($destination, $filename);

    // Delete old logo if it exists
    if ($company->logo) {
        $oldPath = public_path($company->logo); // logo is already stored as relative path
        if (file_exists($oldPath)) {
            unlink($oldPath);
        }
    }

    // Store only the relative path in the DB
    $company->logo = 'assets/images/logo/' . $filename;
}


        // Update rest of the fields
        $company->companyname = $request->companyname;
        $company->email       = $request->email;
        $company->phone       = $request->phone;
        $company->phone2       = $request->phone2;
        $company->phone3       = $request->phone3;
        $company->address     = $request->address;
        $company->facebook    = $request->facebook;
        $company->instagram   = $request->instagram;
        $company->linkedin    = $request->linkedin;
        $company->pinterest   = $request->pinterest;

        $company->save();

        return redirect()->route('dashboard')->with('message', 'Company information saved successfully!');
        }
    
        public function destroy($id)
        {
            $company = Companyinfo::findOrFail($id);
            $logoPath = public_path('assets/images/logo/' . $company->logo);
    
            if ($company->logo && file_exists($logoPath)) {
                unlink($logoPath);
            }
    
            $company->delete();
    
            return redirect()->route('dashboard')->with('message', 'Company information deleted successfully!');
        }
 }
