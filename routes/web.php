<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductdetailsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\CompanyinfoController;
use App\Http\Controllers\HomesliderController;
use App\Http\Controllers\AllbannerController;
use App\Http\Controllers\TestimonialContoller;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServeController;  
use App\Http\Controllers\ServiceDetailsController;
use App\Http\Controllers\ServiceController;

// frontend
Route::get('/', [IndexController::class, 'index'])->name('user.pages.index');

Route::get('/aboutus', [AboutController::class, 'about'])->name('user.pages.aboutus');


Route::get('/Certificates', [CertificateController::class, 'certificate'])->name('website.frontend.certificate');

Route::get('/products/category/{id}', [ProductController::class, 'product'])->name('website.frontend.product');

Route::get('/product-details/{id}', [ProductdetailsController::class, 'productdetails'])->name('website.frontend.product-details');

Route::get('/blog', [BlogController::class, 'blog'])->name('user.pages.blog');

Route::get('/blog-details/{id}', [BlogController::class, 'blogDetails'])->name('user.pages.blog-details');

Route::get('/service-details', [ServiceDetailsController::class, 'serviceDetails'])->name('user.pages.service-details');

Route::get('/services', [ServiceController::class, 'services'])->name('user.pages.services');

Route::get('/our-team', [TeamController::class, 'team'])->name('team'); 

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




// Admin route

// company information
 Route::get('/edit-companyinformation', [CompanyinfoController::class, 'edit_companyinfo'])->middleware(['auth', 'verified'])->name('companyinfo');
 Route::post('/companyinfo/store', [CompanyinfoController::class, 'store'])->middleware(['auth', 'verified'])->name('edit.companyinfo');
 Route::delete('/companyinfo/{id}', [CompanyinfoController::class, 'destroy'])->middleware(['auth', 'verified'])->name('companyinfo.destroy');
 

// Home Slider section

 Route::get('/homeslider', [HomesliderController::class, 'homeslider'])->middleware(['auth', 'verified'])->name('admin.pages.home-slider');
 Route::post('/homeslider/store', [HomesliderController::class, 'store'])->middleware(['auth', 'verified'])->name('homeslider.store');
 Route::delete('/homeslider/delete/{id}', [HomesliderController::class, 'destroy'])->middleware(['auth', 'verified'])->name('homeslider.destroy');



// All banner section

 Route::get('/allbanner', [AllbannerController::class, 'allbanner'])->middleware(['auth', 'verified'])->name('admin.pages.all-banner');
 Route::post('/allbanner/store', [AllbannerController::class, 'store'])->middleware(['auth', 'verified'])->name('allbanners.store');
 Route::delete('/allbanner/{id}/{field}', [AllbannerController::class, 'destroy'])->middleware(['auth', 'verified'])->name('allbanners.destroy');
 
 
 // Product section

 Route::get('/producttype', [ProductController::class, 'productcategory'])->middleware(['auth', 'verified'])->name('admin.pages.product-category');
 Route::post('/producttype/store', [ProductController::class, 'productcategorystore'])->middleware(['auth', 'verified'])->name('productcategory.store');
 Route::delete('/productcategory/destroy/{id}', [ProductController::class, 'productcategorydestroy'])->middleware(['auth', 'verified'])->name('productcategory.destroy');
 
 Route::get('/addproduct', [ProductController::class, 'addproduct'])->middleware(['auth', 'verified'])->name('admin.pages.add-product');
  Route::post('/product/store', [ProductController::class, 'store'])->middleware(['auth', 'verified'])->name('product.store');
 Route::delete('/product/{id}/delete', [ProductController::class, 'destroy'])->middleware(['auth', 'verified'])->name('product.destroy');
 
Route::get('/product/edit/{id}', [ProductController::class, 'editproduct'])->middleware(['auth', 'verified'])->name('product.edit');
Route::put('/product/update/{id}', [ProductController::class, 'updateproduct'])->middleware(['auth', 'verified'])->name('product.update');



Route::get('/edit-productcategory/{id}', [ProductController::class, 'editproductcategory'])->middleware(['auth', 'verified'])->name('productcategory.edit');
Route::post('/update-productcategory/{id}', [ProductController::class, 'updateproductcategory'])->middleware(['auth', 'verified'])->name('productcategory.update');



// Contact section
Route::get('/contact', [ContactController::class, 'contactF'])->name('user.pages.contact');
Route::post('/contact-store', [ContactController::class, 'storeContact'])->name('contact.store');
Route::resource('admin-contact', ContactController::class)->middleware(['auth', 'verified']);


// serve section
Route::get('/serve', [ServeController::class, 'serve'])->middleware(['auth', 'verified'])->name('admin.pages.serve'); 
Route::post('/serve/store', [ServeController::class, 'storeserve'])->middleware(['auth', 'verified'])->name('serve.store');
Route::get('/serve-edit/{id}', [ServeController::class, 'editserve'])->middleware(['auth', 'verified'])->name('serve.edit');
Route::post('/update-serve/{id}', [ServeController::class, 'updateserve'])->middleware(['auth', 'verified'])->name('serve.update');
Route::delete('/serve/{id}', [ServeController::class, 'destroyserve'])->middleware(['auth', 'verified'])->name('serve.destroy');


// certificate section

Route::get('/certificates', [CertificateController::class, 'addcertificate'])->middleware(['auth', 'verified'])->name('admin.pages.certificates');
Route::post('/certificates/store',  [CertificateController::class, 'certificatestore'])->middleware(['auth', 'verified'])->name('certificate.store'); 
Route::delete('/certificates/{id}', [CertificateController::class, 'certificatedestroy'])->middleware(['auth', 'verified'])->name('certificate.destroy');



// blog 
Route::get('/blog', [BlogController::class, 'indexF'])->name('user.pages.blog');
Route::resource('admin-blog', BlogController::class)->middleware(['auth', 'verified']);



// Testimonial
Route::get('/testimonial', [TestimonialContoller::class, 'indexF'])->name('user.pages.testimonial');
Route::resource('admin-testimonial', TestimonialContoller::class)->middleware(['auth', 'verified']);

