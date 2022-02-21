<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/users', function () {
   $users = [];

   for ($i = 0; $i < 100000; $i++) {
       $faker = Faker\Factory::create();
       $users[] = [
           'id' => $faker->uuid(),
           'name' => $faker->name(),
           'email' => $faker->email(),
       ];
   }

   return response()->json($users);
});
