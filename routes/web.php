<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/register', 'RegisterController@method')->name('register');

// Only authenticated users may enter...


Auth::routes(); //DONOTREMOVE

/////////////////////////////////////////////////
Route::get('/', ['middleware' => 'auth', function() {
    return view('welcome');
}]);


Route::post('/', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

// Route::get('/contact',[ContactController::class, 'index']);


// Route::get('/sleep', [Controller::class, 'sleep']);

// Route::get('/sleep', 'App\Http\Controllers\Controller@sleep');


Route::get('/34eygrd/{id}/{name}', [UserController::class, 'show']);

Route::get('/54uhers/{id}/{name}', [UserController::class, 'show2']);

Route::get('/register', ['middleware' => 'auth', function() {
    return view('register');
}]);

// Route::get('/storm', ['middleware' => 'auth', function() {
//     return view('storm');
// }]);



Route::get('/sendemail', [UserController::class, 'emailview']);
Route::post('/sendemail/send', [UserController::class, 'send']);




Route::get('/storm/{name}', [UserController::class, 'index']);

// Route::get('/contact', ['middleware' => 'auth', function() {
//     return view('contact');
// }]);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/completion', function () {
    return view('completion');
});



Route::get('/aodaquiz1', ['middleware' => 'auth', function() {
    return view('aodaquiz1');
}]);

Route::get('/aodaquiz2', ['middleware' => 'auth', function() {
    return view('aodaquiz2');
}]);

Route::get('/aodaquiz3', ['middleware' => 'auth', function() {
    return view('aodaquiz3');
}]);

Route::get('/aodaquiz4', ['middleware' => 'auth', function() {
    return view('aodaquiz4');
}]);

Route::get('/aodaquiz5', ['middleware' => 'auth', function() {
    return view('aodaquiz5');
}]);

Route::get('/aodaquiz6', ['middleware' => 'auth', function() {
    return view('aodaquiz6');
}]);

Route::get('/aodaquiz7', ['middleware' => 'auth', function() {
    return view('aodaquiz7');
}]);

Route::get('/aodaquiz8', ['middleware' => 'auth', function() {
    return view('aodaquiz8');
}]);

Route::get('/aodaquiz9', ['middleware' => 'auth', function() {
    return view('aodaquiz9');
}]);

Route::get('/aodaquiz10', ['middleware' => 'auth', function() {
    return view('aodaquiz10');
}]);


Route::get('/aodainfo', ['middleware' => 'auth', function() {
    return view('aodainfo');
}]);

Route::get('/whmisinfo', ['middleware' => 'auth', function() {
    return view('whmisinfo');
}]);

Route::get('/whmisquiz1', ['middleware' => 'auth', function() {
    return view('whmisquiz1');
}]);

Route::get('/whmisquiz2', ['middleware' => 'auth', function() {
    return view('whmisquiz2');
}]);

Route::get('/whmisquiz3', ['middleware' => 'auth', function() {
    return view('whmisquiz3');
}]);

Route::get('/whmisquiz4', ['middleware' => 'auth', function() {
    return view('whmisquiz4');
}]);

Route::get('/whmisquiz5', ['middleware' => 'auth', function() {
    return view('whmisquiz5');
}]);

Route::get('/whmisquiz6', ['middleware' => 'auth', function() {
    return view('whmisquiz6');
}]);

Route::get('/whmisquiz7', ['middleware' => 'auth', function() {
    return view('whmisquiz7');
}]);

Route::get('/whmisquiz8', ['middleware' => 'auth', function() {
    return view('whmisquiz8');
}]);

Route::get('/whmisquiz9', ['middleware' => 'auth', function() {
    return view('whmisquiz9');
}]);

Route::get('/whmisquiz10', ['middleware' => 'auth', function() {
    return view('whmisquiz10');
}]);

Route::get('/whmisquiz11', ['middleware' => 'auth', function() {
    return view('whmisquiz11');
}]);

Route::get('/whmisquiz12', ['middleware' => 'auth', function() {
    return view('whmisquiz12');
}]);

Route::get('/whmisquiz13', ['middleware' => 'auth', function() {
    return view('whmisquiz13');
}]);

Route::get('/whmisquiz14', ['middleware' => 'auth', function() {
    return view('whmisquiz14');
}]);

Route::get('/whmisquiz15', ['middleware' => 'auth', function() {
    return view('whmisquiz15');
}]);

Route::get('/whmisquiz16', ['middleware' => 'auth', function() {
    return view('whmisquiz16');
}]);

Route::get('/whmisquiz17', ['middleware' => 'auth', function() {
    return view('whmisquiz17');
}]);

Route::get('/whmisquiz18', ['middleware' => 'auth', function() {
    return view('whmisquiz18');
}]);

Route::get('/whmisquiz19', ['middleware' => 'auth', function() {
    return view('whmisquiz19');
}]);

Route::get('/whmisquiz20', ['middleware' => 'auth', function() {
    return view('whmisquiz20');
}]);

Route::get('/whmisquiz21', ['middleware' => 'auth', function() {
    return view('whmisquiz21');
}]);

Route::get('/whmisquiz22', ['middleware' => 'auth', function() {
    return view('whmisquiz22');
}]);

Route::get('/whmisquiz23', ['middleware' => 'auth', function() {
    return view('whmisquiz23');
}]);

Route::get('/whmisquiz24', ['middleware' => 'auth', function() {
    return view('whmisquiz24');
}]);

Route::get('/whmisquiz25', ['middleware' => 'auth', function() {
    return view('whmisquiz25');
}]);