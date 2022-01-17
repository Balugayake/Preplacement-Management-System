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

<center><h1><u>Logical Reasoning</h1></u></center>
</div>

<form action="test2.php" method="POST">
<div style="font-size: 20px;font-family: sans-serif;color:white; margin-top: 30px; margin-left:30px;margin-right:20px;">


<b><div style="color:yellow;">Question 1.

<br>Which word does NOT belong with the others?<br></b></div>

<blockquote>

<input type="radio" name="q1" value="parsley">parsley<br>

<input type="radio" name="q1" value="basil">basil<br>

<input type="radio" name="q1" value="dill">dill<br>
<input type="radio" name="q1" value="mayonnaise">mayonnaise<br>

</blockquote>

<p><b>

<hr>

<b><div style="color:yellow;">Question 2.

<br>Which word does NOT belong with the others?<br></b></div>

<blockquote>

<input type="radio" name="q2" value="heading">heading<br>

<input type="radio" name="q2" value="body">body<br>

<input type="radio" name="q2" value="letter">letter<br>
<input type="radio" name="q2" value="closing">closing<br>
</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 3.

<br>Which word does NOT belong with the others?</div>

 
<br></b>

<blockquote>

<input type="radio" name="q3" value="branch">branch<br>

<input type="radio" name="q3" value="dirt">dirt<br>

<input type="radio" name="q3" value="leaf">leaf<br>
<input type="radio" name="q3" value="root">root<br>
</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 4.

<br>Which word does NOT belong with the others?<br></b></div>

<blockquote>
<input type="radio" name="q4" value="avoid">avoid<br>

<input type="radio" name="q4" value="duck">duck<br>

<input type="radio" name="q4" value="flee">flee<br>
<input type="radio" name="q4" value="dodge">dodge<br>
</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 5.

<br>Which word does NOT belong with the others?<br></b></div>

<blockquote>
<input type="radio" name="q5" value="guitar">guitar<br>

<input type="radio" name="q5" value="flute">fluet<br>

<input type="radio" name="q5" value="violin">violin<br>
<input type="radio" name="q5" value="cello">cello<br>
</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 6.<br>Which word does NOT belong with the others?<br></b></div>


 
<blockquote>

<input type="radio" name="q6" value="noun">noun<br>
<input type="radio" name="q6" value="preposition">preposition<br>
<input type="radio" name="q6" value="puctuation">punctuation<br>

<input type="radio" name="q6" value="adverb">adverb<br>

</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 7.<br>Which word does NOT belong with the others?<br></b></div>

<blockquote>

<input type="radio" name="q7" value="vision">vision<br>
<input type="radio" name="q7" value="pupil">pupil<br>
<input type="radio" name="q7" value="retina">retina<br>

<input type="radio" name="q7" value="cornea">cornea<br>

</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 8.

<br>Which word does NOT belong with the others?<br></b></div>

<blockquote>

<input type="radio" name="q8" value="couch">couch<br>
<input type="radio" name="q8" value="rug">rug<br>
<input type="radio" name="q8" value="table">table<br>

<input type="radio" name="q8" value="chair">chair<br>

</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 9.

<br>Which word does NOT belong with the others?<br></b></div>

<blockquote>

<input type="radio" name="q9" value="leopard">leopard<br>
<input type="radio" name="q9" value="cougar">cougar<br>
<input type="radio" name="q9" value="elephant">elephant<br>

<input type="radio" name="q9" value="lion">lion<br>

</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 10.

<br>Which word does NOT belong with the others?<br></b></div>

<blockquote>

<input type="radio" name="q10" value="tape">tape<br>
<input type="radio" name="q10" value="twine">twine<br>
<input type="radio" name="q10" value="cord">cord<br>

<input type="radio" name="q10" value="yarn">yarn<br>

</blockquote>



<script>

var numQues = 10;

var numChoi = 4;

var answers = new Array(10);

answers[0] = "mayonnaise";

answers[1] = "letter";

answers[2] = "dirt";

answers[3] = "flee";

answers[4] = "flute";

answers[5] = "punctuation";

answers[6] = "vision";

answers[7] = "rug";

answers[8] = "elephant";

answers[9] = "tape";


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
<?php include('footer.php'); ?>
</body>
</html>








