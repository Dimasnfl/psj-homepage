<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIDUDA : Home</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->


  <!-- ICON JUDUL -->
  <link href="assets/img/logo-psj-32.png" rel="icon">
  <link href="assets/img/logo-psj-180.png" rel="psj-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/carousel.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie - v2.0.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center">
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="" class="logo mr-auto"><img src="assets/img/logo-psj.png" alt="" class="img-fluid"></a> -->
          <h1 class="logo mr-auto"><a href="">SIDUDA</a><br />
            <p class="logoz mr-auto">Sistem Informasi Produk<br />Daerah Kabupaten Bandung</p>
          </h1>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#bs-carousel">Home</a></li>
              <li><a href="#faq">Info</a></li>
              <li><a href="#pricing">Product</a></li>
              <!-- <li><a href="#services">Services</a></li> -->
              <li class="drop-down"><a href="">More</a>
                <ul>
                  <li><a href="#portfolio">Gallery</a></li>
                  <li><a href="#testimonials">Development Team</a></li>
                </ul>
              </li>
              <li><a href="#contact">Contact</a></li>

            </ul>
          </nav><!-- .nav-menu -->
          <a href="https://sidutama.web.id/administrator/" target="_blank" class="get-started-btn scrollto">Administrator</a>

        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->



  <main id="main">
    <!-- ======= About Section ======= -->
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="3000" id="bs-carousel">
      <!-- Overlay -->
      <div class="overlay"></div>

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item slides active">
          <div class="slide-1"></div>
          <div class="hero">
            <img src="assets/img/logo-univ.png" width="200px" height="200px" alt="" style="margin:30px" class="animated">
            <hgroup>
              <h1>Universitas Widyatama</h1>
            </hgroup>
            <div><a href="https://www.widyatama.ac.id/" target="_blank" style="margin:20px auto" class="btn btn-outline-danger">Selengkapnya</a></div>
          </div>
        </div>
        <div class="item slides">
          <div class="slide-2"></div>
          <div class="hero">
            <img src="assets/img/logo-kadin.png" width="200px" height="200px" alt="" style="margin:30px" class="animated">
            <hgroup>
              <h1>Kadin Kota Bandung</h1>
            </hgroup>
            <div><a href="https://kadinbandung.or.id/" target="_blank" style="margin:20px auto" class="btn btn-outline-danger">Selengkapnya</a></div>
          </div>
        </div>
        <div class="item slides">
          <div class="slide-3"></div>
          <div class="hero">
            <img src="assets/img/logo-pemerintah.png" width="200px" height="200px" alt="" style="margin:30px" class="animated">
            <hgroup>
              <h1>Pemerintah <br />Kabupaten Bandung</h1>
            </hgroup>
            <div><a href="https://bandungkab.go.id/" style="margin:20px auto" target="_blank" class="btn btn-outline-danger">Selengkapnya</a></div>
          </div>
        </div>
      </div>
    </div>
    <!-- End About Section -->


     <!-- ======= Counts Section ======= -->
     <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-4 col-12 text-center">
            <span data-toggle="counter-up"><?php echo $jml_petani; ?></span>
            <p>Petani Terdaftar <br/>Saat ini</p>
          </div>

          <div class="col-lg-4 col-12 text-center">
            <span data-toggle="counter-up"><?php echo $jml_produk; ?></span>
            <p>Produk Terdaftar <br/>Saat ini</p>
          </div>

          <div class="col-lg-4 col-12 text-center">
            <span data-toggle="counter-up"><?php echo $jml_transaksi; ?></span>
            <p>Produk Terjual <br/>Saat ini</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Info</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-info-circle icon-info"></i> <a data-toggle="collapse" href="#faq-list-1" class="collapsed">Apa Itu SIDUDA ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse" data-parent=".faq-list">
                <p>
                  <b>SIDUDA</b> (<i>Sistem Informasi Produk Daerah</i>) adalah aplikasi yang dibuat untuk melakukan monitoring pendistribusian hasil pertanian.<br />
                  <br />
                  Aplikasi <b>SIDUDA</b> ini hasil kolaborasi kamar dagang dan industri (KADIN) Kota Bandung pemerintah Kabupaten Bandung dan desa Sukapura Kabupaten Bandung. Pada aplikasi <b>SIDUDA</b> ini menggambarkan siklus pendistribusian hasil pertanian di desa Sukapura, yang mengelola berbagai data dan informasi diantaranya :<br />
                  1. Data Petani <br />
                  2. Data E-Commodity <br />
                  3. Data Harga Produk <br />
                  4. Data Dusun <br />
                  5. Data Kurir <br />
                  6. Data Mitra <br />
                  7. Data Transaksi <br />
                  8. Informasi transaksi hasil penjualan, hasil tani para petani secara periode tertentu.<br />
                  9. Informasi luas lahan dan hasil panen berdasarkan jenis Commodity.<br />
                  10.Informasi luas lahan petani yang dimiliki dari berbagai jenis Commodity.<br />
                  <br />
                  Data-data ini dapat diakses di website siduda untuk memonitoring pertanian Desa Sukapura.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-info-circle icon-info"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Apa Manfaat SIDUDA ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Adapun Manfaat aplikasi <b>SIDUDA</b> adalah sebagai berikut :<br />
                  1. Memangkas jalur distribusi hasil panen para petani.<br />
                  2. Petani mendapatkan pendistribusian hasil panen yang lebih optimal.<br />
                  3. Meningkatkan kesejahteraan taraf hidup para petani.<br />
                  4. Membantu pemerintah kabupaten Bandung dalam pengelolaan E-Commodity.<br />
                  5. Membantu aparatur desa dalam mengelola E-Commodity.<br />
                </p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-info-circle icon-info"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Siklus Penggunaan ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  1.<b>Kadin</b> ke <b>Mitra</b><br /> 
                  Berkerja sama untuk distribusi hasil petanian.<br />
                  <br />
                  2.<b>Kadin</b> ke <b>Kurir</b><br />
                  Kadin meginput penugasan kurir untuk mengambil hasil pertanian.<br />
                  <br />
                  3.<b>Kadin</b> ke <b>Petani</b><br />
                  Kadin menerima inputan dari petani untuk mengetahui kapan produk hasil pertanian panen dan siap di ambil leh kurir.<br />
                  <br />
                  4.<b>Kurir</b> ke <b>Petani</b><br />
                  Kadin menerima inputan dari petani sebagai informasi kapan produk panen dan dapat diambil oleh kurir.<br />
                  <br />
                  5.<b>Kurir</b> ke <b>Mitra</b><br />
                  Mengantarkan hasil petanian dari petani menuju mitra sesuai penugasan kadin.<br />
                  <br />
                  6.<b>Kurir</b> ke <b>Kadin</b><br />
                  Menerima inputan untuk mengambil hasil pertanian sesuai dengan inputan.<br />
                  <br />
                  7.<b>Petani</b> ke <b>Kadin</b><br />
                  Menginput data terkait data komodias,luas lahan,identias,dan status produk.
                </p>

                <img class="siklus" target="_blank" src="assets/img/siklus.jpeg">

              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Produk Komoditas</h2>
        </div>

        <div class="row">
          <?php foreach ($data as $row) : ?>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100" style="margin:20px auto">
              <div class="box featured">
                <h3><?php echo $row->nama; ?></h3>
                <!-- <h4><sup>$</sup>0<span> / month</span></h4> -->
                <!-- <img src="assets/img/produk/wortel.png" alt="" class="img-fluid"> -->
                <!-- <img src="<?php echo base_url() . '/assets/img/produk/wortel.png'; ?>" > -->
                <img src="https://sidutama.web.id/administrator/assets/thumbnail/<?php echo $row->foto; ?>" width="215px" height="150px">

                <ul>
                  <li></li>
                  <li>Harga saat ini :</li>
                  <li><?php echo 'Rp ' . number_format($row->harga); ?> /kg</li>
                  <a href="https://play.google.com/store/apps/details?id=com.widyatama.petani_sejahtera" target="_blank" class="btn btn-solid-secondary"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                </ul>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section><!-- End Pricing Section -->



    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Nature</li>
              <li data-filter=".filter-card">Team</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/psj-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nature 1</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/psj-1.jpg" data-gall="portfolioGallery" class="venobox" title="Nature 1"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/psj-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Moment 3</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/psj-8.jpg" data-gall="portfolioGallery" class="venobox" title="Moment 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/psj-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nature 2</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/psj-2.jpg" data-gall="portfolioGallery" class="venobox" title="Nature 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/psj-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nature 3</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/psj-3.jpg" data-gall="portfolioGallery" class="venobox" title="Nature 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/psj-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Moment 4</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/psj-9.jpg" data-gall="portfolioGallery" class="venobox" title="Moment 4"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/psj-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nature 4</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/psj-4.jpg" data-gall="portfolioGallery" class="venobox" title="Nature 4"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/psj-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Moment 1</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/psj-6.jpg" data-gall="portfolioGallery" class="venobox" title="Moment 1"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/psj-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Nature 5</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/psj-5.jpg" data-gall="portfolioGallery" class="venobox" title="Nature 5"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/psj-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Moment 2</h4>
                <p>...</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/psj-7.jpg" data-gall="portfolioGallery" class="venobox" title="Moment 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Universitas Widyatama<br />
                Jl. Cikutra no 204 A Bandung, Jawa Barat, Indonesia 40124</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>widyatama@widyatama.ac.id</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>phone : +62-22-7275855 <br />
                Fax : +62-22-720299</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Development Team</h2>
          <!-- <p>MBKM Ciparay 2022.</p> -->
        </div>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Terus bangkit, hingga kamu terbiasa dengan KEGAGALAN.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/galung.jpg" class="testimonial-img" alt="">
            <h3>Gilang Pratama Putra</h3>
            <h4>Leader</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Bersungguh-sungguh itu sulit.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/dimas2.jpg" class="testimonial-img" alt="">
            <h3>Dimas Naufal Hakiki</h3>
            <h4>Website Division</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Lupakan 1000 keburukan, dan ingatlah 1 kebaikan.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/irfan.jpg" class="testimonial-img" alt="">
            <h3>Muhammad Irfan Restu Perkasa</h3>
            <h4>Android Division</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Lakukan dengan sungguh-sungguh, atau tidak sama sekali.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/yusuf.jpg" class="testimonial-img" alt="">
            <h3>Yusuf Afandi</h3>
            <h4>Android Division</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Hidup mulia atau mati syahid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/imen.jpg" class="testimonial-img" alt="">
            <h3>Muhammad Aiman Abdul Hafizh</h3>
            <h4>Documentation Division 1</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Jangan pernah menyerah walaupun kegagalan terus menimpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/randy.jpg" class="testimonial-img" alt="">
            <h3>Randy Kurniawan</h3>
            <h4>Documentation Division 2</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Akan ada cerita baru dimulai, ketika cerita lama berakhir.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/raya.jpg" class="testimonial-img" alt="">
            <h3>Rhadhiya Wiraga Sudrajat</h3>
            <h4>Video Documentation Division</h4>
          </div>

        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
          <div class="copyright">
            &copy; Copyright <strong><span>YGK</span></strong>. All Rights Reserved
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->

            <p style="font-size:10px">using <a href="https://bootstrapmade.com/">Bootstrapmade</a></p>
          </div>
        </div>

      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>