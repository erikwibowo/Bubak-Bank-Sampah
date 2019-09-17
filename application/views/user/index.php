<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= $title ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="luwakode, website, android, tutor, source code" name="keywords">
  <meta content="Perusahaan IT" name="description">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/user/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>assets/user/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url() ?>assets/user/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url() ?>assets/user/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/user/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/user/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/user/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url() ?>assets/user/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="<?= site_url() ?>" class="scrollto"><?= $subtitle ?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="<?= base_url() ?>assets/user/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <!-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <?php $no = 1; foreach ($slider as $s): ?>
          <div class="carousel-item <?= $no == 1 ? 'active':'' ?>">
            <div class="carousel-background"><img src="<?= base_url() ?>files/slider/<?= $s->foto_slider ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><?= $s->judul_slider ?></h2>
                <p><?= $s->text_slider ?></p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>
          <?php $no++; endforeach ?>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">
          <?php foreach ($fitur as $fitur): ?>
              <div class="col-lg-4 box">
                  <i class="<?= $fitur->icon_fitur ?>"></i>
                  <h4 class="title"><a href=""><?= $fitur->nama_fitur ?></a></h4>
                  <p class="description"><?= $fitur->deskripsi_fitur ?></p>
              </div>
          <?php endforeach ?>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <?php foreach ($tentang as $tentang){} ?>
        <header class="section-header">
          <h3>Tentang Kami</h3>
          <p><?= $tentang->deskripsi_tentang ?></p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="<?= base_url() ?>assets/user/img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Visi</a></h2>
              <p>
                <?= $tentang->visi ?>
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="<?= base_url() ?>assets/user/img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Misi</a></h2>
              <p>
                <?= $tentang->misi ?>
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="<?= base_url() ?>assets/user/img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Rencana Kami</a></h2>
              <p>
                <?= $tentang->rencana ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Layanan</h3>
          <p>Bagi kami kepuasan dari klien kami terhadap karya kami adalah kebanggan untuk perusahaan kami. Oleh karena itu, kami berusaha melayani dengan prioritas terbaik dan hasil yang menakjubkan</p>
        </header>

        <div class="row">

          <?php foreach ($layanan as $l): ?>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="<?= $l->icon_layanan ?>"></i></div>
            <h4 class="title"><a href=""><?= $l->nama_layanan ?></a></h4>
            <p class="description"><?= $l->deskripsi_layanan ?></p>
          </div>
          <?php endforeach ?>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <!-- <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Keahlian Kami</h3>
          <p>Kami adalah perusahaan yang menjunjung tinggi profesionalisme. Oleh karena itu kami mendedikasikan waktu kami untuk meningkatkan kualitas dan skill kita.</p>
        </header>

        <div class="skills-content">

          <?php foreach ($keahlian as $k): ?>
            <div class="progress">
            <div class="progress-bar bg-<?= $k->warna ?>" role="progressbar" aria-valuenow="<?= $k->persentase ?>" aria-valuemin="0" aria-valuemax="100">
              <span class="skill"><?= $k->keahlian ?> <i class="val"><?= $k->persentase ?>%</i></span>
            </div>
          </div>
          <?php endforeach ?>

        </div>

      </div>
    </section>

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Statistik</h3>
          <p>Berikut ini adalah ihktisar project yang pernah kami kerjakan</p>
        </header>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?= count($client) ?></span>
            <p>Pelanggan</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?= count($portfolio) ?></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?= count($pelatihan) ?></span>
            <p>Pelatihan</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?= count($design) ?></span>
            <p>Artwork</p>
          </div>

        </div>

        <!-- <div class="facts-img">
          <img src="<?= base_url() ?>assets/user/img/facts-img.png" alt="" class="img-fluid">
        </div> -->

      </div>
    </section><!-- #facts -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php foreach ($kategori as $kat): ?>
                <li data-filter=".<?= $kat->kategori ?>"><?= $kat->kategori ?></li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <?php foreach ($portfolio as $p): ?>
            <div class="col-lg-4 col-md-6 portfolio-item <?= $p->kategori ?> wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?= base_url() ?>files/portfolio/<?= $p->foto_portfolio ?>" class="img-fluid" alt="">
                <a href="<?= base_url() ?>files/portfolio/<?= $p->foto_portfolio ?>" data-lightbox="portfolio" data-title="<?= $p->nama_portfolio ?>" class="link-preview" title="Pratinjau"><i class="ion ion-eye"></i></a>
                <a href="<?= $p->url_portfolio ?>" target="_blank" class="link-details" title="Lebih Detail"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#"><?= $p->nama_portfolio ?></a></h4>
                <p><?= $p->kategori ?></p>
              </div>
            </div>
          </div>
          <?php endforeach ?>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Client Kami</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <?php foreach ($client as $c): ?>
            <img src="<?= base_url() ?>files/clients/<?= $c->foto_client ?>" alt="<?= $c->nama_client ?>">
          <?php endforeach ?>
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimoni</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <?php foreach ($testimoni as $t): ?>
            <div class="testimonial-item">
            <img src="<?= base_url() ?>files/testimoni/<?= $t->foto_testimoni ?>" class="testimonial-img" alt="">
            <h3><?= $t->nama_testimoni ?></h3>
            <h4><?= $t->jabatan_testimoni ?></h4>
            <p>
              <img src="<?= base_url() ?>assets/user/img/quote-sign-left.png" class="quote-sign-left" alt="">
              <?= $t->testimoni ?>
              <img src="<?= base_url() ?>assets/user/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
          <?php endforeach ?>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
          <p>Kami terdiri dari beberapa anggota dan berbagai macam keahlian</p>
        </div>

        <div class="row">

          <?php foreach ($team as $t): ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="<?= base_url() ?>files/team/<?= $t->foto_team ?>" class="img-fluid" alt="<?= $t->nama_team ?>">
              <div class="member-info">
                <div class="member-info-content">
                  <h4><?= $t->nama_team ?></h4>
                  <span><?= $t->jabatan_team ?></span>
                  <div class="social">
                    <a target="_blank" href="https://facebook.com/<?= $t->facebook_team ?>"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="https://instagram.com/<?= $t->instagram_team ?>"><i class="fa fa-instagram"></i></a>
                    <a target="_blank" href="https://twitter.com/<?= $t->twitter_team ?>"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="https://github.com/<?= $t->github_team ?>"><i class="fa fa-github"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach ?>

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Kontak</h3>
          <p>Tertarik dengan layanan kami? silahkan hubungi kami melalui kontak di bawah ini.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Alamat</h3>
              <address><?= $alamat ?></address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Whatsapp/Telepon</h3>
              <p><a target="_blank" href="https://wa.me/6285326843612?text=<?= $waktu ?> Luwakode, saya tertarik dengan layanan anda"><?= $telepon ?></a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com"><?= $email ?></a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Pesan anda telah kami terima. Terima kasih :)</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama anda" data-rule="minlen:4" data-msg="Ketikkan paling tidak 4 karakter" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email anda" data-rule="email" data-msg="Ups! email anda tidak benar" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul" data-rule="minlen:4" data-msg="Ketikkan paling tidak 8 karakter" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Tuliskan sesuatu untuk kami" placeholder="Pesan"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Kirim</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3><?= $subtitle ?></h3>
            <p><?= $deskripsi ?></p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>NAVIGASI</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Beranda</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">Tentang Kami</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Layanan</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#portfolio">Portfolio</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>KONTAK</h4>
            <p>
              <?= $alamat ?> <br>
              <strong>Phone:</strong> <?= $telepon ?><br>
              <strong>Email:</strong> <?= $email ?><br>
            </p>

            <div class="social-links">
              <a target="_blank" href="https://facebook.com/<?= $facebook ?>" class="facebook"><i class="fa fa-facebook"></i></a>
              <a target="_blank" href="https://twitter.com/<?= $twitter ?>" class="twitter"><i class="fa fa-twitter"></i></a>
              <a target="_blank" href="https://instagram.com/<?= $instagram ?>" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>

          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div> -->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Luwakode</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="<?= base_url() ?>assets/user/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/user/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url() ?>assets/user/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/user/lib/easing/easing.min.js"></script>
  <script src="<?= base_url() ?>assets/user/lib/superfish/hoverIntent.js"></script>
  <script src="<?= base_url() ?>assets/user/lib/superfish/superfish.min.js"></script>
  <script src="<?= base_url() ?>assets/user/lib/wow/wow.min.js"></script>
  <script src="<?= base_url() ?>assets/user/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url() ?>assets/user/lib/counterup/counterup.min.js"></script>
  <script src="<?= base_url() ?>assets/user/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/user/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>assets/user/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?= base_url() ?>assets/user/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url() ?>assets/user/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url() ?>assets/user/js/main.js"></script>

</body>
</html>
