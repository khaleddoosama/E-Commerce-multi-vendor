<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\Backend\VendorProductController;
use App\Http\Controllers\Backend\VendorOrderController;
use App\Http\Controllers\User\ReviewController;

/// Vendor Dashboard
Route::middleware(['auth', 'role:vendor'])->group(function () {

    Route::get('/vendor/dashboard', [VendorController::class, 'VendorDashboard'])->name('vendor.dashobard');

    Route::get('/vendor/logout', [VendorController::class, 'VendorDestroy'])->name('vendor.logout');

    Route::get('/vendor/profile', [VendorController::class, 'VendorProfile'])->name('vendor.profile');

    Route::post('/vendor/profile/store', [VendorController::class, 'VendorProfileStore'])->name('vendor.profile.store');

    Route::get('/vendor/change/password', [VendorController::class, 'VendorChangePassword'])->name('vendor.change.password');

    Route::post('/vendor/update/password', [VendorController::class, 'VendorUpdatePassword'])->name('vendor.update.password');



    // Vendor Add Product All Route
    Route::controller(VendorProductController::class)->group(function () {
        Route::get('/vendor/all/product', 'VendorAllProduct')->name('vendor.all.product');
        Route::get('/vendor/add/product', 'VendorAddProduct')->name('vendor.add.product');

        Route::post('/vendor/store/product', 'VendorStoreProduct')->name('vendor.store.product');
        Route::get('/vendor/edit/product/{id}', 'VendorEditProduct')->name('vendor.edit.product');

        Route::post('/vendor/update/product', 'VendorUpdateProduct')->name('vendor.update.product');
        Route::post('/vendor/update/product/thambnail', 'VendorUpdateProductThabnail')->name('vendor.update.product.thambnail');

        Route::post('/vendor/update/product/multiimage', 'VendorUpdateProductmultiImage')->name('vendor.update.product.multiimage');

        Route::get('/vendor/product/multiimg/delete/{id}', 'VendorMultiimgDelete')->name('vendor.product.multiimg.delete');

        Route::get('/vendor/product/inactive/{id}', 'VendorProductInactive')->name('vendor.product.inactive');
        Route::get('/vendor/product/active/{id}', 'VendorProductActive')->name('vendor.product.active');

        Route::get('/vendor/delete/product/{id}', 'VendorProductDelete')->name('vendor.delete.product');

        Route::get('/vendor/subcategory/ajax/{category_id}', 'VendorGetSubCategory');
    });

    // Vendor Order All Route
    Route::controller(VendorOrderController::class)->group(function () {
        Route::get('/vendor/order', 'VendorOrder')->name('vendor.order');
        Route::get('/vendor/return/order', 'VendorReturnOrder')->name('vendor.return.order');
        Route::get('/vendor/complete/return/order', 'VendorCompleteReturnOrder')->name('vendor.complete.return.order');
        Route::get('/vendor/order/details/{order_id}', 'VendorOrderDetails')->name('vendor.order.details');
    });

    Route::controller(ReviewController::class)->group(function () {

        Route::get('/vendor/all/review', 'VendorAllReview')->name('vendor.all.review');
    });
}); // end vendor group middleware