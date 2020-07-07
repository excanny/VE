

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Calendar
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Calendar</li>
      </ol>
    </section>
    
       <br>
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
        
           <!-- general form elements -->
           <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add Personal Event</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('index.php/calendar/Store');?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name="title" placeholder="Enter title" required>
                </div>
                <hr>
                <div class="form-group">
                  <label for="">Start</label>
                   <!-- Date -->
                    <div class="form-group">
                      <label>Date:</label>

                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" id="" class="form-control pull-right datepicker" name="start_date" required>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- time Picker -->
                    <div class="bootstrap-timepicker">
                      <div class="form-group">
                        <label>Time:</label>

                        <div class="input-group">
                          <input type="text" class="form-control timepicker" name="start_time" required>

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
                  <label for="exampleInputPassword1">End</label>
                   <!-- Date -->
                    <div class="form-group">
                      <label>Date:</label>

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
                        <label>Time:</label>

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
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Add">
              </div>
            </form>
          </div>
        
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
 
    <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="">
            <div class="box-header">
              <h3 class="box-title">All My Events</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Title</th>
                  <th class="text-center">Start</th>
                  <th class="text-center">End</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Title</th>
                  <th class="text-center">Start</th>
                  <th class="text-center">End</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($result as $event){ ?>
                    <tr>
                      <td class="text-center"><?php echo $event->title; ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ma', strtotime($event->start)); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ma', strtotime($event->end)); ?></td>
                      <td class="text-center">
                      <form method="DELETE" action="<?php echo base_url('index.php/calendar/delete/'. $event->id);?>">
                        <a href="<?php echo base_url('index.php/calendar/edit/'.$event->id) ?>"><i class="fa fa-edit fa-lg"></i></a>
                        <input type="submit"  onclick="return confirm('Are you sure you want to delete this event?')" value="&#xf1f8" class="fa fa-trash text-danger"> 
											</form>
                      </td>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

   
   
   
      <!-- /.content -->
 </div>
  <!-- /.content-wrapper -->