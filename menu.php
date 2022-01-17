<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
   
   <style>
.button {
  background-color: indigo;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius:10px;
  cursor: pointer;
}
</style>
</head>
<body class="mennu">

<?php 
include('header-user.php'); 
include('function.php');
?>

<div style=" color:white; margin-left: 20px; margin-top: 30px;">
  <?php

   $pro_query = new func();
   $sql = $pro_query->profile();
    $res = mysqli_fetch_array($sql);

  ?>
  <h1> Welcome  <?php echo $res['username']; ?> </h1>
</div>


<div style="margin-left:20px; margin-right:20px;padding:10px; color:white;">
          <h2 >Technical Preparation</h2><br>

          <p style="font-size: 20px;">A technical interview is a pre-qualification screening for a job, usually in IT, that is highly technical in nature. Expert-level knowledge of coding and the technical job requirements are necessary to succeed in the role as well as the ability to analyze your work and create new strategies based upon your analysis.</p>
          <button class="button"><a  href="technical.php?id=<?php echo $res[0];?>" style="color: white;">Learn More</a></button><br><br><br>
          
          <h2>Interview Preparation</h2><br>
          <p style="font-size:20px;">The most important step to landing a job is being prepared for your interviews.By doing some preparation you'll more in control, and will appear cool, calm and collected as a result to your prospective employers.</p>
          <button class="button"><a  href="interview.php" style="color: white;">Learn More</a></button><br><br><br>

          <h2>Aptitude Preparation</h2><br>
          <p style="font-size:20px;">An aptitude test is an exam used to determine an individual's kill or propensity to succeed in a given activity. An aptitude test is a way for employers to assess a candidate's abilities through a variety of different testing formats.</p>
         <button class="button"> <a href="aptitude.php" style="color: white;">Learn More</a></button>
</div> 
<br>
<br> 
<div style="font-size:smaller; color:white;">
<?php include('footer.php'); ?>
</div>
</body>
</html>