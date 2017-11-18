<?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            เพิ่มผู้ดูแลระบบ <small></small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="container">
                <div class="row">
                <form action = "<?php echo $a.'index.php/Admin/User/postAddAdmin/'; ?>" class="form-horizontal" method = "post" id = "registration" name = "registration">
                        <fieldset>
                        <!-- Form Name -->
                        <!-- <legend></legend> -->

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="nom">ชื่อ</label>  
                          <div class="col-md-6">
                          <input id="first_name" name = "first_name" type="text" placeholder="ชื่อ" class="form-control input-md" value = "">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="url">นามสกุล</label>  
                          <div class="col-md-6">
                          <input id="last_name" name = "last_name" type="text" placeholder="นามสกุล" class="form-control input-md" value = "">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="facebook">ชื่อผู้ใช้งาน</label>  
                          <div class="col-md-6">
                          <input id="username" name = "username" type="text" placeholder="ชื่อผู้ใช้งาน" class="form-control input-md" value = "">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="facebook">รหัสผ่าน</label>  
                          <div class="col-md-6">
                          <input id="password" name = "password" type="password" placeholder="รหัสผ่าน" class="form-control input-md" value = "">
                            
                          </div>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="info_candidature">ที่อยู่ </label>
                          <div class="col-md-6">                     
                            <textarea class="form-control" id="address" name = "address" placeholder="ที่อยู่"></textarea>
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="twitter">เบอร์โทรศัพท์</label>  
                          <div class="col-md-6">
                          <input id="mobile" name = "mobile" type="text" placeholder="เบอร์โทรศัพท์" class="form-control input-md" value = "">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="twitter"></label>  
                          <div class="col-md-6">
                          <button type="submit" id="saveRegis" class="btn btn-primary" data-action="save" role="button">บันทึก</button>
                          <a class="btn btn-warning" href='<?php echo $a; ?>index.php/Admin/Admin/getUser/admin'>ย้อนกลับ</a>
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
          password: "required",
          address : "required",
          mobile : "required"
        },
        
        // Specify the validation error messages
        messages: {
          first_name: "<span style = 'color:red'>กรุณากรอก ชื่อ</span>",
          last_name: "<span style = 'color:red'>กรุณากรอก นามสกุล</span>",
          username: "<span style = 'color:red'>กรุณากรอก ชื่อผู้ใช้งาน</span>",
          password: "<span style = 'color:red'>กรุณากรอก รหัสผ่าน</span>",
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
