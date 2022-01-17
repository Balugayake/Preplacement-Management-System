<?php

	include_once('config.php');
	include('function.php');
	//error_reporting(0);
	//session_start();
	$emailerror = $passworderror = $msg = "";

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{

	   		 //Email
			$email = trim($_POST["email"]);
	    	if (empty($email))
			{
	      		$emailerror = "Email is Missing";
	    	}	
	    	else
			{
	    		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
				{  
        		  $emailerror = "Invalid email format";  
       		    } 
			}
		
	    

	       //Password
	    	$password = trim($_POST["password"]); 
	    	if (empty($password))
			{
	      		$passworderror = "Password is Missing";
	    	}	
	    	else
			{
	    		$password = $_POST["password"];
	    	}

		}

		$log_query = new func();
		if(isset($_POST['studLog']))
		{
			if( $emailerror == "" && $passworderror == "" )
			{

				$sql = $log_query->login($email,md5($password));
				$log = mysqli_fetch_array($sql);

				if($log > 0)
				{
					echo $_SESSION['id'] = $log['id'];
					setcookie('email',$_POST['email']);
					?>
					<script>
					alert("Login Successfull");
					</script>
					<?php
					header('location: profile.php');

				}
				else
				{
					?>
					<script>
					alert("Invalid Credentials");
					</script>
					<?php
				}
			}
			else{ ?>
					<script>
     				alert("All Fields required");
					</script>
					<?php
    			}
		}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body class="background">
		
<?php include('header.php'); ?>	

<form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<?php //echo $msg; ?></h6>
<div class="loginbox">

<h1>Login Here</h1>


<p>Email</p>

<input type="text" name="email" placeholder=" Enter Username" >
<?php echo $emailerror; ?>
<p>Password</p>
<input type="password" name="password" placeholder="Enter Password" >
<?php echo $passworderror; ?>
<input type="submit" name="studLog" value="Login">
<a href="#"><u>Lost your password?</u></a><br>
<a href="register1.php"><u>Don't have an account?</u></a>


</div>					
						                                                      
</form>
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


