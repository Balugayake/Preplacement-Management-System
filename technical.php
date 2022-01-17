<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/box.css">
   <style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-left: 45px;
  border-radius: 7px;
  cursor: pointer;
}
</style>
</head>
<body class="technical">

<?php include('header-user.php'); ?>
 <center>
<h3 style="color:yellow;"><b>Select Course</b></h3>

<?php
include('function.php');
   $pro_query = new func();
   $sql = $pro_query->course1();
    $sql1 = $pro_query->profile();
    $res = mysqli_fetch_array($sql1);
 while ($row = mysqli_fetch_array($sql)) {
          
  ?>

<div class="box1">
<h3>
<div class="back">
<img src="assets/book.jpeg">
</div>
<table>
<tr><td style="color: white;"> Course ID:</td><td style="color: yellow;"> <?php echo $row['course_id'] ;?></td></tr>
<tr><td style="color: white;"> Course Name:</td><td style="color: yellow;"> <?php echo $row['course_name'] ;?></td></tr>
<tr><td style="color: white;"> Duration: </td><td style="color: yellow;"><?php echo $row['duration'] ;?></td></tr>
<tr><td style="color: white;"> Course_category: </td><td style="color: yellow;" ><?php echo $row['course_category'] ;?></td></tr>


<tr><td><a href="/php/final/coursereg.php?course_id=<?php echo $row[0];?>?id=<?php echo $res[0];?> ">
<button type="button" class="button">Enroll Course</button></a></td></tr>
</table>
<br>
</h3>
</div>

<?php } ?>
</center>
</body>
</html>
