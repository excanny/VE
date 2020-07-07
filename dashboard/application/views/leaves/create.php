<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Leave Form
        <small>Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url();?>/leave">Leave</a></li>
        <li class="active">Leave Details</li>
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
                    <h3 class="box-title">New Leave Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="<?php echo site_url();?>/Leave/CreateAction" method="post">
                    <div class="box-body">
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Purpose:</label>

                                <div class="col-sm-10">
                                  <select class="form-control" name="purpose" required>
                                    <option value="">Select Purpose</option>
                                    <option value="Annual Leave">Annual Leave</option>
                                    <option value="Sabbatical Leave">Sabbatical Leave</option>
                                    <option value="Compassionate leave">Compassionate Leave</option>
                                    <option value="Maternity leave">Maternity Leave</option>
                                     <option value="Study Leave">Study Leave</option>
                                     <option value="Sick Leave">Sick Leave</option>
                                     <option value="Casual Leave">Casual Leave</option>
                                  </select>
                                </div>
                            </div>
                        <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">From:</label>
                        <div class="col-sm-10">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right datepicker" name="from">
                            </div>
                        </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">To:</label>
                        <div class="col-sm-10">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right datepicker" name="to">
                            </div>
                        </div>
                            <!-- /.input group -->
                        </div>

                    </div>
                   
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="<?php echo site_url(); ?>/Leave/Create" class="btn btn-default">Back</a>
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