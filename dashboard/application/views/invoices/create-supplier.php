<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create New Supplier
        <small>Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Create Supplier</li>
      </ol>
    </section>


    <div class="container" style="padding: 2px;">
      <div class="row">
       <div class="col-lg-6">
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
                        <i class="fa fa-shopping-cart"></i>

                        <h3 class="box-title">New Supplier</h3>
                        <!-- tools box -->
                        <!-- <div class="pull-right box-tools">
                          <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                  title="Remove">
                            <i class="fa fa-times"></i></button>
                        </div> -->
                        <!-- /. tools -->
                      </div>
                      <div class="box-body">
                      <form action="<?php echo site_url();?>/invoice/CreateSupplierAction" method="post">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Supplier Name" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="street" placeholder="Street" required>
                          </div>
                        </div>
              
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="text" class="form-control" name="state" placeholder="State" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="number" class="form-control" name="phone" placeholder="Phone" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                          </div>
                        </div>
                      </div>    
                    
                      <div class="box-footer clearfix">
                        <button type="submit" class="pull-right btn btn-success">Add
                        </button>
                      </div>
                      </form>
                    </div>
                </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      <!-- /.row -->
    </section>



</div>  