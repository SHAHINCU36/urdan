<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [
    'uses' => '\App\Http\Controllers\Front\UrdanController@index',
    'as'  => '/',
]);
Route::get('/category-page', [
    'uses' => '\App\Http\Controllers\Front\UrdanController@categoryPage',
    'as'  => 'category-page',
]);
Route::get('/product-details', [
    'uses' => '\App\Http\Controllers\Front\UrdanController@productDetails',
    'as'  => 'product-details',
]);

Route::get('/dashboard', [
    'uses' => '\App\Http\Controllers\Admin\AdminController@index',
    'as'  => 'dashboard',
    'middleware' => ['auth:sanctum', 'verified'],
]);


Route::group(['middleware' =>['auth:sanctum', 'verified']], function (){
//    category routes
    Route::get('/add-category', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@addCategory',
        'as'  => 'add-category',
    ]);
    Route::post('/new-category', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@newCategory',
        'as'  => 'new-category',
    ]);
    Route::get('/manage-category', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@manageCategory',
        'as'  => 'manage-category',
    ]);
    Route::get('/edit-category/{id}', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@editCategory',
        'as'  => 'edit-category',
    ]);
    Route::post('/update-category', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@updateCategory',
        'as'  => 'update-category',
    ]);
    Route::get('/delete-category/{id}', [
        'uses' => '\App\Http\Controllers\Admin\CategoryController@deleteCategory',
        'as'  => 'delete-category',
    ]);

    //    sub-category routes
    Route::get('/add-subCategory', [
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@addSubCategory',
        'as'  => 'add-subcategory',
    ]);
    Route::post('/new-subcategory', [
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@newSubCategory',
        'as'  => 'new-subcategory',
    ]);
    Route::get('/manage-sub-category', [
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@manageSubCategory',
        'as'  => 'manage-subcategory',
    ]);
    Route::get('/edit-subcategory/{id}', [
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@editSubCategory',
        'as'  => 'edit-subcategory',
    ]);
    Route::post('/update-subcategory', [
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@updateSubCategory',
        'as'  => 'update-subcategory',
    ]);
    Route::get('/delete-subcategory/{id}', [
        'uses' => '\App\Http\Controllers\Admin\SubCategoryController@deleteSubCategory',
        'as'  => 'delete-subcategory',
    ]);


    Route::get('/add-brand', [
        'uses' => '\App\Http\Controllers\admin\BrandController@addBrand',
        'as' => 'add-brand'
    ]);
    Route::post('/new-brand', [
        'uses' => '\App\Http\Controllers\admin\BrandController@newBrand',
        'as' => 'new-brand'
    ]);

    Route::get('/add-unit', [
        'uses' => '\App\Http\Controllers\admin\UnitController@addUnit',
        'as' => 'add-unit'
    ]);
    Route::post('/new-unit', [
        'uses' => '\App\Http\Controllers\admin\UnitController@newUnit',
        'as' => 'new-unit'
    ]);


//    product route
    Route::get('/add-product', [
        'uses' => '\App\Http\Controllers\admin\ProductController@addProduct',
        'as' => 'add-product'
    ]);
    Route::post('/new-product', [
        'uses' => '\App\Http\Controllers\admin\ProductController@newProduct',
        'as' => 'new-product'
    ]);
    Route::get('/get-sub-category-by-category-id/{id}', [
        'uses' => '\App\Http\Controllers\admin\ProductController@getSubCategoryId',
        'as' => 'get-sub-category-by-category-id'
    ]);
});
