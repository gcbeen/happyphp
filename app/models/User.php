<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	
	protected $fillable = array('email', 'password', 'password_confirmation', 'current_password');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */

//	public static function boot()
//    {
//        parent::boot();
//
//        parent::observe(new UserObserver);
//    }

	

    public $validator;

	protected function setValid() {
		$this->validator = Validator::make($this->getAttributes(), $this->rules);
	}

	public function getValid() {
		$this->setValid();
		return $this->validator->passes();
	}

	public function errors() {
		return $this->validator->errors();
	}

	public function user_info(){
		return $this->hasOne('UserInfo');
	}

	public function update_info($attrs){
		$user_info = $this->user_info;
		if($user_info) {
			$user_info->update($attrs);
		} else {
			$user_info = new UserInfo($attrs);
			$this->user_info()->save($user_info);
		}
	}

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function reset($current_password, $attr){
		$this->validator = Validator::make(['current_password' => Hash::make($current_password)], ['current_password' => 'same:password'], ['same' => '当前密码输入错误']);
		return $this->validator->passes() and $user->update($attr);
	}

}
