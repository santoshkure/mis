<?php

Route::group(['module' => 'Adminstrator', 'middleware' => ['web', 'auth'], 'namespace' => 'App\Modules\Adminstrator\Controllers'], function() {

    Route::resource('admin', 'AdminstratorController');

});
