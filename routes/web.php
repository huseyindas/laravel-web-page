<?php


use App\Http\Controllers\AbaoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardAbaoutController;
use App\Http\Controllers\DashboardChangePasswordController;
use App\Http\Controllers\DashboardCommentController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardContactFormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardCounterController;
use App\Http\Controllers\DashboardFaviconController;
use App\Http\Controllers\DashboardFooterController;
use App\Http\Controllers\DashboardMapController;
use App\Http\Controllers\DashboardProductsController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardProjectsController;
use App\Http\Controllers\DashboardRefDescController;
use App\Http\Controllers\DashboardReferanceController;
use App\Http\Controllers\DashboardServicesController;
use App\Http\Controllers\DashboardSliderController;
use App\Http\Controllers\DashboardVideoBarController;
use App\Http\Controllers\FooterLogoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\TopBarController;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [HomepageController::class, "index"]);


Route::get("/abaout", [AbaoutController::class, "index"])->name("abaout");
Route::get("/services", [ServicesController::class, "index"])->name("services");
Route::get("/projects", [ProjectsController::class, "index"])->name("projects");
Route::get("/products", [ProductsController::class, "index"])->name("products");
Route::get("/contact", [ContactController::class, "index"])->name("contact");
Route::post('/send', [DashboardContactFormController::class, "store"]);

Auth::routes();

Route::group(['middleware' => ['admin']], function () {

});

Route::group(['middleware' => ['auth']], function () {
    Route::resource("/dashboard", DashboardController::class);
    Route::resource("/dashboard-logo", LogoController::class);
    Route::resource("/dashboard-top-bar", TopBarController::class);
    Route::resource("/dashboard-social-media", SocialMediaController::class);
    Route::resource("/dashboard-menu", MenuController::class);
    Route::resource("/dashboard-abaout", DashboardAbaoutController::class);
    Route::resource("/dashboard-comment", DashboardCommentController::class);
    Route::resource("/dashboard-contact", DashboardContactController::class);
    Route::resource("/dashboard-counter", DashboardCounterController::class);
    Route::resource("/dashboard-footer", DashboardFooterController::class);
    Route::resource("/dashboard-referances", DashboardReferanceController::class);
    Route::resource("/dashboard-services", DashboardServicesController::class);
    Route::resource("/dashboard-slider", DashboardSliderController::class);
    Route::resource("/dashboard-video-bar", DashboardVideoBarController::class);
    Route::resource("/dashboard-footer-logo", FooterLogoController::class);
    Route::resource("/dashboard-ref-desc", DashboardRefDescController::class);
    Route::resource("/dashboard-contact-form", DashboardContactFormController::class);
    Route::resource("/dashboard-projects", DashboardProjectsController::class);
    Route::resource("/dashboard-products", DashboardProductsController::class);
    Route::resource("/dashboard-maps", DashboardMapController::class);
    Route::resource("/dashboard-favicon", DashboardFaviconController::class);
    Route::resource("/dashboard-profile", DashboardProfileController::class);
    Route::resource("/dashboard-password", DashboardChangePasswordController::class);




});
