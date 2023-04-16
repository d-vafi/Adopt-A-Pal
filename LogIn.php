<?php 
session_start();
$page = 'login'?>
<?php 
    $invalid_credentials = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $file = "login_file.txt";
        $lines = file($file);

        $valid_user = false;

        foreach($lines as $line){
            $data = explode(":", $line);
            if (($data[0] == $username) && (trim($data[1]) == $password)) {
                $valid_user = true;
                break;
            }
        }
        if ($valid_user){
            //loads the Giveaway form into the content area
            $_SESSION['username'] = $username;
            header("Location: GiveAway.php");
            exit;
        }
        else{
            $invalid_credentials = true;
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAP - Log In</title>
    <link href="Login_stylesheet.css" rel = "stylesheet">
    
</head>
<body style="background-image:url('https://t3.ftcdn.net/jpg/03/55/60/70/360_F_355607062_zYMS8jaz4SfoykpWz5oViRVKL32IabTP.jpg');">
    <div class="createlogin">
    <h1>Login to your AAP account </h1>
    <form class = "createform" method="post" action="logIn.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" value="Login">
    </form>
    <?php 
        if($invalid_credentials){
            echo "Invalid credentials! Please verify your login information.";
        } 
    ?>
    </div>
</body>
</html>

