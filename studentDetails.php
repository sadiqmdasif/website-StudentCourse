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
      
    </div>
 </div>
 
 

<?php
    include('php/connection.php');
    ?>
    
  <div class="container">
  <h3 class="col-lg-offset-2">Student Details</h3>  
  	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" name="form1" class="form-horizontal" role="form">
    	<div class="form-group">        
        <label class="control-label col-sm-2" for="courseId">Student ID</label> 
        	<div class="col-sm-5">
            <input type="text" class="form-control" name="searchStudentId" placeholder="Enter Student ID" required="required" >
        	</div>       
        </div>
    	<div class="form-group">
   		  	<div class="col-sm-offset-2 col-sm-10">  
            <input type="submit" name="submit" class="btn btn-default" value="Search"> 
        	</div>       
		 </div>
    </form>  
      
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" name="form1" class="form-horizontal" role="form">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="showAll" class="btn btn-default" value="View ALL">
            </div>
        </div>
 	</form>

    
    
    
    										<?php
										if (isset ($_POST['submit']))
											{
										extract($_POST);
										$sqlCourse= "SELECT course.courseId, course.title FROM course INNER JOIN
										 studentcourse ON studentcourse.courseId=course.courseId where studentID =$searchStudentId";
											
										$resultCourse = mysqli_query($con , $sqlCourse);
										
										
										$sql="SELECT * FROM `student` WHERE `studentId` = $searchStudentId";
   										$result=mysqli_query($con, $sql);
										$data_row=mysqli_fetch_array($result);
										?>   
	<h4 class="col-lg-offset-2">ongoing course</h4> 
    <ul class="list-group col-sm-offset-2">
    <li class="list-group-item"><label class="control-label col-sm-4">Course ID</label>Title</li>
         
				<?php
	               while ($data_rowCourse=mysqli_fetch_array($resultCourse))
                {
                ?>
     
         <li class="list-group-item"><label class="control-label col-sm-4"><?php echo $data_rowCourse['courseId']?></label><?php echo $data_rowCourse['title']?></li>
         
    
 <?php } ?>
  </ul>
                                      

    <h4 class="col-lg-offset-2">personal details</h4> 
      <ul class="list-group col-sm-offset-2">
        <li class="list-group-item"><label class="control-label col-sm-4">Student ID:</label><?php echo $data_row['studentId']?></li>
        <li class="list-group-item"><label class="control-label col-sm-4">First Name:</label><?php echo $data_row['firstName']?></li>  
        <li class="list-group-item"><label class="control-label col-sm-4">Last Name:</label><?php echo $data_row['lastName']?></li>
        <li class="list-group-item"><label class="control-label col-sm-4">Father Name:</label><?php echo $data_row['fatherName']?></li>
        <li class="list-group-item"><label class="control-label col-sm-4">Mother Name:</label><?php echo $data_row['motherName']?></li>  
        <li class="list-group-item"><label class="control-label col-sm-4">Birthdate:</label><?php echo $data_row['birthdate']?></li>
        <li class="list-group-item"><label class="control-label col-sm-4">Gender:</label><?php echo $data_row['gender']?></li>
        <li class="list-group-item"><label class="control-label col-sm-4">Dept:</label><?php echo $data_row['dept']?></li>
        <li class="list-group-item"><label class="control-label col-sm-4">Present Address:</label><?php echo $data_row['presentAddress']?></li>
        <li class="list-group-item"><label class="control-label col-sm-4">Permanent Address:</label><?php echo $data_row['permanentAddress']?></li>  
        <li class="list-group-item"><label class="control-label col-sm-4">Phone:</label><?php echo $data_row['phone']?></li>
        <li class="list-group-item"><label class="control-label col-sm-4">Email:</label><?php echo $data_row['email']?></li>  
        <li class="list-group-item"><label class="control-label col-sm-4">Blood Group:</label><?php echo $data_row['bloodGroup']?></li>
     </ul>
         <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="form1"class="form-horizontal" role="form">
        
        <div class="form-group">        
          
          <div class="col-sm-offset-2 col-sm-10">          
            <input type="submit" name="edit" class="btn btn-default" value="EDIT" />
            <input  class="invisible" name="stdID" value="<?php echo $data_row['studentId']?>" />
            </div>
        </div>
 	</form>     
    <form action="PHP/studentDelete.php" method="post" name="form1"class="form-horizontal" role="form">
         <div class="form-group">    
          <div class="col-sm-offset-2 col-sm-10">          
            <input type="submit" name="edit" class="btn btn-default" value="DELETE" />
            <input  class="invisible" name="studentId" value="<?php echo $data_row['studentId']?>" />
            </div>
        </div>
 	</form>
     
     
										 <?php }
										
                                         if (isset ($_POST['showAll']))
												{
											extract($_POST);
											$sqlAll="SELECT * FROM `student`";
											$resultAll=mysqli_query($con, $sqlAll);
                                         ?>
 
  <table class="table table-striped" > 
   <caption>All Student List</caption>
   <thead>
      <tr>
         <th class="text-center">ID</th>
         <th class="text-center">Name</th>
         <th class="text-center">Dept</th>
         <th class="text-center">Phone</th>
         <th class="text-center">Email</th>  
         <th class="text-center">BIRTHDATE</th>
         <th class="text-center">Blood Group</th>         
         <th class="text-center">GENDER</th>
         <th class="text-center">Parent</th>
         <th class="text-center">Present Address</th>
         <th class="text-center">Permanent Address</th>         
      </tr>
   </thead>
          
   <tbody > 
   <?php
                while ($data_row1=mysqli_fetch_array($resultAll))
                {
					
                ?>
      <tr>
      	 <td class="text-center"><?php echo $data_row1['studentId']?></td>
         <td class="text-center"><?php echo $data_row1['firstName'].' '.$data_row1['lastName']?></td>         
         <td class="text-center"><?php echo $data_row1['dept']?></td>
         <td class="text-center"><?php echo $data_row1['phone']?></td>
         <td class="text-center"><?php echo $data_row1['email']?></td>
         <td class="text-center"><?php echo $data_row1['birthdate']?></td>
         <td class="text-center"><?php echo $data_row1['bloodGroup']?></td>
         <td class="text-center"><?php echo $data_row1['gender']?></td>
         <td class="text-center"><?php echo 'MR. '.$data_row1['fatherName'].' &'.' MRS: '.$data_row1['motherName']?></td>
         <td class="text-center"><?php echo $data_row1['presentAddress']?></td>
         <td class="text-center"><?php echo $data_row1['permanentAddress']?></td>         
      </tr>
 <?php } ?>
   </tbody>
  
</table>
 
 <?php } ?>
 
						<?php
										if (isset ($_POST['edit']))
											{
										extract($_POST);
										$sqlEdit="SELECT * FROM `student` WHERE `studentId` = $stdID";
   										$resultEdit=mysqli_query($con, $sqlEdit);
										$data_row2=mysqli_fetch_array($resultEdit)
										
										?>
                                           
   <form action="PHP/updateStudentDetails.php" class="form-horizontal" role="form" method="post">
  
    
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="studentId">Student ID:</label>
  		<div class="col-sm-10">
    <input name="studentId" type="text" class="form-control" value="<?php echo $data_row2['studentId']?>" readonly="readonly" >
   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="firstName">First Name:</label>
  		<div class="col-sm-10">
    <input type="text" class="form-control" name="firstName" value="<?php echo $data_row2['firstName']?>" required="required">
   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="lastName">Last Name:</label>
  		<div class="col-sm-10">
    <input type="text" class="form-control" name="lastName" value="<?php echo $data_row2['lastName']?>" required="required">
   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="fatherName">Father Name:</label>
  		<div class="col-sm-10">
    <input type="text" class="form-control" name="fatherName" value="<?php echo $data_row2['fatherName']?>" required="required">
   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="motherName">Mother Name:</label>
  		<div class="col-sm-10">
    <input type="text" class="form-control" name="motherName" value="<?php echo $data_row2['motherName']?>" required="required">
   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="birthdate">Birth Date:</label>
  		<div class="col-sm-10">
    <input type="date" class="form-control" name="birthdate" value="<?php echo $data_row2['birthdate']?>" required="required">
   		 </div>
    </div>
    
    <div class="form-group">
  	<label class="control-label col-sm-2" for="gender">Gender:</label>
  		<div class="col-sm-10">
    <input list="genderList" class="form-control" name="gender" value="<?php echo $data_row2['gender']?>" required="required">
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
    <input list="deptList" class="form-control" name="dept" value="<?php echo $data_row2['dept']?>" required="required">
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
          <textarea name="presentAddress" required="required" class="form-control"><?php echo $data_row2['presentAddress']?></textarea>

   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="permanentAddress">Permanent Address:</label>
  		<div class="col-sm-10">
          <textarea name="permanentAddress" required="required" class="form-control"><?php echo $data_row2['permanentAddress']?></textarea>

   		 </div>
    </div>
    
   	<div class="form-group">
  	<label class="control-label col-sm-2" for="phone">Phone:</label>
  		<div class="col-sm-10">
    <input type="tel" class="form-control" name="phone" value="<?php echo $data_row2['phone']?>" required="required">
    
   		 </div>
    </div>
    
   	<div class="form-group">
  	<label class="control-label col-sm-2" for="email">Email:</label>
  		<div class="col-sm-10">
    <input type="email" class="form-control" name="email" value="<?php echo $data_row2['email']?>" required="required">
   		 </div>
    </div>
    
   	<div class="form-group">
  	<label class="control-label col-sm-2" for="bloodGroup">Blood Group:</label>
  		<div class="col-sm-10">
    <input list="bloodGroupList" class="form-control" name="bloodGroup" value="<?php echo $data_row2['bloodGroup']?>" required="required">
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
    <button type="submit" class="btn btn-default">UPDATE</button>
    </div>
    </div>
  
  </form>
 <?php 
 		} 
 ?>
 
</div>
</body>
</html>


<?php } ?>