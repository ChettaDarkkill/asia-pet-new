<!DOCTYPE html>
<html lang="en">

<head>
    <?php $a =  base_url(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ระบบการบริการคลินิกสัตว์เลี้ยงเอเชียเพทแบบออนไลน์</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $a; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo $a; ?>assets/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $a; ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <link href="<?php echo $a; ?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!-- jQuery -->
    <!--<script src="<?php echo $a; ?>assets/vendor/jquery/jquery.min.js"></script>-->
    <script src="<?php echo $a; ?>assets/js/jquery-1.12.4.js"></script>
    <script src="<?php echo $a; ?>assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo $a; ?>assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo $a; ?>assets/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
</head>

<body id="page-top" class="index">
<a href="#" id = "clickToLoading" data-toggle="modal" data-target="#loadingModal"></a>
<div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span  id = "closeLoadingPanel" aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <center><h3 class="modal-title" id="lineModalLabel">รอสักครู่ ...</h3></center>
        </div>
    </div>
  </div>
</div>

<a href="#" id = "clickToShowMessage" data-toggle="modal" data-target="#messageModal"></a>
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span  id = "closeLoadingPanel" aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <center>
                <img id = 'imgShowMessage' width = "50px" />
                <h3 class="modal-title" id="messageModalLabel"></h3>
            </center>
        </div>
    </div>
  </div>
</div>

<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">เอเชียเพทออนไลน์</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php 
                if(getUserData() != null && getUserData() != ''){
                $userdata = getUserData();
            ?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <span style = "color : white" ><?php echo "ยินดีต้อนรับ" . " : " . $userdata['first_name'] . " " . $userdata['last_name']; ?></span><br/>
                        <span style = "color : white" >เข้าสู่ระบบ : เอเชียเพทออนไลน์ </span>
                    </li>
                    <li class="page-scroll">  
                    </li>
                    <li class="page-scroll">  
                        &nbsp;&nbsp;<button onclick="myLogout()" type="button" class="btn btn-success" >ออกจากระบบ</button>
                    </li>
                </ul>
            </div>
            <?php } else { ?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">บริการของเรา</a>
                    </li>
                    <li class="page-scroll">  
                        <!-- <a href="#portfolio">ลงทะเบียน</a> -->
                        <a href="#" data-toggle="modal" data-target="#regisModal">ลงทะเบียน</a>
                    </li>
                    <li class="page-scroll">  
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">เข้าสู่ระบบ</button>
                    </li>
                </ul>
            </div>
            <?php }?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <?php $a =  base_url(); ?>
    <?php
        if(getUserData() != null && getUserData() != ''){
        $userdata = getUserData();
    ?>
    <header>
        
        <?php 
            if(isset($path)){
                $this->load->view($path);
            }
        ?>
    </header>
        <?php } else { ?>
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <img class="img-responsive" src="<?php echo $a; ?>assets/icon/logo.svg" width = "250px">
                <div class="intro-text">
                    <h1 class="name">Clinic pet Online System</h1>
                    <hr class="star-light">
                    <span class="skills">ระบบการบริการคลินิกสัตว์เลี้ยงเอเชียเพทแบบออนไลน์</span>
                </div>
            </div>
            <div min-height:530px; overflow-y:scroll;'>
            <div class = "row">
         <div class="col-md-12">
                <div class="intro-text">
                    <h1 style = "color:#373a47;" class="name">ข้อมูลข่าวสารประชาสัมพันธ์ของคลินิก</h1>
                </div>
                <hr>
              <div style = 'text-align: left;!important;'>

                    <?php if(count(getNewsData()) > 0) {
                        foreach (getNewsData() as $key => $value) {

                        $max_length = 150;
                        $s = $value['details'];
                        if (strlen($s) > $max_length)
                        {
                            $offset = ($max_length - 3) - strlen($s);
                            $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';
                        }

                     ?>
                     <div class="col-md-12 blogShort">
                         <h1 style = "color:#373a47;"><?php echo $value['title']; ?><span> : <?php echo $s; ?> </span></h1>
                   <!--       <article><span>
                              <?php echo $s; ?>
                             </span>
                         </article> -->
                    <div class="collapse" id="collapseExample<?php echo "_".$value['id']; ?>">
                      <div class="card card-body">
                        <?php echo $value['details']; ?>
                      </div>
                                <div class="fb-comments" id = "cmm_face" data-href="https://developers.facebook.com/docs/plugins/comments#configurator/clinic/animals/comment/<?php echo  $value['id']; ?>" data-width="844" data-numposts="5"></div>
                    </div>
    <!--                      <a class="btn btn-blog primary pull-right btn-show-detail marginBottom10" href = "<?php echo $a; ?>index.php/Customer/News/get_news_detail/<?php echo $value['id']; ?>" >อ่านเพิ่มเติม</a>  -->
                          <a ids = "<?php echo $value['id']; ?>" class="btn btn-primary pull-right btn-show-detail marginBottom10" data-toggle="collapse" href="#collapseExample<?php echo "_".$value['id']; ?>" aria-expanded="false" aria-controls="collapseExample">
                            อ่านเพิ่มเติม
                          </a>
                     </div>
                        <hr>
                     <?php } } else { ?>

                     <p>ไม่มีข่าวสารของคลินิก</p>
                     <?php } ?>
                   <div class="col-md-12 gap10"></div>
                 </div>

              </div>
            </div>
            </div>
            </div>
        </div>
    </header>
    <?php }?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.9";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <style type="text/css">
        .btn-show-detail {
            color: #ffffff;
        }

            </style>
    <script>
        function myLogout(){
            $('#clickToLoading').click();
            var url = "<?php echo $a.'index.php/Dashboard/Dashboard/postLogout'; ?>";
            $.post( url , function( data ) {
                $('#closeLoadingPanel').click();
                window.location = "<?php echo $a; ?>";
            });
        }
    </script>
