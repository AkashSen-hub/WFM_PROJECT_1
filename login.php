<?php



session_start(); 
include "dbconnect.php";

if (isset($_POST['fullname']) && isset($_POST['psw'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$fullname = validate($_POST['fullname']);
	$psw = validate($_POST['psw']);

	if (empty($fullname)) {
		header("Location: Home.php?error=User Name is required");
	    exit();
	}else if(empty($psw)){
        header("Location: Home.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM signup WHERE fullname='$fullname' AND psw='$psw'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
            
            $_SESSION['fullname'] = $firstname;
                
			$row = mysqli_fetch_assoc($result);
            if ($row['fullname'] === $fullname && $row['psw'] === $psw) {
            	$_SESSION['fullname'] = $row['fullname'];
            //	$_SESSION['name'] = $row['name'];
            //	$_SESSION['id'] = $row['id'];
            	header("Location: Home1.php");
		        exit();
            }
            else{
				header("Location: Home.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: Home.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: Home1.php");
	exit();
}








/*

$email = $_POST['email'];
$psw = $_POST['psw'];



session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'WFM')


$s = "select * from signup where email = '$email' && psw = '$psw'";

$result = mysqli_query($con, $s);


$num = mysqli_num_rows($result);

if($num -- 1){
    
header ('location:Home.php');
}
else{
    header ('location:Home.php');

}

/*

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
            echo "Registration successfully...";

        }else{
              echo  "You already used this email. Please try with different email."
                  .mysqli_error($conn);				
            }	

	   }		
		
		
		$conn->close();
	
	?>
	
	
	



/*
require_once('dbconnect.php');


$email = $_POST['email'];
$psw = $_POST['psw'];



		
        echo "<br>";
        
        $my_query = "";
        
        $my_query = "Select * from signup where email = '$email' and psw = '$psw'";
        
            
            
        $result = mysqli_query($connection, $my_query);    
           


       // if (mysqli_query($conn, $sql)===True)
            
                if (mysqli_num_rows($result)> 0)

        {
            echo " Congrats, you are now logged in";

        }
        
        else
        
        {
              echo  "Invalid Email/password"
                  .mysqli_error($conn);				
            }	

	  // }		
		
		
		//$conn->close();
        
        */
        
	
	?>
	