<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HewanController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hallo', function () {
//     echo "Hallo Word!";
// });

Route::get("/hewan", [HewanController::class, "index"])->name("Fonzz.index");

Route::delete("/hewan/{id}", [HewanController::class, "destroy"]);

Route::get("/hewan/create", [HewanController::class, "create"])->name("hewan.create");
Route::post("/hewan", [HewanController::class, "store"])->name("hewan.store");

Route::get("/hewan/{id}", [HewanController::class, "edit"]);
Route::put("/hewan/{id}", [HewanController::class, "update"])->name("hewan.update");