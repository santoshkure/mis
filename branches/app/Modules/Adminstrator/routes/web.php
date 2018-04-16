<?php

Route::group(['module' => 'Adminstrator', 'middleware' => ['web'], 'namespace' => 'App\Modules\Adminstrator\Controllers'], function() {

    Route::resource('admin', 'AdminstratorController');

});
