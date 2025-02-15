<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    //return view('welcome');
    return view('auth.login2');
});

Route::get('/productos', function () {
    return view('web.shop_grid');
});

Route::get('/producto/detalle', function () {
    return view('web.product_details');
});

Route::get('/micuenta', function () {
    return view('web.my_account');
});

Route::get('/login_registro', function () {
    return view('web.login_register ');
});

Route::get('/contacto', function () {
    return view('web.contact');
});

Route::get('/carrito', function () {
    return view('web.cart');
});

Route::get('/blog', function () {
    return view('web.blog');
});

Route::get('/blogs/detalles', function () {
    return view('web.blog_details');
});

Route::get('/nosotros', function () {
    return view('web.about');
});


Route::get('/pagar', function () {
    return view('web.checkout');
});


Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('sales/reports_day', [ReportController::class, 'reports_day'])->name('reports.day');
Route::get('sales/reports_date', [ReportController::class, 'reports_date'])->name('reports.date');
Route::post('sales/reports_result', [ReportController::class, 'reports_result'])->name('reports.result');

Route::resource('users', UserController::class)->names('users');

Route::resource('categories', CategoryController::class)->names('categories');

Route::resource('clients', ClientController::class)->names('clients');

Route::resource('providers', ProviderController::class)->names('providers');

Route::resource('products', ProductController::class)->names('products');
Route::post('change_status/products/{product}', [ProductController::class, 'change_status'])->name('products.change.status');

Route::post('upload/product/{id}/image', [ProductController::class, 'upload_image'])->name('upload.image');

Route::resource('purchases', PurchaseController::class)->names('purchases');
Route::post('change_status/purchases/{purchase}', [PurchaseController::class, 'change_status'])->name('purchases.change.status');
Route::get('purchases/pdf/{purchase}', [PurchaseController::class, 'pdf'])->name('purchases.pdf');

Route::resource('sales', SaleController::class)->names('sales');
Route::post('change_status/sales/{sale}', [PurchaseController::class, 'change_status'])->name('sales.change.status');

Route::resource('roles', RoleController::class)->names('roles');
Route::resource('permissions', PermissionController::class)->names('permissions');

Route::get('get_subcategories', [AjaxController::class, 'get_subcategories'])->name('get_subcategories');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
