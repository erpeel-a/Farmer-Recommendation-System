<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chivo&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('Backend/css/landing.css') }}">

    <title>Farm.In</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="#">Farm.In</a>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#about">About</a>
              <a class="nav-item nav-link" href="#features">Features</a>
              <a class="nav-item btn border border-light rounded-0" href="login">Sign In</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- Akhir Navbar -->

      <!-- Jumbotron -->
      <div id="home" class="jumbotron jumbotron-fluid" style="background-image: url('{{ asset('Backend/img/Banner.png')}}');">
        <div class="container d-flex justify-content-between align-items-center">
         <div class="konten">
            <h1 class="display-4">We help you find<br>a suitable recomendation<br>for farmers.</h1>
            <p class="lead">An amazing platform to help you choose<br>the best farmers recomendations.</p>
            <button type="button" class="btn btn-try rounded-0" href="">Try Now</a>
            <button type="button" class="btn btn-about rounded-0" href="">About App</a>
         </div>
         <div class="container-dua">
            <img src="{{ asset('Backend/img/FotoBanner.png') }}">
         </div>
        </div>
      </div>
      <!-- Akhir Jumbotron -->

      <!-- Container -->
      <div class="container">
        <!-- Sponsor -->
            <div class="sponsor d-flex justify-content-around align-items-center">
              <div>
                  <a href="">Afin</a>
                </div>
                <div>
                  <a href="">Zainal</a>
                </div>
                <div>
                  <a href="">Hendra</a>
              </div>
              <div>
                <a href="">Niko</a>
              </div>
            </div>
        <!-- Akhir Sponsor -->
      </div>
      <!-- Akhir Container -->

        <!-- Introduction -->
        <div class="container introduction">
          <div class="title">
            Introduction
          </div>
          <div class="content">
            <div class="content-title">
              Why should you<br>choose us
            </div>
            <div class="text">
              <p>There are many variations of passages of Lorem Ipsum available, but
                suffered alteration in some form. If you are going to use a passages of
                Lorem Ipsum, you need to be sure there isn’t anything embarrassing.  </p>
            </div>
          </div>
        </div>
        <!-- Akhir Introduction -->

        <!-- About -->
        
      <div id="about" class="section d-flex align-items-center">
        <div class="container about">
          <div class="foto">
            <img src="{{ asset('Backend/img/FotoAbout.png') }}">
          </div>
          <div class="text">
            <div class="text-title">
              About Us
            </div>
            <div class="text-p">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed itaque optio, reiciendis perspiciatis totam atque? Rem dolorem laudantium asperiores vero hic nobis pariatur non perferendis odio inventore nemo amet reprehenderit incidunt natus dolores quidem ipsa, architecto voluptas quaerat sint atque. Sunt sequi, rem nesciunt optio exercitationem pariatur id libero laboriosam! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis, molestiae? Laudantium est beatae, molestiae vero illo vel recusandae quibusdam hic.
            </div>
            <div class="link">
              <a class="read" href="">Read more</a>
              <a href=""><img src="{{ asset('Backend/img/arrow.png') }}"></a>
            </div>

          </div>
        </div>
        </div>
        <!-- AKhir About -->

        <!-- Features -->
        
      <div id="features" class="section-2">
        <div class="container features" style="background-image: url('{{ asset('Backend/img/FeaturesBg.png')}}');">
          <div class="title">
            <span class="feature-title">Features</span>
            <span class="feature-p">Our top features to get best result for farmers</span>
          </div>
          <div class="features-box">
            <div class="box">
              <div class="icon"></div>
              <div class="title-box">Title Feature</div>
              <div class="box-p">
                There are many variations<br>
                of passages of Lorem<br>
                Ipsum available, but suffered<br>
                alteration.
              </div>
            </div>
            <div class="box">
              <div class="icon"></div>
              <div class="title-box">Title Feature</div>
              <div class="box-p">
                There are many variations<br>
                of passages of Lorem<br>
                Ipsum available, but suffered<br>
                alteration.
              </div>
            </div>
            <div class="box">
              <div class="icon"></div>
              <div class="title-box">Title Feature</div>
              <div class="box-p">
                There are many variations<br>
                of passages of Lorem<br>
                Ipsum available, but suffered<br>
                alteration.
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- Akhir Features -->

        <!-- Footer -->
        <div class="footer">
          <div class="container">
            <div class="box">
              <div class="title">
                Farm.In
              </div>
              <div class="footer-p">
                Farm.In is a farmer services<br> 
                which is focuses on give<br>
                recomendations for<br> 
                farmers.
              </div>
            </div>
            <div class="box">
              <div class="title">
                Copyright
              </div>
              <div class="footer-p">
                Muhammad afin,<br> 
                Muhamad Zainal Arifin,<br>
                Hendra agil syaputra,<br> 
                Niko febrianto.
              </div>
            </div>
            <div class="box">
              <div class="title">
                Addresse
              </div>
              <div class="footer-p">
                Jalan Street no.69, sub-district,<br> 
                distrist, province,<br>
                Indonesia.<br> 
                muhammadafin787@gmail.com
              </div>
            </div>
          </div>
        </div>
        <!-- Akhir Footer -->


    <!-- Optional JavaScript -->
    <script src="{{ asset('Backend/js/landing.js') }}"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>