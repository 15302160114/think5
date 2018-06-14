<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\xampp\htdocs\think5\public/../application/index\view\index\index.html";i:1528943367;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="/think5/public/static/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="/think5/public/static/css/index.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="/think5/public/static/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="http://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="/think5/public/static/js/jquery-1.11.3.min.js"></script>
<script src="/think5/public/static/js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="header">
				<div class="container">
					<div class="header-top-grids">
						<div class="agileits-logo">
							<h1><a href="index.html">WV <span>Wedding venue</span></a></h1>
						</div>
						<div class="top-nav">
							<nav class="navbar navbar-default">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
									<nav>
										<ul class="nav navbar-nav">
											<li class="active"><a href="index.html">Home</a></li>
											<li><a href="about.html">About</a></li>
											<li><a href="gallery.html">Gallery</a></li>
											<li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Codes<span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a class="hvr-bounce-to-bottom" href="icons.html">Icons</a></li>
													<li><a class="hvr-bounce-to-bottom" href="typography.html">Typography</a></li>          
												</ul>
											</li>	
											<li><a href="mail.html">Mail Us</a></li>
										</ul>
									</nav>
								</div>
								<!-- /.navbar-collapse -->
							</nav>
						</div>
						<div class="agileinfo-social-grids">
							<ul>
								<li><a href="<?php echo url('@user/login/index'); ?>">登录</a></li>
								<li><a href="<?php echo url('@user/login/zhuce'); ?>">注册</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="w3layouts-banner">
				<div class="container">
					<div class="w3-banner-info">
						<div class="w3l-banner-text">
							<h2>Wedding Venue</h2>
							<p>We create your special day</p>
						</div>
					</div>
				</div>
			</div>
			<div class="w3ls-banner-info-bottom">
				<div class="container">
					<div class="banner-address">
						<div class="col-md-4 banner-address-left">
							<p><i class="fa fa-map-marker" aria-hidden="true"></i> St Dolore Place,ingsport 56777.</p>
						</div>
						<div class="col-md-4 banner-address-left">
							<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:example@email.com">mail@example.com</a></p>
						</div>
						<div class="col-md-4 banner-address-left">
							<p><i class="fa fa-phone" aria-hidden="true"></i> +1 234 567 8901</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="wthree-bottom-grids">
				<div class="col-md-6 wthree-bottom-grid">
					<div class="w3-agileits-bottom-left">
						<div class="w3-agileits-bottom-left-text">
							<h3>Planning from start to finish</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id lacus vel purus sagittis convallis ut ac risus.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 wthree-bottom-grid">
					<div class="w3-agileits-bottom-left w3-agileits-bottom-right">
						<div class="w3-agileits-bottom-left-text">
							<h3>LET THE EXPERTS RUN YOUR WEDDING</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id lacus vel purus sagittis convallis ut ac risus.</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->
	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="agile-heading">
				<h3>Our Services</h3>
			</div>
			<div class="w3-agileits-services-grids">
				<div class="services-right-grids">
					<div class="col-sm-3 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-anchor" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Phasellus suscipit</h5>
						</div>
					</div>
					<div class="col-sm-3 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-comment" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Phasellus suscipit</h5>
						</div>
					</div>
					<div class="col-sm-3 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-heartbeat" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Phasellus suscipit</h5>
						</div>
					</div>
					<div class="col-sm-3 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-magnet" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Phasellus suscipit</h5>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- services-bottom -->
	<div class="services-bottom">
		<div class="container">
			<div class="wthree-services-bottom-grids">
				<div class="col-md-6 wthree-services-left">
					<img src="/think5/public/static/images/5.jpg" alt="" />
				</div>
				<div class="col-md-6 wthree-services-right">
					<div class="wthree-services-right-top">
						<h4>Pellentesque ut turpis et eros elementum</h4>
						<p>Nam tempor pharetra egestas. Nam varius condimentum faucibus. Duis eget lobortis felis, id laoreet massa. Donec tempor ex ultrices nisi commodo consectetur. Maecenas a diam cursus, vehicula ligula vel, fringilla libero. Mauris eu nulla mi.</p>
					</div>
					<div class="wthree-services-right-bottom">
						<div class="services-right-bottom-bottom">
							<div class="services-bottom-icon">
								<i class="fa fa-bell" aria-hidden="true"></i>
							</div>
							<div class="services-bottom-info">
								<h5>Nam congue</h5>
								<p>In hac habitasse platea dictumst. Proin et ipsum non augue porttitor mollis eget semper nisl.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="services-right-bottom-bottom">
							<div class="services-bottom-icon">
								<i class="fa fa-asterisk" aria-hidden="true"></i>
							</div>
							<div class="services-bottom-info">
								<h5>Nam congue</h5>
								<p>In hac habitasse platea dictumst. Proin et ipsum non augue porttitor mollis eget semper nisl.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree-services-bottom-grids w3-services-bottom">
				<div class="col-md-6 wthree-services-right">
					<div class="wthree-services-right-top">
						<h4>Pellentesque ut turpis et eros elementum</h4>
						<p>Nam tempor pharetra egestas. Nam varius condimentum faucibus. Duis eget lobortis felis, id laoreet massa. Donec tempor ex ultrices nisi commodo consectetur. Maecenas a diam cursus, vehicula ligula vel, fringilla libero. Mauris eu nulla mi.</p>
					</div>
					<div class="wthree-services-right-bottom">
						<div class="services-right-bottom-bottom">
							<div class="services-bottom-icon">
								<i class="fa fa-bell" aria-hidden="true"></i>
							</div>
							<div class="services-bottom-info">
								<h5>Nam congue</h5>
								<p>In hac habitasse platea dictumst. Proin et ipsum non augue porttitor mollis eget semper nisl.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="services-right-bottom-bottom">
							<div class="services-bottom-icon">
								<i class="fa fa-asterisk" aria-hidden="true"></i>
							</div>
							<div class="services-bottom-info">
								<h5>Nam congue</h5>
								<p>In hac habitasse platea dictumst. Proin et ipsum non augue porttitor mollis eget semper nisl.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 wthree-services-left">
					<img src="/think5/public/static/images/6.jpg" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services-bottom -->
	<!-- footer -->
	<footer>
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-4 agile-footer-grid">
					<h4>About</h4>
					<div class="agile-footer-info">
						<p>Aliquam turpis nisl, malesuada et vehicula et, laoreet eu enim. Aliquam eu pharetra urna. Proin accumsan augue massa, vitae malesuada sem pharetra et.</p>
						<h5>Subscribe Here</h5>
						<form action="#" method="post">
							<input type="email" name="Email" placeholder="Email" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
				<div class="col-md-4 agile-footer-grid">
					<h4>Recent Posts</h4>
					<div class="agile-post-grids">
						<div class="agile-post-grid">
							<div class="col-md-5 agile-post-left">
								<a href="single.html">
									<img src="/think5/public/static/images/p1.jpg" alt="">
								</a>
							</div>
							<div class="col-md-7 agile-post-right">
								<h5><a href="single.html">Nulla at arcu eu justo blandit eleifend.</a></h5>
								<p><i class="fa fa-calendar-o" aria-hidden="true"></i> 03 Jan 2017</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="agile-post-grid">
							<div class="col-md-5 agile-post-left">
								<a href="single.html">
									<img src="/think5/public/static/images/p2.jpg" alt="">
								</a>
							</div>
							<div class="col-md-7 agile-post-right">
								<h5><a href="single.html">Nulla at arcu eu justo blandit eleifend.</a></h5>
								<p><i class="fa fa-calendar-o" aria-hidden="true"></i> 24 Jan 2017</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-4 agile-footer-grid">
					<h4>Flickr Images</h4>
					<div class="popular-grids">
						<div class="popular-grid">
							<a href="single.html"><img src="/think5/public/static/images/f1.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="single.html"><img src="/think5/public/static/images/f2.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="single.html"><img src="/think5/public/static/images/f3.jpg" alt=""></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="popular-grids">
						<div class="popular-grid">
							<a href="single.html"><img src="/think5/public/static/images/f4.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="single.html"><img src="/think5/public/static/images/f5.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="single.html"><img src="/think5/public/static/images/f6.jpg" alt=""></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="agileits-w3layouts">
		<div class="container">
			<p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://www.smallseashell.com/">贝壳模板</a></p>
		</div>
	</div>
	<!-- //copyright -->
	<!-- jarallax -->
	<script src="/think5/public/static/js/jarallax.js"></script>
	<script src="/think5/public/static/js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax -->
	<script src="/think5/public/static/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="/think5/public/static/js/move-top.js"></script>
	<script type="text/javascript" src="/think5/public/static/js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="/think5/public/static/js/modernizr.custom.js"></script>

</body>	
</html>