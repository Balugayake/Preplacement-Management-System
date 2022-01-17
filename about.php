<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
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

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<div class="container">
  <div style="text-align:center">
    <h2>About Us</h2>
   
  </div>
  <div class="row">
    <div class="column">
      <img src="assets/b.jpg" style="width:100%">
    </div>
    <div class="column">
<h3>
COVID-19 pandemic has changed the way of learning in education. Teaching, and learning activities that are usually carried out with face-to-face meetings have turned into virtual meetings in various online learning applications. The internet and technology have indeed made it possible for students to continue their education in any part of the world without any geographical constraints being imposed. Thus, online learning fits into the busy lives of students, thereby, making it easier for them to continue their further education. The lifecycle of people is changing drastically, from online shopping to internet banking, online admissions to e-mark sheets, e-learning to e-certificates, websites to mobile applications, etc. Everything is computer based that people don’t have to physically relocate. They can access the things from any place, anywhere without worrying of time and availability. The world is tremendously developing and going digital as we can see.
Hence ‘Preplacement Activity Management System’ is developed as per seeing the students to apply subject knowledge and technical skills in a professional environment. The proposed system which has been developed to gives the appropriate knowledge about interview preparation, technical preparation as well as aptitude preparation. Proper placement makes the employee happy and reduces absenteeism and labour turnover. Proper placement increases morale and efficiency of the employees and builds a good relation with the employer. A candidate who passes all the steps in the selection process is then offered the job.


</h3>      






<div class="btn-position">
<a href="index.php">
<button class="button">Back</button></a>
</div>







    </div>
  </div>
</div>
<br>
<div style="text-align:center;font-size:larger;">
<?php include('footer.php'); ?>
</div>
</body>
</html>

