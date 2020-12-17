<?php 
//$koneksi = mysqli_connect("localhost","afc87813_test","P@ssw0rd","afc87813_project") or die("koneksi gagal");
session_start();
include "../../config/connect.php";

# barang
if ($_GET['act']=='add')
	{
$kd_supplier = $_POST['kd_supplier'];
$nm_supplier = $_POST['nm_supplier'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$kontak = $_POST['kontak'];
$ket = $_POST['ket'];
$cek_kd = "SELECT * FROM supplier where kd_supplier = '$kd_supplier'";
$proses_cek_kd=mysqli_query($koneksi,$cek_kd);
	if (mysqli_num_rows($proses_cek_kd)>0){
	echo "<script>alert('Kode Supplier sudah terdaftar');history.go(-1)</script>";
	//exit();		
	}
	else {
		$query = mysqli_query($koneksi,"INSERT INTO supplier (kd_supplier, nm_supplier, alamat, telp, kontak, ket) VALUES ('$kd_supplier', '$nm_supplier','$alamat','$telp','$kontak','$ket')");
		($query);
		header("location:../../index.php?p=tsupplier&view");
	}
}
elseif ($_GET['act']=='update') {

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$kd_supplier = $_POST['kd_supplier'];
		$nm_supplier = $_POST['nm_supplier'];
		$alamat = $_POST['alamat'];
		$telp = $_POST['telp'];
		$kontak = $_POST['kontak'];
		$ket = $_POST['ket'];
		$query = mysqli_query($koneksi, "UPDATE supplier SET nm_supplier = '$nm_supplier', alamat = '$alamat', telp = '$telp',  kontak = '$kontak' , ket= '$ket' where kd_supplier = '$kd_supplier' ") or die('Ada kesalahan pada query: '.mysqli_error($koneksi));
}
		if ($query) {

			header("location: ../../index.php?p=tsupplier&view");
		}
	}

elseif ($_GET['act']==='delete') {
	if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = mysqli_query($koneksi, "DELETE FROM supplier WHERE id_supplier='$id'") or die('Ada kesalahan pada query: '.mysqli_error($mysqli));
    }
    if ($query){
        header("location: ../../index.php?p=tsupplier&view");
    }
}

?>