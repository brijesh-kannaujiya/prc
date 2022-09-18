<?php
$router->group(['prefix' => 'repair'], function ($router) {
    $router->get('/', 'ShopRepairController@index')->name('admin_repair.index');
    $router->get('create', 'ShopRepairController@create')->name('admin_repair.create');
    $router->post('/create', 'ShopRepairController@postCreate')->name('admin_repair.create');
    $router->get('/edit/{id}', 'ShopRepairController@edit')->name('admin_repair.edit');
    $router->post('/edit/{id}', 'ShopRepairController@postEdit')->name('admin_repair.edit');
    $router->post('/delete', 'ShopRepairController@deleteList')->name('admin_repair.delete');
});
