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
        Calendar
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Calendar</li>
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
        <!-- /.col -->
        
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <div class="col-md-4">
          <div class="box box-warning">
            <div class="box-body">
            <div class="box-header with-border">
              <h3 class="box-title">Add Event</h3>
            </div>
            <form action="storeevent" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name="title" placeholder="Enter title" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea  name="description" class="form-control" rows="3" placeholder="Enter description"></textarea>
                </div>
                <hr>
                <div class="form-group">
                   <!-- Date -->
                    <div class="form-group">
                      <label>Start Date:</label>

                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right datepicker" name="start_date"  required>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- time Picker -->
                    <div class="bootstrap-timepicker">
                      <div class="form-group">
                        <label>Start Time:</label>

                        <div class="input-group">
                          <input type="text" class="form-control timepicker" name="start_time" required style="overflow: visible;">

                          <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                          </div>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                    </div>
                </div>
                <hr>
                <div class="form-group">
                   <!-- Date -->
                    <div class="form-group">
                      <label>End Date:</label>

                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right datepicker" name="end_date" required>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- time Picker -->
                    <div class="bootstrap-timepicker">
                      <div class="form-group">
                        <label>End Time:</label>

                        <div class="input-group">
                          <input type="text" class="form-control timepicker" name="end_time" required>

                          <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                          </div>
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <input type="submit" class="btn btn-primary pull-right" value="Add">
              </div>
            </form>

            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include('footer2.php'); ?>