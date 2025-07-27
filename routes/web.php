<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\LogisticController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SettingController;


// Route::get('/', function () {
//     return view('welcome');
// });


//     Route::get('/master', function () {
//         return view('admin.layouts.master');
//     })->name('admin.layouts.master');


// Route::middleware(['auth', 'role:admin'])->get('/admin/dashbord', function () {
//     return view('admin.dashbord');
// });


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');  // Use dots instead of slashes
})->middleware(['auth', 'role:admin'])->name('admin.dashboard');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    // ... other admin routes
    
    Route::resource('slides', \App\Http\Controllers\Admin\SlideController::class)
        ->except(['show'])
        ->names('admin.slides');

    
    
});

Route::get('/usermanage', function () {
    return view('admin.layouts.usermanage');
})->name('admin.layouts.usermanage');

Route::get('/Sellers', function () {
    return view('admin.layouts.Sellers');
})->name('admin.layouts.Sellers');

Route::get('/Logistics', function () {
    return view('admin.layouts.Logistics');
})->name('admin.layouts.Logistics');

Route::get('/Reports', function () {
    return view('admin.layouts.Reports');
})->name('admin.layouts.Reports');




Route::get('/', function () {
    return view('frontend.home');
})->name('frontend.home');

Route::get('/cinnamon', function () {
    return view('frontend.product.cinnamon');
})->name('frontend.cinnamon');

Route::get('/buyers', function () {
    return view('frontend.buyer.buyers'); // Updated path
})->name('frontend.buyers');

Route::get('/car01', function () {
    return view('frontend.car01');
})->name('frontend.car01');

Route::get('/clo01', function () {
    return view('frontend.clo01');
})->name('frontend.clo01');

Route::get('/cardamom', function () {
    return view('frontend.product.cardamom');
})->name('frontend.cardamom');

Route::get('/chat', function () {
    return view('frontend.chat');
})->name('frontend.chat');

Route::get('/cloves', function () {
    return view('frontend.product.cloves');
})->name('frontend.cloves');

Route::get('/nutmeg', function () {
    return view('frontend.product.nutmeg');
})->name('frontend.nutmeg');

Route::get('/invest', function () {
    return view('frontend.invest.invest');
})->name('frontend.invest');

Route::get('/loggin', function () {
    return view('frontend.loggin');
})->name('frontend.loggin');

Route::get('/logistic', function () {
    return view('frontend.logistic.logistic');
})->name('frontend.logistic');


Route::get('/pepper', function () {
    return view('frontend.product.pepper');
})->name('frontend.pepper');

Route::get('/post', function () {
    return view('frontend.post');
})->name('frontend.post');

Route::get('/register', function () {
    return view('frontend.register');
})->name('register');

Route::get('/sellers', function () {
    return view('frontend.sellers.sellers');
})->name('frontend.sellers');  // Note the SLASH (/) in name


Route::get('/nut01', function () {
    return view('frontend.nut01');
})->name('frontend.nut01');

Route::get('/cin01', function () {
    return view('frontend.cin01');
})->name('frontend.cin01');



Route::get('/help', function () {
    return view('frontend.help');
})->name('frontend.help');

Route::get('/careers', function () {
    return view('frontend.careers');
})->name('frontend.careers');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('frontend.blog');

Route::get('/terms', function () {
    return view('frontend.terms');
})->name('frontend.terms');

Route::get('/privacy', function () {
    return view('frontend.privacy');
})->name('frontend.privacy');

Route::get('/sitemap', function () {
    return view('frontend.sitemap');
})->name('frontend.sitemap');

Route::get('/invest_cin', function () {
    return view('frontend.invest_cin');
})->name('frontend.invest_cin');




// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    
    // Add other auth routes...
});

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
// Route::post('/logout', function (Request $request) {
//     Auth::logout();
//     $request->session()->invalidate();
//     $request->session()->regenerateToken();
//     return redirect('/')->with('status', 'You have been logged out.');
// })->name('logout');

    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/check-slides', function() {
    return App\Models\Slide::all();

    // Add to routes/web.php
Route::get('/check-image/{id}', function($id) {
    $slide = App\Models\Slide::findOrFail($id);
    return [
        'database_path' => $slide->image_path,
        'storage_exists' => Storage::exists('public/'.$slide->image_path),
        'public_url' => Storage::url($slide->image_path),
        'absolute_path' => storage_path('app/public/'.$slide->image_path)
    ];
});
});
});

require __DIR__.'/auth.php';
