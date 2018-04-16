<?php

Route::group(['module' => 'CivilWorks', 'middleware' => ['api'], 'namespace' => 'App\Modules\CivilWorks\Controllers'], function() {

    Route::resource('CivilWorks', 'CivilWorksController');

});
