<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\ContactFormController;
use App\Models\RoleRoute;

function getRoleName($routeName)
{
    $routesData = RoleRoute::where('route_name', $routeName)->get();
    $result = [];
    foreach ($routesData as $routeData) {
        array_push($result, $routeData->role_name);
    }
    return $result;
}
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


// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services/{slug}', [HomeController::class, 'serviceDetail'])->name('service.detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/brands', [HomeController::class, 'brands'])->name('brands');
Route::get('/service-areas', [HomeController::class, 'serviceAreas'])->name('service-areas');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class, 'blogDetail'])->name('blog.detail');

Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy.page');
Route::get('/conditions', [HomeController::class, 'condition'])->name('condition.page');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about.us');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact.us');

Route::post('/contact-form', [ContactFormController::class, 'submit'])->name('contact-form.submit');


Route::get('/error', function () {
    return view('errors.404');
});


