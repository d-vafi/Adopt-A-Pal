<?php 
$page = 'logout'; 

session_start();
//if the user is logged in
if (isset($_SESSION["username"]) && $_SESSION["username"] == true) {
    
    unset($_SESSION["username"]);
    session_destroy();
    $session_terminated = true;

  }else {
    $session_terminated = false;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAP - Log Out</title>
</head>
<body>
<?php include("header.php");
    include("navigation.php"); ?>
    <?php if($session_terminated){
        echo"<div id = 'goodbyeMsg'>
        <h2> Your session has been terminated! Thank you for using Adopt-A-Pal! </h2>
        <p class ='logoutP'> There's still so much to do! you can browse pets, create an AAP account, give a away a pet 
            or view our expert guides to Dog and Cat care!  
        </p>
        </div>";
    }
    else{
        echo"<div id = 'goodbyeMsg'>
        <h2> Could not perform Log out. Session not found. </h2>
        <p class ='logoutP'> Select the 'Create an Account' tab to create your very own AAP account!
        This will let you log in and allow you to put a pet up for adoption!   
        </p>
        </div>";
    } 
    ?>
    
<?php include("footer.php"); ?>
</body>
</html>