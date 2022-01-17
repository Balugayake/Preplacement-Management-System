<?php include("functions.php");?>


<?php
error_reporting(0);



$reg_query = new func();
		if(isset($_POST["add"]))
		{
			
$cid=$_POST["id"];
$cname=$_POST["name"];
$cd=$_POST["duration"];
$category=$_POST["course_category"];

			$sql = $reg_query->courses($cid,$cname,$cd,$category);

		if($sql){
			 
			  echo '<script>alert("Successfull registration")</script>'; 
				}
				else{
					echo '<script>alert("Fail registration")</script>'; 
				    }

	    }

	

?>
<html>
<head>
<title>SIGN IN</title>

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body class="profilebackk">
<?php include("header-admin.php");?>
<div class="loginbox">
<form action="ac.php" method="POST">
<br>
<center>
<input type="text" name="id" placeholder="Course ID" style="color:black;" required>
<br>


<input type="text" name="name" placeholder="Course Name" style="color:black;" required>
<br>

<input type="text" name="duration" placeholder="Course Duration" style="color:black;" required>

<br>
<label class="type">Choose Course Type</label>

<select name="course_category" id="course_category">
	<option value="">Select</option>
  <option value="Programing">Programing</option>
  <option value="Scripting">Scripting</option>
  <option value="Database">Database</option>
</select>
<br><br><br><br>
<input type="submit" name="add" value="ADD COURSE">
</center>
</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>


