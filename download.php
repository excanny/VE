<?php

session_start();


if(!isset($_SESSION["client_email"]))
{
    header('Location: login');
    exit();
}

$email = $_SESSION["client_email"];

 $uploader = $_SESSION['uploader'];
 $photo = $_SESSION['filex'];

 include('header2.php'); ?>

<?php include('aside.php'); ?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Download Page
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">  Download Page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-4">
          
            <!-- /.box-header -->      
      
            <!-- Horizontal Form -->
                <div class="box box-info" style="margin: 0 0 0 75%;">
                    <div class="box-header with-border">
                    <h3 class="box-title text-center"> Download File</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    
                    <div class="box-body">
                        <div class="form-group">
                        
                          <div class="col-sm-12" style="margin-bottom:2rem;">
                            <label>File Name</label>
                              <input type="text" class="form-control" value="<?php echo $photo; ?>" readonly>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-sm-12">
                            <label>Uploaded By</label>
                              <input type="text" class="form-control" value="<?php echo $uploader; ?>" readonly>
                          </div>
                        </div>
                    </div>
                   
                    <!-- /.box-body -->
                    <div class="box-footer">
                        
                        <a href="http://veritygeo.com/demo/dashboard/uploads/files/<?php echo $photo; ?>"  class="btn btn-info btn-block" download><i class="fa fa-download fa-lg"></i></a>
                    </div>
                    <!-- /.box-footer -->
                   
                </div>

                </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>








<?php include('footer2.php'); ?>