<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', 'home');

Route::get('/home', function () {
    return view('mila.home');
})->name('home');

Route::get('/lifestyle', function () {
    return view('mila.lifestyle');
})->name('lifestyle');

Route::get('/apartments', function () {
    return view('mila.apartments');
})->name('apartments');

Route::get('/gallery', function () {
    return view('mila.gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('mila.contact');
})->name('contact');

Route::get('category-apartment/mila-one', function () {
    return view('mila.category_apartment.mila_one');
})->name('mila_one');

Route::get('case/penthouse', function () {
    return view('mila.case.penthouse');
})->name('penthouse');

Route::get('category/car-insurance', function () {
    return view('mila.category.car_insurance');
})->name('category.car_insurance');

Route::group(['prefix' => 'tag', 'as' => 'tag.'], function () {
    Route::get('health', function () {
        return view('mila.tag.health');
    })->name('health');

    Route::get('insurance', function () {
        return view('mila.tag.insurance');
    })->name('insurance');

    Route::get('life', function () {
        return view('mila.tag.life');
    })->name('life');
});

Route::get('architecture-is-not-based-on-steel', function () {
    return view('mila.steel');
})->name('steel');

Route::get('author/atrchstudiogmail-com', function () {
    return view('mila.author.atrchstudiogmail-com');
})->name('atrch');
