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
 
<?php

    include('php/connection.php');
    // iterate through the results
//$data_row=mysqli_fetch_array($result)
    ?>

  <div class="container">
  <h3 class="col-lg-offset-2">Course Details</h3>
  
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" name="form1"class="form-horizontal" role="form">
    	<div class="form-group">
        <label class="control-label col-sm-2" for="courseId">Course ID</label> 
        	<div class="col-sm-5">
            <input type="number" class="form-control" name="searchCourseId" placeholder="Enter Course ID" required="required">
        	</div>       
        </div>
    	<div class="form-group">
       		 <div class="col-sm-offset-2 col-sm-10">  
            <input type="submit" name="submit" class="btn btn-default" value="Search">
        	</div>       
        </div>
        </form>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" name="form1"class="form-horizontal" role="form">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="showAll" class="btn btn-default" value="View Course List">
            </div>
        </div>
 	</form>        

					<?php
						if (isset ($_POST['submit']))
									{
										extract($_POST);
									
										$sql="SELECT * FROM `course` WHERE `courseId` = '$searchCourseId'";
										$result0 = mysqli_query($con,$sql);
										$data_row0=mysqli_fetch_array($result0);
										$sql2 ="SELECT student.studentId, student.firstName,student.lastName, student.dept
											FROM student
											INNER JOIN studentcourse
											ON studentcourse.studentId=student.studentId where courseId =$searchCourseId";
										$result=mysqli_query($con, $sql2);
										?>
 
 <table class="table table-striped col-sm-offset-2 col-sm-8">
 
   <caption>Enrolled Students Of <?php echo $data_row0['title']?></caption>
   <thead>
      <tr>
         <th class="text-center">Name</th>
         <th class="text-center">Id</th>
         <th class="text-center">Dept</th>
      </tr>
   </thead>
          
   <tbody > 
   <?php
                while ($data_row1=mysqli_fetch_array($result))
                {
                ?>
      <tr>
         <td class="text-center"><?php echo $data_row1['firstName'].' '.$data_row1['lastName']?></td>
         <td class="text-center"><?php echo $data_row1['studentId']?></td>
         <td class="text-center"><?php echo $data_row1['dept']?></td>
      </tr>
 <?php } ?>
   </tbody>
  
</table>
										<?php
	 									}
                                         if (isset ($_POST['showAll']))
												{
											extract($_POST);
											$sqlAll="SELECT * FROM `course`";
											$resultAll=mysqli_query($con, $sqlAll);
                                         ?>
 
 
   
   <ul class="list-group col-sm-offset-2 col-sm-6">
     <caption>All Course List</caption>
     <li class="list-group-item"><label class="control-label col-sm-4">Course ID:</label> <label>Course Title<label></li>       
   <?php
                while ($data_row1=mysqli_fetch_array($resultAll))
                {
                ?>
              <li class="list-group-item"><label class="control-label col-sm-4"><?php echo $data_row1['courseId']?></label><?php echo $data_row1['title']?></li>
 <?php } ?>
</ul>
 
 <?php } ?>
                                    
                                    
                                    
                                   
    </div>
</body>
</html>

<?php } ?>