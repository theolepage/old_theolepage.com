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

Auth::routes();

// Laboratory
Route::group(['namespace' => 'Laboratory'], function () {
    Route::get('/', 'ProjectsController@index')->name('projects.index');
    Route::get('/lab/{name}', 'ProjectsController@show')->name('projects.show');
});

// Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::group(['namespace' => 'Laboratory\Admin'], function () {
        Route::resource('projects', 'ProjectsController');
        Route::resource('categories', 'CategoriesController');
        Route::resource('contributors', 'ContributorsController');
    });

    Route::group(['namespace' => 'Settings\Admin', 'as' => 'settings'], function () {
        Route::get('/settings', 'SettingsController@edit');
        Route::post('/settings', 'SettingsController@update');
    });
});


// Resume
Route::get('/resume', function () {
    return view('resume.resume');
});

// Route::group(['namespace' => 'Resume', 'as' => 'resume'], function () {
//     Route::get('/resume', 'ResumeController@page');
// });