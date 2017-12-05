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
                      <li data-toggle="modal" data-target="#regisModal">ขอนัดหมายการเข้ารับบริการล่วงหน้าได้ </li>
                        <li data-toggle="modal" data-target="#regisModal">ตรวจสอบการนัดหมายของตนเองได้</li>
                        <li data-toggle="modal" data-target="#regisModal">เปลี่ยนแปลง เวลา การนัดหมายล่วงหน้าได้</li>
                        <li data-toggle="modal" data-target="#regisModal">ติดตามข้อมูลข่าวสารประชาสัมพันธ์ของคลินิกสัตว์เลี้ยงเอเชียเพ็ทได้</li>
                        <li data-toggle="modal" data-target="#regisModal">ล็อคอินเข้าใช้ระบบในส่วนของลูกค้าได้</li>
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
                <input type="number" class="form-control" id="mobile" name = "mobile" placeholder="เบอร์โทรศัพท์">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">เลขที่สมาชิก</label>
                <input type="number" class="form-control" id="member_id" name = "member_id" placeholder="เลขที่สมาชิก">
              </div>
             <hr/>
              <div class="form-group">
                <h3>รายละเอียดอื่นๆ</h3>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">ชื่อสัตว์</label>
                <input type="text" class="form-control" id="animal_name" name = "animal_name" placeholder="ชื่อสัตว์">
              </div>
            <div class="form-group">
              <label>วันเกิดสัตว์</label>  
                    <div class="input-group date form_date col-md-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="appo_date" data-link-format="yyyy-mm-dd">
                        <input id="appo_birth_date_show_animal" name="appo_birth_date_show_animal"  class="form-control" size="16" placeholder="วันเกิดสัตว์" type="text" value="" readonly>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <input type="hidden" id="appo_birth_date_animal" name="appo_birth_date_animal" value="" />
            </div>
              <?php
                $animal = getAnimalData();
              ?>
              <div class="form-group">
              <label>ชนิดของสัตว์</label>  
                <select class="form-control" id="appo_animal" name="appo_animal">
                   <option value = "">กรุณาเลือก</option>
                   <?php
                    if(count( $animal) > 0 ) {
                      foreach ( $animal as $key => $value) {
                   ?>
                   <option value = "<?php echo $value['animal_name']; ?>"><?php echo $value['animal_name']; ?></option>
                   <?php } } ?>
                </select>                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">พันธุ์</label>
                <input type="text" class="form-control" id="breed" name = "breed" placeholder="พันธุ์">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">เพศ</label>
                <div class="radio">
                  <label><input checked type="radio" name="gender" id="gender" value="1">ตัวผู้</label>
                </div>
                <div class="radio">
                  <label><input type="radio" name="gender" id="gender" value="0">ตัวเมีย</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">สี</label>
                <input type="text" class="form-control" id="color" name = "color" placeholder="สี">
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


  $("#username").focusout( function (){
        var url = "<?php echo $a.'index.php/Register/Register/getUsername'; ?>";
        var data = $("#username").val();
        var english = /^[A-Za-z0-9]*$/;

        $.post( url , {'txtCheck' : data} , function( data ) {
            if(data == 1) {
              $("#username").val("");
              alert("มี username นี้อยู่ในระบบแล้ว");
              $("#username").focus();
              return false;
            }
        });
  });

  $("#password").on("keypress", function(event) {

    // Disallow anything not matching the regex pattern (A to Z uppercase, a to z lowercase and white space)
    // For more on JavaScript Regular Expressions, look here: https://developer.mozilla.org/en-US/docs/JavaScript/Guide/Regular_Expressions
    var englishAlphabetAndWhiteSpace = /[A-Za-z0-9 ]/g;
   
    // Retrieving the key from the char code passed in event.which
    // For more info on even.which, look here: http://stackoverflow.com/q/3050984/114029
    var key = String.fromCharCode(event.which);
    
    //alert(event.keyCode);
    
    // For the keyCodes, look here: http://stackoverflow.com/a/3781360/114029
    // keyCode == 8  is backspace
    // keyCode == 37 is left arrow
    // keyCode == 39 is right arrow
    // englishAlphabetAndWhiteSpace.test(key) does the matching, that is, test the key just typed against the regex pattern
    if (event.keyCode == 8 || event.keyCode == 37 || event.keyCode == 39 || englishAlphabetAndWhiteSpace.test(key)) {
        return true;
    }

    // If we got this far, just return false because a disallowed key was typed.
    return false;
});

$('#password').on("paste",function(e)
{
    e.preventDefault();
});


  $("#username").on("keypress", function(event) {

    // Disallow anything not matching the regex pattern (A to Z uppercase, a to z lowercase and white space)
    // For more on JavaScript Regular Expressions, look here: https://developer.mozilla.org/en-US/docs/JavaScript/Guide/Regular_Expressions
    var englishAlphabetAndWhiteSpace = /[A-Za-z ]/g;
   
    // Retrieving the key from the char code passed in event.which
    // For more info on even.which, look here: http://stackoverflow.com/q/3050984/114029
    var key = String.fromCharCode(event.which);
    
    //alert(event.keyCode);
    
    // For the keyCodes, look here: http://stackoverflow.com/a/3781360/114029
    // keyCode == 8  is backspace
    // keyCode == 37 is left arrow
    // keyCode == 39 is right arrow
    // englishAlphabetAndWhiteSpace.test(key) does the matching, that is, test the key just typed against the regex pattern
    if (event.keyCode == 8 || event.keyCode == 37 || event.keyCode == 39 || englishAlphabetAndWhiteSpace.test(key)) {
        return true;
    }

    // If we got this far, just return false because a disallowed key was typed.
    return false;
});

$('#username').on("paste",function(e)
{
    e.preventDefault();
});


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
        
        appo_animal: "required", 
        animal_name: "required",
        member_id: "required",
        breed: "required",
        color: "required",
        first_name: "required",
        last_name: "required",
        username: "required",
        password: "required",
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