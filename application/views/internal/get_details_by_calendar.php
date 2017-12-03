        <?php $a =  base_url(); ?>
        <div class="span5" style="color: #333">
              <table class="table table-striped table-condensed">
                    <thead>
                    <tr>
                        <th>ชื่อเจ้าของ</th>
                        <th>ชื่อสัตว์</th>
                        <th>เวลา</th>
                        <th>สถานะ</th>                                          
                    </tr>
                </thead>  
                <tbody>
                  <?php foreach ($data as $key => $value): ?>
                    <tr>
                        <td><?php echo $value['first_name']. ' ' . $value['last_name']?></td>
                        <td><?php echo $value['appo_animal']; ?></td>
                        <td><?php echo $value['appo_time']; ?></td>
                        <td>
                          <?php
                            if($value['idm'] == getUserData()['id']) { 
                          ?>
                                     <a href="javascript:void(0);" class="label label-primary" onClick=window.open("<?php echo $a.'index.php/Customer/AppointmentAdvance/printTicket/'.$value['id']; ?>","Ratting","width=810,height=700,0,status=0,scrollbars=1");>ปริ้นใบนัด</a>
                          <?php } else { ?> 
                            <span class="label label-success">จองแล้ว</span>
                          <?php } ?> 
                        </td>                                       
                    </tr>   
                  <?php endforeach ?>                                 
                </tbody>
              </table>
            </div>