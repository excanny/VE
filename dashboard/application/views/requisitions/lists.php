<?php
    $CI =& get_instance();
?> 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Requisitions
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Requisitions</li>
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


    <?php if($user->isAccountant == 1){ ?>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="border-top: 3px solid green;">
            <div class="box-header">
              <h3 class="box-title">All Company Approved Requisitions - Accounts View</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Req ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Req ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($reqsMD as $req){ ?>
                    <tr>
                      <td class="text-center">VG<?php echo $req->req_ID; ?></td>
                      <td class="text-center"><?php echo $CI->GetUserWithEmail($req->user_email); ?></td>
                      <td class="text-center"><?php echo $CI->GetDeptWithDeptID($req->dept); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($req->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('requisition/AccountsView/'.  $req->req_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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
    <?php if($_SESSION['isHOD'] == 2 || $user->isMD  == 1){ ?>

      <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="border-top: 3px solid red;">
            <div class="box-header">
              <h3 class="box-title">All Company Pending Requisitions</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Req ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Req ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($pending_reqsMD as $req){ ?>
                    <tr>
                      <td class="text-center">VG<?php echo $req->req_ID; ?></td>
                      <td class="text-center"><?php echo $CI->GetUserWithEmail($req->user_email); ?></td>
                      <td class="text-center"><?php echo $CI->GetDeptWithDeptID($req->dept); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($req->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('requisition/MDView/'.  $req->req_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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
              <h3 class="box-title">All Company Approved Requisitions</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Req ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Req ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($reqsMD as $req){ ?>
                    <tr>
                      <td class="text-center">VG<?php echo $req->req_ID; ?></td>
                      <td class="text-center"><?php echo $CI->GetUserWithEmail($req->user_email); ?></td>
                      <td class="text-center"><?php echo $CI->GetDeptWithDeptID($req->dept); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($req->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('requisition/MDView/'.  $req->req_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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



<?php if($_SESSION['isHOD'] == 1){ ?>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="border-top: 3px solid red;">
            <div class="box-header">
              <h3 class="box-title">All Pending Department Requisitions</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Req ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Req ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($pending_dept_req as $req){ ?>
                    <tr>
                      <td class="text-center">VG<?php echo $req->req_ID; ?></td>
                      <td class="text-center"><?php echo $CI->GetUserWithEmail($req->user_email); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($req->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('requisition/HodView/'.  $req->req_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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
              <h3 class="box-title">All Recommended Department Requisitions</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Req ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Req ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($dept_req as $req){ ?>
                    <tr>
                      <td class="text-center">VG<?php echo $req->req_ID; ?></td>
                      <td class="text-center"><?php echo $CI->GetUserWithEmail($req->user_email); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($req->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('requisition/HodView/'.  $req->req_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="">
            <div class="box-header">
              <h3 class="box-title">All My Requisitions</h3> &nbsp;
              <a href="<?php echo site_url();?>/requisition/Create"><i class="fa fa-plus-square fa-lg"></i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Req ID</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Req ID</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($user_req as $req){ ?>
                    <tr>
                      <td class="text-center">VG<?php echo $req->req_ID; ?></td>
                      <th class="text-center">
                      <?php if($req->process_level == 0)
                      {
                        echo "<span class='text-warning'>Pending</span>";
                      }
                      elseif($req->process_level == 1)
                      {
                        echo "<span class='text-primary'>Recommended</span>";
                      }
                      elseif($req->process_level == 2)
                      {
                        echo "<span class='text-success'>Approved</span>";
                      }
                      elseif($req->process_level < 0)
                      {
                        echo "<span class='text-danger'>Rejected</span>";
                      }
                      ?>
                      </th>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($req->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('requisition/UserView/'.  $req->req_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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