        <?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            รายงานการรักษาและใช้บริการ<small></small>
                        </h1>
                    </div>
                </div>
            </div>
        <a href="<?php echo $a; ?>index.php/Report/ReportService/goReport" class="btn btn-lg btn-success">ออกรายงาน</a>
        <a onclick="goBack()" class="btn btn-lg btn-warning">ย้อนกลับ</a><br/><br/>
        <div class = "container">
            <div class = "row">
             <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ</th>
                    <th>ชนิด</th>
                    <th>เรื่องนัดหมาย</th>
                    <th>รายละเอียดการรักษา</th>
                    <th>ราคา</th>
                    <th>สถานะ</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $count = 0 ;
                    if(count($data) > 0 ) { 
                        foreach ($data as $key => $value) {
                            $count++;
                        if($value['flag'] == 1){
                            $txt = 'สำเร็จ';
                        }else{
                            $txt = 'ไม่สำเร็จ';
                        }
                  ?>
                  <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $value['first_name'] .' '. $value['last_name']; ?></td>
                    <td><?php echo $value['appo_animal']; ?></td>
                    <td><?php echo $value['appo_name']; ?></td>
                    <td><?php echo $value['service_detail']; ?></td>
                    <td><?php echo $value['service_bath']; ?></td>
                    <td><?php echo $txt; ?></td>
                  </tr>
                  <?php }  } ?>
                </tbody>
              </table>
            </div>
        </div>
        </div>
