<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Staff  Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a>Profile</a></li>
      </ol>
    </section>
    
    
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
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile text-center">
            <a href="" data-toggle="modal" data-target="#modal-default"><img src="<?php 
                
                echo base_url('uploads/images/profile-photos/100/'. $user->photo);?>" class="img-circle" alt="User Image"></a>
                 
              <h3 class="profile-username text-center"><?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?></h3>

              <p class="text-muted text-center"><?php echo $user->role; ?></p>

              <!--<ul class="list-group list-group-unbordered">-->
              <!--  <li class="list-group-item">-->
              <!--    <b>Followers</b> <a class="pull-right">1,322</a>-->
              <!--  </li>-->
              <!--  <li class="list-group-item">-->
              <!--    <b>Following</b> <a class="pull-right">543</a>-->
              <!--  </li>-->
              <!--  <li class="list-group-item">-->
              <!--    <b>Friends</b> <a class="pull-right">13,287</a>-->
              <!--  </li>-->
              <!--</ul>-->

              <!--<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
               <?php echo $user->edu_class . ' ' . 'in' . ' ' . $user->edu_course . ' ' . 'from' . ' ' .  $user->edu_school; ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted text-capitalize"> <?php echo $user->location; ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                  <?php $skills = explode(',', $user->skills); ?>
                <span class="label label-danger"><?php echo $skills[0]; ?></span>
                <span class="label label-success"><?php echo $skills[1]; ?></span>
                <span class="label label-info"><?php echo $skills[2]; ?></span>
                <span class="label label-warning"><?php echo $skills[3]; ?></span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Bio</strong>

              <p><?php echo $user->bio; ?></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Change Profile Picture</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                    <div>
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Change Profile Picture</h4>
                            </div>
                            <!--enctype="multipart/form-data"-->
                            <div class="modal-body">
                               <form action="<?php echo site_url('welcome/ChangeProfilePicture/'. $user->id);?>" method="post" enctype="multipart/form-data">
                            
                               <input type="file" class="input-id" name="photo"  data-browse-on-zone-click="true" data-show-upload="false" required>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-success">Update</button>
                            </div>
                          </div>
                          </form>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->

              </div>

              <div class="tab-pane" id="settings">
                <form action="<?php echo site_url();?>/welcome/ProfileUpdate" class="form-horizontal" id="profile-form" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Role</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="role" value="<?php echo $user->role; ?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                      <label for="inputEmail" class="col-sm-2 control-label">Education</label>
                      <div class="col-sm-10">
                        <div class="row">
                            <div class="col-md-4">
                              <label><small>Class Of Degree</small></label>
                              <input type="text" class="form-control"  name="edu_class" value="<?php echo $user->edu_class; ?>" >
                            </div>
                        
                            <div class="col-md-4">
                              <label><small>Major</small></label>
                              <input type="text" class="form-control"  name="edu_course" value="<?php echo $user->edu_course; ?>" >
                            </div>
                            <div class="col-md-4">
                              <label><small>Institution</small></label>
                              <input type="text" class="form-control"  name="edu_school" value="<?php echo $user->edu_school; ?>" >
                            </div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputEmail" class="col-sm-2 control-label">Skills</label>
                      <div class="col-sm-10">
                        <div class="row">
                            <div class="col-md-3">
                              <input type="text" class="form-control"  name="skill1" value="<?php echo $skills[0]; ?>" >
                            </div>
                        
                            <div class="col-md-3">
                              <input type="text" class="form-control"  name="skill2" value="<?php echo $skills[1]; ?>" >
                            </div>
                            <div class="col-md-3">
                              <input type="text" class="form-control"  name="skill3" value="<?php echo $skills[2]; ?>" >
                            </div>
                            <div class="col-md-3">
                              <input type="text" class="form-control"  name="skill4"  value="<?php echo $skills[3]; ?>" >
                            </div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Location</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control"  name="location" value="<?php echo $user->location; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Achievements</label>

                    <div class="col-sm-10">
                      <textarea class="form-control"  name="achievements"><?php echo $user->achievements; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Bio</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" name="bio" ><?php echo $user->bio; ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" class="btn btn-success" value="Save Changes"/>
                    </div>
                  </div>

                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>