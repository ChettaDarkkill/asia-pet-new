<?php $a =  base_url(); ?>
<script src="<?php echo $a; ?>assets/admin/js/bootstrap.min.js"></script>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ข้อมูลบริการ <small></small>
                        </h1>
                    </div>
                </div>

<div class="container">
    <h2>ยินดีต้องรับสู่ <small>เอเชียเพทออนไลน์</small></h2>
    <p class="lead">หมายเลขนัดหมาย : <span style = "color:red"><?php echo $data[0]['trans_id']; ?></span></p>
    <div class="row">
        <div class="col-sm-3">
            <a href="#" class="nav-tabs-dropdown btn btn-block btn-primary">Tabs</a>
            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
              <li class="active"><a href="#vtab1" data-toggle="tab">ข้อมูลการรักษาและค่าใช้จ่าย</a></li>
              <li><a href="#vtab2" data-toggle="tab">ข้อมูลลูกค้าและการนัดหมาย</a></li>
            </ul>
        </div>
        <div class="col-sm-9">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="vtab1">
                <div class="container">
                  <div class="row">
                        <!-- panel preview -->
                         <form action = "<?php echo $a.'index.php/Service/Service/postService/'; ?>" class="form-horizontal" method = "post" id = "registration" name = "registration">
                            <input type = 'hidden' value = "<?php echo $data[0]['id'];?>" id="appo_id" name="appo_id" />
                            <div class="col-sm-8">
                                <h4>กรุณากรอกรายละเอียดการเข้ารับบริการ:</h4>
                                <div class="panel panel-default">
                                    <div class="panel-body form-horizontal payment-form">
                                        <div class="form-group">
                                            <label for="concept" class="col-sm-3 control-label">ชื่อ-นามสกุล</label>
                                            <div class="col-sm-9">
                                                <input value = "<?php echo $data[0]['first_name']. " " . $data[0]['last_name']; ?>" readonly type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description" class="col-sm-3 control-label">เบอร์ติดต่อ</label>
                                            <div class="col-sm-9">
                                                <input value = "<?php echo $data[0]['mobile']; ?>" readonly type="text" class="form-control">
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label for="status" class="col-sm-3 control-label">รายละเอียดการรักษา</label>
                                            <div class="col-sm-9">
                                                 <textarea id = "service_detail" name = "service_detail" class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>  
                                         <div class="form-group">
                                            <label for="description" class="col-sm-3 control-label">ค่ารักษา</label>
                                            <div class="col-sm-9">
                                                <input value = "" id = "service_bath" name = "service_bath" type="number" class="form-control">
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <label for="description" class="col-sm-3 control-label"></label>
                                            <div class="col-sm-9">
                                                <a href="<?php echo $a.'index.php/Service/Service/getService'; ?>" class="btn btn-sm btn-warning" >ย้อนกลับ</a>
                                                <button type = "submit" class="btn btn-sm btn-success">ดำเนินการต่อ</button>
                                                <!-- <a href="<?php echo $a.'index.php/Service/Service/optionCharge/'; ?>" class="btn btn-sm btn-success" >ดำเนินการต่อ</a> -->
                                            </div>
                                        </div> 
                                       
                                    </div>
                                </div>            
                            </div> <!-- / panel preview -->    
                        </form>                 
                  </div>
                </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="vtab2">
                <div class="container">
                  <div class="row">
                        <!-- panel preview -->
                        <div class="col-sm-4">
                            <h4>ข้อมูลสมาชิก:</h4>
                            <div class="panel panel-default">
                                <div class="panel-body form-horizontal payment-form">
                                    <div class="form-group">
                                        <label for="concept" class="col-sm-3 control-label">ชื่อ-นามสกุล</label>
                                        <div class="col-sm-9">
                                            <input value = "<?php echo $data[0]['first_name']. " " . $data[0]['last_name']; ?>" readonly type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="col-sm-3 control-label">เบอร์ติดต่อ</label>
                                        <div class="col-sm-9">
                                            <input value = "<?php echo $data[0]['mobile']; ?>" readonly type="text" class="form-control">
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label for="amount" class="col-sm-3 control-label">ชื่อผู้ใช้</label>
                                        <div class="col-sm-9">
                                            <input value = "<?php echo $data[0]['username']; ?>" readonly type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="col-sm-3 control-label">ที่อยู่</label>
                                        <div class="col-sm-9">
                                             <textarea readonly class="form-control" rows="3"><?php echo $data[0]['address']; ?></textarea>
                                        </div>
                                    </div>  
                                </div>
                            </div>            
                        </div> <!-- / panel preview -->
                        <div class="col-sm-4">
                            <h4>ข้อมูลการจอง:</h4>
                            <div class="panel panel-default">
                                <div class="panel-body form-horizontal payment-form">
                                    <div class="form-group">
                                        <label for="concept" class="col-sm-3 control-label">ชนิดของสัตว์</label>
                                        <div class="col-sm-9">
                                            <input value = "<?php echo $data[0]['appo_animal']; ?>" readonly type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="col-sm-3 control-label">วันที่ขอนัดหมาย</label>
                                        <div class="col-sm-9">
                                            <input value = "<?php echo $data[0]['appo_date']; ?>" readonly type="text" class="form-control">
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label for="amount" class="col-sm-3 control-label">เวลาขอนัดหมาย</label>
                                        <div class="col-sm-9">
                                            <input value = "<?php echo $data[0]['appo_time']; ?>" readonly type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="amount" class="col-sm-3 control-label">เรื่องที่นัดหมาย</label>
                                        <div class="col-sm-9">
                                            <input value = "<?php echo $data[0]['appo_name']; ?>" readonly type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status" class="col-sm-3 control-label">รายละเอียดการนัดหมาย</label>
                                        <div class="col-sm-9">
                                             <textarea readonly class="form-control" rows="3"><?php echo $data[0]['appo_details']; ?></textarea>
                                        </div>
                                    </div>  
                                </div>
                            </div>            
                        </div> <!-- / panel preview -->                        
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>    
</div>
</div>
<!-- /.container-fluid -->
</div>
 <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#registration").validate({
    
        // Specify the validation rules
        rules: {
          service_detail: "required",
          service_bath: "required"
        },
        
        // Specify the validation error messages
        messages: {
          service_detail: "<span style = 'color:red'>กรุณากรอก รายละเอียดการรักษา</span>",
          service_bath: "<span style = 'color:red'>กรุณากรอก ค่ารักษา</span>"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
<script>
$('.nav-tabs-dropdown').each(function(i, elm) {
    
    $(elm).text($(elm).next('ul').find('li.active a').text());
    
});
  
$('.nav-tabs-dropdown').on('click', function(e) {

    e.preventDefault();
    
    $(e.target).toggleClass('open').next('ul').slideToggle();
    
});

$('#nav-tabs-wrapper a[data-toggle="tab"]').on('click', function(e) {

    e.preventDefault();
    
    $(e.target).closest('ul').hide().prev('a').removeClass('open').text($(this).text());
      
});
</script>
<style>
.nav-tabs-dropdown {
  display: none;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

.nav-tabs-dropdown:before {
  content: "\e114";
  font-family: 'Glyphicons Halflings';
  position: absolute;
  right: 30px;
}

@media screen and (min-width: 769px) {
  #nav-tabs-wrapper {
    display: block!important;
  }
}
@media screen and (max-width: 768px) {
    .nav-tabs-dropdown {
        display: block;
    }
    #nav-tabs-wrapper {
        display: none;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        text-align: center;
    }
   .nav-tabs-horizontal {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
   }
    .nav-tabs-horizontal  > li {
        float: none;
    }
    .nav-tabs-horizontal  > li + li {
        margin-left: 2px;
    }
    .nav-tabs-horizontal > li,
    .nav-tabs-horizontal > li > a {
        background: transparent;
        width: 100%;
    } 
    .nav-tabs-horizontal  > li > a {
        border-radius: 4px;
    }
    .nav-tabs-horizontal  > li.active > a,
    .nav-tabs-horizontal  > li.active > a:hover,
    .nav-tabs-horizontal  > li.active > a:focus {
        color: #ffffff;
        background-color: #428bca;
    }
}
<style>