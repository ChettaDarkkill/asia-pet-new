        <?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ทำรายการสำเร็จ <small></small>
                        </h1>
                    </div>
                </div>

              <a id = 'backToMain' href="<?php echo $a.'index.php/Service/Service/getService'; ?>" class="btn btn-sm btn-warning">กลับหน้าหลัก</a>
              <div class="container" id = 'ccc'>
                  <div class="row">
                      <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                          <div class="row">
                              <div class="text-center">
                                  <h1>ใบเสร็จรับเงิน</h1>
                              </div>
                              </span>
                              <table class="table table-hover">
                                  <thead>
                                      <tr>
                                          <th>รายการ</th>
                                          <th>จำนวน</th>
                                          <th class="text-center">ราคา</th>
                                          <th class="text-center">รวม</th>
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
                                      <tr>
                                          <td class="col-md-9"><em><?php echo $value['product_name']; ?></em></h4></td>
                                          <td class="col-md-1" style="text-align: center"> <?php echo $value['product_amt']; ?> </td>
                                          <td class="col-md-1 text-center"><?php echo $value['price']; ?></td>
                                          <td class="col-md-1 text-center"><?php echo $total_option_show; ?></td>
                                      </tr>
                                      <?php } } }?>
                                    <?php if(count($data) > 0) { ?>
                                    <?php foreach ($data as $key2 => $value2) { 
                                        if($value2['order_type'] == 'm') { 
                                        $total_main  += intval($value2['service_bath']);
                                    ?>
                                      <tr>
                                          <td class="col-md-9"><em><?php echo $value2['service_detail']; ?></em></h4></td>
                                          <td class="col-md-1" style="text-align: center">  </td>
                                          <td class="col-md-1 text-center"></td>
                                          <td class="col-md-1 text-center"><?php echo $value2['service_bath']; ?></td>
                                      </tr>
                                    <?php } } }?>
                                      <tr>
                                          <td>   </td>
                                          <td>   </td>
                                          <td class="text-right"><h4><strong>รวม: </strong></h4></td>
                                          <td class="text-center text-danger"><h4><strong><?php echo intval($total_main + $total_option); ?></strong></h4></td>
                                      </tr>
                                  </tbody>
                              </table>
                              <button onclick = "myFunction()" type="button" id = "ppp" class="btn btn-success btn-lg btn-block">
                                  ปลิ้นใบเสร็จ  <span class="glyphicon glyphicon-chevron-right"></span>
                              </button></td>
                          </div>
                          <center><span>เอเชียเพทออนไลน์ เลขที่ 320/12 ถนนพหลโยธิน ตำบลนครสวรรค์ตก อำเภอเมือง จังหวัดนครสวรรค์</span></center>
                      </div>
                  </div>
        </div>
<script>
function myFunction() {
    $('#backToMain').hide();
    $('#ppp').hide();
    window.print();
    $('#backToMain').show();
    $('#ppp').show();
}
</script>
