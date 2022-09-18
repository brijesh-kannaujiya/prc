<?php
$router->group(['prefix' => 'task'], function ($router) {
    $router->get('/', 'ShopTaskController@index')->name('admin_task.index');
    $router->get('create', 'ShopTaskController@create')->name('admin_task.create');
    $router->post('/create', 'ShopTaskController@postCreate')->name('admin_task.create');
    $router->get('/edit/{id}', 'ShopTaskController@edit')->name('admin_task.edit');
    $router->post('/edit/{id}', 'ShopTaskController@postEdit')->name('admin_task.edit');
    $router->post('/delete', 'ShopTaskController@deleteList')->name('admin_task.delete');
    $router->get('/getProduct', 'ShopTaskController@getProduct')->name('admin_task.getProduct');
    $router->get('/getCatgory', 'ShopTaskController@getCatgory')->name('admin_task.getCatgory');

});
