
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Staff Page
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Staff Page</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row text-center">
            
            <!-- /.col -->
            <div class="col-md-7 text-center" style="margin: 0 0 0 21rem;;">
            <!-- Widget: user widget style 1 -->
            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-aqua-active">
                <h3 class="widget-user-username"><?php echo $staff->first_name . ' ' . $staff->last_name ; ?></h3>
                <h5 class="widget-user-desc"><?php echo $staff->role ; ?></h5>
                </div>
                
                <div class="widget-user-image mt-1">
                
                <img class="img-circle" src="<?php echo base_url('uploads/images/profile-photos/'.$staff->photo);?>" alt="User Avatar">
                </div>
                <div class="box-footer">
                <div class="row">
                    <div class="col-sm-4 border-right">
                    <div class="description-block">
                        <h5 class="description-header">Skills</h5>
                         <p>
                          <?php $skills = explode(',', $staff->skills); ?>
                        <span class="label label-danger"><?php echo $skills[0]; ?></span>
                        <span class="label label-success"><?php echo $skills[1]; ?></span>
                        <span class="label label-info"><?php echo $skills[2]; ?></span>
                        <span class="label label-warning"><?php echo $skills[3]; ?></span>
                      </p>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <!--<div class="col-sm-4 border-right">-->
                    <!--<div class="description-block">-->
                    <!--    <h5 class="description-header">13</h5>-->
                    <!--    <span class="description-text">PROJECTS</span>-->
                    <!--</div>-->
                    <!-- /.description-block -->
                    <!--</div>-->
                    <!-- /.col -->
                    <!--<div class="col-sm-4">-->
                    <!--<div class="description-block">-->
                    <!--    <h5 class="description-header">3</h5>-->
                    <!--    <span class="description-text">RECOGNITIONS</span>-->
                    <!--</div>-->
                    <!-- /.description-block -->
                    <!--</div>-->
                    <!-- /.col -->

                    <?php if($_SESSION['email'] == 'abayomi.adejonwo@veritygeo.com'){?>
                       <?php if($staff->isMD == 1){?>
                            <a href="<?php echo site_url('/user/RemoveMDRole/'. $staff->id);?>" class="btn btn-danger" onclick="return confirm('are you sure you want to remove this role?')">Remove MD Role</a>
                        <?php } else {?>
                            <a href="<?php echo site_url('/user/GiveMDRole/'. $staff->id);?>" class="btn btn-success" onclick="return confirm('are you sure you want to grant this role?')">Give MD Role</a>
                       <?php } ?>
                    <?php } ?>
                </div>
                <!-- /.row -->
                </div>
            </div>
            <!-- /.widget-user -->
            </div>
            <!-- /.col -->

      <!-- /.row -->
    </section>





 <!-- /.content -->
</div>


