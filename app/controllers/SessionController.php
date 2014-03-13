<?php
class SessionController extends BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('session.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(),['email' => 'required', 'password' => 'required']);
		$credentials = ['email' => Input::get('email'), 'password' => Input::get('password') ];
		if ($validator->passes() and Auth::attempt($credentials, Input::get('remember_me'))) {
			return Redirect::to('/');
		} else {
			return Redirect::back()->with('error',"邮箱地址或密码错误")->withInput(Input::except('password'));
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
		return Redirect::to('/')->with('success', '帐号已登出');
	}

}
