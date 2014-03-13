@extends('layout')

@section('title')
  个人信息设置
@stop

@section('content')
<div class="box">
{{ Form::model($user_info, ['route' => 'profile', 'class' => 'form-horizontal', 'method' => 'put']) }}
	@include('shared.error_exception')
  <fieldset> 
	<legend>个人信息设置 </legend>
	<div class="form-inputs">
		<div class="control-group">
	 		{{ Form::label('email', '邮箱地址', ['class' => 'control-label' ]) }}
	 		<div class="controls">
	 	   		{{ Form::email('email', $user->email, ['disabled'] ) }}
	 	 	</div>
		</div>
		<div class="control-group">
			{{ Form::label('nickname', '昵称', ['class' => 'control-label']) }}
			<div class="controls">
				{{Form::text('nickname', Input::old('nickname') )}}
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('city', '城市', ['class' => 'control-label']) }}
			<div class="controls">
				{{ Form::text('signature', Input::old('signature')) }}
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('introduction', '个人介绍', ['class' => 'control-label']) }}
			<div class="controls">
				{{ Form::textarea('introduction', Input::old('introduction'), ['class' => 'span6', 'row' => 5]) }}
			</div>
		</div>
  	</div>
  </fieldset>
  <div class="form-actions">
	{{ Form::submit('更新个人信息') }}
  </div>

{{ Form::close() }}
</div>
@stop
