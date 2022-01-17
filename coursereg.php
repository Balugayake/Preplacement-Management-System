
 <?php
 error_reporting(0);
 include('connection.php');
 include('function.php');
 $pro_query = new func();
 $sql1 = $pro_query->profile();
  $res = mysqli_fetch_array($sql1);
$cid=$_GET['course_id'];
 

 $sql="select * from courses where course_id='$cid'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_row($result);
 ?>
<!--include('function.php');
   $pro_query = new func();
   $sql = $pro_query->course1();
    $sql1 = $pro_query->profile();
    $res = mysqli_fetch_array($sql1);
    $row = mysqli_fetch_array($sql)
  ?>-->
<html>
<head>
<title>Log In</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

 <style>
.button {
  background-color:indigo;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 5px;
  cursor: pointer;
}
</style>
</head>

<body class="course">
<?php include("header-user.php"); ?>
<div class="loginbox">

<h4>

<center>

<form action="coursereg.php" method="POST">
<font color=white>
	<br><br><br><br><br>
<h2>Course Registration</h2>

<table>
<tr><th>USER ID:</th><td>
<input type="text" name="sid"  value="<?php echo $res[0];?>" required></td>
</tr>
<tr><th>USER Email:</th><td>
<input type="text" name="email"  value="<?php
echo $_COOKIE['email'];?>" required></td>
</tr>
<tr><th>COURSE ID:</th><td>
<input type="text" name="cid" value="<?php echo $row[0];?>" required ></td></tr>
</table>
<br><br>
<input type="submit" class="button" name="add" value="GO TO COURSE ">

</form>
</center>
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
<?php include('footer.php'); ?>
</body>
</html>




<?php

include("connection.php");
error_reporting(0);

if(isset($_POST["add"]))
{
$a=$_POST['email'];
$b=$_POST['cid'];
$c=$_POST['sid'];

}
$p=mysqli_query($con,"insert into enrollments(useremail,courseid,uid) values('$a','$b','$c');");




$result=mysqli_query($con,$p);
if($result>0)
{
echo "SuccessFully Inserted record";
}
else
{ 
  //echo"not" ;
}

 



if($b==101)
{
header('location:sub1.php?course_id=101');
}
else 
if($b==102)
{
header('location:sub2.php?course_id=102');
}

else 
if($b==103)
{
header('location:sub3.php?course_id=103');
}
else 
if($b==104)
{
header('location:box3.php?course_id=104');
}
else 
if($b==105)
{
header('location:box5.php?course_id=105');
}

//}
?>





