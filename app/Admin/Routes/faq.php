<?php
$router->group(['prefix' => 'faq'], function ($router) {
    $router->get('/', 'ShopFaqController@index')->name('faq.index');
    $router->get('create', 'ShopFaqController@create')->name('faq.create');
    $router->post('/create', 'ShopFaqController@postCreate')->name('faq.create');
    $router->get('/edit/{id}', 'ShopFaqController@edit')->name('faq.edit');
    $router->post('/edit/{id}', 'ShopFaqController@postEdit')->name('faq.edit');
    $router->post('/delete', 'ShopFaqController@deleteList')->name('faq.delete');
});
