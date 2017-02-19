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

Route::get('/', 'HomeController@welcome');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/thankyou', 'HomeController@thankyou');

/*
 * Belle-idee
 */
Route::get('/belle-idee/about', 'HomeController@idee');


/*
 * Belle-creatori
 */
Route::get('/belle-creatori' , 'HomeController@creatori');
Route::post('/creatori/invite' , 'HomeController@storeCreatoriInvite');


/*
 * Bella-studenti
 */
Route::get('/bella-studenti' ,'HomeController@studenti');
Route::post('/studenti/invite' ,'HomeController@storeStudentiInvite');
