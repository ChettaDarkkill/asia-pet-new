<?php $a =  base_url(); ?>
<div class="container">
    <div class="row">
        <?php
          $this->load->view('include/menu');
        ?>
         <div class="col-md-9">
            <div class="intro-text">
                <h1 style = "color:#373a47;" class="name">ขอนัดหมายการเข้ารับบริการล่วงหน้า</h1>
            </div>
        <form class="form-horizontal" method = "post" id = "appo_register" name = "appo_register">
            <fieldset>
            <!-- Form Name -->
            <legend></legend>

            <div class="form-group">
              <label class="col-md-4 control-label" for="appo_name">ชนิดของสัตว์</label>  
              <div class="col-md-4">
                <select class="form-control" id="appo_animal" name="appo_animal">
                   <option value = "">กรุณาเลือก</option>
                  <option value = "สุนัข (Dog)">สุนัข (Dog)</option>
                  <option value = "แมว (Cat)">แมว (Cat)</option>
                  <option value = "กระต่าย (Rabbit)">กระต่าย (Rabbit)</option>
                  <option value = "ชินชิล่า (Chinchilla)">ชินชิล่า (Chinchilla)</option>
                  <option value = "ชูการ์ ไกรเดอร์ (Suger Glider)">ชูการ์ ไกรเดอร์ (Suger Glider)</option>
                  <option value = "กระรอก (Squirrel)">กระรอก (Squirrel) </option>
                  <option value = "นก (Bird)">นก (Bird)</option>
                  <option value = "แฮมสเตอร์ (Hamster)">แฮมสเตอร์ (Hamster)</option>
                  <option value = "แกสบี้ (Guinea Pig)">แกสบี้ (Guinea Pig)</option>
                  <option value = "ปลา (Fish)">ปลา (Fish)</option>
                </select>                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="appo_name">เรื่องที่นัดหมาย</label>  
              <div class="col-md-4">
              <input id="appo_name" name="appo_name" type="text" placeholder="เรื่องที่นัดหมาย" class="form-control input-md">
                
              </div>
            </div>


            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="appo_detail">รายละเอียด</label>
              <div class="col-md-4">                     
                <textarea class="form-control" id="appo_detail" name="appo_detail" placeholder="รายละเอียด"></textarea>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="name">วันที่</label>  
              <div class="col-md-8">
                    <div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="appo_date" data-link-format="yyyy-mm-dd">
                        <input id="appo_date_show" name="appo_date_show" value="<?php echo $dataSelect; ?>" class="form-control" size="16" placeholder="วันที่" type="text" value="" readonly>
<!--                         <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> -->
                    </div>
                    <input type="hidden" id="appo_date" value="<?php echo $dataSelect; ?>" name="appo_date" value="" />
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="vorname">เวลา</label>  
              <div class="col-md-8">
                    <div class="input-group date form_time col-md-5" data-date="" data-date-format="hh:ii" data-link-field="appo_time" data-link-format="hh:ii">
                      <input id="appo_time_show" name="appo_time_show" class="form-control" size="16" placeholder="เวลา" type="text" value="<?php echo $timeSelect; ?>" readonly>
<!--                       <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span> -->
                    </div>
                    <input type="hidden" id="appo_time" name="appo_time" value="<?php echo $timeSelect; ?>" />
              </div>
            </div>
            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="anmelden"></label>
              <div class="col-md-4">
                <button type="submit" id="btnSubmit" name="btnSubmit" class="btn btn-primary">ตกลง</button>
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
<script>
  // Wait for the DOM to be ready
  $(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='appo_register']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        appo_animal: "required",
        appo_detail: "required",
        appo_name: "required"
      },
      // Specify validation error messages
      messages: {
        appo_animal: "<span style = 'color:red'>กรุณาเลือกชนิดของสัตว์</span>",
        appo_detail: "<span style = 'color:red'>กรุณากรอกรายละเอียด</span>",
        appo_name: "<span style = 'color:red'>กรุณากรอกเรื่องที่นัดหมาย</span>"
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {

        var appo_date_show = $('#appo_date_show').val();
        if(appo_date_show == ''){
           $('#imgShowMessage').attr("src", "<?php echo $a; ?>assets/img/warning.svg");
           $('#messageModalLabel').html('<h5>กรุณาเลือก วันที่ ที่ต้องการนัดหมาย</h5>');
           $('#clickToShowMessage').click();
           return false;
        }
        var appo_time_show = $('#appo_time_show').val();
        if(appo_time_show == ''){
           $('#imgShowMessage').attr("src", "<?php echo $a; ?>assets/img/warning.svg");
           $('#messageModalLabel').html('<h5>กรุณาเลือก เวลา ที่ต้องการนัดหมาย</h5>');
           $('#clickToShowMessage').click();
           return false;
        }

        $('#clickToLoading').click();
        var data = $('#appo_register').serializeArray();
        var url = "<?php echo $a.'index.php/Customer/AppointmentAdvance/addAppo'; ?>";
        $.post( url , {'data' : data} , function( data ) {

          if(data == 200){
            document.getElementById("appo_register").reset();
             $('#closeLoadingPanel').click();
             $('#imgShowMessage').attr("src", "<?php echo $a; ?>assets/img/success.svg");
             $('#messageModalLabel').html('<h5>บันทึกการนัดหมายเรียบร้อยแล้ว<br/>กรุณาปริ้นใบนัดและไปตามเวลานัดหมาย<br/><a class="btn btn-primary" href="<?php echo $a; ?>index.php/Customer/Customer/get_appointment">ตกลง</a></h5>');
             $('#clickToShowMessage').click();
          } else if(data == "not_book_this_time") {
             $('#closeLoadingPanel').click();
             $('#imgShowMessage').attr("src", "<?php echo $a; ?>assets/img/danger.svg");
             $('#messageModalLabel').html('<h5>สามารถจองได้ในช่วงเวลา 08:00 - 20:00 เท่านั้น</h5>');
             $('#clickToShowMessage').click();
          } else {
             $('#closeLoadingPanel').click();
             $('#imgShowMessage').attr("src", "<?php echo $a; ?>assets/img/danger.svg");
             $('#messageModalLabel').html('<h5>เกิดข้อผิดพลาดลองใหม่อีกครั้ง</h5>');
             $('#clickToShowMessage').click();
          }

        });

      }
    });
  });
</script>
<script type="text/javascript">
  // $('.form_date').datetimepicker({
  //       // language:  'th',
  //       weekStart: 1,
  //       todayBtn:  1,
  //   autoclose: 1,
  //   todayHighlight: 1,
  //   startView: 2,
  //   minView: 2,
  //   forceParse: 0
  //   });
  // $('.form_time').datetimepicker({
  //       // language:  'th',
  //       weekStart: 1,
  //       todayBtn:  1,
  //   autoclose: 1,
  //   todayHighlight: 1,
  //   startView: 1,
  //   minView: 0,
  //   maxView: 1,
  //   forceParse: 0
  //   });
</script>
<style>
header .container {
    padding-top: 130px!important;
    padding-bottom: 200px;
}
</style>