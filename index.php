<?php $page = 'index'; ?> <!-- Specifies the global $page value for the navigation links-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAP - Home</title>
</head>

<body>
    <?php include("header.php");
    include("navigation.php"); ?>
    <p> <b> Home </b> </p>
    <p> Welcome to Adopt-A-Pal! </p>
    <br>
    <p> In this website, you can find your special buddy, give away a pet or select our signature Dog Care / Cat Care services.
        From puppies and kittens to our golden-aged dogs and cats, we offer a wide range that will sureley make you happy - Pets are wonderful after all!
    </p>
    <br>
    <!-- dog and cat images are taken directly from https://pngimages.in/download/dog-www-png-image 
	and https://memetemplatehouse.com/meme/little-kitten-thinking/ -->
    <p> <b> Why buy when you can save?</b> </p>
    <br>
    <img class="image1" src="images/catto.png" alt="cat">
    <br>
    <p> Created in 2023, Adopt-A-Pal (AAP) works hard to provide loving soon-to-be owners a chance to find their
        purr-fect partner. With our search system, your buddy is only a few clicks away.
        We also strive to offer the best Care services we can offer. This includes dietary provisions, grooming services,
        professional health advice and pet accessories.
    </p>
    <?php include("footer.php"); ?>
</body>

</html>