<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

  <title>Welcome To Page SPP IGAPIN</title>

  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('dist/css/landing/bootstrap.min.css') ?> ">

  <link rel="stylesheet" type="text/css" href="<?= base_url('dist/css/landing/font-awesome.css') ?>">

  <link rel="stylesheet" href="<?= base_url('dist/css/landing/templatemo-training-studio.css') ?> ">


  <style>
    .image-header {
      filter: brightness(25%)
    }
  </style>

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="<?= site_url('landing') ?>" class="logo">SPP<em> IGAPIN</em> </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#features_sch">Tentang Sekolah</a></li>
              <li class="scroll-to-section"><a href="#features_app">Tentang Aplikasi</a></li>
              <li class="scroll-to-section"><a href="#our-classes">Fasilitas</a></li>
              <li class="scroll-to-section"><a href="#contact-us">Kontak</a></li>
              <li class="main-button"><a href="<?= site_url('login') ?>">LOGIN</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->

  <div class="main-banner" id="top">
    <img src="<?= base_url('dist/img/landing/IGAPIN.jpg') ?>" width="1300" alt="" class="image-header">

    <div class=" header-text">
      <div class="caption">
        <h6>SISTEM APLIKASI PENGELOLA SPP IGASAR PINDAD</h6>
        <h2>SPP <em>IGAPIN</em></h2>
      </div>
    </div>
  </div>


  <!-- ***** Features Item Start ***** -->
  <section class="section" id="features_sch">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="section-heading">
            <h2>Tentang <em>Sekolah</em></h2>
            <img src="<?= base_url('dist/img/landing/Logo_SMKIP.png') ?>" width="200" alt="SMKIP">
            <p>SMKS IGASAR PINDAD BANDUNG adalah salah satu satuan pendidikan dengan jenjang SMK di Cisaranten Kulon, Kec. Arcamanik, Kota Bandung, Jawa Barat. Dalam menjalankan kegiatannya, SMKS IGASAR PINDAD BANDUNG berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.SMKS IGASAR PINDAD BANDUNG menyediakan listrik untuk membantu kegiatan belajar mengajar. Sumber listrik yang digunakan oleh SMKS IGASAR PINDAD BANDUNG berasal dari PLN. SMKS IGASAR PINDAD BANDUNG menyediakan akses internet yang dapat digunakan untuk mendukung kegiatan belajar mengajar menjadi lebih mudah. Provider yang digunakan SMKS IGASAR PINDAD BANDUNG untuk sambungan internetnya adalah Telkom Astinet.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Features Item End ***** -->


  <!-- ***** Features Item Start ***** -->
  <section class="section" id="features_app">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="section-heading">
            <h2>Tentang <em>Aplikasi</em></h2>
            <img src="<?= base_url('dist/img/Logo_SPP.png') ?>" width="300" alt="SPP">
            <p>SPP IGAPIN merupakan aplikasi pembayaran SPP yang di operasikan dan digunakan sebagai aplikasi untuk mendata dan melakukan transaksi SPP siswa/i SMK IGASAR PINDAD Bandung agar lebih mudah.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Features Item End ***** -->


  <!-- ***** Our Classes Start ***** -->
  <section class="section" id="our-classes">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Jurusan <em>Kami</em></h2>
            <img src="<?= base_url('dist/img/landing/line-dec.png') ?> " alt="">
            <p>Dibawah ini adalah beberapa jurusan yang ada di SMK Igasar Pindad Bandung. Semua guru merupakan tenaga kerja yang berpengalaman dan profesional.</p>
          </div>
        </div>
      </div>
      <div class="row" id="tabs">
        <div class="col-lg-3">
          <ul>
            <li><a href='#tabs-1'><img src="<?= base_url('dist/img/landing/LOGO_RPL.png') ?> " width="40" alt="">Rekayasa Perangkat Lunak </a></li>
            <li><a href='#tabs-2'><img src="<?= base_url('dist/img/landing/LOGO_TSM.png') ?> " width="40" alt="">Teknik Sepeda Motor</a></li>
            <li><a href='#tabs-3'><img src="<?= base_url('dist/img/landing/LOGO_TP.png') ?> " width="40" alt="">Teknik Permesinan </a></li>
            <li><a href='#tabs-4'><img src="<?= base_url('dist/img/landing/LOGO_TKR.png') ?> " width="40" alt="">Teknik Kendaraan Ringan </a></li>
            <li><a href='#tabs-5'><img src="<?= base_url('dist/img/landing/LOGO_TKJ.png') ?> " width="40" alt="">Teknik Komputer Jaringan </a></li>
          </ul>
        </div>
        <div class="col-lg-8">
          <section class='tabs-content'>
            <article id='tabs-1'>
              <img src="<?= base_url('dist/img/landing/RPL_L.jpg') ?> " width="1000" alt="">
            </article>
            <article id='tabs-2'>
              <img src="<?= base_url('dist/img/landing/TSM_M.jpg') ?>" width="1000" alt="">
            </article>
            <article id='tabs-3'>
              <img src="<?= base_url('dist/img/landing/TP_P.jfif') ?>" width="1000" alt="">
            </article>
            <article id='tabs-4'>
              <img src="<?= base_url('dist/img/landing/TKR_R.png') ?>" width="1000" alt="">
            </article>
            <article id='tabs-5'>
              <img src="<?= base_url('dist/img/landing/TKJ_J.jpg') ?>" width="1000" alt="">
            </article>
          </section>
        </div>
      </div>
    </div>
  </section>




  <!-- ***** Contact Us Area Starts ***** -->
  <section class="section" id="contact-us">
    <div class="section-heading">
      <h2>Kon<em>tak</em></h2>
      <img src="<?= base_url('dist/img/landing/line-dec.png') ?>" alt="">
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg col-md-6 col-xs-12">
          <div id="map">
            <center><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.317900561306!2d107.67800648570555!3d-6.931304774612839!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c2ade076ca49%3A0x3386663587285417!2sIgasar%20Pindad%20Vocational%20High%20School!5e0!3m2!1sen!2sid!4v1676944431183!5m2!1sen!2sid" width="1270" height="1000" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </center>
          </div>
        </div>
        <!-- <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div> -->
      </div>
    </div>
  </section>
  <!-- ***** Contact Us Area Ends ***** -->

  <!-- ***** Footer Start ***** -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright &copy; 2023 SMKS IGASAR PINDAD BANDUNG

            - Designed By <a href='https://www.linkedin.com/in/ahmad-dzaki-9394bb261' title='Ahmad Dzaki' target='_blank'>Ahmad Dzaki</a></p>

          <!-- You shall support us a little via PayPal to info@templatemo.com -->

        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="<?= base_url('dist/js/landing/jquery-2.1.0.min.js') ?> "></script>

  <!-- Bootstrap -->
  <script src="<?= base_url('dist/js/landing/popper.js') ?> "></script>
  <script src="<?= base_url('dist/js/landing/bootstrap.min.js') ?> "></script>

  <!-- Plugins -->
  <script src="<?= base_url('dist/js/landing/scrollreveal.min.js') ?> "></script>
  <script src="<?= base_url('dist/js/landing/waypoints.min.js') ?> "></script>
  <script src="<?= base_url('dist/js/landing/jquery.counterup.min.js') ?>"></script>
  <script src="<?= base_url('dist/js/landing/imgfix.min.js') ?>"></script>
  <script src="<?= base_url('dist/js/landing/mixitup.js') ?>"></script>
  <script src="<?= base_url('dist/js/landing/accordions.js') ?>"></script>

  <!-- Global Init -->
  <script src="<?= base_url('dist/js/landing/custom.js') ?>"></script>

</body>

</html>