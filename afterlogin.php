<?php
session_start();
$email=$_SESSION['mysession'];
 ?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Votekaro	</title>
<meta name="description" content="Coming Soon Responsive Template">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset01.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style01.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

<style>
#ques_bg{
	position: relative;
	top:200px;
	margin-top: -100px;
}

</style>

</head>
<body>
	<header>
		<div class="cd-logo"><a href="afterlogin.php"><img src="logo.gif" alt="Logo" width="180px" height="220px" style="margin-top:-8px"></a></div>

		<nav class="cd-main-nav-wrapper">
			<ul class="cd-main-nav">
				<li>
						<select style="border-style:solid; border-color:White; opacity:0.2; " id="nav-option" class="cd-subnav-trigger" name="service"><span style="color:#000000;">Categories</span>
						<option disabled selected value="Category">Category</option>
						<option value="1">General</option>
						<option value="2">NEWS</option>
						<option value="3">POLITICS</option>
						<option value="4">BOLLYWOOD</option>
						<option value="5">default</option>
					</select>
				</li>

				<li><a href="aboutus.html">About</a></li>
				<li><a href="#trendy">Blog</a></li>
				<li><a href="faqs.html">FAQ</a></li>
				<li><a href="#contact">Contact</a></li>
				<li>
						<select style="border-style:solid; border-color:White;  " id="nav-option-after" class="cd-subnav-trigger" name="service"><span> style="color:#000000;">login</span>
						<option disabled hidden selected value="Category"><?php  echo "Hi!".$email;  ?></option>
						<option value="1">help</option>
						<option value="2">My profile</option>
						<option value="3">Account</option>
						<option value="4">Settings</option>
						<option value="5">Log-out</option>
					</select>
				</li>


			</ul> <!-- .cd-main-nav -->
		</nav> <!-- .cd-main-nav-wrapper -->


	</header>
<!--main-->
<div id="ques_bg" >	        <!--sub-form-->

        <div  class="sub-form text-center">
              <form role="form" id="mc-form" action="post.html">
										<button type="submit" class="wow fadeInUp btn btn-default submit-btn" style="position:relative;top:400px;" id="submit-btn" value="Send"><a href="post.html">Post your Questions here</a></button>
              </form>
        </div>
        <!--sub-form end-->
</div>


<!--main end-->

<!--Features-->

<section class="features section-spacing">
  <div class="container">
    <h2 class="text-center">Featured services</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="wow fadeInUp product-features row">
          <div class="col-md-2 col-sm-2 col-xs-2 text-center"><i class="fa fa-rocket fa-3x"></i></div>
          <div class="col-md-10 col-sm-10 col-xs-10">
           <!--features 3-->
            <h4>Post</h4>
            <p>Confused what to wear on saturday party? Don't know answer to your serious queries? Don't worry as we are here to let you post questions whether public or private and let those confusions go away! </p>
            <!--features 3 end-->
          </div>
        </div>
        <div class="wow fadeInUp product-features row">
          <div class="col-md-2 col-sm-2 col-xs-2 text-center"><i class="fa fa-bullhorn fa-3x"></i></div>
          <div class="col-md-10 col-sm-10 col-xs-10">
            <!--features 4-->
            <h4>Poll</h4>
            <p>Want to have say on issues of your choice? Want to be there to participate in polls for the topics you want to be part of? Come let's have a say in all the issues. Let us have a say in all issues . <b>COME VOTE</b></p>
            <!--features 4 end-->


          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="wow fadeInUp product-features row">
          <div class="col-md-2 col-sm-2 col-xs-2 text-center"><i class="fa fa-bicycle fa-3x"></i></div>
          <div class="col-md-10 col-sm-10 col-xs-10">
            <!--features 3-->
            <h4>Public and Private Polls</h4>
            <p>We have two kinds of polls one for questions you want to get answer only from specific people and other the public one in which anyone can participate in answering your question.</p>
           <!--features 3 end-->
          </div>
        </div>
        <div class="wow fadeInUp product-features row">
          <div class="col-md-2 col-sm-2 col-xs-2 text-center"><i class="fa fa-paper-plane-o fa-3x"></i></div>
          <div class="col-md-10 col-sm-10 col-xs-10">


			<!--features 4-->
            <h4>Feedback</h4>
            <p>Want to say something to us? we are always open to your feedback whether positive or negative! We believe in improving ourselves and keep on helping you out.</p>
            <!--features 4 end-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Features end-->

<!--Twitter feed-->

<section class="twitter-feed section-spacing text-center">
  <div id="trendy" class="overlay-t"></div>
  <div class="container">


  </div>
</section>

<!--Twitter feed end-->

<!--CONTACT-->

<section class="contact section-spacing" id="contact">
  <div class="container">
    <h2 class="text-center">Get in Touch</h2>
    <div class="row">
      <div class="col-md-7">
        <!--map-->
        <div class="wow fadeInUp map">
          <div id="map-canvas"></div>

          <!--address-->

           <ul class="wow fadeInUp address">
            <li><i class="fa fa-map-marker"></i>Computer Science, KIET</li>
            <li><i class="fa fa-phone"></i> 9997955711</li>
            <li><i class="fa fa-envelope"></i>----@gmail.com </li>
         </ul>

          <!--address end-->

        </div>
        <!--map end-->
      </div>
      <div class="col-md-5">

        <!--contact form-->

        <div class="contact-form">
          <form role="form" action="php/contact.php" method="post" id="contact-form">
            <input type="text" class="wow fadeInUp form-control" name="name" id="name" placeholder="Your Name" required>
            <input type="email" class="wow fadeInUp form-control" name="email" id="email" placeholder="Email Address" required>
            <textarea class="wow fadeInUp form-control" name="message" id="message" rows="3" placeholder=" Message" required></textarea>
            <button type="submit" class="wow fadeInUp btn btn-default submit-btn" id="submit-btn" value="Send">SUBMIT</button>
          </form>

          <!--contact form end-->
          <div class="success-cf">
            <p>Thank You! Your message has been sent.</p>
          </div>
          <div class="error-cf">
            <p>Something went wrong, try refreshing and submitting the form again.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--CONTACT END-->

<!--site-footer-->
<footer class="site-footer section-spacing">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">

        <!--social-->

        <ul class="social">
          <li class="wow fadeInUp"><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li class="wow fadeInUp"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li class="wow fadeInUp"><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        </ul>

        <!--social end-->

        <small class="wow fadeInUp"> <i class="fa fa-heart pulse"></i> <a href="http://www.designstub.com/"></a></small> </div>
    </div>
  </div>
</footer>
<!--site-footer end-->

<!--PRELOAD-->
<div id="preloader">
  <div id="status"></div>
</div>
<!--end PRELOAD-->
<script src="js/pages_option.js"></script>
<script src="js/myScript.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/tweetie.min.js"></script>
<script src="js/jquery.downCount.js"></script>
<script src="js/jquery.form.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.simple-text-rotator.min.js"></script>
<script src="js/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="js/gmap.js"></script>
</body>
</html>
