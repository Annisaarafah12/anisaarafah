<?php 
include "header.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Bookstore</title>
  </head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Emilys+Candy&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Alkalami&display=swap");
* {
  padding: 0;
  margin: 0;
}
.nav {
  position: fixed;
}
.navbar .navbar-nav a {
  font-family: "Alkalami", serif;
}

/*pertama*/
#pertama {
  height: 10px 0s;
  width: 100%;
  background-color: #ccc9c9;
}
.container h1 {
  color: #000;
  font-family: Emilys Candy;
  font-size: 50px;
  margin-top: 25%;
  margin-left: 70px;
}
.container .text {
  font-family: "Alkalami", serif;
  font-size: 25px;
  margin-left: 70px;
}
.container img {
  position: relative;
}
.awal {
  position: absolute;
  width: 420px;
  height: 228px;
  left: 0px;
  top: 0px;
  filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
}
#layanan {
  padding: 10px 0;
  width: 100%;
  background-color: #ccc9c9;
}
h2 {
  font-size: 45px;
  color: #c47a26;
  font-family: "Emilys Candy", cursive;
}
.sub-title {
  font-size: 20px;
  color: black;
  font-family: "Alkalami", serif;
}
.card-layanan {
  width: 100%;
  height: 330px;
  border-radius: 10%;
  background-color: #fff;
  padding: 40px;
  box-shadow: 0 0 7px 3px rgba(0, 0, 0, 0.05);
  transition: all 0.3s ease-in;
}
.card-layanan .circle-icon img {
  width: 200px;
  height: 150px;
  position: relative;
}
.circle-icon {
  width: 200px;
  height: 150px;
  border-radius: 20%;
  transition: all 0.1s ease-in;
}
.card-layanan h3 {
  color: burlywood;
  font-size: 24px;
  transition: all 0.2s ease-in;
}
.card-layanan p {
  color: #000;
  font-size: 16px;
  transition: all 0.3s ease-in;
}
/*Hover*/
.card-layanan:hover {
  width: 100%;
  height: 330px;
  border-radius: 10%;
  background-color: #856e6e;
  padding: 40px;
  box-shadow: 0 0 7px 3px rgba(0, 0, 0, 0.05);
  transition: all 0.4s ease-in;
}
.card-layanan:hover .circle-icon {
  transition: all 0.4s ease-in;
}
.card-layanan:hover h3 {
  color: #fff;
  font-size: 24px;
  transition: all 0.4s ease-in;
}
.card-layanan:hover p {
  color: #fff;
  font-size: 14px;
  transition: all 0.4s ease-in;
}
  </style>
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
                <a href="login.php"><button type="button" class="btn btn-dark">Login</button></a>
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
              <h3  class="mt-4">Student book</h3>
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
    <?php 
include "footer.php";
?>
  </body>
</html>