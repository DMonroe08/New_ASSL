
//Strarts carousel when page is loaded and auto changes picture every 4 seconds
$(document).ready(function(){
	$('.carousel').carousel(
		interval: 4000
	);
});

var email = document.getElementById("newsEmail");
var mess = "Please Enter A Valid Email";

email.addEventListenter("submit", function (event){
	if (email.validity.valid) {
	    
	    error.innerHTML = "Please fill out this field"; // Reset the content of the message
	    error.className = "error"; // Reset the visual state of the message
	  }
})

