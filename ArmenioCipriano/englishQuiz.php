<?php
session_start();

$_SESSION['score'] ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> English Quiz </title>
    <link rel = "stylesheet" href = "quiz.css">

<style>
    body {
  background-image: url('pastel.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100%;
  padding: 15px;
  margin: 25px;
}

    h2 {
  font-size: 30px;
}

    p {
  font-size: 20px;
}
</style>
</head>
<body text = "black">
<form action="" method="post">

    <p class   = "head"> ENGLISH </p>   

    <h2> 21. Change the active voice in to passive voice:I will clean the house every Saturday. <br>
             The house ______________ by me every Saturday. </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_21" id="" required>
        A. Cleaned
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_21" id="" required>
        B. Will cleaned
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_21" id="" required>
        C. Will be cleaned
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_21" id="" required>
        D. None of the above
    </label>

    <h2> 22. If A is equal to B and B is equal to C, ______________ A is equal to C. </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_22" id="" required>
        A. Than
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_22" id="" required>
        B. Then
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_22" id="" required>
        C. So
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_22" id="" required>
        D. None of the above
    </label>

    <h2> 23. This must not happen again, ______________ you will be dismissed. </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_23" id="" required>
        A. Or
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_23" id="" required>
        B. But
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_23" id="" required>
        C. And 
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_23" id="" required>
        D. So
    </label>

    <h2> 24. They built this temple 3,000 years ago. This must ______________ a great civilization. </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_24" id="" required>
        A. Not have been
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_24" id="" required>
        B. Was
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_24" id="" required>
        C. Has Been
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_24" id="" required>
        D. Have Been
    </label>

    <h2> 25. World war I and World war II took place ______________ the 20th century. </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_25" id="" required>
        A. On
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_25" id="" required>
        B. In
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_25" id="" required>
        C. At
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_25" id="" required>
        D. Into
    </label>

    <br>
    <br>
    <div>                   
    <input type = "submit"  name = "submit" value = "Submit"   class = "btn">
    </div> 

</form>

<?php

    if(isset($_POST['submit'])){
    
    $answer_21 = $_POST['answer_21'];
    $answer_22 = $_POST['answer_22'];
    $answer_23 = $_POST['answer_23'];
    $answer_24 = $_POST['answer_24'];
    $answer_25 = $_POST['answer_25'];

    if($answer_21 == "C"){
        $_SESSION['score']++;
    }
    if($answer_22 == "B"){
        $_SESSION['score']++;
    }
    if($answer_23 == "A"){
        $_SESSION['score']++;
    }
    if($answer_24 == "D"){
        $_SESSION['score']++;
    }
    if($answer_25 == "B"){
        $_SESSION['score']++;
    }

    echo "<meta http-equiv='refresh' content='0;url=score.php'>";
}
?>
</body>
</html>