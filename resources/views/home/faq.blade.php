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
              <li class="nav-item">
              <a class="nav-link" href="{{ route('services') }}">Our Services</a>
              </li> 
              <li class="nav-item active">
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
            <h1>FAQ</h1>
            <span></span>
          </div>
        </div>
      </div>
    </div>

    @include('home.partial.footer')

    @include('home.partial.script')
  </body>
  </html>