<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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
    return inertia("Home",[
        'csrf_token' =>csrf_token()
    ]);
});


/*Route::get('/', function () {
    return view('index');
});*/
Route::post('/message', function (Request $request) {

    $request->validate([
        'email'                 => ['required', 'string'],
        'subject'               => ['required', 'string'],
        'message'               => ['required', 'string'],
    ]);

    header('Content-Type: text/html; charset=utf-8');

    $headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n";
//    $headers .= 'Content-Transfer-Encoding: base64';
//
//    $subject = '=?UTF-8?B?' . base64_encode($request->subject) . '?=';
//
//    $message = base64_encode($request->message);


    mail(env("EMAIL"), "Správa zo stránky Narcis",
        "Od: ". $request->email ."\n"."Predmet: ".$request->subject."\n"."Správa: ". $request->message );
})->middleware('recaptcha');

