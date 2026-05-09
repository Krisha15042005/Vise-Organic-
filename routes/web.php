<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', function () {
    $blogs = \App\Models\BlogPost::latest()->get();
    return view('blog', compact('blogs'));
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/gallery', function () {
    $galleries = \App\Models\GalleryImage::latest()->get();
    return view('Gallery', compact('galleries'));
});

Route::get('/RandD', function () {
    return view('RandD');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/callback', function () {
    return view('callback');
});

Route::get('/admin', function () {
    return redirect()->route('admin.login');
});

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

Route::post('/admin/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    if ($credentials['email'] === 'admin@example.com' && $credentials['password'] === 'password') {
        session(['admin_logged_in' => true, 'admin_email' => $credentials['email']]);
        return redirect()->route('admin.dashboard');
    }

    return back()->withErrors(['email' => 'Invalid login credentials'])->withInput();
})->name('admin.login.post');

Route::get('/admin/logout', function () {
    session()->forget(['admin_logged_in', 'admin_email']);
    return redirect()->route('admin.login');
})->name('admin.logout');

Route::get('/admin/dashboard', function () {
    if (!session('admin_logged_in')) {
        return redirect()->route('admin.login');
    }

    $contacts = \App\Models\Contact::latest()->get();
    $products = \App\Models\Product::latest()->get();
    $users = \App\Models\User::latest()->get();
    $blogs = \App\Models\BlogPost::latest()->get();
    $galleries = \App\Models\GalleryImage::latest()->get();
    $userCount = $users->count();

    return view('admin.dashboard', [
        'contacts' => $contacts,
        'products' => $products,
        'users' => $users,
        'blogs' => $blogs,
        'galleries' => $galleries,
        'contactCount' => $contacts->count(),
        'productCount' => $products->count(),
        'userCount' => $userCount,
    ]);
})->name('admin.dashboard');

Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');
Route::post('/admin/products', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.product.store');
Route::put('/admin/products/{id}', [\App\Http\Controllers\Admin\ProductEditController::class, 'update'])->name('admin.product.update');
Route::delete('/admin/products/{id}', [\App\Http\Controllers\Admin\ProductEditController::class, 'destroy'])->name('admin.product.delete');
Route::post('/admin/users', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.user.store');
Route::post('/admin/blogs', [\App\Http\Controllers\Admin\BlogController::class, 'store'])->name('admin.blog.store');
Route::delete('/admin/blogs/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('admin.blog.delete');
Route::post('/admin/gallery', [\App\Http\Controllers\Admin\GalleryController::class, 'store'])->name('admin.gallery.store');
Route::delete('/admin/gallery/{id}', [\App\Http\Controllers\Admin\GalleryController::class, 'destroy'])->name('admin.gallery.delete');