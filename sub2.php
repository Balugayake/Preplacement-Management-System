<?php 
include("connection.php");

$cid=$_GET['course_id'];

$sql="select * from courses where course_id='$cid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_row($result);
?>



<html>
<head>
<title>CPP</title>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
}

.btn-position{
    display: flex;
    flex-direction: row;
    justify-content: center;
    margin-top:30px;
  }


.logo {
	float:center;
	width:600px;
	height:300px;
	}

</style>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body class="java">
	<?php include('header-user.php'); ?>
<center>

<img src="assets/cpp.png" height="200" width="300">
</center>
<iframe style="margin-left:25%;" width="800" height="500" src="https://www.youtube.com/embed/vLnPwxZdW4Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div style="font-size: 20px; font-family: sans-serif; color:black; margin-top: 30px; margin-left: 20px;">
<h4 style="color:green;"><center><u>CPP Full Course| CPP Tutorial for Beginners| CPP Online Training</u></center></h4><br>

<h3 style="color:green;"><u>Description:</U></h3><br>
<p>C++ is a general purpose, case sensitive, free-form programming language that supports procedural,object-oriented,and generic programming. C++ is a regarded as a middle-level language, as it comprises a combination of both high-level and low-level language feautres. C++ was developed by Bjarne Strousstrup of AT&T Bell Laboratories in the early 1980's, and is based on the C language. The "++" is a syntactic construct used in C(to increment a varible), and C++ is intended as an incremental improvement of C. </p><br>

<h3 style="color:green;"><u>Object-Oriented Programming</u></h3><br>
<p>C++ fully supports object-oriented programming,including the four pillars of object--oriented development:<br>
-Encapsulation<br>
-Data Mining<br>
-Inheritance<br>
-Polymorphism<br>
<br>
<h3 style="color:green;"><u>Use of C++</U></h3><br>
-C++ is used by hundred of thousands of programmers in essentially every application domain.<br>
-In Adobe System All major applications are developed in C++: Photoshop & ImageReady, Illustrator, Acrobat, InDesign, GoLive<br>
- It is used for the development of new applications of C++. The applications based on the graphic user interface, which are highly used applications like adobe photoshop and others. Many applications of Adobe systems are developed in C++ like Illustrator, adobe premiere and image ready and Adobe developers are considered as active in the C++ community.<br>
-This language is also used for developing games. It overrides the complexity of 3D games. It helps in optimizing the resources. It supports the multiplayer option with networking. uses of C++ allows procedural programming for intensive functions of CPU and to provide control over hardware, and this language is very fast because of which it is widely used in developing different games or in gaming engines. C++ mainly used in developing the suites of a game tool.<br>
-There is animated software, which is developed with the help of the C++ language. 3D animation, modeling, simulation, rendering software are referred to as the powerful toolset. It is widely used in building real-time, image processing, mobile sensor applications, and visual effects, modeling which is mainly coded in C++. This developed software used for animation, environments, motion graphics, virtual reality, and character creation. Virtual real devices are the most popular in today’s entertainment world.
<br></p>
</div>
<div class="btn-position">
<a href="technical.php">
<button class="button">Thank You!</button></a>
</div>
<?php include('footer.php'); ?>

</body>
</html>

