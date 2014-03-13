@extends('layout')

@section('title')
	个人信息
@stop

@section('content')
<div class="box tab-content user-info">
	@include('shared/info')
	<div class="tab-pane active">
		<div class='pull-right'>user_image_link @user </div>
			<!--<dl class='dl-horizontal'>-->
		<ul>
			@if(isset($user_info->nickname))
				<li><label>昵称:</label><strong>{{ $user->nickname }}</strong></li>
			@endif
			@if(isset($user->email))
				<li><label>邮箱地址:</label><span>{{ $user->email }}</span></li>
			@endif
			@if(isset($user_info->city))
				<li><label>城市:</label><span>{{ $user->city }}</span></li>
			@endif
			@if(isset($user_info->signature))
				<li><label>签名:</label><span>{{ $user->signature }}</span></li>
			@endif
			@if(isset($user_info->introduction))
				<li><label>个人介绍:</label><span>{{ $user->introduction }}</span></li>
			@endif
		</ul>
			<!--</dl>-->
	</div>
</div>
@stop

@section('foot')
<script>
	$('#profile').addClass('active')
</script>
@stop
