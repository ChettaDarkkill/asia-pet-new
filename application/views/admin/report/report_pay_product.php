        <?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            รายงานการจำหน่ายสินค้า<small></small>
                        </h1>
                    </div>
                </div>
            </div>
        <a href="<?php echo $a; ?>index.php/Report/ReportPayProduct/goReport" class="btn btn-lg btn-success">ออกรายงาน</a>
        <a onclick="goBack()" class="btn btn-lg btn-warning">ย้อนกลับ</a><br/><br/>
        <div class = "container">
            <div class = "row">
             <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อสินค้า</th>
                    <th>รายละเอียด</th>
                    <th>จำหน่ายจำนวน</th>
                    <th>หน่วยละ</th>
                    <th>ราคารวม</th>
                    <th>วันที่ขาย</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $count = 0 ;
                    if(count($data) > 0 ) { 
                        foreach ($data as $key => $value) {
                            $count++;
                  ?>
                  <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $value['product_name']; ?></td>
                    <td><?php echo $value['product_detail']; ?></td>
                    <td><?php echo $value['product_amt']; ?></td>
                    <td><?php echo $value['price']. ' บาท'; ?></td>
                    <td><?php echo $value['product_amt_sum']. ' บาท'; ?></td>
                    <td><?php echo $value['created_dt_detail']; ?></td>
                  </tr>
                  <?php }  } ?>
                </tbody>
              </table>
            </div>
        </div>
        </div>
