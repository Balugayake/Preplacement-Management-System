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

<form action="test3.php" method="POST">
<div style="font-size: 20px;font-family: sans-serif;color:white; margin-top: 30px; margin-left:30px;margin-right:30px;">


<b><div style="color:yellow;">Question 1.

<br>Which of the following option leads to the portability and security of Java?<br></b></div>

<blockquote>

<input type="radio" name="q1" value="Bytecode is executed by JVM">Bytecode is executed by JVM<br>

<input type="radio" name="q1" value="The applet makes the java code secure and portable">The applet makes the java code secure and portable<br>

<input type="radio" name="q1" value="Use of exception handling">Use of exception handling<br>
<input type="radio" name="q1" value="Dynamic binding between objects">Dynamic binding between objects<br>

</blockquote>

<p><b>

<hr>

<b><div style="color:yellow;">Question 2.

<br>Which of the following is not a Java features?<br></b></div>

<blockquote>

<input type="radio" name="q2" value="Dynamic">Dynamic<br>

<input type="radio" name="q2" value="Architecture Neutral">Architecture Neutral<br>

<input type="radio" name="q2" value="Use of pointers">Use of pointers<br>
<input type="radio" name="q2" value="Object-oriented">Object-oriented<br>
</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 3.

<br>The \u0021 article referred to as a

 
<br></b></div>

<blockquote>

<input type="radio" name="q3" value="Unicode escape sequence">Unicode escape sequence<br>

<input type="radio" name="q3" value="Octal escape">Octal escape<br>

<input type="radio" name="q3" value="Hexadecimal">Hexadecimal<br>
<input type="radio" name="q3" value="Line feed">Line feed<br>
</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 4.

<br>____ is used to find and fix bugs in the Java programs.<br></b></div>

<blockquote>
<input type="radio" name="q4" value="JVM">JVM<br>

<input type="radio" name="q4" value="JRE">JRE<br>

<input type="radio" name="q4" value="JDK">JDK<br>
<input type="radio" name="q4" value="JDB">JDB<br>
</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 5.

<br>Which of the following is a valid declaration of a char?<br></b></div>

<blockquote>
<input type="radio" name="q5" value="char ch='\utea';">char ch='\utea';<br>

<input type="radio" name="q5" value="char ca='tea';">char ca='tea';<br>

<input type="radio" name="q5" value="char cr='\u0223';">char cr='\u0223';<br>
<input type="radio" name="q5" value="char cc='\itea';">char cc='\itea';<br>
</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 6.<br>What is the return type of the hashCode() method in the Object class?<br></b></div>


 
<blockquote>

<input type="radio" name="q6" value="Object">Object<br>
<input type="radio" name="q6" value="int">int<br>
<input type="radio" name="q6" value="long">long<br>

<input type="radio" name="q6" value="void">void<br>

</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 7.<br>Which of the following is a valid long literal?<br></b></div>

<blockquote>

<input type="radio" name="q7" value="ABH8097">ABH8097<br>
<input type="radio" name="q7" value="L990023">L990023<br>
<input type="radio" name="q7" value="904423">904423<br>

<input type="radio" name="q7" value="0xnf029L">0xnf029L<br>

</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 8.

<br>What does the expression float a=35/0 return?<br></b></div>

<blockquote>

<input type="radio" name="q8" value="0">0<br>
<input type="radio" name="q8" value="Not a Number">Not a Number<br>
<input type="radio" name="q8" value="Infinity">Infinity<br>

<input type="radio" name="q8" value="Run time exception">Run time exception<br>

</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 9.

<br>Evaluate the following Java expression, if x=3, y=5 and z=10:<br>
++z+y-y+z+x++
<br></b></div>

<blockquote>

<input type="radio" name="q9" value="24">24<br>
<input type="radio" name="q9" value="23">23<br>
<input type="radio" name="q9" value="20">20<br>

<input type="radio" name="q9" value="25">25<br>

</blockquote>

<p><b>

<hr>

<div style="color:yellow;">Question 10.

<br>What will be the output of the following program?<br>
public class Test{<br>
public static void main(string[] args){<br>
int count=1;<br>
while(count<=15){<br>
System.out.println(count%2==1 ?"***":"+++++");<br>
++count;<br>
}<br>
}<br>
}

<br></b></div>

<blockquote>

<input type="radio" name="q10" value="15 times ***">15 times ***<br>
<input type="radio" name="q10" value="15 times +++++">15 times +++++<br>
<input type="radio" name="q10" value="8 times *** and 7 times +++++">8 times *** and 7 times +++++<br>

<input type="radio" name="q10" value="Both will print only ones">Both will print only ones<br>

</blockquote>



<script>

var numQues = 10;

var numChoi = 4;

var answers = new Array(10);

answers[0] = "Bytecode is executed by JVM";

answers[1] = "Dynamic";

answers[2] = "Unicode escape sequence";

answers[3] = "JVM";

answers[4] = "char ca='tea';";

answers[5] = "void";

answers[6] = "ABH8097";

answers[7] = "Run time exception";

answers[8] = "24";

answers[9] = "8 times *** and 7 times +++++";


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
<a href="sub1.php">
<button class="button">Finish</button></a>
</div>
<br>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>








