<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
 * Sentry filter
 *
 * Checks if the user is logged in
 */
Route::filter('Sentry', function()
{
    if ( ! Sentry::check()) {
        return Redirect::to('admin/login')->with('error', 'You must be logged in!');
    }
});

Route::get('/', function()
{
    return View::make('hello');
});

Route::group(array('prefix' => 'admin'), function () {

    //All basic routes defined here
    Route::get('login', array('as' => 'login','uses' => 'AuthController@getLogin'));
    Route::post('login','AuthController@postLogin');
    Route::get('register', array('as' => 'register','uses' => 'AuthController@getRegister'));
    Route::post('register','AuthController@postRegister');
    Route::post('forgot-password',array('as' => 'forgot-password','uses' => 'AuthController@postForgotPassword'));
    Route::get('login2', function () {
        return View::make('admin/login2');
    });
    # Forgot Password Confirmation
    Route::get('forgot-password/{passwordResetCode}', array('as' => 'forgot-password-confirm', 'uses' => 'AuthController@getForgotPasswordConfirm'));
    Route::post('forgot-password/{passwordResetCode}', 'AuthController@postForgotPasswordConfirm');

    Route::get('logout', array('as' => 'logout','uses' => 'AuthController@getLogout'));

    Route::get('/', array('as' => 'dashboard','uses' => 'AdminController@showHome'));

    # User Management
    Route::group(array('prefix' => 'users','before' => 'Sentry'), function () {
        Route::get('/', array('as' => 'users', 'uses' => 'UsersController@getIndex'));
        Route::get('create',array('as' => 'users.create', 'uses' => 'UsersController@getCreate'));
        Route::post('create', 'UsersController@postCreate');
        Route::get('{userId}/edit', array('as' => 'users.edit', 'uses' => 'UsersController@getEdit'));
        Route::post('{userId}/edit', 'UsersController@postEdit');
        Route::get('{userId}/delete', array('as' => 'delete/user', 'uses' => 'UsersController@getDelete'));
        Route::get('{userId}/confirm-delete', array('as' => 'confirm-delete/user', 'uses' => 'UsersController@getModalDelete'));
        Route::get('{userId}/restore', array('as' => 'restore/user', 'uses' => 'UsersController@getRestore'));
        Route::get('{userId}', array('as' => 'users.show', 'uses' => 'UsersController@show'));
    });

    # Client Management
    Route::group(array('prefix' => 'users','before' => 'Sentry'), function () {
        Route::get('/', array('as' => 'users', 'uses' => 'UsersController@getIndex'));
        Route::get('create',array('as' => 'users.create', 'uses' => 'UsersController@getCreate'));
        Route::post('create', 'UsersController@postCreate');
        Route::get('{userId}/edit', array('as' => 'users.edit', 'uses' => 'UsersController@getEdit'));
        Route::post('{userId}/edit', 'UsersController@postEdit');
        Route::get('{userId}/delete', array('as' => 'delete/user', 'uses' => 'UsersController@getDelete'));
        Route::get('{userId}/confirm-delete', array('as' => 'confirm-delete/user', 'uses' => 'UsersController@getModalDelete'));
        Route::get('{userId}/restore', array('as' => 'restore/user', 'uses' => 'UsersController@getRestore'));
        Route::get('{userId}', array('as' => 'users.show', 'uses' => 'UsersController@show'));
    });

    # Group Management
    Route::group(array('prefix' => 'groups'), function () {
        Route::get('/', array('as' => 'groups', 'uses' => 'GroupsController@getIndex'));
        Route::get('create', array('as' => 'create/group', 'uses' => 'GroupsController@getCreate'));
        Route::post('create', 'GroupsController@postCreate');
        Route::get('{groupId}/edit', array('as' => 'update/group', 'uses' => 'GroupsController@getEdit'));
        Route::post('{groupId}/edit', 'GroupsController@postEdit');
        Route::get('{groupId}/delete', array('as' => 'delete/group', 'uses' => 'GroupsController@getDelete'));
        Route::get('{groupId}/confirm-delete', array('as' => 'confirm-delete/group', 'uses' => 'GroupsController@getModalDelete'));
        Route::get('{groupId}/restore', array('as' => 'restore/group', 'uses' => 'GroupsController@getRestore'));
    });


    //Remaining pages will be called from below controller method
    //in real world scenario, you may be required to define all routes manually
    Route::get('{name?}', 'AdminController@showView');



});

#frontend views
Route::get('/', array('as' => 'home', function () {
    return View::make('index');
}));
Route::get('{name?}', 'AdminController@showFrontEndView');
# End of frontend views
