<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}

/* Header/Logo Title */
.jumbotron {
	 text-align: center;
    background-color: #f4511e;
    color: #fff;
    padding: 30px 25px;
    font-family: Montserrat, sans-serif;
  }

/* Page Content */
.content {padding:20px;}
</style>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Specialised Staffing Solution Pty LTD</h1> 
  <p>We help businesses thrive</p>    
</div>


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
    
    /* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

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

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
    

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<div class="navbar">
  
    

</div> 
<h3></h3>















<form action="signupinsert.php" method="post" >

  <div class="container">

<H1>REGISTER YOUR ACCOUNT </H1>
      
    <hr>
	
	
	 <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Your full name..">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Your full Address..">
		 <label for="mobile">Mobile Number</label>
        <input type="text" id="mobile" name="mobile" placeholder="Your Phone Number..">

        <label for="email">Email / User Name</label>
		<input type="text" id="email" name="email" placeholder="Your email..">
        
		<label for="psw">Create Password</label>
        <input type="password" id="psw" name="psw" placeholder="Create Your Password..">
	    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <br>
     <label>
      <input type="checkbox" checked="checked" name="bussiness" style="margin-bottom:15px"> I'm not a bussiness but i still Need Staff
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="submit" class="registerbtn">Register</button>

    </div>
      <div class="container signin">
    <p>Already have an account? <a href="Home.php">Log In</a>.</p>
    </div>
  </div>
</form>























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
