<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HewanController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\adoptmeController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\TableUserController;
use App\Http\Controllers\FormUpdateController;
use App\Http\Controllers\dashboardadmController;

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

Route::get('/', [HewanController::class, 'index']);

// Route::get('/adoptme', function () {
//     return view('adoptme');
// });

Route::get('/signIn', [SigninController::class, 'index'])->name('signin');
Route::post('/signIn', [SigninController::class, 'signin']);

Route::post('/reportcreate', [reportController::class, "store"]);

Route::get('/signUp', [SignupController::class, 'index']);
Route::post('/register', [SignupController::class, 'create']);
Route::get('/logout', [SigninController::class, 'logout']);

// Route::get('/usertracking', function () {
//     return view('usertracking');
// });
Route::get('/usertracking', [adoptmeController::class, 'tracking']);

Route::group(['middleware' => ['auth', 'role:customer']], function () {
    Route::get('/dashboardcust', [HewanController::class, 'dashboardcust']);
    Route::resource('adoptme', adoptmeController::class);
    // Route::get('/adoptme', function () {
    //     return view('adoptme');
    // });
    // Route::post('/adoptcreate', [adoptmeController::class, "store"]);
    Route::get('/adoptme', [adoptmeController::class, "index"]);
});
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/dashboardadm', [dashboardadmController::class, 'index']);

    Route::get('/petedit/{id}', [HewanController::class, 'edit']);
    Route::put('/petupdate/{id}', [HewanController::class, 'update']);
    Route::post('/petcreate', [HewanController::class, 'store']);
    Route::put('/petdelete/{id}', [HewanController::class, 'destroy']);

    Route::post('/usercreate', [TableUserController::class, 'create']);
    Route::get('/useredit/{id}', [TableUserController::class, 'edit']);
    Route::put('/userupdate/{id}', [TableUserController::class, 'update']);
    Route::put('/userdelete/{id}', [TableUserController::class, 'destroy']);

    Route::get('/FormUpdate', [FormUpdateController::class, 'index']);

    Route::get('/Adoption', [adoptmeController::class, 'adm']);
    Route::get('/adoptedit/{id}', [adoptmeController::class, 'editadm']);
    Route::put('/adoptupdate/{id}', [adoptmeController::class, "update"]);
    // Route::get('/TableUser', [TableUserController::class, 'index']);
    Route::get('/TableUser', [TableUserController::class, 'table']);
    // Route::get('/TableUser', function () {
    //     return view('TableUser');
    // });

    // Route::resource('adoptme', adoptmeController::class);

    Route::get('/TablePet', [HewanController::class, 'table']);

    Route::get('/Report', [ReportController::class, 'index']);
    // Route::get('/Report', function () {
    //     return view('Report');
    // });

 

    // Route::get('/Profile', function () {
    //     return view('Profile');
    // });

    // Route::get('/Adoption', [AdoptionController::class, 'index']);
    // Route::get('/Adoption', function () {
    //     return view('Adoption');
    // });

    Route::get('/userhome', function () {
        return view('userhome');
    });

    Route::get('/petcreatepage', function () {
        return view('petcreate');
    });

    Route::get('/usercreatepage', function () {
        return view('usercreate');
    });
});

Route::get('/userprofile', function () {
    return view('userprofile');
});

// Route::get('/adoptme', function () {
//     return view('adoptme');
// });
