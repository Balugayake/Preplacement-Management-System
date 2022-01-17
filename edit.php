<?php
 include('functions.php');
// error_reporting(0);
$fname=$email=$mobileno=$dob="";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
      $fname = $_POST["fname"];
      $email = $_POST["email"];
      $mobileno = $_POST["mobileno"];
      $dob = $_POST["dob"];
  }

  $edit_query = new func();
$update_query = new func();//for update
    if(isset($_POST['updReg'])){
     
        $id =$_GET["id"];
        $sql = $update_query->update_details($fname,$email,$mobileno,$dob);

        if($sql){
          header('location:profile.php');
                }
        else{
          $msg = "ERROR";
            }
      }
  
  ?>


<html>
  <head>
   <title>Edit Page</title>
   <link rel="stylesheet" type="text/css" href="css/login.css">
   <style>
  
.button {
  background-color: red;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
  border-radius: 20px;
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
  <body class="background">
    <div class="loginbox">
          
         
            <br/>
          <form method="POST" enctype="multipart/form-data">
           <center>
            <h4 >Update User</h4>
<table >
     
<?php
     $id = $_GET["id"];

     $sql = $edit_query->edit_details($id);
            while ($row = mysqli_fetch_array($sql)) {

?>
     <tr><td>Username:</td><td><input type="text" name="fname"  placeholder="First name" value="<?php echo $row['username']; ?>"></td></tr>
    <tr><td>Email:</td><td> <input type="text" name="email"  placeholder="Email" value="<?php echo $row['email']; ?>"></td></tr>
   <tr><td>Mobile No:</td><td><input type="text" name="mobileno"  placeholder="Mobile Number" value="<?php echo $row['mobileno']; ?>"></td></tr>
 <tr><td>DOB:</td><td><input type="date" name="dob"  value="<?php echo $row['dob']; ?>"></td></tr>

 <?php } ?>
 </table>
 <center>
  <tr><td> <button type="submit" class="button" name="updReg">Update</button></td></tr>
</center>
</center>
</form>
</div>
</body>
</html>
