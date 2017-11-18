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
    <link href="<?php echo $a; ?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <script src="<?php echo $a; ?>assets/js/jquery-1.12.4.js"></script>
    <script src="<?php echo $a; ?>assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo $a; ?>assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo $a; ?>assets/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
</head>
<body id="page-top" class="index">
<div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
        <div class="panel-heading">
            <h3 class="panel-title">เอเชียเพทออนไลน์ backoffice.</h3>
        </div>
        <div class="panel-body">
            <form role="form" method = "post" id = 'admLogin' name = 'admLogin' action = "<?php echo $a.'index.php/Admin/Login/doLogin'; ?>">
                <fieldset>
                    <div class="form-group">
                        <input class="form-control" placeholder="ชื่อผู้ใช้" name="username" id="username" type="username" autofocus="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="รหัสผ่าน"  name="password" id="password" type="password" value="">
                    </div>
                    <!-- Change this to a button or input when using this as a form -->
                    <button type = "submit" class="btn btn-sm btn-success">เข้าสู่ระบบ</a>
                </fieldset>
            </form>
        </div>
        </div>
    </div>
</div>
<hr>
</div>
