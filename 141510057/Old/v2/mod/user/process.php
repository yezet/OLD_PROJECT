<?php 
//$koneksi = mysqli_connect("localhost","afc87813_test","P@ssw0rd","afc87813_project") or die("koneksi gagal");
session_start();
include "../../config/connect.php";

if ($_GET['act']=='add')
	{
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$level = $_POST['level'];
$bagian = $_POST['bagian'];


$cek_username = "SELECT * FROM user where username = '$username'";
$proses_cek_username=mysqli_query($koneksi,$cek_username);
	if (mysqli_num_rows($proses_cek_username)>0){
	echo "<script>alert('Username sudah terdaftar');history.go(-1)</script>";
	//exit();		
	}

	else {
		$query = mysqli_query($koneksi,"INSERT INTO user (username, password, nama, level, bagian) VALUES ('$username','$password','$nama','$level','$bagian')");
		($query);
		header("location:../../index.php?p=tuser&view");
	}
}


elseif ($_GET['act']=='update') {

	if (isset($_POST['id_user'])) {
		$id = $_POST['id_user'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nama = $_POST['nama'];
		$level = $_POST['level'];
		$bagian = $_POST['bagian'];


		$query = mysqli_query($koneksi, "UPDATE user SET password = '$password', nama = '$nama',  level = '$level' , bagian = '$bagian' where username = '$username' ") or die('Ada kesalahan pada query: '.mysqli_error($koneksi));
}
		if ($query) {

			header("location: ../../index.php?p=tuser&view");
		}
	}

elseif ($_GET['act']=='update_profile') {

	if (isset($_POST['id_user'])) {
		$id = $_POST['id_user'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nama = $_POST['nama'];
		$level = $_POST['level'];
		$bagian = $_POST['bagian'];


		$query = mysqli_query($koneksi, "UPDATE user SET password = '$password', nama = '$nama', bagian = '$bagian' where username = '$username' ") or die('Ada kesalahan pada query: '.mysqli_error($koneksi));
}
		if ($query) {

			header("location: ../../index.php?p=profile&view");
		}
	}


elseif ($_GET['act']==='delete') {
	if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id'") or die('Error: '.mysqli_error($mysqli));
    }
    if ($query){
        header("location: ../../index.php?p=tuser&view");
    }
	# code...
}

?>