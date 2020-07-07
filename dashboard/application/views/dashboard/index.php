  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $events_count; ?></h3>

              <p>Events</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo site_url();?>/calendar" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $staff_count; ?></h3>

              <p>Staff</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo site_url();?>/user/StaffProfile" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $req_count; ?></h3>

              <p>Requisitions</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo site_url();?>/requisition" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $leave_count; ?></h3>

              <p>Leave Requests</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo site_url();?>/leave" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      
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
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
     
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-8">
          <!-- Calendar -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">General Calendar</h3>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>

        <section class="col-lg-4">
           <!-- general form elements -->
           <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add General Event</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url('index.php/calendar/StoreGeneral');?>" method="post">
              <div class="box-body">
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

                <div class="form-group">
                  <label>Select if Event is meant for Client:</label>
                  <div class="input-group">
                      <select  class="form-control" name="client_email" required>
                      <option value="">Select Client</option>
                        <?php foreach ($clients as $client) { ?>
                            <option value="<?php echo $client->email; ?>"><?php echo $client->name; ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <!-- /.input group -->
                </div>
          
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary pull-right" value="Add">
              </div>
            </form>
          </div>
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>

    
     <?php if($_SESSION['isHOD'] == 1 || $_SESSION['isHOD'] == 2 || $user->isMD == 1){ ?>
    
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="">
            <div class="box-header">
              <h3 class="box-title">All General Events</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Title</th>
                  <th class="text-center">Description</th>
                  <th class="text-center">Created by</th>
                  <th class="text-center">Start</th>
                  <th class="text-center">End</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Title</th>
                  <th class="text-center">Description</th>
                  <th class="text-center">Created by</th>
                  <th class="text-center">Start</th>
                  <th class="text-center">End</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($general_result as $event){ ?>
                    <tr>
                      <td class="text-center"><?php echo $event->title; ?></td>
                      <td class="text-center"><?php echo $event->description; ?></td>
                      <td class="text-center"><?php echo $event->creator; ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ma', strtotime($event->start)); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ma', strtotime($event->end)); ?></td>
                      <td class="text-center">
                          <form method="post" action="<?php echo base_url('index.php/calendar/DeleteGeneralEvent/'. $event->id);?>">
                            <a href="<?php echo base_url('index.php/calendar/EditGeneral/'.$event->id) ?>"><i class="fa fa-edit fa-lg"></i></a>
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
    
    <?php } ?>
    
  </div>
  <!-- /.content-wrapper -->
<!-- /.modal -->


<div class="modal fade" id="modal-default">
  <div class="modal-dialog" style="">
  <form action="<?php echo site_url('Welcome/ChangeProfilePicture/'. $user->id);?>" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Change image</h4>
      </div>
      <div class="modal-body">
      <input type="hidden" name="id" value="<?php echo $user->id; ?>">  
        <input type="file" name="photo" class="input-id2" data-preview-file-type="text" data-browse-on-zone-click="true" data-allowed-file-extensions='["jpg", "png", "jpeg", "gif"]' data-show-upload="false" required>  
      </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Update">
       
      </div>
    </div>
     </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


