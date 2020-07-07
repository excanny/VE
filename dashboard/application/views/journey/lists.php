<?php
    $CI =& get_instance();
?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Journey Log
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Journey Log</li>
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
        <div class="col-xs-6">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Add New Journey Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form action="<?php echo site_url();?>/Journey/Store" method="post">
                <div class="form-group">
                    <label for="exampleInputPassword1">Destination</label>
                    <input type="text" class="form-control" name="destination" placeholder="Enter Destination" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Purpose</label>
                    <input type="text" class="form-control" name="purpose" placeholder="Enter Purpose" required>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                         <label for="exampleInputPassword1">Departure Date</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right datepicker" name="departure_date"  required>
                            </div>
                        <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="exampleInputPassword1">Departure Time</label>
                            <div class="bootstrap-timepicker">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="text" class="form-control timepicker" name="departure_time" required>
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
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                         <label for="exampleInputPassword1">Arrival Date</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right datepicker" name="arrival_date" required>
                            </div>
                        <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="exampleInputPassword1">Arrival Time</label>
                            <div class="bootstrap-timepicker">
                            <div class="form-group">
                                <div class="input-group">
                                <input type="text" class="form-control timepicker" name="arrival_time" required>
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
                </div>
                <div class="form-group">     
                    <select class="form-control" name="transport_means" required>
                        <option value="">Select Means of transportation </option>
                        <option value="Company car">Company car</option>
                        <option value="External">External</option>
                    </select>
                </div>
            
            </div>
            <div class="box-footer clearfix">
            <button type="submit" class="pull-right btn btn-success">Submit</button>
            </div>
        </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Journeys</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped datatable">
                <thead>
                <tr>
                  <th class="text-center">Name</th>
                  <th class="text-center">Destination</th>
                  <th class="text-center">Purpose</th>
                  <th class="text-center">Departure</th>
                  <th class="text-center">Expected Arrival</th>
                  <th class="text-center">Transport Means</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Destination</th>
                  <th class="text-center">Purpose</th>
                  <th class="text-center">Departure</th>
                  <th class="text-center">Expected Arrival</th>
                  <th class="text-center">Transport Means</th>
                </tr>
                </tfoot>
                <tbody>
                
                <?php  foreach($journeys as $journey){ ?>
                  <tr>
                    <td class="text-center"><?php echo $journey->name; ?></a></td>
                    <td class="text-center"><?php echo $journey->destination; ?></a></td>
                    <td class="text-center"><?php echo $journey->purpose; ?></td>
                    <td class="text-center"><?php echo $journey->departure_DT; ?></td>
                    <td class="text-center"><?php echo $journey->arrival_DT; ?></td>
                    <td class="text-center"><?php echo $journey->transport_means; ?></td>
                  </tr>
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