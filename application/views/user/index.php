<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Toko Emas Adil</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <!-- <link href="<?php echo base_url();?>assets/user/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/user/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url();?>assets/user/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url();?>assets/user/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/user/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/user/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/user/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/user/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/user/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="<?php echo base_url();?>assets/user/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url();?>assets/user/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?php echo base_url();?>assets/user/css/responsive.css" rel="stylesheet">

  <!-- <meta http-equiv="refresh" content="300"/> -->

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="">
                 <!--  <h1><span>TK</span> Emas Adil</h1> -->
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <img width="250" height="250" src="<?php echo base_url(); ?>assets/adds/images/logo.png" alt="" title="">
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">Profil</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#team">Karyawan</a>
                  </li>
                  <li class="dropdown"><a href="#portfolio" class="dropdown-toggle" data-toggle="dropdown">Gallery<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="<?php echo base_url();?>Gallery/toko">Gallery Toko</a></li>
                      <li><a href="<?php echo base_url();?>Gallery/produk">Gallery Produk</a></li>
                    </ul> 
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <?php foreach($slide1 as $row): ?>
        <img src="<?= base_url() ?>./assets/adds/images/slider/<?= $row->slide; ?>" alt="" title="#slider-direction-1" />
        <?php endforeach; ?>
        <?php foreach($slide2 as $row): ?>
        <img src="<?= base_url() ?>./assets/adds/images/slider/<?= $row->slide; ?>" alt="" title="#slider-direction-2" />
        <?php endforeach; ?>
        <?php foreach($slide3 as $row): ?>
        <img src="<?= base_url() ?>./assets/adds/images/slider/<?= $row->slide; ?>" alt="" title="#slider-direction-3" />
        <?php endforeach; ?>
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Toko Emas Adil </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Membantu Memenuhi Kebutuhan ACC Anda</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">Gallery</a>
                  <a class="ready-btn page-scroll" href="#about">PROFIL</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Toko Emas Adil </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Sedia Perhiasan</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">Gallery</a>
                  <a class="ready-btn page-scroll" href="#about">PROFIL</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Toko Emas Adil </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Solusi Perhiasan Untuk Wedding dan Sehari - hari </h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">Gallery</a>
                  <a class="ready-btn page-scroll" href="#about">PROFIL</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Profil Toko Emas Adil</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="">
                <?php foreach($profil as $row): ?>
								  <img src="<?= base_url(); ?>./assets/adds/images/profil/<?= $row->foto; ?>" alt="">
							  <?php endforeach; ?>
              </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">SEJARAH TOKO EMAS ADIL</h4>
              </a>
              <?php foreach($profil as $row): ?>
              <p>
                <?php echo $row->sejarah; ?>
              </p>
              <?php endforeach; ?>
              <ul>
                 <li>
                  <i class="fa fa-check"></i> Toko Emas Adilla
                </li>
                <li>
                  <i class="fa fa-check"></i> Toko Emas Adil Wangon
                </li>
                <li>
                  <i class="fa fa-check"></i> Toko Emas Adil Jatilawang
                </li>
                <li>
                  <i class="fa fa-check"></i> Toko Emas Adil Cilongok
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- Start team Area -->
  <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Karyawan</h2>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="team-top">
         <?php foreach($ax as $row): ?>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="">
										<img width="520px" height="640px" src="<?= base_url(); ?>./assets/adds/images/karyawan/<?= $row->foto; ?>" alt="">
									</a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
													<i class="fa fa-facebook"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-twitter"></i>
												</a>
                    </li>
                    <li>
                      <a href="#">
													<i class="fa fa-instagram"></i>
												</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4><?php echo $row->nama;?></h4>
              </div>
            </div>
          </div>
          <!-- End column -->
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <!-- End Team Area -->


  <!-- Start portfolio Area -->
  <div id="services" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Gallery</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Portfolio -page -->
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">All</a>
                </li>
                <li>
                  <a href="#" data-filter=".development">Gelang</a>
                </li>
                <li>
                  <a href="#" data-filter=".design">Kalung</a>
                </li>
                <li>
                  <a href="#" data-filter=".photo">Cincin</a>
                </li><li>
                  <a href="#" data-filter=".photo2">Anting</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="awesome-project-content">
          <?php foreach($gb as $row): ?>
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?= base_url(); ?>./assets/adds/images/produk/<?= $row->foto; ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= base_url(); ?>./assets/adds/images/produk/<?= $row->foto; ?>">
                      <h4>Koleksi Emas</h4>
                      <span>Toko Emas Adil</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <?php endforeach; ?>
          <?php foreach($gelang as $row): ?>
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?= base_url(); ?>./assets/adds/images/produk/<?= $row->foto; ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= base_url(); ?>./assets/adds/images/produk/<?= $row->foto; ?>">
                      <h4>Koleksi Emas</h4>
                      <span>Toko Emas Adil</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <?php endforeach; ?>
          <?php foreach($kalung as $row): ?>
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?= base_url(); ?>./assets/adds/images/produk/<?= $row->foto; ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= base_url(); ?>./assets/adds/images/produk/<?= $row->foto; ?>">
                      <h4>Koleksi Emas</h4>
                      <span>Toko Emas Adil</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <?php endforeach; ?>
          <?php foreach($anting as $row): ?>
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo2">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?= base_url(); ?>./assets/adds/images/produk/<?= $row->foto; ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= base_url(); ?>./assets/adds/images/produk/<?= $row->foto; ?>">
                      <h4>Koleksi Emas</h4>
                      <span>Toko Emas Adil</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <?php endforeach; ?>
          <?php foreach($cincin as $row): ?>
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 photo">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="<?= base_url(); ?>./assets/adds/images/produk/<?= $row->foto; ?>" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="<?= base_url(); ?>./assets/adds/images/produk/<?= $row->foto; ?>">
                      <h4>Koleksi Emas</h4>
                      <span>Toko Emas Adil</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- single-awesome-project end -->
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->
 

  <!-- Start Suscrive Area -->
  <div class="suscribe-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
          <div class="suscribe-text text-center">
            <h3>Selamat Datang di Website Toko Emas Adil</h3>
           <!--  <a class="sus-btn" href="#">Get A quate</a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->
<?php foreach($profil as $row): ?>
  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  <input type="hidden" <?php echo $nol="0"; ?> >
                  Call: <?php echo $nol,$row->no_tlp;?><br>
                  <span>Wa : <?php echo $nol,$row->wa;?></span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: <?php echo $row->email;?><br>
                  <span>Web: <?php echo $row->web;?></span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Alamat: <?php echo $row->alamat;?><br>
                  <span></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
<?php endforeach; ?>
          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d989.114041454388!2d109.07721108220902!3d-7.414659371684184!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6563c57d37f451%3A0xdef840e1353cbde5!2sAjibarang%20Market!5e0!3m2!1sen!2sid!4v1582109471560!5m2!1sen!2sid" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <!-- <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div> -->
              <form action="<?php echo base_url();?>Komentar/simpan" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <b>Masukkan saran dan kesan anda ke toko kami .........</b>
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Tuliskan kritik dan saran anda....."></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button data-toggle="modal" data-target="#simpan" class="btn btn-primary">Send Message</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>TK</span> Emas Adil</h2>
                </div>

                <p>Ikuti kami di sosial media biar engga ketinggalan update produk terbaru kami terimakasih</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="https://www.instagram.com/tmsadil07ajb/"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <?php foreach($profil as $row): ?>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Information</h4>
                <p>
                  Anda bisa contak langsung kami melalui telphon dan email terimaksih
                </p>
                <div class="footer-contacts">
                  <input type="hidden" <?php echo $nol="0"; ?> 
                  <p><span>Tel:</span> <?php echo $nol,$row->no_tlp;?></p>
                  <p><span>Email:</span> <?php echo $row->email;?></p>
                  <p><span>Jam Kerja:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          <!-- end single footer -->
          
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Gallery</h4>
                <?php foreach($limit as $row): ?>
                <div class="flicker-img">
                  <a class="venobox" data-gall="myGallery" href="<?= base_url(); ?>./assets/adds/images/produk/<?= $row->foto; ?>"><img src="<?= base_url(); ?>./assets/adds/images/produk/<?= $row->foto; ?>" alt=""></a>
                </div>
                 <?php endforeach; ?>
              </div>
            </div>
            <br>
            <div class="footer-contacts">
              <p><span><a href="https://www.instagram.com/tmsadil07ajb/"> More Image...</a></span></p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>cakepdeveloper</strong>. Privacy Policy
              </p>
            </div>
            <div class="credits">
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- modal simpan komentar -->

<div class="modal fade" id="simpan" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <form action="" method="POST">
        <div class="modal-header">
          <h4 class="modal-title" id="smallModalLabel">Konfirmasi pesan</h4>
        </div>
        <div class="modal-body">
          <font color="blue" size="3">Pesan anda sudah terkirim. Terimakasih!!!</font>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-link waves-effect">OK</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- end modal simpan -->

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url();?>assets/user/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/user/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/user/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/user/lib/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url();?>assets/user/lib/knob/jquery.knob.js"></script>
  <script src="<?php echo base_url();?>assets/user/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url();?>assets/user/lib/parallax/parallax.js"></script>
  <script src="<?php echo base_url();?>assets/user/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/user/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/user/lib/appear/jquery.appear.js"></script>
  <script src="<?php echo base_url();?>assets/user/lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url();?>assets/user/contactform/contactform.js"></script>

  <script src="<?php echo base_url();?>assets/user/js/main.js"></script>
</body>

</html>
