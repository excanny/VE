<?php
    $CI =& get_instance();
?> 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        My requests
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> All Leaves</li>
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


    <?php if($user->isHOD == 2 || $user->isMD == 1){ ?>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="border-top: 3px solid orange;">
            <div class="box-header">
              <h3 class="box-title">All Company Pending  Requests</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Full Name</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Purpose</th>
                  <th class="text-center">From</th>
                  <th class="text-center">To</th>
                  <th class="text-center">action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                <th class="text-center">Full Name</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Purpose</th>
                  <th class="text-center">From</th>
                  <th class="text-center">To</th>
                  <th class="text-center">action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($MD_pending_leaves as $leave){ ?>
                    <tr>
                    <td class="text-center"><?php  echo $CI->GetUserWithEmail($leave->email); ?></td>
                      <td class="text-center"><?php echo $CI->GetDeptWithDeptID($leave->dept); ?></td>
                      <td class="text-center"><?php echo $leave->purpose; ?></td>
                      <td class="text-center"><?php echo date('d-m-Y ', strtotime($leave->from)); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y ', strtotime($leave->to)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('leave/MDView/'.  $leave->id); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
                        
                      </td>
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

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="border-top: 3px solid lightblue;">
            <div class="box-header">
              <h3 class="box-title">All Company Approved Requests</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Full Name</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Purpose</th>
                  <th class="text-center">From</th>
                  <th class="text-center">To</th>
                  <th class="text-center">Date Submitted</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Full Name</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Purpose</th>
                  <th class="text-center">From</th>
                  <th class="text-center">To</th>
                  <th class="text-center">Date Submitted</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($MD_approved_leaves as $leave){ ?>
                    <tr>
                    <td class="text-center"><?php echo $CI->GetUserWithEmail($leave->email); ?></td>
                      <td class="text-center"><?php echo $CI->GetDeptWithDeptID($leave->dept); ?></td>
                      <td class="text-center"><?php echo $leave->purpose; ?></td>
                      <td class="text-center"><?php echo date('d-m-Y ', strtotime($leave->from)); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y ', strtotime($leave->to)); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y ', strtotime($leave->created_at)); ?></td>
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
  <?php } ?>



<?php if($user->isHOD == 1){ ?>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="border-top: 3px solid orange;">
            <div class="box-header">
              <h3 class="box-title">All Pending Department Requests</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Full Name</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Purpose</th>
                  <th class="text-center">From</th>
                  <th class="text-center">To</th>
                  <th class="text-center">action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                <th class="text-center">Full Name</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Purpose</th>
                  <th class="text-center">From</th>
                  <th class="text-center">To</th>
                  <th class="text-center">action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($dept_pending_leaves as $leave){ ?>
                    <tr>
                    <td class="text-center"><?php  echo $CI->GetUserWithEmail($leave->email); ?></td>
                      <td class="text-center"><?php echo $CI->GetDeptWithDeptID($leave->dept); ?></td>
                      <td class="text-center"><?php echo $leave->purpose; ?></td>
                      <td class="text-center"><?php echo date('d-m-Y ', strtotime($leave->from)); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y ', strtotime($leave->to)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('leave/HodView/'.  $leave->id); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
                        
                      </td>
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

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="border-top: 3px solid lightblue;">
            <div class="box-header">
              <h3 class="box-title">All Approved Department Requests</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Full Name</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Purpose</th>
                  <th class="text-center">From</th>
                  <th class="text-center">To</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Full Name</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Purpose</th>
                  <th class="text-center">From</th>
                  <th class="text-center">To</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($dept_approved_leaves as $leave){ ?>
                    <tr>
                    <td class="text-center"><?php echo $CI->GetUserWithEmail($leave->email); ?></td>
                      <td class="text-center"><?php echo $CI->GetDeptWithDeptID($leave->dept); ?></td>
                      <td class="text-center"><?php echo $leave->purpose; ?></td>
                      <td class="text-center"><?php echo date('d-m-Y ', strtotime($leave->from)); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y ', strtotime($leave->to)); ?></td>
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
  <?php } ?>


<?php if($_SESSION['isHOD'] != 2){ ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="">
            <div class="box-header">
              <h3 class="box-title">All My Requests</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Full Name</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Purpose</th>
                  <th class="text-center">From</th>
                  <th class="text-center">To</th>
                  <th class="text-center">Status</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Full Name</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Purpose</th>
                  <th class="text-center">From</th>
                  <th class="text-center">To</th>
                  <th class="text-center">Status</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($user_leaves as $leave){ ?>
                    <tr>
                    <td class="text-center"><?php echo $CI->GetUserWithEmail($leave->email); ?></td>
                      <td class="text-center"><?php echo $CI->GetDeptWithDeptID($leave->dept); ?></td>
                      <td class="text-center"><?php echo $leave->purpose; ?></td>
                      <td class="text-center"><?php echo date('d-m-Y ', strtotime($leave->from)); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y ', strtotime($leave->to)); ?></td>
                      <td class="text-center">
                        <?php if($leave->process_level == 0)
                        {
                          echo "<span style='color:orange'>Pending</span>";
                        }
                        elseif($leave->process_level == 1)
                        {
                          echo "<span style='color:green'>Approved</span>";
                        }
                        elseif($leave->process_level < 0)
                        {
                          echo "<span style='color:red'>Rejected</span>";
                        }
                        ?>
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
    <?php } ?>
  </div>