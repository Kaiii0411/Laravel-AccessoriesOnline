<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;

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
//FrontEnd
Route::get('/', 'HomeController@index');

Route::get('/trangChu', 'HomeController@index');
Route::post('/tim-kiem', 'HomeController@search');
Route::get('/lienHe', 'ContactController@index');
Route::get('/veChungtoi', 'AboutUsController@index');

//Danh mục sản phẩm
Route::get('/danh-muc-san-pham/{category_id}', 'CategoryProductController@show_category_home');
Route::get('/thuong-hieu-san-pham/{brand_id}', 'BrandProduct@show_brand_home');
Route::get('/chi-tiet-san-pham/{product_id}', 'ProductController@details_product');


//BackEnd
Route::get('/admin','AdminController@index_page');
Route::get('/admin/login','AdminController@login_page');
Route::get('/logout','AdminController@logout_page');

Route::post('/admin/home','AdminController@admin_home');
//CategoryProduct
Route::get('/add_category_product','CategoryProductController@add_category_product');
Route::get('/all_category_product','CategoryProductController@all_category_product');
Route::get('/edit-category-product/{category_product_id}','CategoryProductController@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryProductController@delete_category_product');



Route::get('/unactive-category-product/{category_product_id}','CategoryProductController@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryProductController@active_category_product');

Route::post('/save-category-product','CategoryProductController@save_category_product');
Route::post('/update-category-product/{category_product_id}','CategoryProductController@update_category_product');

//BrandProduct
Route::get('/add-brand-product','BrandProduct@add_brand_product');
Route::get('/all-brand-product','BrandProduct@all_brand_product');
Route::get('/edit-brand-product/{brand_product_id}','BrandProduct@edit_brand_product');
Route::get('/delete-brand-product/{brand_product_id}','BrandProduct@delete_brand_product');


Route::get('/unactive-brand-product/{brand_product_id}','BrandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}','BrandProduct@active_brand_product');

Route::post('/save-brand-product','BrandProduct@save_brand_product');
Route::post('/update-brand-product/{brand_product_id}','BrandProduct@update_brand_product');

//ProductProduct
Route::get('/add-product','ProductController@add_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');


Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');

Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');

//Cart
Route::post('/save-cart','CartController@save_cart');
Route::post('/update-cart-quantity','CartController@update_cart_quantity');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');

//Checkout
Route::get('/login-checkout','CheckoutController@login_checkout');
Route::get('/logout-checkout','CheckoutController@logout_checkout');
Route::post('/login-customer','CheckoutController@login_customer');


Route::post('/add-customer','CheckoutController@add_customer');
Route::post('/order-place','CheckoutController@order_place');
Route::get('/checkout','CheckoutController@checkout');
Route::get('/payment','CheckoutController@payment');

Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer');

//Order
Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/view-order/{orderId}','CheckoutController@view_order');





