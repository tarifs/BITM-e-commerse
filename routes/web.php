<?php
/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/home',[
    'uses'=>'FirstController@index',
    'as'=>'/'
]);*/
Route::get('/',[
    'uses' => 'FirstController@index',
    'as' => '/'
]);
Route::get('/about',[
    'uses' => 'FirstController@about',
    'as' => '/about'
]);

Route::get('/category/product/{id}',[
    'uses' =>'FirstController@categoryProduct',
    'as'   =>'category-product'
]);

Route::get('/bakeryProduct',[
    'uses' => 'FirstController@bakeryProduct',
    'as'   => '/bakeryProduct'
]);
Route::get('/kitchenDiningProduct',[
    'uses' => 'FirstController@kitchenDiningProduct',
    'as'   => '/kitchenDiningProduct'
]);
Route::get('/faqs',[
    'uses' => 'FirstController@faqs',
    'as'   => '/faqs'
]);
Route::get('/contact',[
    'uses' => 'FirstController@contact',
    'as'   => '/contact'
]);

Route::get('/new/category',[
   'uses' =>'CategoryController@addCategory',
   'as'   =>'add-category'
]);

Route::get('/arrange/category',[
   'uses' =>'CategoryController@manageCategory',
   'as'   =>'manage-category'
]);

Route::post('/category/new',[
    'uses' =>'CategoryController@saveCategory',
    'as'   =>'new-category'
]);

Route::get('/category/unpublised/{id}',[
    'uses' =>'CategoryController@unpublisedCategory',
    'as'   =>'unpublised-category'
]);

Route::get('/category/publised/{id}',[
    'uses' =>'CategoryController@publisedCategory',
    'as'   =>'publised-category'
]);

Route::get('/category/edit/{id}',[
    'uses' =>'CategoryController@editCategory',
    'as'   =>'edit-category'
]);

Route::post('/category/update',[
    'uses' =>'CategoryController@updateCategory',
    'as'   =>'update-category'
]);

Route::get('/category/delete/{id}',[
    'uses' =>'CategoryController@deleteCategory',
    'as'   =>'delete-category'
]);

Route::get('/brand/manage',[
    'uses' =>'BrandController@manageBrand',
    'as'   =>'manage-brand'
]);

Route::get('/brand/add',[
    'uses' =>'BrandController@addBrand',
    'as'   =>'add-brand'
]);

Route::post('/brand/add',[
    'uses' =>'BrandController@create',
    'as'   =>'new-brand'
]);

Route::post('/brand/manage',[
    'uses' =>'BrandController@manageBrand',
    'as'   =>'manage-brand'
]);


Route::get('/brand/unpublised/{id}',[
    'uses' =>'BrandController@unpublisedBrand',
    'as'   =>'unpublised-brand'
]);

Route::get('/brand/publised/{id}',[
    'uses' =>'BrandController@publisedBrand',
    'as'   =>'publised-brand'
]);

Route::get('/brand/edit/{id}',[
    'uses' =>'BrandController@editBrand',
    'as'   =>'edit-brand'
]);

Route::post('/brand/update',[
    'uses' =>'BrandController@updateBrand',
    'as'   =>'update-brand'
]);

Route::get('/brand/delete/{id}',[
    'uses' =>'BrandController@deleteBrand',
    'as'   =>'delete-brand'
]);

Route::get('/product/add',[
    'uses' =>'ProductController@index',
    'as'   =>'add-product'
]);

Route::post('/product/new',[
    'uses' =>'ProductController@newProduct',
    'as'   =>'new-product'
]);

Route::get('/product/manage',[
    'uses' =>'ProductController@manageProduct',
    'as'   =>'manage-product'
]);

Route::get('/product/edit/{id}',[
    'uses' =>'ProductController@editProduct',
    'as'   =>'edit-product'
]);

Route::post('/product/save',[
    'uses' =>'ProductController@updateProduct',
    'as'   =>'update-product'
]);

Route::get('/product/unpublised/{id}',[
    'uses' =>'ProductController@unpublisedProduct',
    'as'   =>'unpublised-product'
]);

Route::get('/product/publised/{id}',[
    'uses' =>'ProductController@publisedProduct',
    'as'   =>'publised-product'
]);

Route::get('/product/delete/{id}',[
    'uses' => 'ProductController@deleteProduct',
    'as' => 'delete-product'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');