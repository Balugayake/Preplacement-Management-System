<?php 

//include('functions.php');
include('connection.php');
error_reporting(0);



		if(isset($_POST["submit"]))
		{
			
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $state=$_POST['state'];
      $message=$_POST['message'];
    
      $sql = "INSERT INTO contact_feedback(fname,lname,state,message)
      VALUES ('$fname', '$lname','$state','$message')" ;
        
        if(mysqli_query($con,$sql))
        {?>
          <script type="text/javascript">
          alert("Your message send successfully!!");
          </script>
          <?php
           header("location:profile.php");
        }
        else
        {?>
            <script>
            alert("Try again!");
            </script>
            <?php
        }
    }
    
		
	

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
   
  </div>
  <div class="row">
    <div class="column">
      <img src="assets/b.jpg" style="width: 100%">
    </div>
    <div class="column">
      <form action="contact.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" name="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" name="lastname" placeholder="Your last name..">
        <label for="state">State</label>
        <select name="state" name="state">
          <option value="Maharastra">Maharastra</option>
          <option value="Punjab">Punjab</option>
          <option value="Gujrat">Gujrat</option>
        </select>
        <label for="message">Message</label>
        <textarea id="subject" name="message" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" name="submit" value="send">
      </form>
    </div>
  </div>
</div>

</body>
</html>
