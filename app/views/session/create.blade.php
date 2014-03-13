@extends('layout');

@section('title')
	帐号登录
@stop

@section('content')
<div class='box'>
  {{ Form::open(['route' => 'session.store', 'class' => 'form-horizontal' ]) }}
  @include('shared.error_exception')
  <fieldset>
	<legend>帐号登录</legend>
    <div class="form-inputs">
		<div class="control-group">
			{{ Form::label('email', '邮箱地址', [ 'class' => 'control-label' ]) }}
			<div class="controls">
				{{ Form::text('email', Input::old('email'), [ 'placeholder' => "example@example.com" ] ) }}
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('password', '密码', ['class' => 'control-label']) }}
			<div class="controls">
				{{ Form::password('password', Input::old('password'), [ 'placeholder' => '******' ]) }}
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<label class="checkbox">
					{{ Form::checkbox('remember_me', true) }} 记住登录状态
				</label>
			</div>
		</div>
  </div>
</fieldset>

<div class="form-actions">
	{{ Form::submit('登录', ['class' => 'btn']) }}
  </div>
{{ Form::close() }}

</div>
@stop
