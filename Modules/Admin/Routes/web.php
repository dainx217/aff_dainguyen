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


Route::group(['namespace' => 'Auth', 'prefix' => 'auth'], function () {
    Route::get('login', 'AdminLoginController@login')->name('get_admin.login');
    Route::post('login', 'AdminLoginController@postLogin');

    Route::get('logout', 'AdminLoginController@logout')->name('get_admin.logout');
});
Route::prefix('admin')->middleware('checkLoginAdmin')->group(function () {
    Route::get('/', 'AdminDashboardController@index')->name('get_admin.dashboard')->middleware('permission:dashboard|full');
    Route::prefix('campaign')->group(function () {
        Route::get('/', 'CampaignController@index')->name('get_admin.campaign.index')->middleware('permission:campaign_index|full');
        Route::get('/create', 'CampaignController@create')->name('get_admin.campaign.create')->middleware('permission:campaign_create|full');
        Route::post('/create', 'CampaignController@store');
        Route::post('edit/{id}', 'CampaignController@edit_flash')->name('get_admin.campaign.edit');
        Route::get('update/{id}', 'CampaignController@edit')->name('get_admin.campaign.edit')->middleware('permission:campaign_edit|full');
        Route::post('update/{id}', 'CampaignController@update');
        Route::get('delete/{id}', 'CampaignController@delete')->name('get_admin.campaign.delete')->middleware('permission:campaign_delete|full');
    });
    Route::prefix('user')->group(function () {
        Route::get('/', 'AdminUserController@index')->name('get_admin.user.index')->middleware('permission:user_index|full');
        Route::get('/create', 'AdminUserController@create')->name('get_admin.user.create')->middleware('permission:user_create|full');
        Route::post('/create', 'AdminUserController@store');
        Route::get('movetrash', 'AdminUserController@indexmovetrash')->name('get.indexmovetrash');
        Route::get('update/{id}', 'AdminUserController@edit')->name('get_admin.user.edit')->middleware('permission:user_edit|full');
        Route::post('update/{id}', 'AdminUserController@update');
        Route::get('movetrash/{id}', 'AdminUserController@movetrash')->name('get_admin.user.movetrash');
        Route::get('delete/{id}', 'AdminUserController@delete')->name('get_admin.user.delete')->middleware('permission:user_delete|full');
    });
    Route::prefix('shortlink')->group(function () {
        Route::get('/', 'ShortLinkController@index')->name('get_admin.shortlink.index')->middleware('permission:shortlink_index|full');
        Route::get('/create', 'ShortLinkController@create')->name('get_admin.shortlink.create')->middleware('permission:shortlink_create|full');
        Route::post('/create', 'ShortLinkController@store');
        Route::post('edit/{id}', 'ShortLinkController@edit_flash')->name('get_admin.shortlink.edit')->middleware('permission:shortlink_edit|full');
        Route::get('update/{id}', 'ShortLinkController@edit')->name('get_admin.shortlink.edit')->middleware('permission:shortlink_edit|full');
        Route::post('update/{id}', 'ShortLinkController@update');
        Route::get('delete/{id}', 'ShortLinkController@delete')->name('get_admin.shortlink.delete')->middleware('permission:shortlink_delete|full');
    });

    require_once 'route_acl.php';
    require_once 'route_blog.php';
    require_once 'route_cart.php';
});
