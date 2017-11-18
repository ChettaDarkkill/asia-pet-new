<?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            รายละเอียดการนัดหมาย <small><?php echo isset($txtAlert) ? "<span style = 'color:red'>" .$txtAlert."</span>" : ""; ?></small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <?php if(isset($flag) && $flag == 2) { ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <span><strong>เหตุผลที่ยกเลิก: <?php echo $data[0]['reason']; ?></strong></span>
                </div>
                <?php }?>
                <div class="container">
                  <div class="row">
                        <!-- panel preview -->
                        <div class="col-sm-5">
                            <h4>ข้อมูลสมาชิก:</h4>
                            <div class="panel panel-default">
                                <div class="panel-body form-horizontal payment-form">
                                    <div class="form-group">
                                        <label for="concept" class="col-sm-3 control-label">ชื่อ-นามสกุล</label>
                                        <div class="col-sm-9">
                                            <input value = "<?php echo $data[0]['first_name']. " " . $data[0]['last_name']; ?>" readonly type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="col-sm-3 control-label">เบอร์ติดต่อ</label>
                                        <div class="col-sm-9">
                                            <input value = "<?php echo $data[0]['mobile']; ?>" readonly type="text" class="form-control">
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label for="amount" class="col-sm-3 control-label">ชื่อผู้ใช้</label>
                                        <div class="col-sm-9">
                                            <input value = "<?php echo $data[0]['username']; ?>" readonly type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="col-sm-3 control-label">ที่อยู่</label>
                                        <div class="col-sm-9">
                                             <textarea readonly class="form-control" rows="3"><?php echo $data[0]['address']; ?></textarea>
                                        </div>
                                    </div>  
                                </div>
                            </div>            
                        </div> <!-- / panel preview -->
                        <div class="col-sm-5">
                            <h4>ข้อมูลการจอง:</h4>
                            <div class="panel panel-default">
                                <div class="panel-body form-horizontal payment-form">
                                    <div class="form-group">
                                        <label for="concept" class="col-sm-3 control-label">ชนิดของสัตว์</label>
                                        <div class="col-sm-9">
                                            <input value = "<?php echo $data[0]['appo_animal']; ?>" readonly type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="col-sm-3 control-label">วันที่ขอนัดหมาย</label>
                                        <div class="col-sm-9">
                                            <input value = "<?php echo $data[0]['appo_date']; ?>" readonly type="text" class="form-control">
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label for="amount" class="col-sm-3 control-label">เวลาขอนัดหมาย</label>
                                        <div class="col-sm-9">
                                            <input value = "<?php echo $data[0]['appo_time']; ?>" readonly type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="amount" class="col-sm-3 control-label">เรื่องที่นัดหมาย</label>
                                        <div class="col-sm-9">
                                            <input value = "<?php echo $data[0]['appo_name']; ?>" readonly type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="col-sm-3 control-label">รายละเอียดการนัดหมาย</label>
                                        <div class="col-sm-9">
                                             <textarea readonly class="form-control" rows="3"><?php echo $data[0]['appo_details']; ?></textarea>
                                        </div>
                                    </div>  
                                </div>
                            </div>            
                        </div> <!-- / panel preview -->
                        <a href="<?php echo $a.'index.php/Admin/Admin/editAppo'; ?>" class="btn btn-sm btn-warning">ย้อนกลับ</a>
                        <?php if(!isset($flag)){ ?>
                            <a href = "<?php echo $a.'index.php/Admin/Appointment/approveAppo/'.$data[0]['id']; ?>" class="btn btn-sm btn-success" onclick="return confirm('คุณต้องการอนุมัติจริงหรือไม่');">อนุมัติ</a>
                        <?php } ?>
                        
                  </div>
                </div>
           </div>    
         </div>
            </div>
            <!-- /.container-fluid -->
        </div>
