<?php 
//$koneksi = mysqli_connect("localhost","afc87813_test","P@ssw0rd","afc87813_project") or die("koneksi gagal");
session_start();
include "../../config/connect.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=../../index.php?pesan=1'>";
}
else {

if ($_GET['act']=='add_barang')
	{
$kd_barang = $_POST['kd_barang'];
$nm_barang = $_POST['nm_barang'];
$satuan = $_POST['satuan'];
$kategori = $_POST['kategori'];
$ket = $_POST['ket'];


$cek_kd = "SELECT * FROM barang where kd_barang = '$kd_barang'";
$proses_cek_kd=mysqli_query($koneksi,$cek_kd);
	if (mysqli_num_rows($proses_cek_kd)>0){
	echo "<script>alert('Kode Barang sudah terdaftar');history.go(-1)</script>";
	//exit();		
	}

	else {
		$query = mysqli_query($koneksi,"INSERT INTO barang (kd_barang, nm_barang, satuan, kategori, ket) VALUES ('$kd_barang','$nm_barang','$satuan','$kategori','$ket')");
		($query);
		header("location:../../main.php?get=barang&pesan=1");
	}
}
elseif ($_GET['act']=='update_barang') {
	//if (isset($_POST['update'])) {
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$kd_barang = $_POST['kd_barang'];
		$nm_barang = $_POST['nm_barang'];
		$satuan = $_POST['satuan'];
		$kategori = $_POST['kategori'];
		$ket = $_POST['ket'];

		//$cek_kd = "SELECT * FROM barang where kd_barang = '$kd_barang'";
		//$proses_cek_kd=mysqli_query($koneksi,$cek_kd);

		$query = mysqli_query($koneksi, "UPDATE barang SET nm_barang = '$nm_barang', satuan = '$satuan',  kategori = '$kategori', ket = '$ket'  where kd_barang = '$kd_barang' ") or die('Ada kesalahan pada query: '.mysqli_error($koneksi));
		if ($query) {

			header("location: ../../main.php?get=kelola_barang&pesan=2");
		}

}
//}
}


elseif ($_GET['act']==='delete_barang') {
	if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang='$id'") or die('Ada kesalahan pada query: '.mysqli_error($mysqli));
    }
    if ($query){
        header("location: ../../main.php?get=kelola_barang&pesan=3");
    }
	# code...
}

}

?>