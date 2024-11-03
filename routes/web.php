<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdf', function () {

    $pdf = PDF::loadView('template', [], [], [
        'margin_top' => 0,
        'margin_right' => 0,
        'margin_bottom' => 0,
        'margin_left' => 0,
        'format' => [212, 277],
        'curlAllowUnsafeSslRequests' => true,
        'custom_font_dir' => base_path('resources/fonts/'),
        'custom_font_data' => [
            'inter' => [
                'R' => 'Inter-Regular.ttf',
                'B' => 'Inter-Bold.ttf',
            ]
            ],
        'default_font' => 'inter'
    ]);
    return $pdf->stream('document.pdf');
});