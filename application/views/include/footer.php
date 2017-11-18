    <!-- Footer -->
    <?php $a =  base_url(); ?>

    <footer class="text-center">
        <?php
            if(getUserData() == null || getUserData() == ''){
        ?>
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>สถานที่ตั้ง</h3>
                        <p>เลขที่ 320/12 ถนนพหลโยธิน <br> ตำบลนครสวรรค์ตก <br> อำเภอเมือง <br> จังหวัดนครสวรรค์</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>เกี่ยวกับ PET ONLINE</h3>
                        <p>ระบบการบริการคลินิกสัตว์เลี้ยงเอเชียเพทแบบออนไลน์ <a href="#" data-toggle="modal" data-target="#regisModal">ลงทะเบียนกับเรา</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; http://clinic-pet.com 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>
<style>

body {
}

    .btn-circle {
      text-align: center;
      width: 150px;
      height: 150px;
      padding: 39px 16px;
      font-size: 18px;
      line-height: 1.33;
      border-radius: 75px;
      white-space: normal;
      color: white;
      text-transform: uppercase;
      font-weight: 700;
      opacity: 0.75;

    }

    .btn-circle:hover {
     color: white;
     opacity: 1;
    }

    section {
      padding: 50px 0px!important;
    }
    .features_table h1{
        font-size:25px !important;
        
    }
    li{
        list-style:none;
        }
    h1{
         font-size:21px !important;
        }    
    .features-table li {
        background: #da9748 none repeat scroll 0 0;
        border-bottom: 2px solid #e5a253;
        color: #f1f1f1;
        font-size: 16px;
        padding: 15px 24px;
    }
    .features-table li:hover{
        background:  #e5a253;
        cursor:pointer;
        -webkit-transition: all .35s;
        -moz-transition: all .35s;
        transition: all .35s;
    }
    .features-table-free li, .features-table-paid li {
        background: #efefef none repeat scroll 0 0;
        border-bottom: 2px solid #d4d4d4;
        text-align:center;
        padding: 10.5px 21px;
        cursor:pointer;
    }
    .features-table-free h1, .features-table-paid h1 {
        text-align: center;
    }
    .features-table-free li:hover, .features-table-paid li:hover {
        background: #dedede none repeat scroll 0 0;
        -webkit-transition: all .35s;
        -moz-transition: all .35s;
        transition: all .35s;
    }
    .features_table h1 {
        font-size: 23px !important;
    }
    .features-table h1, .features-table-free h1, .features-table-paid h1 {
        background: #6b6b6b none repeat scroll 0 0;
        color: #fff;
        font-weight: 600;
        margin: 0;
        padding: 19px 21px;
        text-transform: uppercase;
    }
    .features-table h1 {
        border-top-left-radius: 20px;
        text-align:center;
    }
    .features-table-paid h1 {
        border-top-right-radius: 20px;
    }
    .features-table-free li {
        border-right: 2px solid #d4d4d4;
    }

    .fa.fa-check {
        color: #2cc14f;
    }
    .fa.fa-times {
        color: #BA5340;
    }
    .fa{
        font-size:30px;
    }
    .no-padding{
        padding:0;
    }
    ul{
        padding:0;
    }

    body {
      counter-reset: section;                   /* Set the section counter to 0 */
    }
    .features-table li::before {
      counter-increment: section;               /* Increment the section counter*/
      content: "" counter(section) ": "; /* Display the counter */
    }
</style>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $a; ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo $a; ?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo $a; ?>assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo $a; ?>assets/js/freelancer.min.js"></script>
</body>

</html>