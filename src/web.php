<?php
Route::group(['middleware' => ['web']], function () {
    Route::group(['middleware' => 'auth.pages'], function () {
        Route::get('/admin/newsletters/all', 'Tsawler\Phpackage\NewsletterController@getAll');
        Route::get('/admin/newsletters/item', 'Tsawler\Phpackage\NewsletterController@getEdit');
        Route::post('/admin/newsletters/item', 'Tsawler\Phpackage\NewsletterController@postEdit');
        Route::get('/admin/newsletters/delete', 'Tsawler\Phpackage\NewsletterController@delete');
    });
});
