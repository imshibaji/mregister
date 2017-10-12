<?php

Route::group(['prefix' => '/admin', 'middleware' => ['web','auth']], function () {

  Route::resource('leads', 'Medust\Leads\Controllers\LeadsController');

});
