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
Route::filter('auth_required',function(){
	if(!Auth::check()){
		try {
			return Redirect::back()->with('status', '操作前，请登录');
		} catch (Exception $e) {
			return Redirect::to('/')->with('status', '操作前，请登录');
		}
	}
});
Route::group(array('before' => 'auth_required'), function(){

	Route::get('/users/info', ['as' => 'info', 'uses' => 'UsersController@info']);
	Route::get('/users/profile', ['as' => 'profile', 'uses' => 'UsersController@getProfile']);
	Route::put('/users/profile', ['as' => 'profile', 'uses' => 'UsersController@profile']);
	Route::get('/users/reset', ['as' => 'reset', 'uses' => 'UsersController@getReset']);
	Route::put('/users/reset', ['as' => 'reset', 'uses' => 'UsersController@postReset']);

});

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index'] );
Route::get('/login', ['as' => 'login', 'uses' => 'SessionController@create'] );
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionController@destroy'] );
Route::resource('session', 'SessionController');

Route::resource('users', 'UsersController');
Route::resource('home', 'HomeController');

Route::get('/remind', ['as' => 'remind', 'uses' => 'RemindersController@getRemind' ]);
Route::post('/remind', ['as' => 'remind', 'uses' => 'RemindersController@postRemind' ]);
Route::get('/password/reset/{token}', ['as' => 'reset', 'uses' => 'RemindersController@getReset' ])->where('token', '[a-zA-Z0-9]+');
Route::put('/reset', ['as' => 'reset', 'uses' => 'RemindersController@postReset' ]);


/**
 *
Route::get('mail_test', function()
{
    // 為了測試，我們將寄送給自己
    $address = Config::get('mail.username');

    // 系統會將資料變數 $data 套用到視圖 `app/views/emails/auth/test.blade.php`中後發送
    $data = array('token' => '123456');
    Mail::send('emails.auth.reminder', $data, function($message) use ($address)
    {
        // $message 是一個 SwiftMailer 物件，你可以呼叫在 SwiftMailer 類別中
        // 的任何方法去來設定此封郵件
        $message->to($address)->subject('Laravel Mail By mail');
    });
});
*/
