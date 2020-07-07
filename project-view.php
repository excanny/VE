<?php

session_start();

if(!isset($_SESSION["client_email"]))
{
    header('Location: login');
    exit();
}

 $email = $_SESSION["client_email"];
 
$id = $_GET['id'];

include('dbconnect.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // prepare and bind
    $stmt = $conn->prepare("SELECT * FROM project_history WHERE projectID = '$id' ORDER BY id DESC");
    $stmt->execute();

    $reports = $stmt->fetchAll();

    //var_dump($reports);
    
    }
catch(PDOException $e)
    {
    //echo $e->getMessage();
    }
$conn = null;
?>

<?php include('header2.php'); ?>

<?php include('aside.php'); ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Project Timeline
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php //echo site_url();?>/project">Project</a></li>
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
                    <?php echo date('j M. Y', strtotime($report["created_at"])); ?>
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-asterisk bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> <?php echo date('h:i a', strtotime($report["created_at"])); ?></span>

                <h3 class="timeline-header"><a>Project Update Details </a>&nbsp; <i class="fa fa-arrows"></i> &nbsp;<?php echo date('d-m-Y', strtotime($report["created_at"])); ?></h3>

                <div class="timeline-body">
                        <p><?php echo $report["title"]; ?></p>
                        <a class="btn btn-lg" href="http://veritygeo.com/demo/dashboard/uploads/project-files/<?php echo $report["file_name"]; ?>" style="background:<?php echo $report["color"]; ?>; color:#fff;" download><?php echo $report["file_name"]; ?></a>
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



<?php include('footer2.php'); ?>