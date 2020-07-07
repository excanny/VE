<?php

session_start();

if(!isset($_SESSION["client_email"]))
{
    header('Location: login');
    exit();
}

 $email = $_SESSION["client_email"];

include('dbconnect.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // prepare and bind
    $stmt = $conn->prepare("SELECT * FROM projects JOIN clients ON projects.client_email=clients.email WHERE client_email= '$email'");
    $stmt->execute();

    $result = $stmt->fetchAll();

    //var_dump($result);
    
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
         Projects
        <small>all <?php echo $result[0]['name']; ?> projects</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Projects</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo $name; ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Contract No.</th>
                  <th class="text-center">Project Name</th>
                  <th class="text-center">Description</th>
                  <th class="text-center">Start Date</th>
                  <th class="text-center">Expected End Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Contract No.</th>
                  <th class="text-center">Project Name</th>
                  <th class="text-center">Description</th>
                  <th class="text-center">Start Date</th>
                  <th class="text-center">Expected End Date</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($result as $row){ ?>
                    <tr>
                      <td class="text-center"><?php echo $row['contract_no']; ?></td>
                      <td class="text-center"><?php echo $row['project_name']; ?></td>
                      <td class="text-center"><?php echo $row['description']; ?></td>
                      <td class="text-center"><?php echo date('d-m-Y', strtotime($row['start'])); ?></td>
                      <td class="text-center"><?php echo date('d-m-Y', strtotime($row['end'])); ?></td>
                      <td class="text-center"><a href="project-view?id=<?php echo htmlspecialchars($row['projectID']);?>" data-toggle="tooltip" title="View Project"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
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




<?php include('footer2.php'); ?>