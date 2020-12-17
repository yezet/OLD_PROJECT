<h3 class="">Data user</h3>
<?php
if ($_GET['p']=='user'){
	if (isset($_GET['view'])){
		?>
		<table id="example" class="w3-table w3-hoverable w3-striped" style="width:100%">
            <!--<table id="example" class="display" style="width:100%">-->
	<thead>
            <tr>
                <th >#</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Hak Akses</th>
                <th>Bagian</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        	<?php
        	$query = mysqli_query($koneksi, "SELECT * FROM user order by level")or die(mysql_error());
        	$nomor = 1;
        	while($data = mysqli_fetch_array($query)){
        		?>
        	<tr>
                <td ><?php echo $nomor++; ?></td>
                <td><?php echo $data['username']; ?></td>
            	<td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['level']; ?></td>
            	<td><?php echo $data['bagian']; ?></td>
                <td>
                	<a href="?p=user&edit&id=<?php echo $data['id_user']; ?>" class="w3-button w3-small"> Ubah</a> <a href="mod/user/process.php?act=delete&id=<?php echo $data['id_user']; ?>" onclick="return confirm ('Hapus Data User <?php echo $data['username']; ?> ?')" class="w3-button w3-small">Hapus</a>
               </td>
            </tr>
            <?php } ?>	
        </tbody>
</table>
<?php
	}
}
?>