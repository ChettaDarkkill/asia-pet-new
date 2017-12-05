        <?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            จัดการการนัดหมาย <small></small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <ul class="nav nav-tabs">
                  <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">รายการที่ลูกค้าขอนัดหมาย</a>
                    <!-- <span class="label label-warning">รออนุมัติ</span> -->
                  </li>
<!--                   <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">รายการที่อนุมัติแล้ว</a>
                  </li> -->
                  <li class=""><a id = 'btnCancel' href="#profile1" data-toggle="tab" aria-expanded="false">รายการที่ถูกยกเลิก</a>
                    <!-- <span class="label label-danger">ยกเลิก</span> -->
                  </li>
                  <li class=""><a id = 'btnCancel' href="#completOrder" data-toggle="tab" aria-expanded="false">รายการที่รักษาแล้ว</a>
                    <!-- <span class="label label-danger">ยกเลิก</span> -->
                  </li>
                  <li class=""><a id = 'btnCancel' href="#unCompletOrder" data-toggle="tab" aria-expanded="false">รายการที่ยังไม่ได้รักษา</a>
                    <!-- <span class="label label-danger">ยกเลิก</span> -->
                  </li>
                </ul><br/>
                <div id="myTabContent" class="tab-content">
                  <div class="tab-pane fade active in" id="home">
                     <table id="example" class="display" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>ลำดับ</th>
                              <th>ชื่อ</th>
                              <th>ชนิดสัตว์</th>
                              <th>เรื่องที่ขอนัดหมาย </th>
                              <th>วันที่ขอนัดหมาย</th>
                              <th>จัดการ</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>ลำดับ</th>
                              <th>ชื่อ</th>
                              <th>ชนิดสัตว์</th>
                              <th>เรื่องที่ขอนัดหมาย</th>
                              <th>วันที่ขอนัดหมาย</th>
                              <th>จัดการ</th>
                          </tr>
                      </tfoot>
                      <tbody>
                      <?php
                        if(count($data) > 0 ) {
                        $count = 0;
                        foreach ($data['data1'] as $key => $value) {
                        $count ++ ;
                      ?>
                      <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $value['first_name'] . " " . $value['last_name']; ?></td>
                            <td><?php echo $value['appo_animal']; ?></td>
                            <td><?php echo $value['appo_name']; ?></td>
                            <td><?php echo $value['appo_date'] .' '.$value['appo_time']; ?></td>
                            <td>
                                <a href = "<?php echo $a.'index.php/Admin/Appointment/detailAppo/'.$value['id']; ?>" class="btn btn-sm btn-info">ดูรายละเอียด</a>
                                <a href = "<?php echo $a.'index.php/Admin/Appointment/deleteAppo/'.$value['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('คุณต้องการที่จะลบหรือไม่');">ลบ</a>
                                <a href = "<?php echo $a.'index.php/Admin/Appointment/cancelAppo/'.$value['id']; ?>" class="btn btn-sm btn-warning">ยกเลิกนัด</a>
<!--                                 <a href = "<?php echo $a.'index.php/Admin/Appointment/approveAppo/'.$value['id']; ?>" class="btn btn-sm btn-success" onclick="return confirm('คุณต้องการอนุมัติจริงหรือไม่');">อนุมัติ</a> -->
                            </td>
                      </tr>
                      <?php } } ?>
                      </tbody>
              </table>
                  </div>
                  <div class="tab-pane fade" id="profile">
     <table id="example2" class="display" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>ลำดับ</th>
                              <th>ชื่อ</th>
                              <th>เลขที่นัดหมาย</th>
                              <th>ชนิดสัตว์</th>
                              <th>เรื่องที่ขอนัดหมาย </th>
                              <th>วันที่ขอนัดหมาย</th>
                              <th>จัดการ</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>ลำดับ</th>
                              <th>ชื่อ</th>
                              <th>เลขที่นัดหมาย</th>
                              <th>ชนิดสัตว์</th>
                              <th>เรื่องที่ขอนัดหมาย</th>
                              <th>วันที่ขอนัดหมาย</th>
                              <th>จัดการ</th>
                          </tr>
                      </tfoot>
                      <tbody>
                      <?php
                        if(count($data) > 0 ) {
                        $count = 0;
                        foreach ($data['data2'] as $key => $value) {
                        $count ++ ;
                      ?>
                      <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $value['first_name'] . " " . $value['last_name']; ?></td>
                            <td><?php echo $value['trans_id']; ?></td>
                            <td><?php echo $value['appo_animal']; ?></td>
                            <td><?php echo $value['appo_name']; ?></td>
                            <td><?php echo $value['appo_date'] .' '.$value['appo_time']; ?></td>
                            <td>
                                <a href = "<?php echo $a.'index.php/Admin/Appointment/detailAppo/'.$value['id'] . '/1'; ?>" class="btn btn-sm btn-info">ดูรายละเอียด</a>
                                <a href = "<?php echo $a.'index.php/Admin/Appointment/deleteAppo/'.$value['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('คุณต้องการที่จะลบหรือไม่');">ลบ</a>
                                <?php if($value['flag'] == 0 ){ ?>
                                  <span class="label label-warning">ยังไม่เข้ารับบริการ</span>
                                <?php } else { ?>
                                  <span class="label label-success">เข้ารับบริการแล้ว</span>
                                <?php } ?>
                            </td>
                      </tr>
                      <?php } } ?>
                      </tbody>
              </table>
                  </div>
                  <div class="tab-pane fade" id="profile1">
     <table id="example3" class="display" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>ลำดับ</th>
                              <th>ชื่อ</th>
                              <th>ชนิดสัตว์</th>
                              <th>เรื่องที่ขอนัดหมาย </th>
                              <th>วันที่ขอนัดหมาย</th>
                              <th>จัดการ</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>ลำดับ</th>
                              <th>ชื่อ</th>
                              <th>ชนิดสัตว์</th>
                              <th>เรื่องที่ขอนัดหมาย</th>
                              <th>วันที่ขอนัดหมาย</th>
                              <th>จัดการ</th>
                          </tr>
                      </tfoot>
                      <tbody>
                      <?php
                        if(count($data) > 0 ) {
                        $count = 0;
                        foreach ($data['data3'] as $key => $value) {
                        $count ++ ;
                      ?>
                      <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $value['first_name'] . " " . $value['last_name']; ?></td>
                            <td><?php echo $value['appo_animal']; ?></td>
                            <td><?php echo $value['appo_name']; ?></td>
                            <td><?php echo $value['appo_date'] .' '.$value['appo_time']; ?></td>
                            <td>
                                <a href = "<?php echo $a.'index.php/Admin/Appointment/detailAppo/'.$value['id'].'/2'; ?>" class="btn btn-sm btn-info">ดูรายละเอียด</a>
                                <a href = "<?php echo $a.'index.php/Admin/Appointment/deleteAppo/'.$value['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('คุณต้องการที่จะลบหรือไม่');">ลบ</a>
                            </td>
                      </tr>
                      <?php } } ?>
                      </tbody>
              </table>
                  </div>
                   <div class="tab-pane fade" id="completOrder">
                  <table id="example4" class="display" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>ลำดับ</th>
                              <th>ชื่อ</th>
                              <th>เลขที่นัดหมาย</th>
                              <th>ชนิดสัตว์</th>
                              <th>เรื่องที่ขอนัดหมาย </th>
                              <th>วันที่ขอนัดหมาย</th>
                              <th>จัดการ</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>ลำดับ</th>
                              <th>ชื่อ</th>
                              <th>เลขที่นัดหมาย</th>
                              <th>ชนิดสัตว์</th>
                              <th>เรื่องที่ขอนัดหมาย</th>
                              <th>วันที่ขอนัดหมาย</th>
                              <th>จัดการ</th>
                          </tr>
                      </tfoot>
                      <tbody>
                      <?php
                        if(count($data) > 0 ) {
                        $count = 0;
                        foreach ($data['data2'] as $key => $value) {
                        $count ++ ;
                        if($value['flag'] != 0 ) { 
                      ?>
                      <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $value['first_name'] . " " . $value['last_name']; ?></td>
                            <td><?php echo $value['trans_id']; ?></td>
                            <td><?php echo $value['appo_animal']; ?></td>
                            <td><?php echo $value['appo_name']; ?></td>
                            <td><?php echo $value['appo_date'] .' '.$value['appo_time']; ?></td>
                            <td>
                                <a href = "<?php echo $a.'index.php/Admin/Appointment/detailAppo/'.$value['id'] . '/1'; ?>" class="btn btn-sm btn-info">ดูรายละเอียด</a>
                                <a href = "<?php echo $a.'index.php/Admin/Appointment/deleteAppo/'.$value['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('คุณต้องการที่จะลบหรือไม่');">ลบ</a>
                                <?php if($value['flag'] == 0 ){ ?>
                                  <span class="label label-warning">ยังไม่เข้ารับบริการ</span>
                                <?php } else { ?>
                                  <span class="label label-success">เข้ารับบริการแล้ว</span>
                                <?php } ?>
                            </td>
                      </tr>
                      <?php } } } ?>
                      </tbody>
              </table>
                  </div>
                                    <div class="tab-pane fade" id="unCompletOrder">
                  <table id="example5" class="display" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>ลำดับ</th>
                              <th>ชื่อ</th>
                              <th>เลขที่นัดหมาย</th>
                              <th>ชนิดสัตว์</th>
                              <th>เรื่องที่ขอนัดหมาย </th>
                              <th>วันที่ขอนัดหมาย</th>
                              <th>จัดการ</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>ลำดับ</th>
                              <th>ชื่อ</th>
                              <th>เลขที่นัดหมาย</th>
                              <th>ชนิดสัตว์</th>
                              <th>เรื่องที่ขอนัดหมาย</th>
                              <th>วันที่ขอนัดหมาย</th>
                              <th>จัดการ</th>
                          </tr>
                      </tfoot>
                      <tbody>
                      <?php
                        if(count($data) > 0 ) {
                        $count = 0;
                        foreach ($data['data2'] as $key => $value) {
                        $count ++ ;
                        if($value['flag'] == 0 ) { 
                      ?>
                      <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $value['first_name'] . " " . $value['last_name']; ?></td>
                            <td><?php echo $value['trans_id']; ?></td>
                            <td><?php echo $value['appo_animal']; ?></td>
                            <td><?php echo $value['appo_name']; ?></td>
                            <td><?php echo $value['appo_date'] .' '.$value['appo_time']; ?></td>
                            <td>
                                <a href = "<?php echo $a.'index.php/Admin/Appointment/detailAppo/'.$value['id'] . '/1'; ?>" class="btn btn-sm btn-info">ดูรายละเอียด</a>
                                <a href = "<?php echo $a.'index.php/Admin/Appointment/deleteAppo/'.$value['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('คุณต้องการที่จะลบหรือไม่');">ลบ</a>
                                <?php if($value['flag'] == 0 ){ ?>
                                  <span class="label label-warning">ยังไม่เข้ารับบริการ</span>
                                <?php } else { ?>
                                  <span class="label label-success">เข้ารับบริการแล้ว</span>
                                <?php } ?>
                            </td>
                      </tr>
                      <?php } } }?>
                      </tbody>
              </table>
                  </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
<script src="<?php echo $a; ?>assets/admin/js/jquery.js"></script>
<script>
  $(document).ready(function(){
    var str = "<?php echo isset($flag) ? $flag : ''; ?>";
    if(str == 'cancel'){
      $('#btnCancel').click();
    }
  });
</script>
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

            $('#example2').DataTable( {
                "paging":   true,
                "ordering": true,
                "info":     false
            } );

            $('#example3').DataTable( {
                "paging":   true,
                "ordering": true,
                "info":     false
            } );

            $('#example4').DataTable( {
                "paging":   true,
                "ordering": true,
                "info":     false
            } );


            $('#example5').DataTable( {
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