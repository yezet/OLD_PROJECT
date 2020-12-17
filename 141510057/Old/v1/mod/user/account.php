    <?php
require_once "config/connect.php";
$query = mysqli_query($koneksi, "SELECT * FROM user where username = '$_SESSION[username]'") or die ('Ada kesalahan '.mysqli_error($koneksi));
$data = mysqli_fetch_array($query);

if($_GET['get']=='profile'){
?>
<div class="row">
                   
                        <!--<div class="panel panel-default">-->
                            <!--<div class="panel-body">-->
                                <!--<div class="table-responsive">-->
                                    <div class="col-lg-12">
                                    <table class="table table-basic table-hover" >
                                        <!--<thead>--><h4 class="page-header"><i class="fa fa-user"></i> Data user</h4>
                                         <tr>
                                            <td>
                                                <div class="col-lg-6">
                                                    Username /  id
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['username']; ?>
                                                </div>
                                            </td>
                                         </tr>
                                         <tr>
                                            <td>
                                                <div class="col-lg-6">
                                                    Nama Lengkap
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['nama']; ?>
                                                </div>
                                            </td>
                                         </tr>
                                         <tr>
                                         <td>
                                                <div class="col-lg-6">
                                                    Hak Akses Sistem / Level
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['level']; ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                         <td>
                                                <div class="col-lg-6">
                                                    Bagian / Departemen
                                                </div>
                                                <div class="col-lg-6" style="background-color: ivory; font-style: italic;">
                                                    <?php echo $data['bagian']; ?>
                                                </div>
                                            </td>
                                        </tr>
                                     </table>
                                     <a href="?get=beranda"><button type="button" class="btn btn-default">Tutup</button></a>
                                 </div>
                                                
                </div>
            <?php
             } 
             ?>

           