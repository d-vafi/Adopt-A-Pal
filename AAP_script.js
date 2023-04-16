
function webDate() {

	const d = new Date();
	const weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
	const year_months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "Novemeber", "December"];


	let day_of_week = weekday[d.getDay()];
	let month = year_months[d.getMonth()];
	let day_of_month = d.getDate();
	let year = d.getFullYear();
	let hour = d.getHours();
	let minutes = d.getMinutes();
	let seconds = d.getSeconds();
	if (minutes < 10) {
		minutes = "0" + minutes;
	}
	if (seconds < 10) {
		seconds = "0" + seconds;
	}
	var current_date = day_of_week + ", " + month + " " + day_of_month + ", " + year + " " + hour + ":" + minutes + ":" + seconds;
	document.getElementById("date").innerHTML = current_date;
}
window.onload = function() {
	webDate();
	setInterval(webDate, 1000);
}

function ValidateGetAlong() {

	if (document.getElementById("alongYes").checked || document.getElementById("alongNo").checked) {
		return true;
	}

	else {
		alert("Please select whether or not your pet will have to get along with other pets!");
		return false;
	}
}
function ValidateAnimal() {

	if (document.getElementById("dog").checked || document.getElementById("cat").checked) {
		return true;
	}

	else {
		alert("Is the specified pet a dog or a cat? Please select your choice below!");
		return false;
	}
}

//validates the name entered by the user.
function ValidateName() {

	var name = document.getElementById("name");

	var pos = name.value.search(/^[A-Z][a-z]+, ?[A-Z][a-z]+/);

	if (pos != 0) {
		alert("Invalid name entered in the below field. Must be in the format: NAME, NAME");
		return false;
	}
	else {
		return true;
	}

}

//validates the email entered by the user
function ValidateEmail() {

	let input = document.getElementById("email");

	var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

	if (input.value.match(validRegex)) {
		return true;

	} else {

		alert("Invalid email address!");
		return false;
	}

}
function checkCheckboxes() {

	var checkboxes = document.querySelectorAll('input[type="checkbox"]');
	var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked); //returns false if no boxes are checked.

	if (checkedOne == false) {

		alert("Please select the breed of your pet by checking one of the below boxes!");
		return false;
	}
	else {
		return true;
	}
}

function checkMixed() {

	if (document.getElementById("mixed").checked) {
		return true;
	}

	else {
		alert("Please select whether or not your pet is a mixed breed!");
		return false;
	}

}
function breedText() {
	//checks if textarea of the pet Breed is null/empty
	let text = document.getElementById("breedtext").value;


	if ((text != "")) {
		return true;
	}

	else {
		alert("Please enter the breed of your pet!");
		return false;
	}
}
function loadPets(){
	if (!!(ValidateAnimal() & checkCheckboxes() & ValidateGetAlong() )){
		myWindow = window.open("Pets.php");
	}
}
function showPets(){
	/**
	 document.getElementById("bentley").style.display = 'none';
	 * 
	 */
}
