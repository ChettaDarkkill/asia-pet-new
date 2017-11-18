

<!-- <h2><button type="button" class="btn btn-success">ปลิ้นใบนัด</button></h2> -->
<!--     <p class="lead">
         ปลิ้นใบนัดหมายเพื่อนำไปยืนยันที่คลินิกตามวันที่คุณนัดหมาย
    </p> -->
    <div class="alert alert-info">
        <h3>ประเภทสัตว์</h3>
        <p><?php echo $data[0]['appo_animal']; ?></p>
    </div>
    <div class="alert alert-warning">
        <h3><?php echo $data[0]['appo_name']; ?></h3>
        <p><?php echo $data[0]['appo_details']; ?></p>
    </div>
    <?php if($data[0]['status_booking'] == 2) { ?>
        <div class="alert alert-danger">
        <h3><?php echo "สาเหตุที่ยกเลิก"; ?></h3>
        <p><?php echo $data[0]['reason']; ?></p>
    </div>
    <?php } else {?>
    <hr />
    <span style = "margin-left:0px!important">วัน - เวลา ที่นัดหมาย</span>
    <div class="agenda">
        <div class="table-responsive">
            <table class="table table-condensed table-bordered">
                    <tr>
                        <th><center>วันที่</center></th>
                        <th><center>เวลา</center></th>
                    </tr>
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div><?php echo $data[0]['appo_date']; ?></div> 
                        </td>
                        <td class="agenda-time">
                            <?php echo $data[0]['appo_time']; ?>
                        </td>
                    </tr>
            </table>
        </div>
    </div>
    <?php } ?>
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