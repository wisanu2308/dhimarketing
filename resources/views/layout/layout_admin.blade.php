<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> DHI </title>

	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" />

</head>

	<style type="text/css">
		.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
		    background-color: #D5D5D5;
		}

		body {
			background-repeat:no-repeat; 
			background-position:center; 
			background-size:cover; 
			padding:10px;
			background-color: #ECECEC;

		}

	</style>

	@yield("style")
	
<body>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{url('dhioffice')}}">
				DHI
			</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">

				<li><a href="{{url('dhioffice')}}">หน้าแรก</a></li>

				<?php $session_userid = isset($session_userid) ? $session_userid : ""; ?>
				<?php if ($session_userid == "" &&false){ ?>

					<li><a href="{{url('dhioffice/login')}}">เข้าสู่ระบบ</a></li>

				<?php } else { ?>

					<li><a href="{{url('dhioffice/manage_product')}}">จัดการสินค้า</a></li>
					<li><a href="{{url('dhioffice/manage_member')}}">จัดการสมาชิก</a></li>
					<li><a href="{{url('#')}}">จัดการกองทุน</a></li>
					<li><a href="{{url('#')}}">รายงาน</a></li>

				<?php } ?>

			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		
		@yield("htmlBody")

	</div>
	
</div>


<script type="text/javascript" src="{{asset("plugins/jquery/js/jquery.min.js")}}"></script>
<script type="text/javascript" src="{{asset("plugins/bootstrap/js/bootstrap.js")}}"></script>

@yield("script")

</body>


</html>