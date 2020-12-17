

    <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <!--<li class="sidebar-search">-->
                        <!--<div class="input-group custom-search-form">-->
                            <!--<img src="img/logo.png" height="100%" width="100%">-->
                           <!-- <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>-->
                        <!--</div>-->
                    </li>

                     <li>
                         <!--<a href="?menu=beranda" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>-->
                     </li>
                     
                     <li>
                         <div style="text-align: center; margin: 5px;"><img src="img/logo.png" width="40%"><p class="fa fa-gear"> PROJECT X</p> </div>
                     </li> 

                     <?php
                     if ($_SESSION['level']=='1') {
                        ?>
                       
                    <li>
                         <a href="?get=beranda"><i class="fa fa-dashboard fa-fw"></i> Panel</a>
                     </li>
                    
                    <li>
                                <a href="#"><i class="fa fa-folder"></i> Barang<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?get=barang"><i class="fa fa-file-text"></i> Data Barang</a>
                                    </li>
                                    <li>
                                        <a href="?get=add_barang"><i class="fa fa-plus"></i> Tambah</a>
                                    </li>
                                    <li>
                                        <a href="?get=kelola_barang"><i class="fa fa-edit"></i> Kelola</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                    </li>
                    <li>
                                <a href="#"><i class="fa fa-tag"></i> Kategori<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?get=kategori"><i class="fa fa-file-text"></i> Kategori</a>
                                    </li>
                                    <li>
                                        <a href="?get=add_kategori"><i class="fa fa-plus"></i> Tambah</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-truck"></i> Supplier<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?get=supplier"><i class="fa fa-user"></i> Data Supplier</a>
                                    </li>
                                    <li>
                                        <a href="?get=add_supplier"><i class="fa fa-plus"></i> Tambah</a>
                                    </li>
                                    
                                    <li>
                                        <a href="?get=kelola_supplier"><i class="fa fa-edit"></i> Kelola</a>
                                    </li>

                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                    
                    <li>
                                <a href="#"><i class="fa fa-users"></i> Pengguna<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?get=user"><i class="fa fa-user"></i> Data Pengguna</a>
                                    </li>
                                    <li>
                                        <a href="?get=add_user"><i class="fa fa-plus"></i> Tambah User</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            

                            <?php
                     }


                     
                 elseif ($_SESSION['level']=='2'){
                     ?>
                     <li>
                        <a href="?get=supplier"><i class="fa fa-database fa-fw"></i> Data Supplier</a>
                        
                    </li>

                    <li>
                        <a href="?get=form_supplier" ><i class="fa fa-table fa-fw"></i> Form</a>
                    </li>
                    <?php
                 }

             elseif ($_SESSION['level']=="3"){
                 ?>
                 <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="https://ps.ymh.web.id:8441" class="fa fa-gear" target="_blank"> Panels</a>
                                    </li>
                                    <li>
                                        <a href="https://ps.ymh.web.id:8443" class="fa fa-wifi" target="_blank"> Wifi</a>
                                    </li>
                                    <li>
                                        <a href="http://ps.ymh.web.id:8444/_DIR/" class="fa fa-lock" target="_blank"> Lock</a>
                                    </li>
                                    <li>
                                        <a href="http://ps.ymh.web.id:8444/drive" class="fa fa-cloud" target="_blank"> Cloud Drive</a>
                                    </li>
                                    <li>
                                        <a href="icons.html" class="fa fa-user"> Icons</a>
                                    </li>
                                    <li>
                                        <a href="grid.html" class="fa fa-users"> Grid</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <?php
             }

             ?>
                </ul>

            </div>
        </div>
