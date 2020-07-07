<?php

session_start();


if(!isset($_SESSION["client_email"]))
{
    header('Location: login');
    exit();
}

 $email = $_SESSION["client_email"];

 $file_id = $_SESSION["file_id"];
 
 $logo = $_SESSION["logo"];
 
 $file_ext = $_SESSION["file_ext"];

 include('header2.php'); ?>

<?php include('aside.php'); ?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Uploads/Downloads
        <small>all Files</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Files</li>
      </ol>
    </section>
    
    <br>
      <!-- left column -->
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
                <div class="col-md-12 p-5">
                    
                    
                        
                    <!-- quick email widget -->
                    <div class="box box-info">
                    
                      <div class="box-body">
                        
                       <form action="store-external" method="post" enctype="multipart/form-data">
                          <div class="row">
                              <div class="col-lg-5">
                                   <img src="http://veritygeo.com/demo/dashboard/uploads/logos/<?php echo $logo; ?>" alt="logo" width="42%" style="display: block; margin:auto;" class="img-circle">
                                   <br>
                                   <br>
                                   
                            <div class="row mt-4">
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" style="height:3rem;" required>     
                                     </div>
                                </div> 
                                <div class="col-lg-6">
                                     <div class="form-group"> 
                                     <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" style="height:3rem;"required>    
                                   </div>
                                </div>
                                
                            </div>
                                
                              </div>
                              <div class="col-lg-7">
                                 <div class="form-group">
                                     <input type="hidden" class="form-control" name="file_id" value ="<?php echo $file_id; ?>"> 
                                     <input type="hidden" class="form-control" name="file_ext" value ="<?php echo $file_ext; ?>">    
                                     <input class="input-id" name="upload" type="file" data-browse-on-zone-click="true" data-show-upload="false" required>
                                     
                                    </div>
                                    <div class="box-footer clearfix">
                                    <button type="submit" class="pull-right btn btn-success">Upload
                                      <i class="fa fa-arrow-circle-up"></i></button>
                                  </div>
                              </div>
                          </div>
                        
                      </form>
                    </div>
                </div>
            <!-- /.box-body -->
          </div>
    
    
    
 <!-- /.content -->
 </div>

<?php include('footer2.php'); ?>