

<?php
session_start();
include "config/connect.php";

if ($_SESSION['username']=='admin'){
	$query = mysqli_query($koneksi, "UPDATE user SET password = 'P@ssw0rd' where username='admin' ") or die('Ada kesalahan pada query: '.mysqli_error($koneksi));
}
if ($query) {

			header("location: index.php?get=user&pesan=2");
			session_destroy();
		}
	else {
// hapus session
session_destroy();

// alihkan ke halaman login (index.php) dan berikan alert = 2
header('Location: index.php?pesan=2');
}
?>