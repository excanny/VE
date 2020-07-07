<?php
    $CI =& get_instance();
?> 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      appraisal Evaluations
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">appraisal Evaluations</li>
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
        <div class="col-xs-12">
          <div class="box" style="border-top: 3px solid red;">
            <div class="box-header">
              <h3 class="box-title">All Pending Appraisal</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Dept</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center"> ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Dept</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($appraisalHRPending as $appraisal){ ?>
                    <tr>
                      <td class="text-center"><?php echo $appraisal->id; ?></td>
                      <td class="text-center"><?php echo $CI->GetUserWithEmail($appraisal->staff_email); ?></td>
                      <td class="text-center"><?php echo $CI->GetDeptWithDeptID($appraisal->dept); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($appraisal->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('appraisal/HRView/'.  $appraisal->id); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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
              <h3 class="box-title">All Treated Appraisal Evaluations</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">appraisal ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Dept</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">appraisal ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Dept</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($appraisalHRTreated as $appraisal){ ?>
                    <tr>
                      <td class="text-center"><?php echo $appraisal->id; ?></td>
                      <td class="text-center"><?php echo $CI->GetUserWithEmail($appraisal->staff_email); ?></td>
                      <td class="text-center"><?php echo $CI->GetDeptWithDeptID($appraisal->dept); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($appraisal->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('appraisal/HRViewDone/'.  $appraisal->id); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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