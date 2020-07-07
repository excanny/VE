<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        FTP
        <small>Page</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">FTP</li>
      </ol>
    </section>

 
   <br>
    <div class="container" style="padding: 2px;">
      <div class="row">
        
       <div class="col-lg-6">
          <?php if(isset($_SESSION['error'])) { ?>
              <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Sorry!</strong> <?php echo $_SESSION['error']; unset($_SESSION['error']);?>
              </div>
          <?php } ?>
          <?php if(validation_errors() != false) { ?>
              <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Sorry!</strong> <?php echo validation_errors(); ?>
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
        
                <div class="col-md-7">
                        
                    <!-- quick email widget -->
                    <div class="box box-info">
                      <div class="box-header">
                        <i class="fa fa-upload"></i>

                        <h3 class="box-title">Upload File</h3>
                      </div>
                      <div class="box-body">
                      <form action="<?php echo site_url();?>/File/Store" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                             <input class="input-id" name="upload" type="file" data-browse-on-zone-click="true" data-show-upload="false" required>
                          </div>
                            <div class="box-footer clearfix">
                            <button type="submit" class="pull-right btn btn-success">Upload
                              <i class="fa fa-arrow-circle-up"></i></button>
                          </div>
                      </form>
                    </div>
                </div>
            <!-- /.box-body -->
          </div>

          <div class="col-md-5">
                        
                        <!-- quick email widget -->
                        <div class="box box-info" style="border-top: 3px solid orange;">
                          <div class="box-header">
                            <i class="fa fa-download"></i>
    
                            <h3 class="box-title">Download File</h3>
                          </div>
                          <div class="box-body">
                          <form action="<?php echo site_url();?>/file/GetFile" method="post"> 
                            <div class="form-group">
                              <label for="exampleInputEmail1">FTP Key</label>
                              <input type="text" class="form-control" name="key" placeholder="Enter FTP Key" required>
                            </div>   
                            <div class="box-footer clearfix">
                              <button type="submit" class="pull-right btn btn-success">Submit</button>
                            </div>
                          </form>
                        </div>
                    </div>
                <!-- /.box-body -->
                    <!-- quick email widget -->
                    <div class="box box-info" style="border-top: 3px solid purple;">
                          <div class="box-header">
                            <i class="fa fa-key"></i>
    
                            <h3 class="box-title">Generate Upload FTP Key for External Uploaders</h3>
                          </div>
                          <div class="box-body">
                          <form action="<?php echo site_url();?>/file/GenerateExternal" method="post" enctype="multipart/form-data">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <div class="form-group">
                                          <label>Upload Client's Logo:</label>
                                         <input class="input-id" name="logo_upload"  type="file" data-browse-on-zone-click="true" data-show-upload="false" required>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-lg-12">
                                     <div class="form-group">
                                        <label>Enter expected file type extension:</label>
                                            *With leading dot (.) E.g: .jpg, .docx, .pdf, .ppt, etc.
                                      <input type="text" class="form-control" name="file_ext" placeholder="Enter file extension" required>
                                    </div>
                                  </div>
                              </div>
                              
                            <div class="box-footer clearfix">
                              <button type="submit" class="pull-right btn btn-primary">Generate</button>
                            </div>
                          </form>
                        </div>
                    </div>
              </div>

         
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>