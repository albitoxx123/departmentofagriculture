  <?php require('session.php'); 
require('dbcon/dbconnection.php');
require('dbcon/includes.php');
?>
<link  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
</head>
<?php
 if (logged_in()) {
  if (  $_SESSION['user_type'] == "admin") {
     ?>
       <script type="text/javascript">
                window.location = "index.php";
        </script>
    <?php
  }else{
     ?>
       <script type="text/javascript">
                window.location = "login.php";
        </script>
    <?php
  }
}
            $sql = "SELECT * FROM tblannounce";
            $result = $con-> query($sql);
            if ($result-> num_rows > 0) {
              while($row = $result-> fetch_assoc()){
                $id  = $row["id"];
                $announce  = $row["announce"];
              }
            }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .sear{
      padding: 5px;
      font-size: 15px;
      width: 250px;
      height: 36px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 5px 15px 0 rgba(0, 0, 0, 0.3);
      border: 1px solid lightgray;
      border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
      }
      .sear:focus {
      transition: 1s ease;
        width: 90%;
      }
      .img_labs{
        height: 200px; 
        width: 300px;
        background-size: cover; 
        background-position: center;
        box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.5), 0 10px 22px 0 rgba(0, 0, 0, 0.4);
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
      }
      .info_labs{
        padding: 10px;
        width: 300px;
        text-align: center;
        background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 10px 22px 0 rgba(0, 0, 0, 0.3);
	  }
		.display-1 {
  font-size: 2rem;
  font-weight: 1000!important; 
  line-height: 1.2;
}
body {
  margin: 0;
  font-family: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 1rem;
  font-weight: bolder;
  line-height: 1.5;
  color: #212529;
  text-align: justify;
  background-color: #fff;
}
.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #ffffff;
    border-radius: .3rem;
}
.btn-outline-dark {
    color: #3ee514;
    border-color: #31b93c;
}
.bg-dark {
    background-color: #1b4209!important;
}
.team {
  padding: 60px 0;
}

.team .member {
  margin-bottom: 20px;
  overflow: hidden;
  border-radius: 4px;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(16, 110, 234, 0.15);
}

.team .member .member-img {
  position: relative;
  overflow: hidden;
}

.team .member .social {
  position: absolute;
  left: 0;
  bottom: 30px;
  right: 0;
  opacity: 0;
  transition: ease-in-out 0.3s;
  text-align: center;
}

.team .member .social a {
  transition: color 0.3s;
  color: #222222;
  margin: 0 3px;
  padding-top: 7px;
  border-radius: 4px;
  width: 36px;
  height: 36px;
  background: rgb(154 205 50);
  display: inline-block;
  transition: ease-in-out 0.3s;
  color: #fff;
}

.team .member .social a:hover {
  background: #3b8af2;
}

.team .member .social i {
  font-size: 18px;
}

.team .member .member-info {
  padding: 25px 15px;
}

.team .member .member-info h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 18px;
  color: #222222;
}

.team .member .member-info span {
  display: block;
  font-size: 13px;
  font-weight: 400;
  color: #aaaaaa;
}

.team .member .member-info p {
  font-style: italic;
  font-size: 14px;
  line-height: 26px;
  color: #777777;
}

.team .member:hover .social {
  opacity: 1;
  bottom: 15px;
}
.back-to-top {
  position: fixed;
  display: none;
  right: 15px;
  bottom: 15px;
  z-index: 99999;
}

.back-to-top i {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  width: 40px;
  height: 40px;
  border-radius: 4px;
  background: #106eea;
  color: #fff;
  transition: all 0.4s;
}

.back-to-top i:hover {
  background: #3284f1;
  color: #fff;
}

#footer {
  background: #fff;
  padding: 0 0 30px 0;
  color: #343a40;
  font-size: 14px;
  background: #9acd32;
}

#footer .footer-newsletter {
  padding: 15px 0;
  background: #9acd32;
  text-align: center;
  font-size: 15px;
}

#footer .footer-newsletter h4 {
  font-size: 24px;
  margin: 0 0 20px 0;
  padding: 0;
  line-height: 1;
  font-weight: 600;
}

#footer .footer-newsletter form {
  margin-top: 30px;
  background: #fff;
  padding: 6px 10px;
  position: relative;
  border-radius: 4px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.06);
  text-align: left;
}

#footer .footer-newsletter form input[type="email"] {
  border: 0;
  padding: 4px 8px;
  width: calc(100% - 100px);
}

#footer .footer-newsletter form input[type="submit"] {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px;
  background: #106eea;
  color: #fff;
  transition: 0.3s;
  border-radius: 0 4px 4px 0;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#footer .footer-newsletter form input[type="submit"]:hover {
  background: #0d58ba;
}

#footer .footer-top {
  padding: 60px 0 30px 0;
  background: #fff;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact h3 {
  font-size: 24px;
  margin: 0 0 15px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 700;
}

#footer .footer-top .footer-contact h3 span {
  color: #106eea;
}

#footer .footer-top .footer-contact p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Roboto", sans-serif;
  color: #777777;
}

#footer .footer-top h4 {
  font-size: 16px;
  font-weight: bold;
  color: #444444;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #106eea;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #777777;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
  text-decoration: none;
  color: #90ee90;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #9ACD32;
  color: #000000;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 4px;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #3b8af2;
  color: #fff;
  text-decoration: none;
}

#footer .copyright {
  text-align: center;
  float: left;
}

#footer .credits {
  float: right;
  text-align: center;
  font-size: 13px;
  color: #000000;
}


@media (max-width: 768px) {
  #footer .copyright, #footer .credits {
    float: none;
    text-align: center;
    padding: 2px 0;
  }
}
.contact .info-box {
  color: #444444;
  text-align: center;
  box-shadow: 0 0 30px rgba(214, 215, 216, 0.3);
  padding: 20px 0 30px 0;
}

.contact .info-box i {
  font-size: 32px;
  color: #106eea;
  border-radius: 50%;
  padding: 8px;
  border: 2px dotted #b3d1fa;
}

.contact .info-box h3 {
  font-size: 20px;
  color: #777777;
  font-weight: 700;
  margin: 10px 0;
}

.contact .info-box p {
  padding: 0;
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.contact .php-email-form {
  box-shadow: 0 0 30px rgba(214, 215, 216, 0.4);
  padding: 30px;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br + br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input:focus, .contact .php-email-form textarea:focus {
  border-color: #106eea;
}

.contact .php-email-form input {
  padding: 20px 15px;
}

.contact .php-email-form textarea {
  padding: 12px 15px;
}

.contact .php-email-form button[type="submit"] {
  background: #90ee90;
  border: 0;
  padding: 10px 30px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
}

.contact .php-email-form button[type="submit"]:hover {
  background: #90ee90;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
element.style {
}
.bx {
    font-family: 'boxicons'!important;
    font-weight: normal;
    font-style: normal;
    font-variant: normal;
    line-height: 1;
    display: inline-block;
    text-transform: none;
    speak: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
}

a:hover {
  color: #0056b3;
  text-decoration: underline;
}

a:not([href]):not([class]) {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg {
  overflow: hidden;
  vertical-align: middle;
}
.clients {
  padding: 15px 0;
}

.clients img {
  max-width: 45%;
  transition: all 0.4s ease-in-out;
  display: inline-block;
  padding: 15px 0;
}

.clients img:hover {
  transform: scale(1.15);
}

@media (max-width: 768px) {
  .clients img {
    max-width: 40%;
  }
}
.pt-1, .py-1 {
    padding-top: 2.25rem!important;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: 0.5rem;
    font-weight: 3500;
    line-height: 1.1;
    color: black;
    box-shadow: dimgray;
    text-decoration: blink;
    text-orientation: upright;
}
.bg-light {
    background-color: #6fc733!important;
}
  </style>
  <title>Department of Agriculture</title>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-2" id="mainNav" style="background: white;box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 10px 22px 0 rgba(0, 0, 0, 0.3);">
    <div class="container">
      <a style="margin-top: -20px;margin-bottom: -20px" class="navbar-brand js-scroll-trigger" href="#page-top">

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <script>
          $(document).ready(function(){
            $('button').click(function(){
              $('#navbarResponsive').slideToggle();
            });
          });
        </script>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          
          
          <li class="nav-item"  >
            <a class="nav-link js-scroll-trigger" href="#Mandate" style="color: #404555">Mandate</a>
          </li>
         <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Vision" style="color: #404555">Vision</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#Mission" style="color: #404555">Mission</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="signin.php" id="signin" style="color: #404555">Sign in</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- sign in Section -->
<div id="carousel" class="carousel slide" data-ride="carousel"
			data-interval="6500">

			<!-- Carousel Content -->
			<div class="carousel-inner">

				<div class="carousel-item active">
					<img src="img/carousel/1111.jpg"class="w-100" alt="">
					<div class="carousel-caption">
						<div class="container">
							<div class="row justify-content-end">						
									</div>
										<div class="d-none d-md-block col-md-9 col-lg-7.bg-white text-left text.bg-dark">
									<h3>Municipality of Cauayan, Negros Occidental - (Wikipedia.com)</h3>
									<div class="border-top border-dark my-1 w-75">
									</div>
									<p class="lead">Tourism has recently picked up in the Cauayan Municipality, with its fine white sand beaches and diverse marine and wildlife.</p>
									<!--a href="history.php" class="btn btn-light md">Learn more..</a-->
								</div>

							</div>
						</div>

			
		</div>
		<!-- End Image Carousel -->

	</div> <!-- End Navigation Sticky ID Section -->

			<!-- Start Social Jumbotron -->
		<div class="jumbotron sticky-top"style="margin: bottom 0;px:">
			<div class="container">
				<div class="row justify-content-center text-center">
			</div>
		</div>

		<!-- End Social Jumbotron -->
		<!-- Main Page Heading -->
				<h1 class="display-1 pt-1">Welcome to the Municipality of Cauayan Department of Agriculture Rice Crop Management Web Portal!</h1>
		<div class="border-top border-dark w-15 mx-auto my-auto"></div>
				</div>

		<!-- Three Column Section -->
		<div class="container">
			<div class="row justify-content-center my-5 text-center">

			<div class="col-md-6 col-lg-4 py-3">
		<span class="fa-stack fa-4x">
			<i class="fas fa-square fa-stack-2x"></i>
			<i class="far fa-lemon fa-stack-1x fa-inverse"
			style="color: #FFFF00;"></i>
		</span>
		<p class="lead">Bureau of Agricultural Reserch-CAUAYAN
			</p>
			<!--a href="#" class="btn btn-outline-dark btn-md">Learn more..
				</a--> 
	</div>
			<div class="col-md-6 col-lg-4 py-3">
	<span class="fa-stack fa-4x">
		<i class="fas fa-square fa-stack-2x"></i>
		<i class="fas fa-fish fa-stack-1x fa-inverse"
		style="color: #FFD700;"></i>
	</span>
	<p class="lead">Bureau of Fisheries and Aquatic Resources-CAUAYAN 
		</p>
		<!--a href="#" class="btn btn-outline-dark btn-md">Learn more..
			</a--> 
</div>

			<div class="col-md-6 col-lg-4 py-3">
	<span class="fa-stack fa-4x">
		<i class="fas fa-square fa-stack-2x"></i>
		<i class="fas fa-seedling fa-stack-1x fa-inverse"
		style="color: #FFFF00;"></i>
	</span>
	<p class="lead">Philipine Rice Research Institute-CAUAYAN
		</p>
		<!--a href="#" class="btn btn-outline-dark btn-md">Learn more..
			</a--> 
</div>

				</div>
			</div>
			<!-- End Three Column Section -->

	<!-- border -->
	<div class="border-top border-dark w-100 mx-auto my-3"></div>

		<!-- Start Two Column Section -->
		<div class="container my-5">
			<div class="row" py-4">
			<div class="col-lg-4 mb-4 my-lg-auto">
				<h1 class="font-weight-bold mb-3">Poblacion Cauayan Negros Occidental</h1>
			<p class="mb-5">Cauayan, officially the Municipality of Cauayan, is a 1st class municipality and the most populous municipality in the province of Negros Occidental, Philippines. According to the 2015 census, it has a population of 102,165 people. (Wikipedia.com)</p>
			<a href="history.php" class="btn btn-outline-dark btn-lg">Read More</a>
			</div>
		<div class="col-lg-8"><img src="img/logocau.png" alt="" class="w-100"></div>
		</div>
	</div>

		<!-- End Two Column Section -->

	<div id="text-button-sticky">

			<!-- Start Bundle Pack Jumbotron -->
			<div class="jumbotron sticky-top" style="margin-bottom: 2px;">
				<div class="container">
					<div class="row justify-content-center text-center">
		
						<div class="d-none d-md-block col-md-8 col-xl-7 my-auto">
							<h4>LOCAL GOVERNMENT UNIT-MUNICIPALITY OF CAUAYAN Branch Negros Occidental Farmers Web Portal</h4>
						</div>
						
						<div class="col-md-4 col-xl-3 pt-1 pt-md-2 pb-2">
							<a href="topstories.php" class="btn btn-outline-dark btn-lg">Top Stories</a>
						</div>
		
					</div>
				</div>
			</div>
			<!-- End Bundle Pack Jumbotron -->

		<!-- Three Column Section -->
		<div class=container">
			<div class="row justify-content-center my-5 text-center">
				<div class="col-md-6 col-lg-4 my-4">
			<h4 class="my-3">Bureau of Animal Industry Under Secretary</h4>
			<img src="img/sec.jpg" alt="" class="w-100">	
			<p>The Department of Health (abbreviated as DOH; Filipino: Kagawaran ng Kalusugan) is the executive department of the Government of the Philippines responsible for ensuring access to basic public health services by all Filipinos through the provision of quality health care and the regulation of all health services and products. It is the government's over-all technical authority on health.[2] It has its headquarters at the San Lazaro Compound, along Rizal Avenue in Manila.

				The head of the department is led by the Secretary of Healt.. .</p>
			<!--a href="#" class="btn-outline-dark btn-md">Read More..</a-->
				</div>

				<div class="col-md-6 col-lg-4 my-4">
					<h4 class="my-3">Department of Agriculture History</h4>
					<img src="img/seed.jpg" alt="" class="w-100">	
					<p>STATEMENT OF SUPPORT TO THE NATIONAL TASK FORCE TO END LOCAL COMMUNIST ARMED CONFLICT (NTF ELCAC).. .The Department of the Interior and Local Government, abbreviated as DILG, is the executive department of the Philippine government responsible for promoting peace and order, ensuring public safety and strengthening local government capability aimed towards the effective delivery of basic services to the citizenry.</p>
					<!--a href="#"class="btn-outline-dark btn-md">Read More.. .</a-->
						</div>

						<div class="col-md-6 col-lg-4 my-4">
							<h4 class="my-3">Rice Research Institute Mandate</h4>
							<img src="img/rice.jpg" alt="" class="w-100">	
							<p>The Technical Education and Skills Development Authority serves as the Philippines' Technical Vocational Education and Training authority. As a government agency, TESDA is tasked to both manage and supervise the Philippines' Technical Education and Skills Development. </p>
							<!--a href="#"class="btn-outline-dark btn-md">Inquire Here.</a-->
								</div>
				</div>
			</div>
		</div>

		<!-- End Three Column Section -->
	
	<!-- border -->
	<div class="border-top border-dark w-100 mx-auto my-3"></div>

	</div> <!-- End Text Button Sticky -->

	<!-- Start Two Column Section -->
		<div class="container mt-5">
			<div class="row" py-4">
			<div class="col-lg-5 mb-4 my-lg-auto">
				<h1 class="font-weight-bold mb-3">Gov In Inauguration Of New Cauayan Public Market</h1>
			<p class="mb-5">Governor Bong Lacson, together with Sixth District Representative Genaro Alvarez, Jr. and Mayor John Rey Tabujara, attends the inauguration of the new public market of the Municipality of Cauayan, earlier today.

				The town’s new P100 million worth public market, located in Brgy. Poblacion along the national highway, has 51 available stalls, wet and dry market areas.. .</p>
			</div>
		<div class="col-lg-7"><img src="img/business11.jpg" alt="" class="w-100"></div>
		</div>

	<!-- Start Website Designs Jumbotron -->
	<div class="jumbotron py-5 mb-0 ">
		<div class="container">
			<div class="row">

				<div class="col-md-7 col-lg-8 col-xl-9 my-auto">
			<h3>Sanyog Cauayan!. Bugal sang Negros Occidental</h3>
				</div>
				
				<div class="col-md-5 col-lg-4 col-xl-3 pt-4 pt-md-0">
				</div>

			</div>
		</div>
	</div>
	<section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="img/cau.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="img/client-22.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="img/client-33.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="img/client-66.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="img/client-55.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="img/DAA.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
  <!-- Vision Section -->
  <section class="page-section" id="Mandate" style="border-bottom: 1px solid black">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center" style="font-size: 20px; color: black;">
          <h2 class="text-black mt-0">Mandate</h2>
          <hr class="divider">
          <p>
          The Department is the government agency responsible for the promotion of agricultural development by providing the policy framework, public investments, and support services needed for domestic and export oriented business enterprises. 
          </p>
          <p>
            In the fulfillment of this mandate, it shall be the primary concern of the Department to improve farm income and generate work opportunities for farmers, fisherman and other rural workers. It shall encourage people's participation in agricultutal development through sectoral representation in agricultural policy-making bodies is that the policies, plans and programs of the Department are formulated and executed to satisfy their needs.
          </p>
          <p>
            It shall also use a bottom-up self-reliant farm system approach that will emphasize social justice, equity, productivity and sustainability in the use of agricultural resources. 
          </p>
        </div>
      </div>
    </div>
  </section>
   <!-- Vision Section -->
  <section class="page-section" id="Vision" style="border-bottom: 1px solid black">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center"  style="font-size: 20px; color: black;">
          <h2 class="text-black mt-0">Vision</h2>
          <hr class="divider">
          <p>
            The Department's vision is a competitive sustainable, and technology-based agriculture and fishery sector, driven by productive and progressive farmers and fisherfolk, supported by efficient value chains and well integrated in the domestic and international markets contributing to inclusive growth and poverty reduction.
          </p>
        </div>
      </div>
    </div>
  </section>
    <!-- Vision Section -->
  <section class="page-section" id="Mission">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center" style="font-size: 20px; color: black;">
          <h2 class="text-black mt-0">Mission</h2>
          <hr class="divider">
          <p>
            To help and empower the farming and fishing communities and the private sector to produce enough, accessible and affordable food for every Filipino and a decent income for all.
          </p>
        </div>
      </div>
    </div>
  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        <div class="section-title">
          <h2>Team</h2>
          <h3>Our Hardworking <span>Team</span></h3>
          <p>Building a Hard-Working Team is the Foundation of our Succes.. Feel Free to Contact us!</p>
        </div>
         
        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="img/Antonette Anig-ig.jpg" class="img-fluid" alt="">
                <div class="social">
                <!--a href="#" class="twitter"><i class="fa fa-twitter"></i></a-->
		            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
		            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
		            <!--a href="#" class="google-plus"><i class="fa fa-skype"></i></a>

		           <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a-->
                </div>
              </div>
              <div class="member-info">
                <h4>Antonette Anig-ig</h4>
                <span>System Programmer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="img/Marilou Albito.jpg" class="img-fluid" alt="">
                <div class="social">
                <!--a href="#" class="twitter"><i class="fa fa-twitter"></i></a-->
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <!--a href="#" class="google-plus"><i class="fa fa-skype"></i></a>

               <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a-->
                </div>
              </div>
              <div class="member-info">
                <h4>Marilou Albito</h4>
                <span>System Analyst</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="img/Mechelle Linco.jpg" class="img-fluid" alt="">
                <div class="social">
                <!--a href="#" class="twitter"><i class="fa fa-twitter"></i></a-->
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <!--a href="#" class="google-plus"><i class="fa fa-skype"></i></a>

               <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a-->
                </div>
              </div>
              <div class="member-info">
                <h4>Mechelle Linco</h4>
                <span> IT Security Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="img/Marilou Albito.jpg" class="img-fluid" alt="">
                <div class="social">
                <!--a href="#" class="twitter"><i class="fa fa-twitter"></i></a-->
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <!--a href="#" class="google-plus"><i class="fa fa-skype"></i></a>

               <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a-->
                </div>
              </div>
              <div class="member-info">
                <h4>Marl Albito</h4>
                <span>Project Manager</span>
              </div>
            </div>
          </div>

        </div>

      </div>
	  
	  <footer id="footer">

<div class="footer-newsletter">
  <div class="container">
	<div class="row justify-content-center">
	  <div class="col-lg-6">
		<h4>The Hardworking Team of DA-Cauayan</h4>
		<p>Department of Agriculture ensures food-secure Philippines with prosperous farmers and fishers.</p>
		<form action="" method="post">
		  <input type="email" name="email"><input type="submit" value="Subscribe">
		</form>
	  </div>
	</div>
  </div>
</div>

<div class="footer-top">
  <div class="container">
	<div class="row">

	  <div class="col-lg-3 col-md-6 footer-contact">
		<h3>WEB PORTAL<span>.</span></h3>
		<p>
		  A108 Poblacion <br>
		  Proper, Cauayan 6112<br>
		  Negros Occidental <br><br>
		  <strong>Phone:</strong> +639103595189<br>
		  <strong>Email:</strong> Danieldayono@gmail.com<br>
		</p>
	  </div>

	  <div class="col-lg-3 col-md-6 footer-links">
		<h4>BUREAUS</h4>
		<ul>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Agricultural Traning Institute</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Bureau of Animal Industry</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Bureau of Plant Industry</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Bureau of Soils and Water Management</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Bureau of Agricultural Research</a></li>
		</ul>
	  </div>

	  <div class="col-lg-3 col-md-6 footer-links">
		<h4>ATTACHED OFFICES</h4>
		<ul>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Fertilizer and Pesticides Authority</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Philipine Carabao Center</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">National Meat Inspection</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Philipine Rubber Research Institute</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Philipine Fiber Industry</a></li>
		</ul>
	  </div>

	  <div class="col-lg-3 col-md-6 footer-links">
		<h4>Our Social Networks</h4>
		<p>For more inquiries:</p>
		<div class="social-links mt-3">

		  <a href="https://twitter.com/dargovph" class="twitter"><i class="fa fa-twitter"></i></a>
		  <a href="https://web.facebook.com/profile.php?id=100069217029664" class="facebook"><i class="fa fa-facebook"></i></a>
		  <a href="https://www.instagram.com/explore/locations/1268930/philippines/quezon-city-philippines/department-of-agriculture/?hl=en" class="instagram"><i class="fa fa-instagram"></i></a>
		  <!--a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a-->
		</div>
	  </div>

	</div>
  </div>
</div>

<div class="container py-4">
  <div class="copyright">
	&copy; Copyright <strong><span>Department of Agriculture</span></strong>. All Rights Reserved 2021
  </div>
  <div class="credits">
	<!-- All the links in the footer should remain intact. -->
	<!-- You can delete the links only if you purchased the pro version. -->
	<!-- Licensing information: https://bootstrapmade.com/license/ -->
	<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
	Designed by <a href="#">Team Fighter</a>
  </div>
</div>
<button onclick="topFunction()" id="movetop" title="Go to top" style="display: block;">
            <span class="fa fa-angle-up"></span>
        </button>
        <div id="rwacModal" class="modal fade">
            <div class="modal-dialog wide">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
</footer><!-- End Footer -->