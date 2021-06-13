<?php


$email = $_POST['email'];
$psw = $_POST['psw'];
$pswsnd = $_POST['pswsnd'];

if (!empty($email) ||  !empty($psw) ||  !empty($pswsnd) ){
    
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "WFM";
    
    //Create a connection
    $conn = new mysqli ($host, $dbUsername, $dbPassword, $dbname );
    
    if  (mysqli_connect_error()) {
        die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
        
        $SELECT = "SELECT email From register Where email = '{$email}'' Limit 1";
        $INSERT = "INSERT Into register (email, pws, pws-repeat) values ('{$email}', '{$psw}', '{$pswsnd}')";
        
            echo "<br>sql:$SELECT";
                    echo "<br>sql:$INSERT";

        exit;
        
            //Prepare Statement
            $stmt = $conn->prepare($SELECT);
           // $stmt->blind_param("s", $email);
            $stmt->execute();
            //$stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;
        
        if ($rnum=0) {
            $stmt->close();
            
            $stmt = $conn->prepare($INSERT);
            //$stmt->bind_param("sss", $email, $pwd, $pswsnd);
            $stmt->execute();
            echo "New record inserted succesfully" ;
        }
        else {
            
            echo "Someone already register using this email";
        }
        
        $stmt->close();
        $conn->close();
        }
         }
     else {
     echo "All field are required";
    die();
     } 
     


/*  1

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection between server and database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (email, psw, pswsnd) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $email, $psw, $pswsnd);

// set parameters and execute
$email = "john@example.com";
$psw = "123";
$pswsnd = "123";
$stmt->execute();


echo "New records created successfully";

$stmt->close();
$conn->close();


*/






/* 1. 


     */
    ?>