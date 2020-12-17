<?php
//if($_GET['get']=='info'){
//include "mod/info.php";
//}

#elseif($_GET['get']=='beranda'){
#include "mod/beranda/index.php";
#}
#Links
if($_GET['get']=='link'){
include "mod/links/view.php";
}
elseif($_GET['get']=='add_link'){
include "mod/links/form.php";
}
elseif($_GET['get']=='manage_link'){
include "mod/links/view.php";
}
elseif($_GET['get']=='edit_link'){
include "mod/links/form.php";
}
elseif($_GET['get']=='old_link'){
include "mod/links/view.php";
}
#Kategori
elseif($_GET['get']=='category'){
include "mod/category/view.php";
}
elseif($_GET['get']=='add_category'){
include "mod/category/form.php";
}
elseif($_GET['get']=='manage_category'){
include "mod/category/view.php";
}
elseif($_GET['get']=='edit_category'){
include "mod/category/form.php";
}

#Page
elseif($_GET['get']=='page'){
include "mod/page/view.php";
}
elseif($_GET['get']=='add_page'){
include "mod/page/form.php";
}
elseif($_GET['get']=='manage_page'){
include "mod/page/view.php";
}
elseif($_GET['get']=='edit_page'){
include "mod/page/form.php";
}
#Supplier
/*
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
*/


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

else {
	echo "<script language='javascript' type='text/javascript'>
  alert('Page Not Found');
  </script>
  <meta http-equiv='refresh' content='0; url=?get=home'>";
  
}
?>