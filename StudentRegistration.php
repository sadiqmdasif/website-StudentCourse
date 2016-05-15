<?php
    session_start();
   if($_SESSION['un']==null)
   {
        echo "<script type=\"text/javascript\">
        alert(\"Login First\");
        window.location=\"index.php\";
        </script>";
   }
   else if ($_SESSION['un']!=null)
   {
	 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Studnet Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="CSS/bootstrap.min.css" />
<script src="JS/bootstrap.min.js" ></script>
<script src="JS/respond.min.js"> </script>
</head>

<body>
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Studnet Management</a>
      </div>
      <div class="navbar-collapse in" style="height: auto;">
        <ul class="nav navbar-nav navbar-right">
		   <li> <a href="StudentRegistration.php">Register Student</a> </li>
        <li> <a href="courseRegistration.php">Register Course</a> </li>
        <li> <a href="StudentDetails.php">Search Student</a> </li>
        <li> <a href="courseDetails.php">Search Course</a> </li>
        <li> <a href="php/logout.php">Logout</a> </li>
         
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
 </div>

  
  <div class="container">
        <div class="col-lg-8 col-lg-offset-2 centered">
        
        <h3 class="col-sm-offset-2">STUDENT REGISTRATION FORM</h3>
  
  <form action="PHP\studentRegistration.php" class="form-horizontal" role="form" method="post">
  
    
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="studentId">Student ID:</label>
  		<div class="col-sm-10">
    <input type="text" disabled="disabled" class="form-control" name="studentId" placeholder="Auto Added">
   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="firstName">First Name:</label>
  		<div class="col-sm-10">
    <input type="text" class="form-control" name="firstName" placeholder="Enter First Name" required="required">
   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="lastName">Last Name:</label>
  		<div class="col-sm-10">
    <input type="text" class="form-control" name="lastName" placeholder="Enter Last Name" required="required">
   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="fatherName">Father Name:</label>
  		<div class="col-sm-10">
    <input type="text" class="form-control" name="fatherName" placeholder="Enter Father Name" required="required">
   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="motherName">Mother Name:</label>
  		<div class="col-sm-10">
    <input type="text" class="form-control" name="motherName" placeholder="Enter Mother Name" required="required">
   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="birthDate">Birth Date:</label>
  		<div class="col-sm-10">
    <input type="date" class="form-control" name="birthDate" required="required">
   		 </div>
    </div>
    
    <div class="form-group">
  	<label class="control-label col-sm-2" for="gender">Gender:</label>
  		<div class="col-sm-10">
    <input list="genderList" class="form-control" name="gender" placeholder="Select Gender" required="required">
   		 </div>
         <datalist id="genderList">
         <option value="MALE">
         <option value="FEMALE">
         <option value="OTHER">       
         </datalist>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="dept">Dept Name:</label>
  		<div class="col-sm-10">
    <input list="deptList" class="form-control" name="dept" placeholder="Select Dept" required="required">
   		 </div>
         <datalist id="deptList">
         <option value="CSE">
         <option value="EEE">
         <option value="BBA">
         <option value="FASS">
         <option value="ARCHI">          
         </datalist>
    </div>

  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="presentAddress">Present Address:</label>
  		<div class="col-sm-10">
<textarea class="form-control" name="presentAddress" placeholder="Enter Present Address" required="required"> </textarea>

   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="permanentAddress">Permanent Address:</label>
  		<div class="col-sm-10">
<textarea class="form-control" name="permanentAddress" placeholder="Enter Permanent Address" required="required"> </textarea>

   		 </div>
    </div>
    
   	<div class="form-group">
  	<label class="control-label col-sm-2" for="phone">Phone:</label>
  		<div class="col-sm-10">
    <input type="tel" class="form-control" name="phone" placeholder="Enter Phone" required="required">
   		 </div>
    </div>
    
   	<div class="form-group">
  	<label class="control-label col-sm-2" for="email">Email:</label>
  		<div class="col-sm-10">
    <input type="email" class="form-control" name="email" placeholder="Enter Email Address" required="required">
   		 </div>
    </div>
    
   	<div class="form-group">
  	<label class="control-label col-sm-2" for="bloodGroup">Blood Group:</label>
  		<div class="col-sm-10">
    <input list="bloodGroupList" class="form-control" name="bloodGroup" placeholder="Enter Blood Group" required="required">
   		 </div>
         <datalist id="bloodGroupList">
         <option value="A+">
         <option value="A-">
         <option value="B+">
         <option value="B-">
         <option value="AB+">
         <option value="AB-">
         <option value="O+">
         <option value="O-">         
         </datalist>
    </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Submit</button>
    </div>
    </div>
  
  </form>
  </div>
  </div>
  
</body>
</html>

<?php } ?>