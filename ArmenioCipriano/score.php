<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "quiz.css">

<style>
    body {
  background-image: url('scorebg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}

    h2 {
  font-size: 30px;
}

    h3 {
  font-size: 20px;
}

</style>

</head>
<body>
<br> <br> <br> 
<div class = container>

<?php
session_start();

$score = $_SESSION['score'];
 echo " <h2> Your score is : $score </h2>" ; 

 if ($score >= 16) {
    echo "<h3> Congratulations! You passed! </h3>"; 
 }

 else {
    echo "<h3> Ops! Looks like you wants to try again. </h3>";
 }
?>

<br>
<a href="mathQuiz.php"> Do you want to try Again? </a> <br> <br>

 <h3> Or Do you want to view the answers? </h3>
 
<br> <br>
   <i>   Take Note that once you view the answers, you can't try again. </i>
<a href="answerkey.php"> View Answers? </a>
</div>
</body>
</html>