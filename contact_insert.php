<?php






$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$country = $_POST['country'];
$subject = $_POST['subject'];


// Database connection
	$conn = new mysqli('localhost','root','','WFM');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		
		$sql="INSERT INTO `contact` (`firstname`, `lastname`, `mobile`, `country`, `subject`) VALUES ('$firstname','$lastname','$mobile','$country','$subject')"; 
							   
    }
	if(mysqli_query($conn, $sql)===True){
		
      header("Location: Contact1.php");
	  exit();

        echo "Enquiry successfully Submitted.";
	
	}else
    {
          echo  "Error".mysqli_error($conn);				
		}	

			
		
		
		$conn->close();
	
	?> 