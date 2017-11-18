
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <br/>
  <div style="text-align: center;">
    <h1>รายงานการนัดหมายล่วงหน้า<br>
    </h1>
    <p>เอเชียเพทออนไลน์ เลขที่ 320/12 ถนนพหลโยธิน ตำบลนครสวรรค์ตก อำเภอเมือง จังหวัดนครสวรรค์</p>
    <p>ข้อมูลวันที่ <?php echo date('d'). ' ' . showLongDate(date('m'),date('Y'),'th'); ?></p>
    <?php

    ?>
  </div>
  <div style="width: 80%; margin: 0 auto; text-align: center;">
  <table border="1" cellspacing="0" style="width:100%;">
        <thead>
            <tr style="background-color: #ccc;">
        <th>ลำดับ</th>
        <th>ชื่อ</th>
        <th>ชนิด</th>
        <th>วันที่นัดหมาย</th>
        <th>เรื่องที่นัดหมาย</th>
        <th>สถานะ</th>
        <th>หมายเลขนัดหมาย</th>
            </tr>
        </thead>
        <tbody>
            <?php
              $count = 0;
              if(count($all_product) > 0) {
              foreach ($all_product as $key => $value) {
              $count ++ ;
              if($value['status_booking'] == 1){
                $txt = "รออนุมัติ";
              }else if($value['status_booking'] == 2){
                $txt = "ยกเลิก";
              }else if($value['status_booking'] == 3){
                $txt = "อนุมัติ";
              }else{
                $txt = "";
              }
            ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $value['first_name'] ." ". $value['last_name']; ?></td>
                <td><?php echo $value['appo_animal']; ?></td>
                <td><?php echo $value['appo_date']; ?></td>
                <td><?php echo $value['appo_name']; ?></td>
                <td><?php echo $txt; ?></td>
                <td><?php echo $value['trans_id']; ?></td>
            </tr>
            <?php } } ?>
        </tbody>
    </table>
</div>
</body>
</html>
