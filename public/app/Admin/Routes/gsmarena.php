<?php
$router->group(['prefix' => 'gsmarena'], function ($router) {
    $router->get('/', 'GsmArenaController@index')->name('admin_gsmarena.index');
    $router->get('/addProduct', 'GsmArenaController@addProduct')->name('admin_gsmarena.addProduct');
    $router->get('/getProduct/{id}', 'GsmArenaController@getProduct')->name('admin_gsmarena.getProduct');
    $router->post('/addAttribute', 'GsmArenaController@postAddAttribute')->name('admin_gsmarena.postAttrinute');

});
