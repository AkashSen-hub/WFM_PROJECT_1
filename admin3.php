<?php
    include_once'dbconnect.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    </head>
    
    <style>
        
        body {
  font-family: Arial, Helvetica, sans-serif;
}
        
    /* Header/Logo Title */
.jumbotron {
	 text-align: center;
    background-color: #f4511e;
    color: #fff;
    padding: 30px 25px;
    font-family: Montserrat, sans-serif;
  }
        
        /* Navigation Bar */
        
        .navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
        
        /* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}
        
        .navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}
        
        .p{
          font-size: 40px;  
            
        }
    </style>
<body>
    
    <div class="jumbotron text-center">
  <h1>Specialised Staffing Solution Pty LTD</h1> 
  <p>We help businesses thrive</p>    
</div>
    
    <div class="navbar">
  <a  href="Home1.php">Home</a>
    <a  href="Service.php">Our Services</a>
  <a  href="Book.php">Booking</a>
  <a href="Contact.php"> Contact Us</a> 
    <a   href="Signup.php">Sign Up</a>
            <a  class="active" href="admin3.php">Admin</a>

</div> 
    



 
   <b>  <p style="color:red;">Total Booking Requests.</p> </b>    
             
             <?php
         $sql = "SELECT * FROM booking;";
         $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
    
    if( $resultCheck > 0)  {
        while ($row = mysqli_fetch_assoc($result)){
                        
            echo $row['id']. "<br>";

            echo $row['fname']. "<br>";
            echo $row['lname']. "<br>";
            echo $row['mobile']. "<br>";
            echo $row['email']. "<br>";
            echo $row['service']. "<br>";
            echo $row['staff']. "<br>";
            echo $row['date']. "<br>";
            echo $row['start']. "<br>";
            echo $row['duration']. "<br>";
            echo $row['address']. "<br>";
            echo $row['consideration']. "<br>";
        }
    }
        
?>
    
       
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

footer {
  text-align: center;
  padding: 3px;
  background-color: #aaaa;
  color: white;
}
</style>


<footer>
  <p>Copyright © 2021 | Specialised Staffing Solutions Pty Ltd |<br>
 
</footer>



	</body>
</html>
