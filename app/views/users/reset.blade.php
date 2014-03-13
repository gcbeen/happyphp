@extends('layout')

@section('title')
  修改帐号密码
@stop

@section('content')
<div class='box'>
{{ Form::open(['url' => '/users/reset', 'method' => 'put', 'class' => 'form-horizontal']) }}
  @include('shared.error_exception')
  <fieldset>
	<legend>密码设置</legend>
  	  <div class="form-inputs">
		<div class="control-group">
			{{ Form::label('current_password', '当前密码', ['class' => 'control-label']) }}
			<div class="controls">
				{{ Form::password('current_password') }}
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('password', '新密码', ['class' => 'control-label']) }}
			<div class="controls">
				{{ Form::password('password') }}
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('password_confirmed', '确认新密码', ['class' => 'control-label']) }}
			<div class="controls">
				{{ Form::password('password_confirmed') }}
			</div>
		</div>
  </div>
</fieldset>
  <div class="form-actions">
	{{ Form::submit('修改密码') }}
  </div>

{{ Form::close() }}
</div>
@stop
