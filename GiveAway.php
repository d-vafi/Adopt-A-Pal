<?php
session_start(); 
$page = 'giveaway';

// Check if the user is logged in
if (!isset($_SESSION['username']) ) {
	header('Location: LogIn.php');
	exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$read_file = 'pet_info.txt';
	$handle = fopen($read_file, 'r');

	// Read the contents of the file into an array
	$lines = file($read_file);

	// Count the number of lines in the file
	$numLines = count($lines);

	// Close the file handle
	fclose($handle);
	
	$write_file = "pet_info.txt";
	$user_name = $_SESSION['username'];
	$petId = $numLines + 1;
	$animal = $_POST['animal'];
	$pet_breed = $_POST['petbreed'];
	$mix_breed = $_POST['mixbreed'];
	$age = $_POST['age'];
	$animal = $_POST['animal'];
	$gender = $_POST['gender'];
	$along = $_POST['along'];
	$client_name = $_POST['info_name'];
	$client_email = $_POST['info_email'];

	$pet_info = $petId . ":" . $user_name . ":" . $animal . ":" . $pet_breed . ":" . $mix_breed . ":" . $age . ":" .
	$animal . ":" . $gender . ":" . $along . ":" . $client_name . ":" . $client_email .  "\n";

	file_put_contents($write_file, $pet_info, FILE_APPEND );

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAP - Have a pet to give away</title>
</head>
<body>

    <script>  </script>
    <?php include("header.php"); 
    include("navigation.php"); ?>
    <!-- GiveAway page content -->
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>

    <p> <b> Have a pet to give away? </b> </p>
	<p> Kindly enter the requested information into the form below to continue: </p>
	<br>
	
	 <img class = "image2" src = "images/keypup.png" alt = "keypup"> 
	<br>
	<!-- dog and cat images are taken directly from https://pngimages.in/download/dog-www-png-image 
	and https://memetemplatehouse.com/meme/little-kitten-thinking/ -->
	
	
	<form onsubmit = "return !!(ValidateName() & ValidateEmail() & ValidateAnimal() & breedText() );" 
    action ="GiveAway.php" method = "post"> 
	
		<fieldset>
		<legend> Giveaway Form </legend>
		<p> What is your pet? </p>
		<label> <input id = "dog" type ="radio" value = "dog" name = "animal"> Dog </label>
		<label> <input id = "cat" type ="radio" value = "cat" name = "animal"> Cat </label>
		<p> What is the breed of your dog/cat? </p>
		<input id = "breedtext" type = "text" name = "petbreed"> 
		<br>
		<label> <input id = "mixed" type = "radio" value = "notmixed" name = "mixbreed"> Not Mixed </label> 
		<label> <input id = "mixed" type = "radio" value = "mixed" name = "mixbreed"> Mixed Breed </label> 
		</fieldset>
		<br>
		
		<fieldset> 
		<legend> Characteristics </legend> 
		<p> Approximate age of your animal? </p> 
		<select name = "age" >
		<option value= "3-11months"> Kitten/Puppy (3 months to 11 months) </option>
		<option value= "1-3years"> 1 - 3 years old </option>
		<option value= "3-6years"> 3 - 6 years old</option>
		<option value= "7-10years"> 7 - 10 years old</option>
		<option value= "+10years"> 10 years old and up </option>
		</select>
		<br> 
		<p> Your animal's gender? </p>
		<select name = "gender" >
		<option value = "M"> Male </option>
		<option value = "F"> Female </option>
		</select>
		<br>
		<p> Check the relevant boxes concerning your pet:  </p>
		<label> <input id = "alongDog" type = "checkbox" value = "Gets along with all" name = "along"> Gets along with all </label> <br>
		<label> <input id = "alongDog" type = "checkbox" value = "does not get along with other dogs" name = "along"> Does not get along with other dogs </label> <br>
		<label> <input id = "alongCat" type = "checkbox" value = "does not get along with other cats" name = "along"> Does not get along with other cats </label> <br>
		<label> <input id = "alongChildren" type = "checkbox" value = "does not get along with small children" name = "along"> Does not get along with small children </label>
		<br>
		<br>
		Special traits or needs? (e.g. health peculiarities, behvaviour, energy, diet, etc.) <br>
		<textarea name = "text" rows = "3" cols = "40">
		</textarea>
		
		<br> 
		Your name (First name, Last name ):  <input id = "name" type = "text"  name = "info_name"> <br>
		Your email (e.g. johnjohnson@gmail.com):  <input id = "email" type = "text" name = "info_email" > 
		
		
		
		</fieldset>
		<br>
		<input style = "height:40px; width: 100px;" type = "submit" value = "Submit Form">
		<input style = "height:40px; width: 100px;" type = "reset" value = "Reset Form">
	</form>

    <!--                        -->
    <?php include("footer.php");?>
</body>
</html>