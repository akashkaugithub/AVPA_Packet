<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Routes for Admin Panel //
Route::get('/admin-login', function () {
    return view('admin.admin-login');
})->name('login');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/admin-login')->with('success', 'Logged out successfully!');
})->name('logout');


Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');

// Routes For Teams
Route::get('/teams-management', [AdminController::class, 'TeamsManagement'])->name('admin.teams.management');
Route::post('/create', [AdminController::class, 'storeTeams']);
Route::post('/update/{id}', [AdminController::class, 'updateTeams']);
Route::post('/delete/{id}', [AdminController::class, 'destroyTeams']);
Route::post('/change-status/{id}/{status}', [AdminController::class, 'changeStatusTeams']);
Route::get('/user/{id}', [AdminController::class, 'getUser']);

// Routes For Get In touch
Route::get('/get-in-touch', [AdminController::class, 'GetInTouch'])->name('admin.get.in.touch');
Route::post('/admin/get-in-touch/store', [AdminController::class, 'storeGetInTouch'])->name('getInTouch.store');
Route::post('/admin/get-in-touch/update/{id}', [AdminController::class, 'updateGetInTouch'])->name('getInTouch.update');
Route::delete('/admin/get-in-touch/delete/{id}', [AdminController::class, 'deleteGetInTouch'])->name('getInTouch.delete');
// Routes For Get In touch

// Routes For Testimonial
Route::get('/testimonial-management', [AdminController::class, 'TestimonialManagement'])->name('admin.testimonial.management');
Route::post('testimonials', [AdminController::class, 'storeTestimonial'])->name('admin.testimonials.store');
Route::post('testimonials/{testimonial}', [AdminController::class, 'updateTestimonial'])->name('admin.testimonials.update');
Route::delete('testimonials/{testimonial}', [AdminController::class, 'destroyTestimonial'])->name('admin.testimonials.destroy');
// Routes For Testimonial


// Route For Trusted Project
Route::get('/trusted-projects', [AdminController::class, 'TrustedProjects'])->name('admin.trusted.project');
Route::post('/trusted-projects/store', [AdminController::class, 'storeTrustedProject'])->name('trusted-projects.store');
Route::post('/trusted-projects/update/{id}', [AdminController::class, 'updateTrustedProject'])->name('trusted-projects.update');
Route::delete('/trusted-projects/delete/{id}', [AdminController::class, 'destroyTrustedProject'])->name('trusted-projects.destroy');
// Route For Trusted Project

// Route For About us
Route::get('/admin-about-us', [AdminController::class, 'AdminAboutUs'])->name('admin.about.us');
Route::post('/update-about-us', [AdminController::class, 'updateAboutUs'])->name('update.aboutUs');
// Route For About us


// Routes For Privacy policy
Route::get('/admin-privacy-terms', [AdminController::class, 'privacyTerms'])->name('admin.privacy.terms');
Route::post('/update-privacy-terms', [AdminController::class, 'updatePrivacyTerms'])->name('update.privacyTerms');
// Routes For Privacy policy

// Routes For Gallery
Route::get('/gallery-management', [AdminController::class, 'GalleryManagement'])->name('admin.gallery.management');
Route::post('/admin/gallery-management/store', [AdminController::class, 'storeGallery'])->name('gallery.store');
Route::delete('/admin/gallery/{id}', [AdminController::class, 'deleteGallery'])->name('gallery.delete');

// Routes For Gallery

// Routes For Industries
Route::get('/industries-management', [AdminController::class, 'IndsutriesManagement'])->name('admin.industries.management');
Route::post('/create-industries', [AdminController::class, 'storeIndustries']);
Route::post('/update-industries/{id}', [AdminController::class, 'updateIndustries']);
Route::post('/delete-industries/{id}', [AdminController::class, 'destroyIndustries']);
Route::post('/change-status-industries/{id}/{status}', [AdminController::class, 'changeStatusIndustries']);
Route::get('/user-industries/{id}', [AdminController::class, 'getIndustries']);

// Routes For Service Management
Route::get('/service-management', [AdminController::class, 'ServiceManagement'])->name('admin.service.management');
Route::post('/create-service', [AdminController::class, 'storeService']);
Route::post('/update-service/{id}', [AdminController::class, 'updateService']);
Route::post('/delete-service/{id}', [AdminController::class, 'destroyService']);
Route::post('/change-status-service/{id}/{status}', [AdminController::class, 'changeStatusService']);
Route::get('/user-service/{id}', [AdminController::class, 'getService']);

// Routes For Address Management
Route::get('/address-management', [AdminController::class, 'AddressManagement'])->name('admin.address.management');
Route::post('/create-address', [AdminController::class, 'storeAddress']);
Route::post('/update-address/{id}', [AdminController::class, 'updateAddress']);
Route::post('/delete-address/{id}', [AdminController::class, 'destroyAddress']);
Route::post('/change-status-address/{id}/{status}', [AdminController::class, 'changeStatusAddress']);
Route::get('/user-address/{id}', [AdminController::class, 'getAddress']);

// Routes For News Room
Route::get('/news-room-management', [AdminController::class, 'NewsManagement'])->name('admin.news.management');
Route::post('/create-news-room', [AdminController::class, 'storeNews']);
Route::post('/update-news/{id}', [AdminController::class, 'updateNews']);
Route::post('/delete-news/{id}', [AdminController::class, 'destroyNews']);
Route::post('/change-status-news/{id}/{status}', [AdminController::class, 'changeStatusNews']);
Route::get('/news/{id}', [AdminController::class, 'getNews']);

// Routes For Quick Links 
Route::get('/quick-links-management', [AdminController::class, 'QuickLinksManagement'])->name('admin.quick.link.management');
Route::post('/create-quick-links', [AdminController::class, 'storeQuickLinks']);
Route::post('/update-quick-links/{id}', [AdminController::class, 'updateQuickLinks']);
Route::post('/delete-quick-links/{id}', [AdminController::class, 'destroyQuickLinks']);
Route::post('/change-status-quick-links/{id}/{status}', [AdminController::class, 'changeStatusQuickLinks']);
Route::get('/quick-links/{id}', [AdminController::class, 'getQuickLinks']);

Route::get('/admin-logout', [AdminController::class, 'adminLogout'])->name('admin.logout');

// End Routes for Admin Panel //

// routes for website //
Route::get('/', [HomeController::class, 'Home']);
Route::get('/about-us', [HomeController::class, 'About_Us']);
Route::get('/our-services', [HomeController::class, 'OurService']);
Route::get('/our-team', [HomeController::class, 'OurTeam']);
Route::get('/contact-us', [HomeController::class, 'ContactUs']);
Route::post('/contact', [HomeController::class, 'storeContact'])->name('contact.store');

Route::get('/taxation', [HomeController::class, 'Taxations']);
Route::get('/audit-&-assurance', [HomeController::class, 'AuditAssurance']);
Route::get('/business-setup', [HomeController::class, 'BusinessSetup']);
Route::get('/accounting-outsourcing', [HomeController::class, 'AccountingOutsourcing']);
Route::get('/advisory-consulting', [HomeController::class, 'AdvisoryConsulting']);
Route::get('/industries', [HomeController::class, 'Industries']);
Route::get('/privacy-policy', [HomeController::class, 'PrivacyPolicy']);
Route::get('/term-condition', [HomeController::class, 'TermCondition']);
Route::get('/news-room', [HomeController::class, 'NewsRoom']);
Route::get('/quick-links', [HomeController::class, 'QuickLink']);






