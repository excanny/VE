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
                <form action="<?php echo site_url('Performance/MDUpdate/'. $performance->id);?>" method="POST">
                       <h4><u>SECTION I - Employee Data </u></h4>
                        <table class="table table-bordered table-condensed">
                        <tbody>
                            <tr>
                              <td colspan="2"><strong> Employee’s Name:</strong> <?php echo $CI->GetUserWithEmail($performance->staff_email); ?>
                              
                            </td>
                              
                              <td><strong>Department:</strong> <?php echo $CI->GetDeptWithDeptID($performance->dept); ?>
                              
                            </td>
                            </tr>
                            <tr>
                              <td><strong>Length of stay on the current Job: </strong> <?php echo $performance->job_length; ?></td>
                              <td><strong>Appraisal Period:</strong> <?php echo $performance->appraisal_period; ?> </td>
                              <td><strong>Date of Employment:</strong> 
                              <?php echo $performance->employ_date; ?>
                            </td>
                            </tr>
                            <tr>
                              <td colspan="3"><strong>Level of Academic Qualification:</strong> <?php echo $performance->academic_qual; ?> </td>
                            </tr>
                          </tbody>
                        </table>
                        <h4><u> SECTION II – REVIEW OF STAFF PERFORMANCE</u></h4>
                          (To be completed by HOD)
                          <h4> RATING SCALE</h4>
                          Use the ratings and definitions below to rate the individual’s ability to demonstrate the behaviours that support each competency. 
                          <table class="table table-bordered table-condensed">
                          
                            <tbody>
                              <tr>
                                <td><strong> PERFORMANCE RATING</strong></td>
                                <td><strong>DEFINITIONS </strong></td>
                                <td><strong>RATIONS</strong></td>
                              </tr>
                              <tr>
                                <td>Outstanding</td>
                                <td>Serves as a model of excellence in the competency </td>
                                <td>5</td>
                              </tr>
                              <tr>
                                <td>Exceeds Expectations</td>
                                <td>Exhibits significant strength in the competency </td>
                                <td>4</td>
                              </tr>
                              <tr>
                                <td>Meets Expectations</td>
                                <td>Exhibits significant strength in the competency </td>
                                <td>3</td>
                              </tr>
                              <tr>
                                <td>Below Expectations</td>
                                <td>Exhibits little or no proficiency in the competency  </td>
                                <td>2</td>
                              </tr>
                              <tr>
                                <td>Unacceptable</td>
                                <td>Exhibits no proficiency in the competency </td>
                                <td>1</td>
                              </tr>
                            </tbody>
                          </table>

                          <h4>EVALUATION OF CORE COMPETENCIES (40%)</h4>

                          <table class="table table-bordered table-condensed">
                          
                            <tbody>
                              <tr>
                                <td><strong> </strong></td>
                                <td><strong>CORE COMPETENCIES </strong></td>
                                <td width="100"><strong>STAFF's PICK</strong></td>
                                <td width="100"><strong>HOD's PICK</strong></td>
                                <td width="100"><strong>HR PICK</strong></td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td><strong>Leadership Qualities</strong> <br>
                                  •	Demonstrates leadership skills which include motivation, counselling, and direction of staff to accomplish objectives. 
                                   </td>
                                <td><?php echo $performance->leadership_staff; ?></td>
                                <td>
                                <?php echo $performance->leadership_hod; ?>
                                </td>
                                <td>
                                <?php echo $performance->leadership_hr; ?>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td><strong>Management Skills</strong> <br>
                                  •	Promotes teamwork, recognizes individual capabilities, delegates duties, trainsand coaches employees. 
                                   </td>
                                   <td><?php echo $performance->mgt_skills_staff; ?></td>
                                   <td><?php echo $performance->mgt_skills_hod; ?></td>
                                   <td><?php echo $performance->mgt_skills_hr; ?></td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td><strong>Problem solving/Decision-Making</strong> <br>
                                  •	Participates constructively in group problem solving and decision making, considers alternatives and consequences before making decisions. 
                                   </td>
                                <td><?php echo $performance->decision_staff; ?></td>
                                <td><?php echo $performance->decision_hod; ?></td>
                                <td><?php echo $performance->decision_hr; ?></td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td><strong>Strategic Planning and Organizational Development</strong> <br>
                                  •	Demonstrates ability to plan and prepare administrative unit programs, activities and services.  <br>
                                  Promotes and actively participates in organizational development processes. 
                                   </td>
                                   <td><?php echo $performance->planning_staff; ?></td>
                                   <td><?php echo $performance->planning_hod; ?></td>
                                   <td><?php echo $performance->planning_hr; ?></td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td> <strong>Business Understanding and Initiative</strong> <br>
                                  •	Seeks to understand the corporate, business strategies and operations. Shows inclination to initiate rather than react. <br>
                                  •	Thinks of different ways to get work done and add value to meet company needs. Willing to assume new and challenging assignments. 
                                   </td>
                                   <td><?php echo $performance->business_understanding_staff; ?></td>
                                   <td><?php echo $performance->business_understanding_hod; ?></td>
                                   <td><?php echo $performance->business_understanding_hr; ?></td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td> <strong>Customer Service and Consistent Quality</strong> <br>
                                  •	Treats internal and external clients with respect. Makes self-available to respond to customer needs. Establishes and maintains credibility with internal and external customers. 
                                  
                                   </td>
                                   <td><?php echo $performance->customer_service_staff; ?></td>
                                   <td><?php echo $performance->customer_service_hod; ?></td>
                                   <td><?php echo $performance->customer_service_hr; ?></td>
                              </tr>
                              <tr>
                                <td>7</td>
                                <td><strong>Interpersonal Skills and Openness to influence </strong> <br>
                                  •	Interacts with others courteously and with sensitivity. Understands the importance of early impressions. Listens and seeks to understand others’ point of view. 
                                  
                                   </td>
                                   <td><?php echo $performance->interpersonal_staff; ?></td>
                                   <td><?php echo $performance->interpersonal_hod; ?></td>
                                   <td><?php echo $performance->interpersonal_hr; ?></td>
                              </tr>
                              <tr>
                                <td>8</td>
                                <td> <strong>Disciplinary Measures </strong> <br>
                                  •	Reacts and applies disciplinary measures equitably to employees. Prompt in addressing disciplinary problems.                                   
                                   </td>
                                   <td><?php echo $performance->discipline_staff; ?></td>
                                   <td><?php echo $performance->discipline_hod; ?></td>
                                   <td><?php echo $performance->discipline_hr; ?></td>
                              </tr>
                              <tr>
                                <td>9</td>
                                <td> <strong>Budgetary Controls</strong> <br>
                                  •	Controls operating and capital costs by effectively utilizing staff, materials and equipments. Carefully monitors expenditures and works within budgetary constraints. 
                                  
                                   </td>
                                   <td><?php echo $performance->budget_control_staff; ?></td>
                                   <td><?php echo $performance->budget_control_hod; ?></td>
                                   <td><?php echo $performance->budget_control_hr; ?></td>
                              </tr>
                              <tr>
                                <td>10</td>
                                <td>
                                <strong>Communication Effectiveness and Personal Motivation</strong> <br>
                                  •	 Understands importance of communication and demonstrates good verbal and writing skills. Shows a desire to achieve and improve self. Have a positive orientation towards learning conveys by actions that this job is important. 

                                   </td>
                                   <td><?php echo $performance->communication_staff; ?></td>
                                   <td><?php echo $performance->communication_hod; ?></td>
                                   <td><?php echo $performance->communication_hr; ?></td>
                              </tr>
                              <tr>
                                <td colspan="4" class="text-center">% Total Assessment Rating : <span class="label label-primary" style="background:#EEEEEE;"><?php echo $performance->total_assessment_rating1; ?></span>(Total Rating/No of Score40%)</td>
                              </tr>
                            </tbody>
                          </table>

                          <h4>  ACHIEVEMENT (10%)</h4>
                          <p>   (To be completed by Staff)  </p>

                         <p>   <strong>  State any specific task (s) outside formal duties performed by you during the period under review that added value to our operations. (5%) </strong></p>
                         <strong> Staff Answer: </strong>
                              <textarea name="" id="" cols="30" rows="3" class="form-control" disabled><?php echo $performance->tasks; ?></textarea>
                                <br>
                              <p>   <strong>  State new transactions/deals introduced to the company or new ideas/techniques brought into the system that could result in cost savings, within the period under review. (5%) </strong></p>
                              <strong> Staff Answer: </strong>
                              <textarea name="" id="" cols="30" rows="3" class="form-control" disabled><?php echo $performance->cost_saving; ?></textarea>
                        <br>
                        <h4><strong>  GOALS: REVIEW OF KEY PERFORMANCE AREAS (50%)</strong></h4>
                           <?php if(empty($performance->performance_sheet)){?>
                                No Performance Sheet Submitted
                           <?php } else {?>
                               <a href="<?php echo base_url();?>uploads/evaluation_sheets/<?php echo $performance->performance_sheet;?>" download> Performance Sheet Submitted. Kindly Download</a>
                           <?php } ?>
                           <h4><strong>ACTION PLAN (NEXT PERIOD TARGET GOALS)</strong></h4>
                           <?php if(empty($performance->action_plan)){?>
                                No Action Plan Submitted
                           <?php } else {?>
                               <a href="<?php echo base_url();?>uploads/evaluation_sheets/<?php echo $performance->action_plan;?>" download> Action Plan Submitted. Kindly Download</a>
                          <?php } ?>
                          <br>
                          <br>
                          
                          <br>

                          <p class="text-center">  <strong> Total Assessment Rating:</strong> <span class="label label-primary" style="background:#EEEEEE;"><?php echo $performance->total_assessment_rating2; ?></span>  %</p>

                          <br>

                          </strong>
                          <table class="table table-bordered table-condensed text-center" style="font-weight:bolder">
                            <tr>
                              <td>Outstanding</td> <td>Exceeds Expectations </td> <td>Meets Expectations </td> <td>Below Expectations </td> <td>Unacceptable</td>
                            </tr>
                            <tr>
                              <td>85-100</td> <td>70- 84</td> <td>60-69 </td> <td>40 – 59</td> <td>0 - 39</td>
                            </tr>
                          </table>

                          <h4> <u> SECTION III GROWTH AND DEVELOPMENT</u>
                            </h4>

                            <p>   <strong>  Comment and give examples of key areas of strength the employee has demonstrated: </strong></p>
                            <strong>HOD's Answer: </strong>
                              <textarea name="staff_strength" id="" cols="30" rows="3" class="form-control" disabled><?php echo $performance->staff_strength; ?></textarea>
                                <br>
                                <p>   <strong>  Comment and give examples of key areas for development: </strong></p>
                                <strong>HOD's Answer: </strong>
                                <textarea name="areas_to_dev" id="" cols="30" rows="3" class="form-control" disabled><?php echo $performance->areas_to_dev; ?></textarea>
                                  <br>
                                  <p>   <strong>  Specific plans of action, recommended trainings for possible advancement in the company: </strong></p>
                                  <strong>HOD's Answer: </strong>
                                  <textarea name="recommended_trainings" id="" cols="30" rows="3" class="form-control" disabled><?php echo $performance->recommended_trainings; ?></textarea>
                                    <br>

                                    <h5><strong>HOD RECOMMENDATION</strong>(Tick as appropriate)</h5>
                                     <p style="background:#EEEEEE;">
                                     <?php echo $performance->recommendation; ?>
                                  </p>
                                    <br>
                                    <p class="text-center"> <strong> HOD's Name:</strong> <?php echo $performance->hod_name; ?>  <strong>Date of Appraisal:</strong><?php echo $performance->hod_review_date; ?> </p>

                                    <strong>HR Comment: </strong>
                                  <textarea  id="" cols="30" rows="3" class="form-control" disabled><?php echo $performance->hr_comment; ?></textarea>
                                    <br>
                                    <h5><strong>CHIEF GEOPHYSICIST’s COMMENT</strong></h5>

                                    <textarea name="md_comment" id="" cols="30" rows="3" class="form-control" required></textarea>
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