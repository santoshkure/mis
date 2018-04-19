<?php

Route::group(['module' => 'ProjectMgt', 'middleware' => ['web', 'auth'], 'namespace' => 'App\Modules\ProjectMgt\Controllers'], function() {

    Route::resource('pm', 'ProjectMgtController');


    Route::get('projectInitiation', function () {
        return view('ProjectMgt::projectInitiation');
    })->name('projectInitiation');

    Route::get('projectInitiation/create', function () {
        return view('ProjectMgt::createProjectInitiation');
    })->name('createProjectInitiation');

});

