<?php 
//$koneksi = mysqli_connect("localhost","afc87813_test","P@ssw0rd","afc87813_project") or die("koneksi gagal");
session_start();
include "../../config/connect.php";

# kategori
if ($_GET['act']=='add_cat')
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
		header("location:../../index.php?p=cat&view");
	}
}

elseif ($_GET['act']=='update_cat') {

	if (isset($_POST['kd_kategori'])) {
		$kd_kategori = $_POST['kd_kategori'];
		$kategori = $_POST['kategori'];
		$ket = $_POST['ket'];
		$query = mysqli_query($koneksi, "UPDATE kategori SET kategori = '$kategori', ket = '$ket' where kd_kategori = '$kd_kategori' ") or die('Ada kesalahan pada query: '.mysqli_error($koneksi));
}
		if ($query) {

			header("location: ../../index.php?p=cat&view");
		}
	}

elseif ($_GET['act']==='delete_cat') {
	if (isset($_GET['id'])){
        $kd_kategori = $_GET['id'];
        $query = mysqli_query($koneksi, "DELETE FROM kategori WHERE kd_kategori='$kd_kategori'") or die('Error: '.mysqli_error($mysqli));
    }
    if ($query){
        header("location: ../../index.php?p=cat&view");
    }
}	

# barang
if ($_GET['act']=='add')
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
		header("location:../../index.php?p=tbarang&view");
	}
}
elseif ($_GET['act']=='update') {

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$kd_barang = $_POST['kd_barang'];
		$nm_barang = $_POST['nm_barang'];
		$satuan = $_POST['satuan'];
		$kategori = $_POST['kategori'];
		$ket = $_POST['ket'];
		$query = mysqli_query($koneksi, "UPDATE barang SET nm_barang = '$nm_barang', satuan = '$satuan',  kategori = '$kategori', ket = '$ket'  where kd_barang = '$kd_barang' ") or die('Ada kesalahan pada query: '.mysqli_error($koneksi));
}
		if ($query) {

			header("location: ../../index.php?p=tbarang&view");
		}
	}

elseif ($_GET['act']==='delete') {
	if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang='$id'") or die('Error: '.mysqli_error($mysqli));
    }
    if ($query){
        header("location: ../../index.php?p=tbarang&view");
    }
}

?>