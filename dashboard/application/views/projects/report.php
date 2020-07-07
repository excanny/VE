<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Project Report Form
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url();?>/project">Project</a></li>
        <li class="active">Add New</li>
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
        <div class="col-md-6">
          <?php $id = $this->uri->segment(3); ?>
            <!-- /.box-header -->      
      
            <!-- Horizontal Form -->
                <div class="box box-info" style="margin: 0 0 0 45%;">
                    <div class="box-header with-border">
                    <h3 class="box-title">Updates on this Project</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="<?php echo site_url('Project/ReportAction/'. $id);?>/" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Title</label>
                              <input name="title" type="text" class="form-control" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                              <!--data-browse-on-zone-click="true" data-show-upload="false" required-->
                             <input class="input-id" name="upload" type="file" data-browse-on-zone-click="true" data-show-upload="false" required>
                          </div>
                        </div>
                        
                    </div>
                   
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Submit</button>
                    </div>
                    <!-- /.box-footer -->
                    </form>
                </div>

                </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>