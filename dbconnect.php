

<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "WFM";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}




/*
mysql_connect('localhost','root','');
mysql_select_db('WFM');
?>








/*






/*



//set connection varianles
$host='locahost';
$username='root';
$password='';
$database_name='WFM ';






// Create  connection server and database 



$connection = mysqli_connect($host,$username,$password,$database_name);

// Check connection

if (mysqli_connect_errno());
    printf("connect failed:%s\n", mysqli_connect_error());
    exit();
//endif;


/*
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully.";

*/


/* 4. 

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










/* 1.
unset($CFG);
$CFG = new stdClass();


$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'Booking';
$CFG->dbuser    = 'root';
$CFG->dbpass    = '';




/* 2. 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root@localhost";
 $dbpass = "root";
 $db = "Booking";
    
    
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }


/* 3. 



//set connection variables
$host='locahost';
$username='root';
$password='root';
$database_name='Booking';
    
    //connection to server & database
    $connection = mysqli_connect($host, $username, $password, $database_name) ;

//check coonection
if (mysqli_connect_error());
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
end;


*/
    