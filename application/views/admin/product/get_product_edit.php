        <?php $a =  base_url(); ?>
        <?php 
          $data = $data[0];
        ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            แก้ไขสินค้า<small></small>
                        </h1>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
     <!-- /.row -->
                <div class="container">
                <div class="row">
                    <form action = "<?php echo $a.'index.php/Product/Product/postProductEdit/'; ?>" class="form-horizontal" method = "post" id = "registration" name = "registration">
                      <input id="id_hide" name = "id_hide" type="hidden" value = "<?php echo $data['id']?>">
                        <fieldset>
                        <!-- Form Name -->
                        <!-- <legend></legend> -->

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="nom">ชื่อสินค้า</label>  
                          <div class="col-md-6">
                          <input id="product_name" name = "product_name" type="text" placeholder="ชื่อสินค้า" class="form-control input-md" value = "<?php echo $data['product_name']; ?>">
                            
                          </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="info_candidature">รายละเอียดสินค้า </label>
                          <div class="col-md-6">                     
                            <textarea class="form-control" id="product_detail" name = "product_detail" placeholder="รายละเอียดสินค้า"><?php echo $data['product_detail']; ?></textarea>
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="nom">จำนวน</label>  
                          <div class="col-md-6">
                          <input id="amt" readonly name = "amt" type="number" placeholder="จำนวน" class="form-control input-md" value = "<?php echo $data['amt']; ?>">
                            
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="nom">ราคาสินค้าต่อหน่วย</label>  
                          <div class="col-md-6">
                          <input id="price" name = "price" type="number" placeholder="ราคาสินค้า" class="form-control input-md" value = "<?php echo $data['price']; ?>">
                            
                          </div>
                        </div>

                                                <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="nom">หน่วยสินค้า</label>  
                          <div class="col-md-6">
                          <input id="unit" name = "unit" type="text" placeholder="หน่วยสินค้า" class="form-control input-md" value = "<?php echo $data['unit']; ?>">
                            
                          </div>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="info_candidature">สถานะ </label>
                          <div class="col-md-6">                     
                            <div class="radio">
                              <label><input <?php echo $data['flag'] == 1 ? "checked" : '' ; ?>  id = 'flag' name = 'flag' type="radio" value = '1'>ใช้งาน</label>
                            </div>
                            <div class="radio">
                              <label><input <?php echo $data['flag'] == 2 ? "checked" : '' ; ?> id = 'flag' name = 'flag' type="radio" value = '2'>ไม่ใช้งาน</label>
                            </div>
                          </div>
                        </div>



                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="twitter"></label>  
                          <div class="col-md-6">
                          <button type="submit" id="saveRegis" class="btn btn-primary" data-action="save" role="button">บันทึก</button>
                          <a class="btn btn-warning" href='<?php echo $a; ?>index.php/Product/Product/getProduct'>ย้อนกลับ</a>
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
          product_name: "required",
          product_detail: "required",
          price: "required",
          amt: "required",
          unit: "required"
        },
        
        // Specify the validation error messages
        messages: {
          product_name: "<span style = 'color:red'>กรุณากรอก ชื่อสินค้า</span>",
          product_detail: "<span style = 'color:red'>กรุณากรอก รายละเอียดสินค้า</span>",
          price: "<span style = 'color:red'>กรุณากรอก ราคา</span>",
          amt: "<span style = 'color:red'>กรุณากรอก จำนวน</span>",
          unit: "<span style = 'color:red'>กรุณากรอก หน่วยสินค้า</span>"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>

