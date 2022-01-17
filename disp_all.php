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
 
  <h2><center>Users Details</center></h2>
  <br>
    
  <table >
    
      <tr>
        <th>ID</th>
        <th>Username</th><th>Email</th><th>Mobile Number</th><th>Gender</th><th>Date of Birth</th><th>state</th><th>Qualification</th><th>Profile</th><th>Action</th>
      </tr>
 <?php
        include('functions.php');
        //error_reporting(0);
       $disp_data = new func();
        $ret = $disp_data->listing();
        
        while ($row = mysqli_fetch_array($ret)) {
         $id=$row['id']; 
    ?>              
 <tr>
        <td><b><?php echo $row['id'];?></b></td>
        <td><b><?php echo $row['username'];?></b></td>
        <td><b><?php echo $row['email'];?></b></td>
        <td><b><?php echo $row['mobileno'];?></b></td>
        <td><b><?php echo $row['gender'];?></b></td>
        <td><b><?php echo $row['dob'];?></b></td>
        <td><b><?php echo $row['state'];?></b></td>
        <td><b><?php echo $row['qualification'];?></b></td>
        <td><b><?php echo $row['profile'];?><b></td>
        <td><img src="<?php echo 'upload/'.htmlentities($row['profile']); ?>" width="100" height="100"></td>
        <td>
            <a href="delete.php?id=<?php echo base64_encode($id); ?>">DELETE</a></td>
 </tr>
      <?php 
       
     } ?>
   
  </table>
  <div class="btn-position">
<a href="admin.php">
<button class="button">Back</button></a>
</div>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>
