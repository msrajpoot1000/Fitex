<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Productcategory;

use App\Models\Allbanner;

use App\Models\Companyinfo;

class ProductController extends Controller
{
    public function product($id)
    {   
       $banner = Allbanner::select('productimage')->latest()->first();
         $categories = Productcategory::findOrFail($id);
         $products = Product::where('productcategory_id', $id)->get();
          $companyinfos = Companyinfo::first();
        return view('website.frontend.product', compact('products', 'categories', 'banner', 'companyinfos'));
    }
    
     public function productcategory()
    {   
         $categories = Productcategory::all();
        return view('admin.pages.product-category', compact('categories'));
    }
    
       // ✅ Store Project Category
    public function productcategorystore(Request $request)
    {
        $request->validate([
            'productcategory' => 'required|string|max:255',
            'productcategoryimage' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        
        $data = [
        'productcategory' => $request->productcategory,
        ];
        
         if ($request->hasFile('productcategoryimage')) {
            $file = $request->file('productcategoryimage');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('assets/images/Productcategory'), $filename);
            $data['productcategoryimage'] = 'assets/images/Productcategory/' . $filename;
        }

       Productcategory::create($data);

        return back()->with('success', 'Product Category added successfully!');
    }
    
     public function editproductcategory($id)
        {
            $category = Productcategory::findOrFail($id);
            return view('website.admin.edit-pages.edit-productcategory', compact('category'));
        }
    
    public function updateproductcategory(Request $request, $id)
    {
        $request->validate([
            'productcategory' => 'required|string|max:255',
            'productcategoryimage' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
    
        $category = Productcategory::findOrFail($id);
    
        $category->productcategory = $request->productcategory;
    
        // Image update
        if ($request->hasFile('productcategoryimage')) {
            // Delete old image
            if ($category->productcategoryimage && file_exists(public_path($category->productcategoryimage))) {
                unlink(public_path($category->productcategoryimage));
            }
    
            $file = $request->file('productcategoryimage');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('assets/images/Productcategory'), $filename);
            $category->productcategoryimage = 'assets/images/Productcategory/' . $filename;
        }
    
        $category->save();
    
        return redirect()->route('website.admin.productcategory')->with('success', 'Product Category updated successfully!');
    }


    // ✅ Delete Project Category
    public function productcategorydestroy($id)
    {
        $category = Productcategory::findOrFail($id);
        
        if ($category->productcategoryimage && file_exists(public_path($category->productcategoryimage))) {
        unlink(public_path($category->productcategoryimage));
        }
        
        $category->delete();

        return back()->with('success', 'Product Category deleted successfully!');
    }
    
    
        public function addproduct()
    {
        $products = Product::with('category')->get();
          $categories = Productcategory::all();
         return view('admin.pages.add-product', compact('products', 'categories'));
    }
    
     public function editproduct($id)
        {
             $product = Product::findOrFail($id);
            $product->quality = json_decode($product->quality);
            $product->purity = json_decode($product->purity);
            $product->containerstuffing = json_decode($product->containerstuffing);
             $categories = Productcategory::all();
             return view('website.admin.edit-pages.edit-product', compact('product', 'categories'));
        }
        
   public function updateproduct(Request $request, $id)
    {
        $request->validate([
            'productcategory_id' => 'nullable|exists:productcategorys,id',
            'heading' => 'nullable|string|max:255',
            'productimage' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'botanicalname' => 'nullable|string|max:255',
            'origin' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:255',
            'quality' => 'nullable|array',
            'purity' => 'nullable|array',
            'harvestseason' => 'nullable|string|max:255',
            'shelflife' => 'nullable|string|max:255',
            'packagingoption' => 'nullable|string|max:255',
            'minimumorder' => 'nullable|string|max:255',
            'containerstuffing' => 'nullable|array',
            'producationcapacity' => 'nullable|string|max:255',
            'description' => 'nullable|string'
        ]);
    
        $product = Product::findOrFail($id);
    
        // Update image if new one uploaded
        if ($request->hasFile('productimage')) {
            if ($product->productimage && File::exists(public_path($product->productimage))) {
                File::delete(public_path($product->productimage));
            }
    
            $image = $request->file('productimage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/products'), $imageName);
            $product->productimage = 'assets/images/products/' . $imageName;
        }
    
        // Update rest of the fields
        $product->update([
            'productcategory_id' => $request->productcategory_id,
            'heading' => $request->heading,
            'botanicalname' => $request->botanicalname,
            'origin' => $request->origin,
            'color' => $request->color,
            'quality' => json_encode($request->quality),
            'purity' => json_encode($request->purity),
            'harvestseason' => $request->harvestseason,
            'shelflife' => $request->shelflife,
            'packagingoption' => $request->packagingoption,
            'minimumorder' => $request->minimumorder,
            'containerstuffing' => json_encode($request->containerstuffing),
            'producationcapacity' => $request->producationcapacity,
            'description' => $request->description,
            'productimage' => $product->productimage,
        ]);
    
        return redirect()->route('website.admin.add-product')->with('success', 'Product updated successfully!');
    }

    
    
         public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'productcategory_id' => 'nullable|exists:productcategorys,id',
            'heading' => 'nullable|string|max:255',
            'productimage' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'botanicalname' => 'nullable|string|max:255',
            'origin' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:255',
            'quality' => 'nullable|array',
            'purity' => 'nullable|array',
            'harvestseason' => 'nullable|string|max:255',
            'shelflife' => 'nullable|string|max:255',
            'packagingoption' => 'nullable|string|max:255',
            'minimumorder' => 'nullable|string|max:255',
            'containerstuffing' => 'nullable|array',
            'producationcapacity' => 'nullable|string|max:255',
            'description' => 'nullable|string'
            ]);

        $imagePath = null;
        if ($request->hasFile('productimage')) {
            $image = $request->file('productimage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/products'), $imageName);
            $imagePath = 'assets/images/products/' . $imageName;
        }

        Product::create([
            'productcategory_id' => $request->productcategory_id,
            'heading' => $request->heading,
            'productimage' => $imagePath,
            'botanicalname' => $request->botanicalname,
            'origin' => $request->origin,
            'color' => $request->color,
            'quality' => $request->quality,
            'purity' => $request->purity,
            'harvestseason' => $request->harvestseason,
            'shelflife' => $request->shelflife,
            'packagingoption' => $request->packagingoption,
            'minimumorder' => $request->minimumorder,
            'containerstuffing' => $request->containerstuffing,
            'producationcapacity' => $request->producationcapacity,
            'description' => $request->description,
        ]);

         return back()->with('success', 'Project added successfully!');
        }
    
    
    
    public function destroy($id)
        {
            $product = Product::findOrFail($id);
            if ($product->productimage && File::exists(public_path($product->productimage))) {
                File::delete(public_path($product->productimage));
            }
            $product->delete();
            return back()->with('success', 'Project deleted successfully.');
        }
}
