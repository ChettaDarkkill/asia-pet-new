<?php $a =  base_url(); ?>
<?php
    $listUser = $data['listUser'][0];
?>
<div class="container">
    <div class="row">
        <?php
          $this->load->view('include/menu');
        ?>
         <div class="col-md-9">
            <div class="intro-text">
                <h1 style = "color:#373a47;" class="name">แก้ไขข้อมูลส่วนต้ว</h1>
            </div>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">ข้อมูลส่วนต้ว</a></li>
              <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">เปลี่ยนรหัสผ่าน</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home"><br/>
          <form class="form-horizontal" method = "post" id = "registration" name = "registration">
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
              <label class="col-md-3 control-label" for="twitter">เลขที่สมาชิก</label>  
              <div class="col-md-6">
              <input id="member_id" name = "member_id" type="text" placeholder="เลขที่สมาชิก" class="form-control input-md" value = "<?php echo $listUser['member_id']; ?>">
                
              </div>
            </div>
            <hr>
            <h3>รายละเอียดอื่นๆ</h3> 
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="twitter">ชื่อสัตว์</label>  
              <div class="col-md-6">
              <input id="animal_name" name = "animal_name" type="text" placeholder="ชื่อสัตว์" class="form-control input-md" value = "<?php echo $listUser['animal_name']; ?>">
                
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="twitter">วันเกิดสัตว์</label>  
              <div class="col-md-6">
                    <div class="input-group date form_date col-md-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="appo_date" data-link-format="yyyy-mm-dd">
                        <input id="appo_birth_date_show_animal" name="appo_birth_date_show_animal"  class="form-control" size="16" placeholder="วันเกิดสัตว์" type="text" value="<?php echo $listUser['appo_birth_date_show_animal']; ?>" readonly >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <input type="hidden" id="appo_birth_date_animal" name="appo_birth_date_animal" value="<?php echo $listUser['appo_birth_date_show_animal']; ?>" />
                
              </div>
            </div>
              <?php
                $animal = getAnimalData();
                $animalOwn = getUserData()['appo_animal'];
              ?>
             <div class="form-group">
              <label class="col-md-3 control-label" for="twitter">ชนิดสัตว์</label>  
              <div class="col-md-6">
                <select class="form-control" id="appo_animal" name="appo_animal">
                   <option value = "">กรุณาเลือก</option>
                   <?php
                    if(count( $animal) > 0 ) {
                      foreach ( $animal as $key => $value) {

                      if($value['animal_name'] == $animalOwn) {
                         $ck = 'selected';
                      } else {
                         $ck = '';
                      }
                   ?>
                   <option <?php echo $ck; ?> value = "<?php echo $value['animal_name']; ?>"><?php echo $value['animal_name']; ?></option>
                   <?php } } ?>
                </select>  
                
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="twitter">พันธุ์</label>  
              <div class="col-md-6">
              <input id="breed" name = "breed" type="text" placeholder="พันธุ์" class="form-control input-md" value = "<?php echo $listUser['breed']; ?>">
                
              </div>
            </div>
            <!-- Text input-->
            <?php 
                $sex = $listUser['gender'];
            ?>
            <div class="form-group">
              <label class="col-md-3 control-label" for="twitter">เพศ</label>  
              <div class="col-md-6">
                <div class="radio">
                  <label><input <?php echo $sex == 1 ? "checked" : "";  ?> type="radio" name="gender" id="gender" value="1">ตัวผู้</label>
                  <label><input <?php echo $sex == 0 ? "checked" : "";  ?>  type="radio" name="gender" id="gender" value="0">ตัวเมีย</label>
                </div>              
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="twitter">สี</label>  
              <div class="col-md-6">
              <input id="color" name = "color" type="text" placeholder="สี" class="form-control input-md" value = "<?php echo $listUser['color']; ?>">
                
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="twitter"></label>  
              <div class="col-md-6">
              <button type="submit" id="saveRegis" class="btn btn-primary" data-action="save" role="button">บันทึก</button>
              <a class="btn btn-warning" href='<?php echo $a; ?>index.php/Dashboard/Dashboard'>ยกเลิก</a>
              </div>
            </div>
            </fieldset>
            </form>
              </div>
              <div class="tab-pane fade" id="profile"><br/>
         <form class="form-horizontal" id = "resetPassword" name = "resetPassword" method = "post">
            <fieldset>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="twitter">รหัสผ่านเก่า</label>  
              <div class="col-md-6">
              <input id="old_password" name = "old_password" type="password" placeholder="รหัสผ่านเก่า" class="form-control input-md">
                
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="twitter">รหัสผ่านใหม่</label>  
              <div class="col-md-6">
              <input id="new_password" name = "new_password" type="password" placeholder="รหัสผ่านใหม่" class="form-control input-md">
                
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="twitter"></label>  
              <div class="col-md-6">
              <button type="submit" id="saveRegis" class="btn btn-primary" data-action="save" role="button">บันทึก</button>
              <a class="btn btn-warning" href='<?php echo $a; ?>index.php/Dashboard/Dashboard'>ยกเลิก</a>
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
<script>
      $('.form_date').datetimepicker({
        // language:  'th',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  // Wait for the DOM to be ready
  $(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='resetPassword']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        old_password: "required",
        new_password: "required"
      },
      // Specify validation error messages
      messages: {
        old_password: "<span style = 'color:red'>กรุณากรอกรหัสผ่านเก่า</span>",
        new_password: "<span style = 'color:red'>กรุณากรอกรหัสผ่านใหม่</span>"
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
          $('#closeLoginPanel').click();
          $('#clickToLoading').click();
          var old_password = $("#old_password").val();
          var new_password = $("#new_password").val();
          var url = "<?php echo $a.'index.php/Customer/CustomerInfo/editPassword'; ?>";
          $.post( url , {'old_password' : old_password, 'new_password' : new_password} , function( data ) {
            if(data == 200){
              document.getElementById("resetPassword").reset();
               $('#closeLoadingPanel').click();
               $('#imgShowMessage').attr("src", "<?php echo $a; ?>assets/img/success.svg");
               $('#messageModalLabel').text('บันทึกข้อมูลเรียบร้อยแล้ว');
               $('#clickToShowMessage').click();
            } else if(data == 400){
              document.getElementById("resetPassword").reset();
               $('#closeLoadingPanel').click();
               $('#imgShowMessage').attr("src", "<?php echo $a; ?>assets/img/danger.svg");
               $('#messageModalLabel').text('รหัสผ่านเก่าไม่ถูกต้องลองใหม่อีกครั้ง');
               $('#clickToShowMessage').click();
            } else {
                document.getElementById("resetPassword").reset();
               $('#closeLoadingPanel').click();
               $('#imgShowMessage').attr("src", "<?php echo $a; ?>assets/img/danger.svg");
               $('#messageModalLabel').text('เกิดข้อผิดพลาดลองใหม่อีกครั้ง');
               $('#clickToShowMessage').click();    
            }
          });
      }
    });
  });
</script>
<script>
  // Wait for the DOM to be ready
  $(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='registration']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        appo_animal: "required", 
        animal_name: "required",
        member_id: "required",
        breed: "required",
        color: "required",
        first_name: "required",
        last_name: "required",
        username: "required",
        address : "required",
        mobile : "required"
      },
      // Specify validation error messages
      messages: {
        appo_animal: "<span style = 'color:red'>กรุณาเลือก ชนิดของสัตว์</span>",
        animal_name: "<span style = 'color:red'>กรุณากรอก ชื่อสัตว์</span>",
        member_id: "<span style = 'color:red'>กรุณากรอก เลขที่สมาชิก</span>",
        breed: "<span style = 'color:red'>กรุณากรอก พันธุ์</span>",
        color: "<span style = 'color:red'>กรุณากรอก สี</span>",
        first_name: "<span style = 'color:red'>กรุณากรอก ชื่อ</span>",
        last_name: "<span style = 'color:red'>กรุณากรอก นามสกุล</span>",
        username: "<span style = 'color:red'>กรุณากรอก ชื่อผู้ใช้งาน</span>",
        address: "<span style = 'color:red'>กรุณากรอก ที่อยู่</span>",
        mobile: "<span style = 'color:red'>กรุณากรอก เบอร์โทรศัพท์</span>"
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        $('#closeRegisPanel').click();
        $('#clickToLoading').click();
        var data = $('#registration').serializeArray();
        var url = "<?php echo $a.'index.php/Customer/CustomerInfo/editUser'; ?>";
        $.post( url , {'data' : data} , function( data ) {
          if(data == 200){
             $('#closeLoadingPanel').click();
             $('#imgShowMessage').attr("src", "<?php echo $a; ?>assets/img/success.svg");
             $('#messageModalLabel').text('บันทึกข้อมูลเรียบร้อยแล้ว');
             $('#clickToShowMessage').click();
          } else {
             $('#closeLoadingPanel').click();
             $('#imgShowMessage').attr("src", "<?php echo $a; ?>assets/img/danger.svg");
             $('#messageModalLabel').text('เกิดข้อผิดพลาดลองใหม่อีกครั้ง');
             $('#clickToShowMessage').click();
          }

        });
      }
    });
  });
</script>

<style>
.nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
    color: #585858;
}
header .container {
    padding-top: 130px!important;
    padding-bottom: 250px;
}
</style>