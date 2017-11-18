        <?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ยืนยันการรักษา <small>ตรวจสอบรายการการรักษาและค่ารักษา</small>
                        </h1>
                    </div>
                </div>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>รายการสินค้า</th>
                        <th>จำนวน</th>
                        <th class="text-center">ราคา</th>
                        <th class="text-center">รวม</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $total_main = 0; 
                    $total_option = 0;
                    $cc = 0;
                    ?>
                    <?php if(count($data) > 1) { ?>
                    <?php foreach ($data as $key => $value) { 
                        if($value['order_type'] == 'o' && $value['product_amt'] >  0 ) { 
                        $total_option  += intval($value['price']) * intval($value['product_amt']);
                        $total_option_show = intval($value['price']) * intval($value['product_amt']);
                    ?>
                    <tr id = ''>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?php echo $value['product_name']; ?></a></h4>
                                <h5 class="media-heading"> รายละเอียด <a href="#"><?php echo $value['product_detail']; ?></a></h5>
                                <span>สถานะสินค้า: </span><span class="text-success"><strong>in stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <strong><?php echo $value['product_amt']; ?></strong>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $value['price']; ?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $total_option_show; ?></strong></td>
                        <td class="col-sm-1 col-md-1">
                        <a class="btn btn-danger" href = "<?php echo $a.'index.php/Service/Service/deleteCharge/'.$value['id_detail'].'/'.$value['service_id']; ?>" onclick="return confirm('คุณต้องการที่จะลบหรือไม่');"><span class="glyphicon glyphicon-remove"></span> ลบออก</a>
                    </tr> 
                    <?php } }  } ?>
                    <?php if(count($data) > 0) { ?>
                    <?php foreach ($data as $key2 => $value2) { 
                        if($value2['order_type'] == 'm') { 
                        $total_main  += intval($value2['service_bath']);
                    ?>

                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?php echo $value2['service_detail']; ?></a></h4>
                                <span>ค่ารักษาพยาบาล</span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $value2['service_bath']; ?></strong></td>
                        <td class="col-sm-1 col-md-1"></td>
                    </tr>

                    <?php } } } ?>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>รวม</h3></td>
                        <td class="text-right"><h3><strong><?php echo intval($total_main + $total_option); ?> บาท</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><a data-toggle="modal" data-target="#squarespaceModal" id = "btnNextAppo" class="btn btn-info" href = "#">กำหนดการนัดหมายครั้งต่อไป</a></td>
                        <td>
                        <a id = "btnSubmit" class="btn btn-success" href = "#"><span class="glyphicon glyphicon-play"></span> ยืนยันและออกใบเสร็จ</a>

<!--                         <button id = "btnSubmit" type="button" class="btn btn-success">
                            ยืนยันและออกใบเสร็จ <span class="glyphicon glyphicon-play"></span>
                        </button> -->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"> 
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">กำหนดการนัดหมายครั้งถัดไป</h3>
        </div>
        <div class="modal-body">
            
        <form class="form-horizontal" method = "post" id = "appo_register" name = "appo_register">
             <input id="member_id" name="member_id" type="hidden" value = "<?php echo $member_id; ?>">
            <div class="form-group">
              <label class="col-md-4 control-label" for="appo_name">ชนิดของสัตว์</label>  
              <div class="col-md-6">
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
              <div class="col-md-6">
              <input id="appo_name" name="appo_name" type="text" placeholder="เรื่องที่นัดหมาย" class="form-control input-md">
                
              </div>
            </div>


            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="appo_detail">รายละเอียด</label>
              <div class="col-md-6">                     
                <textarea class="form-control" id="appo_detail" name="appo_detail" placeholder="รายละเอียด"></textarea>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="name">วันที่</label>  
              <div class="col-md-6">
                    <div class="input-group date form_date col-md-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="appo_date" data-link-format="yyyy-mm-dd">
                        <input id="appo_date_show" name="appo_date_show"  class="form-control" size="16" placeholder="วันที่" type="text" value="" readonly>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <input type="hidden" id="appo_date" name="appo_date" value="" />
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="vorname">เวลา</label>  
              <div class="col-md-6">
                    <div class="input-group date form_time col-md-12" data-date="" data-date-format="hh:ii" data-link-field="appo_time" data-link-format="hh:ii">
                      <input id="appo_time_show" name="appo_time_show" class="form-control" size="16" placeholder="เวลา" type="text" value="" readonly>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                    </div>
                    <input type="hidden" id="appo_time" name="appo_time" value="" />
              </div>
            </div>
            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="anmelden"></label>
              <div class="col-md-6">
                <button type="submit" id="btnSubmit" name="btnSubmit" class="btn btn-primary">ตกลง</button>
                <button id = 'resetForm' class="btn btn-warning" type="button" class="close" data-dismiss="modal">ยกเลิก</button>
              </div>
            </div>

        </form>

        </div>
    </div>
  </div>
</div>
<script>
    $('#resetForm').click(function(){
        document.getElementById("appo_register").reset();
    });
</script>
<style>
.center {
    margin-top:50px;   
}

.modal-header {
    padding-bottom: 5px;
}

.modal-footer {
        padding: 0;
    }
    
.modal-footer .btn-group button {
    height:40px;
    border-top-left-radius : 0;
    border-top-right-radius : 0;
    border: none;
    border-right: 1px solid #ddd;
}
    
.modal-footer .btn-group:last-child > button {
    border-right: 0;
}
</style>
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
            alert('กรุณาเลือกวันที่');
           return false;
        }
        var appo_time_show = $('#appo_time_show').val();
        if(appo_time_show == ''){
           alert('กรุณาเลือกเวลา');
           return false;
        }

        var data = $('#appo_register').serializeArray();
        var url = "<?php echo $a.'index.php/Service/Service/addAppo'; ?>";
        $.post( url , {'data' : data} , function( data ) {

          if(data == 200){
            document.getElementById("appo_register").reset();
            alert('บันทึกการนัดหมายครั้งต่อไปเรียบร้อยแล้ว');
            $('#resetForm').click();
            $('#btnNextAppo').hide();
          } else {
            alert('เกิดข้อผิดพลาดลองใหม่อีกครั้ง');
          }

        });

      }
    });
  });
</script>
<script>    
    $('#btnSubmit').click(function(){ 
        var url = "<?php echo $a.'index.php/Service/Service/comfirmChargeData/'.$data[0]['id_detail'].'/'.$data[0]['service_id']; ?>";
        var urlUpdate = "<?php echo $a.'index.php/Service/Service/updateDataForSuccess'; ?>";
        var id_re = "<?php echo $data[0]['service_id']; ?>";
        $.post( urlUpdate,{'id_re':id_re}, function( data ) {
          if(data == 200) {
              window.location = url;   
          }else{
            alert('เกิดข้อผิดพลาดลองใหม่อีกครั้ง');
          }
        });
    });

</script>
<script type="text/javascript">
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
  $('.form_time').datetimepicker({
        // language:  'th',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 1,
    minView: 0,
    maxView: 1,
    forceParse: 0
    });
</script>
