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

    //asdval nevű blade, $array változó átadva neki
    return view('asdval', ['array' => [0, 1, 2, 3, 4, 5]]);
})->where('asdval', '[A-z]');
