<?php 
//$koneksi = mysqli_connect("localhost","afc87813_test","P@ssw0rd","afc87813_project") or die("koneksi gagal");
session_start();
include "../../config/connect.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=../../index.php?pesan=1'>";
}
else {

if ($_GET['act']=='add_supplier')
	{
$kd_supplier = $_POST['kd_supplier'];
$nm_supplier = $_POST['nm_supplier'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$kontak = $_POST['kontak'];
$ket = $_POST['ket'];


$cek_supplier = "SELECT * FROM supplier where kd_supplier = '$kd_supplier'";
$proses_cek_supplier=mysqli_query($koneksi,$cek_supplier);
	if (mysqli_num_rows($proses_cek_supplier)>0){
	echo "<script>alert('Kode Suplier sudah terdaftar');history.go(-1)</script>";
	//exit();		
	}

	else {
		$query = mysqli_query($koneksi,"INSERT INTO supplier (kd_supplier, nm_supplier, alamat, telp, kontak, ket) VALUES ('$kd_supplier', '$nm_supplier','$alamat','$telp','$kontak','$ket')");
		($query);
		header("location:../../main.php?get=supplier&pesan=1");
	}
}


elseif ($_GET['act']=='update_supplier') {

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

			header("location: ../../main.php?get=supplier&pesan=2");
		}
	}













elseif ($_GET['act']==='delete_supplier') {
	if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = mysqli_query($koneksi, "DELETE FROM supplier WHERE id_supplier='$id'") or die('Ada kesalahan pada query: '.mysqli_error($mysqli));
    }
    if ($query){
        header("location: ../../main.php?get=supplier&pesan=3");
    }
	# code...
}

}

?>