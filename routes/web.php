<?php

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

Route::get('/','IndexController@index')->name('home');

Route::get('/portfolios', 'StateController@index')->name('states');

Route::get('/abityrient', 'ApplicantController@index')->name('applicants');
Route::get('/ogoloshenya', 'AnnouncementController@index')->name('announcements');
Route::get('/diplomnikam', 'StudyController@index')->name('studies');
Route::get('/articles', 'PostController@index')->name('posts');
Route::get('/articles/{slug}', 'PostController@show')->name('single-post');
Route::get('/publikacii', 'PublicationController@index')->name('publications');
Route::get('/contacts', 'ContactController@index')->name('contacts');
//*********************************************************
Route::get('/foto', 'PhotoController@index')->name('photo');
Route::get('ajaxRequest', 'ScienceController@ajaxRequestPost');

Route::get('/studnayka', 'ScienceController@index')->name('science');

Route::get('/updated-activity', 'TelegramBotController@updatedActivity');
Route::get('/science/{slug}', ['uses' => 'PageController@index'])->name('pages');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
