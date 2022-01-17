<html>
<head>
<title>Quiz</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<style>
  
.button {
  background-color: green;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius:5px;
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
<body class="test">
<?php include('header-user.php'); ?> 
<div style="font-size: 20px;font-family: sans-serif;color:yellow; margin-top: 30px; margin-left:30px;">

<center><h1><u>Numerical Aptitude</h1></u></center>
</div>

<form action="test1.php" method="POST">
<div style="font-size: 20px;font-family: sans-serif;color:white; margin-top: 30px; margin-left:30px;margin-right:30px;">


<b><div style="color:yellow;">Question 1.

<br>If 20% of a=b, then b% of 20 is the same as:<br></b></div>

<blockquote>

<input type="radio" name="q1" value="4% of a">4% of a<br>

<input type="radio" name="q1" value="6% of a">6% of a<br>

<input type="radio" name="q1" value="8% of a">8% of a<br>
<input type="radio" name="q1" value="10% of a">10% of a<br>

</blockquote>

<p><b>

<hr>

<b><div style="color:yellow;">Question 2.

<br>A sum of money at simple interest amouonts to Rs. 815 in 3 years and to Rs. 854 in 4 years. The sum is:<br></b></div>

<blockquote>

<input type="radio" name="q2" value="Rs. 650">Rs. 650<br>

<input type="radio" name="q2" value="Rs. 690">Rs. 690<br>

<input type="radio" name="q2" value="Rs.698">Rs. 698<br>
<input type="radio" name="q2" value="Rs. 700">Rs. 700<br>
</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 3.

<br>What will be the compound interest on a sum of Rs.25000 after 3 years at the rate of 12 p.c.p.a ?

 
<br></b></div>

<blockquote>

<input type="radio" name="q3" value="Rs.9000.30">Rs.9000.30<br>

<input type="radio" name="q3" value="Rs.9720">Rs.9720<br>

<input type="radio" name="q3" value="Rs.10123">Rs.10123<br>
<input type="radio" name="q3" value="None of these">None of these<br>
</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 4.

<br>What was the day of the week on 17th June, 1998?<br></b></div>

<blockquote>
<input type="radio" name="q4" value="Monnday">Monday<br>

<input type="radio" name="q4" value="Tuesday">Tuesday<br>

<input type="radio" name="q4" value="Wednesday">Wednesday<br>
<input type="radio" name="q4" value="Thursday">Thursday<br>
</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 5.

<br>Average of five numbers is 20. If each number is multiplied by 2, what will be the new average?<br></b></div>

<blockquote>
<input type="radio" name="q5" value="30">30<br>

<input type="radio" name="q5" value="40">40<br>

<input type="radio" name="q5" value="50">50<br>
<input type="radio" name="q5" value="60">60<br>
</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 6.<br>How many times the hands of a clock coincide in a day?<br></b></div>


 
<blockquote>

<input type="radio" name="q6" value="24">24<br>
<input type="radio" name="q6" value="22">22<br>
<input type="radio" name="q6" value="23">23<br>

<input type="radio" name="q6" value="21">21<br>

</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 7.<br>What was the day of the week on 28th May,2006?<br></b></div>

<blockquote>

<input type="radio" name="q7" value="Thursday">Thursday<br>
<input type="radio" name="q7" value="Friday">Friday<br>
<input type="radio" name="q7" value="Saturday">Saturday<br>

<input type="radio" name="q7" value="Sunday">Sunday<br>

</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 8.

<br>What is the sum of first 35 natural numbers?<br></b></div>

<blockquote>

<input type="radio" name="q8" value="610">610<br>
<input type="radio" name="q8" value="630">630<br>
<input type="radio" name="q8" value="645">645<br>

<input type="radio" name="q8" value="660">660<br>

</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 9.

<br>Find the number of three digit numbers which are divisible by 6<br></b></div>

<blockquote>

<input type="radio" name="q9" value="150">150<br>
<input type="radio" name="q9" value="130">130<br>
<input type="radio" name="q9" value="120">120<br>

<input type="radio" name="q9" value="110">110<br>

</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 10.

<br>Given that 1+2+3+..+9=45, find the value of(11+12+13+..+19)<br></b></div>

<blockquote>

<input type="radio" name="q10" value="125">125<br>
<input type="radio" name="q10" value="130">130<br>
<input type="radio" name="q10" value="135">135<br>

<input type="radio" name="q10" value="140">140<br>

</blockquote>



<script>

var numQues = 10;

var numChoi = 4;

var answers = new Array(10);

answers[0] = "4% of a";

answers[1] = "Rs.698";

answers[2] = "Rs.10123";

answers[3] = "Wednesday";

answers[4] = "40";

answers[5] = "22";

answers[6] = "Sunday";

answers[7] = "630";

answers[8] = "150";

answers[9] = "135";


function getScore(form) {

var score = 0;

var currElt;

var currSelection;

for (i=0; i<numQues; i++) {

currElt = i*numChoi;

answered=false;

for (j=0; j<numChoi; j++) {

currSelection = form.elements[currElt + j];

if (currSelection.checked) {

answered=true;

if (currSelection.value == answers[i]) {

score++;

break;

}

}

}

if (answered ===false){alert("Do answer all the questions, Please") ;return false;}

}

var scoreper = Math.round(score/numQues*100);

form.percentage.value = scoreper;

form.mark.value=score;

}
</script>


<p>
<center>

Number of score out of 10 = <input type="text" name= "mark">

Score in percentage = <input type="text" name="percentage"><br>
<br>

<input type="button" value="Grade Me"  onClick="getScore(this.form);">
<input type="reset" value="Clear">

</center></p>
</form>
</div>
<div class="btn-position">
<a href="aptitude.php">
<button class="button">Finish</button></a>
</div>
<br>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>








