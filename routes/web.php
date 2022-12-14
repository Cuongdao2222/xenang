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



Route::get('/', 'Frontend\indexController@index')->name('homeFe');

Route::get('test', 'crawlController@uploadImageProduct');

Route::get('convery-slug', 'AjaxController@convertLinkPro');


Auth::routes(['verify' => true]);

Route::group(['prefix' => 'admins','middleware' => 'auth'], function() {

    Route::resource('posts', 'postController');

    Route::resource('categories', 'categoryController');

    Route::get('/register','customnUserController@registerUser')->name('register-user');

    Route::get('view-user', 'customnUserController@viewUser')->name('view-user');

    Route::get('home', 'HomeController@index')->name('home-admin');

    Route::get('/order-list/{id}', 'Frontend\orderController@orderListView')->name('order_list_view');

    Route::get('add-active-post', 'postController@addActive')->name('add-active-post');

    Route::post('/addUser', 'customnUserController@addUser')->name('adduser');

    Route::get('update-permision', 'customnUserController@updatePermision')->name('updatePermission');

    Route::get('/delete-user-permission','customnUserController@deleteUser')->name('deleteUser');

    Route::get('add-hight-light-post', 'postController@addHightLight')->name('add-hight-light-post');

    Route::get('lienhe',function(){
        return view('lienhe');
    })->name('lienhead');

    Route::post('check-active', 'AjaxController@checkActive')->name('check-active');

    Route::resource('metaSeos', 'metaSeoController');

    Route::get('imagescontent/{id}', 'productController@imagecontent')->name('imagescontent');

     Route::post('productContentImage', 'imageController@productContentImage')->name('imagecontents');


    Route::resource('banners', 'bannerController');

    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

    Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

    Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

    Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

    
    Route::post(    
        'generator_builder/generate-from-file',
        '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
    )->name('io_generator_builder_generate_from_file');

    Route::resource('products', 'productsController');
    Route::resource('images', 'imageController');
});    

Route::get('/lien-he', 'Frontend\blogController@lienhe')->name('lien-he');

Route::get('/search', 'Frontend\indexController@searchByInput')->name('search');




Route::get('/crawllink', 'crawlController@updateContent');

Route::get('/san-pham/san-pham-da-thi-cong', 'Frontend\blogController@sanphamdathicong')->name('spdathicong');



Route::post('add-order', 'Frontend\blogController@addOrder')->name('send-order');

Route::post('add-lien-he', 'Frontend\blogController@sendLienhe')->name('send-lh');

Route::get('removecart/{id}', 'Frontend\blogController@removeCart')->name('removeCart');

Route::get('cart.html', 'Frontend\blogController@showCart')->name('cart');

Route::get('add-cart', 'Frontend\blogController@addProductToCart')->name('addcart');

Route::get('add-carts', 'Frontend\blogController@addProductToCarts')->name('addcarts');


Route::get('/{slug}', 'Frontend\blogController@index')->name('list');

Route::get('bai-viet/{slug}', 'Frontend\blogController@detail')->name('details');

Route::get('imagescontent/{id}', 'productController@imagecontent')->name('imagescontent');

Route::get('san-pham/{slug}', 'Frontend\blogController@productDetails')->name('product-details');















