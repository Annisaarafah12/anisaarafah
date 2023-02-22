<?php 
include "boot.php";
?>
<link rel="stylesheet" href="style.css">
<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-transparan position-absolute w-100 fixed-top">
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
               <a class="nav-link" href="contact"  style="font-size: 20px;">Contact</a>
            </div>
          </div>
        </div>
      </nav>

       <!--pertama-->
      <section id="pertama">
       <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Bookstore</h1>
                <p span class="text">Reading will help you find 
                  yourself.</p>
            </div>
            <div class="col-6">
            <img src="assets/vector1" class="img-fluid" alt="...">
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
                <img src="assets/card1" alt="" class=" top-50 start-50 translate-middle"> 
              </div>
              <h3 href="menu"  class="mt-4">Buku Pilihan</h3>
              <p class="mt-3">Ayo budayakan membaca.</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="card-layanan">
              <div class="circle-icon position-relative mx-auto">
                <img src="assets/card2" alt="" class="top-50 start-50 translate-middle">
              </div>
              <h3 class="mt-4">Stationery</h3>
              <p class="mt-3">Semua alat tulis ada disini.</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="card-layanan">
              <div class="circle-icon position-relative mx-auto">
                <img src="assets/card3" alt="" class=" top-50 start-50 translate-middle">
              </div>
              <h3 class="mt-4">For Children</h3>
              <p class="mt-3">Untuk kreatifitas anak.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>