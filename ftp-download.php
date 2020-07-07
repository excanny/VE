<?php

session_start();


if(!isset($_SESSION["client_email"]))
{
    header('Location: login');
    exit();
}

$email = $_SESSION["client_email"];

 include('header2.php'); ?>

<?php include('aside.php'); ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        FTP Download
        <small>Page</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">FTP</li>
      </ol>
    </section>

 

    <div class="container" style="padding: 2px;">
      <div class="row">
        
       <div class="col-lg-6">
          <?php if(isset($_SESSION['error'])) { ?>
              <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Sorry!</strong> <?php echo $_SESSION['error']; unset($_SESSION['error']);?>
              </div>
          <?php } ?>
           <?php  if (isset($_SESSION['success']))  { ?>
                  <div class="alert alert-dismissable alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></p>
                  </div>
            <?php }  ?>
       </div> 
      </div>
    </div>

   
   
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->

          <div class="col-md-5">
                        
                <!-- quick email widget -->
                <div class="box box-info" style="border-top: 3px solid orange;">
                  <div class="box-header">
                    <i class="fa fa-download"></i>

                    <h3 class="box-title">Download File</h3>
                  </div>
                  <div class="box-body">
                  <form action="ftp-downloadproc" method="post"> 
                    <div class="form-group">
                      <label for="exampleInputEmail1">Verity FTP Key</label>
                      <input type="text" class="form-control" name="key" placeholder="Enter FTP Download Key" required>
                    </div>   
                    <div class="box-footer clearfix">
                      <button type="submit" class="pull-right btn btn-success">Submit</button>
                    </div>
                  </form>
                 </div>
              </div>
        <!-- /.box-body -->
          </div>

         
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
 <?php include('footer2.php'); ?>