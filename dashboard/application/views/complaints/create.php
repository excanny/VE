<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Complaints Form
        <small>Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Complaints</li>
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
        <!-- left column -->
        
                <div class="col-md-7">
                        
                    <!-- quick email widget -->
                    <div class="box box-info">
                      <div class="box-header">
                        <i class="fa fa-envelope"></i>

                        <h3 class="box-title">Complaints Details</h3>
                        <!-- tools box -->
                        <!--<div class="pull-right box-tools">-->
                        <!--  <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"-->
                        <!--          title="Remove">-->
                        <!--    <i class="fa fa-times"></i></button>-->
                        <!--</div>-->
                        <!-- /. tools -->
                      </div>
                      <div class="box-body">
                      <form action="<?php echo site_url();?>/Complaints/CreateAction" method="post">
                          <div class="form-group">
                            <!-- <input type="email" class="form-control" name="emailto" placeholder="Email to:"> -->
                             <!-- Select multiple-->      
                             <select multiple class="form-control" name="recipients[]" required>
                                
                                <?php foreach ($staffs as $staff) { ?>
                                    <option value="<?php echo $staff->email; ?>"><?php echo '<i style="font-size:20px;">To:</i>' . $staff->first_name . ' ' . $staff->first_name; ?></option>
                                <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                          </div>
                          <div>
                            <textarea class="textarea" placeholder="Message"
                                      style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="message" required></textarea>
                          </div>
                        
                      </div>
                      <div class="box-footer clearfix">
                        <button type="submit" class="pull-right btn btn-success">Send
                          <i class="fa fa-arrow-circle-right"></i></button>
                      </div>
                      </form>
                    </div>
                </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
       
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>