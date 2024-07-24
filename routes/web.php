<?php

use App\Models\Vacancy;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/vacancies', function () {
    $vacancies = Vacancy::with('employer')->paginate(5);
//    $vacancies = Vacancy::all();

    return view('vacancies', [
        'vacancies' => $vacancies
    ]);
});

Route::get('/vacancies/{id}', function ($id) {

    $vacancy = Vacancy::find($id);
    return view('vacancy', ['vacancy' => $vacancy]);
});

Route::get('/contact', function () {
    return view('contact');
});
