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
         Files
        <small>all Files</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Files</li>
      </ol>
    </section>
    <br>
   <div class="container" style="padding: 2px;">
        <div class="row">
          <div class="col-lg-6">
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
           </div> 
          </div>
        </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-6">

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
             
                <form id="" action="ftpverify" method="post">

                    <div class="form-group">
                        <label> Verify FTP key</label>
                        <input name="key" placeholder="Enter FTP key" class="form-control" type="text" required>
                    </div>

                    <input type="submit" class="btn btn-success" value="Verify">  

                </form>
           
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>


 <!-- /.content -->
 </div>



 <?php include('footer2.php'); ?>