

                     
                     

                     <?php
                     if ($_SESSION['level']=='1'){
                        ?>
                       
                    <li>
                         <a href="?"><i class="fa fa-dashboard fa-fw"></i> Panel</a>
                     </li>
                    
                    <li>
                                <a href="#"><i class="fa fa-link"></i> Links<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?get=old_link"><i class="fa fa-location-arrow"></i> Old</a>
                                    </li>
                                    <li>
                                        <a href="?get=link"><i class="fa fa-location-arrow"></i> View</a>
                                    </li>
                                    <li>
                                        <a href="?get=add_link"><i class="fa fa-plus"></i> Add</a>
                                    </li>
                                    <li>
                                        <a href="?get=manage_link"><i class="fa fa-edit"></i> Manage</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                    </li>
                    <li>
                                <a href="#"><i class="fa fa-tag"></i> Category<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?get=category"><i class="fa fa-file-text"></i> Category</a>
                                    </li>
                                    <li>
                                        <a href="?get=add_category"><i class="fa fa-plus"></i> Add</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-folder"></i> Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?get=page"><i class="fa fa-location-arrow"></i> View</a>
                                    </li>
                                    <li>
                                        <a href="?get=add_page"><i class="fa fa-plus"></i> Add</a>
                                    </li>
                                    <li>
                                        <a href="?get=manage_page"><i class="fa fa-edit"></i> Manage</a>
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

                     #Administrator
                     elseif ($_SESSION['level']=='administrator'){
                        ?>
                       
                    <li>
                         <a href="?get=home"><i class="fa fa-dashboard fa-fw"></i> Panel</a>
                     </li>
                    
                    <li>
                                <a href="#"><i class="fa fa-link"></i> Links<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?get=old_link"><i class="fa fa-location-arrow"></i> Old</a>
                                    </li>
                                    <li>
                                        <a href="?get=link"><i class="fa fa-location-arrow"></i> View</a>
                                    </li>
                                    <li>
                                        <a href="?get=add_link"><i class="fa fa-plus"></i> Add</a>
                                    </li>
                                    <li>
                                        <a href="?get=manage_link"><i class="fa fa-edit"></i> Manage</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                    </li>
                    <li>
                                <a href="#"><i class="fa fa-tag"></i> Category<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?get=category"><i class="fa fa-file-text"></i> Category</a>
                                    </li>
                                    <li>
                                        <a href="?get=add_category"><i class="fa fa-plus"></i> Add</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-folder"></i> Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?get=page"><i class="fa fa-location-arrow"></i> View</a>
                                    </li>
                                    <li>
                                        <a href="?get=add_page"><i class="fa fa-plus"></i> Add</a>
                                    </li>
                                    <li>
                                        <a href="?get=manage_page"><i class="fa fa-edit"></i> Manage</a>
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