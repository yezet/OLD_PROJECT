<?php 
//$koneksi = mysqli_connect("localhost","afc87813_test","P@ssw0rd","afc87813_project") or die("koneksi gagal");
session_start();
include "../../config/connect.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=../../index.php?pesan=1'>";
}
else {

if ($_GET['act']=='add_kategori')
	{
$kd_kategori = $_POST['kd_kategori'];
$kategori = $_POST['kategori'];
$ket = $_POST['ket'];



$cek_kd = "SELECT * FROM kategori where kd_kategori = '$kd_kategori'";
$proses_cek_kd=mysqli_query($koneksi,$cek_kd);
	if (mysqli_num_rows($proses_cek_kd)>0){
	echo "<script>alert('Kode kategori sudah terdaftar');history.go(-1)</script>";
	//exit();		
	}

	else {
		$query = mysqli_query($koneksi,"INSERT INTO kategori (kd_kategori, kategori, ket) VALUES ('$kd_kategori','$kategori','$ket')");
		($query);
		header("location:../../main.php?get=kategori&pesan=1");
	}
}


elseif ($_GET['act']=='update_kategori') {

	if (isset($_POST['kd_kategori'])) {
		$kd_kategori = $_POST['kd_kategori'];
		$kategori = $_POST['kategori'];
		$ket = $_POST['ket'];


		$query = mysqli_query($koneksi, "UPDATE kategori SET kategori = '$kategori', ket = '$ket' where kd_kategori = '$kd_kategori' ") or die('Ada kesalahan pada query: '.mysqli_error($koneksi));
}
		if ($query) {

			header("location: ../../main.php?get=kategori&pesan=2");
		}
	}













elseif ($_GET['act']==='delete_kategori') {
	if (isset($_GET['kd'])){
        $kd_kategori = $_GET['kd'];
        $query = mysqli_query($koneksi, "DELETE FROM kategori WHERE kd_kategori='$kd_kategori'") or die('Ada kesalahan pada query: '.mysqli_error($mysqli));
    }
    if ($query){
        header("location: ../../main.php?get=kategori&pesan=3");
    }
	# code...
}

}

?>