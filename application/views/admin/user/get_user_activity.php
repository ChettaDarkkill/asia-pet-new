<?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ประวัติการทำรายการของลูกค้า <small></small>
                        </h1>
                    </div>
                </div>
                <?php
                    // echo '<pre>';
                    // print_r($data);
                    // die;
                ?>
                <!-- /.row -->
            <div class="container">
                <div class="col-sm-10">
                    <?php if(count($data) == 0) {?>

                    <div class="bs-calltoaction bs-calltoaction-default">
                        <div class="row">
                            <div class="col-md-9 cta-contents">
                                <div class="cta-desc">
                                    ไม่พบประวัติการทำรายการ
                                </div>
                            </div>
                            <div class="col-md-3 cta-button">
                                <!-- <a href="#" class="btn btn-lg btn-block btn-success">Go for It!</a> -->
                            </div>
                         </div>
                    </div>
                    <a class="btn btn-warning" href='<?php echo $a; ?>index.php/Admin/Admin/getUser'>ยกเลิก</a>
                    <?php } else { ?>
                    <?php foreach ($data as $key => $value) { 
                        if($value['status_booking'] == 1){
                            $dd = 'warning';
                            $tt = "รออนุมัติ";
                            $xx = '';
                        }else if($value['status_booking'] == 2){
                            $dd = 'danger';
                            $tt = "ยกเลิก";
                            $xx = '2';
                        }else{
                            $dd = 'success';
                            $tt = "สำเร็จ";
                             $xx = '1';
                        }

                    ?>
                    <div class="bs-calltoaction bs-calltoaction-<?php echo $dd;?>">
                        <div class="row">
                            <div class="col-md-9 cta-contents">
                                <h1 class="cta-title">ทำรายการวันที่ <?php echo $value['created_dt']?></h1>
                                <div class="cta-desc">
                                    <p>ชื่อ : <?php echo $value['first_name'] ." ". $value['last_name'];?></p>
                                    <p>สถานะ : <?php echo $tt;?> </p>
                                    <p>ชนิดของสัตว์ : <?php echo $value['appo_animal'];?> </p>
                                </div>
                            </div>
                            <div class="col-md-3 cta-button">
                                <a href="<?php echo $a.'index.php/Admin/Appointment/detailAppo/'. $value['id'] . '/' . $xx; ?>" class="btn btn-lg btn-block btn-<?php echo $dd;?>">ดูรายละเอียด</a>
                            </div>
                            <div class="col-md-3 cta-button">
                                <!-- <a href="#" class="btn btn-lg btn-block btn-success">Go for It!</a> -->
                            </div>
                         </div>
                    </div>
                    <?php } } ?>
                </div>
            </div>
           </div>    
         </div>
            </div>
            <!-- /.container-fluid -->
        </div>
  <!-- jQuery Form Validation code -->
  <style>
.bs-calltoaction{
    position: relative;
    width:auto;
    padding: 15px 25px;
    border: 1px solid black;
    margin-top: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}

    .bs-calltoaction > .row{
        display:table;
        width: calc(100% + 30px);
    }
     
        .bs-calltoaction > .row > [class^="col-"],
        .bs-calltoaction > .row > [class*=" col-"]{
            float:none;
            display:table-cell;
            vertical-align:middle;
        }

            .cta-contents{
                padding-top: 10px;
                padding-bottom: 10px;
            }

                .cta-title{
                    margin: 0 auto 15px;
                    padding: 0;
                }

                .cta-desc{
                    padding: 0;
                }

                .cta-desc p:last-child{
                    margin-bottom: 0;
                }

            .cta-button{
                padding-top: 10px;
                padding-bottom: 10px;
            }

@media (max-width: 991px){
    .bs-calltoaction > .row{
        display:block;
        width: auto;
    }

        .bs-calltoaction > .row > [class^="col-"],
        .bs-calltoaction > .row > [class*=" col-"]{
            float:none;
            display:block;
            vertical-align:middle;
            position: relative;
        }

        .cta-contents{
            text-align: center;
        }
}



.bs-calltoaction.bs-calltoaction-default{
    color: #333;
    background-color: #fff;
    border-color: #ccc;
}

.bs-calltoaction.bs-calltoaction-primary{
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}

.bs-calltoaction.bs-calltoaction-info{
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
}

.bs-calltoaction.bs-calltoaction-success{
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
}

.bs-calltoaction.bs-calltoaction-warning{
    color: #fff;
    background-color: #f0ad4e;
    border-color: #eea236;
}

.bs-calltoaction.bs-calltoaction-danger{
    color: #fff;
    background-color: #d9534f;
    border-color: #d43f3a;
}

.bs-calltoaction.bs-calltoaction-primary .cta-button .btn,
.bs-calltoaction.bs-calltoaction-info .cta-button .btn,
.bs-calltoaction.bs-calltoaction-success .cta-button .btn,
.bs-calltoaction.bs-calltoaction-warning .cta-button .btn,
.bs-calltoaction.bs-calltoaction-danger .cta-button .btn{
    border-color:#fff;
}
  </style>
