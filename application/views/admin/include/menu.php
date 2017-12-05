             <?php $a =  base_url(); ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse"> 
                <ul class="nav navbar-nav side-nav">
                    <li <?php echo $this->uri->segment(3) == "" ? "class = 'active'" : '';?>>
                        <a href="<?php echo $a.'index.php/Admin/Admin'; ?>"><i class="fa fa-fw fa-dashboard"></i> ภาพรวม</a> 
                    </li>
                    <li <?php echo $this->uri->segment(3) == "getService" || $this->uri->segment(3) == "searchAppo"  || $this->uri->segment(3) == "serviceCharge" || $this->uri->segment(3) == "optionCharge"  || $this->uri->segment(3) == "confirmCharge" || $this->uri->segment(3) == "comfirmChargeData" ? "class = 'active'" : '';?>>
                        <a href="<?php echo $a.'index.php/Service/Service/getService'; ?>"><i class="fa fa-fw fa-bar-chart-o"></i> การเข้าใช้บริการ</a>
                    </li>
                    <li <?php echo $this->uri->segment(3) == "getNews" || $this->uri->segment(3) == "addNews" ? "class = 'active'" : '';?>> 
                        <a href="<?php echo $a.'index.php/News/News/getNews'; ?>"><i class="fa fa-fw fa-desktop"></i> จัดการข่าวสาร</a>
                    </li>
                    <li <?php echo $this->uri->segment(3) == "getUser" || $this->uri->segment(3) == "editUser"   || $this->uri->segment(3) == "getListUserActivity"  || $this->uri->segment(3) == "editAdmin" || $this->uri->segment(3) == "addAdmin"? "class = 'active'" : '';?>>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-user"></i> จัดการผู้ใช้งาน <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo $a.'index.php/Admin/Admin/getUser'; ?>"><i class="fa fa-fw fa-user"></i> จัดการข้อมูลลูกค้า</a>
                            </li>
                            <li>
                                <a href="<?php echo $a.'index.php/Admin/Admin/getUser/admin'; ?>"><i class="fa fa-fw fa-user"></i> จัดการข้อมูลผู้ด​แลระบบ</a>
                            </li>
                        </ul>
                    </li> 
                    <li <?php echo $this->uri->segment(3) == "getAnimal" || $this->uri->segment(3) == "addAnimal" || $this->uri->segment(3) == "getAnimal" ? "class = 'active'" : '';?>>
                        <a href="<?php echo $a.'index.php/Admin/Admin/getAnimal'; ?>"><i class="fa fa-fw fa-file"></i> สัตว์เลี้ยง</a>
                    </li>
                    <li <?php echo $this->uri->segment(3) == "editAppo" || $this->uri->segment(3) == "detailAppo"  || $this->uri->segment(3) == "cancelAppo" ? "class = 'active'" : '';?>>
                        <a href="<?php echo $a.'index.php/Admin/Admin/editAppo'; ?>"><i class="fa fa-fw fa-table"></i> การนัดหมาย</a>
                    </li>
                    <li <?php echo $this->uri->segment(3) == "getProduct" || $this->uri->segment(3) == "addProduct" || $this->uri->segment(3) == "editProduct" ? "class = 'active'" : '';?>>
                        <a href="<?php echo $a.'index.php/Product/Product/getProduct'; ?>"><i class="fa fa-fw fa-file"></i> สินค้า</a>
                    </li>
                    <?php
                        $arr = array('reportAppoService','reportPayProduct','reportStoreProduct','reportService','reportPayment');
                    ?>
                    <li <?php echo in_array($this->uri->segment(3),$arr) ? "class = 'active'" : '' ?> >
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i> รายงาน <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li >
                                <a href="<?php echo $a.'index.php/Report/Report/reportAppoService'; ?>">รายงานการนัดหมายล่วงหน้า</a>
                            </li>
                            <li>
                                <a href="<?php echo $a.'index.php/Report/Report/reportPayProduct'; ?>">รายงานการจำหน่ายสินค้า</a>
                            </li>
                            <li>
                                <a href="<?php echo $a.'index.php/Report/Report/reportStoreProduct'; ?>">รายงานสินค้าคงเหลือ</a>
                            </li>
                            <li>
                                <a href="<?php echo $a.'index.php/Report/Report/reportService'; ?>">รายงานการรักษาและใช้บริการ</a>
                            </li>
<!--                             <li>
                                <a href="<?php echo $a.'index.php/Report/Report/reportPayment'; ?>">รายงานสรุปจำนวน รายรับ ของร้าน</a>
                            </li> -->
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <!-- /#page-wrapper -->