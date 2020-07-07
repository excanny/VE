<?php

session_start();

 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);


	function test_input($data) 
	{
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = test_input($_POST["email"]);
        $pass_word = $_POST["pass_word"];
        $invalid_login = "invalid_login";
	}
	
    
    
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
	    
	    $stmt = $conn->prepare("SELECT * FROM `clients` WHERE `email` = '$email'");
        $stmt->execute();

        $row = $stmt->fetch();
        //echo $stmt->rowCount();
        
            if($stmt->rowCount() == 1)
            {
            
                if (password_verify($pass_word, $row['pass_word'])) 
                {
                
                    
                    $_SESSION["client_id"] = $row['id'];
                    $_SESSION["client_email"] = $row['email'];
                    $_SESSION["client_name"] = $row['name'];

                    header('Location: client'); 
                }
                else
                {
                    
                   $_SESSION["error"] = "Wrong Password";
                    
                    header('Location: login'); 
                }
                 
                
	        }
	         else
             {
                  
                  
                  $_SESSION["error"] = "Wrong Email";
                  
                header('Location: login'); 
              }

	    }
	catch(PDOException $e)
	    {
	    echo $e->getMessage();
	    }
	$conn = null;
	
	?>