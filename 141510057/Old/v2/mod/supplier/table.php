<?php
if ($_GET['p']=='tsupplier'){
    if (isset($_GET['view'])){
        ?>
        <div class="w3-center w3-margin-bottom w3-light-grey"><strong>Data Supplier</strong></div>
        <table id="example" class="w3-table display" style="width:100%">
            <!--<table id="example" class="display" style="width:100%">-->
        <thead>
            <tr>
                <th >#</th>
                <th>Kode Supplier</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
                <th>Telp / Hp</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM supplier order by kd_supplier")or die(mysql_error());
            $nomor = 1;
            while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td ><?php echo $nomor++; ?></td>
                <td><a href="?p=fsupplier&edit&id=<?php echo $data['id_supplier']; ?>"  title="Kelola data Supplier"><?php echo $data['kd_supplier']; ?></a></td>
                <td><?php echo $data['nm_supplier']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['telp']; ?></td>
            </tr>
            <?php } ?>  
        </tbody>
        </table>
        <?php
    }
}
?>
