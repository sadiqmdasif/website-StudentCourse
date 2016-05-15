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
														   
$sql = "INSERT INTO `student`( `studentId`,`firstName`, `lastName`, `fatherName`, `motherName`, `birthdate`, `gender`, `dept`, `presentAddress`, `permanentAddress`, `phone`, `email`, `bloodGroup`) 								          VALUES ('','$firstName', '$lastName', '$fatherName', '$motherName', '$birthDate', '$gender', '$dept',  '$presentAddress', '$permanentAddress', '$phone', '$email', '$bloodGroup')";

	$result=mysqli_query($con, $sql);
	echo "<script type=\"text/javascript\" >
			alert(\"Data Added Successfully\");
			window.location=\"../StudentRegistration.php\";
			</script>";

		
	
?>

