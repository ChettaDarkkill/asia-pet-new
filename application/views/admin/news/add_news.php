        <?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            เพิ่มข่าวสารของคลินิก<small></small>
                        </h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
     <!-- /.row -->
                <div class="container">
                <div class="row">
                    <form action = "<?php echo $a.'index.php/News/News/postNews/'; ?>" class="form-horizontal" method = "post" id = "registration" name = "registration">
                        <fieldset>
                        <!-- Form Name -->
                        <!-- <legend></legend> -->

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="nom">หัวข้อข่าว</label>  
                          <div class="col-md-6">
                          <input id="title" name = "title" type="text" placeholder="หัวข้อข่าว" class="form-control input-md" value = "">
                            
                          </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="info_candidature">รายละเอียดข่าว </label>
                          <div class="col-md-6">                     
                            <textarea class="form-control" id="details" name = "details" placeholder="รายละเอียดข่าว"></textarea>
                          </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="info_candidature">สถานะ </label>
                          <div class="col-md-6">                     
                            <div class="radio">
                              <label><input checked id = 'flag' name = 'flag' type="radio" value = '1'>ใช้งาน</label>
                            </div>
                            <div class="radio">
                              <label><input id = 'flag' name = 'flag' type="radio" value = '2'>หมดเขต</label>
                            </div>
                          </div>
                        </div>



                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="twitter"></label>  
                          <div class="col-md-6">
                          <button type="submit" id="saveRegis" class="btn btn-primary" data-action="save" role="button">บันทึก</button>
                          <a class="btn btn-warning" href='<?php echo $a; ?>index.php/News/News/getNews'>ย้อนกลับ</a>
                          </div>
                        </div>
                        </fieldset>
                        </form>
                    </div>    
                </div>
        </div>


          <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#registration").validate({
    
        // Specify the validation rules
        rules: {
          title: "required",
          details: "required"
        },
        
        // Specify the validation error messages
        messages: {
          title: "<span style = 'color:red'>กรุณากรอก หัวข้อข่าว</span>",
          details: "<span style = 'color:red'>กรุณากรอก รายละเอียดข่าว</span>"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>

