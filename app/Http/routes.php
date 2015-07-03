<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Exercise\Smartphone;
use App\Exercise\Processor;
use App\Exercise\Display;
use App\Exercise\Camera;
use App\Exercise\Battery;

Route::get('/', 'WelcomeController@index');

/*
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

$sm = new Smartphone('Sone Xperia New', new Processor('Qualcomm 801', '8 cores'), new Display('1024x768 display'), new Camera('12 megapixel camera'), new Battery('1500 mAh capacity'));
App::instance('Smartphone', $sm);


Route::get('/phone', function() {
	//dd(App::make('Smartphone'));
	//dd(app('Smartphone'));
	$smart = App::make('Smartphone');
	echo $smart->name.', '.$smart->processor->vendor.' - '.$smart->processor->cores.', '.$smart->display->resolution.', '.$smart->camera->mpixels.', '.$smart->battery->capacity;
});

Route::get('/shorten', function() {
	$arr = Bitly::shorten('https://www.google.com.ua/search?q=binary+studio+academy&oq=binary+studio+academy&aqs=chrome..69i57.6175j0j1&sourceid=chrome&es_sm=122&ie=UTF-8');
	echo $arr['data']['url'];
});