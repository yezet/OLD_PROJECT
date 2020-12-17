<?php 
//$koneksi = mysqli_connect("localhost","afc87813_test","P@ssw0rd","afc87813_project") or die("koneksi gagal");
session_start();
include "../../config/connect.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=../../index.php?pesan=1'>";
}
else {

if ($_GET['act']=='add_link')
	{
$url = $_POST['url'];
$des = $_POST['des'];
$cat = $_POST['cat'];


$cek_url = "SELECT * FROM links where url = '$url'";
$proses_cek_url=mysqli_query($koneksi,$cek_url);
	if (mysqli_num_rows($proses_cek_url)>0){
	echo "<script>alert('Link sudah terdaftar');history.go(-1)</script>";
	//exit();		
	}

	else {
		$query = mysqli_query($koneksi,"INSERT INTO links (url, des, cat) VALUES ('$url','$des','$cat')");
		($query);
		header("location:../../main.php?get=link&pesan=1");
	}
}
elseif ($_GET['act']=='update_link') {
	//if (isset($_POST['update'])) {
	if (isset($_POST['id'])) {
		$url_id = $_POST['id'];
		$url = $_POST['url'];
		$des = $_POST['des'];
		$cat = $_POST['cat'];

		//$cek_kd = "SELECT * FROM barang where kd_barang = '$kd_barang'";
		//$proses_cek_kd=mysqli_query($koneksi,$cek_kd);

		$query = mysqli_query($koneksi, "UPDATE links SET des = '$des',  cat = '$cat'  where url = '$url' ") or die('Ada kesalahan pada query: '.mysqli_error($koneksi));
		if ($query) {

			header("location: ../../main.php?get=manage_link&pesan=2");
		}

}
//}
}


elseif ($_GET['act']==='delete_link') {
	if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = mysqli_query($koneksi, "DELETE FROM links WHERE url_id='$id'") or die('Ada kesalahan pada query: '.mysqli_error($mysqli));
    }
    if ($query){
        header("location: ../../main.php?get=link&pesan=3");
    }
	# code...
}

}

?>