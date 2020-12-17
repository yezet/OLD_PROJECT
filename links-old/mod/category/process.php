<?php 
//$koneksi = mysqli_connect("localhost","afc87813_test","P@ssw0rd","afc87813_project") or die("koneksi gagal");
session_start();
include "../../config/connect.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=../../index.php?pesan=1'>";
}
else {

if ($_GET['act']=='add_category')
	{
$cat_id = $_POST['cat_id'];
$cat = $_POST['cat'];
$note = $_POST['note'];


$cek_kd = "SELECT * FROM category where cat_id = '$cat_id'";
$proses_cek_kd=mysqli_query($koneksi,$cek_kd);
	if (mysqli_num_rows($proses_cek_kd)>0){
	echo "<script>alert('Kode category sudah terdaftar');history.go(-1)</script>";
	//exit();		
	}

	else {
		$query = mysqli_query($koneksi,"INSERT INTO category (cat_id, cat, note) VALUES ('$cat_id','$cat','$note')");
		($query);
		header("location:../../main.php?get=category&pesan=1");
	}
}


elseif ($_GET['act']=='update_category') {

	if (isset($_POST['cat_id'])) {
		$cat_id = $_POST['cat_id'];
		$cat = $_POST['cat'];
		$note = $_POST['note'];


		$query = mysqli_query($koneksi, "UPDATE category SET cat = '$cat', note = '$note' where cat_id = '$cat_id' ") or die('Ada kesalahan pada query: '.mysqli_error($koneksi));
}
		if ($query) {

			header("location: ../../main.php?get=category&pesan=2");
		}
	}


elseif ($_GET['act']==='delete_category') {
	if (isset($_GET['id'])){
        $cat_id = $_GET['id'];
        $query = mysqli_query($koneksi, "DELETE FROM category WHERE cat_id='$cat_id'") or die('Ada kesalahan pada query: '.mysqli_error($mysqli));
    }
    if ($query){
        header("location: ../../main.php?get=category&pesan=3");
    }
	# code...
}

}

?>