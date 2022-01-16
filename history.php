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

/*img {
  vertical-align: middle;
  border-style: none;
}*/

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
    font-weight: 2000;
    line-height: 1.2;
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

          <li>
            <a class="btn btn-outline-dark btn-md" href="login.php" id="signin" style="color: #404555">Back</a>
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
                  <!--h3>Municipality of Cauayan, Negros Occidental - (Wikipedia.com)</h3>
                  <div class="border-top border-dark my-1 w-75">
                  </div>
                  <p class="lead">Tourism has recently picked up in the Cauayan Municipality, with its fine white sand beaches and diverse marine and wildlife.</p>
                  <a href="history.php" class="btn btn-light md">Learn more..</a-->
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
        <!--h1 class="display-1 pt-1">Welcome to the Municipality of Cauayan Department of Agriculture Rice Crop Management Web Portal!</h1-->
    <!--div class="border-top border-dark w-15 mx-auto my-auto"></div-->
        </div>

    <!-- Three Column Section -->
    <div class="container">
      <div class="row justify-content-center my-5 text-center">
         <h1 class="font-weight-bold mb-3">MUNICIPALITY OF CAUAYAN, NEGROS OCCIDENTAL</h1>
    <div class="col-md-6 col-lg-4 py-3">
    <!--span class="fa-stack fa-4x">
      <!--i class="fas fa-square fa-stack-2x"></i>
      <i class="far fa-lemon fa-stack-1x fa-inverse"
      style="color: #FFFF00;"></i>
    </span>
    <p class="lead">Bureau of Agricultural Reserch-CAUAYAN
      </p>
      <a href="#" class="btn btn-outline-dark btn-md">Learn more..
        </a> 
  </div-->
      <div class="col-md-6 col-lg-4 py-3">
  <!--span class="fa-stack fa-4x">
    <i class="fas fa-square fa-stack-2x"></i>
    <i class="fas fa-fish fa-stack-1x fa-inverse"
    style="color: #FFD700;"></i>
  </span>
  <!--p class="lead">Bureau of Fisheries and Aquatic Resources-CAUAYAN 
    </p>
    <a href="#" class="btn btn-outline-dark btn-md">Learn more..
      </a> 
</div-->

      <div class="col-md-6 col-lg-4 py-3">
  <!--span class="fa-stack fa-4x">
    <i class="fas fa-square fa-stack-2x"></i>
    <i class="fas fa-seedling fa-stack-1x fa-inverse"
    style="color: #FFFF00;"></i>
  </span>
  <!--p class="lead">Philipine Rice Research Institute-CAUAYAN
    </p>
    <a href="#" class="btn btn-outline-dark btn-md">Learn more..
      </a--> 
</div>

        </div>
      </div>
      <!-- End Three Column Section -->

  <!-- border -->
  <!--div class="border-top border-dark w-100 mx-auto my-3"></div>

    <!-- Start Two Column Section -->
    <div class="container my-5">
      <div class="row" py-4">
      <div class="col-lg-4 mb-4 my-lg-auto">
      <p class="mb-5">Cauayan, officially the Municipality of Cauayan (Hiligaynon: Banwa sang Cauayan; Tagalog: Bayan ng Cauayan), is a 1st class municipality and the most populous municipality in the province of Negros Occidental, Philippines. According to the 2020 census, it has a population of 108,480 people.

      Cauayan is about 113 kilometres (70 mi) from the provincial capital of Bacolod and is known for its sandy beaches and pristine waters, limestone and dried fish products. With a population of 102,165 inhabitants, it is the most-populated out of the 19 municipalities in Negros Occidental.Located on the southern portion of the province, Cauayan is bounded on the east by the municipality of Ilog; on the south by the municipality of Candoni; on the west by the mining city of Sipalay and on the north by the Panay Gulf with its bountiful fishing grounds.

      The municipality of Cauayan has a rugged topography. Mt. Malipantao, considered the highest peak in the province, separates the municipality from the town of Candoni and the city of Sipalay. Portion of the ranges are the remaining thick forest that needs protection where the watershed is located. The remaining portions of the municipality are slightly rolling to moderate large areas of flat lands center on the different barrios, which is much suited to agriculture.

      The municipality consists mainly of the following slope distribution:

      From gently sloping at 0-3 percent or equivalent to 5,369.42 hectares to moderately sloping at 3-8 percent or a total of 1,059.40 hectares to rolling lands with slopes ranging from 8-18 percent which covers to about 1,716.94 hectares. A bigger portion is moderately steep with a slope distribution ranging from 18 to 30 percent having a total area of 19,419.42 hectares. However, large areas are steep and mountains with a slope of 30-50 percent, which accounts to 21,181.92 hectares, and to very steep hills and mountains with a slope of over 50 percent, which covers to about 3,246.90 hectares. Moderately large areas of flat land center on the different barrios. However, the southern part of the municipality is hilly. The Poblacion and the 12 barangays along the seashore are approximately 0-3 degrees above sea level.</p>
      <!--a href="#" class="btn btn-outline-dark btn-lg">Latest Developments</a-->
      </div>
    <div class="col-lg-8"><img src="img/caua.png" alt="" class="w-100"></div>
    </div>
  </div>

    <!-- End Two Column Section -->

  <!-- Start Website Designs Jumbotron -->
  <div class="jumbotron py-5 mb-0 ">
    <div class="container">
      <div class="row">

        <div class="col-md-7 col-lg-8 col-xl-9 my-auto">
      <h3>SANYOG CAUAYAN! Bugal sang Negros Occidental</h3>
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
      Proper, Cauayan 61102<br>
      Negros Occidental <br><br>
      <strong>Phone:</strong> +639103595189<br>
      <strong>Email:</strong> danieldayono@gmail.com<br>
    </p>
    </div>

    <div class="col-lg-3 col-md-6 footer-links">
    <h4>BUREAUS</h4>
    <ul>
      <li><i class="bx bx-chevron-right"></i> <a href="https://ati.da.gov.ph/ati-main/">Agricultural Traning Institute</a></li>
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
    <p> For more inquiries:</p>
    <div class="social-links mt-3">

      <a href="https://twitter.com/dargovph" class="twitter"><i class="fa fa-twitter"></i></a>
      <a href="https://web.facebook.com/profile.php?id=100069217029664" class="facebook"><i class="fa fa-facebook"></i></a>
      <a href="https://www.instagram.com/explore/locations/1268930/philippines/quezon-city-philippines/department-of-agriculture/?hl=en" class="instagram"><i class="fa fa-instagram"></i></a>
      <!--a href="#" class="google-plus"><i class="fa fa-skype"></i></a>
      <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a-->
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