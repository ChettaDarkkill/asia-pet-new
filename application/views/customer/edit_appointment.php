<?php $a =  base_url(); ?>
<div class="container">
    <div class="row">
        <?php
          $this->load->view('include/menu');
        ?>
         <div class="col-md-9">
            <div class="intro-text">
                <h1 style = "color:#373a47;" class="name">เปลี่ยนแปลง เวลา การนัดหมายล่วงหน้า</h1>
            </div>
            <br/>
              <table id="example" class="display" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>ลำดับ</th>
                              <th>วันที่</th>
                              <th>เวลา</th>
                              <th>ประเภทสัตว์</th>
                              <th>สภานะ</th>
                              <th>จัดการ</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>ลำดับ</th>
                              <th>วันที่</th>
                              <th>เวลา</th>
                              <th>ประเภทสัตว์</th>
                              <th>สภานะ</th>
                              <th>จัดการ</th>
                          </tr>
                      </tfoot>
                      <tbody>
                      <?php if(isset($data) && !empty($data)) {
                         $count = 0;
                         foreach ($data as $key => $value) {     
                         $count = $count + 1;
                         $status_appo = $value['status_booking'];
                         if($status_appo == 1){
                            $aa = '<span class="label label-warning">รออนุมัติ</span>';
                         }else{
                            $aa = '<span class="label label-danger">ยกเลิก</span>';
                         }
                      ?>
                      <tr>
                          <td><?php echo $count;?></td>
                          <td><?php echo $value['appo_date']; ?></td>
                          <td><?php echo $value['appo_time']; ?></td>
                          <td><?php echo $value['appo_animal']; ?></td>
                          <td><?php echo $aa; ?></td> 
                          <td>
                            <?php if($status_appo == 1) {?>
                            <a href = "<?php echo $a.'index.php/Customer/SeeAppointment/editAppoint/'.$value['id']; ?>" class="btn btn-primary">แก้ไข<a>
                            <a href = "<?php echo $a.'index.php/Customer/SeeAppointment/delAppoint/'.$value['id']; ?>" class="btn btn-danger" onclick="return confirm('คุณต้องการที่จะลบหรือไม่');">ลบ<a>
                            <button  idData="<?php echo $value['id']; ?>" data-toggle="modal" data-target="#detailModal" type="button" class="btn btn-info infox">รายละเอียด</button>
                            <?php } else {?>
                              <a href = "<?php echo $a.'index.php/Customer/SeeAppointment/delAppoint/'.$value['id']; ?>" class="btn btn-danger" onclick="return confirm('คุณต้องการที่จะลบหรือไม่');">ลบ<a>
                              <button  idData="<?php echo $value['id']; ?>" data-toggle="modal" data-target="#detailModal" type="button" class="btn btn-warning infox">สาเหตุที่ยกเลิก</button>
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
<!-- line modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" style="color:#999999!important;">
    <form name = "registration" id = "registration" method = "post">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span  id = "closeRegisPanel" aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h2 class="modal-title" id="lineModalLabel">รายละเอียด</h2>
        </div>
        <div class="modal-body" id = "booking_details">
               
        </div>
    </form>
    </div>
  </div>

<div class="modal fade" id="editDetailModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" style="color:#999999!important;">
    <form name = "registration" id = "registration" method = "post">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span  id = "closeRegisPanel" aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h2 class="modal-title" id="lineModalLabel">รายละเอียดการจอง</h2>
        </div>
        <div class="modal-body" id = "booking_details">
               
        </div>
    </form>
    </div>
  </div>

<script>
  $('.infox').click(function(){
    var id = $(this).attr('idData');
      var url = "<?php echo $a.'index.php/Customer/SeeAppointment/getAppoint'; ?>";
      $.post( url , {'id' : id} , function( data ) {
         $('#booking_details').html(data);
      });
  });
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