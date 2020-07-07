<?php
    $CI =& get_instance();
?> 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Projects
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Projects</li>
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
          <div class="box" style="">
            <div class="box-header">
              <h3 class="box-title">All My Projects</h3> &nbsp;
              <a href="<?php echo site_url(); ?>/project/create" class="pull-right"><i class="fa fa-plus-square fa-lg"> Add New Project</i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Client</th>
                  <th class="text-center">Project Name</th>
                  <th class="text-center">Contract No.</th>
                  <th class="text-center">Description</th>
                  <th class="text-center">Start Date</th>
                  <th class="text-center">Expected End Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Client</th>
                   <th class="text-center">Project Name</th>
                  <th class="text-center">Contract No.</th>
                  <th class="text-center">Description</th>
                  <th class="text-center">Start Date</th>
                  <th class="text-center">Expected End Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($projects as $project){ ?>
                    <tr>
                      <td class="text-center"><?php echo $CI->GetClientWithEmail($project->client_email); ?></td>
                       <td class="text-center"><?php echo $project->project_name; ?></td>
                      <td class="text-center"><?php echo $project->contract_no; ?></td>
                      <td class="text-center"><?php echo $project->description; ?></td>
                      <td class="text-center"><?php echo date('d-m-Y', strtotime($project->start)); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y', strtotime($project->end)); ?></td>
                      <td class="text-center">
                          <a href="<?php echo site_url('Project/View/'.  $project->projectID); ?>" data-toggle="tooltip" title="View Updates"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a>&nbsp;&nbsp;
                           <a href="<?php echo site_url('Project/Update/'.  $project->projectID); ?>" data-toggle="tooltip" title="Add Updates"><i class="fa fa-plus fa-lg" style="color:green;"></i></a>
                      </td>
                    </tr>
                  <?php } ?>
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



  