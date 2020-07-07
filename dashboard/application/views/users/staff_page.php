<?php
    $CI =& get_instance();
?> 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Staff Lists
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Staff Lists</li>
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
    
  <?php if($_SESSION['isHOD'] == 1){ ?>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">All Pending Registrations</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr>
                  <th class="text-center">Full Name</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Full Name</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                
                <?php $i= 1; foreach($pending_regs as $staff){ ?>
                  <tr>
                    <td class="text-center"><a href="<?php echo site_url(); ?>/user/ProfilePage/<?php echo $staff->id; ?>"><?php echo $staff->first_name . ' ' . $staff->last_name; ?></a></td>
                    <td class="text-center">
                        <a href="<?php echo site_url(); ?>/user/ApproveLogin/<?php echo $staff->id; ?>" data-toggle="tooltip" title="Approve Registration"><i class="fa fa-check fa-lg" style="color:green;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo site_url(); ?>/user/RemoveRegistration/<?php echo $staff->id; ?>" data-toggle="tooltip" title="Remove Registration" onclick="return confirm('are you sure you want to remove this user?')"><i class="fa fa-times fa-lg" style="color:red;"></i></a>
                    </td>
                  </tr>
                <?php $i++; } ?>
                
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

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Staff Lists</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped datatable">
                <thead>
                <tr>
                  <th class="text-center">Full Name</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Role</th>
                  <th class="text-center">Birthday</th>
                  <?php if($_SESSION['email'] == 'abayomi.adejonwo@veritygeo.com'){?>
                    <th class="text-center">MD Role</th>
                  <?php } ?>
                  <th class="text-center">View</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Full Name</th>
                  <th class="text-center">Department</th>
                  <th class="text-center">Role</th>
                  <th class="text-center">Birthday</th>
                  <?php if($_SESSION['email'] == 'abayomi.adejonwo@veritygeo.com'){?>
                    <th class="text-center">MD Role</th>
                  <?php } ?>
                  <th class="text-center">View</th>
                </tr>
                </tfoot>
                <tbody>
                
                <?php $i= 1; foreach($staffs as $staff){ ?>
                  <tr>
                    <td class="text-center"><a href="<?php echo site_url(); ?>/user/ProfilePage/<?php echo $staff->id; ?>"><?php echo $staff->first_name . ' ' . $staff->last_name; ?></a></td>
                    <td class="text-center"><?php echo $CI->GetDeptWithDeptID($staff->dept); ?></td>
                    <td class="text-center"><?php echo $staff->role; ?></td>
                    <td class="text-center"><?php echo date('M d', strtotime($staff->dob)); ?></td>
                    <?php if($_SESSION['email'] == 'abayomi.adejonwo@veritygeo.com'){?>
                      <td class="text-center">
                        <?php if($staff->isMD == 1){?>
                              <a href="<?php echo site_url('/user/RemoveMDRole/'. $staff->id);?>" class="btn btn-danger btn-sm" onclick="return confirm('are you sure you want to remove this role?')">Remove MD Role</a>
                          <?php } else {?>
                              <a href="<?php echo site_url('/user/GiveMDRole/'. $staff->id);?>" class="btn btn-success btn-sm" onclick="return confirm('are you sure you want to grant this role?')">Give MD Role</a>
                        <?php } ?>
                      </td>
                    <?php } ?>
                    <td class="text-center"><a href="<?php echo site_url(); ?>/user/ProfilePage/<?php echo $staff->id; ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></a></td>
                  </tr>
                <?php $i++; } ?>
                
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