<?php

Route::group(['module' => 'Adminstrator', 'middleware' => ['api'], 'namespace' => 'App\Modules\Adminstrator\Controllers'], function() {

    Route::resource('Adminstrator', 'AdminstratorController');

});
