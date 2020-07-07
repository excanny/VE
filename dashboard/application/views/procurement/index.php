<?php
    $CI =& get_instance();
?> 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Procurement
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Procurement</li>
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
    
    <?php if($user->isAccountant == 1 || $user->isHOD == 2 || $user->isMD == 1){ ?>

       <!-- Main content -->
       <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="border-top: 3px solid green;">
            <div class="box-header">
              <h3 class="box-title">All Procured Requisitions</h3>
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
                  <?php foreach($procured_reqs as $req){ ?>
                    <tr>
                      <td class="text-center">VG<?php echo $req->req_ID; ?></td>
                      <td class="text-center"><?php echo $CI->GetUserWithEmail($req->user_email); ?></td>
                      <td class="text-center"><?php echo $CI->GetDeptWithDeptID($req->dept); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($req->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('procurement/View/'.  $req->req_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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
              <h3 class="box-title">All Approved Requisitions</h3>
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
                  <th class="text-center">Approval Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Req ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Approval Date</th>
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
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($req->modified_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('procurement/View/'.  $req->req_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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
          <div class="box" style="border-top: 3px solid lightblue;">
            <div class="box-header">
              <h3 class="box-title">All Approved Requisitions</h3>
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
                  <th class="text-center">Approval Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Req ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Approval Date</th>
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
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($req->modified_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('procurement/ProcureView/'.  $req->req_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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
              <h3 class="box-title">All Procured Requisitions</h3>
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
                  <?php foreach($procured_reqs as $req){ ?>
                    <tr>
                      <td class="text-center">VG<?php echo $req->req_ID; ?></td>
                      <td class="text-center"><?php echo $CI->GetUserWithEmail($req->user_email); ?></td>
                      <td class="text-center"><?php echo $CI->GetDeptWithDeptID($req->dept); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($req->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('procurement/ProcureView/'.  $req->req_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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

    </div>





