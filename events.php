<?php

session_start();

   $email = $_SESSION["client_email"];

  $servername = "localhost";
	 $username = "verityge_verityg";
	 $password = "SGA#?^X8E%Oq";
	 $dbname = "verityge_ve";

	
	try
	 {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    $stmt = $conn->prepare("SELECT * FROM general_events WHERE `client_email` = '$email'");
        $stmt->execute();

            $result = $stmt->fetchAll();
            
            //var_dump($result);
            
            
            foreach($result as $row)
            {
             $data[] = array(
              'id'   => $row["id"],
              'title'   => $row["title"] . ' ' . 'By' . ' ' . $row["creator"],
              'start'   => $row["start"],
              'end'   => $row["end"],
              'backgroundColor'   => $row["color"]
             );
            }
            
            echo json_encode($data);
            
	 }
	catch(PDOException $e)
	    {
	    echo $e->getMessage();
	    }
	$conn = null;

?>