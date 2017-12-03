        <?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            การเข้าใช้บริการ <small>บันทึกการเข้าใช้บริการและค่าใช้จ่าย</small>
                        </h1>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-6 col-md-offset-3">

                        <!-- Search Form -->
                        <form method = "post" role="form" action = "<?php echo $a.'index.php/Service/Service/searchAppo/'; ?>" id = "searchAppo" name = "searchAppo"> 
                            <div class="row">
                              <h2 class="text-center">ค้นหาโดย .. </h2>
                                <div class="radio">
                                  <label><input value="1" checked type="radio" name="typeOfSearch">เลขที่นัดหมาย</label>
                                </div>
                                <div class="radio">
                                  <label><input value="2" type="radio" name="typeOfSearch">ชื่อลูกค้า</label>
                                </div>
                                <div class="radio">
                                  <label><input value="3" type="radio" name="typeOfSearch">ชื่อสัตว์เลี้ยง</label>
                                </div>
                            </div>
                        <!-- Search Field -->
                            <div class="row">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control" type="text" id = "search" name="search" placeholder="ค้นหา"/>
                                        <span class="input-group-btn">
                                            <button id = 'btnSearch' class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"><span style="margin-left:10px;">ค้นหา</span></button>
                                        </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                        <!-- End of Search Form -->
                            
                    </div>
                </div>
            <!-- /.container-fluid -->
            <?php if(count($dataSearch) > 0) { ?>
            <div class="container">
              <h2>รายการนัดหมาย</h2>
              <p>รายการนัดหมายที่ได้รับการอนุมัติแล้ว</p>            
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ชื่อ-นามสกุล</th>
                    <th>เลขที่นัดหมาย</th>
                    <th>วันที่นัดหมาย</th>
                    <th>รับบริการ</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($dataSearch as $key => $value) { ?>
                  <tr>
                    <td><?php echo "คุณ" . $value['first_name'] . " " . $value['last_name'] ?></td>
                    <td><?php echo $value['trans_id']; ?></td>
                    <td><?php echo $value['appo_date']. " " . $value['appo_time']; ?></td>
                    <td><a class="btn btn-info" href='<?php echo $a; ?>index.php/Service/Service/serviceCharge/<?php echo $value['id']?>'>เข้ารับบริการ</a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <?php }?>
        </div>
  <script>
  
  $('#btnSearch').click(function(){
     var search = document.getElementById('search').value;
     if(search == ""){
        alert('กรุณากรอกข้อมูลการค้นหา');
        return false;
     }else{
        $('#searchAppo').submit();
     }
  });
  
  </script>