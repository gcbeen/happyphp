@extends('layout')

@section('title')
  忘记密码
@stop

@section('content')
<div class='box'>
{{ Form::open( ['route' => 'remind', 'class' => 'form-horizontal']) }}
  <fieldset>
  <legend>忘记密码</legend>
  <div class="form-inputs">
	<div class="control-group">
		{{ Form::label('email', '邮箱地址', ['class' => 'control-label']) }}
		<div class="controls">
			{{ Form::text('email', Input::old('email'), ['placeholder' => 'example@example.com']) }}
			<p class="help-block">通过发送一个链接到此邮箱地址，通过链接可进入重置密码页面</p>
		</div>
	</div>
  </div>
  </fieldset>
  <div class="form-actions">
	{{ Form::submit('找回密码', ['class' => 'btn']) }}
  </div>
{{ Form::close() }}
</div>
@stop
