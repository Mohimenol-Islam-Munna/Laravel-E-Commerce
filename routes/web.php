<?php

use Illuminate\Support\Facades\Route;




// ************************************Front End**************************************


// root route--------------------------
Route::get('/', function () {
    return view('pages.index');
});

// ---------------***------------------

// user authentication-----------------

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ---------------***------------------








// ************************************Back End***************************************


// ----------------------admin authentication----------------------

// login-----------------------
Route::get('/admin', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('adminLogin');

Route::post('/admin', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('adminLogin');

Route::get('/adminHome', [App\Http\Controllers\Admin\AdminController::class, 'index']);

// -----------***--------------



// logout----------------------

Route::post('/adminLogout', [App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('admin.logout');

// -----------***--------------



// password reset--------------

Route::get('admin/password/reset', [App\Http\Controllers\Admin\ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');

Route::post('admin/password/email', [App\Http\Controllers\Admin\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');


Route::get('admin/password/reset/{token}', [App\Http\Controllers\Admin\ResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');

Route::post('admin/password/reset', [App\Http\Controllers\Admin\ResetPasswordController::class, 'reset'])->name('admin.password.update');

// -----------***--------------


// sending email---------------

Route::get('/sendM', function(){

    Mail::to('munna.cse.pust@gmail.com')->send(new App\Mail\passwordReset);
	
	return response()->json('mail send successfully!!');

});




Route::get('sendMail', function(){

	Mail::to('munna.cse.pust@gmail.com')->send(new App\Mail\OrderShipped);

	return response()->json('Order mail send successfully');

});

// -------------***-------------

// ---------------------------------***----------------------------------


// Category--------------------

Route::get('/admin/category', [App\Http\Controllers\Admin\category\CategoryController::class, 'category'])->name('category');

// -------------***-------------



// Sub Category--------------------
Route::get('/admin/sub/category', [App\Http\Controllers\Admin\category\CategoryController::class, 'subCategory'])->name('sub.category');


// -------------***-------------


// Brand------------------------
Route::get('/admin/brand', [App\Http\Controllers\Admin\category\CategoryController::class, 'brand'])->name('brand');


// -------------***-------------