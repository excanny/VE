<?php
    $CI =& get_instance();
?> 



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        budget Form
        <small>Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url();?>/budget">budget</a></li>
        <li class="active">budget Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
            <!-- left column -->
            <div class="col-md-12">    
                       <!-- right column -->
                <div class="col-md-6">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                    <h3 class="box-title">Basic Info</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="text-center"><strong >budget ID</strong></p>
                                <p class="text-center text-info">VG<?php echo $basic_info->budget_ID; ?></p>
                            </div>
                            <!-- <div class="col-lg-4">
                                 <p class="text-center"><strong>Uploaded By</strong></p>
                                <p class="text-center text-info"><?php //echo $basic_info->user_email; ?></p>
                            </div> -->
                            <div class="col-lg-6">
                                <p class="text-center"><strong>Entry Date</strong></p>
                                <p class="text-center text-info"><?php echo $basic_info->created_at; ?></p>
                            </div>
                        </div>
                    </div>
                    
                    </form>
                </div>
                <!-- /.box -->
              
                <!-- /.box -->
                </div>
                <div class="col-md-6">
                      <!-- general form elements disabled -->
                <div class="box box-warning">
                    <div class="box-header with-border">
                    <h3 class="box-title">Details Info</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <form role="form">
                        <!-- text input -->
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">S/N</th>
                                <th class="text-center">Item Name</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">cost</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; $total = 0; foreach ($details_info as $info) { ?>
                            <?php 
                                $total += $info->cost; 
                             ?>
                                <tr>
                                    <td class="text-center"><?php echo $i; ?></td>
                                    <td class="text-center"><?php echo $info->name; ?></td>
                                    <td class="text-center"><?php echo $info->description; ?></td>
                                    <td class="text-right"><?php echo '₦' . number_format(($info->cost), 2); ?></td>
                                </tr>
                            <?php $i++; } ?>  
                            </tbody>
                        </table>
                         <h4 class="text-right">Total: <strong><?php echo '₦' . number_format(($total),2); ?></strong></h4>
                    </form>
                    </div>
                    <!-- /.box-body -->
                    <!-- /.box-body -->
                   
                    <!-- /.box-footer -->
                </div>
                </div>
            <!-- /.box-body -->
        </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
</div>