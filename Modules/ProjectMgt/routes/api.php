<?php

Route::group(['module' => 'ProjectMgt', 'middleware' => ['api'], 'namespace' => 'App\Modules\ProjectMgt\Controllers'], function() {

    Route::resource('ProjectMgt', 'ProjectMgtController');

});
