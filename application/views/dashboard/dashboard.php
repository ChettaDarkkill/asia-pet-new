<?php $a =  base_url(); ?>

<div class="container">
    <div class="row">
            <div class="intro-text">
                <h2 class="name">เลือกเมนูที่ต้องการใช้งาน</h2>
                <h1 class="name">Clinic pet Online System</h1>
                <hr class="star-light">
                <span class="skills">ระบบการบริการคลินิกสัตว์เลี้ยงเอเชียเพทแบบออนไลน์</span>
            </div>
    </div>
    <br/>
    <div class="row text-center" style="margin-bottom: 20px;">
            <a href = "<?php echo $a; ?>index.php/Customer/Customer/get_appointment" type="button" class="btn btn-circle" style="background-color: rgb(38, 128, 184);">ตรวจสอบการนัดหมาย</a>
            <a href = "<?php echo $a; ?>index.php/Customer/Customer/get_customer_info" type="button" class="btn btn-circle" style="background: rgb(29, 187, 234);"> แก้ไขและจัดการข้อมูลส่วนตัว</a>
            <a href = "<?php echo $a; ?>index.php/Customer/Customer/get_appointment_advance" type="button" class="btn btn-circle"style="background-color: rgb(228, 80, 19);">ขอนัดหมายการเข้ารับบริการล่วงหน้า</a>           
    </div>
    <div class="row text-center" style="margin-bottom: 20px;">
            <a href = "<?php echo $a; ?>index.php/Customer/Customer/see_appointment" type="button" class="btn btn-circle" style="background-color: rgb(38, 128, 184);">ปลิ้นใบนัด</a>
            <a href = "<?php echo $a; ?>index.php/Customer/Customer/edit_appointment"type="button" class="btn btn-circle" style="background: rgb(29, 187, 234);"> เปลี่ยนแปลง เวลา การนัดหมายล่วงหน้า</a>
            <a href = "<?php echo $a; ?>index.php/Customer/Customer/get_news" type="button" class="btn btn-circle"style="background-color: rgb(228, 80, 19);">ข้อมูลข่าวสารประชาสัมพันธ์ของคลินิก</a>       
    </div>
    
</div>