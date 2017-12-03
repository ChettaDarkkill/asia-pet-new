    <?php $a =  base_url(); ?>
    <?php
        $data = $data[0];
        $user = getUserData();
    ?>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $a; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo $a; ?>assets/js/jquery-1.12.4.js"></script>
    <div class="container">
      <div class="row">
        <h2 class="text-center">ใบนัด</h2>
                <div class="row">
                    <div class="col-md-2 text-center">
                    </div>
                     <div class="col-md-8 text-center">
                        <div class="box">
                            <div class="box-content">
                                <div style = 'text-align: left;!important; font-size:16px'>
                                <span><strong>เลขที่นัดหมาย : </strong></span><span><?php echo $data['trans_id']; ?></span><br/>
                                <span><strong>ชื่อ : </strong></span><span><?php echo $user['first_name'] . " " . $user['last_name'] ; ?></span><br/>
                                <span><strong>ที่อยู่ : </strong></span><span><?php echo $user['address']; ?></span><br/>
                                <span><strong>เบอร์ติดต่อ : </strong></span><span><?php echo $user['mobile']; ?></span><br/><hr/>
                                <span><strong>ประเภทสัตว์ : </strong></span><span><?php echo $data['appo_animal']; ?></span><br/>
                                <span><strong>เรื่องที่นัดหมาย : </strong></span><span><?php echo $data['appo_name']; ?></span><br/>
                                <span><strong>รายละเอียด : </strong></span><span><?php echo $data['appo_details']; ?></span><br/>
                                <span><strong>สถานะ : </strong></span>อนุมัติแล้ว<span><br/><hr/>
                                <span><strong>วัน - เวลา ที่นัดหมาย</strong></span><br/><br/>
                                </div>
                                <div class="agenda">
                                    <div class="table-responsive">
                                        <table class="table table-condensed table-bordered">
                                                <tr>
                                                    <th><center>วันที่</center></th>
                                                    <th><center>เวลา</center></th>
                                                </tr>
                                                <tr>
                                                    <td class="agenda-date" class="active" rowspan="1">
                                                        <div><center><?php echo $data['appo_date']; ?></center></div> 
                                                    </td>
                                                    <td class="agenda-time">
                                                        <center><?php echo $data['appo_time']; ?></center>
                                                    </td>
                                                </tr>
                                        </table>
                                    </div>
                                </div>
                                <span style = "color:red"> *** กรุณามาให้ตรงเวลาที่นัดหมายและนำใบนัดหมายมาด้วยทุกครั้งเพื่อความสะดวกในการให้บริการ</span><br/>
                                <span> สถานที่ : เอเชียเพทออนไลน์ เลขที่ 320/12 ถนนพหลโยธิน ตำบลนครสวรรค์ตก อำเภอเมือง จังหวัดนครสวรรค์</span>
                                <br/><br/>
                                <a id = "print" onclick="myFunction()" class="btn btn-block btn-primary">ปริ้นใบนัด</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                    </div>
                </div>           
            </div>
      </div>
    <center>
        <script>
        function myFunction() {
            $('#print').hide();
            window.print();
            $('#print').show();
        }
        </script>
    </center>
    <style>
        .agenda {  }

        /* Dates */
        .agenda .agenda-date { width: 170px; }
        .agenda .agenda-date .dayofmonth {
          width: 40px;
          font-size: 36px;
          line-height: 36px;
          float: left;
          text-align: right;
          margin-right: 10px; 
        }
        .agenda .agenda-date .shortdate {
          font-size: 0.75em; 
        }


        /* Times */
        .agenda .agenda-time { width: 140px; } 


        /* Events */
        .agenda .agenda-events {  } 
        .agenda .agenda-events .agenda-event {  } 

        @media (max-width: 767px) {
            
        }
    </style>