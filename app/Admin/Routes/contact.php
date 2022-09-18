<?php
$router->group(['prefix' => 'contact'], function ($router) {
    $router->get('/', 'ShopContactUsController@index')->name('contact.index');
    $router->post('/delete', 'ShopContactUsController@deleteList')->name('contact.delete');
});
