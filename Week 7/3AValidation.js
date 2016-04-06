// Assignment 3A javascript file
// Need to finish Date, Time , and Address validation
// Don't forget exercises, or the project forms!

// Validates username and password for login form
function validateLogin(){
	var name = document.forms["loginForm"]["user"].value;
	var pass = document.forms["loginForm"]["pw"].value;

	if(name == null || name == ""){
		alert("Username is required! Please enter a username.");
		return false;
	}

	else if(pass != "secret"){
		alert("Password failed to validate! Please try again.");
		return false;
	}
	
	alert("Clever girl...");
	return false;
}	// End validateLogin

// Validates input placed into the email field of the info form
function validateEmail(){
	var email = document.forms["infoForm"]["email"].value;
	var atPos = email.indexOf("@");
	var dotPos = email.indexOf(".");
	
	if(atPos < 1 || dotPos < atPos+2 || dotPos+2 > email.length){
		alert("Email address is invalid. Please try again.");
		return false;
	}
	
	alert("Email validation successful!");
	return true;
}	// End validateEmail

//  Validates input placed into the phone# field of the info form
function validatePhone(){
	var pNum = document.forms["infoForm"]["phone"].value.search(/^\d{3}-\d{4}$/);
	
	if(pNum == 0){
		alert("Phone # validation successful!");
		return true;
	}
	else{
		alert("Phone# is invalid. Please try again.");
		return false;
	}
}	// End validatePhone

// Checks for proper character usage in the address field of the info form
function validateAddress(){
	var addr = document.forms["infoForm"]["address"].value;
	
}	// End validateAddress

function validateDate(){
	var month = document.getElementById("month").search(/^\d{1,2}/);
	var day = document.getElementById("day").search(/^\d{1,2}/);
	var year = document.getElementById("year").search(/^\d{4}/);
	
	if(month == 0 || day == 0 || year == 0){
		alert("Date validation successful!");
		return true;
	}
	else{
		if(month != 0) alert("Month is invalid. Please enter a valid month.");
		if(day != 0) alert("Day is invalid. Please enter a valid day.");
		if(year != 0) alert("Year is invalid. Please enter a valid year.");
		
		return false;
	}
}	// End validateDate

function validateTime(){
	var hour = document.forms["infoForms"]["hour"].value.search(/^\d{1,2}/);
	var minute = document.forms["infoForms"]["minute"].value.search(/^\d{1,2}/);
	var second = document.forms["infoForms"]["second"].value.search(/^\d{1,2}/); 
	
	if(hour == 0 || minute == 0 || second == 0){
		alert("Time validation successful!");
		return true;
	}
	else{
		return false;
	}
}	// End validateTime

// Info validation functions rolled into one for easy function call
function validateInfo(){
	validateEmail();
	validatePhone();
	validateAddress();
	validateDate();
	validateTime();
	
	return false;
}	// End validateInfo

