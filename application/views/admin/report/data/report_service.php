
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <br/>
  <div style="text-align: center;">
    <h1>รายงานการรักษาและใช้บริการ<br>
    </h1>
    <p>เอเชียเพทออนไลน์ เลขที่ 320/12 ถนนพหลโยธิน ตำบลนครสวรรค์ตก อำเภอเมือง จังหวัดนครสวรรค์</p>
    <p>ข้อมูลวันที่ <?php echo date('d'). ' ' . showLongDate(date('m'),date('Y'),'th'); ?></p>
  </div>
  <div style="width: 80%; margin: 0 auto; text-align: center;">
  <table border="1" cellspacing="0" style="width:100%;">
        <thead>
            <tr style="background-color: #ccc;">
                <th>ลำดับ</th>
                <th>ชื่อ</th>
                <th>ชนิด</th>
                <th>เรื่องนัดหมาย</th>
                <th>รายละเอียดการรักษา</th>
                <th>ราคา</th>
                <th>สถานะ</th>
            </tr>
        </thead>
        <tbody>
                  <?php 
                    $count = 0 ;
                    if(count($all_product) > 0 ) { 
                        foreach ($all_product as $key => $value) {
                            $count++;
                        if($value['flag'] == 1){
                            $txt = 'สำเร็จ';
                        }else{
                            $txt = 'ไม่สำเร็จ';
                        }
                  ?>
                  <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $value['first_name'] .' '. $value['last_name']; ?></td>
                    <td><?php echo $value['appo_animal']; ?></td>
                    <td><?php echo $value['appo_name']; ?></td>
                    <td><?php echo $value['service_detail']; ?></td>
                    <td><?php echo $value['service_bath']; ?></td>
                    <td><?php echo $txt; ?></td>
                  </tr>
                  <?php }  } ?>
        </tbody>
    </table>
</div>
</body>
</html>
