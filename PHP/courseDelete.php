<?php
session_start();
   if($_SESSION['un']==null)
   {
        echo "<script type=\"text/javascript\">
        alert(\"Login First\");
        window.location=\"../index.php\";
        </script>";
   }
   
   
   else {
include ('connection.php');
	
	
extract($_POST);				

$sql = "DELETE FROM `studentcourse` WHERE `studentID`=$studentId AND`courseID`='$courseId'";											   

	$result=mysqli_query($con, $sql);
	
	echo "<script type=\"text/javascript\" >
			alert(\"Student Removed Successfully\");
			window.location=\"../courseRegistration.php\";
			</script>";
		
	}
?>

