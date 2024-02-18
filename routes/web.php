<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployesController;

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
    return view('welcome');
});




Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/employes', [EmployesController::class, 'index'])->name('employes.index');
    Route::get('/employes/create', [EmployesController::class, 'create'])->name('employes.create');
    Route::post('/employes/store', [EmployesController::class, 'store'])->name('employes.store');

    Route::get('/employes/{registration_number}', [EmployesController::class, 'show'])->name('employes.show');

    Route::get('/employes/{registration_number}/edit', [EmployesController::class, 'edit'])->name('employes.edit');
    Route::put('/employes/{registration_number}', [EmployesController::class, 'update'])->name('employes.update');

    Route::delete('/employes/{registration_number}', [EmployesController::class, 'destroy'])->name('employes.destroy');

    Route::get('/employees/{registration_number}', [EmployesController::class, 'vacationRequest'])
    ->name('employees.vacation-request');


    Route::get('user/{registration_number}', [EmployesController::class, 'certificateRequest'])
    ->name('user.certificate-request');


    // Add other routes here if needed
});








