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


Route::get('/','HomeController@home');
Route::get('/plates','HomeController@number_plates_list');
Route::get('/plate_detail/{id?}','HomeController@plate_detail');
Route::post('/add_to_cart', 'HomeController@add_to_cart');
Route::get('/cart', 'HomeController@items_cart');
Route::get('/remove_from_cart/{id}', 'HomeController@remove_from_cart');
Route::get('/remove_from_wishlist/{id}', 'HomeController@remove_from_wishlist');
Route::post('/save_plate', 'HomeController@save_plate');
Route::get('/saved-plate', 'HomeController@saved_plate');
Route::get('/about-us', 'HomeController@about_us');
Route::get('/privacy-policy', 'HomeController@privacy_policy');
Route::get('/faq', 'HomeController@faq');
Route::get('/contact-us', 'HomeController@contact_us');
Route::get('/how-it-works', 'HomeController@how_it_works');
Route::get('/terms-and-conditions', 'HomeController@terms_and_conditions');
Route::post('/view_plate', 'HomeController@view_plate');
Route::get('/checkout/{id}', 'HomeController@checkout');
Route::post('/shipping_address', 'HomeController@shipping_address');
Route::post('/save_contact_form', 'HomeController@save_contact_form_details');
Route::post('/searching_plates', 'HomeController@searching_plates');
Route::post('/sort_price', 'HomeController@sort_price');
Route::get('/blogs', 'HomeController@blogs');
Route::get('/blog_details', 'HomeController@blog_details');
Route::get('/payment', 'HomeController@payment');
Route::get('/enquiry', 'HomeController@enquiry');
Route::get('/contact-thanks', 'HomeController@contact_thanks');
Route::get('/payments', 'HomeController@payments');
Route::get('/price-fees', 'HomeController@price_fees');
Route::get('/payment_details', 'HomeController@payment_details');

Auth::routes();
Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
Route::get('/user_login','CommonLoginController@login');
Route::post('/submit_login','CommonLoginController@submitLogin');
Route::get('/logout','CommonLoginController@logout');
Route::get('/admin', 'Auth\LoginController@admin')->name('admin');

Route::group(['namespace' => 'Seller','prefix' => 'seller', 'middleware' => ['SellerCheck','verified','auth']],function(){ 

		Route::get('/add_plate','SellerUserController@add_plate');
		
		// Route::get('/add_plate','SellerUserController@add_plate');
		Route::post('/upload_platenumber','SellerUserController@upload_platenumber');
		Route::post('/make-image','SellerUserController@makeimage');
		Route::get('/plate_list','SellerUserController@plate_list');
		Route::get('/delete_plate/{id}','SellerUserController@delete_plate');
		Route::get('/edit_plate/{id}','SellerUserController@edit_plate');
		Route::get('/change_plate_status/{id}/{status}','SellerUserController@change_plate_status');
		


	});
Route::group(['namespace' => 'Buyer','prefix' => 'buyer', 'middleware' => ['BuyerCheck','verified','auth']],function(){ 

		Route::get('/dashboard','BuyerUserController@index');

	});
Route::group(['namespace' => 'Admin','prefix' => 'admin', 'middleware' => ['AdminCheck','verified','auth']],function(){ 

		Route::get('/dashboard','AdminController@dashboard');

	});
