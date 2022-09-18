<?php
$router->group(['prefix' => 'testimonial'], function ($router) {
    $router->get('/', 'ShopTestimonialController@index')->name('testimonial.index');
    $router->get('create', 'ShopTestimonialController@create')->name('testimonial.create');
    $router->post('/create', 'ShopTestimonialController@postCreate')->name('testimonial.create');
    $router->get('/edit/{id}', 'ShopTestimonialController@edit')->name('testimonial.edit');
    $router->get('/copy/{id}', 'ShopTestimonialController@copy')->name('testimonial.copy');
    $router->post('/edit/{id}', 'ShopTestimonialController@postEdit')->name('testimonial.edit');
    $router->post('/delete', 'ShopTestimonialController@deleteList')->name('testimonial.delete');
});
