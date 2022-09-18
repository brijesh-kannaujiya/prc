<?php
$router->group(['prefix' => 'linkcontent'], function ($router) {
    $router->get('/', 'ShopLinkContentController@index')->name('admin_link_content.index');
    $router->get('create', 'ShopLinkContentController@create')->name('admin_link_content.create');
    $router->post('/create', 'ShopLinkContentController@postCreate')->name('admin_link_content.create');
    $router->get('/edit/{id}', 'ShopLinkContentController@edit')->name('admin_link_content.edit');
    $router->post('/edit/{id}', 'ShopLinkContentController@postEdit')->name('admin_link_content.edit');
    $router->post('/delete', 'ShopLinkContentController@deleteList')->name('admin_link_content.delete');
});
