

<header2 class="">



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
  <nav class="navbar navbar-expand-lg" style="box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);" >
        <div class="container">
          <img src="users/assets/images/goated_logo.png" class="img-responsive">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('redirect') }}">Home</a>
              </li>     
              <li class="nav-item">
                <a class="nav-link" href="">GoatVest</a>
              </li>         
              <li class="nav-item">
                <a class="nav-link" href="">GoatCha</a>
              </li>          
              <li class="nav-item">
                            <a class="nav-link" href="">Mitra</a>
                        </li>
              <li class="nav-item">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>

                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile.show') }}"><i class="ti-user me-1 ms-1"></i>
                                    Profile</a>
                                    <a class="dropdown-item" href=""><i class="ti-user me-1 ms-1"></i>
                                    Riwayat</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf <!-- Include CSRF token -->
                                </form>
                                <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="#" class="dropdown-item">
                                    <i class="ti-wallet me-1 ms-1"></i> Logout
                                </a>
                            </ul>
                        </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      </header2>
