


<h3 class="page-header"><i class="fa fa-plus-circle"></i> Tambah Pengguna</h3>
<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Form User
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <form role="form" method="post" action="mod/user/process.php?act=add_user">
                                        <div class="col-lg-6">    
                                            <div class="form-group">
                                                <label>Username</label>
                                                <!--<input class="form-control" name="id" type="hidden" placeholder="id" autofocus required>-->
                                                <input class="form-control" name="username" type="text" placeholder="username" autofocus required>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" name="password" type="password" placeholder="Password" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input class="form-control" name="nama" type="text" placeholder="nama" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label>Hak Akses</label>
                                                <select class="form-control" name="level" type="text" placeholder="Hak Akses" required autofocus>
                                                    <?php
                                                    $query = mysqli_query($koneksi, "SELECT username, kategori FROM kategori order by kd_kategori asc") or die('Kesalahan query : '.mysqli_error($koneksi));
                                                       while ($data = mysqli_fetch_assoc ($query)) {
                                                        echo "<option value=\"$data[kd_kategori]\"> $data[kd_kategori] | $data[kategori]</option>";
                                                       }
                                                     ?>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Bagian</label>
                                                <input class="form-control" name="bagian" type="text" placeholder="Bagian" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                
                                                <input type="submit" class="btn btn-outline btn-primary btn-block" value="Tambah">
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

