

<?php 
include("connection.php");

$cid=$_GET['course_id'];

$sql="select * from courses where course_id='$cid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_row($result);
?>



<html>
<head>
<title>Java</title>
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

<img src="assets/java.png" height="200" width="200">
</center>
<iframe  style="margin-left:25%;"width="800" height="500" src="https://www.youtube.com/embed/hBh_CC5y8-s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div style="font-size: 20px; font-family: sans-serif; color:black; margin-top: 30px; margin-left: 20px;">
<h4 style="color:green;"><center><u>Java Full Course| Java Tutorial for Beginners| Java Online Training</u></center></h4><br>

<h3 style="color:green;"><u>Description:</u></h3><br>
<p>Java is a high-level programming language developed by Sun Microsystems. It was originally designed for developing programs for set-top boxes and handheld devices, but later became a popular choice for creating web applications. The Java syntax is similar to C++, but is strictly an object-oriented programming language.</p><br>

<h3 style="color:green;"><u>OOPS CONCEPT:</u></h3><br>
<p>a)Object:<br>
Any entity that has state and behavior is known as an object.<br> For example: chair, pen, table,
keyboard, bike etc. It can be physical and logical.<br><br>
b)Class:<br>
Collection of objects is called class. It is a logical entity.<br><br>
c)Inheritance:<br>
When one object acquires all the properties and behaviours of parent object i.e. known as
inheritance. It provides code reusability. It is used to achieve runtime polymorphism.<br>
<br>
d)Polymorphism:<br>
When one task is performed by different ways i.e. known as polymorphism.<br> For example: to
convince the customer differently, to draw something e.g. shape or rectangle etc.<br><br>
In java, we use method overloading and method overriding to achieve polymorphism.<br>
Another example can be to speak something e.g. cat speaks meaw, dog barks woof etc.<br><br>
e)Abstraction:<br>
Hiding internal details and showing functionality is known as abstraction.<br> For example: phone
call, we don't know the internal processing.
In java, we use abstract class and interface to achieve abstraction.<br><br>
f)Encapsulation:<br>
Binding (or wrapping) code and data together into a single unit is known as encapsulation.
<br>For example: capsule, it is wrapped with different medicines.
A java class is the example of encapsulation. Java bean is the fully encapsulated class because all
the data members are private here.<br></h4>
<br>
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
<a href="test3.php" style="color:indigo;">Test1 for Java</a><br>
<a href="test2.php" style="color:indigo;">Test2 for Java</a><br>
<a href="" style="color:indigo;">Test3 for Java</a><br>
<a href="test4.php" style="color:indigo;">Test4 for Java</a><br>
<a href="test5.php" style="color:indigo;">Test5 for Java</a><br>
</div>
<div class="btn-position">
<a href="technical.php">
<button class="button">Thank You!</button></a>
</div>
<br>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>

