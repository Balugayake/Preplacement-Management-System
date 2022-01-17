<?php

	session_start();
	$errimg=$errmobile="";

	include 'connection.php';

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if($_POST['password']==$_POST['repass'])
		{
			$username=$_POST['fname'];
			$email=$_POST['email'];
			$password=md5($_POST['password']);
			$mobileno=$_POST['mobileno'];
			$state=$_POST['state'];
			$gender=$_POST['gender'];
			$dob=$_POST['dob'];
			$qualification=$_POST['qualification'];
			$image = $_FILES['profile']['name'];
	  $filetmpname = $_FILES['profile']['tmp_name'];
      $folder = 'upload/';      
      $extension = substr($image,strlen($image)-4,strlen($image));
      $random_img=time();
      

      $allowed_extensions = array(".jpg",".jpeg",".png",".JPG",".JPEG",".PNG");

		$image = $_FILES['profile']['name']; 
		    	if(empty ($image))
		    	{  
		  		      $errimg = "image is required";   
		    	}
	else{
		    if(!in_array($extension,$allowed_extensions))
		    {
		    $errimg= "Invalid format. Only jpg / jpeg/ png  format allowed')";
		    }
		      
		    else
		    { 
		      	$img=$random_img."-".$image;
		        move_uploaded_file($filetmpname,$folder.$img);
		    }
		}


if($_POST['mobileno']==$mobileno)
{
	$errmobile="THIS NUMBER IS ALREADY REGISTERED!!!";
}





			$username=mysqli_real_escape_string($con,$username);
			$email=mysqli_real_escape_string($con,$email);
			$mobileno=mysqli_real_escape_string($con,$mobileno);
			$state=mysqli_real_escape_string($con,$state);
			$gender=mysqli_real_escape_string($con,$gender);
			$dob=mysqli_real_escape_string($con,$dob);
			$qualification=mysqli_real_escape_string($con,$qualification);
			$image=mysqli_real_escape_string($con,$image);

	
	
				
					$_SESSION['fname']=$username;
					$_SESSION['profile']=$img;

					$sql="INSERT INTO user_info(username,email,password,mobileno,state,gender,dob,qualification,profile	)
					 VALUES('$username','$email','$password', '$mobileno','$state','$gender','$dob','$qualification','$img')";

					if(mysqli_query($con,$sql))
					{
					?>
						<script>
						alert("Registration Successful!");
					    </script>
					    <?php
						header("location:login.php");
					}
					else
					{
					?>
						<script>
						alert(" User could not be added to database!");
						</script>
						<?php
					}
		}
		else
		{
			?>
			<script>
			alert("Password did not match!");
		</script>
		<?php
		}
	}

?>






<!DOCTYPE html>
<html>
		<head>
			<title>Registration Form</title>
			<meta charset="utf-8">
			<title>Register Form</title>
			<link rel="stylesheet" type="text/css" href="css/login.css">
			<link rel="stylesheet" type="text/css" href="css/style.css">

		</head>


<body class="background">
<?php include('header.php'); ?>
<div class="success">
</div>
<form class="signup-form" method="post" enctype="multipart/form-data" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])); ?>" autocomplete="off">
		<div class="form-header">
			<h1>Registration Form</h1>
		</div>

		<div class="form-body">
			<div class="horizontal-group">
				<div class="form-group left">
					<label for="fullname" class="label-title">Full Name</label>
					<input type="text" name="fname" class="form-input" placeholder="Enter your name" required>
				</div>
			</div>
				<div class="horizontal-group">
					<div class="form-group right">
					<label for="email" class="label-title">Email</label>
					<input type="email" name="email" class="form-input" placeholder="Enter your email" required>
					</div>
				</div>

				<div class="horizontal-group">
					<div class="form-group left">
						<label for="password" class="label-title">Password</label>
						<input type="password" name="password" class="form-input" placeholder="Enter your password" required>
					</div>
					<div class="form-group right">
						<label for="confirm-password" class="label-title">Confirm Password</label>
						<input type="password" name="repass" class="form-input" placeholder="Enter your password again" required>
					</div>
				</div>
				<div class="horizontal-group">
					<div class="form-group left">
						<label for="mobileno" class="label-title">Phone No</label>
						<input type="tel" pattern="^\d{10}$" name="mobileno" class="form-input" placeholder="Enter your phone no." required>
					</div>
				</div>
				<div class="horizontal-group">
					<div class="form-group right" >
    					<label class="label-title">State</label>
    					<select class="form-inpu" name="state" >
						<option value="">--select--</option>
     			    	<option value="Maharastra">Maharastra</option>
      					<option value="Punjab">Punjab</option>
						  <option value="Gujrat">Gujrat</option>
						  <option value="Delhi">Delhi</option>
						  <option value="Rajasthan">Rajasthan</option>
    					</select>
  					</div>
				</div>
				<div class="horizontal-group">
					<div class="form-group left">
        				<label class="label-title">Gender</label>
        					<div class="input-group">
            					<label for="male">
                				<input type="radio" name="gender" value="male" id="male"> Male</label>
            					<label for="female">
                				<input type="radio" name="gender" value="female" id="female"> Female</label>
        					</div>
    				</div>
					<div class="form-group right">
						<label class="label-title">Date Of Birth</label>
						<input type="date" name="dob" class="form-input" placeholder="dd/mm/yyyy" required>
					</div>	
				</div>							


				<div class="horizontal-group">			
					<div class="form-group left" >
    					<label class="label-title">Qualification</label>
    					<select class="form-inpu" name="qualification" >
						<option value="">--select--</option>
     			    	<option value="BSc(Computer Science)">BSc(Computer Science)</option>
      					<option value="BSc(Computer Application)">BSc(Computer Application)</option>
						  <option value="MSc(Computer Science)">MSc(Computer Science)</option>
						  <option value="MSc(Computer Application)">MSc(Computer Application)</option>


    					</select>
  					</div>
					<div class="form-group right" >
    					<label for="choose-file" class="label-title">Upload Profile Picture</label>
    					<input type="file" name="profile" size="80" required>
  					</div>
  			    </div>


		</div>
<div class="form-footer">
  <button type="submit" name="btnsave" id="submit" class="btn">Register</button>
</div>
	</form>
</body>
</html>