<ul class="nav pull-right">
	@if(Auth::check())
	<li class='dropdown'>
	  <a class='dropdown-toggle' href='#' data-toggle='dropdown'>{{ Auth::user()->email }}<b class='caret'></b></a>
	<ul class='dropdown-menu'>
		<li>{{ link_to_route('info', '个人主页') }}</li>
		<li>{{ link_to_route('profile', '个人信息设置') }}</li>
		<li>{{ link_to('/users/reset', '密码设置') }}</li>
	</ul>
	</li>
	<li>{{ link_to_route('logout', '登出') }}</li>
	@else
	<li>{{ link_to_route('login', '登录')}}</a></li>
	<li>{{ link_to_route('users.create', '注册') }}</li>
	@endif
</ul>
