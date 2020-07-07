<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Requisition Form
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url();?>/requisition">Requisition</a></li>
        <li class="active">Add New</li>
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
                    <h3 class="box-title">New Requisition</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="<?php echo site_url();?>/requisition/CreateDetails" method="post">
                    <div class="box-body">
                        <div class="form-group">
                        
                          <div class="col-sm-12">
                            <label>Number Of Items</label>
                              <input type="number" class="form-control" min="1" name="no_of_items" placeholder="Enter Number Of Items" required>
                          </div>
                        </div>
                    </div>
                   
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Next</button>
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