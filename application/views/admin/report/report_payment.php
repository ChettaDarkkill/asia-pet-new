        <?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            รายงานสรุปจำนวน รายรับ ของร้าน<small></small>
                        </h1>
                    </div>
                </div>
            </div>
        <script type="text/javascript">
            window.onload = function () {
                var chart = new CanvasJS.Chart("chartContainer",
                {
                    title:{
                        //text: "Bar chart"
                    },

                    data: [
                    {
                        type: "bar",

                        dataPoints: [

                    <?php 
                        if(count($data) > 0) { 
                        $nn = 0;
                        foreach ($data as $key => $value) { 
                        if(count($data)-1 == $key){
                            $cc = '';
                        }else{
                            $cc = ',';
                        }
                        $nn = $nn + 10;
                    ?>
                        { x: <?php echo $nn; ?>, y: <?php echo $value['pp']; ?>, label:"<?php echo $value['product_name']; ?>" }<?php echo $cc; ?>

                    <?php } } ?>

                        ]
                    }
                    ]
                });

                chart.render();
            }
        </script>
        <div id="chartContainer" style="height: 400px; width: 100%;">
        </div>
        </div>