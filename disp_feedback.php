<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <style>
table, th, td {
  border: 1px solid black;
  padding: 5px;
}
table {
  border-spacing: 15px;
}
  
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
  </style>
  
</head>
<body class="disp">

<?php include('header-admin.php'); ?>
 
  <h2><center>Feedback</center></h2>
  <br>
   <center> 
  <table>
    
      <tr>
        <th>ID</th>
        <th>First Name</th><th>Last Name</th><th>State</th><th>Message</th>
      </tr>
 <?php
        include('functions.php');
        //error_reporting(0);
       $disp_data = new func();
        $ret = $disp_data->listing1();
        
        while ($row = mysqli_fetch_array($ret)) {
         $id=$row['id']; 
    ?>              
 <tr>
        <td><b><?php echo $row['id'];?></b></td>
        <td><b><?php echo $row['fname'];?></b></td>
        <td><b><?php echo $row['lname'];?></b></td>
        <td><b><?php echo $row['state'];?></b></td>
        <td><b><?php echo $row['message'];?></b></td>
 </tr>
      <?php 
       
     } ?>
  </center> 
  </table>
  <div class="btn-position">
<a href="admin.php">
<button class="button">Back</button></a>
</div>
<!--<br>
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
<br>-->
<div style="margin-top:350px;">
<?php include('footer.php'); ?>
    </div>
</body>
</html>
