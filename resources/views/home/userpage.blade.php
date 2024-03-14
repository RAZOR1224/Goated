<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Goated</title>

    <!-- Bootstrap core CSS -->
    <link href="home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="home/css/bootstrap.min.css" rel="stylesheet">

    <link href="home/css/bootstrap-icons.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="home/assets/css/fontawesome.css">
    <link rel="stylesheet" href="home/assets/css/styles.css">
    <link rel="stylesheet" href="home/assets/css/owl.css">
<!--

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Senin-Jumat 09:00-16:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>8781-945-1419</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-whatsapp"></i>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <img src="home/assets/images/goated_logo.png" class="img-responsive">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#top">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About us</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="{{ route('services') }}">Our Services</a>
              </li>                          
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Terbaik di antara semua pilihan.</h6>
                  <h4>GoatVest</h4>
                  <p>Anda dapat mendukung peternak kambing dengan menyediakan modal usaha untuk peternak lokal dan juga memperoleh keuntungan dari hasil penjualan kambing serta produk kambing turunannya.</p>
                  <a class="filled-button" href="{{ route('services') }}">Pelajari lebih lanjut</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Beli Hewan Ternak Kambing Tanpa Kendala</h6>
                  <h4>GoatCha</h4>
                  <p>Anda dalam melakukan transaksi jual beli kambing secara online. Pengguna dapat mencari kambing berdasarkan jenis, usia, dan lokasi. Melakukan perbandingan harga dari berbagai penjual yang bermitra dengan Goated.</p>
                  <a class="filled-button" href="{{ route('services') }}">Pelajari lebih lanjut</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Pengantaran Hewan Ternak Kambing Tanpa Kendala</h6>
                  <h4>GoatDrop</h4>
                  <p>Anda dapat melakukan pemesanan pengantaran hewan ternak, memudahkan Anda dalam melakukan pemesanan hewan ternak di fitur GoatCha. Dengan adanya fitur ini menjadi lebih efisien dan dapat memberikan solusi pengiriman yang terpercaya. </p>
                  <a class="filled-button" href="{{ route('services') }}">Pelajari lebih lanjut</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->


    <div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="home/assets/images/more-info.jpg" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <h2>Kenali tentang perusahaan kami</em></h2>
                    <p>Goated adalah platform yang didirikan oleh perusahaan kami PT CompanEase dengan lini bisnis yaitu sektor perternakan. Start-up ini bergerak pada bidang peternakan yang bertujuan untuk membantu orang yang ingin melakukan investasi namun dalam bentuk peternakan. Dengan platform ini, diharapkan dapat membantu meningkatkan kesejahteraan dari peternak yang memiliki keterampilan dalam beternak dalam mengelola hewan ternak, namun tidak memiliki dana yang cukup untuk mengembangkan peternakannya secara mandiri. </p>
                    <a class="filled-button" href="{{ route('about') }}">Pelajari lebih lanjut</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br><br>

    <section class="timeline-section section-padding" id="section_3">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h1 class="text-black mb-4">Bagaimana platform Goated bekerja?</h1>
                        </div>

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner"></div>
                                    </div>

                                    <li>
                                        <h3 class="custom-color">Investasi</h3>

                                        <h5 class="text-black">Anda bisa bantu mendanai proyek budidaya petani melalui Fitur GoatVest kami.</h5>

                                        <div class="icon-holder">
                                            <i class="fa fa-money white-icon"></i>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <h3 class="custom-color">Budidaya</h3>

                                        <h5 class="text-black">Mitra Peternak Goated, menjalankan budidaya dari hewan ternak yang anda setorkan.</h5>

                                        <div class="icon-holder">
                                          <i class="fa fa-heart white-icon"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h3 class="custom-color">Jual</h3>

                                        <h5 class="text-black">Kami dari pihak Goated menjual hewan ternak tersebut dengan kesepakatan anda.</h5>

                                        <div class="icon-holder">
                                        <i class="fa fa-usd white-icon"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h3 class="custom-color">Bagi Hasil</h3>

                                        <h5 class="text-black">Setelah hewan ternak dijual, anda bisa mendapatkan keuntungan dari dana yang anda setorkan.</h5>

                                        <div class="icon-holder">
                                        <i class="fa fa-line-chart white-icon"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Fitur Utama <em>Goated</em></h2>
              <span>Goated menyediakan layanan dan produk untuk peternak kambing dan masyarakat umum.</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/service_01.jpg" alt="">
              <div class="down-content">
                <h4>GoatVest</h4>
                <p>Berasal dari kata Goat dan Infest, dengan GoatVest, anda dapat berinfestasi dalam hewan ternak kambing dan bekerja sama dengan peternak kambing untuk dirawat oleh mereka. Dengan menyediakan modal usaha untuk mitra peternak lokal, anda dan juga memperoleh keuntungan dari hasil penjualan kambing serta produk kambing turunannya.</p>
                <a class="filled-button" href="{{ route('services') }}">Pelajari lebih lanjut</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/service_02.jpg" alt="">
              <div class="down-content">
                <h4>GoatCha</h4>
                <p>Berasal dari kata Goat dan Gacha, fitur ini digunakan untuk memudahkan pengguna dalam melakukan transaksi jual beli kambing secara online. Pengguna dapat mencari kambing berdasarkan jenis, usia, dan lokasi. Melakukan perbandingan harga dari berbagai penjual yang bermitra dengan Goated, melakukan pemesanan dan pembayaran secara online.</p>
                <a class="filled-button" href="{{ route('services') }}">Pelajari lebih lanjut</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="assets/images/service_03.jpg" alt="">
              <div class="down-content">
                <h4>GoatDrop</h4>
                <p>Berasal dari kata Goat dan Drop, fitur ini memungkinkan untuk melakukan pemesanan pengantaran hewan ternak yang dapat memudahkan pengguna dalam melakukan pemesanan hewan ternak di fitur GoatCha. Dengan adanya fitur ini menjadi lebih efisien dan dapat memberikan solusi pengiriman yang terpercaya. </p>
                <a class="filled-button" href="{{ route('services') }}">Pelajari lebih lanjut</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <h2>Mengapa Memilih <em>Goated</em>?</h2>
              <p>Fokus Utama PT. CompanEase adalah menyediakan platform website bernama “Goated” yang berpotensi akan terus berkembang dan selalu dibutuhkan, bertujuan untuk memberikan kemudahan bagi seluruh kalangan masyarakat untuk berinvestasi sebagian harta mereka meskipun sedikit, serta mengembangkan bisnis peternakan lokal dengan pemberian modal untuk bisnis mereka. PT. CompanEase menjadi perantara yang sebagai jembatan komunikasi antara investor dengan mitra peternakan, serta sebagai pihak yang mengurus transaksi hewan ternak, sehingga mitra peternakan bisa berfokus untuk merawat hewan ternak investasi dengan maksimal. Investor bisa memilih untuk membeli, menjual, menginvestasikan hewan ternak mereka kepada mitra peternakan, dan bisa bertransaksi dengan harta jika tidak memiliki hewan ternak, opsi yang tersedia untuk di investasikan yaitu berupa Akikah, Qurban, atau dapat juga di kembang biakkan.  

Transaksi binatang ternak memiliki Akad yang jelas, sehingga jika terjadi suatu bencana pada hewan investasi akan terminimalisir hal-hal yang tidak diinginkan. Dengan memanfaatkan teknologi sistem informasi, platform berbasis website “Goated” ini diharapkan dapat mensejahterakan serta menguntungkan  semua pihak yang terlibat. </p>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="row">
              <div class="col-md-6">
                <div class="count-area-content">
                  <i class="fa fa-star white-icon fa-3x"></i>
                  <div class="count-title">Platform bagi hasil terbaik</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <i class="fa fa-check white-icon fa-3x"></i>
                  <div class="count-title">Dana Proyek Terkumpul</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <i class="fa fa-shield white-icon fa-3x"></i>
                  <br><br>
                  <div class="count-title">Aman Dan Profesional</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <i class="fa fa-users white-icon fa-3x"></i>
                  <div class="count-title">Memberi Dampak Sosial</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">26</div>
                  <div class="count-title">Pendana Goated</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div style="display: inline-block;" class="count-text">Rp.</div>
                  <div style="display: inline-block;" class="count-digit">13293753</div>
                  <div class="count-title">Dana Proyek Terkumpul</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Pendapat Mereka</em></h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Fulan1</h4>
                  <span>Programing</span>
                  <p>"Sangat bagus, saya suka sekali."</p>
                </div>
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Fulan2</h4>
                  <span>Data Analyst</span>
                  <p>"ih kerenyooooo, betul betul betul."</p>
                </div>
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Fulan3</h4>
                  <span>Accountant</span>
                  <p>"Alamaaaaaaaaaaaaaaaaaaaak."</p>
                </div>
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Fulan4</h4>
                  <span>Enterpreneur</span>
                  <p>"Alea Iacta Est."</p>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Daftar Sekarang</h1>
            <span>Rasakan Keuntungan maksimal dan bantu sejahterakan peternak bersama ribuan orang lainnya di Goated</span>
            <br>
            <a class="filled-button" href="{{ route('register') }}">Daftar</a>
          </div>
        </div>
      </div>
    </div>

    <div class="partners">
      <div class="container">
        <h2 style="text-align: center;">Didukung Oleh</h2>
        <br>
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
            
              <div class="partner-item">
                <img src="home/assets/images/client-01.png" title="1" alt="1">
              </div>
              
              <div class="partner-item">
                <img src="home/assets/images/client-01.png" title="2" alt="2">
              </div>
              
              <div class="partner-item">
                <img src="home/assets/images/client-01.png" title="3" alt="3">
              </div>
              
              <div class="partner-item">
                <img src="home/assets/images/client-01.png" title="4" alt="4">
              </div>
              
              <div class="partner-item">
                <img src="home/assets/images/client-01.png" title="5" alt="5">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>Follow Us</h4>
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Kontak Kami</h4>
            <ul class="menu-list">
              <li><a href="#">Jl. H.R.A Rahman Gg. Selamat 2 No.10,Sungai Jawi Dalam, Pontianak Barat, Pontianak, West Kalimantan 78244</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Produk & Jasa</a></li>
              <li><a href="#">Syarat dan Ketentuan</a></li>
              <li><a href="#">Kebijakan Privasi</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy; 2024 PT. CompanEase.
          </div>
        </div>
      </div>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="home/js/jquery.min.js"></script>
    <script src="home/js/bootstrap.bundle.min.js"></script>
    <script src="home/js/jquery.sticky.js"></script>
    <script src="home/js/click-scroll.js"></script>
    <script src="home/js/custom.js"></script>
    
    <!-- Bootstrap core JavaScript -->
    <script src="home/vendor/jquery/jquery.min.js"></script>
    <script src="home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="home/assets/js/custom.js"></script>
    <script src="home/assets/js/owl.js"></script>
    <script src="home/assets/js/slick.js"></script>
    <script src="home/assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>