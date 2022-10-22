<?php


use Illuminate\Http\Request;
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



Route::get('/', function () {
    return view('index');
});
Route::get('/message', function (Request $request) {
    $request->validate([
        'email'                 => ['required', 'string'],
        'subject'               => ['required', 'string'],
        'message'               => ['required', 'string'],
        'g-recaptcha-response'  => 'required|captcha'
    ]);
    mail(env("EMAIL"), "Správa zo stránky Narcis",
        "Od: ". $request->email ."\n"."Predmet: ".$request->subject."\n"."Správa: ". $request->message );
});

