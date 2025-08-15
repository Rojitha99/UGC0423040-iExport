<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\Seller_SummeryController;
use App\Http\Controllers\Admin\Buyer_SummeryController;
use App\Http\Controllers\Admin\Seller_ReviewController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\LogisticController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\paymentController;
use App\Models\Slider;
use App\Models\Seller_Summery;
use App\Models\Buyer_Summery;
use App\Models\Seller_Review;
use App\Models\User;
use App\Models\Customer;
use App\Models\payment;
use Spatie\Permission\Models\Permission;




Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');  // Use dots instead of slashes
})->middleware(['auth', 'role:admin'])->name('admin.dashboard');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    // ... other admin routes
    
    Route::resource('slides', \App\Http\Controllers\Admin\SlideController::class)
        ->except(['show'])
        ->names('admin.slides');

    
    
});

Route::get('/dashboard', function () {
    return view('admin.layouts.master');
})->name('admin.layouts.master');

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
    $sliders=Slider::all();
    return view('frontend.home',compact('sliders'));
})->name('frontend.home');

Route::get('/cinnamon', function () {
    $customers=Customer::all();
    return view('frontend.product.cinnamon',compact('customers'));
})->name('frontend.cinnamon');

Route::get('/buyers', function () {
    $buyers=Buyer_Summery::all();
    return view('frontend.buyer.buyers',compact('buyers')); 
})->name('frontend.buyers');

Route::get('/car01', function () {
    return view('frontend.car01');
})->name('frontend.car01');

Route::get('/clo01', function () {
    return view('frontend.clo01');
})->name('frontend.clo01');

Route::get('/cardamom', function () {
    $customers=Customer::all();
    return view('frontend.product.cardamom',compact('customers'));
})->name('frontend.cardamom');

Route::get('/chat', function () {
    return view('frontend.chat');
})->name('frontend.chat');

Route::get('/cloves', function () {
    $customers=Customer::all();
    return view('frontend.product.cloves',compact('customers'));
})->name('frontend.cloves');

Route::get('/nutmeg', function () {
    $customers=Customer::all();
    return view('frontend.product.nutmeg',compact('customers'));
})->name('frontend.nutmeg');

Route::get('/invest', function () {
    return view('frontend.invest.invest');
})->name('frontend.invest');

Route::get('/invest_car', function () {
    return view('frontend.invest.invest_car');
})->name('frontend.invest.invest_car');

Route::get('/loggin', function () {
    return view('frontend.loggin');
})->name('frontend.loggin');




Route::get('/logistic', function () {
    return view('frontend.logistic.logistic');
})->name('frontend.logistic');


Route::get('/pepper', function () {
    $customers=Customer::all();
    return view('frontend.product.pepper',compact('customers'));
})->name('frontend.pepper');


// Customer Route


Route::get('/sellerdashboard', function () {
    return view('frontend.Customer.sellerdashboard');
})->name('frontend.Customer.sellerdashboard');

Route::middleware(['auth'])->group(function () {
    // ... your other routes ...
    
    Route::get('/sellerprofile', function () {
        $user = Auth::user();
        return view('frontend.Customer.sellerprofile', compact('user'));
    })->name('frontend.Customer.sellerprofile');
});

Route::get('/post', function () {
    // Only get posts for the authenticated user
    $customers = auth()->user()->customers()->get();
    
    // If you still need users data (though probably not necessary)
    $users = User::where('id', auth()->id())->get();
    
    return view('frontend.Customer.post', compact('customers', 'users'));
})->middleware('auth')->name('frontend.Customer.post');

Route::get('/sellerlogistic', function () {
    return view('frontend.Customer.sellerlogistic');
})->name('frontend.Customer.sellerlogistic');


Route::get('/post_page', function () {
       $customers = auth()->user()->customers()->get();
    
    // If you still need users data (though probably not necessary)
    $users = User::where('id', auth()->id())->get();
    
    return view('frontend.clo01',compact('customers'));
})->name('frontend.clo01');






Route::get('/register', function () {
    return view('frontend.register');
})->name('register');

Route::get('/sellers', function () {
    $sellers=Seller_Summery::all();
    $reviews=Seller_Review::all();
    return view('frontend.sellers.sellers',compact('sellers','reviews'));
})->name('frontend.sellers');  


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


    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });


    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');


    Route::controller(SlideController::class)->middleware(['auth','verified'])->group(function(){
        Route::get('/slideIndex','Index')->name('slider.index');
        Route::post('/saveSlider','storeSlider')->name('slider.store');
        Route::post('/sliderUpdate','updateslider')->name('slider.update');
        Route::get('/deleteSlider/{id}','deleteslider')->name('slider.delete');
    });

    Route::controller(Seller_SummeryController::class)->middleware(['auth','verified'])->group(function(){
        Route::get('/sellerIndex','Index')->name('seller.index');
        Route::post('/saveSeller','storeseller')->name('seller.store');
        Route::post('/sellerUpdate','updateseller')->name('seller.update');
        Route::get('/deleteSeller/{id}','deleteseller')->name('seller.delete');
    });

    Route::controller(Buyer_SummeryController::class)->middleware(['auth','verified'])->group(function(){
        Route::get('/buyerIndex','Index')->name('buyer.index');
        Route::post('/saveBuyer','storebuyer')->name('buyer.store');
        Route::post('/buyerUpdate','updatebuyer')->name('buyer.update');
        Route::get('/deleteBuyer/{id}','deletebuyer')->name('buyer.delete');
    });

    Route::controller(Seller_ReviewController::class)->middleware(['auth','verified'])->group(function(){
        Route::get('/reviewIndex','Index')->name('Review.index');
        Route::post('/saveReview','storeReview')->name('Review.store');
        Route::post('/reviewUpdate','updateReview')->name('Review.update');
        Route::get('/deleteReview/{id}','deleteReview')->name('Review.delete');
    });

    Route::controller(PermissionController::class)->middleware(['auth','verified'])->group(function(){
        Route::get('/permissionIndex','Index')->name('Permission.index');
        Route::post('/savePermission','storePermission')->name('Permission.store');
        Route::post('/permissionUpdate','updatePermission')->name('Permission.update');
        Route::get('/deletePermission/{id}','deletePermission')->name('Permission.delete');
    });

     Route::controller(RoleController::class)->middleware(['auth','verified'])->group(function(){
        Route::get('/roleIndex','Index')->name('Role.index');
        Route::post('/saveRole','storeRole')->name('Role.store');
        Route::post('/roleUpdate','updateRole')->name('Role.update');
        Route::get('/deleteRole/{id}','deleteRole')->name('Role.delete');

        Route::get('/permissionToRole/{id}','givePermissionToRole')->name('Role.givePermissionToRole');
        Route::put('/givePermissionToRole/{id}','giveRoleToPermission')->name('role.giveRoleToPermission');
    });


    Route::controller(UserController::class)->middleware(['auth','verified'])->group(function (){
    
    Route::get('/userIndex','index');
    Route::post('/saveUser','storeuser')->name('user.store');
    Route::post('/userUpdate','updateuser')->name('user.update');
    Route::get('/deleteUser/{id}','deleteuser')->name('user.delete');
     });

     Route::controller(CustomerController::class)->middleware(['auth','verified'])->group(function(){
        Route::get('/customerIndex','Index')->name('Customer.index');
        Route::post('/saveCustomer','storeCustomer')->name('Customer.store');
        Route::post('/customerUpdate','updateCustomer')->name('Customer.update');
        Route::get('/deleteCustomer/{id}','deleteCustomer')->name('ustomer.delete');
        Route::get('/customerfilter','filter')->name('Customer.filter');
    });

    // routes/web.php
// routes/web.php
Route::middleware(['auth'])->group(function () {
    // Use either this (controller approach)
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    
    // OR this (closure approach), but not both
    // Route::get('/sellerprofile', function () {
    //    $user = Auth::user();
    //    return view('frontend.Customer.sellerprofile', compact('user'));
    // })->name('profile.show');
    
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/last-login', [ProfileController::class, 'updateLastLogin'])->name('profile.update-last-login');
});

Route::controller(PaymentController::class)->middleware(['auth', 'verified'])->group(function () {
    // Show payment form for a customer
    Route::get('/customer/{customer}/payment', 'showPaymentForm')->name('payment.form');
    
    // Process payment for a customer
    Route::post('/customer/{customer}/payment', 'processPayment')->name('payment.process');
    
    // Payment success page
    Route::get('/payment/{payment}/success', 'showSuccess')->name('payment.success');
    
    // Payment history for a customer
    Route::get('/customer/{customer}/payments', 'paymentHistory')->name('payment.history');
    
    // Payment receipt download
    Route::get('/payment/{payment}/receipt', 'downloadReceipt')->name('payment.receipt');
});

    

require __DIR__.'/auth.php';
