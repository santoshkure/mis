<?php

Route::group(['module' => 'ProjectMgt', 'middleware' => ['web', 'auth'], 'namespace' => 'App\Modules\ProjectMgt\Controllers'], function() {

    Route::resource('pm', 'ProjectMgtController');

});
