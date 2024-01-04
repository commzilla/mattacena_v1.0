<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
use App\Http\Controllers\Frontend\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'index'])->name('home.index');
Route::get('/la_nostra_storia', [WelcomeController::class, 'laNostraStoria'])->name('la_nostra_storia');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/dove_siamo', [WelcomeController::class, 'DoveSiamo'])->name('dove_siamo');
Route::get('/menu_mattopiatto', [WelcomeController::class, 'MenuMattopiatto'])->name('menu_mattopiatto');
Route::get('/antipasti', [WelcomeController::class, 'Antipasti'])->name('antipasti');
Route::get('/stritte_fudde', [WelcomeController::class, 'StritteFudde'])->name('stritte_fudde');
Route::get('/i_nostri_primi', [WelcomeController::class, 'INostriPrimi'])->name('i_nostri_primi');
Route::get('/manzo', [WelcomeController::class, 'Manzo'])->name('manzo');
Route::get('/menu_bistecca', [WelcomeController::class, 'MenuBistecca'])->name('menu_bistecca');
Route::get('/i_nostri_ontorni', [WelcomeController::class, 'INostriOntorni'])->name('i_nostri_ontorni');
Route::get('/i_bere', [WelcomeController::class, 'IBere'])->name('i_bere');
Route::get('/prenotauntavolo', [WelcomeController::class, 'PrenotaUnTavolo'])->name('prenota_un_tavolo');
Route::get('/prenotauntavolo_form', [WelcomeController::class, 'PrenotaUnTavoloForm'])->name('prenota_un_tavolo_form');
Route::get('/prenotauntavolo_form_submit', [WelcomeController::class, 'PrenotaUnTavoloFormSubmit'])->name('prenota_un_tavolo_form_submit');



Route::get('/categories', [FrontendCategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [FrontendCategoryController::class, 'show'])->name('categories.show');
Route::get('/menus', [FrontendMenuController::class, 'index'])->name('menus.index');
Route::get('/reservation/step-one', [FrontendReservationController::class, 'stepOne'])->name('reservations.step.one');
Route::post('/reservation/step-one', [FrontendReservationController::class, 'storeStepOne'])->name('reservations.store.step.one');
Route::get('/reservation/step-two', [FrontendReservationController::class, 'stepTwo'])->name('reservations.step.two');
Route::post('/reservation/step-two', [FrontendReservationController::class, 'storeStepTwo'])->name('reservations.store.step.two');
Route::get('/thankyou', [WelcomeController::class, 'thankyou'])->name('thankyou');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/reservations', ReservationController::class);
});

require __DIR__ . '/auth.php';
