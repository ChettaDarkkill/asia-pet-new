<?php $a =  base_url(); ?>
<?php
  $listUser = $data[0];
?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <?php if($role == 'admin') { ?>
                        <h1 class="page-header">
                            แก้ไขข้อมูลผู้ดูแลระบบ<small></small>
                        </h1>
                        <?php } else { ?>
                        <h1 class="page-header">
                            แก้ไขข้อมูลลูกค้า  <small></small>
                        </h1>
                        <?php } ?>
                    </div>
                </div>
                <!-- /.row -->
                <div class="container">
                <div class="row">
                     <div class="col-md-9"> 
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">ข้อมูลส่วนต้ว</a></li>
                          <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">แก้ไขรหัสผ่าน</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div class="tab-pane fade active in" id="home"><br/>
                      <?php if($role == 'admin') { ?>    
                         <form action = "<?php echo $a.'index.php/Admin/User/postEditUser/admin'; ?>" class="form-horizontal" method = "post" id = "registration" name = "registration">
                      <?php } else { ?>  
                         <form action = "<?php echo $a.'index.php/Admin/User/postEditUser/'; ?>" class="form-horizontal" method = "post" id = "registration" name = "registration">
                       <?php } ?>
                     
                        <input id="id_hide" name = "id_hide" type="hidden" value = "<?php echo $listUser['id']; ?>">
                        <fieldset>
                        <!-- Form Name -->
                        <!-- <legend></legend> -->

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="nom">ชื่อ</label>  
                          <div class="col-md-6">
                          <input id="first_name" name = "first_name" type="text" placeholder="ชื่อ" class="form-control input-md" value = "<?php echo $listUser['first_name']; ?>">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="url">นามสกุล</label>  
                          <div class="col-md-6">
                          <input id="last_name" name = "last_name" type="text" placeholder="นามสกุล" class="form-control input-md" value = "<?php echo $listUser['last_name']; ?>">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="facebook">ชื่อผู้ใช้งาน</label>  
                          <div class="col-md-6">
                          <input id="username" name = "username" type="text" placeholder="ชื่อผู้ใช้งาน" class="form-control input-md" value = "<?php echo $listUser['username']; ?>">
                            
                          </div>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="info_candidature">ที่อยู่ </label>
                          <div class="col-md-6">                     
                            <textarea class="form-control" id="address" name = "address" placeholder="ที่อยู่"><?php echo $listUser['address']; ?></textarea>
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="twitter">เบอร์โทรศัพท์</label>  
                          <div class="col-md-6">
                          <input id="mobile" name = "mobile" type="text" placeholder="เบอร์โทรศัพท์" class="form-control input-md" value = "<?php echo $listUser['mobile']; ?>">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="twitter"></label>  
                          <div class="col-md-6">
                          <button type="submit" id="saveRegis" class="btn btn-primary" data-action="save" role="button">บันทึก</button>

                          <?php if($role == "admin") { ?>
                            <a class="btn btn-warning" href='<?php echo $a; ?>index.php/Admin/Admin/getUser/admin'>ยกเลิก</a>
                          <?php } else { ?>
                            <a class="btn btn-warning" href='<?php echo $a; ?>index.php/Admin/Admin/getUser'>ยกเลิก</a>
                          <?php } ?>

                          </div>
                        </div>
                        </fieldset>
                        </form>
                          </div>
                          <div class="tab-pane fade" id="profile"><br/>
                     <form action = "<?php echo $a.'index.php/Admin/User/postEditPassword/'; ?>" class="form-horizontal" id = "resetPassword" name = "resetPassword" method = "post">
                        <fieldset>
                        <input id="id_hide" name = "id_hide" type="hidden" value = "<?php echo $listUser['id']; ?>">
                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="twitter">รหัสผ่านใหม่</label>  
                          <div class="col-md-6">
                          <input id="old_password" name = "old_password" type="password" placeholder="รหัสผ่านใหม่" class="form-control input-md">
                            
                          </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="twitter">ยืนยันรหัสผ่านใหม่</label>  
                          <div class="col-md-6">
                          <input id="new_password" name = "new_password" type="password" placeholder="รหัสผ่านใหม่" class="form-control input-md">
                            
                          </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="twitter"></label>  
                          <div class="col-md-6">
                          <button type="submit" id="saveRegis" class="btn btn-primary" data-action="save" role="button">บันทึก</button>
                          <?php if($role == "admin") { ?>
                            <a class="btn btn-warning" href='<?php echo $a; ?>index.php/Admin/Admin/getUser/admin'>ยกเลิก</a>
                          <?php } else { ?>
                            <a class="btn btn-warning" href='<?php echo $a; ?>index.php/Admin/Admin/getUser'>ยกเลิก</a>
                          <?php } ?>
                          </div>
                        </div>
                        
                        </fieldset>
                        </form>
                          </div>
                        </div>
                     </div>    
                </div>
              </div>
           </div>    
         </div>
            </div>
            <!-- /.container-fluid -->
        </div>
  <!-- jQuery Form Validation code -->
  <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#registration").validate({
    
        // Specify the validation rules
        rules: {
          first_name: "required",
          last_name: "required",
          username: "required",
          address : "required",
          mobile : "required"
        },
        
        // Specify the validation error messages
        messages: {
          first_name: "<span style = 'color:red'>กรุณากรอก ชื่อ</span>",
          last_name: "<span style = 'color:red'>กรุณากรอก นามสกุล</span>",
          username: "<span style = 'color:red'>กรุณากรอก ชื่อผู้ใช้งาน</span>",
          address: "<span style = 'color:red'>กรุณากรอก ที่อยู่</span>",
          mobile: "<span style = 'color:red'>กรุณากรอก เบอร์โทรศัพท์</span>"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>

    <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#resetPassword").validate({
    
        // Specify the validation rules
        rules: {
          old_password: "required",
          new_password: "required"
        },
        
        // Specify the validation error messages
        messages: {
          old_password: "<span style = 'color:red'>กรุณากรอก รหัสผ่านใหม่</span>",
          new_password: "<span style = 'color:red'>กรุณากรอก รหัสยืนยันให้ถูกต้อง</span>"
        },
        
        submitHandler: function(form) {
            var old_password = document.getElementById('old_password').value;
            var new_password = document.getElementById('new_password').value;
            if(old_password != new_password){
              alert('รหัสผ่านไม่ตรงกัน')
            } else {
              form.submit();
            }
        }
    });

  });
  
  </script>
