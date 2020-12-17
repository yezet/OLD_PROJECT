<?php
//if($_GET['get']=='info'){
//include "mod/info.php";
//}

#elseif($_GET['get']=='beranda'){
#include "mod/beranda/index.php";
#}
#Barang
if($_GET['get']=='barang'){
include "mod/barang/view.php";
}
elseif($_GET['get']=='add_barang'){
include "mod/barang/form.php";
}
elseif($_GET['get']=='edit_barang'){
include "mod/barang/form.php";
}
elseif($_GET['get']=='kelola_barang'){
include "mod/barang/view.php";
}
#Supplier
elseif($_GET['get']=='supplier'){
include "mod/supplier/view.php";
}
elseif($_GET['get']=='add_supplier'){
include "mod/supplier/form.php";
}
elseif($_GET['get']=='detail_supplier'){
include "mod/supplier/view.php";
}
elseif($_GET['get']=='kelola_supplier'){
include "mod/supplier/view.php";
}
elseif($_GET['get']=='edit_supplier'){
include "mod/supplier/form.php";
}


#Kategori
elseif($_GET['get']=='kategori'){
include "mod/kategori/view.php";
}
elseif($_GET['get']=='add_kategori'){
include "mod/kategori/form.php";
}
elseif($_GET['get']=='edit_kategori'){
include "mod/kategori/form.php";
}
#User
elseif($_GET['get']=='user'){
include "mod/user/view.php";
}
/*elseif($_GET['get']=='supplier'){
include "mod/supplier/view.php";
}*/
elseif($_GET['get']=='add_user'){
include "mod/user/form.php";
}
elseif($_GET['get']=='edit_user'){
include "mod/user/form.php";
}
else{
	echo "<script language='javascript' type='text/javascript'>
  alert('Halaman tidak ditemukan');
  </script>
  <meta http-equiv='refresh' content='0; url=?get=beranda'>";
}
?>