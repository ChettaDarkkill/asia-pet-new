<?php $a =  base_url(); ?>

<div class="container">
    <div class="row">
        <?php
          $this->load->view('include/menu');
        ?>
         <div class="col-md-9">
            <div class="intro-text">
                <h1 style = "color:#373a47;" class="name">ตรวจสอบการนัดหมาย</h1>
            </div>
      <div class="row">
        <select class="form-control" id="change_mou" name="change_mou">
          <option value = "">กรุณาเลือก</option>
          <?php foreach ($data['month'] as $key => $value) { ?>
            <option value = "<?php echo $key ; ?>"><?php echo $value; ?></option>
          <?php } ?>
        </select> 
      </div>
      <br/>
      <p class="text-center">ตรวจสอบตารางนัดหมายของคุณพร้อมถือใบนัดมาด้วย กรณีไม่มีใบนัดกรุณาปลิ้นใหม่ได้ในระบบหรือถือบัตรประจำตัวประชาชนมาด้วย</p>
      
      <div id = "showCalendar"></div>
      
       </div>    
    </div>
  </div>
</div>    
</div>
<script>
$('#change_mou').on('change', function(){
      $('.ccl').click();
      $('#clickToLoading').click();
      var mm = $(this).val();
      var url = "<?php echo $a.'index.php/Customer/GetAppointment/getAppoData'; ?>";
      $.post( url ,{'mm' : mm}, function( data ) {
          $('#closeLoadingPanel').click();
          $('#showCalendar').html(data);
      });
});
</script>
<style>
header .container {
    padding-top: 130px!important;
    padding-bottom: 270px;
}
</style>