<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <title>Andri | {{ $tittle }}</title>

    <!-- font icons -->
    <link rel="stylesheet" href="/vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="/vendors/animate/animate.css">

  </head>
  <body style="background-image: url(/imgs/laptop.jpg)">

    <!-- Navbar -->
    @include('partials.navbar2')

    <!-- Header -->
    @yield('container')

    <!--  About Section  -->
      <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
          <div class="col-lg-6 has-img-bg"></div>
            <div class="">
              <div class="row justify-content-center">
                <div class="col-sm-8 py-5 my-5">
                  <h2 class="row justify-content-center mb-4">About Us</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, quisquam accusantium nostrum modi, nemo, officia veritatis ipsum facere maxime assumenda voluptatum enim! Labore maiores placeat impedit, vero sed est voluptas!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita alias dicta autem, maiores doloremque quo perferendis, ut obcaecati harum, <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum necessitatibus iste,
                  nulla recusandae porro minus nemo eaque cum repudiandae quidem voluptate magnam voluptatum? <br>Nobis, saepe sapiente omnis qui eligendi pariatur. quis voluptas. Assumenda facere adipisci quaerat. Illum doloremque quae omnis vitae.</p>
                  <p><b>Lonsectetur adipisicing elit. Blanditiis aspernatur, ratione dolore vero asperiores explicabo.</b></p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ab itaque modi, reprehenderit fugit soluta, molestias optio repellat incidunt iure sed deserunt nemo magnam rem explicabo vitae. Cum, nostrum, quidem.</p>
                </div>
              </div>
            </div>
        </div>
      </div>

    <!-- book a table Section  -->
    <div class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
      <div class="">
          <h2 class="section-title mb-5">Enter Your Laptop</h2>
          <div class="row mb-5">
              <div class="col-sm-8 col-md-12 col-xs-12 my-2">
                  <input type="text" id="laptop" class="form-control form-control-lg custom-form-control" placeholder="type here">
              </div>
          </div>
          <a href="#" class="btn btn-lg btn-primary" id="rounded-btn">Find The Solve</a>
      </div>
  </div>

  <!-- page footer  -->
  <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
    <div class="row">
        <div class="col-sm-4">
            <h3>EMAIL US</h3>
            <P class="text-muted">Andri@example.com</P>
        </div>
        <div class="col-sm-4">
            <h3>CALL US</h3>
            <P class="text-muted">(123) 456-7890</P>
        </div>
        <div class="col-sm-4">
            <h3>FIND US</h3>
            <P class="text-muted">Andri Home</P>
        </div>
    </div>
  </div>
  <div class="bg-dark text-light text-center border-top wow fadeIn">
    <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="ti-heart text-danger"></i> By <a>Andri Center</a></p>
  </div>
  <!-- end of page footer -->
  
    <!-- core  -->
    <script src="/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="/vendors/wow/wow.js"></script>

    <!-- js -->
    <script src="/js/style.js"></script>

    
  </body>
</html>