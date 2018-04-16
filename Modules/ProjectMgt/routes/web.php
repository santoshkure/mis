<?php

Route::group(['module' => 'ProjectMgt', 'middleware' => ['web'], 'namespace' => 'App\Modules\ProjectMgt\Controllers'], function() {

    Route::resource('pm', 'ProjectMgtController');

});
