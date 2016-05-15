<?php
session_start();
   if($_SESSION['un']==null)
   {
        echo "<script type=\"text/javascript\">
        alert(\"Login First\");
        window.location=\"../index.php\";
        </script>";
   }
   
include ('connection.php');
	
	$agent = $_SESSION['un'];
extract($_POST);				

$sql = "INSERT INTO `course` (`title`,`courseId`) VALUES ('$courseTitle','$courseId')";											   

	$result=mysqli_query($con, $sql);
	
	echo "<script type=\"text/javascript\" >
			alert(\"Data Added Successfully\");
			window.location=\"../courseRegistration.php\";
			</script>";
		
	
?>

