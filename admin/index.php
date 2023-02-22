<?php
include "../boot.php";
include "../koneksi.php";
session_start();

if ($_SESSION["role"]== "") {
    header("location:../index.php");
}

if ($_SESSION['role'] == "petugas") {
    header("location:../petugas/index.php");
}
echo $_SESSION['role'];
?>
<link rel="stylesheet" href="style.css">
<section id="sidebar">
        <a href="#" class="brand mt-2">
            <img class="img-fluid rounded-circle " src="../img/logo.jpg" alt="" width="50px" height="50px">
            <p>SMKN 1 RONGGA</p>
        </a>
        <ul class="side-menu">
            <li>
                <a href="../admin/index.php" class="active"><i class='bx bxs-dashboard fs-3'></i><span class="fs-6">Dashboard</span></a>
            </li>
            <li>
                <a href="absen.php"><i class='bx bxs-book fs-3'></i><span class="fs-6">peminjaman</span></a>
            </li>
            <li>
                <a href="laporan.php"><i class='bx bxs-edit-alt fs-3'></i><span class="fs-6">Laporan</span></a>
            </li>
            <li>
                <a href="../logout.php"><i class='bx bx-log-out fs-3 py-5'></i><span class="fs-6">Log-out</span></a>
            </li>
        </ul><br>

        <a href="../logout.php"></a>
    </section>
<section id="data-siswa">
<div class="table-data"> 


<h2>Data siswa RPL III</h2>

<?php print_r($_SESSION) ; ?>
<a href="tambah_data.php"><button type="button" class="btn btn-success">+Tambah</button></a>

<table class="table table-light table-striped">
    <tr>
        <td>NIS</td>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Tanggal Lahir</td>
        <td>Action</td>
    </tr>
    <?php
    $query = "SELECT * FROM siswa_rpl3";
    $select = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_array($select)){
    ?>
        <tr>
            <td><?php echo $data["nis"] ?></td>
            <td><?php echo $data["nama"] ?></td>
            <td><?php echo $data["jenis_kelamin"] ?></td>
            <td><?php echo $data["tanggal_lahir"] ?></td>
            <td><a href="delete.php?nis=<?php echo $data['nis']?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
            <td><a href="edit.php?nis=<?php echo $data['nis']?>"><button type="button" class="btn btn-warning">Edit</button></a></td>

        </tr>
    <?php
    }
    ?>
    <?php 
			if(isset($_GET['admin'])){
				$page = $_GET['admin'];
		 
				switch ($page) {
					case 'tambah_data':
						include "tambah_data.php";
						break;
					case 'delete':
						include "delete.php";
						break;
					case 'update':
						include "edit.php";
						break;
				}
			}


	 ?>
</table>
</div>
</section>