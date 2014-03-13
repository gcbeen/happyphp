@if(isset($type))
  @if(($type == 'password'))
    <div class="control-group">
    	{{ Form::label('password', '密码', ['class' => 'control-label']) }}
    	<div class="controls">
    		{{ Form::password('password', ['placeholder' => '********' ]) }}
			@if(isset($hint))
			<p class="help-block">通过发送一个链接到此邮箱地址，通过链接可进入重置密码页面</p>
			@endif
    	</div>
    </div>
  @endif
  
  @if(($type == 'checkbox'))
	<div class="control-group boolean optional">
		<div class="controls">
			<label class="checkbox">
				{{ Form::checkbox($field_name, $val)}}  {{ $label_text }}
				@if(isset($hint))
				<p class="help-block">通过发送一个链接到此邮箱地址，通过链接可进入重置密码页面</p>
				@endif
			</label>
		</div>
	</div>
  @endif
  
  @if(($type == 'textarea'))
  
  @endif
  
@else
  <div class="control-group">
  	{{ Form::label($field_name, $label_text, ['class' => 'control-label']) }}
  	<div class="controls">
		{{ Form::text($field_name, Input::old($field_name), [ 'placeholder' => $placeholder ] ) }}
		@if(isset($hint))
		<p class="help-block">通过发送一个链接到此邮箱地址，通过链接可进入重置密码页面</p>
		@endif
  	</div>
  </div>
@endif
