
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <br/>
  <div style="text-align: center;">
    <h1>รายงานสินค้าคงเหลือ<br>
    </h1>
    <p>เอเชียเพทออนไลน์ เลขที่ 320/12 ถนนพหลโยธิน ตำบลนครสวรรค์ตก อำเภอเมือง จังหวัดนครสวรรค์</p>
    <p>ข้อมูลวันที่ <?php echo date('d'). ' ' . showLongDate(date('m'),date('Y'),'th'); ?></p>
  </div>
  <div style="width: 80%; margin: 0 auto; text-align: center;">
  <table border="1" cellspacing="0" style="width:100%;">
        <thead>
            <tr style="background-color: #ccc;">
        <th>ชื่อสินค้า</th>
        <th>รายละเอียดสินค้า</th>
        <th>คงเหลือ</th>
        <th>หน่วย</th>
        <th>ราคา</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>
