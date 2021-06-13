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
  <p>We specialize in hiring staff</p>    
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
  <a  href="Book.php">Booking</a>
  <a class="active" href="Contact.php"> Contact Us</a> 
    <a href="Signup.php">Sign Up</a>
            <a   href="admin3.php">Admin</a>

</div> 


<h3></h3>











<h1 style="text-align:center; ">Always available to your Service. </h1>

<br>



<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<div class="container">
  <div style="text-align:center">
    <h2>Leave an Enquiry and we will contact you back.</h2>
    
  </div>
  <div class="row">
    <div class="column">
      <img src="https://www.w3schools.com/w3images/map.jpg" style="width:100%">
    </div>
    <div class="column">
     <form action="contact_insert.php" method="post">
        <label for="fastname">First Name</label>
        <input type="text" id="firstname" name="firstname" placeholder="Your name..">
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" placeholder="Your last name..">
         <label for="mobile">Mobile</label>
        <input type="text" id="mobile" name="mobile" placeholder="Your mobile number..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Message</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>






<br>
<br>

<h1 style="text-align:center;">Specialised Staffing Solution</h1>
 <h4 style="text-align:center;">6/97-99 Bathurst St, Sydney NSW 2000</h4>
 <h4 style="text-align:center;">Phone No. +61-0410402702</h4> <br>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.5887910279876!2d151.2036171515607!3d-33.87448692669207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a2dcffffffff%3A0xfca0bcd01cf2ef3e!2sSpecialised%20Staffing%20Solutions!5e0!3m2!1sen!2sau!4v1621482681450!5m2!1sen!2sau" width="1900" height="300" style="border:5;" allowfullscreen="" loading="lazy"></iframe>








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