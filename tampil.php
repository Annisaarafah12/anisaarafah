<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
     <!--icon-->
    <link rel="icon" href="assets/icons-bookstore.png" type="image/x-icon">

    <title>Bookstore</title>
  </head>
  <body>
     <nav class="navbar navbar-expand-lg navbar-light bg-transparan position-fixed w-100 fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
              <a class="nav-link active" aria-current="page" href="#pertama" style="font-size: 20px;">Home</a>
              <a class="nav-link " href="menu"  style="font-size: 20px;">Menu</a>
              <a class="nav-link  " href="troli"  style="font-size: 20px;">Troli</a>
              <a class="nav-link " href="#baca"  style="font-size: 20px;">About</a>
               <a class="nav-link " href="contact"  style="font-size: 20px;">Contact</a>
            </div>
          </div>
        </div>
      </nav>

       <!--pertama-->
      <section id="pertama">
       <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>A-Perpus</h1>
                <p span class="text">Reading will help you find 
                  yourself.</p>
                  <div class="button" style="margin-left:70px">
                <a href="index.php"><button type="button" class="btn btn-outline-light">Login</button></a>
            </div></div>
            <div class="col-6">
            <img src="img/vectorbuku.png" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
  </section>
    <!--kedua-->
    <section id="layanan">
      <div class="container" id="layanan">
        <div class="row mt-5">
          <div class="col-md-4 text-center">
            <div class="card-layanan">
              <div class="circle-icon position-relative mx-auto">
                <img src="img/card7.png" alt="" class=" top-50 start-50 translate-middle"> 
              </div>
              <h3 href="menu"  class="mt-4">Student book</h3>
              <p class="mt-3">Lots of student books for each major.</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="card-layanan">
              <div class="circle-icon position-relative mx-auto">
                <img src="img/card5.png" alt="" class="top-50 start-50 translate-middle">
              </div>
              <h3 class="mt-4">Science book</h3>
              <p class="mt-3">There are many science books here.</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="card-layanan">
              <div class="circle-icon position-relative mx-auto">
                <img src="img/card4.png" alt="" class=" top-50 start-50 translate-middle">
              </div>
              <h3 class="mt-4">Storybook</h3>
              <p class="mt-3">Popular story books are here.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

      <!--ketiga-->
      <section>
        <div class="container" id="ketiga">
          <div class="row">
            <div class="col">
              <h3>ini ketiga</h3>
            </div>
          </div>
        </div>
      </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>