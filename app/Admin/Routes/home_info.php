<?php
$router->group(['prefix' => 'home_info'], function ($router) {
    $router->get('/', 'AdminHomeInfoController@index')->name('admin_home_info.index');
    $router->post('/delete', 'AdminHomeInfoController@deleteList')->name('admin_home_info.delete');
    $router->post('/update_info', 'AdminHomeInfoController@updateInfo')->name('admin_home_info.update');
});
