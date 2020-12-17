<?php
//include 'connect.php';

require_once "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];

$periksa=mysqli_query($koneksi,"SELECT * FROM user WHERE username ='$username' AND password ='$password'") or die('Ada kesalahan '.mysqli_error($koneksi));
$rows=mysqli_num_rows($periksa);
//$row=mysqli_fetch_array($periksa);

if ($rows > 0){
  $data = mysqli_fetch_array($periksa);
	session_start();
  $_SESSION['username'] = $data['username'];
  $_SESSION['password']	= $data['password'];
  $_SESSION['level']  	= $data['level'];
  header('location: ../index.php');

}
/*
  if ($_SESSION['level']=='1'){
    header('location: ../index.php');
  }
  elseif ($_SESSION['level']=='2'){
    header('location: ../index.php');
  }
  elseif ($_SESSION['level']=='3'){
    header('location: ../index.php');
  }
  elseif ($_SESSION['level']=='4'){
    header('location: ../index.php');
  } */
  else{
header("location:../login.php?pesan=login_gagal");
}

  
 /* if($_SESSION['level']=='1'){
header('location:main.php?get=beranda');
}
else if($_SESSION['level']=='2'){
header('location:main.php?get=beranda');
}
else if($_SESSION['level']=='3'){
header('location:main.php?get=beranda');
  }
 else if($_SESSION['level']=='4'){
header('location:main.php?get=info');
  } 
}

*/
?>
