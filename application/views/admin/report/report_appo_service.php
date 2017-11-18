        <?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            รายงานการนัดหมายล่วงหน้า<small></small>
                        </h1>
                    </div>
                </div>
            </div>
        <a href="<?php echo $a; ?>index.php/Report/ReportAppoProduct/goReport" class="btn btn-lg btn-success">ออกรายงาน</a>
        <a onclick="goBack()" class="btn btn-lg btn-warning">ย้อนกลับ</a><br/><br/>
        <div class = "container">
            <div class = "row">
             <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ</th>
                    <th>ชนิด</th>
                    <th>วันที่นัดหมาย</th>
                    <th>เรื่องที่นัดหมาย</th>
                    <th>สถานะ</th>
                    <th>หมายเลขนัดหมาย</th>
                  </tr>
                </thead>
        <tbody>
            <?php
              $count = 0;
              if(count($data) > 0) {
              foreach ($data as $key => $value) {
              $count ++ ;
              if($value['status_booking'] == 1){
                $txt = "รออนุมัติ";
              }else if($value['status_booking'] == 2){
                $txt = "ยกเลิก";
              }else if($value['status_booking'] == 3){
                $txt = "อนุมัติ";
              }else{
                $txt = "";
              }
            ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $value['first_name'] ." ". $value['last_name']; ?></td>
                <td><?php echo $value['appo_animal']; ?></td>
                <td><?php echo $value['appo_date']; ?></td>
                <td><?php echo $value['appo_name']; ?></td>
                <td><?php echo $txt; ?></td>
                <td><?php echo $value['trans_id']; ?></td>
            </tr>
            <?php } } ?>
        </tbody>
              </table>
            </div>
        </div>
        </div>
