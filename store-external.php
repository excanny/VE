<?php

session_start();

$email = $_SESSION["client_email"];

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
//   $hash = openssl_random_pseudo_bytes(3);
//   $hash2 = bin2hex($hash);
   $first_name = test_input($_POST["first_name"]);
   $last_name = test_input($_POST["last_name"]);
   $name = $first_name . ' ' . $last_name;
   $file_id = test_input($_POST["file_id"]);
   $file_ext = test_input($_POST["file_ext"]);
   $target_dir = "dashboard/uploads/files";
   $fileName2 = basename($_FILES["upload"]["name"]);
   $fileName = $fileName2;
   $target_file = $target_dir . $fileName;
   $imageFileType2 = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   $imageFileType = '.' . $imageFileType2;
    
}


 if($imageFileType != $file_ext) 
 {
    $_SESSION['error'] = 'Wrong File Type! The file type you uploaded is not the file type specified for this FTP key. Expected filetype extension is '.$file_ext.'';
    header('Location: external-upload');
 }
 else
 {

     $servername = "localhost";
	 $username = "verityge_verityg";
	 $password = "SGA#?^X8E%Oq";
	 $dbname = "verityge_ve";

	
	try
	 {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
    	   
        if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) 
        {
            
            
            $stmt = $conn->prepare("UPDATE `files` SET uploader = ?, photo = ? WHERE id = ?");
      		$stmt->bindParam(1, $name, PDO::PARAM_STR);
    	    $stmt->bindParam(2, $fileName, PDO::PARAM_STR);
    	    $stmt->bindParam(3, $file_id, PDO::PARAM_STR);
    		$stmt->execute();
            
            $_SESSION['success'] = 'File has been uploaded successfully.';
            header('Location: files');
        } 
        else 
        {
            $_SESSION['error'] = "Sorry, there was an error uploading your file.";
            header('Location: external-upload');
        }

	 }
	catch(PDOException $e)
    {
    echo $e->getMessage();
    }
	$conn = null;
}

?>