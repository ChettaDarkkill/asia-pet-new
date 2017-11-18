<!DOCTYPE html>
<html lang="en">

<head>
    <?php $a =  base_url(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เอเชียเพทออนไลน์</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $a; ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $a; ?>assets/admin/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo $a; ?>assets/admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $a; ?>assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $a; ?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $a; ?>assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
 <script type="text/javascript" src="<?php echo $a; ?>assets/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
 <script type="text/javascript" src="<?php echo $a; ?>assets/js/canvasjs.min.js" charset="UTF-8"></script>
    
</head>

<body>

    <div id="wrapper">
      <?php if($this->session->flashdata('msg_success')){ ?>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>สำเร็จ!</strong>  <?php echo $this->session->flashdata('msg_success'); ?>
      </div>
      <?php } ?>
      <?php if($this->session->flashdata('msg_error')){ ?>
      <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong>ผิดพลาด!</strong> <?php echo $this->session->flashdata('msg_error'); ?>
      </div>
       <?php } ?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $a.'index.php/Admin/Admin'; ?>">เอเชียเพทออนไลน์ backoffice.</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <?php 
                    $adminD = getAdminData();
                ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $adminD['first_name'] . ' ' . $adminD['last_name']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo $a.'index.php/Admin/Login/postLogout'; ?>"><i class="fa fa-fw fa-power-off"></i>ออกจากระบบ</a>
                        </li>
                    </ul>
                </li>
            </ul>

<style>
 <style>
.fade.in {
    opacity: 1;
}
.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.fade {
    opacity: 0;
    -webkit-transition: opacity .15s linear;
    -o-transition: opacity .15s linear;
    transition: opacity .15s linear;
}
.close {
    float: right;
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    filter: alpha(opacity=20);
    opacity: .2;
}
a {
    color: #337ab7;
    text-decoration: none;
}
a {
    background-color: transparent;
}
</style>
</style>

