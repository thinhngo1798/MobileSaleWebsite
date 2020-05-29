/* filename: payment.js
 author: Quang Thinh Ngo
 purpose: to create a responsive payment website which can notify uses with input error and other animation.
 created: Tuesday 21/04/2020
 last modified: Wednesday 06/05/2020 
 */


"use strict";

// Global variables
var debug = true;

/*get variables from form and check rules*/
function validate(){
	
	var errMsg = "";								/* stores the error message */
      var result = true;								/* assumes no errors */
      var cardType = document.getElementById("cardType").value; 
      var name =document.getElementById("name").value;
      var cardNumber = document.getElementById("cardNumber").value;
      var expireDate = document.getElementById("expireDate").value;
      var cvv = document.getElementById("cvv").value;
     if (!debug) 
     {
      // Checking card type
      if (cardType == "none") {
            errMsg +="Please select a valid type of credit card.\n";
            result = false;
      }
      // Checking card name
      if (name =="")
      {
            errMsg+="Please enter your name in the card.\n";
            result=false;
      }
      else if (!name.match(/^[a-zA-Z ]+$/)){
            errMsg += "Your name on credit card should be alphabetical and space only.\n";
            result = false; 
      }
      else if (name.length > 40 ){
            errMsg += "Your name must have a maximum of 40 characters.\n";
            result = false; 
      }
    

      // For checking validation of credit card.
      if (cardNumber.length != 15 && cardNumber.length != 16)
      {
            errMsg+="Your credit card number should be exactly 15 or 16 numbers.\n";
            result=false;
      }
      else {
            var tempMsg = checkCreditCardNumber(cardType,cardNumber);
            if (tempMsg != "") {
                  errMsg += tempMsg;
                  result = false;
            }
      }

      // For checking expiration date and CVV.
      if (expireDate =="")
      {
            errMsg+="Please enter your expiration date.\n";
            result=false;
      }
      else if (!expireDate.match(/^[0-9]{2}[/][0-9]{2}$/)){
            errMsg += "Your expiry date is invalid.\n";
            result = false; 
      }
      if (cvv == "")
      {
            errMsg+="Please enter your cvv number.\n";
            result=false;
      }
      else if (isNaN(cvv))
      {
            errMsg+="Your CVV must a number.\n";
            result=false;
      }
      else if (cvv.length != 3 && cvv.length!=4 ){
            errMsg += "Your CVV is invalid. It must be 3 or 4 digits.\n";
            result = false; 
      }
      }// end debug conditional statement.
      if (errMsg != "") {
            alert(errMsg);
      }
	return result;    //if false the information will not be sent to the server
}

/*If rule violated return error message
  This function is to check the credit card number*/
  function checkCreditCardNumber(cardType,cardNumber) {
      var errMsg = "";
      var firstTwoDigit=cardNumber.charAt(0)+ cardNumber.charAt(1);
      switch (cardType){
            case "visa":
            if (cardNumber.length != 16){
                  errMsg="Visa card must have 16 numbers.";
            }      
            else if (firstTwoDigit.charAt(0) != "4"){
                        errMsg = "Visa card must start with a 4. \n";
                  }
            break;
            case "mastercard":
            if (cardNumber.length != 16){
                  errMsg="Mastercard must have 16 numbers.";
            }      
            else if (firstTwoDigit != "51" && firstTwoDigit != "52" && firstTwoDigit != "53" && firstTwoDigit != "54"&& firstTwoDigit != "55"){
                        errMsg = "Mastercard must start with a digits 51 though to 55. \n";
                  }
            break;
            case "americanExpress":
                  if (cardNumber.length != 15){
                        errMsg="American express card must have 15 numbers.";
                  }      
                  else if (firstTwoDigit != "34" && firstTwoDigit != "37") {
                              errMsg = "American express card must starts with 34 or 37. \n";
                        }
                  break;
            default:
                  errMsg = "You have insert a wrong type of credit card.\n";
      }
      return errMsg;
}

//This should be really be calculated securely on the server! 
function calcCost(product, quantity){
      var cost = 0;
      switch (product) {
      case "Iphone11":
            cost =1279 * quantity;
            break;
      case "IphoneX":
            cost =1749 * quantity;
            break;
      case "SamsungGalaxyS20":
            cost =1899 * quantity;
            break; 
      case "SamsungGalaxyNote10":
            cost =999 * quantity;
            break;
      case "SamsungGalaxyA20":
            cost =279 * quantity;
            break;
      
      default:
            cost=0;
      }
	return cost;
}

function getInformation(){
	var cost = 0;
	if(sessionStorage.firstName != undefined){    //if sessionStorage for username is not empty
		//confirmation text
		document.getElementById("confirm_name").textContent = sessionStorage.firstName + " " + sessionStorage.lastName;
		document.getElementById("confirm_email").textContent =sessionStorage.email;
            document.getElementById("confirm_phoneNumber").textContent = sessionStorage.phoneNumber;
            document.getElementById("confirm_preferredContact").textContent = sessionStorage.preferredContact;
            document.getElementById("confirm_streetAddress").textContent = sessionStorage.streetAddress;
		document.getElementById("confirm_suburb").textContent = sessionStorage.suburb;
            document.getElementById("confirm_state").textContent =sessionStorage.state;
            document.getElementById("confirm_postcode").textContent = sessionStorage.postcode;
            if (sessionStorage.streetAddress2 != undefined) {
                  document.getElementById("confirm_streetAddress2").textContent = sessionStorage.streetAddress2;
                  document.getElementById("confirm_suburb2").textContent = sessionStorage.suburb2;
                  document.getElementById("confirm_state2").textContent =sessionStorage.state2;
                  document.getElementById("confirm_postcode2").textContent = sessionStorage.postcode2;
            }
            document.getElementById("confirm_product").textContent = sessionStorage.product;
            document.getElementById("confirm_quantity").textContent = sessionStorage.quantity;
            document.getElementById("confirm_feature").textContent = sessionStorage.color;
            document.getElementById("confirm_additionalFeature").textContent = sessionStorage.ram+sessionStorage.warranty;
            document.getElementById("confirm_comment").textContent = sessionStorage.comment;
            // For total cost which is calculated from previous js file.
            cost = calcCost(sessionStorage.product, sessionStorage.quantity);
            if (cost==0)
            {
                  cost="Your product is invalid";
            }
            document.getElementById("confirm_cost").textContent = cost;

		//fill hidden fields
		document.getElementById("firstName").value = sessionStorage.firstName;

		/*
		Write lastname, age, species, age, food, and quantity from seesionStorage to the hidden inputs 
		*/
		document.getElementById("lastName").value = sessionStorage.lastName;
		document.getElementById("email").value = sessionStorage.email;
		document.getElementById("streetAddress").value = sessionStorage.streetAddress;
		document.getElementById("suburb").value = sessionStorage.suburb;
		document.getElementById("state").value = sessionStorage.state;
		document.getElementById("postcode").value = sessionStorage.postcode;
            document.getElementById("phoneNumber").value = sessionStorage.phoneNumber;
		document.getElementById("preferredContact").value = sessionStorage.preferredContact;
		document.getElementById("product").value = sessionStorage.product;
		document.getElementById("quantity").value = sessionStorage.quantity;
            document.getElementById("feature").value = sessionStorage.color;
            document.getElementById("additionalFeature").value = sessionStorage.ram +sessionStorage.warranty;
            document.getElementById("cost").value = cost;
		document.getElementById("comment").value = sessionStorage.comment;
            if (sessionStorage.streetAddress2 != undefined) {
                  document.getElementById("streetAddress2").value = sessionStorage.streetAddress2;
                  document.getElementById("suburb2").value = sessionStorage.suburb2;
                  document.getElementById("state2").value = sessionStorage.state2;
                  document.getElementById("postcode2").value = sessionStorage.postcode2;
            }
	}

}
function cancelBuying() {
      sessionStorage.clear();
	window.location = "index.php";
}


function init () {
	var bookForm = document.getElementById("buyingForm");
      bookForm.onsubmit = validate;         
      //Determine the existence of second address and show it in the web page. Then send enable the function to send it to mercury server.
      // if (sessionStorage.streetAddress2 != undefined) {
      //       document.getElementById("deliveredAddress_PaymentPage").style.display="block";
      //       //using JQuery to change the status of the input.
      //        $("#deliverredAddressInput").find('input').prop('disabled', false);
                
      // }
      var cancel = document.getElementById("cancelButton");
      cancel.onclick = cancelBuying;
      getInformation();
      enhancement2();

 }

window.onload = init;
