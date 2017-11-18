    <?php $a =  base_url(); ?>
    <?php
      if(isset($_GET['dd'])){
        deleteUserData();
      }
    ?>
    <section class="features_table" id = "about">
        <div class="container ">
          <div class="col-sm-8 col-8 col-xs-12 no-padding">
              <div class="features-table">
                  <ul>
                      <h1>บริการของเรา</h1>
                      <li>ขอนัดหมายการเข้ารับบริการล่วงหน้าได้ </li>
                        <li>ตรวจสอบการนัดหมายของตนเองได้</li>
                        <li>เปลี่ยนแปลง เวลา การนัดหมายล่วงหน้าได้</li>
                        <li>ติดตามข้อมูลข่าวสารประชาสัมพันธ์ของคลินิกสัตว์เลี้ยงเอเชียเพ็ทได้</li>
                        <li>ล็อคอินเข้าใช้ระบบในส่วนของลูกค้าได้</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2 col-2 col-xs-12 no-padding">
            <div class="features-table-free">
                  <ul>
                      <h1>ฟรี</h1>
                        <li><i class="fa fa-check"></i></li>
                        <li><i class="fa fa-check"></i></li>
                        <li><i class="fa fa-check"></i></li>
                        <li><i class="fa fa-check"></i></li>
                        <li><i class="fa fa-check"></i></li>                     
                    </ul>
                </div>
            
            </div>
             <div class="col-sm-2 col-2 col-xs-12 no-padding">
               <div class="features-table-paid">
                  <ul>
                      <h1>ค่าบริการ</h1>
                        <li><i class="fa fa-check"></i></li>
                        <li><i class="fa fa-check"></i></li>
                        <li><i class="fa fa-check"></i></li>
                        <li><i class="fa fa-check"></i></li>
                        <li><i class="fa fa-check"></i></li>                     
                    </ul>
                </div>
             </div>
        </div>
    
    </section>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>
<!-- line modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form name = "login" id = "login">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span id = "closeLoginPanel"  aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">เข้าสู่ระบบ</h3>
        </div>
        <div class="modal-body">
            <!-- content goes here -->
              <div class="form-group">
                <label for="exampleInputEmail1">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" id="username_log" name = "username_log" placeholder="ชื่อผู้ใช้">
              </div>
               <div class="form-group">
                <label for="exampleInputPassword1">รหัสผ่าน</label>
                <input type="password" class="form-control" id="password_log" name = "password_log" placeholder="รหัสผ่าน">
              </div>
        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group" role="group">
                    <button type="submit" id="saveLogin" class="btn btn-success" data-action="save" role="button">เข้าสู่ระบบ</button>
                </div>
            </div>
        </div>
    </div>
   </form>
  </div>
</div>
<!-- line modal -->
<div class="modal fade" id="regisModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form name = "registration" id = "registration" method = "post">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span  id = "closeRegisPanel" aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">ลงทะเบียน</h3>
        </div>
        <div class="modal-body">
            
            <!-- content goes here -->
            
              <div class="form-group">
                <label for="exampleInputEmail1">ชื่อ</label>
                <input type="text" class="form-control" id="first_name" name = "first_name" placeholder="ชื่อ">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">นามสกุล</label>
                <input type="text" class="form-control" id="last_name" name = "last_name" placeholder="นามสกุล">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">ชื่อผู้ใช้งาน</label>
                <input type="text" class="form-control" id="username" name = "username" placeholder="ชื่อผู้ใช้งาน">
              </div>
               <div class="form-group">
                <label for="exampleInputPassword1">รหัสผ่าน</label>
                <input type="password" class="form-control" id="password" name = "password" placeholder="รหัสผ่าน">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">ที่อยู่</label>
                 <textarea class="form-control" rows="5" placeholder="ที่อยู่" id="address" name = "address"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">เบอร์โทรศัพท์</label>
                <input type="text" class="form-control" id="mobile" name = "mobile" placeholder="เบอร์โทรศัพท์">
              </div>
            

        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group" role="group">
                    <button type="submit" id="saveRegis" class="btn btn-success" data-action="save" role="button">บันทึก</button>
                </div>
            </div>
        </div>
    </form>
    </div>
  </div>
</div>

<script>
  // Wait for the DOM to be ready
  $(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='login']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        username_log: "required",
        password_log: "required"
      },
      // Specify validation error messages
      messages: {
        username_log: "<span style = 'color:red'>กรุณากรอก ชื่อผู้ใช้งาน</span>",
        password_log: "<span style = 'color:red'>กรุณากรอก รหัสผ่าน</span>"
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
          $('#closeLoginPanel').click();
          $('#clickToLoading').click();
          var username = $("#username_log").val();
          var password = $("#password_log").val();
          var url = "<?php echo $a.'index.php/Login/Login/postLogin'; ?>";
          $.post( url , {'username' : username, 'password' : password} , function( data ) {
            if(data == 200){
               document.getElementById("registration").reset(); 
               $('#closeLoadingPanel').click();
               window.location = "<?php echo $a.'index.php/Dashboard/Dashboard'; ?>";
            } else if( data == 404){
              document.getElementById("login").reset();
               $('#closeLoadingPanel').click();
               $('#imgShowMessage').attr("src", "<?php echo $a; ?>assets/img/danger.svg");
               $('#messageModalLabel').text('ไม่พบ \"ชื่อผู้ใช้งานนี้\" ลองใหม่อีกครั้ง');
               $('#clickToShowMessage').click();
            } else {
              document.getElementById("login").reset();
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
        first_name: "required",
        last_name: "required",
        username: "required",
        password: "required",
        address : "required",
        mobile : "required"
      },
      // Specify validation error messages
      messages: {
        first_name: "<span style = 'color:red'>กรุณากรอก ชื่อ</span>",
        last_name: "<span style = 'color:red'>กรุณากรอก นามสกุล</span>",
        username: "<span style = 'color:red'>กรุณากรอก ชื่อผู้ใช้งาน</span>",
        password: "<span style = 'color:red'>กรุณากรอก รหัสผ่าน</span>",
        address: "<span style = 'color:red'>กรุณากรอก ที่อยู่</span>",
        mobile: "<span style = 'color:red'>กรุณากรอก เบอร์โทรศัพท์</span>"
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        $('#closeRegisPanel').click();
        $('#clickToLoading').click();
        var data = $('#registration').serializeArray();
        var url = "<?php echo $a.'index.php/Register/Register/postRegister'; ?>";
        $.post( url , {'data' : data} , function( data ) {
          if(data == 200){
             document.getElementById("registration").reset();
             $('#closeLoadingPanel').click();
             $('#imgShowMessage').attr("src", "<?php echo $a; ?>assets/img/success.svg");
             $('#messageModalLabel').text('สมัครใช้งานเรียบร้อยแล้ว');
             $('#clickToShowMessage').click();
          } else if( data == 400){
             $('#closeLoadingPanel').click();
             $('#imgShowMessage').attr("src", "<?php echo $a; ?>assets/img/danger.svg");
             $('#messageModalLabel').text('มี \"ชื่อผู้ใช้งาน\" นี้อยู่ในระบบแล้วลองใหม่อีกครั้ง');
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