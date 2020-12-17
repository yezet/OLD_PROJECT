<?php
if ($_SESSION['level']=='2'){

	
}
//if($_GET['get']=='info'){
//include "mod/info.php";
//}
if($_GET['get']=='profile'){
include "mod/profile.php";
}
#elseif($_GET['get']=='beranda'){
#include "mod/beranda/index.php";
#}
elseif($_GET['get']=='supplier'){
include "mod/supplier/view.php";
}

elseif($_GET['get']=='form_supplier'){
include "mod/supplier/form.php";
}
else{
	echo "<script language='javascript' type='text/javascript'>
  alert('Halaman tidak ditemukan');
  </script>
  <meta http-equiv='refresh' content='0; url=?get=beranda'>";
}
