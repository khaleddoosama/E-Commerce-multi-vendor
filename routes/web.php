<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ActiveUserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Middleware\RedirectIfAuthenticated;

use App\Http\Controllers\Backend\VendorProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\ReturnController;
use App\Http\Controllers\Backend\ShippingAreaController;
use App\Http\Controllers\Backend\VendorOrderController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\User\AllUserController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\User\CompareController;
use App\Http\Controllers\User\ReviewController;
use App\Http\Controllers\User\StripeController;

/*
|--------------------------------------------------------------------------
| Web Routes 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', [IndexController::class, 'Index']);

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [UserController::class, 'UserDashboard'])->name('dashboard');

    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');

    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');

    Route::post('/user/update/password', [UserController::class, 'UserUpdatePassword'])->name('user.update.password');
}); // Gorup Milldeware End


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

/// Admin Dashboard

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashobard');

    Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');

    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');

    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');

    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('update.password');
});





Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->middleware(RedirectIfAuthenticated::class);

Route::get('/vendor/login', [VendorController::class, 'VendorLogin'])->name('vendor.login')->middleware(RedirectIfAuthenticated::class);

Route::get('/become/vendor', [VendorController::class, 'BecomeVendor'])->name('become.vendor');
Route::post('/vendor/register', [VendorController::class, 'VendorRegister'])->name('vendor.register');



// Include the admin routes
require __DIR__ . '/admin.php';

// Include the vendor routes
require __DIR__ . '/vendor.php';


/// Frontend Product Details All Route 

Route::get('/product/details/{id}/{slug}', [IndexController::class, 'ProductDetails']);
Route::get('/vendor/details/{id}', [IndexController::class, 'VendorDetails'])->name('vendor.details');

Route::get('/vendor/all', [IndexController::class, 'VendorAll'])->name('vendor.all');

Route::get('/product/category/{id}/{slug}', [IndexController::class, 'CatWiseProduct']);

Route::get('/product/subcategory/{id}/{slug}', [IndexController::class, 'SubCatWiseProduct']);

// Product View Modal With Ajax

Route::get('/product/view/modal/{id}', [IndexController::class, 'ProductViewAjax']);
/// Add to cart store data
Route::post('/cart/data/store/{id}', [CartController::class, 'AddToCart']);

// Get Data from mini Cart
Route::get('/product/mini/cart', [CartController::class, 'AddMiniCart']);

Route::get('/minicart/product/remove/{rowId}', [CartController::class, 'RemoveMiniCart']);

/// Add to cart store data For Product Details Page 
Route::post('/dcart/data/store/{id}', [CartController::class, 'AddToCartDetails']);

/// Add to Wishlist 
Route::post('/add-to-wishlist/{product_id}', [WishlistController::class, 'AddToWishList']);

/// Add to Compare 
Route::post('/add-to-compare/{product_id}', [CompareController::class, 'AddToCompare']);

/// Frontend Coupon Option
Route::post('/coupon-apply', [CartController::class, 'CouponApply']);

Route::get('/coupon-calculation', [CartController::class, 'CouponCalculation']);

Route::get('/coupon-remove', [CartController::class, 'CouponRemove']);

// Checkout Page Route 
Route::get('/checkout', [CartController::class, 'CheckoutCreate'])->name('checkout');

// Cart All Route 
Route::controller(CartController::class)->group(function () {
    Route::get('/mycart', 'MyCart')->name('mycart');
    Route::get('/get-cart-product', 'GetCartProduct');
    Route::get('/cart-remove/{rowId}', 'CartRemove');
    Route::get('/cart-decrement/{rowId}', 'CartDecrement');
    Route::get('/cart-increment/{rowId}', 'CartIncrement');
});

// Frontend Blog Post All Route 
Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'AllBlog')->name('home.blog');
    Route::get('/post/details/{id}/{slug}', 'BlogDetails');
    Route::get('/post/category/{id}/{slug}', 'BlogPostCategory');
});

// Frontend Review All Route
Route::controller(ReviewController::class)->group(function () {
    Route::post('/store/review', 'StoreReview')->name('store.review');
});

// Search All Route 
Route::controller(IndexController::class)->group(function () {
    Route::post('/search', 'ProductSearch')->name('product.search');
    Route::post('/search-product', 'SearchProduct');
});

// Shop Page All Route 
Route::controller(ShopController::class)->group(function () {
    Route::get('/shop', 'ShopPage')->name('shop.page');
    Route::post('/shop/filter', 'ShopFilter')->name('shop.filter');
});


/// User All Route
Route::middleware(['auth', 'role:user'])->group(function () {

    // Wishlist All Route 
    Route::controller(WishlistController::class)->group(function () {
        Route::get('/wishlist', 'AllWishlist')->name('wishlist');
        Route::get('/get-wishlist-product', 'GetWishlistProduct');
        Route::get('/wishlist-remove/{id}', 'WishlistRemove');
    });

    // Compare All Route 
    Route::controller(CompareController::class)->group(function () {
        Route::get('/compare', 'AllCompare')->name('compare');
        Route::get('/get-compare-product', 'GetCompareProduct');
        Route::get('/compare-remove/{id}', 'CompareRemove');
    });

    // Checkout All Route
    Route::controller(CheckoutController::class)->group(function () {
        Route::get('/district-get/ajax/{division_id}', 'DistrictGetAjax');
        Route::get('/state-get/ajax/{district_id}', 'StateGetAjax');
        Route::post('/checkout/store', 'CheckoutStore')->name('checkout.store');
    });

    // Stripe All Route 
    Route::controller(StripeController::class)->group(function () {
        Route::post('/stripe/order', 'StripeOrder')->name('stripe.order');
        Route::post('/cash/order', 'CashOrder')->name('cash.order');
    });

    // User Dashboard All Route 
    Route::controller(AllUserController::class)->group(function () {
        Route::get('/user/account/page', 'UserAccount')->name('user.account.page');
        Route::get('/user/change/password', 'UserChangePassword')->name('user.change.password');

        Route::get('/user/order/page', 'UserOrderPage')->name('user.order.page');
        Route::get('/user/order_details/{order_id}', 'UserOrderDetails');
        Route::get('/user/invoice_download/{order_id}', 'UserOrderInvoice');
        Route::post('/return/order/{order_id}', 'ReturnOrder')->name('return.order');
        Route::get('/return/order/page', 'ReturnOrderPage')->name('return.order.page');

        Route::get('/user/track/order', 'UserTrackOrder')->name('user.track.order');
        Route::post('/order/tracking', 'OrderTracking')->name('order.tracking');
    });

    // Order Tracking 
}); // end group User middleware
