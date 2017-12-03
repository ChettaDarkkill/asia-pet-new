<?php $a =  base_url(); ?>
<div class="container">
    <div class="row">
        <?php
          $this->load->view('include/menu');
          $data = $data[0];
        ?>
         <div class="col-md-9">
            <div class="intro-text">
                <h1 style = "color:#373a47;" class="name"><?php echo $data['title']; ?></h1>
            </div>
            <hr>
          <div style = 'text-align: left;!important;'>
              <span style="margin-left:50px!important"><?php echo  $data['details']; ?></span>
             </div>
          </div>
          <br/>
          <br/>
          <div class="fb-comments" id = "cmm_face" data-href="https://developers.facebook.com/docs/plugins/comments#configurator/clinic/animals/comment/<?php echo  $data['id']; ?>" data-width="844" data-numposts="5"></div>
         </div>    
    </div>
  </div>
</div>    
</div>




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
    padding-bottom: 250px;
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