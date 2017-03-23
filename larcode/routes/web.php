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
Route::group(['middleware' => 'auth'], function () {
	Route::get('/', 'DashboardController@index')->name('dashboard');
	Route::get('/profile', 'UsersController@edit')->name('profile');
	Route::post('/profile', 'UsersController@update')->name('profile.update');
	Route::get('/logout', 'DashboardController@logout')->name('logout');
	Route::get('/unauthorized', 'DashboardController@unauthorized')->name('unauthorized');
});


//admin routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth','checkrole:admin'], 'namespace' => 'admin'], function () {
	//Section routes
	Route::get('sections', 'SectionsController@index')->name('admin.sections.index');
	Route::get('sections/create', 'SectionsController@create')->name('admin.sections.create');
	Route::post('sections', 'SectionsController@store')->name('admin.sections.store');
	//Route::get('sections/{section}', 'SectionsController@show')->name('admin.sections.show');
	Route::get('sections/{section}/edit', 'SectionsController@edit')->name('admin.sections.edit');
	Route::put('sections/{section}/edit', 'SectionsController@update')->name('admin.sections.update');
	Route::delete('sections/{section}', 'SectionsController@destroy')->name('admin.sections.destroy');

});

//manager routes
Route::group(['prefix' => 'm', 'middleware' => ['auth','checkrole:manager'], 'namespace' => 'manager'], function () {

});

//advertiser routes
Route::group(['prefix' => 'adv', 'middleware' => ['auth','checkrole:advertiser'], 'namespace' => 'advertiser'], function () {
	//Section routes
	Route::get('campaigns', 'CampaignsController@index')->name('advertiser.campaigns.index');
	Route::get('campaigns/create', 'CampaignsController@create')->name('advertiser.campaigns.create');
	Route::post('campaigns', 'CampaignsController@store')->name('advertiser.campaigns.store');
	Route::get('campaigns/{campaign}', 'CampaignsController@show')->name('advertiser.campaigns.show');
	Route::get('campaigns/{campaign}/edit', 'CampaignsController@edit')->name('advertiser.campaigns.edit');
	Route::put('campaigns/{campaign}/edit', 'CampaignsController@update')->name('advertiser.campaigns.update');
	Route::delete('campaigns/{campaign}', 'CampaignsController@destroy')->name('advertiser.campaigns.destroy');


	Route::get('campaigns/{campaign}/adverts/create', 'CampaignsController@create')->name('advertiser.adverts.create');
	Route::post('campaigns/{campaign}/adverts', 'CampaignsController@store')->name('advertiser.adverts.store');
	Route::get('campaigns/{campaign}/adverts/{advert}', 'CampaignsController@show')->name('advertiser.adverts.show');
	Route::get('campaigns/{campaign}/adverts/{advert}/edit', 'CampaignsController@edit')->name('advertiser.adverts.edit');
	Route::put('campaigns/{campaign}/adverts/{advert}/edit', 'CampaignsController@update')->name('advertiser.adverts.update');
	Route::delete('campaigns/{campaign}/adverts/{advert}', 'CampaignsController@destroy')->name('advertiser.adverts.destroy');
});

//publisher routes
Route::group(['prefix' => 'pub', 'middleware' => ['auth','checkrole:publisher'], 'namespace' => 'publisher'], function () {

});


Auth::routes();

