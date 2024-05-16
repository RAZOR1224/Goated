<!DOCTYPE html>
<html lang="en">

  <head>
    @include('home.partial.css')
  </head>

  <body>
  @include('home.partial.header')
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
                <a class="nav-link" href="{{ route('user-faq') }}">FAQ</a>
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

  @include('home.partial.footer')

  @include('home.partial.script')
  </body>
  </html>