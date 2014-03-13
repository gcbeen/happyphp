<?php

class UsersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User(Input::only('email', 'password', 'password_confirmation'));
		if ($user->save()){
			return Redirect::to('/')->with('success', '注册成功');
		} else {
			return Redirect::back()->with('errors', $user->errors)->withInput(Input::except('password'));
		}

	}

	public function info()
	{
		$user = Auth::user();
		$user_info = $user->user_info;
		return View::make('users.info', ['user' => $user, 'user_info' => $user_info]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		#$user = User::find($id);
		#$user_info = $user->user_info;
		#return View::make('users.info', ['user' => $user, 'user_info' => $user_info]);
	}

	
	public function getProfile(){
		$user = Auth::user();
		$user_info = $user->user_info;
		return View::make('users.edit', ['user' => $user, 'user_info' => $user_info]);
	}

	public function profile()
	{
		$user = Auth::user();
		$user_info = UserInfo::firstOrNew(['user_id' => $user->id]);
		$user_info->setAttrs(Input::except('email'));
		if($user_info->save()){
			return Redirect::to('/')->with('success', '信息修改成功');
		} else {
			return Redirect::back()->with('errors', $user_info->errors());
		}
	}

	public function getReset(){
		$user = Auth::user();
		return View::make('users.reset', ['user' => $user]);
	}

	public function postReset(){
		$user = Auth::user();
		if ($user->reset(Input::only('current_password')['current_password'], Input::except('current_password'))) {
			return Redirect::to('/')->with('success', '密码修改成功');
		} else {
			return Redirect::back()->with('errors', $user->validator->errors());
		}
	}


}
