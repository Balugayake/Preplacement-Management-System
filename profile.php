<?php
error_reporting(0);
include_once('config.php');

  include('function.php');
  
  if (strlen($_SESSION['id']==0))
 {
    header('location:logout.php');
  }
  else{
?>


<html>
  <head>
    <title>Profile Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <style>
img
 {
  border-radius: 50%;
  
}
</style>
<style>
  
.button {
  background-color: red;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 20px;
  
  cursor: pointer;
}


.button:hover
{
    background: #ffc107;
    color: #000;
}
.btn-position{
  display: flex;
  flex-direction: row;
  justify-content: center;
  margin-top:30px;

}
</style>
  </head>
<body class="profileback">
<?php /*include('header-user.php');*/ ?>
<?php include('connection.php'); ?>

 
  <?php

   $pro_query = new func();
   $sql = $pro_query->profile();
    $res = mysqli_fetch_array($sql);

  ?>
<div class="menu">  

<ul>
    <h2 style="color:green; padding-top:25px; padding-left:30px;  padding-right:450px;">Preplacement Activity</h2>
   
        <li><a href="profile.php">Profile</a></li>
        <li><a href="/php/final/menu.php?id=<?php echo $res[0];?>">PrePlacement Activity</a></li>

        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <li class="active"><a href="logout.php">LogOut</a></li>
</ul>
</div>



  <div style="color:black; padding-top:20px; padding-left:40px;" >
  <h1> Welcome  <?php echo $res['username'] ; ?> </h1>
 </div>
<div class="profile">
 <div style="padding-top:20px; padding-left:40px;">
	  <img src="<?php echo 'upload/'.htmlentities($res['profile']); ?>" alt="" width="250px" height="240px">
  </div>
   <div  style="padding-top:20px; padding-left:40px;">
  <table style="color:black;">
  <tr><td><b>Username:</b></td><td><input type="text" name="fname" value="<?php echo $res['username'] ; ?> "></td> </tr>
    <tr><td><b>Date Of Birth:</b> </td><td> <input type="text" name="fname" value="<?php echo $res['dob'] ; ?> "></td> </tr>
   <tr><td><b>Email:</b></td><td><input type="text" name="fname" value="<?php echo $res['email'] ; ?> "></td> </tr>
   <tr><td><b>Contact:</b>  </td><td><input type="text" name="fname" value="<?php echo $res['mobileno'] ; ?> "></td> </tr>
   <tr><td><b>Gender:</b> </td><td> <input type="text" name="fname" value="<?php echo $res['gender'] ; ?> "></td> </tr>
   <tr><td><b>Qualification:<b> </td><td> <input type="text" name="fname" value="<?php echo $res['qualification'] ; ?> "></td> </tr>
    <tr><td><b> State:</b>  </td><td><input type="text" name="fname" value="<?php echo $res['state'] ; ?> "></td> </tr>
  </table>
   </div>
  </div>
  <div class="btn-position">
<a href="/php/final/edit.php?id=<?php echo $res[0];?>">
<button class="button">Update User Profile</button></a>
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
<div style="font-size:19px; color:black;background-color:grey;">
<?php include('footer.php'); ?>
</div>
</body>
</html>
<?php 
} 
?>
