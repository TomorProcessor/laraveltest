<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test_asd/{asdval}', function ($asdval) {
    $uri = "test_asd/{$asdval}";

    /**
     * 5 másodpercig cache-el, cache lejáratkor hívja a függvényt,
     * benne a use-al van megadva, hogy a kinti változó belül látszódjon
     */
    $post = cache()->remember($asdval, 5, function () use ($uri) {
        print $uri;
    });

//    \Illuminate\Support\Facades\DB::listen(function ($query) {
//        logger($query->sql, $query->bindings);
//    });

    //asdval nevű blade, $array változó átadva neki
    return view('asdval', ['array' => [0, 1, 2, 3, 4, 5], 'users' => \App\Models\User::all()]);
})->where('asdval', '[A-z]');

Route::get('reg', [\App\Http\Controllers\RegistrationController::class, 'create'])->middleware('guest');
Route::post('reg', [\App\Http\Controllers\RegistrationController::class, 'store'])->middleware('guest');

Route::get('login', [\App\Http\Controllers\SessionController::class, 'create'])->middleware('guest');
Route::post('login', [\App\Http\Controllers\SessionController::class, 'login'])->middleware('guest');
Route::get('logout', [\App\Http\Controllers\SessionController::class, 'logout'])->middleware('auth');
