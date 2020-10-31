<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>14ers-Home</title>
<link rel="shortcut icon" type="image/x-icon" href="/images/fivicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/responsive.css">
<link rel="stylesheet" href="/css/lightbox.css">
<link rel="stylesheet" href="/css/owl.carousel.css">
<link rel="stylesheet" href="/css/animate.css">
<link rel="stylesheet" href="/css/owl.theme.default.css">
</head>
<body>
<div class="page-wrapper"> 
  <!-- Preloader -->
  <div class="preloader"></div>
  <!-- Preloader --> 
  
  <!-- header start -->
  <header class="main-header">
    <div class="header-top">
      <div class="container clearfix">
        <div class="top-left pull-left clearfix">
          <div class="phone pull-left"><a href="#"><i class="fa fa-phone"></i>123 1234 123</a></div>
          <div class="email pull-left"><a href="mailto:Fetness@yourdomain.com"><i class="fa fa-envelope-o"></i> Fitness@yourdomain.com</a></div>
        </div>
        <div class="top-right pull-right clearfix">
          <div class="social"><a class="fa fa-facebook-f" href="#"></a> <a class="fa fa-twitter" href="#"></a><a class="fa fa-instagram" href="#"></a> <a class="fa fa-google-plus" href="#"></a></div>
        </div>
      </div>
    </div>
    <div class="header-lower">
      <div class="container clearfix">
        <div class="logo pull-left"><a href="index.html">
          <h2 class="logo_name">14ERS <span class="white_text">BJJ </span> </h2>
          </a></div>
        <div class="right-cont clearfix">
          <nav class="main-menu">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="navbar-collapse collapse clearfix">
              <ul class="nav navbar-nav navbar-right  ml-auto" id="onenav">
                <li class="nav-link home current"><a href="index.html" class="js-scroll-trigger">HOME</a> </li>
                <li class="nav-link"><a href="about.html" class="js-scroll-trigger">ABOUT US</a> </li>
                <li class="nav-link"><a href="classes.html" class="js-scroll-trigger">CLASSES</a></li>
                <li class="search-btn" onclick="openSearch()"><a><i class="fa fa-search"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </nav>
        </div>
        <div id="myOverlay" class="overlay"> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
          <div class="overlay-content">
            <form>
              <input type="text" placeholder="Enter your keywords..." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header end --> 
  
  <!-- Carousel start -->
  <section class="main-slider slide-wrapper">
    <div id="myCarousel" class="carousel slide"> 
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item item1 active">
          <div class="fill" style="background-image:url(https://images.unsplash.com/photo-1515025617920-e1e674b5033c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1414&q=80);">
            <div class="inner-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-7 iner_info">
                    <h2 class="wow fadeInUp animated img_animate">14'ers Jiu Jitsu</h2>
                    <h3 class="wow fadeInUp animated title_animate">High Altitude Grappling</h3>
                    <a href="#contact" class="slider_readmore wow fadeInUp animated titlep_animate"><span>Contact Us</span> <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"></i></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!-- Carousel end --> 
  
  <!--About start -->
  <section class="home_about_sec" id="aboutus">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 home_about">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 aimg_sec">
              <div class="row"> <img src="/images/about.png" alt=""> </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ainfo_sec">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="title"><b> about</b><span class="green_text"> 14ERS</span><span class="light_text">BJJ</span></h2>
                </div>
                <div class="col-sm-12">
                  <p>Cras faucibus in nunc sed volutpat. Duis ac elementum velit, vel ornare lacus. Phasellus eget tincidunt odio. </p>
                  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a convallis nibh. Sed laoreet lacus eu interdum euismod. Fusce condimentum, tortor in fringilla sollicitudin, eros dui blandit risus, sit amet dignissim arcu urna eget nibh. Vestibulum ultrices, libero nec ultrices fermentu.</p>
                  <a href="about.html" class="primary-btn"> Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--About start --> 
  
  <!--Coueses start -->
  <section class="home_course_sec" id="course">
    <div class="container">
      <div class="row">
        <h2 class="title"><b> our classes</b></h2>
        <div class="coueses-container filter-list clearfixcol-xs-12 col-sm-12 col-md-12 col-lg-12">
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="/images/blog.png" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>kettlebell</h4>
              </div>
            </div>
          </article>
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="/images/blog.png" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>Conjugate Methods</h4>
              </div>
            </div>
          </article>
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="/images/blog.png" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>kettlebell</h4>
              </div>
            </div>
          </article>
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="/images/blog.png" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>Weightlifting</h4>
              </div>
            </div>
          </article>
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="/images/blog.png" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>Advanced Gymnastic</h4>
              </div>
            </div>
          </article>
          <article class="coueses-box col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <figure class="image"><img src="/images/blog.png" alt=""> </figure>
            <div class="text-content hvr-bounce-to-bottom">
              <div class="text">
                <h4>Striking</h4>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!--Coueses end --> 
  
  <!--Team start -->
  <section class="team_sec">
    <div class="container">
      <div class="col-md-12">
        <h2 class="title"><b> Our TRainers</b></h2>
      </div>
      <div class="col-md-12">
        <div class="carousel">
          <div class="owl-carousel owl-theme ss_carousel col-md-12 col-xs-12 col-sm-12" id="slider1">
            <div class="item">
              <div class="team_box"><a href="#"><img src="/images/trainers_img.png" class="img-responsive" alt=""></a>
                <div class="overlay">
                  <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices metus nec sapien vestibulum.</p>
                    <div class="team_icon"><a class="fa fa-facebook-f" href="#"></a> <a class="fa fa-twitter" href="#"></a><a class="fa fa-instagram" href="#"></a> </div>
                  </div>
                </div>
                <div class="text-content hvr-bounce-to-bottom">
                  <div class="text">
                    <h4>RACHEL ADAM</h4>
                    <h5>GYM TRAINER </h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="team_box"><a href="#"><img src="/images/trainers_img.png" class="img-responsive" alt=""></a>
                <div class="overlay">
                  <div class="text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices metus nec sapien vestibulum.</p>
                    <div class="team_icon"><a class="fa fa-facebook-f" href="#"></a> <a class="fa fa-twitter" href="#"></a><a class="fa fa-instagram" href="#"></a> </div>
                  </div>
                </div>
                <div class="text-content hvr-bounce-to-bottom">
                  <div class="text">
                    <h4>RACHEL ADAM</h4>
                    <h5>GYM TRAINER </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Team end --> 
  
  <!--Gallery start -->
  <div class="gallery">
    <div class="footer-gallery owl-carousel owl-theme ss_carousel" id="slider2">
      <div class="item"><a class="example-image-link" href="/images/gallery_full.png" data-lightbox="example-1"><img class="example-image" src="/images/galler-img.png" alt="image-1" /></a></div>
      <div class="item"><a class="example-image-link" href="/images/gallery_full.png" data-lightbox="example-1"><img class="example-image" src="/images/galler-img.png" alt="image-1" /></a></div>
      <div class="item"><a class="example-image-link" href="/images/gallery_full.png" data-lightbox="example-1"><img class="example-image" src="/images/galler-img.png" alt="image-1" /></a></div>
      <div class="item"><a class="example-image-link" href="/images/gallery_full.png" data-lightbox="example-1"><img class="example-image" src="/images/galler-img.png" alt="image-1" /></a></div>
     <div class="item"><a class="example-image-link" href="/images/gallery_full.png" data-lightbox="example-1"><img class="example-image" src="/images/galler-img.png" alt="image-1" /></a></div>
     <div class="item"><a class="example-image-link" href="/images/gallery_full.png" data-lightbox="example-1"><img class="example-image" src="/images/galler-img.png" alt="image-1" /></a></div>
    </div>
  </div>
  <!--Gallery end --> 
  
  <!--Contact start -->
  <section id="contact" class="home_contact_sec">
    <div class="site-quick-support center-text site-dark-section-a">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-xs-12 col-md-7 col-lg-7 no-padding cbg">
            <div class="left">
              <h2>Get In touch</h2>
              <form id="contactForm" class="site-contact-form">
                <div class="col-lg-10 col-sm-12">
                  <div class="row">
                    <input type="text" name="name" placeholder="Name" required>
                  </div>
                </div>
                <div class="col-lg-10 col-sm-12">
                  <div class="row">
                    <input type="email" name="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="col-lg-10 col-sm-12">
                  <div class="row">
                    <input type="text" name="phone" placeholder="Phone" required>
                  </div>
                </div>
                <div class="col-lg-10 col-sm-12">
                  <div class="row">
                    <textarea name="message" rows="3" placeholder="Message" required></textarea>
                  </div>
                </div>
                <div class="clearfix"> </div>
                <button type="submit" class="primary-btn"> SEND MESSAGE </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 no-padding hmap">
            <div class="right">
              <div class="site-google-map" id="site-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d237806.27164642312!2d72.85767079414917!3d21.361418794971083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1532954153186" width="100" height="100" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Contact end --> 
  
  <!--Footer start -->
  <footer class="main-footer">
    <div class="container">
      <div class="footer-widget-area clearfix">
        <div class="footer-widget about-widget col-md-3 col-sm-6 col-xs-12"> <a href="#">
          <h2 class="logo_name">14ERS <span class="white_text">BJJ </span> </h2>
          </a>
          <div class="widget-about">
            <p>ligula sed porta cursus, lectus ligula interdum tortor, vitae tempor leo eros lobortis ante. Integer semper, metus in tincidunt euismod.</p>
            <div class="social"><a class="fa fa-facebook-f" href="#"></a> <a class="fa fa-twitter" href="#"></a> <a class="fa fa-instagram" href="#"></a> <a class="fa fa-google-plus" href="#"></a></div>
          </div>
        </div>
        <div class="footer-widget quick-links col-md-2 col-sm-6 col-xs-12 ">
          <h4>LINKS</h4>
          <div class="widget-link">
            <ul>
              <li> <a href="index.html">Home</a></li>
              <li> <a href="about.html">About Us</a></li>
              <li> <a href="classes.html">Classes</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-widget address col-md-3 col-sm-6 col-xs-12">
          <h4>Contact us</h4>
          <div class="widget-content">
            <div class="address_box"> <i class="fa fa-phone"></i>
              <p>123-1234-123</p>
            </div>
            <div class="address_box"> <i class="fa fa-envelope"></i>
              <p>Fitness@domain.com</p>
            </div>
            <div class="address_box1"> <i class="fa fa-map-marker"></i>
              <p>1011Santa Monica <br>
                boulevard Los Angeles</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="auto-container text-center">Built by <a href="#">White Mountain Development.</a></div>
    </div>
  </footer>
  <!--Footer end --> 
</div>
<a href="#" class="scrollToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a> 
<!-- jQuery --> 
<script src="/js/jquery.min.js"></script> 

<!-- Bootstrap --> 
<script src="/js/bootstrap.min.js"></script> 

<!-- ScrollToPlugin --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script> 

<!-- filter --> 
<script src="https://isotope.metafizzy.co/v1/jquery.isotope.min.js"></script> 

<!-- gallery_popup-->
<script src="/js/lightbox.js"></script>

<!-- carousel slider --> 
<script src="/js/wow.min.js"></script> 

<!-- wow --> 
<script src="/js/owl.carousel.js"></script> 

<!-- Global Init --> 
<script src="/js/custom.js"></script> 

<script>
  function openSearch() {
	document.getElementById("myOverlay").style.display = "block";
  }

  function closeSearch() {
	document.getElementById("myOverlay").style.display = "none";
  }
</script>

</body>
</html>