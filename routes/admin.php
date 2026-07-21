<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ReturnAndRefundController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ServiceAreaController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\GalleryItemController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FaqController;

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('migrate', function() {
            $exitCode = Artisan::call('migrate');
            if ($exitCode === 0) {
                $output = Artisan::output();
                return response()->json(['status' => 'success', 'message' => $output]);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Migration failed'], 500);
            }
        })->name('migrate');

        Route::get('migrate-seed', function() {
            $exitCode = Artisan::call('migrate --seed');
            if ($exitCode === 0) {
                $output = Artisan::output();
                return response()->json(['status' => 'success', 'message' => $output]);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Migration failed'], 500);
            }
        })->name('migrate-seed');

        Route::get('migrate-rollback', function() {
            $exitCodeRollBack = Artisan::call('migrate:rollback');
            if ($exitCodeRollBack === 0) {
                $output = Artisan::output();
                return response()->json(['status' => 'success', 'message' => $output]);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Migration failed'], 500);
            }
        })->name('migrate-rollback');

        Route::get('clear', function() {
            Artisan::call('optimize:clear');
            flash()->success('Cache Clear', 'Cache clear successfully');
            return redirect()->back();
        })->name('clear-cache');

        Route::get('/contact-form-queries', [DashboardController::class, 'contactFormShow'])->name('dashboard.contact-form');
        Route::get('/contact-form-detail/{id}', [DashboardController::class, 'contactFormDetail'])->name('contactForm.detail');
        Route::post('/contact-form-replay/{id}', [DashboardController::class, 'contactFormReplay'])->name('contactForm.replay');
        Route::post('/test-mail', [DashboardController::class, 'testMail'])->name('test.mail');
        Route::get('/backup', [GeneralSettingController::class, 'backup'])->name('setting.backup');
        Route::get('/smtp', [GeneralSettingController::class, 'smtp'])->name('setting.smtp');
        Route::post('/smtp-update', [GeneralSettingController::class, 'smtpUpdate'])->name('setting.smtp-update');
        Route::get('/lock-screen', function () { return view('admin.lock-screen'); })->name('lock-screen');
        Route::post('/lock-screen-unlock', [App\Http\Controllers\GeneralSettingController::class, 'unlock'])->name('lock-screen.unlock');
        Route::get('/profile', [App\Http\Controllers\UserController::class, 'adminProfile'])->name('profile.admin');
        Route::post('/profile/update', [App\Http\Controllers\UserController::class, 'updateAdminProfile'])->name('profile.update');
    });

    Route::middleware(['roles'])->group(function () {
        Route::group(['prefix' => 'role', 'as' => 'role.'], function(){
            Route::get('/add', [RoleController::class, 'index'])->name('add');
            Route::post('/new', [RoleController::class, 'create'])->name('new');
            Route::get('/manage', [RoleController::class, 'manage'])->name('manage');
            Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [RoleController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [RoleController::class, 'delete'])->name('delete');
        });

        Route::prefix('user')->group(function () {
            Route::get('/add', [UserController::class, 'index'])->name('user.add');
            Route::post('/new', [UserController::class, 'create'])->name('user.new');
            Route::get('/manage', [UserController::class, 'manage'])->name('user.manage');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
            Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
            Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
        });

        Route::prefix('privacy')->group(function () {
            Route::get('/add', [PrivacyController::class, 'index'])->name('privacy.add');
            Route::post('/new', [PrivacyController::class, 'create'])->name('privacy.new');
            Route::get('/manage', [PrivacyController::class, 'manage'])->name('privacy.manage');
            Route::get('/edit/{id}', [PrivacyController::class, 'edit'])->name('privacy.edit');
            Route::post('/update', [PrivacyController::class, 'update'])->name('privacy.update');
            Route::post('/delete/{id}', [PrivacyController::class, 'delete'])->name('privacy.delete');
        });

        Route::prefix('return-and-refund')->group(function () {
            Route::get('/add', [ReturnAndRefundController::class, 'index'])->name('return.add');
            Route::post('/new', [ReturnAndRefundController::class, 'create'])->name('return.new');
            Route::get('/manage', [ReturnAndRefundController::class, 'manage'])->name('return.manage');
            Route::get('/edit/{id}', [ReturnAndRefundController::class, 'edit'])->name('return.edit');
            Route::post('/update', [ReturnAndRefundController::class, 'update'])->name('return.update');
            Route::post('/delete/{id}', [ReturnAndRefundController::class, 'delete'])->name('return.delete');
        });

        Route::prefix('general-settings')->group(function () {
            Route::get('/add', [GeneralSettingController::class, 'index'])->name('setting.add');
            Route::post('/new', [GeneralSettingController::class, 'create'])->name('setting.new');
            Route::get('/manage', [GeneralSettingController::class, 'manage'])->name('setting.manage');
            Route::get('/edit/{id}', [GeneralSettingController::class, 'edit'])->name('setting.edit');
            Route::post('/update', [GeneralSettingController::class, 'update'])->name('setting.update');
            Route::post('/delete/{id}', [GeneralSettingController::class, 'delete'])->name('setting.delete');
        });

        Route::prefix('about-us')->group(function () {
            Route::get('/index', [AboutUsController::class, 'index'])->name('about-us.index');
            Route::post('/new', [AboutUsController::class, 'create'])->name('about-us.new');
        });

        Route::prefix('service')->group(function () {
            Route::get('/index', [ServiceController::class, 'index'])->name('service.index');
            Route::post('/store', [ServiceController::class, 'store'])->name('service.store');
            Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
            Route::post('/update/{id}', [ServiceController::class, 'update'])->name('service.update');
            Route::get('/destroy/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
        });

        Route::prefix('brand')->group(function () {
            Route::get('/index', [BrandController::class, 'index'])->name('brand.index');
            Route::post('/store', [BrandController::class, 'store'])->name('brand.store');
            Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
            Route::post('/update/{id}', [BrandController::class, 'update'])->name('brand.update');
            Route::get('/destroy/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');
        });

        Route::prefix('service-area')->group(function () {
            Route::get('/index', [ServiceAreaController::class, 'index'])->name('service-area.index');
            Route::post('/store', [ServiceAreaController::class, 'store'])->name('service-area.store');
            Route::get('/edit/{id}', [ServiceAreaController::class, 'edit'])->name('service-area.edit');
            Route::post('/update/{id}', [ServiceAreaController::class, 'update'])->name('service-area.update');
            Route::get('/destroy/{id}', [ServiceAreaController::class, 'destroy'])->name('service-area.destroy');
        });

        Route::prefix('blog-post')->group(function () {
            Route::get('/index', [BlogPostController::class, 'index'])->name('blog-post.index');
            Route::post('/store', [BlogPostController::class, 'store'])->name('blog-post.store');
            Route::get('/edit/{id}', [BlogPostController::class, 'edit'])->name('blog-post.edit');
            Route::post('/update/{id}', [BlogPostController::class, 'update'])->name('blog-post.update');
            Route::get('/destroy/{id}', [BlogPostController::class, 'destroy'])->name('blog-post.destroy');
        });

        Route::prefix('gallery-item')->group(function () {
            Route::get('/index', [GalleryItemController::class, 'index'])->name('gallery-item.index');
            Route::post('/store', [GalleryItemController::class, 'store'])->name('gallery-item.store');
            Route::get('/edit/{id}', [GalleryItemController::class, 'edit'])->name('gallery-item.edit');
            Route::post('/update/{id}', [GalleryItemController::class, 'update'])->name('gallery-item.update');
            Route::get('/destroy/{id}', [GalleryItemController::class, 'destroy'])->name('gallery-item.destroy');
        });

        Route::prefix('review')->group(function () {
            Route::get('/index', [ReviewController::class, 'index'])->name('review.index');
            Route::post('/store', [ReviewController::class, 'store'])->name('review.store');
            Route::get('/edit/{id}', [ReviewController::class, 'edit'])->name('review.edit');
            Route::post('/update/{id}', [ReviewController::class, 'update'])->name('review.update');
            Route::get('/destroy/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');
        });

        Route::prefix('faq')->group(function () {
            Route::get('/index', [FaqController::class, 'index'])->name('faq.index');
            Route::post('/store', [FaqController::class, 'store'])->name('faq.store');
            Route::get('/edit/{id}', [FaqController::class, 'edit'])->name('faq.edit');
            Route::post('/update/{id}', [FaqController::class, 'update'])->name('faq.update');
            Route::get('/destroy/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');
        });
    });
});
