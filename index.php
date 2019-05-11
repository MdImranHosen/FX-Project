<?php
/*
Md Imran Hosen
web developer
www.github.com/MdImranHosen
*/
include "lib/Database.php";

$db = new Database();

 include_once ([URL-Edit]'PHPMailer-5.2.0/class.phpmailer.php');

  $mail = new PHPMailer();
         
  if(isset($_POST['submit'])){
      $name    = $_POST['name'];
      $email   = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      
     $name     = mysqli_real_escape_string($db->link, $name);
     $email    = mysqli_real_escape_string($db->link, $email);
     $subject  = mysqli_real_escape_string($db->link, $subject);
     $message  = mysqli_real_escape_string($db->link, $message);
      
      if(empty($name) || empty($email) || empty($subject) || empty($message)){
          echo '<script>alert("Field must not be Empty!")</script>'; 
      }else{
          
          	/* /// Start Mail Send ///// */
        	
				if (!filter_var($email, FILTER_VALIDATE_EMAIL) !== true) {
			        if(!empty($email)){
                     
                    $mail->IsSMTP();                                      // set mailer to use SMTP
                    $mail->Host = "localhost";  // specify main and backup server
                    $mail->SMTPAuth = true;     // turn on SMTP authentication
                    $mail->Username = "info@domain.com";  // SMTP username
                    $mail->Password = "domain.com"; // SMTP password
                    
                    $mail->From = "info@domain.com";
                    $mail->FromName = $name; 
                    $mail->AddAddress("imranhossen5912@gmail.com");   // mailto:imranhossen5912@gmail.com
                                        
                    $mail->WordWrap = 50;                                 // set word wrap to 50 characters
                    $mail->IsHTML(true);                                  // set email format to HTML
                    
                    $mail->Subject = $subject;
                    
                    $mail->Body    = "
                                     <center>
                                     <h2>".$name." ".$email." </h2><hr>
                                     <h3>".$subject."</h3><hr>
                                     <p>".$message."</p><hr>
                                     <p>www.domain.com</p>
                                     </center>
                                     ";
                    
                    if(!$mail->Send())
                    {
                       $msg = "<span class='alert alert-danger'>Message could not be sent. </span><p>";
                       $msg = "Mailer Error: " . $mail->ErrorInfo;
                       
                       exit;
                    }else{
                    
                    $msg = "<span class='alert alert-FX'>Message has been sent</span>";
                    
                    	 //end phpmailer use
	 
                    }
                     
                     
                     
                     
                     
		        	}
				}
        	
        	/* end */
         
          
          
          
          
          /*echo '<script>alert("'.$name.$email. $subject.$message.'")</script>';*/
      }
      
      
     
  }

?>

<?php include 'header.php';?>

	<!-- Slider start -->
	<section id="home" class="no-padding">	
    	<div id="" class="cd-hero">
			<ul class="cd-hero-slider">
				<li class="selected">
					<div class="overlay2">
						<img class="" src="images/slider/bg1.jpg" alt="slider">
					</div>
					<div class="cd-full-width">
						<h2>FX Network Trading</h2>
						<h3>"FX is a reality that needs to be created!"</h3>
						<a href="http://github.com/MdImranHosen" target="_blank" class="btn btn-primary white cd-btn">Start Now</a>
					
					</div> <!-- .cd-full-width -->
				</li>
			
			
			</ul> <!--/ cd-hero-slider -->


		</div><!--/ Main slider end -->    	
    </section> <!--/ Slider end -->


    <!-- Service box start -->
	<section id="about" class="service">
	<div class="container">

			<!-- Company Profile -->

			<div class="row">
				<div class="col-md-12 heading text-center">
					<h2 class="title2">About Our Company
						<span class="title-desc">Is a company that seeks investors to invest and grow the FX TRADING platform.  Providing investors with another stream of income, to achieve their goals and dreams.</span>
					</h2>
				</div>
			</div><!-- Title row end -->

			<div class="row about-wrapper-top">
				<div class="col-md-6 ts-padding about-message">
					<h3>Mission</h3>
					<p>"To help investors find the best and safest way to trade and earn additional income and change peoples lives to become debt free and financially stable."</p>
						<h3>Vision</h3>
					<p>"To create a strong network of investors working together and building a solid foundation that will open many doors to a FXful sustainable stream of income."</p>
				</div><!--/ About message end -->
				
				<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(images/pages/about-1.jpg) 50% 50% / cover no-repeat;">
				</div><!--/ About image end -->
			</div><!--/ Content row end -->

			<div class="row about-wrapper-bottom">
				<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(images/pages/about-2.jpg) 50% 50% / cover no-repeat;">
				</div><!--/ About image end -->
				<div class="col-md-6 ts-padding about-message">
					<h3>Goal</h3>
					<p>To create a vast network of  investors and entrepeneurs. Making dreams a reality. Empowering our motto -  “FX is a reality that can be created”.</p><br>
					<a href="http://github.com/MdImranHosen" target="_blank" class="pull-right btn btn-primary black">Start Now</a>
				</div><!--/ About message end -->
			</div><!--/ Content row end -->

			<!-- Company Profile -->

		</div><!--/ 1st container end -->

			
	</section><!--/ Service box end -->
    <!-- Parallax 1 start -->
	<section class="parallax parallax1">
		<div class="parallax-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Are You Ready to Achieve Your Goal !</h2>
					<h3>Just Click Button and Sign Up Now</h3>
					<p>
						<a href="http://github.com/MdImranHosen" target="_blank" class="btn btn-primary white">Start Now</a>
						<a href="http://github.com/MdImranHosen" target="_blank" class="btn btn-primary solid">Get In Touch</a>
					</p>
				</div>
			</div>
		</div><!-- Container end -->
    </section><!-- Parallax 1 end -->

    <section id="featured-video" class="featured-video">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="video-embed wow fadeIn" data-wow-duration="1s">
						<!-- Change the url -->
					
					<iframe width="500" height="281" src="https://www.youtube.com/embed/zdIRSsGLBHA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					
					
					
				</div>
				<div class="col-md-6">
					<div class="video-block-head fxtrading-corporation">
						<h2>What is <strong>FXTRADING</strong> corporation?</h2>
						<p><strong>FXTRADING CORPORATION</strong> is a global company with many investors and entrepreneurs in the World. Already developed by a team of professionals currently in the field of FX and <strong>CRYPTOTRADING</strong> and they created the software. It also helps many investors make money from mining companies in various places around the world with the following coins. Bitcoin, Etherium, Bitcoin in cash, Litecoin, etc. Even if you do not have experience in this market, it is an opportunity to earn profits automatically and gain a lot of growth.
						</p>
					</div>

				
				</div>
			</div>
		</div>
	</section>

	<!-- Counter Strat -->
	<section class="ts_counter no-padding">
		<div class="container-fluid">
			<div class="row ratings-wrapper wow fadeInLeft text-center">
				<div class="ratings one col-md-4 col-sm-6">
				     <i class="fa fa-street-view" style="color:white;font-size:40px;font-weight:800;"></i>
				     <h3>Active Users</h3> 
					<div class="ratings-num">
						<span class="counter">896.000</span>
					</div>
				</div>

				<div class="ratings two col-md-4 col-sm-6">
				  <i class="fa fa-anchor" aria-hidden="true" style="color:white;font-size:40px;font-weight:800;"></i>
				  <h3>Trading Professionals </h3> 
					<div class="ratings-num">
						<span class="counter">23</span>
					</div>
				</div>

				<div class="ratings three col-md-4 col-sm-6">
				    <i class="fa fa-flag-o" aria-hidden="true" style="color:white;font-size:40px;font-weight:800;"></i>
				    
				    <h3>Countries</h3> 
					<div class="ratings-num">
						<span class="counter">209</span>
					</div>
					
				</div>

			</div>
		</div><!--/ Container end -->
    </section><!--/ Counter end -->
 

	<section id="home" class="no-padding">
		<div class="container-fluid">
			<div class="row" style="border-top:7px solid #ddd;">
				<div class="col-md-6 ts-padding">
				
    	<div id="main-slide" class="carousel slide" data-ride="carousel" style="border-top:4px solid #ddd;">
    		<!--div class="overlay"></div-->
			<!-- Indicators -->
			<ol class="carousel-indicators" style="margin-bottom: 0px;    bottom: 0px;width: 100%; */">
			  	<li data-target="#main-slide" data-slide-to="0" class="active"></li>
			    <li data-target="#main-slide" data-slide-to="1"></li>
			    <li data-target="#main-slide" data-slide-to="2"></li>
			    <li data-target="#main-slide" data-slide-to="3"></li>
				<li data-target="#main-slide" data-slide-to="4"></li>
			    <li data-target="#main-slide" data-slide-to="5"></li>
			    <li data-target="#main-slide" data-slide-to="6"></li>
				<li data-target="#main-slide" data-slide-to="7"></li>
			    <li data-target="#main-slide" data-slide-to="8"></li>
			    <li data-target="#main-slide" data-slide-to="10"></li>
				<li data-target="#main-slide" data-slide-to="11"></li>
			    <li data-target="#main-slide" data-slide-to="12"></li>
			    <li data-target="#main-slide" data-slide-to="13"></li>
				<li data-target="#main-slide" data-slide-to="14"></li>
			    <li data-target="#main-slide" data-slide-to="15"></li>
			    <li data-target="#main-slide" data-slide-to="16"></li>
				<li data-target="#main-slide" data-slide-to="17"></li>
			    <li data-target="#main-slide" data-slide-to="18"></li>
			    <li data-target="#main-slide" data-slide-to="19"></li>
				<li data-target="#main-slide" data-slide-to="20"></li>
			
			</ol><!--/ Indicators end-->

			<!-- Carousel inner -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-01.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
			   <div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-02.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
			<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-03.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
				<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-04.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
				<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-05.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
				<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-06.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
			<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-07.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
				<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-08.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
			<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-09.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
				<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-10.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
			<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-11.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
			<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-12.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
				<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-13.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
				<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-14.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
				<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-15.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
			<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-16.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
			<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-17.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
			<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-18.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
				<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-19.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
				<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-20.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
				<div class="item">
			    	<img class="img-responsive" src="images/slider3/FX TRADING PRESENTATION-21.png" alt="slider">
                    <div class="slider-content">
                        
                    </div>
			    </div><!--/ Carousel item end -->
			
			</div><!-- Carousel inner end-->

			<!-- Controls -->
			<a class="left carousel-control" href="#main-slide" data-slide="prev">
		    	<span><i class="fa fa-angle-left"></i></span>
			</a>
			<a class="right carousel-control" href="#main-slide" data-slide="next">
		    	<span><i class="fa fa-angle-right"></i></span>
			</a>
		</div><!-- /carousel -->    	
   
				</div>
				<div class="col-md-6" style="padding-top:20px;">
					<div class="text-center how-it-works-style">
						<h3>How it works</h3>
						<p>Our groundbreaking platform uses an automated arbitrage system that yields profits for customers based on real-time movements in the cryptocurrency market. Our proprietary algorithm buys bitcoin when it is cheaper, and sells when it is more expensive. FX-TRADING customers benefit by assuming the profit, which is deposited directly into their online account. <a href="https://www.fxtradingcorp.com/#how-it-works" class="btn btn-default" target="_blank"> more >> </a>
						</p>
					</div>

			<!--	<div class="gap-30"></div>-->

					<div class="text-center how-it-works-style">
							<h3>Good Profitability</h3>
							<p>We support global citizens who want to harness the technological revolution of digital currency. We take highly sophisticated investment strategies that have historically only been accessible to institutions and a small number of high wealth individuals, and bring it to the masses.</p>
					</div><!--/ End 1st block -->

				</div>
			</div>
		</div>
	</section><!--/ Image block end -->


  

<div id="banner-area">
		<img src="images/banner/banner2.jpg" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Contact Us</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="#contact"> Contact</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<section id="main-container">
		<div class="container" id="contact">
			
			<!-- <div class="row">
				<div id="map-wrapper" class="no-padding">
					<div class="map" id="map"></div>
				</div>	

			</div> -->
            <div id="sendmessage"></div>
            <div id="errormessage"></div>
            

<?php 
 if(isset($msg)){
     echo $msg;
 }
?>
			<div class="gap-40"></div>

			<div class="row">
	    		<div class="col-md-7">
	    		    <h3>Send us a message</h3>
	    			<form id="contact-form" action="" method="post" role="form" class="contactForm">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Name</label>
								<input class="form-control" name="name" id="name" placeholder="" type="text" data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                                <div class="validation"></div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" name="email" id="email" 
									placeholder="" type="email" 
									data-rule="email" data-msg="Please enter a valid email"/>
                                    <div class="validation"></div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Subject</label>
									<input class="form-control" name="subject" id="subject" 
									placeholder="" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                                   <div class="validation"></div>
								</div>
							</div>
						</div>
						<div class="form-group">
				              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
				                placeholder="Message"></textarea>
				              <div class="validation"></div>
				            </div>
						<div class="text-right"><br>
							<button class="btn btn-primary solid blank" type="submit" name="submit">Send Message</button> 
						</div>
					</form>
	    		</div>
	    		<div class="col-md-5">
	    			<div class="contact-info">
		    			<h3>Get in touch with us</h3>
			    		<p>FX Network Trading</p>
			    		<br>
			    		<p><i class="fa fa-map-marker info"></i> Dhaka, Bangladesh </p>
						<p><i class="fa fa-phone info"></i> 019 0001111 </p>
						<p><i class="fa fa-envelope-o info"></i>  info@domain.com</p>
						<p><i class="fa fa-globe info"></i> <a href="http://github.com/MdImranHosen" target="_blank">www.domain.com</a></p>
						<a href="http://github.com/MdImranHosen" class="btn btn-primary" target="_blanck"><i class="fa fa-envelope-o"> </i></a>
						
    				</div>
	    		</div>
	    	</div>

		</div><!--/ container end -->

	</section><!--/ Main container end -->
<?php include 'footer.php';?>
