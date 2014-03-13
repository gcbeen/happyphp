<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>密码重置</h2>

		<div>
			重置密码, 请点击: {{ link_to(URL::to('password/reset', array($token)),URL::to('password/reset', array($token))) }}.
		</div>
	</body>
</html>
