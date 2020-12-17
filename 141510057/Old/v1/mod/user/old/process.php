<?php 
//$koneksi = mysqli_connect("localhost","afc87813_test","P@ssw0rd","afc87813_project") or die("koneksi gagal");
session_start();
include "../../config/connect.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=../../index.php?pesan=1'>";
}
else {

if ($_GET['act']=='add_user')
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
		header("location:../../main.php?get=user&pesan=1");
	}
}


elseif ($_GET['act']=='update_user') {

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nama = $_POST['nama'];
		$level = $_POST['level'];
		$bagian = $_POST['bagian'];


		$query = mysqli_query($koneksi, "UPDATE user SET password = '$password', nama = '$nama',  level = '$level' , bagian = '$bagian' where username = '$username' ") or die('Ada kesalahan pada query: '.mysqli_error($koneksi));
}
		if ($query) {

			header("location: ../../main.php?get=user&pesan=2");
		}
	}













elseif ($_GET['act']==='delete_user') {
	if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = mysqli_query($koneksi, "DELETE FROM user WHERE id_user ='$id'") or die('Ada kesalahan pada query: '.mysqli_error($mysqli));
    }
    if ($query){
        header("location: ../../main.php?get=user&pesan=3");
    }
	# code...
}

}

?>