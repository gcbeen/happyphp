@extends('layout')

@section('title')
	注册帐号
@stop

@section('content')
<div class='box'>
{{ Form::open([ 'route' => 'users.store', 'class' => 'form-horizontal' ]) }}
  @include('shared.error_exception')
  <fieldset>
    <legend>注册帐号</legend>
  <div class="form-inputs">
	<div class="control-group">
		{{ Form::label('email', '邮箱地址', [ 'class' => 'control-label' ]) }}
		<div class="controls">
			{{ Form::email('email', Input::old('email'), ['placeholder' => 'example@example.com']) }}
		</div>
	</div>
	<div class="control-group">
		{{ Form::label('password', '密码', [ 'class' => 'control-label' ]) }}
		<div class="controls">
			{{ Form::password('password', Input::old('password'), ['placeholder' => '******']) }}
		</div>
	</div>
	<div class="control-group">
		{{ Form::label('password_confirmation','确认密码', ['class' => 'control-label']) }}
		<div class="controls">
			{{ Form::password('password_confirmation') }}
		</div>
	</div>
  </div>
  </fieldset>

  <div class="form-actions">
	{{ Form::submit('注册', [ 'class' => 'btn' ]) }}
  </div>
{{ Form::close() }}
</div>
@stop
