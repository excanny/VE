<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Budget Form
        <small>Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url();?>/budget">Budget</a></li>
        <li class="active">Budget Details</li>
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
                    <h3 class="box-title">New Budget Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="<?php echo site_url();?>/Budget/CreateDetailsAction" method="post">
                    <input type="hidden" value="<?php echo $budget_ID; ?>" name="bID">
                    <div class="box-body">
                    <?php for($i = 0; $i< $no_of_projects; $i++) { ?>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Project <?php echo '<span style="color:green; font-size:20px;"># '. ($i + 1).  '</span>' ; ?> </label>
                            <input type="hidden" value="<?php echo $budget_ID; ?>" name="budget_ID[]">
                            <div class="col-sm-10">
                              <input type="hidden" name="id[]">
                                <input type="text" class="form-control" name="name[]" placeholder="Enter Project Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Cost</label>

                            <div class="col-sm-10">
                                <input type="number" class="form-control" min="1" step="0.1" placeholder="Enter Cost" name="cost[]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Project Description</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" placeholder="Enter Description" name="description[]"></textarea>
                            </div>
                        </div>
                        <hr style="color:green;">
                    <?php } ?>

                    </div>
                   
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="<?php echo site_url(); ?>/Budget/Create" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>
                    <!-- /.box-footer -->
                    </form>
                </div>

                </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>