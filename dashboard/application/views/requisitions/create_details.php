<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Requisition Form
        <small>Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Requisition</a></li>
        <li class="active">Requisition Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          
            <!-- /.box-header -->      
      
            <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                    <h3 class="box-title">New Requisition Details</h3>
                    </div>
                    
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="<?php echo site_url();?>/requisition/CreateDetailsAction" method="post">
                    <input type="hidden" value="<?php echo $req_ID; ?>" name = "rID">
                    <div class="box-body">
                    <?php for($i = 0; $i< $no_of_items; $i++) { ?>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Item <?php echo '<span style="color:green; font-size:20px;"># '. ($i + 1).  '</span>' ; ?> </label>
                            <input type="hidden" value="<?php echo $req_ID; ?>" name="req_ID[]">
                           
                            <div class="col-sm-10">
                              <input type="hidden" name="id[]">
                                <input type="text" class="form-control" name="name[]" placeholder="Enter Item Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Price</label>

                            <div class="col-sm-10">
                                <input type="number" class="form-control" min="1" step="0.1" placeholder="Enter Price" name="price[]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Item Description</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" placeholder="Enter Description" name="description[]"></textarea>
                            </div>
                        </div>
                        <hr style="color:green;">
                    <?php } ?>

                    </div>
                   
                    <input type="hidden" value="<?php echo $no_of_items; ?>" name="no_of_items">
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="<?php echo site_url(); ?>/requisition/Create" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
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