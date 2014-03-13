
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta property="wb:webmaster" content="d01aff26e2b6e07f" />
	<meta property="qc:admins" content="0100233053730110060527351006375" />
	
	<title>happy-php @yield('title')</title>

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js" type="text/javascript"></script>
    <![endif]-->

	<?= stylesheet_link_tag() ?>
	<link rel='stylesheet' href='/bootstrap_static.css' type='text/css'>
    <!-- For third-generation iPad with high-resolution Retina display: -->
    <!-- Size should be 144 x 144 pixels -->

    <!-- For iPhone with high-resolution Retina display: -->
    <!-- Size should be 114 x 114 pixels -->

    <!-- For first- and second-generation iPad: -->
    <!-- Size should be 72 x 72 pixels -->

    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <!-- Size should be 57 x 57 pixels -->

    <!-- For all other devices -->
    <!-- Size should be 32 x 32 pixels -->
  </head>
  <body>

    <div class="navbar navbar-inverse" data-offset-top='200'>
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
		  <a class="brand" href="/">Happy-php</a>
          <div class="container nav-collapse collapse">
            <ul class="nav">
              <li><a href='#'>首页</a></li>
              <li><a href='#'>帖子</a></li>
              <li><a href='#'>发帖子</a></li>
              <li><a href='#'>博客</a></li>
              <li><a href='#'>写博客</a></li>
              <li><a href='#'>回复</a></li>
			  <li><a href='#'>相册</a></li>
            </ul>
			@include('shared.login_link')
			<form class="navbar-search pull-right" action='http://www.google.com/search' target='_blank'>
				<input type="hidden" value="insoshi100.com" name="as_sitesearch">
				
				<input class="search-query" type="text" data-provide='typeahead' placeholder="搜索" name='as_q'>
			</form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class='set_color'>
	<div class="container">
		<ul class="breadcrumb">
			<li>
				<a href="/">首页</a>
				<span class="divider">/</span>
			</li>
			<li>
				<a href='#'>gcbeen</a>
				<span class="divider">/</span>
			</li>
			<li class='active'>@yield('title')</li>
		</ul>
	</div>
    <div class="container">
      <div class="row">
		@include('shared.flash')
        <div class="span8">
			@yield('content')
        </div>
        <div class="span4" id='sidebar'>
			@include('shared.sidebar')
			<!--%= render partial: 'layouts/shared/sidebar' %-->
        </div><!--/span-->
      </div><!--/row-->
  </div> <!-- /container -->
  </div>
      <footer>
	  <p>&copy; Company <?= date('Y'); ?></p>
      </footer>


    <!-- Javascripts
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<?= javascript_include_tag() ?>
  </body>
</html>
