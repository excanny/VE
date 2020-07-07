<?php
    $CI =& get_instance();
?> 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        appraisal Evaluation Form
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> appraisal Evaluation</li>
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
            <form action="<?php echo site_url('Appraisal/HRUpdate/' . $appraisal->id);?>" method="POST">
                       <h4><u>SECTION I - Employee Data </u></h4>
                       <table class="table table-bordered table-condensed">
                        <tbody>
                            <tr>
                              <td colspan="2"><strong> Employee’s Name:</strong> <?php echo $CI->GetUserWithEmail($appraisal->staff_email); ?>
                              
                            </td>
                              
                              <td><strong>Department:</strong> <?php echo $CI->GetDeptWithDeptID($appraisal->dept); ?>
                              
                            </td>
                            </tr>
                            <tr>
                              <td><strong>Appraisal Period:</strong> <?php echo $appraisal->appraisal_period; ?> </td>
                              <td><strong>Date of Employment:</strong> 
                              <?php echo $appraisal->employ_date; ?>
                            </td>
                            </tr>
                            <tr>
                              <td colspan="3"><strong>Grade Level :</strong> <?php echo $appraisal->academic_qual; ?> </td>
                            </tr>
                          </tbody>
                        </table>

                        <br>

                        <p>The purpose of this evaluation is to communicate clearly to the individual evaluated how well he/she is meeting his/her work expectations. You are required to fill in all appropriate spaces below.</p>

                        <br>

                        <h4><u> SECTION II – REVIEW OF STAFF appraisal</u></h4>
                          
                          <h4> RATING SCALE</h4>
                          Use the ratings and definitions below to rate the individual’s ability to demonstrate the behaviours that support each competency. 
                          <table class="table table-bordered table-condensed">
                          
                            <tbody>
                              <tr>
                                <td><strong> appraisal RATING</strong></td>
                                <td><strong>DEFINITIONS </strong></td>
                                <td><strong>RATIONS</strong></td>
                              </tr>
                              <tr>
                                <td>Outstanding</td>
                                <td>appraisal is exceptional and far exceeds expectations. Consistently demonstrates excellent standards.  </td>
                                <td>5</td>
                              </tr>
                              <tr>
                                <td>Very Good</td>
                                <td>appraisal is consistent and exceeds expectations. </td>
                                <td>4</td>
                              </tr>
                              <tr>
                                <td>Good</td>
                                <td>appraisal is consistent. Clearly meets job requirements. </td>
                                <td>3</td>
                              </tr>
                              <tr>
                                <td>Needs Improvement</td>
                                <td>appraisal is consistent. Clearly meets job requirements.  </td>
                                <td>2</td>
                              </tr>
                              <tr>
                                <td>Unsatisfactory</td>
                                <td>appraisal is inadequate (below minimum acceptable standards  and expectations)  </td>
                                <td>1</td>
                              </tr>
                            </tbody>
                          </table>

                          <h4>QUALITATIVE SKILLS ASSESSMENT (20%)</h4>

                          <table class="table table-bordered table-condensed">
                          
                            <tbody>
                              <tr class="bg-primary">
                                <td><strong> </strong></td>
                                <td ><strong>Interpersonal Skills </strong></td>
                                <td width="130"><strong>HOD's Pick</strong></td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Deals with individuals respectfully and drives the company’s core values.
                                <td>
                                  <?php echo $appraisal->core_values; ?>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Committed to team work, success and goals; works in partnership with others.
                                   </td>
                                <td>
                                <?php echo $appraisal->team_work; ?>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Committed to self-development and innovation. 
                                   </td>
                                <td>
                                <?php echo $appraisal->innovative; ?>
                        
                                </td>
                              </tr>
                        
                            </tbody>
                          </table>


                          <br>


                          <table class="table table-bordered table-condensed">
                          
                            <tbody>
                              <tr class="bg-primary">
                                <td><strong> </strong></td>
                                <td ><strong>Technical Skills </strong></td>
                                <td width="130"><strong>HOD</strong></td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Excellent Job Knowledge.
                                <td>
                                <?php echo $appraisal->job_knowledge; ?>
                                  
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Analyses problems/issues and proffer solution(s).
                                   </td>
                                <td>
                                <?php echo $appraisal->analytic; ?>
                    
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Demonstrates awareness of the service promise to our external and internal customers. Awareness of industry, regulatory trends and current developments. 
                                   </td>
                                <td>
                                <?php echo $appraisal->awareness; ?>
                        
                                </td>
                              </tr>
                        
                            </tbody>
                          </table>


                          <br>


                        <table class="table table-bordered table-condensed">

                        <tbody>
                            <tr class="bg-primary">
                            <td><strong> </strong></td>
                            <td ><strong>Quality of Work </strong></td>
                            <td width="130"><strong>HOD</strong></td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>Follows up on business lead/work or issues to logical conclusion.
                            <td>
                            <?php echo $appraisal->follow_up; ?>
                            </td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>Speed of follow through on assigned task and pays attention to details.
                                </td>
                            <td>
                            <?php echo $appraisal->attention_to_details; ?>
                            </td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>Produces high quality work and displays good judgement at all times. 
                                </td>
                            <td>
                            <?php echo $appraisal->good_judgement; ?>
                            </td>
                            </tr>

                        </tbody>
                        </table>

                        <br>


                    <table class="table table-bordered table-condensed">

                    <tbody>
                        <tr class="bg-primary">
                        <td><strong> </strong></td>
                        <td ><strong>Business Development Skills</strong></td>
                        <td width="130"><strong>HOD</strong></td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Demonstrates awareness and good understanding of all Products and Services. 
                        <td>
                            <?php echo $appraisal->business_understanding; ?>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Patiently articulates customers’ needs in the most professional manner and meeting specific customers’ needs. 
                            </td>
                        <td>
                            <?php echo $appraisal->meet_customer_needs; ?>
                        </td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Exhibits good business acumen and selling/negotiation skills. 
                            </td>
                        <td>
                           <?php echo $appraisal->negotiate; ?>
                        </td>
                        </tr>
                        <tr>
                        <td>4</td>
                        <td>Dresses properly with a decent appearance at all times and comports self personally. 
                            </td>
                        <td>
                        <?php echo $appraisal->good_dress; ?>
                           
                        </td>
                        </tr>

                    </tbody>
                    </table>

                    <br>


                    <table class="table table-bordered table-condensed">

                    <tbody>
                        <tr class="bg-primary">
                        <td><strong> </strong></td>
                        <td ><strong>Leadership Skills </strong></td>
                        <td width="130"><strong>HOD</strong></td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Punctual to work and meets all timely commitments. 
                        <td>
                        <?php echo $appraisal->punctual; ?>
                            
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Takes on new challenges and responsibilities willingly and very assertive at all time. 
                            </td>
                        <td>
                        <?php echo $appraisal->assertive; ?>
                            
                        </td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Consistently exhibits confidence and enthusiasm on assigned tasks irrespective of circumstance. . 
                            </td>
                        <td>
                           <?php echo $appraisal->confidence; ?>
                        </td>
                        </tr>

                    </tbody>
                    </table>

                    <br>


                <table class="table table-bordered table-condensed">

                <tbody>
                    <tr class="bg-primary">
                    <td><strong> </strong></td>
                    <td ><strong>Communication Skills </strong></td>
                    <td width="130"><strong>HOD</strong></td>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>Ability to communicate effectively orally and in writing and discreet with company/customer information.
                    <td>
                        <?php echo $appraisal->communicate; ?>

                     
                    </td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>Provides timely and effective feedback on all relevant issues.  
                        </td>
                    <td>
                    <?php echo $appraisal->feedback; ?>
                        
                    </td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Patient in listening and sincerely seeks to understand others viewpoints.
                        </td>
                    <td>
                    <?php echo $appraisal->patient; ?>
                        
                    </td>
                    </tr>

                    <tr>
                    <td>4</td>
                    <td>Exhibits good telephone etiquette/manners while attending to customers. 
                        </td>
                    <td>
                       <?php echo $appraisal->telephone_etiquette; ?>
                        
                    </td>
                    </tr>

                </tbody>
                </table>

                <h5 class="text-center">% Total Assessment Rating  <span class="label label-primary" style="background:#EEEEEE;"> <strong><?php echo $appraisal->total_assessment_rating1; ?></span> %      (No of Score /Total Rating*40%)</h5>

                          <h4>  ACHIEVEMENT (10%)</h4>

                         <p>   <strong>  Describe the staff’s area of additional responsibilities and/or other work-related achievements at period under review  </strong></p>
                              <textarea  id="" cols="30" rows="3" class="form-control" disabled><?php echo $appraisal->responsible; ?></textarea>
                                <br>
                                     

                                <h4><strong>  GOALS: REVIEW OF KEY PERFORMANCE AREAS (50%)</strong></h4>
                           <?php if(empty($appraisal->appraisal_sheet)){?>
                                No Performance Sheet Submitted
                           <?php } else {?>
                               <a href="<?php echo base_url();?>uploads/appraisal_sheets/<?php echo $appraisal->appraisal_sheet;?>" download> Appraisal Sheet Submitted. Kindly Download</a>
                           <?php } ?>
                           <h4><strong>ACTION PLAN (NEXT PERIOD TARGET GOALS)</strong></h4>
                           <?php if(empty($appraisal->action_plan)){?>
                                No Action Plan Submitted
                           <?php } else {?>
                               <a href="<?php echo base_url();?>uploads/evaluation_sheets/<?php echo $appraisal->action_plan;?>" download> Action Plan Submitted. Kindly Download</a>
                          <?php } ?>
                          <br>
                          <br>

                          <p class="text-center">  <strong> Total Assessment Rating:</strong> <span class="label label-primary" style="background:#EEEEEE;"> <strong><?php echo $appraisal->total_assessment_rating2; ?></span>  %</p>

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

                            <p>   <strong>  Staff's strengths:: </strong></p>
                              <textarea  id="" cols="30" rows="3" class="form-control" disabled><?php echo $appraisal->staff_strength; ?></textarea>
                                <br>
                                <p>   <strong>  Areas for Improvement: </strong></p>
                                <textarea name="areas_to_dev" id="" cols="30" rows="3" class="form-control" disabled><?php echo $appraisal->areas_to_dev; ?></textarea>
                                  <br>
                                  <p>   <strong>  Recommended Trainings: </strong></p>
                                  <textarea name="recommended_trainings" id="" cols="30" rows="3" class="form-control" disabled><?php echo $appraisal->recommended_trainings; ?></textarea>
                                    <br>

                                    <h5><strong>RECOMMENDATIONS</strong></h5>
                                     <p style="background:#EEEEEE;">
                                     <?php echo $appraisal->recommendation; ?>
                                  </p>
                                    <br>
                                    <p class="text-center"> HOD's Name: <?php echo $appraisal->hod_name; ?></p>

                                    <h5><strong>HOD’s COMMENT</strong></h5>

                                    <textarea name="hr_comment" id="" cols="30" rows="3" class="form-control" disabled><?php echo $appraisal->hod_name; ?></textarea>
                                    <br>

                                    <h5><strong>HR’s COMMENT</strong></h5>

                                    <textarea name="hr_comment" id="" cols="30" rows="3" class="form-control"></textarea>
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