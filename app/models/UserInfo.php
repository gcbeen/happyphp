<?php

class UserInfo extends Eloquent {
    protected $fillable = ['nickname', 'city', 'signature', 'introduction'];

    protected $validator;

    protected $rules = [
        //'username' => 'required|unique:users,username',
        'nickname'    => 'required|unique:users|max:255',
		'city' 		  => 'required|max:255',
		'signature'   => 'required|max:255'
    ];

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

	public function user() {
		return $this->belongsTo('User');
	}


	public function setAttrs($ary){
		foreach($ary as $k => $v){
			$this->attributes[$k] = $v;
		}
	}

	public static function update_info($user_info, $attrs) {
		if ($user_info) {
			$user_info->update($attrs);
		} else {
			$user_info = new UserInfo($attrs);
			$user_info->user()->associate(Auth::user());
			$user_info->save();
		}
	}
}
