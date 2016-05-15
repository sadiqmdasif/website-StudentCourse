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
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
       <a class="navbar-brand" href="index.php"></a> </div>
     <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right" >
        <li> <a href="index.php">Home</a> </li>      
      </ul>
    </div>
    <!--/.nav-collapse --> 
  </div>
</div>

<div class="container col-sm-offset-3 ">
	
	<h4 class=" col-lg-offset-2 centered">Login Panel</h4>
    <form action="PHP/validation.php" method="post" class="form-horizontal" role="form">
    	<div class="form-group">
        <label class="control-label col-sm-2" for="userId">User ID</label> 
        	<div class="col-sm-5">
            <input type="text" class="form-control" id="userID" name="name" placeholder="Enter User ID" value="admin" required="required">
        	</div>       
        </div>
       
    	<div class="form-group">
        <label class="control-label col-sm-2" for="password">Password</label> 
        	<div class="col-sm-5">
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" value="1234" required="required">
        	</div>       
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