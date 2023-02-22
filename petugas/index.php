<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
		<link rel="stylesheet" href="style.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
		<title>Document</title>
	</head>
	<body>
		<input type="checkbox" id="nav-toggle" />
		<div class="sidebar">
			<div class="sidebar-brand">
				<h2><i class="las la-book"><span style="color: #f3f5f9;">A-Perpus</span></i></h2>
			</div>
			<div class="sidebar-menu">
				<li class="item">
					<a href="index" class="menu-btn"> <i class="fas fa-desktop"></i><span style="color: #fafbff;"> Dashboard</span> </a>
				</li>
				<!-- home -->
				<li class="item" id="home">
					<a href="" class="menu-btn">
						<i class="las la-home"></i><span  style="color: #fafbff;">Data<i class="fas fa-chevron-down drop-down"></i></span>
					</a>
					<div class="sub-menu">
						<a href="data_siswa/index.php?halaman=data_siswa"><i class="fas fa-address-card"></i><span style="color: #394989;">Data siswa</span></a>
						<a href="fd"><i class="fas fa-address-card"></i><span style="color: #394989;">Data buku</span></a>
						<a href="fd"><i class="fas fa-address-card"></i><span style="color: #394989;">Data</span></a>
					</div>
				</li>
				<!-- customer -->
				<li class="item" id="customer">
					<a href="#customer" class="menu-btn">
						<i class="las la-users"></i><span style="color: #fafbff;">customer<i class="fas fa-chevron-down drop-down"></i></span>
					</a>
					<div class="sub-menu">
						<a href="costumers"><i class="fas fa-envelope"></i><span style="color: #fafbff;">New</span></a>
					</div>
				</li>
				<!--form-->
					<li class="item" id="form">
					<a href="#form" class="menu-btn">
				<i class="fa-solid fa-right-to-bracket"></i><span style="color: #fafbff;">form<i class="fas fa-chevron-down drop-down"></i></span>
					</a>
					<div class="sub-menu">
						<a href="form"><i class="fa-solid fa-hand-point-up"></i><span style="color: #fafbff;">Login</span></a>
					</div>
				</li>
				<!-- charts -->
				<li class="item" id="charts">
					<a href="#charts" class="menu-btn">
						<i class="las la-chart-pie"></i><span style="color: #fafbff;">crud<i class="fas fa-chevron-down drop-down"></i></span>
					</a>
					<div class="sub-menu">
						<a href="crud"><i class="las la-long-arrow-alt-down"></i><span style="color: #fafbff;">Edit</span></a>
					</div>
				</li>
			</div>
		</div>
		<div class="maint-content">
			<header>
				<h2>
					<label for="nav-toggle">
				    	<span class="las la-bars"></span>
					</label>
					<span style="color: #fafbff;"></span>
				</h2>
				<div class="search-wrapper">
					<span class="las la-search"></span>
					<input type="search" placeholder="search here" />
				</div>
				<div class="user-wrapper">
					<img src="assets/userme" width="40px" height="40px" alt="" />
					<div>
						<span style="color: #fafbff; font-size: 20px;">Anisa Arafah</span>
						<br><small>Super Admin</small>
					</div>
				</div>
			</header>
			<main>
				<div class="cards">
					<div class="card-single">
						<div>
							<h1>54</h1>
							<span>Customers</span>
						</div>
						<div>
							<span class="las la-users"></span>
						</div>
					</div>
					<div class="card-single">
						<div>
							<h1>79</h1>
							<span>Projects</span>
						</div>
						<div>
							<span class="las la-clipboard-list"></span>
						</div>
					</div>
					<div class="card-single">
						<div>
							<h1>124</h1>
							<span>Orders</span>
						</div>
						<div>
							<span class="las la-shopping-bag"></span>
						</div>
					</div>
					<div class="card-single">
						<div>
							<h1>$7k</h1>
							<span>Income</span>
						</div> 
						<div>
							<span class="lab la-google-wallet"></span>
						</div>
					</div>
				</div><br><br>
				<?php 
			if(isset($_GET['halaman'])){
				$page = $_GET['halaman'];
		 
				switch ($page) {
					case 'data_siswa':
						include "data.php";
						break;
					case 'beranda':
						include "co.php";
						break;
					case 'tutorial':
						include "halaman/tutorial.php";
						break;			
					default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
				}
			}else{
				include ".php";
			}
	 ?>	
			</main>
      </body>
 