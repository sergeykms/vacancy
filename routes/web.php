<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function ()  {
    return view('home');
});

Route::get('/vacancies', function () {
    return view('vacancies', [
        'vacancies' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$500'
            ],
            [
                'id' => 2,
                'title' => 'Designer',
                'salary' => '$1000'
            ],
            [
                'id' => 3,
                'title' => 'Production Manager',
                'salary' => '$1500'
            ],
        ]
    ]);
});

Route::get('/vacancies/{id}', function ($id) {
    $vacancies = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$500'
        ],
        [
            'id' => 2,
            'title' => 'Designer',
            'salary' => '$1000'
        ],
        [
            'id' => 3,
            'title' => 'Production Manager',
            'salary' => '$1500'
        ],
    ];
    $vacancy = Arr::first($vacancies, fn ($item) => $item['id'] == $id);
    return view('vacancy', ['vacancy' => $vacancy]);
});

Route::get('/contact', function () {
    return view('contact');
});
