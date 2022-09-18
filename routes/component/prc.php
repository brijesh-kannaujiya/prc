<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Vanilo\Category\Models\TaxonomyProxy;

Route::get('/', 'FrontendController@index');


Route::get('/site-search', 'SitewideSearchController@search')->name('site-search');


View::composer('includes.repairmenu',function($view){

    $taxonomies = TaxonomyProxy::get()->sort();
    $view->with('taxonomies' , $taxonomies);
});



Auth::routes();





Route::get('/home', 'FrontendController@index')->name('home');
Route::get('/liquid-damage', 'FrontendController@showLiquidDamageService')->name('liquid-damage');
Route::get('/mail-in-repairs', 'FrontendController@showMailInRepairs')->name('mail-in-repairs');
Route::get('/mackbook-repairs', 'FrontendController@showMackbookRepairs')->name('mackbook-repairs');
Route::get('/laptop-repairs', 'FrontendController@showLaptopRepairs')->name('laptop-repairs');
Route::get('/data-recovery', 'FrontendController@showDataRecoveryRepairs')->name('data-recovery');
Route::get('/motherboard-repair', 'FrontendController@showMotherboardRepairs')->name('motherboard-repair');
Route::get('/gaming-console-repair', 'FrontendController@showGameConsoleRepairs')->name('gaming-console-repair');
Route::get('/b2b-repairs', 'FrontendController@showB2BRepairs')->name('b2b-repairs');
Route::get('/faq', 'FrontendController@showFaq')->name('faq');
Route::get('/service-insurance', 'FrontendController@showServiceInsurance')->name('service-insurance');
Route::get('/sellyour-device', 'FrontendController@showSellYourBrokenDevice')->name('sellyour-device');
Route::get('/phone-unlocking', 'FrontendController@showPhoneUnlocking')->name('phone-unlocking');


Route::group(['prefix' => 'prc', 'as' => 'product.'], function() {
    Route::get('index', 'ProductController@index')->name('index');
    Route::get('showbrand', 'FrontendController@showbrand')->name('showbrand');
    Route::get('brand/{taxonomyName}', 'FrontendController@showCat')->name('cat');
    Route::get('brand/{taxonomyName}/{taxon}', 'FrontendController@showCategory')->name('category');
    Route::get('product/{product}', 'FrontendController@showProduct')->name('product');
    
    Route::get('category/{brand_id}/','ShopFront@getCategory');
   
});

Route::group(['prefix' => 'prc/api', 'as' => 'product.'], function() {
    
    
    Route::get('category/{brand_id}/','ShopFront@getCategory');
   
});


Route::get('showRepair/{repair}', 'RepairController@showRepair')->name('showRepair');
Route::get('showRepair/{product}/{repair}', 'RepairController@showBrandRepair')->name('showBrandRepair');
Route::group(['prefix' => 'frontend', 'as' => 'frontend.'], function() {
Route::get('/getCatByBrand/{id}', 'FrontendController@getCatByBrand')->name('getCatByBrand');
Route::get('/service', 'FrontendController@showService')->name('service');
Route::get('/repair', 'FrontendController@repair')->name('repair');
Route::get('/casr', 'FrontendController@showCasr')->name('casr');
Route::get('/b2b', 'FrontendController@showB2b')->name('b2b');
Route::get('/aboutus', 'FrontendController@showAboutus')->name('aboutus');
Route::get('/faq', 'FrontendController@showFaq')->name('faq');
Route::get('/contact', 'FrontendController@showContact')->name('contact');
Route::get('/showRepair', 'FrontendController@showRepair')->name('showRepair');
Route::get('/commonrepair', 'FrontendController@showCommonrepair')->name('commonrepair');


Route::get('/mailinrepair', 'ServiceMenuController@showMailinrepair')->name('mailinrepair');
Route::get('/macbookrepair', 'ServiceMenuController@showMacbookrepair')->name('macbookrepair');
Route::get('/laptoprepair', 'ServiceMenuController@showLaptoprepair')->name('laptoprepair');
Route::get('/datarepair', 'ServiceMenuController@showDatarepair')->name('datarepair');
Route::get('/motherboardrepair', 'ServiceMenuController@showMotherboardrepair')->name('motherboardrepair');
Route::get('/liquidrepair', 'ServiceMenuController@showLiquidrepair')->name('liquidrepair');
Route::get('/gamingconsole', 'ServiceMenuController@showGamingconsole')->name('gamingconsole');
Route::get('/serviceinsurance', 'ServiceMenuController@showServiceinsurance')->name('serviceinsurance');
Route::get('/mobileaccessories', 'ServiceMenuController@showMobileaccessories')->name('mobileaccessories');
Route::get('/sellbrokenphone', 'ServiceMenuController@showSellbrokenphone')->name('sellbrokenphone');
Route::get('/phoneunlock', 'ServiceMenuController@showPhoneunlock')->name('phoneunlock');
});


Route::group(['prefix' => 'cart', 'as' => 'cart.'], function() {
    Route::get('show', 'CartController@show')->name('show');
    Route::post('add/{product}', 'CartController@add')->name('add');
    Route::post('update/{cart_item}', 'CartController@update')->name('update');
    Route::post('remove/{cart_item}', 'CartController@remove')->name('remove');
});

Route::group(['prefix' => 'checkout', 'as' => 'checkout.'], function() {
    Route::get('show', 'CheckoutController@show')->name('show');
    Route::post('submit', 'CheckoutController@submit')->name('submit');
});


Route::get('/blog', 'ShopFront@news')
    ->name('news');

Route::get('/blog/{alias}', 'ShopFront@newsDetail')
    ->name('news.detail');

Route::post('contactusform', 'FrontendController@postContactUs')->name('contactusform');

Route::get('/sasc', 'SamsungController@sasc')
    ->name('sasc');
 