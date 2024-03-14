<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Finance Business - Services</title>

    <!-- Bootstrap core CSS -->
    <link href="home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
              <li class="nav-item">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About us</a>
              </li>
              <li class="nav-item active">
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
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Jasa & Layanan Kami</h1>
            <span>Konsisten, berkualitas, cepat tanggap.</span>
          </div>
        </div>
      </div>
    </div>

    <div class="single-services">
      <div class="container">
        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
              <li><a href='#tabs-1'>GoatVest <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-2'>GoatCha <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-3'>GoatDrop <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/single_service_01.jpg" alt="">
                <h4>GoatVest</h4>
                <p>Berasal dari kata Goat dan Infest, dengan GoatVest, anda dapat berinfestasi dalam hewan ternak kambing dan bekerja sama dengan peternak kambing untuk dirawat oleh mereka. Dengan menyediakan modal usaha untuk mitra peternak lokal, anda dan juga memperoleh keuntungan dari hasil penjualan kambing serta produk kambing turunannya.</p>
              </article>
              <article id='tabs-2'>
                <img src="assets/images/single_service_02.jpg" alt="">
                <h4>GoatCha</h4>
                <p>Berasal dari kata Goat dan Gacha, fitur ini digunakan untuk memudahkan pengguna dalam melakukan transaksi jual beli kambing secara online. Pengguna dapat mencari kambing berdasarkan jenis, usia, dan lokasi. Melakukan perbandingan harga dari berbagai penjual yang bermitra dengan Goated, melakukan pemesanan dan pembayaran secara online.</p>
              </article>
              <article id='tabs-3'>
                <img src="assets/images/single_service_03.jpg" alt="">
                <h4>GoatDrop</h4>
                <p>Berasal dari kata Goat dan Drop, fitur ini memungkinkan untuk melakukan pemesanan pengantaran hewan ternak yang dapat memudahkan pengguna dalam melakukan pemesanan hewan ternak di fitur GoatCha. Dengan adanya fitur ini menjadi lebih efisien dan dapat memberikan solusi pengiriman yang terpercaya.</p>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>

    <br><br><br>
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