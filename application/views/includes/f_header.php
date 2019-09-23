<!DOCTYPE html>
<head>
  <title>Sakura Link Tour & Travel Organizer</title>
  <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/depan.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://mobirise.com/bootstrap-template/about-us-page-template/assets/mobirise/css/mbr-additional.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
  <script type="text/javascript">
    $("#slideshow > div:gt(0)").hide();
    setInterval(function() {
      $('#slideshow > div:first')
      .fadeOut(1000)
      .next()
      .fadeIn(1000)
      .end()
      .appendTo('#slideshow');
    }, 3000);
  </script>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>gambar/fav.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url(); ?>gambar/fav.ico" type="image/x-icon">
</head>
<body style="background-color: #d4e1dd;">
  <div class="top-header" style="background-color: #222328;">
    <div class="container">
      <div class="navigation">
        <div>
          <ul class="nav">
            <ul class="nav navbar-nav navbar-left">
              <li style="float: left;">
                <a href="<?php echo base_url(); ?>">
                  HOME
                </a>
              </li>
              <li style="float: left;">
                <a href="<?php echo base_url(); ?>index.php/review">
                  REVIEW
                </a>
              </li>
              <li style="float: left;">
                <a href="<?php echo base_url(); ?>index.php/packet">
                  DAFTAR PAKET
                </a>
              </li>
              <li style="float: left;">
                <a href="<?php echo base_url(); ?>index.php/about">
                  TENTANG KAMI
                </a>
              </li>
            </ul>
            <li style="float: right;">
              <a href="mailto:sakuralink.tto@gmail.com">
                <i class="fa fa-envelope cart-tt green" aria-hidden="true"></i>
              </a>
            </li>
            <li style="float: right;">
              <a href="https://web.facebook.com/sakura.link.tourandtravelorganizer"
              target="_blank">
              <i class="fa fa-facebook" style="font-size: 15px;font-weight: bold;" aria-hidden="true"></i>
            </a>
          </li>
          <li style="float: right;">
            <a href="https://www.instagram.com/sakuralinktour/" target="_blank">
              <i class="fa fa-instagram" style="font-size: 15px;font-weight: bold;"
              aria-hidden="true"></i>
            </a>
          </li>
          <li style="float: right;">
            <a href="https://wa.me/082257000092">
              <i class="fa fa-whatsapp" style="font-size: 15px;font-weight: bold;"
              aria-hidden="true"></i>
            </a>
          </li>
          <div class="clearfix">
          </div>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container">
<div class="col-md-12" style="padding: 15px;">
  <div id="navbar" class="navbar-collapse collapse">
    <ul class="navbar-left">
      <img src="<?php echo base_url(); ?>gambar/logo.png" style="height: 70px;">
    </ul>
    <ul class="navbar-right" style="font-size: 12px;font-weight: 900;font-family: FF DIN Bold;">
      <img src="<?php echo base_url(); ?>gambar/logo2.png" style="height: 20px;">
      <br>
      <br>
      <center>
        <a href="<?php echo base_url(); ?>index.php/login" style="color:white;height: 70px;background-color: #d74871;padding: 6px 30px;border-radius: 50px;">SIGN IN</a>
      </center>
    </ul>
  </div>
</div>
  <div class="col-md-12">
  <div id="slideshow">
   <div class="jumbotron" style="background-image: url(https://www.limkokwing.net/images/made/graphics/student_life/about_campuses/bali/bali_960_416_72_s.jpg); background-size: 100% 100%;padding: 15px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-7">
          <h3 class="gaya" style="color:rgb(35, 35, 35); background-color: white;display: inline-block;padding: 5px;">Sakura Link Tour & Travel Organizer</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="jumbotron" style="background-image: url(http://cdn.willerexpress.com/en/cherry-blossom/img/banner.jpg);background-size: 100% 100%;padding: 15px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-7">
          <h3 class="gaya" style="color:rgb(35, 35, 35); background-color: white;display: inline-block;padding: 5px;">Jalan - Jalan Ke Luar Negeri!</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="jumbotron" style="background-image: url(https://rajaampatbiodiversity.com/wp-content/uploads/2017/02/Indonesian-Islands-Raja-Ampat-1200x601.jpg); background-size: 100% 100%;padding: 15px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-7">
          <h3 class="gaya" style="color:rgb(35, 35, 35); background-color: white;display: inline-block;padding: 5px;">Make Your Journey Fun!</h3>
        </div>
      </div>
    </div>
  </div>
</div>
</div>