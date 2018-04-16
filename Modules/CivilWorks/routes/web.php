<?php

Route::group(['module' => 'CivilWorks', 'middleware' => ['web'], 'namespace' => 'App\Modules\CivilWorks\Controllers'], function() {

    Route::resource('civil', 'CivilWorksController');

});
