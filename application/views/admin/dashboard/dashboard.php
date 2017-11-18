        <?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ภาพรวม <small>แสดงภาพรวม</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $data[0]; ?></div>
                                        <div>จำนวนสมาชิกทั้งหมด</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo $a.'index.php/Admin/Admin/getUser'; ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">ดูรายละเอียด </span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $data[1]; ?></div>
                                        <div>จำนวนผู้ดูแลระบบทั้งหมด</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo $a.'index.php/Admin/Admin/getUser/admin'; ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">ดูรายละเอียด </span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $data[2]; ?></div>
                                        <div>จำนวนการนัดหมายทั้งหมด</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo $a.'index.php/Admin/Admin/editAppo'; ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">ดูรายละเอียด</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $data[3]; ?></div>
                                        <div>การนัดหมายที่ถูกยกเลิก</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo $a.'index.php/Admin/Admin/editAppo/cancel'; ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">ดูรายละเอียด</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
  <script type="text/javascript">
            window.onload = function () {
                var chart = new CanvasJS.Chart("chartContainer", {
                    title: {
                        // text: "รายงานสินค้าคงเหลือ"
                    },
                    animationEnabled: true,
                    theme: "theme2",
                    data: [
                    {
                        type: "doughnut",
                        indexLabelFontFamily: "Garamond",
                        indexLabelFontSize: 20,
                        startAngle: 0,
                        indexLabelFontColor: "dimgrey",
                        indexLabelLineColor: "darkgrey",
                        toolTipContent: "คงเหลือ {y}",

                        dataPoints: [
                            <?php 
                                if(count($data[4]) > 0)  { 
                                foreach ($data[4] as $key => $value) {
                                if((count($data[4]) - 1 ) == $key ){
                                    $cc = '';
                                }else{
                                    $cc = ',';
                                }
                            ?>
                                { y: <?php echo $value['amt']; ?>, indexLabel: "<?php echo $value['product_name']; ?>" }<?php echo $cc;?>

                            <?php } } ?>
                        ]
                    }
                    ]
                });

                chart.render();
            }
            </script>
    <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
               <small>กราฟแสดงสินค้าคงเหลือ</small>
        </h1>
    </div>
    </div>
    <div id="chartContainer" style="height: 400px; width: 100%;">
    </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.canvasjs-chart-credit').hide();
        });
    </script>
    <style>
        #topbar li{
            list-style:none;
            padding:10px;
            display:inline-block; 
        }
        #topbar li a {
              
        }
    </style>
        </div>