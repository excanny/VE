<?php
    $CI =& get_instance();
?> 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Performance Evaluation Form
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Performance Evaluation</li>
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
          <div class="box" style="border-top: 3px solid orange;">
            
            <!-- /.box-header -->
            <div class="box-body">
            <form action="<?php echo site_url();?>/Appraisal/CreateAction" method="POST" enctype="multipart/form-data">
                       <h4><u>SECTION I - Employee Data </u></h4>
                        <table class="table table-bordered table-condensed">
                          
                          <tbody>
                            <tr>
                              <td colspan="2"><strong> Employee’s Name:</strong> <?php echo $user->first_name. ' ' . $user->last_name; ?>
                              <input type="hidden" name="staff_email" value="<?php echo $user->email; ?>">
                            </td>
                              
                              <td><strong>Department:</strong> <?php echo $CI->GetDeptWithDeptID($user->dept); ?>
                              <input type="hidden" name="dept" value="<?php echo $user->dept; ?>" id="">
                            </td>
                            </tr>
                            <tr>
                              
                              <td colspan="2"><strong>Appraisal Period:</strong> 
                              
                                <select name="appraisal_period" id="" required style="padding:5px;">
                                  <option value="">Select a period</option>
                                  <option value="January - June">January - June</option>
                                  <option value="July - December">July - December</option>
                                </select>
                                <select id="year" name="year" class="" style="padding:5px;display:inline-block;" value="" required></select> 
                                
                              </td>
                               </td>
                              <td><strong>Date of Employment:</strong> 
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control input-sm pull-right datepicker2" name="employ_date" required>
                              </div>
                            </td>
                            </tr>
                            <tr>
                              <td colspan="3"><strong>Grade Level :</strong> <input type="text" name="academic_qual" id="" style="" required> </td>
                             
                             
                            </tr>
                          </tbody>
                        </table>

                        <br>
                           <h4><strong>GOALS: REVIEW OF KEY appraisal AREAS (50%)</strong></h4>
                          <p>Attach a copy of your target sheet. </p>
                           <input type="file" name="appraisal_sheet" id="">

                        <br>

                                    <h4><strong>ACTION PLAN (NEXT PERIOD TARGET GOALS)</strong></h4>
                                    <p> Performance goals for the next period to be evaluated on the target sheet. Individual goals and objectives should align with your Unit job function. </p>
                                    <p>Attach a copy of your target sheet. </p>
                                    <input type="file" name="action_plan" id="">

                                      <br>
                                    <h4><u>SECTION IV PROFESSIONAL/CAREER DEVELOPMENT – POSSIBLE STEPS IN CAREER DEVELOPMENT
                                      </u></h4>

                                      <textarea name="career_dev" id="" cols="30" rows="3" class="form-control" required></textarea>
                                      <br>
                                      
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
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