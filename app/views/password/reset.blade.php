@extends('layout');

@section('title')
  修改帐号密码
@stop

@section('content')
<div class='box'>
{{ Form::open(['url' => URL::route('reset'), 'class' => 'form-horizontal', 'method' => 'put']) }}
  <fieldset>
    <legend>修改账号密码</legend>
	<div class="form-inputs">
	  <div class="control-group">
	  	{{ Form::label('email', '邮箱地址', [ 'class' => 'control-label' ]) }}
		<div class="controls">
		  {{ Form::text('email', Input::old('email'), ['placeholder' => 'example@example.com']) }}
		</div>
	  </div>
      <div class="control-group">
		{{ Form::hidden('token', $token) }}
      	{{ Form::label('password', '新密码', [ 'class' => 'control-label' ]) }}
      	<div class="controls">
      		{{ Form::password('password') }}
      	</div>
      </div>
      <div class="control-group">
      	{{ Form::label('password_confirmation', '确认新密码', ['class' => 'control-label']) }}
      	<div class="controls">
      	{{ Form::password('password_confirmation') }}
      	</div>
      </div>
    </div>
  </fieldset>
  <div class="form-actions">
	{{ Form::submit('修改密码', [ 'class' => 'btn' ]) }}
  </div>
{{ Form::close() }}
</div>
@stop
