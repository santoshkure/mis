<?php

Route::group(['module' => 'ConsultancySrv', 'middleware' => ['web'], 'namespace' => 'App\Modules\ConsultancySrv\Controllers'], function() {

    Route::resource('consultancy', 'ConsultancySrvController');

});
