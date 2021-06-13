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



.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}




    
    * {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

    /* Style the container */
    
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="navbar">
  <a  href="Home1.php">Home</a>
    <a  href="Service.php">Our Services</a>
  <a class="active" href="Book.php">Booking</a>
  <a href="Contact.php"> Contact Us</a> 
    <a href="Signup.php">Sign Up</a>
            <a   href="admin3.php">Admin</a>

</div> 


<h3></h3>











<H1> Fill below form to book our services </H1>

<form action="BookingDB.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" placeholder="Your last name..">
      </div>
    </div>
          <div class="row">
      <div class="col-25">
        <label for="mobile">Mobile</label>
      </div>
      <div class="col-75">
        <input type="number" id="mobile" name="mobile" placeholder="Your number..">
      </div>
    </div>
       <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your email..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Service Type">Service Type</label>
      </div>
      <div class="col-75">
        <select id="service" name="service">
          <option value="cleaning">Cleaning</option>
          <option value="catering">Catering</option>
        </select>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="staff">Required Number Of Staff</label>
      </div>
      <div class="col-75">
        <input type="number" id="staff" name="staff" placeholder="Total staff required..">
      </div>
    </div>
    
    
    
    <label for="date">Date:</label>
&emsp;  &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; &emsp; &emsp; &nbsp; &nbsp; 
    <input type="date" id="date" name="date">
    
           <div class="row">
      <div class="col-25">
        <label for="start">Start Time</label>
      </div>
      <div class="col-75">
        <input type="text" id="start" name="start" placeholder="Start Time..">
      </div>    
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="time">Shift Duration</label>
      </div>
      <div class="col-75">
        <select id="duration" name="duration">
          <option value="2 Hours">2 Hours</option>
          <option value="3 Hours">3 Hours</option>
         <option value="4 Hours">4 Hours</option>
          <option value="5 Hours">5 Hours</option>
        <option value="6 Hours">6 Hours</option>

        </select>
      </div>
    </div>
      
    <div class="row">
      <div class="col-25">
        <label for="address">Address Of Work</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" name="address" placeholder="Address of work..">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="consideration">Any Special Consideration</label>
      </div>
      <div class="col-75">
        <textarea id="consideration" name="consideration" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
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
