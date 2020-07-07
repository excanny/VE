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
            <form action="<?php echo site_url('/Appraisal/HODUpdate/' . $appraisal->id);?>" method="POST">
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
                                <td>Performance is exceptional and far exceeds expectations. Consistently demonstrates excellent standards.  </td>
                                <td>5</td>
                              </tr>
                              <tr>
                                <td>Very Good</td>
                                <td>appraisal is consistent and exceeds expectations. </td>
                                <td>4</td>
                              </tr>
                              <tr>
                                <td>Good</td>
                                <td>Performance is consistent. Clearly meets job requirements. </td>
                                <td>3</td>
                              </tr>
                              <tr>
                                <td>Needs Improvement</td>
                                <td>Performance is inconsistent. Meets requirements of the job occasionally.   </td>
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
                                <td width="130"><strong>HOD</strong></td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Deals with individuals respectfully and drives the company’s core values.
                                <td>
                                  <select name="core_values" id="" class="form-control" required>
                                    <option value="">Select One</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Committed to team work, success and goals; works in partnership with others.
                                   </td>
                                <td>
                                  <select name="team_work" id="" class="form-control" required>
                                    <option value="">Select One</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Committed to self-development and innovation. 
                                   </td>
                                <td>
                                  <select name="innovative" id="" class="form-control" required>
                                    <option value="">Select One</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                  </select>
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
                                  <select name="job_knowledge" id="" class="form-control" required>
                                    <option value="">Select One</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Analyses problems/issues and proffer solution(s).
                                   </td>
                                <td>
                                  <select name="analytic" id="" class="form-control" required>
                                    <option value="">Select One</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                  </select>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Demonstrates awareness of the service promise to our external and internal customers. Awareness of industry, regulatory trends and current developments. 
                                   </td>
                                <td>
                                  <select name="awareness" id="" class="form-control" required>
                                    <option value="">Select One</option>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                  </select>
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
                                <select name="follow_up" id="" class="form-control" required>
                                <option value="">Select One</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                                </select>
                            </td>
                            </tr>
                            <tr>
                            <td>2</td>
                            <td>Speed of follow through on assigned task and pays attention to details.
                                </td>
                            <td>
                                <select name="attention_to_details" id="" class="form-control" required>
                                <option value="">Select One</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                                </select>
                            </td>
                            </tr>
                            <tr>
                            <td>3</td>
                            <td>Produces high quality work and displays good judgement at all times. 
                                </td>
                            <td>
                                <select name="good_judgement" id="" class="form-control" required>
                                <option value="">Select One</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                                </select>
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
                            <select name="business_understanding" id="" class="form-control" required>
                            <option value="">Select One</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                            </select>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Patiently articulates customers’ needs in the most professional manner and meeting specific customers’ needs. 
                            </td>
                        <td>
                            <select name="meet_customer_needs" id="" class="form-control" required>
                            <option value="">Select One</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                            </select>
                        </td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Exhibits good business acumen and selling/negotiation skills. 
                            </td>
                        <td>
                            <select name="negotiate" id="" class="form-control" required>
                            <option value="">Select One</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                            </select>
                        </td>
                        </tr>
                        <tr>
                        <td>4</td>
                        <td>Dresses properly with a decent appearance at all times and comports self personally. 
                            </td>
                        <td>
                            <select name="good_dress" id="" class="form-control" required>
                            <option value="">Select One</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                            </select>
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
                            <select name="punctual" id="" class="form-control" required>
                            <option value="">Select One</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                            </select>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Takes on new challenges and responsibilities willingly and very assertive at all time. 
                            </td>
                        <td>
                            <select name="assertive" id="" class="form-control" required>
                            <option value="">Select One</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                            </select>
                        </td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Consistently exhibits confidence and enthusiasm on assigned tasks irrespective of circumstance. . 
                            </td>
                        <td>
                            <select name="confidence" id="" class="form-control" required>
                            <option value="">Select One</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                            </select>
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
                        <select name="communicate" id="" class="form-control" required>
                        <option value="">Select One</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                        </select>
                    </td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td>Provides timely and effective feedback on all relevant issues.  
                        </td>
                    <td>
                        <select name="feedback" id="" class="form-control" required>
                        <option value="">Select One</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                        </select>
                    </td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td>Patient in listening and sincerely seeks to understand others viewpoints.
                        </td>
                    <td>
                        <select name="patient" id="" class="form-control" required>
                        <option value="">Select One</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                        </select>
                    </td>
                    </tr>

                    <tr>
                    <td>4</td>
                    <td>Exhibits good telephone etiquette/manners while attending to customers. 
                        </td>
                    <td>
                        <select name="telephone_etiquette" id="" class="form-control" required>
                        <option value="">Select One</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                        </select>
                    </td>
                    </tr>

                </tbody>
                </table>

                <h5 class="text-center">% Total Assessment Rating  <input type="number" name="total_assessment_rating1"> %      (No of Score /Total Rating*40%)</h5>

                          <h4>  ACHIEVEMENT (10%)</h4>

                         <p>   <strong>  Describe the staff’s area of additional responsibilities and/or other work-related achievements at period under review  </strong></p>
                              <textarea name="responsible" id="" cols="30" rows="3" class="form-control"></textarea>
                                <br>
                                     

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
                               <a href="<?php echo base_url();?>uploads/appraisal_sheets/<?php echo $appraisal->action_plan;?>" download> Action Plan Submitted. Kindly Download</a>
                          <?php } ?>
                          <br>
                          <br>

                         

                         <br>

                          <p class="text-center">  <strong> Total Assessment Rating:</strong> <input type="number" name="total_assessment_rating2" id="" required>  %</p>

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
                              <textarea name="staff_strength" id="" cols="30" rows="3" class="form-control" required></textarea>
                                <br>
                                <p>   <strong>  Areas for Improvement: </strong></p>
                                <textarea name="areas_to_dev" id="" cols="30" rows="3" class="form-control" required></textarea>
                                  <br>
                                  <p>   <strong>  Recommended Trainings: </strong></p>
                                  <textarea name="recommended_trainings" id="" cols="30" rows="3" class="form-control" required></textarea>
                                    <br>

                                    <h5><strong>RECOMMENDATIONS</strong>(Tick as appropriate)</h5>
                                     <p>
                                     <label class="radio-inline"><input type="radio" name="recommendation" value="To Confirm" required>To Confirm </label>
                                    <label class="radio-inline"><input type="radio" name="recommendation" value="Promotion Potential">Promotion Potential </label>
                                    <label class="radio-inline"><input type="radio" name="recommendation" value="Promote">Promote</label>
                                    <label class="radio-inline"><input type="radio" name="recommendation" value="Letter of Commendation">Letter of Commendation </label>  
                                    <label class="radio-inline"><input type="radio" name="recommendation" value="Salary Review">Salary Review</label>
                                    <label class="radio-inline"><input type="radio" name="recommendation" value="Defer of Confirmation">Defer of Confirmation </label>
                                    <label class="radio-inline"><input type="radio" name="recommendation" value="Letter of Non-Performance">Letter of Non-Performance</label>
                                    <label class="radio-inline"><input type="radio" name="recommendation" value="Termination">Termination</label>
                                  </p>
                                    <br>
                                    <p class="text-center"> HOD's Name: <input type="text" name="hod_name" id="" required>  <input type="hidden" name="hod_review_date" value="<?php echo date('Y-m-d'); ?>"> </p>

                                    <h5><strong>HOD’s COMMENT</strong></h5>

                                    <textarea name="hr_comment" id="" cols="30" rows="3" class="form-control" required></textarea>
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