<?php
session_start();

$_SESSION['score'] = 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Math Quiz </title>
    <link rel = "stylesheet" href = "quiz.css">
<style>
    body {
  background-image: url('m.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
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
<body text = "white">
<form action="" method="post">

    <p class   = "title"> MATHEMATICS </p> 

    <h2> 1. Cube root of 1331 is? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_1" id="" required>
        A. 13
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_1" id="" required>
        B. 10
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_1" id="" required>
        C. 11
    </label>
    <br> 

    <label>
        <input type="radio" value="D" name="answer_1" id="" required>
        D. 12
    </label>
    <br> <br>

    <h2> 2. A square has all its angles equal to? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_2" id="" required>
        A. 45 degrees
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_2" id="" required>
        B. 90 degrees
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_2" id="" required>
        C. 180 degrees
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_2" id="" required>
        D. 120 degrees
    </label>
    <br> <br>

    <h2> 3. What is the sum of 130 + 125 + 191? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_3" id="" required>
        A. 335
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_3" id="" required>
        B. 456
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_3" id="" required>
        C. 446
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_3" id="" required>
        D. 426
    </label> 
    <br> <br>

    <h2> 4. What is the Next Prime Number after 7? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_4" id="" required>
        A. 13
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_4" id="" required>
        B. 12
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_4" id="" required>
        C. 14
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_4" id="" required>
        D. 11
    </label>
    <br> <br>

    <h2> 5. How Many Years are there in a Decade? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_5" id="" required>
        A. 5 years
    </label> 
     <br>

    <label>
        <input type="radio" value="B" name="answer_5" id="" required>
        B. 10 years
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_5" id="" required>
        C. 15 years
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_5" id="" required>
        D. 20 years
    </label>
    <br> <br>

    <h2> 6. What is the product of 121 * 0 * 20 * 2.5? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_6" id="" required>
        A. 6 050
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_6" id="" required>
        B. 0
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_6" id="" required>
        C. 2 420
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_6" id="" required>
        D. None of the above
    </label>
    <br> <br>

    <h2> 7.  How Many Months Make a Century? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_7" id="" required>
        A. 12
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_7" id="" required>
        B. 120
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_7" id="" required>
        C. 1 200
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_7" id="" required>
        D. 12 000
    </label>
    <br> <br>

    <h2> 8. What is 6% Equals to? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_8" id="" required>
        A. 0.06
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_8" id="" required>
        B. 0.6
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_8" id="" required>
        C. 0.006
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_8" id="" required>
        D. 0.0006
    </label>
    <br> <br>

    <h2> 9. Solve 3 + 6 * ( 5 + 4) ÷ 3 - 7? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_9" id="" required>
        A. 11
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_9" id="" required>
        B. 16
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_9" id="" required>
        C. 14
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_9" id="" required>
        D. 15
    </label>
    <br> <br>

    <h2> 10. Find the Missing Term in Multiples of 6 : 6, 12, 18, 24, _, 36, 42, _ 54, 60. </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_10" id="" required>
        A. 32, 45
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_10" id="" required>
        B. 30, 48
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_10" id="" required>
        C. 24, 40
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_10" id="" required>
        D. 25, 49
    </label>

    <br>
    <br>
    <div>                   
    <input type = "submit"  name = "submit" value = "Next"   class = "btn">
    </div> 

</p>
</form>

<?php

    if(isset($_POST['submit'])){
        $name = $_POST['firstName'] ;
    $answer_1  = $_POST['answer_1'];      
    $answer_2  = $_POST['answer_2'];
    $answer_3  = $_POST['answer_3'];
    $answer_4  = $_POST['answer_4'];
    $answer_5  = $_POST['answer_5'];
    $answer_6  = $_POST['answer_6'];
    $answer_7  = $_POST['answer_7'];
    $answer_8  = $_POST['answer_8'];
    $answer_9  = $_POST['answer_9'];
    $answer_10 = $_POST['answer_10'];

    if($answer_1 == "C"){
        $_SESSION['score']++;
    }
    if($answer_2 == "B"){
        $_SESSION['score']++;
    }
    if($answer_3 == "C"){
        $_SESSION['score']++;
    }
    if($answer_4 == "D"){
        $_SESSION['score']++;
    }
    if($answer_5 == "B"){
        $_SESSION['score']++;
    }
    if($answer_6 == "B"){
        $_SESSION['score']++;
    }
    if($answer_7 == "C"){
        $_SESSION['score']++;
    }
    if($answer_8 == "A"){
        $_SESSION['score']++;
    }
    if($answer_9 == "C"){
        $_SESSION['score']++;
    }
    if($answer_10 == "B"){
        $_SESSION['score']++;
    }
    
    echo "<meta http-equiv='refresh' content='0;url=scienceQuiz.php'>";
}
?>
</body>
</html>