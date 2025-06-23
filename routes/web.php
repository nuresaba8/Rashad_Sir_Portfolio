<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContributionToBASISController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InternationalController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TVShowsController;
use Illuminate\Support\Facades\Route;


// ******Admin*******

Route::get('/admin/login', [AdminController::class, 'loginGet'])->name('admin.loginGet');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/home', [AdminController::class, 'dashboard'])->middleware('auth:admin');



// ******Admin/Home*******

Route::middleware('auth:admin')->prefix('admin/home')->name('home.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');            // List all profiles
    Route::get('/create', [DashboardController::class, 'create'])->name('create');    // Show form to create
    Route::post('/create', [DashboardController::class, 'store'])->name('store');     // Save new profile

    Route::get('/edit/{home}', [DashboardController::class, 'edit'])->name('edit'); // Show form to edit
    Route::post('/edit/{home}', [DashboardController::class, 'update'])->name('update'); // Update profile

    Route::post('/{home}/toggle-status', [DashboardController::class, 'toggleStatus'])->name('toggleStatus'); // Toggle active/inactive status

    Route::get('/{home}', [DashboardController::class, 'show'])->name('show');       // Show single profile detail
    Route::delete('/{home}', [DashboardController::class, 'destroy'])->name('destroy'); // Delete profile
});



// ******Admin/Experience*******

Route::middleware('auth:admin')->prefix('admin/dashboard/experiences')->name('experiences.')->group(function () {
    Route::get('/', [ExperienceController::class, 'index'])->name('index');
    Route::get('/create', [ExperienceController::class, 'create'])->name('create');
    Route::post('/create', [ExperienceController::class, 'store'])->name('store');

    Route::get('/edit/{experience}', [ExperienceController::class, 'edit'])->name('edit');
    Route::post('/edit/{experience}', [ExperienceController::class, 'update'])->name('update');

    Route::post('/{experience}/toggle-status', [ExperienceController::class, 'toggleStatus'])->name('toggleStatus');

    Route::get('/{experience}', [ExperienceController::class, 'show'])->name('show');
    Route::delete('/{experience}', [ExperienceController::class, 'destroy'])->name('destroy');
});


// ******Admin/Article*******

Route::middleware('auth:admin')->prefix('admin/dashboard/articles')->name('articles.')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('index');
    Route::get('/create', [ArticleController::class, 'create'])->name('create');
    Route::post('/create', [ArticleController::class, 'store'])->name('store');

    Route::get('/edit/{article}', [ArticleController::class, 'edit'])->name('edit');
    Route::post('/edit/{article}', [ArticleController::class, 'update'])->name('update');

    Route::post('/{article}/toggle-status', [ArticleController::class, 'toggleStatus'])->name('toggleStatus');

    Route::get('/{article}', [ArticleController::class, 'show'])->name('show');
    Route::delete('/{article}', [ArticleController::class, 'destroy'])->name('destroy');
});


// ******Admin/ContributionToBasis*******

Route::middleware('auth:admin')->prefix('admin/dashboard/contributionToBasis')->name('contributionToBasis.')->group(function () {
    Route::get('/', [ContributionToBASISController::class, 'index'])->name('index');
    Route::get('/create', [ContributionToBASISController::class, 'create'])->name('create');
    Route::post('/create', [ContributionToBASISController::class, 'store'])->name('store');

    Route::get('/edit/{contribution}', [ContributionToBASISController::class, 'edit'])->name('edit');
    Route::post('/edit/{contribution}', [ContributionToBASISController::class, 'update'])->name('update');

    Route::post('/{contribution}/toggle-status', [ContributionToBASISController::class, 'toggleStatus'])->name('toggleStatus');

    Route::get('/{contribution}', [ContributionToBASISController::class, 'show'])->name('show');
    Route::delete('/{contribution}', [ContributionToBASISController::class, 'destroy'])->name('destroy');
});


// ******Admin/TVShows*******

Route::middleware('auth:admin')->prefix('admin/dashboard/tvShows')->name('tvShows.')->group(function () {
    Route::get('/', [TVShowsController::class, 'index'])->name('index');
    Route::get('/create', [TVShowsController::class, 'create'])->name('create');
    Route::post('/create', [TVShowsController::class, 'store'])->name('store');

    Route::get('/edit/{tvShow}', [TVShowsController::class, 'edit'])->name('edit');
    Route::post('/edit/{tvShow}', [TVShowsController::class, 'update'])->name('update');

    Route::post('/{tvShow}/toggle-status', [TVShowsController::class, 'toggleStatus'])->name('toggleStatus');

    Route::get('/{tvShow}', [TVShowsController::class, 'show'])->name('show');
    Route::delete('/{tvShow}', [TVShowsController::class, 'destroy'])->name('destroy');
});


// ******Admin/News*******

Route::middleware('auth:admin')->prefix('admin/dashboard/news')->name('news.')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('index');
    Route::get('/create', [NewsController::class, 'create'])->name('create');
    Route::post('/create', [NewsController::class, 'store'])->name('store');

    Route::get('/edit/{new}', [NewsController::class, 'edit'])->name('edit');
    Route::post('/edit/{new}', [NewsController::class, 'update'])->name('update');

    Route::post('/{new}/toggle-status', [NewsController::class, 'toggleStatus'])->name('toggleStatus');

    Route::get('/{new}', [NewsController::class, 'show'])->name('show');
    Route::delete('/{new}', [NewsController::class, 'destroy'])->name('destroy');
});



// ******Admin/International*******

Route::middleware('auth:admin')->prefix('admin/dashboard/internationals')->name('internationals.')->group(function () {
    Route::get('/', [InternationalController::class, 'index'])->name('index');
    Route::get('/create', [InternationalController::class, 'create'])->name('create');
    Route::post('/create', [InternationalController::class, 'store'])->name('store');

    Route::get('/edit/{international}', [InternationalController::class, 'edit'])->name('edit');
    Route::post('/edit/{international}', [InternationalController::class, 'update'])->name('update');

    Route::post('/{international}/toggle-status', [InternationalController::class, 'toggleStatus'])->name('toggleStatus');

    Route::get('/{international}', [InternationalController::class, 'show'])->name('show');
    Route::delete('/{international}', [InternationalController::class, 'destroy'])->name('destroy');
});



// ******Admin/Award*******

Route::middleware('auth:admin')->prefix('admin/dashboard/awards')->name('awards.')->group(function () {
    Route::get('/', [AwardController::class, 'index'])->name('index');
    Route::get('/create', [AwardController::class, 'create'])->name('create');
    Route::post('/create', [AwardController::class, 'store'])->name('store');

    Route::get('/edit/{award}', [AwardController::class, 'edit'])->name('edit');
    Route::post('/edit/{award}', [AwardController::class, 'update'])->name('update');

    Route::post('/{award}/toggle-status', [AwardController::class, 'toggleStatus'])->name('toggleStatus');

    Route::get('/{award}', [AwardController::class, 'show'])->name('show');
    Route::delete('/{award}', [AwardController::class, 'destroy'])->name('destroy');
});


// ******Admin/Contact*******

Route::prefix('admin/dashboard/contact')->middleware('auth:admin')->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');   // URL: /admin/dashboard/contact
    Route::get('/edit', [ContactController::class, 'edit'])->name('edit'); // URL: /admin/dashboard/contact/edit
    Route::post('/edit', [ContactController::class, 'update'])->name('update'); // form action
    Route::get('/view', [ContactController::class, 'show'])->name('show');
});




// ******Admin/Logout*******

Route::get('/admin/logout', [AdminController::class, 'logout'])->middleware('auth:admin');


// ******Admin/User*******

Route::get('/', [HomeController::class, 'index']);

Route::get('/experience', [HomeController::class, 'experience']);

Route::get('/articles', [HomeController::class, 'articles']);

Route::get('/contribution', [HomeController::class, 'contribution']);

Route::get('/tv_shows', [HomeController::class, 'tv_shows']);

Route::get('/news', [HomeController::class, 'news']);

Route::get('/international', [HomeController::class, 'international']);

Route::get('/awards', [HomeController::class, 'awards']);

Route::get('/contact', [HomeController::class, 'get']);

Route::post('/contact', [HomeController::class, 'send'])->name('contact.send');
