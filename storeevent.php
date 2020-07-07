<?php

 session_start();

 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);



$email = $_SESSION["client_email"];

$name = $_SESSION["client_name"];

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = test_input($_POST["title"]);
    $description = test_input($_POST["description"]);
    $start_date = test_input($_POST["start_date"]);
    $start_time = test_input($_POST["start_time"]);
    $end_date = test_input($_POST["end_date"]);
    $end_time = test_input($_POST["end_time"]);
    $start_DT = date('Y-m-d H:i:s', strtotime("$start_date $start_time"));
	$end_DT = date('Y-m-d H:i:s', strtotime("$end_date $end_time"));
    $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
}

//var_dump($_POST);

 //include('dbconnect.php');
 
     $servername = "localhost";
	 $username = "verityge_verityg";
	 $password = "SGA#?^X8E%Oq";
	 $dbname = "verityge_ve";

    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // prepare and bind
        $stmt = $conn->prepare("INSERT INTO general_events(creator, client_email, title, description, start, end, color) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $email, PDO::PARAM_STR);
        $stmt->bindParam(3, $title, PDO::PARAM_STR);
        $stmt->bindParam(4, $description, PDO::PARAM_STR);
        $stmt->bindParam(5, $start_DT, PDO::PARAM_STR);
        $stmt->bindParam(6, $end_DT, PDO::PARAM_STR);
        $stmt->bindParam(7, $color, PDO::PARAM_STR);
        $stmt->execute();
        
        $_SESSION['success'] = 'Event created successfully';
        
        header('Location: client');
      // echo '
    //     Event successfully created
    //               ';
			
	   // header('refresh:2; url=client'); 
    
    }
catch(PDOException $e)
    {
        echo $e->getMessage();
        header('Location: client');
    }
$conn = null;
?>

                     
