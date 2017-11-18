        <?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            เลือกสินค้าเพิ่มเติม <small></small>
                        </h1>
                    </div>
                </div>
        <script>
        function goBack() {
            window.history.back();
            }
        </script>
    <form action = "<?php echo $a.'index.php/Service/Service/postOption/'; ?>" class="form-horizontal" method = "post" id = "registration" name = "registration">
                            <input type = 'hidden' value = "<?php echo $service_id;?>" id="service_id" name="service_id" />

    <div class="container" id="tourpackages-carousel">
      <div class="row">
        <div class="col-lg-12"><h1>สิ้นค้าทั้งหมด <a class="btn icon-btn btn-danger" onclick="return confirm('คุณต้องการที่จะยกเลิกจริงหรือไม่');" href ="<?php echo $a.'index.php/Admin/Admin'; ?>"><span></span> ยกเลิก</a>&nbsp;&nbsp;
        <button class="btn icon-btn btn-primary" type = 'submit'><span class="glyphicon btn-glyphicon glyphicon-plus img-circle"></span>ขั้นตอนต่อไป</button>
        <!-- <a class="btn icon-btn btn-primary" href="<?php echo $a.'index.php/Service/Service/confirmCharge/'; ?>"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle"></span> ขั้นตอนต่อไป</a> -->
        </h1></div>
        <?php if(count($data) > 0 ) { ?>
        <?php 
            foreach ($data as $key => $value) {
        ?>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="thumbnail">
              <div class="caption">
                <div class='col-lg-12'>
                    <span class="glyphicon glyphicon-credit-card"></span>
                    จำนวน&nbsp;<input value = "0" name = "product[<?php echo $value['id']?>]"  id = "product[<?php echo $value['id']?>]" type = 'number' min="0" max="<?php echo $value['amt']?>" ><?php echo " ".$value['unit']?>
                </div>
                <div class='col-lg-12 well well-add-card'>
                    <h4><?php echo $value['product_name']?></h4>
                </div>
                <div class='col-lg-12'>
                    <p>ราคาต่อหน่วย : <span style = "color:red"><?php echo $value['price']?></span></p>
                    <p class"text-muted">คงเหลือ <span style = "color:red"><?php echo $value['amt']?></span>  <?php echo $value['unit']?></p>
                </div>
                <!-- <button type="button" class="btn btn-primary btn-xs btn-update btn-add-card">Update</button> -->
                <?php 
                    if($value['amt'] < 10) {
                ?>
                <span class='glyphicon glyphicon-exclamation-sign text-danger pull-right icon-style'></span>
                <?php } ?>
            </div>
          </div>
        </div>
        <?php } ?>
        <?php } else { ?>
            <h2>ไม่พบสินค้า</h2>
        <?php } ?>
      </div><!-- End row -->
    </div><!-- End container -->
    </form>


   </div>
   <style>
.well {
    min-height: 20px;
    padding: 0px;
    margin-bottom: 20px;
    background-color: #D9D9D9;
    border: 1px solid #D9D9D9;
    border-radius: 0px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
    padding-left: 15px;
    border:0px;
}
.thumbnail .caption {
    padding: 9px;
    color: #333;
    padding-left: 0px;
    padding-right: 0px;
}
.icon-style
{
    margin-right:15px;
    font-size:18px;
    margin-top:20px;
}
p
{
    margin:3px;
}
.well-add-card
{
    margin-bottom:10px;
}
.btn-add-card
{
    margin-top:20px;
}
.thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 6px solid #D9D9D9;
    border-radius: 15px;
    -webkit-transition: border .2s ease-in-out;
    -o-transition: border .2s ease-in-out;
    transition: border .2s ease-in-out;
    padding-left: 0px;
    padding-right: 0px;
    height: 200px;
}
.btn
{
    border-radius:0px;
}
.btn-update
{
    margin-left:15px;
   </style>