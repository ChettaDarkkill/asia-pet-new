
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <br/>
  <div style="text-align: center;">
    <h1>รายงานการจำหน่ายสินค้า<br>
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
        <th>ชื่อสินค้า</th>
        <th>รายละเอียดสินค้า</th>
        <th>จำหน่ายจำนวน</th>
        <th>หน่วยละ</th>
        <th>ราคารวม</th>
        <th>วันที่ขาย</th>
            </tr>
        </thead>
        <tbody>
          <?php
               $count = 0;
               $amtS = 0;
               $totalS = 0;
            if(count($all_product) > 0) {
               foreach ($all_product as $key => $value) {
               $count++;
               $amtS = $amtS + $value['amt'];
               $totalS = $amtS + $value['price'];
          ?>
            <tr>
                <td><?php echo $count;?></td>
                <td><?php echo $value['product_name']; ?></td>
                <td><?php echo $value['product_detail']; ?></td>
                <td><?php echo $value['product_amt']; ?></td>
                <td><?php echo $value['price']. ' บาท'; ?></td>
                <td><?php echo $value['product_amt_sum']. ' บาท'; ?></td>
                <td><?php echo $value['created_dt_detail']; ?></td>
            </tr>
          <?php } } ?>
        </tbody>
    </table>
</div>
</body>
</html>
