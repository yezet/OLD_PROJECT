<?php
//include 'connect.php';

require_once "connect.php";

/*
$dbhost = 'localhost'; 
$dbuser = 'root';
$dbpass = 'toor';
$dbname = 'edit';

$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');
*/
/*
$userid = $_POST['username'];
$password     = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$userid' AND password='$password'");
$row=mysqli_fetch_array($login);
if ($row['username'] == $userid AND $row['password'] == $password)
{
  session_start();
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  header('location:main.php?menu=beranda');
}
else
{
  echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
        Username atau Password Anda tidak benar.<br>";
    echo "<br>";
  echo "<input class='btn btn-blue' type=button value='ULANGI LAGI' onclick=location.href='index.php'></a></center>";

}
*/
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
  if (!empty($_SESSION['level'])){
    header('location:index.php');
  }
}
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
