<?php
    $CI =& get_instance();
?> 


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Leave Info
        <small>Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url();?>/leave">Leave</a></li>
        <li class="active">Leave Details</li>
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
                    <h3 class="box-title">Basic Info <span>Pending Leave LV<?php echo $basic_info->id; ?></span></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="text-center"><strong >Leave ID</strong></p>
                                <p class="text-center text-info">LV<?php echo $basic_info->id; ?></p>
                            </div>
                            <div class="col-lg-4">
                                 <p class="text-center"><strong>Created By</strong></p>
                                <p class="text-center text-info"><?php echo $CI->GetUserWithEmail($basic_info->email); ?></p>
                            </div>
                            <div class="col-lg-4">
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
                            <tbody>
                                <tr>
                                    <th class="">From:</th>
                                    <td class=""><?php echo $basic_info->from; ?></td>
                                </tr> 
                                <tr>
                                    <th class="">To:</th>
                                    <td class=""><?php echo $basic_info->to; ?></td>
                                </tr> 
                                <tr>
                                    <th class="">Purpose:</th>
                                    <td class=""><?php echo $basic_info->purpose; ?></td>
                                </tr> 
                            </tbody>
                        </table>
                    </form>
                    </div>
                    <!-- /.box-body -->
                    <!-- /.box-body -->
                    <?php if($basic_info->process_level == 0){ ?>
                        <div class="box-footer">
                            <a href="<?php echo site_url('Leave/HodReject/'.$basic_info->id);?>" class="btn btn-danger" onclick="return confirm('are you sure you want to reject this item?')">Reject</a>
                            <a href="<?php echo site_url('Leave/HodRecommend/'.$basic_info->id);?>" class="btn btn-success pull-right" onclick="return confirm('are you sure you want to recommend this item?')">Recommend</a>
                        </div>
                    <?php } ?>
                    <!-- /.box-footer -->
                </div>
                </div>
            <!-- /.box-body -->
        </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
</div>