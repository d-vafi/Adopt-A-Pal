<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "utf-8">
<title> AAP - Browse Pets </title> 
<link href="AAP_stylesheet.css" rel = "stylesheet">
</head>
<body style = "text-align: center;" > 
	
	<h1> Browse Available Pets </h1>
	<!-- ALL IMAGES WERE TAKEN FROM PETFINDER.COM AT THE URL
	https://www.petfinder.com/cat/relish-58619849/qc/montreal/clinique-veterinaire-plateau-mont-royal-qc73/-->
</body>
</html>
<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$animal = $_POST["animal"]; 
		$breed = $_POST["breed"];
		$age = $_POST["age"];
		$gender = $_POST["gender"];
		$along = $_POST["along"];
		echo'<table>';
		if($animal == 'dog'){
			echo"Since you've selected dogs; ";
			if($gender == 'male'){
				if($breed == 'shepard'){
					if($along == 'yes'){
						if($age > 5){
							echo'These are our only dogs old enough for that criteria!';
							echo'<tr id= "jax">
						<td> <img class = "image3" src = "images/Jax.jpg" alt = "Pet"> </td>
						<td> <p> Jax is a Golden Shepard and around 10 years old. He is very friendly, but very nervous around other pets. </p>
						<button type = "button" > Interested? </button> </td>
						</tr>';
						echo'<tr id= "rusty">
						<td> <img class = "image3" src = "images/Rusty.jpg" alt = "Pet"> </td>
						<td> <p> Rusty is a Golden Retriever and around 7 years old. He is a very child friendly Male. He gets nervous around other pets though!</p>
						<button type = "button" > Interested? </button> </td>
						</tr>';
						}
						else {
							echo'<tr id = "bentley">
						<td> <img class = "image3" src = "images/Bentley.jpg" alt = "Pet"> </td>
						<td> <p> Bentley is a mix of German Shepard and Labrador and around 5 years old. He is a very child friendly Male, and is great with other cats and dogs! </p>
						<button type = "button" > Interested? </button> </td>
						</tr>';
						echo'<tr id= "khaled">
						<td> <img class = "image3" src = "images/DJ_Khaled.jpg" alt = "Pet"> </td>
						<td> <p> DJ_Khaled is a German Shepard mix and around 2 years old. He is a very child friendly Male, and is great with other cats and dogs! </p>
						<button type = "button" > Interested? </button> </td>
						</tr>';
						}
					}
					else{echo'<tr id= "jax">
					<td> <img class = "image3" src = "images/Jax.jpg" alt = "Pet"> </td>
					<td> <p> Jax is a Golden Shepard and around 10 years old. He is very friendly, but very nervous around other pets. </p>
					<button type = "button" > Interested? </button> </td>
					</tr>';}
					
				}else if($breed == 'golden'){
					echo'<tr id= "rusty">
					<td> <img class = "image3" src = "images/Rusty.jpg" alt = "Pet"> </td>
					<td> <p> Rusty is a Golden Retriever and around 7 years old. He is a very child friendly Male. He gets nervous around other pets though!</p>
					<button type = "button" > Interested? </button> </td>
					</tr>';
				}
			}
			else{echo'<tr id= "bobby">
			<td> <img class = "image3" src = "images/Bobby.jpg" alt = "Pet"> </td>
			<td> <p> Bobby is a pure German Shepard and around 3 years old. She is a very child friendly Female, and is great with other dogs! </p>
			<button type = "button" > Interested? </button> </td>
			</tr>';}
		}
		else {
			echo"Since you've selected cats; ";
			if($gender == 'male'){
				if($breed == 'tabby' ){
					if($along == 'yes'){
						if($age == 3){
							echo'Sorry! None of our cats fit that age!';
						}else{
							echo'<tr id= "destructo">
						<td> <img class = "image3" src = "images/Destructo.jpg" alt = "Pet"> </td>
						<td> <p> Destructo is a Birman mix and around 5 years old. She is a very child friendly cat and is great with other pets! </p>
						<button type = "button" > Interested? </button> </td>
						</tr>';
						echo'<tr id= "ketchup">
						<td> <img class = "image3" src = "images/Ketchup.jpg" alt = "Pet"> </td>
						<td> <p> Ketchup is a silly little guy. He is 5 years old and a Tabby. He is very child friendly, and is great with other cats and dogs! </p>
						<button type = "button" > Interested? </button> </td>
						</tr>';
						echo'<tr id= "faroth">
						<td> <img class = "image3" src = "images/Faroth_the_conqueror.jpg" alt = "Pet"> </td>
						<td> <p> Faroth is a 6 year old Black tabby Cat. He is a very child friendly Male, and is great with other cats! </p>
						<button type = "button" > Interested? </button> </td>
						</tr>';
						}
					}
				}
				else{
					if($along == 'yes'){
						echo'<tr id= "coco">
					<td> <img class = "image3" src = "images/Coco.jpg" alt = "Pet"> </td>
					<td> <p> Coco the cat is 5 years old. He is a very child friendly Male, and is great with other cats. Coco is british shorthair mix. </p>
					<button type = "button" > Interested? </button> </td>
					</tr>';
					}else{echo'<tr id= "lumi">
				<td> <img class = "image3" src = "images/Lumi.jpg" alt = "Pet"> </td>
				<td> <p> Lumi is a Siamese and around 10 years old. He is very friendly, but very mean. </p>
				<button type = "button" > Interested? </button> </td>
				</tr>';}
				}
			}
		}
		echo'</table>';
	}
	echo'<p> 2023, &copy;Adopt-A-Pal, html site coded by Darren Vafi  </p>';
?>