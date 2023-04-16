<?php $page = 'find'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAP - Find a Pet</title>
    <link href="AAP_stylesheet.css" rel = "stylesheet">
</head>
<body>
<?php include("header.php");
    include("navigation.php"); ?>

    <p> <b> Find a dog/cat </b> </p>
	<p> Kindly enter the requested information into the form below to find your potentiel pet:  </p>
	<br>
	
	<!-- form that on submit, calls the two main validation methods -->
	<form id = "findform" onsubmit = "return !!(ValidateAnimal() & checkCheckboxes() & ValidateGetAlong() );" 
	action = "Pets.php" method = "post">   
		<fieldset>
		<legend> Finder Form </legend>
		<p> What are you looking for? </p>
		<label> <input id = "dog" type ="radio" value = "dog" name = "animal"  > Dog </label>
		<label> <input id = "cat" type ="radio" value = "cat" name = "animal"  > Cat </label>
		
		<div class = "checkbox required">
		<p> Select the dog breed(s) you are looking for: </p>
		<label><input type = "checkbox" value = "golden" name = "breed" > Golden Retriever</label>
		<label><input type = "checkbox" value = "shepard" name = "breed" > German Shepard </label>
		<label><input type = "checkbox" value = "labrador" name = "breed"> Labrador</label>
		<label><input type = "checkbox" value = "borzoi" name = "breed"> Borzoi</label>
		<label><input type = "checkbox" value = "pitbull" name = "breed"> Pitbull</label> <br>
		<label><input type = "checkbox" value = "chihuahua" name = "breed"> Chihuahua</label>
		<label><input type = "checkbox" value = "french bulldog" name = "breed"> French Bulldog</label>
		<label><input type = "checkbox" value = "poodle" name = "breed"> Poodle</label>
		<label><input type = "checkbox" value = "corgi" name = "breed"> Corgi</label>
		<label><input type = "checkbox" value = "dalmatian" name = "breed"> Dalmatian</label>
		
		<p> Select the cat breed(s) you are looking for; </p>
		<label><input type = "checkbox" value = "siamese" name = "breed"> Siamese</label>
		<label><input type = "checkbox" value = "persian" name = "breed"> Persian </label>
		<label><input type = "checkbox" value = "maine coon" name = "breed"> Maine Coon</label>
		<label><input type = "checkbox" value = "ragdoll" name = "breed"> Ragdoll</label>
		<label><input type = "checkbox" value = "bengal" name = "breed"> Bengal</label> <br>
		<label><input type = "checkbox" value = "birman" name = "breed"> Birman</label>
		<label><input type = "checkbox" value = "sphynx" name = "breed"> Sphynx</label>
		<label><input type = "checkbox" value = "himalayan" name = "breed"> Himalayan</label>
		<label><input type = "checkbox" value = "british shorthair" name = "breed"> British Shorthair</label>
		<label><input type = "checkbox" value = "tabby" name = "breed"> Tabby </label>
		
		</div>
		</fieldset>
		<br>
		
		<fieldset> 
		<legend> Preferences </legend> 
		
		<p> Up to what age would you prefer? </p>
		<select name = "age"  >
		<option value = 1> Kitten/Puppy (3 months to 11 months) </option>
		<option value = 3> 1 - 3 years old </option>
		<option value = 6> 3 - 6 years old</option>
		<option value = 10> 7 - 10 years old</option>
		<option value = 15> 10 years old and up </option>
		</select>
		<br> 
		<p> Preferred gender? </p>
		<select name = "gender" >
		<option value = "male"> Male </option>
		<option value = "female"> Female </option>
		</select>
		<br>
		<p> Will your pet need to get along with small children, other cats or other dogs? </p>
		<label> <input id = "alongYes" type = "radio" value = "yes" name = "along" > Yes </label>
		<label> <input id = "alongNo" type = "radio" value = "no" name = "along" > No </label>
		<br>
		<br>
		Special requests or other preferences? (Optional) <br>
		<textarea name = "text" rows = "3" cols = "40">
		</textarea>
		
		</fieldset>
		
	<input style = "height:40px; width: 100px;" type = "submit" value = "Submit Form">
	<input style = "height:40px; width: 100px;" type = "reset" value = "Reset Form">
	</form>
	
	<p> <b> Looking furr something?</b> </p>
	<br>
	 <img class = "image2" src = "images/detective.png" alt = "find pet"> 
	
	<br>
	<!-- dog and cat images are taken directly from https://pngimages.in/download/dog-www-png-image 
	and https://memetemplatehouse.com/meme/little-kitten-thinking/ -->
<?php include("footer.php"); ?>
</body>
</html>