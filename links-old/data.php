<?php
if(empty($_GET)){
include "mod/home/view.php";
 

}
elseif($_GET['get']=='info'){
include "mod/info.php";
}
elseif($_GET['get']=='home'){
include "mod/home/view.php";
}
elseif($_GET['get']=='profile'){
include "mod/user/account.php";
}
elseif($_SESSION['level']=='1'){
include"mod/data-admin.php";
}
elseif($_SESSION['level']=='administrator'){
include"mod/administrator.php";
}
elseif($_SESSION['level']=='user'){
include"mod/user.php";
}

#Barang
//if($_GET['get']=='barang'){
//include "mod/barang/view.php";
//}
#Supplier



/*#User
elseif($_GET['get']=='user'){
include "mod/user/view.php";
}*/

//elseif($_GET['get']=='form_user'){
//include "mod/user/form.php";
//}


/*
#System Administrator
elseif($_GET['get']=='sysadmin'){
include "mod/beranda/sysadmin.php";
}

elseif($_GET['get']=='master_barang'){
include "mod/sa/view.php";
}

elseif($_GET['get']=='detail_master_barang'){
include "mod/sa/view.php";
}

elseif($_GET['get']=='form_master_barang'){
include "mod/sa/form.php";
}

elseif($_GET['get']=='edit_master_barang'){
include "mod/sa/edit_master.php";
}
*/




/*
elseif(isset($_GET['info'])){
	echo"
	<div clas = 'row'>
	<br><br><br>
	
	
	<center><i class='fa fa-info-circle fa-fw fa-3x'></i><center>
	<center><p><h3>Halaman tidak ditemukan</b></h3><center>
	
	<p><input class='btn' type=button value='Kembali ke beranda'  onclick=location.href='main.php?get=beranda'></a>
	
	</div";
  
}






#===============================================================





//echo "<script>alert('Login sebagai Administrator');window.location.href='index.php';</script>";
?>
*/
