<?php
function Validate()
{
    if (isset($_POST["submit"])) {
        //trims user input and converts special chars to HTML entities
        $username = trim(htmlspecialchars($_POST["username"]));
        $pw = trim(htmlspecialchars($_POST["password"]));
        $repw = trim(htmlspecialchars($_POST["repassword"]));
        if(!(preg_match('/^[a-zA-Z0-9]+$/', $username))){
          echo "Username must contain only letters and digits.";
          return false;
        }
        //confirms both passwords match
        if (($pw != $repw)) {
          echo "Both entered passwords must match in order to create your account.";
          return false;
        } 
        //validates a correct password 
        if ((strlen($pw) <= 3) || !(preg_match("#[0-9]#", $pw))  ){
          echo"Password must be larger than 5 characters and contain a number";
          return false;
        }
        else {
            return true;
        }
    }
}
function userTaken(){
    $file = "login_file.txt";
    // Reads the contents of the file into an array
    $lines = file($file);
    $username = trim(htmlspecialchars($_POST["username"]));
    
    // Loops through each line of the array and search for the username
    foreach ($lines as $line) {
    $data = explode(':', $line);
        if ($data[0] == $username) {
            $created = true;
            echo"user already exists";
        }else {
           $created = false;
        }
    }
    return $created;
}
function CreateUser(){
    //checks if form was correctly filled after Validate() call
    //checks if a user has already been created with that username
    if ((Validate() == true) && (userTaken() == false)){
        
        $username = trim(htmlspecialchars($_POST["username"]));
        $pw = trim(htmlspecialchars($_POST["password"]));
        $file = "login_file.txt";
        $info = $username . ":" . $pw . "\n";
        file_put_contents($file, $info, FILE_APPEND );
        
        return true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAC - Account Creation Page</title>
    <link href="Login_stylesheet.css" rel="stylesheet">
</head>
<body style="text-align: center;">
    <div class="createlogin">
        <h2> Create an Account </h2>
        <p> Creating an account here allows you to put a pet up for adoption 
            and gain access to a better user experience! </p>
        <form action="AccountCreation.php" class="createform" method="post">
            <label> Username (Must contain only letters and digits): </label>
            <input type="text" placeholder="Enter a username" name="username" required>
            <br>
            <label> Password (at least 5 characters): </label>
            <input type="password" placeholder="Enter a password" name="password" class="error" required> <br>
            <label> Confirm Password: </label>
            <input type="password" placeholder="Confirm Password" name="repassword" class="error" required>
            <br>
            <input type="submit" name="submit" value="Create Account">
        </form>
        <?php 
           if(CreateUser()){
            echo'<script>alert("Your account has been created!")</script>';
           }
        ?>
    </div>
</body>
</html>