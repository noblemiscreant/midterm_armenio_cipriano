<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel = "stylesheet" href = "style.css">
<style>
    body {
  background-image: url('registerbg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
</head>
<body>
<form action="" method="post">

<div class = "container" >
<div class = "form_area">
<p class   = "title"> REGISTRATION FORM </p>

        <div class = "form_group">
        <label> First Name: </label>
        <input type = "text"    name = "firstName"  id = "firstName" class = "form_style" placeholder = "Enter your first name" required> <br> 
        </div>

        <div class = "form_group">
        <label> Last Name:        </label>
        <input type = "text"    name = "lastName"   id = "lastName"  class = "form_style"  placeholder = "Enter your last name" required><br>
        </div>

        <div class = "form_group">
        <label> Email(Optional):  </label>
        <input type = "email"    name = "email"     id = "email"     class = "form_style"  placeholder = "Enter your Email (Optional)" > <br>
        </div>

        <div class = "form_group">
        <label> Password:         </label>
        <input type = "password" name = "password"  id = "password"  class = "form_style"  placeholder = "Enter your Password" required> <br>
        </div>

        <div class = "form_group">
        <label> Confirm Password: </label>
        <input type = "password" name = "password2" id = "password2" class = "form_style"  placeholder = "Confirm your Password" required><br>
        </div>

        <?php
    
    if(isset($_POST['submit'])){
        
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $string_count = strlen($password);
               
        if ($password != $password2) {
            echo "<h2> Password Not Match! </h2>" ;
        }
        else if ( $string_count < 6) {
            echo "<h2> Password Must Have Atleast 6 Characters long. </h2>";
        }
        else {          
            echo "<meta http-equiv='refresh' content='0;url=mathQuiz.php'>"; 
        }
    }
?>

        <div>                   
        <input type = "submit"  name = "submit" value = "Let's Go!!"   class = "btn">
        </div>         
</div>
</div>
</form>


</body>
</html>