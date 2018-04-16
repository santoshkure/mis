<?php

Route::group(['module' => 'ConsultancySrv', 'middleware' => ['api'], 'namespace' => 'App\Modules\ConsultancySrv\Controllers'], function() {

    Route::resource('ConsultancySrv', 'ConsultancySrvController');

});
