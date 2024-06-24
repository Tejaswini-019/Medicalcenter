
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Preventive Medical Category </title>
  <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <!--header-->
  <section class="w3l-header">
    <header id="site-header" class="">
      <section class="w3l-top-header py-3">
        <div class="container">
          <div class="d-grid main-top">
            <div class="top-header-left">
              <ul class="info-top-gridshny">
                <li class="info-grid">
                  <div class="info-icon"><span class="fa fa-clock-o"></span></div>
                  <div class="info-text">
                    <p>Monday - Friday 08:00 - 20:00</p>
                    <p>Saturday and Sunday - CLOSED</p>
                  </div>

                </li>
                <li class="info-grid">
                  <div class="info-icon"><span class="fa fa-mobile"></span></div>
                  <div class="info-text">
                    <p>+ 0800 2466 7921</p>
                    <p>+ 0800 2466 7922</p>
                  </div>

                </li>
                <li class="info-grid">
                  <div class="info-icon"><span class="fa fa-map-marker"></span></div>
                  <div class="info-text">
                    <p>34th Avenue</p>
                    <p>New York, S2 Honey Block</p>

                  </div>

                </li>
              </ul>
            </div>
            <div class="top-header-right text-lg-right">
              <ul>
                <li>
                  <a href="#facebook"><span class="fa fa-facebook"></span></a>
                </li>
                <li>
                  <a href="#twitter"><span class="fa fa-twitter"></span></a>
                </li>
                <li><a href="#instagram" class="instagram mr-0"><span class="fa fa-instagram"></span></a></li>

              </ul>
            </div>
          </div>
        </div>
      </section>
      <div class="header-2hny py-3">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark stroke">
            <h1><a class="navbar-brand mr-xl-5" href="index.html">
                <span class="fa fa-heartbeat mr-1"></span>Preventive
              </a></h1>
            <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
              </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mx-lg-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="services.html">Departments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
              </ul>
              <ul class="navbar-nav search-right mt-lg-0 mt-2">
                <li class="nav-item mr-lg-3 mr-4" title="Search"><a href="#search" class="btn search-search">
                    <span class="fa fa-search" aria-hidden="true"></span></a></li>
                <li class="nav-item"><a href="#download" class="free-con btn btn-style btn-secondary d-block"
                    data-toggle="modal" data-target="#myModal">Free Appointment</a>

                  <!-- //modal-popup-->
                  <div class="selectpackage">

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                              &times;</button>
                            <h4 class="modal-title" id="myModalLabel">
                              Make An Appointment</h4>
                          </div>
                          <div class="modal-body packages">
                            <div class="appointment-form">
                              <form action="insert.php" method="post">
                                <div class="fields-grid">
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <input type="text" name="fullname" placeholder="Full Name" required="">
                                    </div>
                                  </div>
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <input type="text" name="phone" placeholder="Enter Number" required="">
                                    </div>
                                  </div>

                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <input type="date" name="age" placeholder="Enter Your Age" required="">
                                    </div>
                                  </div>
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <input type="date" name="date" placeholder="Set a Date" required="">
                                    </div>
                                  </div>
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <select id="department" name="department" required="Specialization">
                                        <option value="">Specialization*</option>
                                        <option value="Cardiology">Cardiology</option>
                                        <option value="Heart Surgery">Heart Surgery</option>
                                        <option value="Skin Care">Skin Care</option>
                                        <option value="Body Check-up">Body Check-up</option>
                                        <option value="Numerology">Numerology</option>
                                        <option value="Diagnosis">Diagnosis</option>
                                        <option value="Others">Others</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="styled-input">

                                    <div class="appointment-form-field">

                                      <select id="doctor" name="doctor" required="Select Doctor">
                                        <option value="">Select Doctor</option>
                                        <option value="Vimal">Vimal</option>
                                        <option value="Raja">Raja</option>
                                        <option value="Ranjini">Ranjini</option>
                                        <option value="Devi">Devi</option>
                                        <option value="Prabhu">Prabhu</option>
                                      </select>
                                    </div>
                                  </div>

                                </div>
                                <div class="appointment-btn text-lg-right">
                                  <button type="submit" class="btn btn-style btn-primary mt-4">Book Appointment</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <script>
                      $('#myModal').modal('show');
                    </script>
                  </div>
                  <!-- //modal-popup-->

                </li>
              </ul>

              <!-- //toggle switch for light and dark theme -->
              <!-- search popup -->
              <div id="search" class="pop-overlay">
                <div class="popup">
                  <form action="#" method="GET" class="d-sm-flex">
                    <input type="search" placeholder="Search.." name="search" required="required" autofocus>
                    <button type="submit">Search</button>
                    <a class="close" href="#url">&times;</a>
                  </form>
                </div>
              </div>
              <!-- /search popup -->
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
              <nav class="navigation">
                <div class="theme-switch-wrapper">
                  <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox">
                    <div class="mode-container py-1">
                      <i class="gg-sun"></i>
                      <i class="gg-moon"></i>
                    </div>
                  </label>
                </div>
              </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
          </nav>
        </div>
      </div>
    </header>
    <!--/header-->
  </section>

  <!-- main-slider -->
  <section class="w3l-main-slider" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
        <div class="item">
          <li>
            <div class="slider-info banner-view bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <p>Modern Medicine</p>
                    <h5>International medical Center</h5>
                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2" href="about.html"> Read More</a>
                    <a class="btn btn-style border-btn mt-sm-5 mt-4" href="contact.html"> Contact Us</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info  banner-view banner-top1 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <p>Healthy Lifestyle</p>
                    <h5>We Provide Covid Services</h5>
                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2" href="about.html"> Read More</a>
                    <a class="btn btn-style border-btn mt-sm-5 mt-4" href="contact.html"> Contact Us</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info banner-view banner-top2 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <p>Modern Medicine</p>
                    <h5>International medical Center</h5>
                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2" href="about.html"> Read More</a>
                    <a class="btn btn-style border-btn mt-sm-5 mt-4" href="contact.html"> Contact Us</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        <div class="item">
          <li>
            <div class="slider-info banner-view banner-top3 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg">
                    <p>Healthy Lifestyle</p>
                    <h5>We Provide Covid Services</h5>
                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2" href="about.html">Read More</a>
                    <a class="btn btn-style border-btn mt-sm-5 mt-4" href="contact.html"> Contact Us</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
      </div>
    </div>
  </section>
  <!-- /main-slider -->
  <!--/grids-->
  <section class="w3l-grids-3 py-5" id="about">
    <div class="container py-md-5 py-3">
      <div class="row bottom-ab-grids align-items-center">

        <div class="col-lg-6 bottom-ab-left">
          <h6 class="sub-titlehny">Trust Us</h6>
          <h3 class="hny-title">Caring for the growing needs of our community.</h3>
          <div class="separatorhny"></div>
          <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur hic odio voluptatem
            tenetur consequatur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
            Nulla mollis dapibus nunc, ut rhoncus
            turpis sodales quis. </p>
          <a href="about.html" class="btn btn-style btn-primary mt-4">Read More</a>
        </div>
        <div class="col-lg-6 bottom-ab-right mt-lg-0 mt-5 pl-lg-4">
          <img src="assets/images/2.jpg" alt="" class="img-fluid">
        </div>

      </div>
    </div>
  </section>
  <!--//grids-->
  <!--/features-->
  <section class="w3l-ab-features py-5">
    <div class="container py-md-5 py-3">
      <div class="row features-w3pvt-main" id="features">
        <div class="col-lg-4 col-md-6 feature-gird">
          <div class="row features-hny-inner-gd">
            <div class="col-md-2 col-2 featured_grid_left">
              <div class="icon-hnynumber">
                <span class="hnynumber">01</span>
              </div>
            </div>
            <div class="col-md-10 col-10 featured_grid_right_info">
              <h4><a class="link-hny" href="#url">Qualified Doctors</a></h4>
              <p>Lorem ipsum dolor sit amet elit consec tetur adipisi elit.,Vestibulum ante ipsum primis in faucibus
                orci luctus et ultrices posuere cubilia Curae rem!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 feature-gird mt-md-0 mt-4">
          <div class="row features-hny-inner-gd">
            <div class="col-md-2 col-2 featured_grid_left">
              <div class="icon-hnynumber">
                <span class="hnynumber">02</span>
              </div>
            </div>
            <div class="col-md-10 col-10 featured_grid_right_info">
              <h4><a class="link-hny" href="#url">24 Hour Service</a></h4>
              <p>Lorem ipsum dolor sit amet elit consec tetur adipisi elit.,Vestibulum ante ipsum primis in faucibus
                orci luctus et ultrices posuere cubilia Curae rem!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 feature-gird mt-lg-0 mt-md-5 mt-4">
          <div class="row features-hny-inner-gd">
            <div class="col-md-2 col-2 featured_grid_left">
              <div class="icon-hnynumber">
                <span class="hnynumber">03</span>
              </div>
            </div>
            <div class="col-md-10 col-10 featured_grid_right_info">
              <h4><a class="link-hny" href="#url">
                  We Are Here For You</a></h4>
              <p>Lorem ipsum dolor sit amet elit consec tetur adipisi elit.,Vestibulum ante ipsum primis in faucibus
                orci luctus et ultrices posuere cubilia Curae rem!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//features-->
  <!-- middle -->
  <div class="w3l-middle py-5">
    <div class="container py-xl-5 py-lg-3">
      <div class="welcome-left py-3">
        <h6 class="sub-titlehny">Trusted Care.</h6>
        <h4>The right choice for your health care needs.</h4>
        <div class="separatorhny"></div>
        <p class="pr-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. </p>
        <div class="buttons mt-5">
          <a href="about.html" class="btn btn-white btn-primary mr-2">Read More</a>
          <a href="contact.html" class="btn btn-style border-btn ml-2">Get a quote</a>
        </div>
      </div>
    </div>
  </div>
  <!-- //middle -->
  <!--/w3l-cwp4-->
  <div class="w3l-cwp4-sec py-5">
    <div class="container py-md-5 py-3">
      <div class="cwp4-two row align-items-center">
        <div class="cwp4-image col-lg-6 pr-lg-5">
          <img src="assets/images/6.jpg" class="img-fluid" alt="">
        </div>
        <div class="cwp4-text col-lg-6 mt-lg-0 mt-5">
          <h6 class="sub-titlehny">Choose confidently</h6>
          <h3 class="hny-title">
            Caring for our region’s most precious resource</h3>
          <div class="separatorhny"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.
          </p>

          <ul class="cont-4 mt-lg-6 mt-md-5 mt-4">
            <li class="subhny-gd mt-sm-0 mt-4">
              <span class="fa fa-user-md"> </span>
              <h4><a class="link-hny" href="#url">
                  Expert Doctors</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicingelit</p>

            </li>
            <li class="subhny-gd mt-sm-0 mt-4">
              <span class="fa fa-trophy"> </span>
              <h4><a class="link-hny" href="#url">
                  Award Winner</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicingelit</p>

            </li>
          </ul>
        </div>

      </div>
    </div>

  </div>
  <!--//w3l-grids-->
  <!-- stats -->
  <section class="w3l-stats py-lg-0 py-5" id="stats">
    <div class="gallery-inner container py-lg-0 py-3">
      <div class="row stats-con">
        <div class="col-lg-3 col-6 stats_info counter_grid">
          <span class="fa fa-users"></span>
          <p class="counter">1100</p>
          <h4>Expert Doctors</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid1">
          <span class="fa fa-laptop"></span>
          <p class="counter">1020</p>
          <h4>Health Programs</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-5">
          <span class="fa fa-smile-o"></span>
          <p class="counter">912</p>
          <h4>Happy Clients</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid2 mt-lg-0 mt-5">
          <span class="fa fa-trophy"></span>
          <p class="counter">80</p>
          <h4>Success Meets</h4>
        </div>
      </div>
    </div>
  </section>
  <!-- //stats -->

  <!-- /blog-posts-->
  <section id="grids5-block" class="w3l-blogluxe-hny py-5">
    <div class="container py-md-5">
      <div class="row grid-view">
        <div class="col-lg-5 pr-lg-5">
          <h6 class="sub-titlehny">The Power to Heal</h6>
          <h3 class="hny-title">The perfect balance between Health & Care.</h3>
          <div class="separatorhny"></div>
          <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur hic odio voluptatem
            tenetur consequatur primis. </p>
          <a href="about.html" class="btn btn-style btn-primary mt-4">Read More</a>
        </div>
        <div class="col-lg-7 mt-lg-0 mt-4">
          <div class="row grids5-info">
            <div class="col-6">
              <a href="#" class="zoom">
                <img src="assets/images/s1.jpg" alt="" class="img-fluid" />
              </a>
            </div>
            <div class="col-6">
              <a href="#" class="zoom">
                <img src="assets/images/s2.jpg" alt="" class="img-fluid" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //blog-Section -->
  <!--//news-grids-->
  <section class="w3l-news-sec">
    <div class="news-mainhny py-5">
      <div class="container text-center py-lg-3">
        <div class="title-content text-center mb-lg-5 mb-4">
          <h6 class="sub-titlehny">Our Services</h6>
          <h3 class="hny-title">
            Our Departments</h3>
          <div class="separatorhny"></div>
        </div>
      </div>
      <div class="owl-news owl-carousel owl-theme">
        <div class="item">
          <div class="news-img position-relative">
            <a href="#"><img src="assets/images/1.jpg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="#">
                <h4 class="title">Health Care</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="news-img">
            <a href="#"><img src="assets/images/2.jpg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="#">
                <h4 class="title">Gyneological Clinic</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="news-img">
            <a href="#"><img src="assets/images/3.jpg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="#">
                <h4 class="title">Rehabilitation Center</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="news-img">
            <a href="#"><img src="assets/images/4.jpg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="#">
                <h4 class="title">Precise Diagnosis</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="news-img">
            <a href="#"><img src="assets/images/5.jpg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="#">
                <h4 class="title">Cardiac Clinic</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="news-img">
            <a href="#"><img src="assets/images/6.jpg" class="img-fluid" alt="news image"></a>
            <div class="title-wrap">
              <a href="#">
                <h4 class="title">Dental Surgery</h4>
              </a>
              <a href="#" class="text-right"><span class="fa fa-arrow-right"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//news-grids-->
  <!--/w3l-subscribe-->
  <section class="w3l-subscribe-content py-5">
    <div class="container py-md-4 py-3 text-center">
      <div class="row my-lg-4 mt-4">
        <div class="col-lg-9 col-md-10 mx-auto">
          <div class="subscribe mx-auto">
            <div class="header-section text-center mx-auto">
              <h6 class="sub-titlehny">Join Us</h6>
              <h3 class="hny-title">Stay Updated! </h3>
              <div class="separatorhny"></div>
              <p class="my-3">Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                consectetur adipisicing.
                turpis sodales quis. Integer sit amet mattis quam.</p>
            </div>
            <form action="#" method="post" class="subscribe-wthree pt-2 mt-5">
              <div class="d-md-flex flex-wrap subscribe-wthree-field">
                <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
                <button class="btn btn-style btn-primary" type="submit">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//w3l-subscribe-->
  <!-- footer -->
  <footer class="w3l-footer-29-main">
    <div class="footer-29-w3l py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
            <div class="footer-logo mb-3">
              <a class="footer-brand-logo" href="index.html"><span class="fa fa-heartbeat mr-1"></span>Preventive</a>
            </div>
            <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at
              tempufddfel. Lorem ipsum dolor sit amet Semper at elit.</p>
            <div class="main-social-footer-29 mt-4">
              <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
              <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
              <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
              <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

            <ul>
              <h6 class="footer-title-29">Usefull Links</h6>
              <li><a href="about.html">About</a></li>
              <li><a href="services.html">Department</a></li>
              <li><a href="blog.html"> Blog</a></li>
              <li><a href="#careers"> Careers</a></li>
              <li><a href="#help">Help</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Services</h6>
            <ul>
              <li><a href="#medicine">Instant Medicine</a></li>
              <li><a href="#kidney">Kidney Solution</a></li>
              <li><a href="#knee">Knee Surgery</a></li>
              <li><a href="#eye">Eye Care</a></li>
              <li><a href="#surgery">Body Surgery</a></li>
              <li><a href="#care">Dental Care</a></li>

            </ul>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Infomation</h6>
            <p class="mb-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula.</p>
            <p><strong>Address :</strong> Preventive, 343 Honey Avenue street, NY - 62617.</p>
            <p class="my-2"><strong>Phone :</strong> <a href="tel:+12 23456799">+12 23456799</a></p>
            <p><strong>Email :</strong> <a href="mailto:info@example.com">info@example.com</a></p>


          </div>
        </div>
      </div>
    </div>
    <!-- //footer -->

    <!-- copyright -->
    <section class="w3l-copyright">
      <div class="container">
        <div class="row bottom-copies">
          <p class="col-lg-8 copy-footer-29">© 2021 Preventive. All rights reserved. Design by <a
              href="#" target="_blank">
              Tejaswini</a></p>

          <div class="col-lg-4 footer-list-29">
            <ul class="d-flex text-lg-right">
              <li><a href="#careers"> Careers</a></li>
              <li class="mx-lg-5 mx-md-4 mx-3"><a href="#privacymy-lg-0 my-4">Privacy Policy</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </div>

        </div>
      </div>
    </section>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </footer>

  <!-- //copyright -->
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>

  <!-- script for testimonials -->
  <script>
    $(document).ready(function () {
      $('.owl-testimonial').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script for testimonials -->

  <script src="assets/js/theme-change.js"></script>

  <!-- js for portfolio lightbox -->
  <!-- libhtbox -->
  <script src="assets/js/lightbox-plus-jquery.min.js"></script>
  <!-- libhtbox -->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <script>
    $(document).ready(function () {
      $('.owl-news').owlCarousel({
        stagePadding: 200,
        loop: true,
        margin: 30,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            stagePadding: 40,
            nav: false
          },
          480: {
            items: 1,
            stagePadding: 40,
            nav: true
          },
          667: {
            items: 2,
            stagePadding: 50,
            nav: true
          },
          1000: {
            items: 2,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
