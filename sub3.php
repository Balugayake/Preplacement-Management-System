

<?php 
include("connection.php");

$cid=$_GET['course_id'];

$sql="select * from courses where course_id='$cid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_row($result);
?>



<html>
<head>
<title>Python</title>
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

<img src="assets/python.png" height="200" width="370">
</center>
<iframe style="margin-left:25%;" width="800" height="500" src="https://www.youtube.com/embed/WGJJIrtnfpk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><div style="font-size: 20px; font-family: sans-serif; color:black; margin-top: 30px; margin-left: 20px;">
<h4 style="color:green;"><center><u>Python Full Course| Python Tutorial for Beginners| Python Online Training</u></center></h4><br>

<h3 style="color:green;"><u>Description:</u></h3><br>
<p>Python is a general purpose programming language. It is used in web development, data science, creating software prototypes, and so on. Fortunately for beginners, Python has simple easy to use syntax. This makes Python an excellent language to learn to program for beginners.</p><br>

<h3 style="color:green;"><u>Major Python OOPs concept:</u></h3><br>
<p>a)Class:<br>
A class is a collection of objects. Unlike the primitive data structures, classes are data structures that the user defines.
<br><br>
b)Object:<br>
When we define a class only the description or a blueprint of the object is created. There is no memory allocation until we create its object. The objector instance contains real data or information.
<br><br>
c)Methods:<br>
Methods are functions defined inside the body of a class. They are used to define the behaviors of an object.
<br><br>
d)Inheritance:<br>
Inheritance is a way of creating a new class for using details of an existing class without modifying it. The newly formed class is a derived class or a child class. Similarly, the existing class is a base class or parent class.
<br><br>
e)Encapsulation:<br>
Using OOP in Python, we can restrict access to methods and variables. This prevents data from direct modification which is called encapsulation.In Python, we denote private attributes using underscore as the prefix i.e single _ or double __.
<br><br>
f)Polymorphism:<br>
Polymorphism is an ability to use a common interface for multiple forms. Suppose, we need to color a shape, there are multiple shape options. However we could use the same method to color any shape. This concept is called Polymorphism.
<br><br>
<h3 style="color:green;"><u>Key Points to Remember</u>:</h3><br>
*Object-Oriented Programming makes the program easy to understand as well as efficient.<br>
*Since the class is sharable, the code can be reused.<br>
*Data is safe and secure with data abstraction.<br>
*Polymorphism allows the same interface  for different objects, so programmers can write efficient code.
<br><br>
<h3 style="color:green;"><u>Benefits of Inheritance:</u></h3>
<br><br>
1)One of the key benefits of inheritance is to minimize the amount of duplicate code in an
application by sharing common code amongst several subclasses.<br> Where equivalent code
exists in two related classes, the hierarchy can usually be refactored to move the common
code up to a mutual superclass.<br> This also tends to result in a better organization of code and
smaller, simpler compilation units.<br>

2)Inheritance can also make application code more flexible to change because classes that
inherit from a common superclass can be used interchangeably. If the return type of a
method is superclass
<br>3) Reusability - facility to use public methods of base class without rewriting the same.
<br>4)Extensibility - extending the base class logic as per business logic of the derived class.

<br>
Data hiding - base class can decide to keep some data private so that it cannot be
altered by the derived class
<br></p><br>
<h3 style="color:green;">Here Are Some Practice Test For You:</h3><br>
<a href="test3.php" style="color:indigo;">Test1 for Python</a><br>
<a href="test2.php" style="color:indigo;">Test2 for Python</a><br>
<a href="" style="color:indigo;">Test3 for Python</a><br>
<a href="test4.php" style="color:indigo;">Test4 for Python</a><br>
<a href="test5.php" style="color:indigo;">Test5 for Python</a><br>
</div>
<div class="btn-position">
<a href="menu.php">
<button class="button">Thank You!</button></a>
</div>
<br>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>

