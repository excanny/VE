<?php
    $CI =& get_instance();
?> 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Budgets
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> All Budgets</li>
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
              <h3 class="box-title">All Company Approved Budgets - Accounts View</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                <th class="text-center">Budget ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                <th class="text-center">Budget ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($budgetsMD as $budget){ ?>
                    <tr>
                      <td class="text-center">BG<?php echo $budget->budget_ID; ?></td>
                      <td class="text-center"><?php echo $CI->GetUserWithEmail($budget->user_email); ?></td>
                      <td class="text-center"><?php echo $CI->GetDeptWithDeptID($budget->dept); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($budget->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('budget/AccountsView/'.  $budget->budget_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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

    <?php if($user->isHOD == 2 || $user->isMD == 1){ ?>

      <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="border-top: 3px solid lightblue;">
            <div class="box-header">
              <h3 class="box-title">All Company Pending Budgets</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Budget ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Budget ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($pending_budgetsMD as $budget){ ?>
                    <tr>
                      <td class="text-center">BG<?php echo $budget->budget_ID; ?></td>
                      <td class="text-center"><?php echo $CI->GetUserWithEmail($budget->user_email); ?></td>
                      <td class="text-center"><?php echo $CI->GetDeptWithDeptID($budget->dept); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($budget->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('Budget/MDView/'.  $budget->budget_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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
              <h3 class="box-title">All Company Approved Budgets</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                <th class="text-center">Budget ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                <th class="text-center">Budget ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($budgetsMD as $budget){ ?>
                    <tr>
                      <td class="text-center">BG<?php echo $budget->budget_ID; ?></td>
                      <td class="text-center"><?php echo $CI->GetUserWithEmail($budget->user_email); ?></td>
                      <td class="text-center"><?php echo $CI->GetDeptWithDeptID($budget->dept); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($budget->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('budget/MDView/'.  $budget->budget_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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
          <div class="box" style="border-top: 3px solid red;">
            <div class="box-header">
              <h3 class="box-title">All Pending Department Budgets</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                <th class="text-center">Budget ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                <th class="text-center">Budget ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($pending_dept_budget as $budget){ ?>
                    <tr>
                      <td class="text-center">BG<?php echo $budget->budget_ID; ?></td>
                      <td class="text-center"><?php echo $CI->GetUserWithEmail($budget->user_email); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($budget->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('budget/HodView/'.  $budget->budget_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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
              <h3 class="box-title">All Recommended Department Budgets</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                <th class="text-center">Budget ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Budget ID</th>
                  <th class="text-center">Uploaded By</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($dept_budget as $budget){ ?>
                    <tr>
                      <td class="text-center">BG<?php echo $budget->budget_ID; ?></td>
                      <td class="text-center"><?php //echo $CI->GetUserWithEmail($budget->user_email); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($budget->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('budget/HodView/'.  $budget->budget_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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
              <h3 class="box-title">All My Budgets</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">budget ID</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">budget ID</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Entry Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($user_budget as $budget){ ?>
                    <tr>
                      <td class="text-center">BG<?php echo $budget->budget_ID; ?></td>
                      <th class="text-center">
                      <?php if($budget->process_level == 0)
                      {
                        echo "Pending";
                      }
                      elseif($budget->process_level == 1)
                      {
                        echo "<span class='text-primary'>Recommended</span>";
                      }
                      elseif($budget->process_level == 2)
                      {
                        echo "<span class='text-success'>Approved</span>";
                      }
                      elseif($budget->process_level < 0)
                      {
                        echo "<span class='text-danger'>Rejected</span>";
                      }
                      ?>
                      </th>
                      <td class="text-center"><?php echo date('d-m-Y h:ia', strtotime($budget->created_at)); ?></td>
                      <td class="text-center"><a href="<?php echo site_url('budget/UserView/'.  $budget->budget_ID); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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