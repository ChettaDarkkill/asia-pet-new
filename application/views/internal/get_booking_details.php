               <?php $a =  base_url(); ?>
               <table class="table table-striped table-condensed">
                    <thead>
                    <tr>
                        <th>เวลา</th>
                        <th>สถานะ</th>
                        <th>จอง</th>                                      
                    </tr>
                </thead>  
                <tbody style="text-align: left!important">
                    <?php
                      foreach ($arrDdt as $key => $value) {
                     ?>
                    <tr>
                      <td><?php echo $key;?></td>
                      <td><?php  echo in_array($value, $timeBook) ? "<span style='color:red'>จองแล้ว</span>" : "ว่าง" ?></td>
                      <td>
                          <?php
                            if(!in_array($value, $timeBook)) {
                          ?>
                            <a href = "/index.php/Customer/Customer/get_appointment_advance?dd=<?php echo $dateSearch?>&tt=<?php echo $value;?>" class = "btn btn-primary">จอง</a>  
                          <?php } else {  
                             if(getIfUserAppo($dateSearch, $value) == 1) {
                            ?>
                            <a href= "/index.php/Customer/Customer/delete_appointment_advance?dd=<?php echo $dateSearch?>&tt=<?php echo $value;?>" onclick="return confirm('คุณต้องการยกเลิกจริงหรือไม่?')" class = "btn btn-danger">ยกเลิก</a>  
                            <a href="javascript:void(0);" class="btn btn-success" onClick=window.open("<?php echo $a.'index.php/Customer/AppointmentAdvance/printTicket/'.getAppoId($dateSearch, $value); ?>","Ratting","width=500,height=700,0,status=0,scrollbars=1");>ปริ้นใบนัด</a> 
                          <?php } else {  ?>
                            คุณ <?php echo getNameBook($dateSearch, $value); ?>
                          <?php } } ?>
                      </td>                   
                    </tr>
                    <?php } ?>
                </tbody>
              </table>