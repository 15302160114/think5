<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\xampp\htdocs\think5\public/../application/index\view\index\index.html";i:1529935963;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Home</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="/think5/public/static/css/base.css">
   <link rel="stylesheet" href="/think5/public/static/css/vendor.css">  
   <link rel="stylesheet" href="/think5/public/static/css/main.css">
        

   <!-- script
   ================================================== -->
	<script src="/think5/public/static/js/modernizr.js"></script>
	<script src="/think5/public/static/js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="/think5/public/static/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/think5/public/static/images/favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
	         <a href="index.html">Author</a>
	      </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation sf-menu">
					<li class="current"><a href="index.html" title="">Home</a></li>									
					<li class="has-children">
						<a href="" title="">Categories</a>
						<ul class="sub-menu">
                  <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			            <li><a href="category.html?id=<?php echo $vo['id']; ?>"><?php echo $vo['categoryname']; ?></a></li>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
			         </ul>
					</li>
					<li class="has-children"><a href="" title="">Blog</a></li>
					<li><a href="<?php echo url('@user/login/index'); ?>" title="">Sign in</a></li>	
					<li><a href="<?php echo url('@user/login/signup'); ?>" title="">Sign up</a></li>										
				</ul>
			</nav> <!-- end main-nav-wrap -->

			<div class="search-wrap">
				
				<form role="search" method="get" class="search-form" action="#">
					<label>
						<span class="hide-content">Search for:</span>
						<input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
					</label>
					<input type="submit" class="search-submit" value="Search">
				</form>

				<a href="#" id="close-search" class="close-btn">Close</a>

			</div> <!-- end search wrap -->	

			<div class="triggers">
				<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
				<a class="menu-toggle" href="#"><span>Menu</span></a>
			</div> <!-- end triggers -->	
   		
   	</div>     		
   	
   </header> <!-- end header -->


   <!-- masonry
   ================================================== -->
   <section id="bricks">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>

         	<div class="brick entry featured-grid animate-this">
         		<div class="entry-content">
         			<div id="featured-post-slider" class="flexslider">
			   			<ul class="slides">

				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('/think5/public/static/images/thumbs/featured/featured-1.jpg');"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>September 06, 2016</li> 
												<li><a href="#" >Naruto Uzumaki</a></li>				
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.html" title="">Minimalism Never Goes Out of Style</a></h1> 
								   	</div> 				   					  
				   			
				   				</div>
				   			</li> <!-- /slide -->

				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('/think5/public/static/images/thumbs/featured/featured-2.jpg');"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>August 29, 2016</li>
												<li><a href="#">Sasuke Uchiha</a></li>					
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.html" title="">Enhancing Your Designs with Negative Space</a></h1>
						   			</div>		   				   					  
				   			
				   				</div>
				   			</li> <!-- /slide -->

				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('/think5/public/static/images/thumbs/featured/featured-3.jpg');;"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li>August 27, 2016</li>
												<li><a href="#" class="author">Naruto Uzumaki</a></li>					
											</ul>	

								   		<h1 class="slide-title"><a href="single-standard.html" title="">Music Album Cover Designs for Inspiration</a></h1>
						   			</div>

				   				</div>
				   			</li> <!-- end slide -->

				   		</ul> <!-- end slides -->
				   	</div> <!-- end featured-post-slider -->        			
         		</div> <!-- end entry content -->         		
         	</div>

			<?php if(is_array($articles) || $articles instanceof \think\Collection || $articles instanceof \think\Paginator): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
         	<article class="brick entry format-standard animate-this">
		
               <div class="entry-thumb">
                  <a href="single.html?id=<?php echo $vo['id']; ?>" class="thumb-link">
	                  <img src="/think5/public/uploads/<?php echo $vo['author_id']; ?>/<?php echo $vo['logo']; ?>" alt="building">             
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<?php echo $vo['description']; ?>   				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html"><?php echo $vo['title']; ?></a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							<?php echo html_entity_decode($vo['content']); ?>
						</div>
                  <div class="share_pa_box">
                     <span class="share-ico1" href="#"  >1546</span>
                     <span class="share-ico2 up" id="<?php echo $vo['id']; ?>"><?php echo $vo['up']; ?></span>

                     <span class="share-ico3" href="#" >7</span>
                  </div>
               </div>
        	</article> <!-- end article -->
			<?php endforeach; endif; else: echo "" ;endif; ?>
         	<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="/think5/public/static/images/thumbs/diagonal-building.jpg" alt="building">             
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">Photography</a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">Just a Standard Format Post.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
                  <div class="share_pa_box">
                     <span class="share-ico1">1546</span>
                     <span class="share-ico2" id="danji"><?php echo $vo['up']; ?></span>
                     <span class="share-ico3">7</span>
                  </div>   
               </div>

        		</article> <!-- end article -->

            <article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single.html" class="thumb-link">
	                  <img src="/think5/public/static/images/thumbs/ferris-wheel.jpg" alt="ferris wheel">                   
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">UI</a>                			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">This Is Another Standard Format Post.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
                  <div class="share_pa_box">
                     <span class="share-ico1">1546</span>
                     <span class="share-ico2" id="danji"><?php echo $vo['up']; ?></span>
                     <span class="share-ico3">7</span>
                  </div>
               </div>
               
        		</article> <!-- end article -->
                
            <!-- format audio here -->
            <article class="brick entry format-audio animate-this">

               <div class="entry-thumb">
                  <a href="single-audio.html" class="thumb-link">
	                  <img src="/think5/public/static/images/thumbs/concert.jpg" alt="concert">                      
                  </a>

                  <div class="audio-wrap">
                  	<audio id="player" src="media/AirReview-Landmarks-02-ChasingCorporate.mp3" width="100%" height="42" controls="controls"></audio>                  	
                  </div>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">Music</a>                				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-audio.html">This Is a Audio Format Post.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
                  <div class="share_pa_box">
                     <span class="share-ico1">1546</span>
                     <span class="share-ico2" id="danji"><?php echo $vo['up']; ?></span>
                     <span class="share-ico3">7</span>
                  </div>
               </div>
               
        		</article> <!-- /article -->

         	<article class="brick entry format-quote animate-this" >

               <div class="entry-thumb">                  
	               <blockquote>
	                 	<p>Good design is making something intelligible and memorable. Great design is making something memorable and meaningful.</p>

	                 	<cite>Dieter Rams</cite> 
	               </blockquote>	          
               </div>   

        		</article> <!-- end article -->

         	<article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="/think5/public/static/images/thumbs/shutterbug.jpg" alt="Shutterbug">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Photography</a> 
               				<a href="#">html</a>                				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">Photography Skills Can Improve Your Graphic Design.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
                  <div class="share_pa_box">
                     <span class="share-ico1">1546</span>
                     <span class="share-ico2" id="danji"><?php echo $vo['up']; ?></span>
                     <span class="share-ico3">7</span>
                  </div>
               </div>
               
        		</article> <!-- end article -->

            <article class="brick entry animate-this" >

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="/think5/public/static/images/thumbs/usaf-rocket.jpg" alt="USAF rocket">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Branding</a> 
               				<a href="#">Mockup</a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">The 10 Golden Rules of Clean Simple Design.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
                  <div class="share_pa_box">
                     <span class="share-ico1">1546</span>
                     <span class="share-ico2" id="danji"><?php echo $vo['up']; ?></span>
                     <span class="share-ico3">7</span>
                  </div>
               </div>
               
        		</article> <!-- end article -->        	

        		<article class="brick entry format-gallery group animate-this">

               <div class="entry-thumb">

                  <div class="post-slider flexslider">
							<ul class="slides">
								<li>
									<img src="/think5/public/static/images/thumbs/gallery/work1.jpg"> 
								</li>
								<li>
									<img src="/think5/public/static/images/thumbs/gallery/work2.jpg"> 
								</li>
								<li>
									<img src="/think5/public/static/images/thumbs/gallery/work3.jpg"> 
								</li>
							</ul>							
						</div> 

               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Branding</a> 
               				<a href="#">Wordpress</a>               				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-gallery.html">Workspace Design Trends and Ideas.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
                  <div class="share_pa_box">
                     <span class="share-ico1">1546</span>
                     <span class="share-ico2" id="danji"><?php echo $vo['up']; ?></span>
                     <span class="share-ico3">7</span>
                  </div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry format-link animate-this">

               <div class="entry-thumb">
                  <div class="link-wrap">
	                 	<p>Looking for affordable &amp; reliable web hosting? We recommend Dreamhost.</p>
	                 	<cite>
	                 		<a target="_blank" href="#">http://sc.chinaz.com</a>
	                 	</cite>
	               </div>	
               </div>               
               
        		</article> <!-- end article -->


         	<article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="/think5/public/static/images/thumbs/diagonal-pattern.jpg" alt="Pattern">              
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">UI</a>                			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">You Can See Patterns Everywhere.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
                  <div class="share_pa_box">
                     <span class="share-ico1">1546</span>
                     <span class="share-ico2" id="danji"><?php echo $vo['up']; ?></span>
                     <span class="share-ico3">7</span>
                  </div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry format-video animate-this">

               <div class="entry-thumb video-image">
                  <a href="" data-lity>
	                  <img src="/think5/public/static/images/thumbs/ottawa-bokeh.jpg" alt="bokeh">                   
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Design</a> 
               				<a href="#">Branding</a>               			
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-video.html">This Is a Video Post Format.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
                  <div class="share_pa_box">
                     <span class="share-ico1">1546</span>
                     <span class="share-ico2" id="danji"><?php echo $vo['up']; ?></span>
                     <span class="share-ico3">7</span>
                  </div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="/think5/public/static/images/thumbs/lighthouse.jpg" alt="Lighthouse">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Photography</a> 
               				<a href="#">Design</a>
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">Breathtaking Photos of Lighthouses.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
                  <div class="share_pa_box">
                     <span class="share-ico1">1546</span>
                     <span class="share-ico2" id="danji"><?php echo $vo['up']; ?></span>
                     <span class="share-ico3">7</span>
                  </div>
               </div>
               
        		</article> <!-- end article -->

        		<article class="brick entry animate-this">

               <div class="entry-thumb">
                  <a href="single-standard.html" class="thumb-link">
	                  <img src="/think5/public/static/images/thumbs/liberty.jpg" alt="Liberty">                      
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="#">Branding</a> 
               				<a href="#">html</a>                	
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="single-standard.html">Designing With Black and White.</a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
                  <div class="share_pa_box">
                     <span class="share-ico1">1546</span>
                     <span class="share-ico2" id="danji"><?php echo $vo['up']; ?></span>
                     <span class="share-ico3">7</span>
                  </div>
               </div>
               
        		</article> <!-- end article -->

         </div> <!-- end brick-wrapper --> 

   	</div> <!-- end row -->

   	<div class="row">
   		
   		<nav class="pagination">
		      <span class="page-numbers prev inactive">Prev</span>
		   	<span class="page-numbers current">1</span>
		   	<a href="#" class="page-numbers">2</a>
		      <a href="#" class="page-numbers">3</a>
		      <a href="#" class="page-numbers">4</a>
		      <a href="#" class="page-numbers">5</a>
		      <a href="#" class="page-numbers">6</a>
		      <a href="#" class="page-numbers">7</a>
		      <a href="#" class="page-numbers">8</a>
		      <a href="#" class="page-numbers">9</a>
		   	<a href="#" class="page-numbers next">Next</a>
	      </nav>

   	</div>

   </section> <!-- end bricks -->

   
   <!-- footer
   ================================================== -->
   <footer>

   	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-four tab-full mob-full footer-info">            

	            <h4>About Our Site</h4>

	               <p>
		          	Lorem ipsum Ut velit dolor Ut labore id fugiat in ut fugiat nostrud qui in dolore commodo eu magna Duis cillum dolor officia esse mollit proident Excepteur exercitation nulla. Lorem ipsum In reprehenderit commodo aliqua irure labore.
		          	</p>

		      </div> <!-- end footer-info -->

	      	<div class="col-two tab-1-3 mob-1-2 site-links">

	      		<h4>Site Links</h4>

	      		<ul>
	      			<li><a href="#">About Us</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>

	      	</div> <!-- end site-links -->  

	      	<div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Social</h4>

	      		<ul>
	      			<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Dribbble</a></li>
						<li><a href="#">Google+</a></li>
						<li><a href="#">Instagram</a></li>
					</ul>
	      	           	
	      	</div> <!-- end social links --> 

	      	<div class="col-four tab-1-3 mob-full footer-subscribe">

	      		<h4>Subscribe</h4>

	      		<p>Keep yourself updated. Subscribe to our newsletter.</p>

	      		<div class="subscribe-form">
	      	
	      			<form id="mc-form" class="group" novalidate="true">

							<input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="Type &amp; press enter" required=""> 
	   		
			   			<input type="submit" name="subscribe" >
		   	
		   				<label for="mc-email" class="subscribe-message"></label>
			
						</form>

	      		</div>	      		
	      	           	
	      	</div> <!-- end subscribe -->         

	      </div> <!-- end row -->

   	</div> <!-- end footer-main -->

      <div class="footer-bottom">
      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://www.smallseashell.com/">小贝壳</a></span> 
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> 
      </div> <!-- end footer-bottom -->  

   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="/think5/public/static/js/jquery-1.11.1.min.js"></script>
   <script src="/think5/public/static/js/plugins.js"></script>
   <script src="/think5/public/static/js/jquery.appear.js"></script>
   <script src="/think5/public/static/js/main.js"></script>
   <script type="text/javascript" src="/think5/public/static/js/bootbox.js"></script>

</body>
<script type="text/javascript">
   $(document).ready(function() { 
      $(".up").click(function() {
         var Oa=$(this);
         var id=Oa.attr('id');//获取id属性
         var vl= $('#'+id).text();

         var m=parseInt(vl)+1;
         
         
         $.ajax({
            url: "<?php echo url('index/up'); ?>",
               data: {
               up:m,
               id:id,
            },
            async: true,   //是否为异步请求
            cache: false,  //是否缓存结果
            type: "POST", //请求方式为POST
            dataType: "json",   //服务器返回的数据是什么类型
            success: function(data){  
               $('#'+id).empty();
               $('#'+id).append(m);
               $('#'+id).removeAttr("onclick");
               alert('点赞成功');
            }
         });
      });
   });

</script>
</html>