<?php
session_start();

$_SESSION['score'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Science Quiz </title>
    <link rel = "stylesheet" href = "quiz.css">

<style>
    body {
  background-image: url('sciencebg.jpg');
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
<body text = "white">
<form action="" method="post">

    <p class   = "title"> SCIENCE </p> 

    <h2> 11. Which animal lays eggs? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_11" id="" required>
        A. Dog
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_11" id="" required>
        B. Cat
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_11" id="" required>
        C. Duck
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_11" id="" required>
        D. Sheep
    </label>

    <h2> 12. A male cow is called? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_12" id="" required>
        A. Ox
    </label>
    <br>

     <label>
        <input type="radio" value="B" name="answer_12" id="" required>
        B. Dog
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_12" id="" required>
        C. Sheep
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_12" id="" required>
        D. Monkey
    </label>
    
    <h2> 13. All animals need food, air, and ____ to survive. </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_13" id="" required>
        A. House
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_13" id="" required>
        B. Water
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_13" id="" required>
        C. Chocolates
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_13" id="" required>
        D. Fruits
    </label>
    
    <h2> 14. What is Earth's only natural satellite? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_14" id="" required>
        A. Sun
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_14" id="" required>
        B. Mars
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_14" id="" required>
        C. Venus
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_14" id="" required>
        D. Moon
    </label>
    
    <h2> 15.Which one is a fur-bearing animal? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_15" id="" required>
        A. Hen
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_15" id="" required>
        B. Crocodile
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_15" id="" required>
        C. Tortoise
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_15" id="" required>
        D. Cat
    </label>
   
    <h2> 16. The tree has a branch filled with green _____.</h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_16" id="" required>
        A. Hair
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_16" id="" required>
        B. Root
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_16" id="" required>
        C. Leaves 
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_16" id="" required>
        D. Trunk
    </label>
   
    <h2> 17. What part of the body helps you move? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_17" id="" required>
        A. Eyes
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_17" id="" required>
        B. Lungs
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_17" id="" required>
        C. Pancreas
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_17" id="" required>
        D. Muscle
    </label>
    
    <h2> 18. The two holes of the nose are called? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_18" id="" required>
        A. Eyelids
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_18" id="" required>
        B. Nostrils
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_18" id="" required>
        C. Nails
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_18" id="" required>
        D. Hair
    </label>
    
    <h2> 19. What star shines in the day and provides light? </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_19" id="" required>
        A. Moon
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_19" id="" required>
        B. Venus
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_19" id="" required>
        C. Mars
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_19" id="" required>
        D. Sun
    </label>
    
    <h2> 20. Legs have feet and arms have ___. </h2>
    <label>
    <p>
        <input type="radio" value="A" name="answer_20" id="" required>
        A. Ankles
    </label>
    <br>

    <label>
        <input type="radio" value="B" name="answer_20" id="" required>
        B. Pelvis
    </label>
    <br>

    <label>
        <input type="radio" value="C" name="answer_20" id="" required>
        C. Hands
    </label>
    <br>

    <label>
        <input type="radio" value="D" name="answer_20" id="" required>
        D. Skull
    </label> 
    
    <br>
    <br>
    <div>                   
    <input type = "submit"  name = "submit" value = "Next"   class = "btn">
    </div> 

</form>

<?php

    if(isset($_POST['submit'])){
    $answer_11 = $_POST['answer_11'];
    $answer_12 = $_POST['answer_12'];
    $answer_13 = $_POST['answer_13'];
    $answer_14 = $_POST['answer_14'];
    $answer_15 = $_POST['answer_15'];
    $answer_16 = $_POST['answer_16'];
    $answer_17 = $_POST['answer_17'];
    $answer_18 = $_POST['answer_18'];
    $answer_19 = $_POST['answer_19'];
    $answer_20 = $_POST['answer_20'];

    if($answer_11 == "C"){
        $_SESSION['score']++;
    }
    if($answer_12 == "A"){
        $_SESSION['score']++;
    }
    if($answer_13 == "B"){
        $_SESSION['score']++;
    }
    if($answer_14 == "D"){
        $_SESSION['score']++;
    }
    if($answer_15 == "D"){
        $_SESSION['score']++;
    }
    if($answer_16 == "C"){
        $_SESSION['score']++;
    }
    if($answer_17 == "D"){
        $_SESSION['score']++;
    }
    if($answer_18 == "B"){
        $_SESSION['score']++;
    }
    if($answer_19 == "D"){
        $_SESSION['score']++;
    }
    if($answer_20 == "C"){
        $_SESSION['score']++;
    }
    
    echo "<meta http-equiv='refresh' content='0;url=englishQuiz.php'>";
}
?>
</body>
</html>