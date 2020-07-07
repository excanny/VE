<?php

session_start();

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $key = test_input($_POST["key"]);
}



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
	    
	    $stmt = $conn->prepare("SELECT * FROM files WHERE `token` = '$key'");
        $stmt->execute();

            $result = $stmt->fetchAll();
            //var_dump($result);
            //echo $result[0]["photo"];
            
                if($result[0]['photo'] == null)
                {
                   
                    $_SESSION['file_id'] = $result[0]['id'];
                    $_SESSION['file_ext'] = $result[0]['file_ext'];
                    $_SESSION['logo'] = $result[0]['logo'];
                    header('Location: external-upload');
    
                }
                else
                {
                     $_SESSION['error'] = "Sorry! Invalid FTP key or FTP key already used.";
                     header('Location: files');
                }
            
            
	 }
	catch(PDOException $e)
	    {
	    echo $e->getMessage();
	    }
	$conn = null;

?>