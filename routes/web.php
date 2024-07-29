<?php

use App\Models\Vacancy;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/vacancies', function () {
    $vacancies = Vacancy::with('employer')->latest()->paginate(5);
//    $vacancies = Vacancy::all();

    return view('vacancies.index', [
        'vacancies' => $vacancies
    ]);
});

Route::get('/vacancies/create', function () {
    return view('/vacancies/create');
});

Route::get('/vacancies/{id}', function ($id) {
    $vacancy = Vacancy::find($id);
    return view('vacancies.show', ['vacancy' => $vacancy]);
});

Route::post('/vacancies', function () {
    request()->validate([
        'title' => ['required', 'string', 'min:5', 'max:255'],
        'salary' => ['required'],
    ]);

    Vacancy::create([
        'title' => request()->input('title'),
        'salary' => request()->input('salary'),
        'employer_id' => 1
    ]);
    return redirect('/vacancies');
});


Route::get('/vacancies/{id}/edit', function ($id) {
    $vacancy = Vacancy::find($id);
    return view('vacancies.edit', ['vacancy' => $vacancy]);
});

Route::patch('/vacancies/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'string', 'min:5', 'max:255'],
        'salary' => ['required'],
    ]);

    $vacancy = Vacancy::findOrFail($id);

    $vacancy->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]
    );

    return redirect('/vacancies/' .$vacancy->id);
});

Route::delete('/vacancies/{id}', function ($id) {
    Vacancy::findOrFail($id)->delete();;
//    $vacancy->delete();
    return redirect('/vacancies');
});

Route::get('/contact', function () {
    return view('contact');
});
