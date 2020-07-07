

<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/examples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2019 15:49:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Verity Geo - Staff Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <link rel="stylesheet" href="/resources/demos/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="" style="background-image: url('http://veritygeo.com/demo/dashboard/uploads/images/app-images/vg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
<div class="register-box" style="margin:1% auto;">
  <div class="register-logo">
  <a href="/" style="color:#fff;"><b style="color:#fff;">Verity</b>Geo</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Staff Register</p>
     
    <form action="<?php echo site_url('user/register_action');?>" method="post">
       <?php  if (isset($_SESSION['success']))  { ?>
              <div class="alert alert-dismissable alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></p>
              </div>
        <?php }  ?>

       <?php  if (isset($_SESSION['error']))  { ?>
              <div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
              </div>
        <?php }  ?>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="first_name" placeholder="First Name" value="<?php echo set_value('first_name'); ?>" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?php echo set_value('last_name'); ?>" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control bg-white" id="datepicker" name="dob" placeholder="Date Of Birth" readonly style="background:#fff;" required>
        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <select class="form-control" name="dept" required>
          <option value="">Select Department</option>
          <?php foreach ($departments as $department) { ?>
              <option value="<?php echo $department->id; ?>" ><?php echo $department->name; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="staff_no" placeholder="Enter Staff Number" required>
        <span class="glyphicon glyphicon-tag form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pssd1" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pssd2" placeholder="Retype password" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-lg-12 float-right">
        <input type="submit" class="btn btn-success btn-block" value= "Register">
        </div>
        <!-- /.col -->
      </div>
    </form>
<br>
    <p class="text-right"><a href="<?php echo site_url();?>/user/login">Login</a></p>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script>
  $( function() {
    $( "#datepicker" ).datepicker({
      dateFormat: 'dd-mm-yy',
      changeYear: true,
      changeMonth: true,
      yearRange: '1940:' + new Date().getFullYear(),
    });
  } );
  </script>

</body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/examples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2019 15:49:07 GMT -->
</html>
