<?php $a =  base_url(); ?>
<div class="container">
    <div class="row">
        <?php
          $this->load->view('include/menu');
        ?>
         <div class="col-md-9">
            <div class="intro-text">
                <h1 style = "color:#373a47;" class="name">ข้อมูลข่าวสารประชาสัมพันธ์ของคลินิก</h1>
            </div>
            <hr>
          <div style = 'text-align: left;!important;'>

                <?php if(count($data) > 0) {
                    foreach ($data as $key => $value) {

                    $max_length = 220;
                    $s = $value['details'];
                    if (strlen($s) > $max_length)
                    {
                        $offset = ($max_length - 3) - strlen($s);
                        $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';
                    }

                 ?>
                 <div class="col-md-9 blogShort">
                     <h1 style = "color:#373a47;"><?php echo $value['title']; ?></h1>
                     <article><span>
                          <?php echo $s; ?>
                         </span>
                     </article>
                     <a class="btn btn-blog pull-right marginBottom10" href = "<?php echo $a; ?>index.php/Customer/News/get_news_detail/<?php echo $value['id']; ?>" >อ่านเพิ่มเติม</a> 
                 </div>
                 <?php } } else { ?>

                 <p>ไม่มีข่าวสารของคลินิก</p>
                 <?php } ?>
               <div class="col-md-12 gap10"></div>
             </div>
          </div>
         </div>    
    </div>
  </div>
</div>    
</div>

<div class="modal fade" id="detailModal1" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" style="color:#999999!important;">
    <form name = "registration" id = "registration" method = "post">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span  id = "closeRegisPanel" aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h2 style = "color:#373a47;" class="modal-title" id="lineModalLabel">อ่านเพิ่มเติม</h2>
        </div>
        <h4 id = 'headModal' style = "color:#373a47;text-align: left;!important;margin-left:10px"></h4>
        <div style = "text-align: left;!important;margin-left:10px" class="modal-body" id = "booking_details">
            
        </div>
        <div class="fb-comments" id = "cmm_face" data-href="https://developers.facebook.com/docs/plugins/comments#configurator/clinic/animals/comment/1" data-width="550" data-numposts="5"></div>
    </form>
    </div>
  </div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>


    $('.marginBottom10').click(function(){
        var id = $(this).attr('id');
        // $('#cmm_face').attr('data-href', 'https://developers.facebook.com/docs/plugins/comments#configurator/clinic/animals/' + id );
        if(id == 1){
            var head = "ลูกค้าเอเชียเพทออนไลน์ลด 20 %";
            var txt =  'ลูกค้าเอเชียเพทออนไลน์ลด 20 % กรณีเป็นสามาชิกออนไลน์เมื่อมาที่คลินิกและแสดง user ที่ใช้ในระบบสามารถลดทันที 20 % หมดเขต สิ้นเดือนนี้';
        }else if(id == 2){
            var head = "แจ้งปิดปรับปรุงระบบ";
            var txt =  'แจ้งปิดปรับปรุงระบบในวันที่ 31 ธันวาคมในช่วงเวลา 00:00 - 06:00 ขออภัยในความไม่สะดวก หากเสร็จเร็วกว่ากำหนดจะเปิดใช้บริการก่อนกำหนด';
        }else{
            var head = "ลูกค้าที่ใช้ TRUEMOVEH รายเดือน";
            var txt =  'ลูกค้าที่ใช้ truemoveH รายเดือนสามารถนำสลิปมามาแสดงที่เค้าเตอร์ ของคลินิก รับสิทธิพิเศษมากมาย ส่วนลูกค้าแบบเติมเงิน เพียงแสดงยอดเงินในโทรศัพท์ของคุณ 500 บาทขึ้นไปก็ได้ส่วนลดเช่นกัน ขอบคุณที่ใช้บริการ truemoveH';
        }
        $('#headModal').text(head);
        $('#booking_details').text(txt);
    });

</script>

<style>
.modal-body {
    position: relative;
    padding: 10px;
}
header .container {
    padding-top: 130px!important;
    padding-bottom: 200px;
}
.blogShort{ border-bottom:1px solid #ddd;}
.add{background: #333; padding: 10%; height: 300px;}


.btn-blog {
    color: #ffffff;
    background-color: #000066;
    border-color: #000066;
    border-radius:0;
    margin-bottom:10px
}
.btn-blog:hover,
.btn-blog:focus,
.btn-blog:active,
.btn-blog.active,
.open .dropdown-toggle.btn-blog {
    color: white;
    background-color:#34ca78;
    border-color: #34ca78;
}
 h2{color:#34ca78;}
 .margin10{margin-bottom:10px; margin-right:10px;}
 

</style>