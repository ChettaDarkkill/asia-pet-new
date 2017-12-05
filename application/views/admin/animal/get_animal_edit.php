<?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            เพิ่มชนิดสัตว์เลี้ยง<small></small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="container">
                <div class="row">
                <form action = "<?php echo $a.'index.php/Admin/Admin/postAddAnimal/'; ?>" class="form-horizontal" method = "post" id = "registration" name = "registration">
                        <fieldset>
                        <!-- Form Name -->
                        <!-- <legend></legend> -->

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="nom">ชนิดสัตว์เลี้ยง</label>  
                          <div class="col-md-6">
                          <input id="animal_name" name = "animal_name" type="text" placeholder="ชนิดสัตว์เลี้ยง" class="form-control input-md" value = "">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="url">อื่นๆ</label>  
                          <div class="col-md-6">
                          <input id="animal_detail" name = "animal_detail" type="text" placeholder="อื่นๆ" class="form-control input-md" value = "">
                            
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
          animal_name: "required"
        },
        
        // Specify the validation error messages
        messages: {
          animal_name: "<span style = 'color:red'>กรุณากรอก ชนิดสัตว์เลี้ยง</span>"
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
