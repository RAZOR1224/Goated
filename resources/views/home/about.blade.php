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
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('about') }}">About us</a>
            </li>
            <li class="nav-item">
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
            <h1>Goated</h1>
            <span>Perusahaan Startup Investasi Hewan Ternak Kambing</span>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>latar belakang perusahaan kami</span>
                    <h2>Get to know about <em>our company</em></h2>
                    <p>Goated adalah platform yang didirikan oleh perusahaan kami PT CompanEase dengan lini bisnis yaitu sektor perternakan. Start-up ini bergerak pada bidang peternakan yang bertujuan untuk membantu orang yang ingin melakukan investasi namun dalam bentuk peternakan. Dengan platform ini, diharapkan dapat membantu meningkatkan kesejahteraan dari peternak yang memiliki keterampilan dalam beternak dalam mengelola hewan ternak, namun tidak memiliki dana yang cukup untuk mengembangkan peternakannya secara mandiri. </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="home/assets/images/about-image.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="visimisi">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="section-heading">
                <h10>Visi & Misi</h10>
                <h5>Harapan dan Tujuan dari Platform kami.</h5>
              </div>
          </div>
          <div class="col-md-6">
            <div class="section-heading">
                <h2><em>Visi</em></h2>
                <span2>Menjadi Start-up peternakan yang menyediakan hewan ternak sebagai investasi unggul dan  sebagai investasi jangka panjang. Kemudian juga menyediakan hewan yang dapat dijadikan untuk berkurban maupun aqiqah dengan ....... baik, untuk membantu masyarakat dalam mewujudkan ibadahnya dan kesejahteraan di masa depan. </span2>
              </div>
          </div>
          <div class="col-md-6">
            <div class="section-heading">
                <h2><em>Misi</em></h2>
                <span2>1. Memberikan peluang investasi peternakan yang aman, menguntungkan dan berkelanjutan </span2>
                <span2>2. Menyediakan hewan ternak berkualitas tinggi, untuk kurban dan aqiqah dengan layanan mudah dan terpercaya. </span2>
                <span2>3. Meningkatkan pendapatan dan kesejahteraan peternak melalui akses teknologi. </span2>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2><em>Anggota</em> Tim Kami</h2>
              <span>Bright, Fast, Adaptive.</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="home/assets/images/team_01.jpeg" alt="">
              <div class="down-content">
                <h4>Fachri Julianda</h4>
                <span>Project Manager</span>
                <p>pa pi pu pe po pa pi pu pe po pa pi pu pe po pa pi pu pe po.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="home/assets/images/team_01.jpeg" alt="">
              <div class="down-content">
                <h4>Erdika Nabila Rizkania</h4>
                <span>System Analyst</span>
                <p>pa pi pu pe po pa pi pu pe po pa pi pu pe po pa pi pu pe po.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="home/assets/images/team_01.jpeg" alt="">
              <div class="down-content">
                <h4>Salasa Nopa Munika </h4>
                <span>System Analyst</span>
                <p>pa pi pu pe po pa pi pu pe po pa pi pu pe po pa pi pu pe po.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="home/assets/images/team_01.jpeg" alt="">
              <div class="down-content">
                <h4>Atira Salsabilla</h4>
                <span>Sales Marketing</span>
                <p>pa pi pu pe po pa pi pu pe po pa pi pu pe po pa pi pu pe po.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="home/assets/images/team_01.jpeg" alt="">
              <div class="down-content">
                <h4>Rivo Ayulga Satria</h4>
                <span>Sales Marketing</span>
                <p>pa pi pu pe po pa pi pu pe po pa pi pu pe po pa pi pu pe po.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="home/assets/images/team_01.jpeg" alt="">
              <div class="down-content">
                <h4>Satria Rangga Maulana </h4>
                <span>UI & UX Designer</span>
                <p>pa pi pu pe po pa pi pu pe po pa pi pu pe po pa pi pu pe po.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="home/assets/images/team_01.jpeg" alt="">
              <div class="down-content">
                <h4>Ranti Zia Ramadania</h4>
                <span>UI & UX Designer</span>
                <p>pa pi pu pe po pa pi pu pe po pa pi pu pe po pa pi pu pe po.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="home/assets/images/team_01.jpeg" alt="">
              <div class="down-content">
                <h4>Andreanus Eko Putra </h4>
                <span>Programmer</span>
                <p>pa pi pu pe po pa pi pu pe po pa pi pu pe po pa pi pu pe po.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="home/assets/images/team_01.jpeg" alt="">
              <div class="down-content">
                <h4>Khalid Ibnu Natsir </h4>
                <span>Programming</span>
                <p>pa pi pu pe po pa pi pu pe po pa pi pu pe po pa pi pu pe po.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('home.partial.footer')

    @include('home.partial.script')
  </body>
  </html>