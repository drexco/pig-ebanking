<?php
/*
|**************************************** HOME PAGE ROUTES **************************************************************************|
*/
//Index Route
Route::get('/',array('uses'=>'HomeController@index'));

//login View
Route::get('/login',array('uses'=>'HomeController@loginView'));

//processing login
Route::post('/login',array('uses'=>'HomeController@logIn'));

//processing log-out
Route::get('/log-out',array('uses'=>'HomeController@logOut'));

//Password recovery View
Route::get('/login/password-recovery',array('uses'=>'HomeController@passwordRecovery'));

//Password recovery Check token
Route::get('/login/token/check',array('uses'=>'HomeController@checkToken'));

//Password recovery generate Token
Route::post('/login/password-recovery',array('uses'=>'HomeController@getToken'));

//Password recovery Change password View
Route::get('/login/password-recovery/new-password',array('uses'=>'HomeController@newPasswordView'));

//Password recovery Change password
Route::post('/login/password-recovery/new-password',array('uses'=>'HomeController@newPassword'));

Route::get('/sitemap',array('uses'=>'HomeController@sitemap'));

Route::get('/robots',array('uses'=>'HomeController@robots'));

/*
|**************************************** USER ROUTES **************************************************************************|
*/

//Summary View
Route::get('/users/summary',array('uses'=>'UserController@summary'));

//Transactions View
Route::get('/users/transactions',array('uses'=>'UserController@transactions'));

//Transaction view
Route::get('/users/transactions/{id}',array('uses'=>'UserController@viewTransaction'))->where(array('id'=>'[0-9]+'));

//Settings view
Route::get('/users/settings',array('uses'=>'UserController@userSettingsView'));

//Edit Bio Data - post
Route::post('/users/settings/info',array('uses'=>'UserController@editInfo'));

//Edit Password - Post
Route::post('/users/settings/password',array('uses'=>'UserController@editPassword'));


/*
|**************************************** ADMIN ROUTES **************************************************************************|
*/

//Summary
Route::get('/summary',array('uses'=>'AdminController@summary'));

//Transactions View
Route::get('/transactions',array('uses'=>'AdminController@transactions'));

//Transaction
Route::get('/transactions-{id}',array('uses'=>'AdminController@viewTransaction'))->where(array('id'=>'[0-9]+'));

//Edit Transaction
Route::get('/transactions-edit-{id}',array('uses'=>'AdminController@editTransaction'))->where(array('id'=>'[0-9]+'));

// Add Transaction
Route::get('/createtransaction',array('uses'=>'AdminController@addTransactionView'));

//Transaction Process - post
Route::post('/admin/transactions/process',array('uses'=>'AdminController@processTransaction'));

//Transaction Cancel - post
Route::post('/admin/transactions/cancel/{id}',array('uses'=>'AdminController@createWorkChop'))->where(array('id'=>'[0-9]+'));

//Users
Route::get('/users',array('uses'=>'AdminController@users'));

//View User
Route::get('/users-{id}',array('uses'=>'AdminController@viewUser'))->where(array('id'=>'[0-9]+'));

//Edit User - View
Route::get('/users-edit-{id}',array('uses'=>'AdminController@editUserView'))->where(array('id'=>'[0-9]+'));

//Edit User
Route::post('/users/edit/{id}',array('uses'=>'AdminController@editUser'))->where(array('id'=>'[0-9]+'));

//Disable User
Route::post('/admin/users/block/{id}',array('uses'=>'AdminController@changeUserStatus'))->where(array('id'=>'[0-9]+'));

//User Status
Route::post('/users/create',array('uses'=>'AdminController@addUser'));

//User Status
Route::get('/createuser',array('uses'=>'AdminController@addUserView'));

//Accounts
Route::get('/accounts',array('uses'=>'AdminController@accounts'));

//View Account
Route::get('/accounts-{id}',array('uses'=>'AdminController@viewAccount'))->where(array('id'=>'[0-9]+'));

//Edit Account - View
Route::get('/accounts-edit-{id}',array('uses'=>'AdminController@editAccountView'))->where(array('id'=>'[0-9]+'));

//Edit Account
Route::get('/accounts/edit/{id}',array('uses'=>'AdminController@editAccount'))->where(array('id'=>'[0-9]+'));

//User Account Status
Route::post('/accounts/create',array('uses'=>'AdminController@addAccount'));

//User Account Status
Route::get('/createaccount',array('uses'=>'AdminController@addAccountView'));

//Settings view
Route::get('/admin/settings',array('uses'=>'AdminController@settings'));

//Edit Bio Data - post
Route::post('/admin/settings/info',array('uses'=>'AdminController@editInfo'));

//Edit Password - Post
Route::post('/admin/settings/password',array('uses'=>'AdminController@editPassword'));

//Messages
Route::get('/admin/messages',array('uses'=>'AdminController@messages'));

//View Message
Route::get('/admin/messages/{id}',array('uses'=>'AdminController@viewMessage'))->where(array('id'=>'[0-9]+'));


// *********************************************************************************************************************************



