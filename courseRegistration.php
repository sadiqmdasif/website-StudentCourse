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
	<div class="col-lg-8 col-lg-offset-2">
	
	<h3 class=" col-lg-offset-2 centered">Add New Course</h3>
        <form action="PHP/courseRegistration.php" method="post" class="form-horizontal" role="form">
        
            <div class="form-group">
            <label class="control-label col-sm-2" for="courseId">Course ID</label> 
                <div class="col-sm-5">
                <input type="number" class="form-control" name="courseId" placeholder="Enter Course ID" required="required">
                </div>       
            </div>
           
            <div class="form-group">
            <label class="control-label col-sm-2" for="courseTitle">Title</label> 
                <div class="col-sm-5">
                <input type="text" class="form-control" name="courseTitle" placeholder="Enter Course Title" required="required">
                </div>       
            </div>
           
            <div class="form-group">
                 <div class="col-sm-offset-2 col-sm-10">  
                <button type="submit" class="btn btn-default">ADD COURSE</button>
                </div>       
            </div>
           
        </form>

	</div>
    
    
    <div class="col-lg-8 col-lg-offset-2 centered">
	
	<h3 class=" col-lg-offset-2 centered">Assign Student To Course</h3>
        <form action="PHP/courseAssign.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
            <label class="control-label col-sm-2" for="studentId">Student ID</label> 
                <div class="col-sm-5">
                <input type="number" class="form-control" name="studentId" placeholder="Enter Student ID" required="required">
                </div>       
            </div>  
                  
            <div class="form-group">
            <label class="control-label col-sm-2" for="courseId">Course ID</label> 
                <div class="col-sm-5">
                <input type="number" class="form-control" name="courseId" placeholder="Enter Course ID" required="required">
                </div>       
            </div>
           

           
            <div class="form-group">
                 <div class="col-sm-offset-2 col-sm-10">  
                <button type="submit" class="btn btn-default">ADD STUDENT</button>
                </div>       
            </div>
           
        </form>

	</div>
    
        <div class="col-lg-8 col-lg-offset-2 centered">
	
	<h3 class=" col-lg-offset-2 centered">Remove Student From Course</h3>
        <form action="PHP/courseDelete.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
            <label class="control-label col-sm-2" for="studentId">Student ID</label> 
                <div class="col-sm-5">
                <input type="number" class="form-control" name="studentId" placeholder="Enter Student ID" required="required">
                </div>       
            </div>  
                  
            <div class="form-group">
            <label class="control-label col-sm-2" for="courseId">Course ID</label> 
                <div class="col-sm-5">
                <input type="number" class="form-control" name="courseId" placeholder="Enter Course ID" required="required">
                </div>       
            </div>         
            <div class="form-group">
                 <div class="col-sm-offset-2 col-sm-10">  
                <button type="submit" class="btn btn-default">DELETE</button>
                </div>       
            </div>
           
        </form>

	</div>
    
    <div class="col-lg-8 col-lg-offset-2 centered">
	
	<h3 class=" col-lg-offset-2 centered">CHANGE COURSE</h3>
        <form action="PHP/updateStudentCourse.php" method="post" class="form-horizontal" role="form">
            <div class="form-group">
            <label class="control-label col-sm-2" for="studentId">Student ID</label> 
                <div class="col-sm-5">
                <input type="number" class="form-control" name="studentId" placeholder="Enter Student ID" required="required">
                </div>       
            </div>  
                  
            <div class="form-group">
            <label class="control-label col-sm-2" for="courseId">Current Course</label> 
                <div class="col-sm-5">
                <input type="number" class="form-control" name="oldCourseId" placeholder="Enter Current Course ID" required="required">
                </div>       
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="courseId">New Course</label> 
                <div class="col-sm-5">
                <input type="number" class="form-control" name="newCourseId" placeholder="Enter New Course ID" required="required">
                </div>       
            </div>                      
            <div class="form-group">
                 <div class="col-sm-offset-2 col-sm-10">  
                <button type="submit" class="btn btn-default">CHANGE</button>
                </div>       
            </div>
           
        </form>

	</div>


	
</div>

</body>
</html>
<?php } ?>