<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> 
        Create New Project 
        <small>Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Create Project</li>
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
        <!-- left column -->
        <div class="col-md-7">
          
            <!-- /.box-header -->      
      
            <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                    <h3 class="box-title">New Project Details</h3>
                    <a class="pull-right" data-toggle="modal" data-target="#modal-default2"><i class="fa fa-plus-square fa-lg"></i> Add New Client</a>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                    <form action="<?php echo site_url();?>/project/Store" method="post">
                      
                      <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group">
                          <label for="">Client Name</label>
                              <select name="client_email" class="form-control" required>
                                  <option value="">Select Client</option>
                                  <?php foreach ($clients as $client) { ?>
                                      <option value="<?php echo $client->email; ?>|<?php echo $client->short_code; ?>"><?php echo $client->name; ?></option>
                                  <?php } ?>
                              </select>
                          </div>
                        </div> 
                        <div class="col-lg-6">
                          <div class="form-group">
                          <label for="">Contract Name</label>
                            <input type="text" name="contract_no" class="form-control" required>
                          </div>
                        </div>
                      </div>
                      <div class="row"> 
                        <div class="col-lg-12">
                          <div class="form-group">
                          <label for="">Description:</label>
                            <textarea  id=""  rows="3" class="form-control" name="description" required></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                          <label for="">Start Date:</label>
                            <input type="text"  class="form-control datepicker" name="start" required>
                          </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                        <label for="">Expected End Date:</label>
                            <input type="text" class="form-control datepicker" name="end" required> 
                        </div>
                      </div>
                      </div>
                   
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>
                    <!-- /.box-footer -->
                    </form>
                  </div>
                </div>

            
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>







     </div> 