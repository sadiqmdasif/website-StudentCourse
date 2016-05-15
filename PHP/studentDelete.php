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

$sql = "DELETE FROM `student` WHERE `studentID`=$studentId";											   

	$result=mysqli_query($con, $sql);
	
	echo "<script type=\"text/javascript\" >
			alert(\"Student Removed Successfully\");
			window.location=\"../studentDetails.php\";
			</script>";
		
	}
?>

