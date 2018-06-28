<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"C:\xampp\htdocs\think5\public/../application/user\view\login\index.html";i:1530156398;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>sign in</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Internship Sign In & Sign Up Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="/think5/public/static/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="/think5/public/static/css/snow.css" rel="stylesheet" type="text/css" media="all" />
<link href="/think5/public/static/css/login.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
<div class="snow-container">
			  <div class="snow foreground"></div>
			  <div class="snow foreground layered"></div>
			  <div class="snow middleground"></div>
			  <div class="snow middleground layered"></div>
			  <div class="snow background"></div>
			  <div class="snow background layered"></div>
			</div>

<div class="top-buttons-agileinfo">
<a href="<?php echo url('@index/index/index'); ?>">HOME</a><a href="index.html" class="active">Sign In</a><a href="signup.html">Sign Up</a>
</div>
<h1>Internship Sign In & Sign Up Form</h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2 class="sub-agileits">Sign In</h2>
			<form class="form-horizontal" method="post" name="form1" action="<?php echo url('login/check'); ?>">
					<input type="text" name="username" placeholder="Username" required="" />
					<input type="password" name="password" placeholder="Password" required="" />

					<input type="text" placeholder="请输入验证码" class="form-control" name="captcha">
                    <img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="javascript:this.src='<?php echo captcha_src(); ?>?tm='+Math.random();" style="cursor: pointer"/>
					<a href="#" class="forgot">Forgot Password ?</a>
				<div class="submit-w3l">
					<input type="submit" onclick="myFunction()" value="Sign in">
				</div>
				<p style="margin-top:20px;"><a style="color:#fff;" href="<?php echo url('@admin/login/index'); ?>">Administrator Login</a></p>
			</form>
		</div>
		</div>
<!--//form-ends-here-->
<!-- copyright -->
	<div class="copyright w3-agile">
		<!-- <p> © 2017 Internship Sign In & Sign Up Form . All rights reserved | Powered by <a href="http://www.smallseashell.com/" target="_blank">小贝壳网站模板</a></p> -->
	</div>
	<!-- //copyright --> 
	<script type="text/javascript" src="/think5/public/static/js/jquery-2.1.4.min.js"></script>

</body>
</html>