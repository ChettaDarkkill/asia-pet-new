<?php $a =  base_url(); ?>
<div class="container">
    <div class="row">
        <?php
          $this->load->view('include/menu');
        ?>
         <div class="col-md-9">
            <div class="intro-text">
                <h1 style = "color:#373a47;" class="name">ปริ้นใบนัด</h1>
            </div>
            <br/>
              <table id="example" class="display" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>ลำดับ</th>
                              <th>วันที่</th>
                              <th>เวลา</th>
                              <th>ประเภทสัตว์</th>
                              <th>สถานะ</th>
                              <th>ปริ้นใบนัด</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>ลำดับ</th>
                              <th>วันที่</th>
                              <th>เวลา</th>
                              <th>ประเภทสัตว์</th>
                              <th>สถานะ</th>
                              <th>ปริ้นใบนัด</th>
                          </tr>
                      </tfoot>
                      <tbody>
                      <?php if(isset($data) && !empty($data)) {
                         $count = 0;
                         foreach ($data as $key => $value) {
                          if(strtotime($value['appo_date']) < strtotime(date("Y-m-d"))){
                             $pp = 1;
                          }
                          else{
                             $pp = 2;
                          }
                          $count = $count + 1;
                         if($value['status_booking'] == 1){
                            $txt = "รออนุมัติ";
                            $cscData = "warning";
                         }else if($value['status_booking'] == 2){
                            $txt = "ยกเลิก";
                            $cscData = "danger";
                         }else if($value['status_booking'] == 3){
                            $txt = "อนุมัติแล้ว";
                            $cscData = "success";
                         }else{
                            $txt = "ยกเลิก";
                            $cscData = "danger";
                         }
                      ?>
                      <tr>
                          <td><?php echo $count; ?></td>
                          <td><?php echo $value['appo_date']; ?></td>
                          <td><?php echo $value['appo_time']; ?></td>
                          <td><?php echo $value['appo_animal']; ?></td>
                          <td>
                            <span class="label label-<?php echo $cscData; ?>"><?php echo $txt;?></span>
                          </td>
                          <td>
                            <?php if($pp == 2) { ?>
                            <a href="javascript:void(0);" class="btn-xs btn-success" onClick=window.open("<?php echo $a.'index.php/Customer/AppointmentAdvance/printTicket/'.$value['id']; ?>","Ratting","width=500,height=700,0,status=0,scrollbars=1");>ปริ้นใบนัด</a>
                              <!-- <button type="button" class="btn-xs btn-success">ปลิ้นใบนัด</button> -->
                            <?php } else { ?>
                              <span style = "color:red">เกินกำหนดวันนัด</span>
                            <?php } ?>
                          </td>
                      </tr>
                     <?php } }?>
                      </tbody>
              </table>
         </div>    
    </div>
  </div>
</div>    
</div>
<script>

    /* API method to get paging information */
    'use strict';
  var $ = jQuery;
  $.getScript("https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js", function(){
       
            $('#example').DataTable( {
                "paging":   true,
                "ordering": true,
                "info":     false
            } );
  });
</script>
<style>
@import  url('https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css');
table.dataTable {
    width: 100%;
    margin: 0 auto;
    clear: both;
    border-collapse: separate;
    border-spacing: 0;
    color: black;
}
header .container {
    padding-top: 130px!important;
    padding-bottom: 250px;
}
</style>