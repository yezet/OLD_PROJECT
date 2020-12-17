<?php
if (empty($_GET['p'])){
	include 'mod/home.php';
}
elseif ($_GET['p']=='profile'){
	include 'mod/user/profile.php';
}
elseif ($_GET['p']=='barang'){
	include 'mod/barang/table.php';
}
elseif ($_SESSION['level']=='1'){
	if ($_GET['p']=='tuser'){
		include 'mod/user/table.php';
	}
	if ($_GET['p']=='fuser'){
		include 'mod/user/form.php';
	}
	if ($_GET['p']=='cat'){
		include 'mod/barang/cat.php';
	}
	if ($_GET['p']=='fbarang'){
		include 'mod/barang/form.php';
	}
	if ($_GET['p']=='tbarang'){
		include 'mod/barang/table.php';
	}
	if ($_GET['p']=='tsupplier'){
		include 'mod/supplier/table.php';
	}
	if ($_GET['p']=='fsupplier'){
		include 'mod/supplier/form.php';
	}
}
else {
	?>
	<div class="w3-container w3-padding-16 w3-card" >
	<div class="w3-center">
	<h2 class="w3-center">Page not found.</h2>
	</div>
	</div>
<?php
}
?>