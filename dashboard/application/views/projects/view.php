
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Project Timeline
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url();?>/project">Project</a></li>
        <li class="active">Timeline</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
          <?php foreach($reports as $report){ ?>
            <li class="time-label">
                  <span class="bg-red">
                    <?php echo date('j M. Y', strtotime($report->created_at)); ?>
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-asterisk bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> <?php echo date('h:i a', strtotime($report->created_at)); ?></span>

                <h3 class="timeline-header"><a>Project Update Details </a>&nbsp; <i class="fa fa-arrows"></i> &nbsp;<?php echo date('d-m-Y', strtotime($report->created_at)); ?></h3>

                <div class="timeline-body">
                    <a class="btn btn-lg" href="<?php echo base_url('uploads/project-files/'. $report->file_name); ?>" style="background: <?php echo $report->color; ?>; color:#fff;" download><?php echo $report->file_name; ?></a>
                </div>
              </div>
            </li>
            <?php } ?>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-clock-o bg-gray"></i>
            </li>
          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->