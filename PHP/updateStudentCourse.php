<?php
session_start();
   if($_SESSION['un']==null)
   {
        echo "<script type=\"text/javascript\">
        alert(\"Login First\");
        window.location=\"../index.php\";
        </script>";
   }
   else
   {
	 
   		include ('connection.php');
		$agent = $_SESSION['un'];
		extract($_POST);				

	$query1 = "UPDATE `studentcourse` SET `courseID`=$newCourseId WHERE `studentID`=$studentId AND `courseID`=$oldCourseId";
	$result = mysqli_query ($con, $query1);
						
								echo "<script type=\"text/javascript\" >
								alert(\"Course changed Successfully\");
									window.location=\"../courseRegistration.php\";
									</script>";
	   
	   
	
   }
?>

