<?php

/**
 * Class UserObserver
 */
class UserObserver {

	protected $rules = [
        'email'    => 'required|email|unique:users,email',
		'password' => 'required|min:6|confirmed'
    ];

	public function saving(Eloquent $model){
		
		if($model->getValid()){
			unset($model->password_conformed);
			unset($model->current_password);
			return true;
		} else {
			return false;
		}
    }

}
