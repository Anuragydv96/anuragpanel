<?php

use Illuminate\Support\Facades\Route;
use App\Mail\CloudHostingProduct;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;



Route::get('/', function () {
    return view('welcome');
});

Route::get('command', function () {
    Artisan::call('make:controller EmailController');
    dd("Done");
});

Route::get('send-email', function(){
    $mailData = [
        "name" => "Test NAME",
        "dob" => "12/12/1990"
    ];

    Mail::to("saniku251@gmail.com")->send(new CloudHostingProduct($mailData));

    dd("Mail Sent Successfully!");
});