<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AttributeValueController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Client\CategoryController as ClientCategoryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductVariationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|php artisan key:generate
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[HomeController::class,'dashboard'])->name('client.index');
// Route::get('/add-new',[CartController::class,'index'])->name('cart.addnew');

Route::get('/categories',[HomeController::class,'category'])->name('categories.index');





//client/cart
// Route::get('/Add-Cart/{id}',[CartController::class,'AddCart']);
// Route::get('/Delete-Item-Cart/{id}',[CartController::class,'DeleteItemCart']);
// Route::get('/cart',[CartController::class,'index'])->name('cart.index');
// Route::get('/model-cart',[CartController::class,'AddCart']);
// Route::get('/order',[CartController::class,'order'])->name('client.cart.order');
// Route::get('/checkout',[CartController::class,'checkout'])->name('client.cart.checkout');
Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::delete('/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::put('/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');
    // Route::get('/sidebar', [CartController::class, 'getCartSidebar'])->name('cart.sidebar');
});

//client/product
Route::get('/list-product',[ProductController::class,'listproduct'])->name('client.product.list-product');
Route::get('/product-details',[ProductController::class,'productdetails'])->name('client.product.product-details');


//ADMIN CODE BẮT ĐẦU TỪ ĐÂY NHÉ

Route::get('/admin',[ProductController::class,'dashboard'])->name('admin.dashboard');
//admin/Auth
Route::get('/admin/login',[AuthController::class,'login'])->name('admin.auth.login');
Route::get('/admin/forgot-password',[AuthController::class,'forgotpassword'])->name('admin.auth.forgot-password');


//admin/Category
Route::get('/admin/category',[CategoryController::class,'index'])->name('admin.category');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('/admin/category',[CategoryController::class,'store'])->name('admin.category.store');
Route::get('/admin/category/{id}/edit',[CategoryController::class,'edit'])->name('admin.category.edit');
Route::put('admin/category/{id}',[CategoryController::class,'update'])->name('admin.category.update');
Route::delete('/admin/category/{id}',[CategoryController::class,'destroy'])->name('admin.category.destroy');

//admin/attributes
Route::get('/admin/attribute',[AttributeController::class,'index'])->name('admin.attribute.attribute');
Route::get('/admin/attribute/create',[AttributeController::class,'create'])->name('admin.attribute.create');
Route::post('/admin/attribute',[AttributeController::class,'store'])->name('admin.attribute.store');
Route::get('/admin/attribute/{id}/edit',[AttributeController::class,'edit'])->name('admin.attribute.edit');
Route::put('/admin/attribute/{id}',[AttributeController::class,'update'])->name('admin.attribute.update');
Route::delete('admin/attribute/{id}/delete',[AttributeController::class,'destroy'])->name('admin.attribute.destroy');

//admin/attributesValues
Route::get('/admin/attribute-values',[AttributeValueController::class,'index'])->name('admin.attribute-values');
Route::get('/admin/attribute-values/create',[AttributeValueController::class,'create'])->name('admin.attribute-values.create');
Route::post('/admin/attribute-values',[AttributeValueController::class,'store'])->name('admin.attribute-values.store');
Route::delete('/admin/attribute-values/{id}/delete',[AttributeValueController::class,'destroy'])->name('admin.attribute-values.delete');


//admin/Product
Route::get('/admin',[ProductController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/product-list',[ProductController::class,'index'])->name('admin.product.product-list');
Route::get('/admin/add-product',[ProductController::class,'create'])->name('admin.product.create');
Route::post('/admin/product',[ProductController::class,'store'])->name('admin.product.store');
Route::get('/admin/product/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
Route::put('/admin/product/{product}', [ProductController::class, 'update'])->name('admin.product.update');
Route::delete('/admin/products/{id}/delete', [ProductController::class, 'destroy'])->name('products.destroy');

//admin/Variation
Route::get('/admin/products/{id}/variations',[ProductController::class,'showVariations'])->name('product.variations');
Route::get('/products/{id}/variations/create', [ProductVariationController::class, 'create'])->name('product-variations.create');
Route::post('/product-variations/store', [ProductVariationController::class, 'store'])->name('product-variations.store');


