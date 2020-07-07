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
            <form action="<?php echo site_url();?>/Performance/CreateAction" method="POST" enctype="multipart/form-data">
                       <h4><u>SECTION I - Employee Data </u></h4>
                        <table class="table table-bordered table-condensed">
                          
                          <tbody>
                            <tr>
                              <td colspan="2"><strong> Employee’s Name:</strong> <input type="text"  value="<?php echo $user->first_name. ' ' . $user->last_name; ?>" disabled style="width:70%">
                              <input type="hidden" name="staff_email" value="<?php echo $user->email; ?>">
                            </td>
                              
                              <td><strong>Department:</strong> <?php echo $CI->GetDeptWithDeptID($user->dept); ?>
                              <input type="hidden" name="dept" value="<?php echo $user->dept; ?>" id="">
                            </td>
                            </tr>
                            <tr>
                              <td><strong>Length of stay on the current Job:</strong> <input type="number" name="job_length" id="" required></td>
                              <td><strong>Appraisal Period:</strong>
                                <select name="appraisal_period" id="" required style="padding:5px;">
                                  <option value="">Select a period</option>
                                  <option value="January - June">January - June</option>
                                  <option value="July - December">July - December</option>
                                </select>
                                <select id="year" name="year" class="" style="padding:5px;display:inline-block;" value="" required></select> 
                                
                              </td>
                              <td><strong>Date of Employment:</strong> 
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" id="" class="form-control input-sm pull-right datepicker2" name="employ_date" required>
                              </div>
                            </td>
                            </tr>
                            <tr>
                              <td colspan="3"><strong>Level of Academic Qualification:</strong> <input type="text" name="academic_qual" id="" style="width:70%" required> </td>
                             
                             
                            </tr>
                          </tbody>
                        </table>
                        <h4><u> SECTION II – REVIEW OF STAFF PERFORMANCE</u></h4>
                          
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
                                <td width="130"><strong>STAFF</strong></td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td><strong>Leadership Qualities</strong> <br>
                                  •	Demonstrates leadership skills which include motivation, counselling, and direction of staff to accomplish objectives. 
                                   </td>
                                <td>
                                  <select name="leadership_staff" id="" class="form-control" required>
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
                                <td><strong>Management Skills</strong> <br>
                                  •	Promotes teamwork, recognizes individual capabilities, delegates duties, trainsand coaches employees. 
                                   </td>
                                <td>
                                  <select name="mgt_skills_staff" id="" class="form-control" required>
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
                                <td><strong>Problem solving/Decision-Making</strong> <br>
                                  •	Participates constructively in group problem solving and decision making, considers alternatives and consequences before making decisions. 
                                   </td>
                                <td>
                                  <select name="decision_staff" id="" class="form-control" required>
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
                                <td><strong>Strategic Planning and Organizational Development</strong> <br>
                                  •	Demonstrates ability to plan and prepare administrative unit programs, activities and services.  <br>
                                  Promotes and actively participates in organizational development processes. 
                                   </td>
                                <td>
                                  <select name="planning_staff" id="" class="form-control" required>
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
                                <td>5</td>
                                <td> <strong>Business Understanding and Initiative</strong> <br>
                                  •	Seeks to understand the corporate, business strategies and operations. Shows inclination to initiate rather than react. <br>
                                  •	Thinks of different ways to get work done and add value to meet company needs. Willing to assume new and challenging assignments. 
                                   </td>
                                <td>
                                  <select name="business_understanding_staff" id="" class="form-control" required>
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
                                <td>6</td>
                                <td> <strong>Customer Service and Consistent Quality</strong> <br>
                                  •	Treats internal and external clients with respect. Makes self-available to respond to customer needs. Establishes and maintains credibility with internal and external customers. 
                                  
                                   </td>
                                <td>
                                  <select name="customer_service_staff" id="" class="form-control" required>
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
                                <td>7</td>
                                <td><strong>Interpersonal Skills and Openness to influence </strong> <br>
                                  •	Interacts with others courteously and with sensitivity. Understands the importance of early impressions. Listens and seeks to understand others’ point of view. 
                                  
                                   </td>
                                <td>
                                  <select name="interpersonal_staff" id="" class="form-control" required>
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
                                <td>8</td>
                                <td> <strong>Disciplinary Measures </strong> <br>
                                  •	Reacts and applies disciplinary measures equitably to employees. Prompt in addressing disciplinary problems.                                   
                                   </td>
                                <td>
                                  <select name="discipline_staff" id="" class="form-control" required>
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
                                <td>9</td>
                                <td> <strong>Budgetary Controls</strong> <br>
                                  •	Controls operating and capital costs by effectively utilizing staff, materials and equipments. Carefully monitors expenditures and works within budgetary constraints. 
                                  
                                   </td>
                                <td>
                                  <select name="budget_control_staff" id="" class="form-control" required>
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
                                <td>10</td>
                                <td>
                                <strong>Communication Effectiveness and Personal Motivation</strong> <br>
                                  •	 Understands importance of communication and demonstrates good verbal and writing skills. Shows a desire to achieve and improve self. Have a positive orientation towards learning conveys by actions that this job is important. 

                                   </td>
                                <td>
                                  <select name="communication_staff" id="" class="form-control" required>
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

                          <h4>  ACHIEVEMENT (10%)</h4>
                          <p>   (To be completed by Staff)  </p>

                         <p>   <strong>  State any specific task (s) outside formal duties performed by you during the period under review that added value to our operations. (5%) </strong></p>
                              <textarea name="tasks" id="" cols="30" rows="3" class="form-control"></textarea>
                                <br>
                              <p>   <strong>  State new transactions/deals introduced to the company or new ideas/techniques brought into the system that could result in cost savings, within the period under review. (5%) </strong></p>
                              <textarea name="cost_saving" id="" cols="30" rows="3" class="form-control"></textarea>
                        <br>
                           <h4> <strong> GOALS: REVIEW OF KEY PERFORMANCE AREAS (50%)</strong></h4>
                          <p>Attach a copy of your target sheet. </p>
                           <input type="file" name="performance_sheet" id="">

                         

                         <br>
                       
                        
                                    <h5><strong>ACTION PLAN (NEXT PERIOD TARGET GOALS)</strong></h5>
                                    <p>Enter the performance goals for the next period to be evaluated. Individual goals and objectives should align with your Unit job function and objectives. </p>
                                    <p>Attach a copy of your target sheet. </p>
                                    <input type="file" name="action_plan" id="">

                                      <br>
                                    <h4><u>SECTION IV PROFESSIONAL/CAREER DEVELOPMENT – POSSIBLE STEPS IN CAREER DEVELOPMENT
                                      </u></h4>

                                      <textarea name="career_dev" id="" cols="30" rows="3" class="form-control"></textarea>
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