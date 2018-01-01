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

// Admin Routes

Route::group(['prefix'=>'admin','middleware' => 'is-admin']	,function(){

	Route::get('/admin', 'Admin\AdminPagesController@Backend')->name('adminBackend');

	// Users Cotroller full resource
	Route::resource('/users','Admin\UsersController');	

	// Category Controller Full resource 
	Route::resource('/category','Admin\CategoryController');
});


/* Funder Routes */
Route::group(['prefix'=>'funder'], function(){

	//Funder Home page
	Route::get('/', 'Funder\FunderController@index')->name('funder_home');
	
	//Funder profile page
	Route::get('/profile', 'Funder\FunderController@profile_index')->name('funder_profile');
	
	//Funder Notifications Page
	Route::get('/notifications', 'Funder\FunderController@notifications_index')->name('funder_notifications_index');
	
	//Funder listing views
	Route::get('/view_listings', 'Funder\FunderController@view_listings')->name('funder_view_listings');

	//Funder requested listings
	Route::get('/request_listing', 'Funder\FunderController@request_listing')->name('funder_request_listing');
	
	//Funder funding details
	Route::get('/fund_details', 'Funder\FunderController@fund_details')->name('funder_fund_details');	
});


/* Innovator Routes */

Route::group(['prefix'=>'innovator'], function(){

	//Innovator home page
	Route::get('/', 'Innovator\InnovatorController@index')->name('innovator_home');
	
	//Innovator profile page
	Route::get('/profile', 'Innovator\InnovatorController@profile_index')->name('innovator_profile');
	
	//Innovator Notifications Page
	Route::get('/notifications', 'Innovator\InnovatorController@notifications_index')->name('innovator_notifications_index');
	
	//Innovator listing view
	Route::get('/listings', 'Innovator\InnovatorController@listings')->name('innovator_listings');

	//Innovator submit listing page
	Route::get('/submit_listing', 'Innovator\InnovatorController@submit_listing_page')->name('submit_listing_page');
	
	//Innovator Contact Admin page
	Route::get('/contactadmin', 'Innovator\InnovatorController@contact_admin_page')->name('contact_admin_page');

	//Innovator request services page
	Route::get('/request_services', 'Innovator\InnovatorController@request_services_page')->name('request_services_page');

	//Transactions page
	Route::get('/transactions', 'Innovator\InnovatorController@transaction_page')->name('transaction_page');	

});

// Public Pages
Route::get('/', 'HomeController@index')->name('/');
Route::get('/{slug}', 'HomeController@publicPages')->name('publicPages');

// Auth Routes
Auth::routes();

