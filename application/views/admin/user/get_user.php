        <?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                      <?php if($role == 'user'){ ?>
                        <h1 class="page-header">
                            จัดการข้อมูลลูกค้า <small></small>
                        </h1>
                      <?php }else { ?>
                        <h1 class="page-header">
                            จัดการข้อมูลผู้ดูแลระบบ <small></small>
                        </h1>
                      <?php }?>
                    </div>
                </div>
                <?php if($role == 'admin'){ ?>
                <a href = "<?php echo $a.'index.php/Admin/User/addAdmin/'; ?>" class="btn btn-sm btn-info">เพิ่มผู้ดูแลระบบ</a><br/><br/>
                <?php }?>
                <!-- /.row -->
              <table id="example" class="display" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>ลำดับ</th>
                              <th>ชื่อ</th>
                              <th>นามสกุล</th>
                              <th>ชื่อผู้ใช้</th>
                              <th>เบอร์โทร</th>
                              <th>จัดการ</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>ลำดับ</th>
                              <th>ชื่อ</th>
                              <th>นามสกุล</th>
                              <th>ชื่อผู้ใช้</th>
                              <th>เบอร์โทร</th>
                              <th>จัดการ</th>
                          </tr>
                      </tfoot>
                      <tbody>
                      <?php
                        if(count($data) > 0 ) {
                        $count = 0;
                        foreach ($data as $key => $value) {
                        $count ++ ;
                      ?>
                      <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $value['first_name']; ?></td>
                            <td><?php echo $value['last_name']; ?></td>
                            <td><?php echo $value['username']; ?></td>
                            <td><?php echo $value['mobile']; ?></td>
                            <td>
                                <?php if($role == 'admin'){ ?>

                                <a href = "<?php echo $a.'index.php/Admin/User/editAdmin/'.$value['id'].'/admin'; ?>" class="btn btn-sm btn-success">แก้ไข</a>
                                <a href = "<?php echo $a.'index.php/Admin/User/deleteUser/'.$value['id'].'/admin'; ?>" class="btn btn-sm btn-danger" onclick="return confirm('คุณต้องการที่จะลบหรือไม่');">ลบ</a>

                                <?php } else { ?>
                                <a href = "<?php echo $a.'index.php/Admin/User/getListUserActivity/'.$value['id']; ?>" class="btn btn-sm btn-info">ประวัติการทำรายการของลูกค้า</a>
                                <a href = "<?php echo $a.'index.php/Admin/User/editUser/'.$value['id']; ?>" class="btn btn-sm btn-success">แก้ไข</a>
                                <a href = "<?php echo $a.'index.php/Admin/User/deleteUser/'.$value['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('คุณต้องการที่จะลบหรือไม่');">ลบ</a>
                                <?php } ?>
                            </td>
                      </tr>
                      <?php } } ?>
                      </tbody>
              </table>

            </div>
            <!-- /.container-fluid -->

        </div>
<script src="<?php echo $a; ?>assets/admin/js/jquery.js"></script>
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