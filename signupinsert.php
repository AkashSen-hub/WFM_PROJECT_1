


<?php



//session_start();
//header('location:Home.php');



$fullname = $_POST['fullname'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$psw = $_POST['psw'];


// Database connection
	$conn = new mysqli('localhost','root','','WFM');
	if($conn->connect_error)
            {
                echo "$conn->connect_error";
                die("Connection Failed : ". $conn->connect_error);
            } 

    else {
		
            $sql="INSERT INTO `signup` (`fullname`, `address`, `mobile`, `email`,`psw`) VALUES ('$fullname','$address','$mobile','$email','$psw')";
       


        if(mysqli_query($conn, $sql)===True){
                  header("Location: Signup1.php");
	  exit();
            
            echo "Registration successfully...";

        }else{
              echo  "You already used this email. Please try with different email."
                  .mysqli_error($conn);				
            }	

	   }		
		
		
		$conn->close();
        
    
	
	?>
	
	
	