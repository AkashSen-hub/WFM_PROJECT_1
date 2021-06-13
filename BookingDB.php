<?php

//session_start();
 //header('location:Book1.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$service = $_POST['service'];
$staff = $_POST['staff'];
$date = $_POST['date'];
$start = $_POST['start'];
$duration = $_POST['duration'];
$address = $_POST['address'];
$consideration = $_POST['consideration'];




// Database connection
	$conn = new mysqli('localhost','root','','WFM');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		
		 $sql="INSERT INTO `booking` (`fname`, `lname`, `mobile`, `email`,`service`,`staff`,`date`,`start`,`duration`,`address`,`consideration`) VALUES ('$fname','$lname','$mobile',
         '$email','$service','$staff','$date','$start','$duration','$address','$consideration')"; 
        
		//echo $sql;
        }					   
							 
	if(mysqli_query($conn, $sql)===True){
		
	header("Location: Book1.php");
	exit();


        echo "Booking successfully Done";
	
	}else
    {
          echo  "Error".mysqli_error($conn);				
		}	

			
		
		
		$conn->close();
	











/* Last TRy

require_once('dbconnect.php');


$fname = $_GET['fname'];
$lname = $_GET['lname'];
$mobile = $_GET['mobile'];
$email = $_GET['email'];
$service = $_GET['service'];
$staff = $_GET['staff'];
$consideration = $_GET['consideration'];


echo "<br>";


$my_query = "";

$my_query = "SELECT * from Booking where email = '$email' ";

$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0)
{
    
    echo "Sorry! This email already exists.";
}

else
{
    
    $my_query = "INSERT INTO `Booking` (`fname`, `lname`, `mobile`, `email`, `service`,'staff','consideration')VALUES ( '$fname', '$lname', '$mobile', '$email','$service','$staff','$consideration')";
    
    echo "<br>";
    
    $result = mysqli_query ($connection, $my_query);
    
    if($result)
    {
        
        echo "Item Successfully Added";
    }
    
    else
    {
        
        echo "<b>ERROR<b>";
    }
}


mysqli_close();

*/

/* 1. 

// database connection code


// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','Booking');

// get the post records

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$service = $_POST['service'];
$staff = $_POST['staff'];
$consideration = $_POST['consideration'];


// database insert SQL code
$sql = "INSERT INTO `Booking` (`fname`, `lname`, `mobile`, `email`, `service`,'staff','consideration','id') VALUES ( '$fname', '$lname', '$mobile', '$email','$service','$staff','$consideration','0')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}







/* 2. 
require_once('dbconnect.php');

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$mobile = $_GET['mobile'];
$email = $_GET['email'];
$service = $_GET['service'];
$staff = $_GET['staff'];
$consideration = $_GET['consideration'];



echo "<br>";

echo $email;

$my_query = "";
*/
?>