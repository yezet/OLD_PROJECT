<?php
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
  echo "<meta http-equiv='refresh' content='0; url=../../index.php?pesan=1'>";
}
else{
if($_SESSION['level']=='1'){
    include"mod/beranda/admin.php";
}
elseif($_SESSION['level']=='2'){
    include"mod/beranda/user.php";
}
else{
    include"mod/icon.php";
}
}
?>