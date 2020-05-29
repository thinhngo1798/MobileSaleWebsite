/* filename: part2.js
 author: Quang Thinh Ngo
 purpose: to create a responsive enquiry website which can notify uses with input error and store information/data into client side's storage.
 created: Tuesday 20/04/2020
 last modified: Wednesday 06/05/2020 
 */


"use strict";
// Global variables
var debug = true;

/*get variables from form and check rules*/
function validate() {
      //initialize local variables
      var errMsg ="";         //stores the error message
      var result = true;      // assume no errors

      //get variables from form and check rules here
      
      var firstName = document.getElementById("fname").value;
	var lastName = document.getElementById("lname").value;
      var email = document.getElementById("email").value;
      var phoneNumber = document.getElementById("phoneNumber").value;
      var streetAddress = document.getElementById("streetAddress").value;
      var suburb = document.getElementById("suburb").value;
      var state = document.getElementById("state").value;
      var postcode = document.getElementById("postcode").value;
      var product = document.getElementById("product").value;
      var quantity = document.getElementById("quantity").value;
      //For radio input
      var preferredContact = getPreferredContact();

      //For tickbox input:
      var black = document.getElementById("black").checked;
      var white = document.getElementById("white").checked;
      var green = document.getElementById("green").checked;
      var Ram3G= document.getElementById("Ram3G").checked;
      var Ram4G = document.getElementById("Ram4G").checked;
      var is1YWarranty = document.getElementById("1YWarranty").checked;
      var is2YWarranty = document.getElementById("2YWarranty").checked;
      var comment = document.getElementById("subject").value;
     
      // For the second address ( deliverred address)
      var deliverredAddress = document.getElementById("deliveredAddress");

      // Inactivate the validation by javascript 
      if (!debug)
      {
      // Checking first name
	if (firstName=="") {  //  student id format validation is omitted
		errMsg += "Please enter your first name.\n";
		result=false;
      }
      else if (!firstName.match(/^[a-zA-Z]+$/)){
            errMsg += "Your first name must be alphabetical only.\n";
            result = false; 
      }
      else if (firstName.length > 25)
      {
            errMsg+="Your first name must have maximum of 25 characters.\n";
            result=false;
      }
      //Checking last name
      if (lastName=="") {  //  student id format validation is omitted
		errMsg += "Please enter your last name.\n";
		result=false;
      }
      else if (!firstName.match(/^[a-zA-Z]+$/)){
            errMsg += "Your last name must be alphabetical only.\n";
            result = false; 
      }
      else if (lastName.length > 25)
      {
            errMsg+="Your last name must have maximum of 25 characters.\n";
            result=false;
      }
      //Checking email
      if (email=="") {  //  student id format validation is omitted
		errMsg += "Please enter your email.\n";
		result=false;
      }
      else {
            var pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/;
            if (!pattern.test(email)){
            errMsg += "Your email input is in the incorrect format.\n";
            result = false; 
            }
      }
      //Check street address
      if (streetAddress=="") {  //  student id format validation is omitted
            errMsg += "Please enter your street address.\n";
            result=false;
      }
      else if (streetAddress.length > 40)
      {
            errMsg+="Your street address must have maximum of 40 characters.\n";
      }
      //Check suburb
      if (suburb=="") {  //  student id format validation is omitted
            errMsg += "Please enter your suburb address.\n";
            result = false;
      }
      else if (suburb.length > 20)
      {
            errMsg += "Your suburb must have maximum of 20 characters.\n";
            result = false;
      }
      //Checking postcode
      if (postcode=="") {  //  student id format validation is omitted
		errMsg += "Please enter your postcode.\n";
		result=false;
      }
      else if (isNaN(postcode)){
            errMsg += "Your postcode must be a number\n";
            result = false; 
      }
      else if (!postcode.match(/\d\d\d\d$/)){
            errMsg += "Your postcode must be exactly 4 numbers.\n";
            result = false; 
      }
      else {
            if (state =="") {
                  errMsg += "You must select the state";
                  result= false;
            }
            else
            {
                  var tempMsg = checkPostcode(state,postcode);
                  if (tempMsg != "") {
                        errMsg += tempMsg;
                        result = false;
                  }
            }
      }
      //Checking phone number
      var phoneRE = /^\d\d\d\d \d\d\d \d\d\d$/; 
      if (phoneNumber=="") {  //  student id format validation is omitted
		errMsg += "Please enter your phone number.\n";
		result=false;
      }
      else if (!phoneRE.test(phoneNumber)) {
            errMsg += "Your phone number is in wrong format. It must be 04XX XXX XXX\n";
            result = false; 
      }

      // Check preferred contact
      if (preferredContact=="") {  //  student id format validation is omitted
		errMsg += "Please enter your preferred contact.\n";
		result=false;
      }

      // Check quantity
      if (quantity=="") {  //  student id format validation is omitted
		errMsg += "Please enter your product quantity.\n";
		result=false;
      }
      else if (isNaN(quantity)){
            errMsg += "Your quantity must be a number\n";
            result = false; 
      }
      else if (quantity <= 0 ){
            errMsg += "Your quantity must be a positive number\n";
            result = false; 
      }
      // Check product
      if (product == "")
      {
            errMsg +="At least a product must be selected";
            result = false;
      }
      if (black!= true && white !=true && green != true )
      {
            errMsg+="Please select one color feature.\n";
            result=false;
      }
      if (Ram3G!= true && Ram4G !=true && is1YWarranty != true && is2YWarranty != true )
      {
            errMsg+="Please select one additional feature.\n";
            result=false;
      }
      }// end if debug condition statement.

      if (errMsg != "") {
            alert(errMsg);
      }
      if (result) {
            //All the data is stored to sessionStorage
            storeInformation(firstName,lastName,email,streetAddress,suburb,state,postcode,phoneNumber,preferredContact,product,quantity,comment,black,white,green,Ram3G,Ram4G,is1YWarranty,is2YWarranty);
            //If users tick the box, the additional address will be stored
            if (deliverredAddress.checked) {
                  storeDeliverredAddress();
            }
      }

      return result;

}

/*If rule violated return error message
  This function is to check the postcode*/
function checkPostcode(state,postcode) {
      var errMsg = "";
      var firstDigit=postcode.charAt(0);
      switch (state){
            case "VIC":
                  if (firstDigit != 3 && firstDigit !=8){
                        errMsg = "The postcode of VIC state should start with 3 or 8. \n";
                  }
                  break;
            case "NSW":
                  if (firstDigit != 1 && firstDigit !=2){
                        errMsg = "The postcode of NSW state should start with 1 or 2. \n";
                  }
                  break;
            case "QLD":
            if (firstDigit != 4 && firstDigit !=9){
                  errMsg = "The postcode of QLD state should start with 4 or 9. \n";
            }
            break;
            case "ACT":
            case "NT":
                  if (firstDigit != 0 ){
                  errMsg = "The postcode of " + state + " state should start with 0. \n";
                  }
                  break;
            case "WA":
                  if (firstDigit !=6 ){
                  errMsg = "The postcode of " + state + " state should start with 6. \n";
                  }
                  break;
            case "SA":
                  if (firstDigit !=5 ){
                  errMsg = "The postcode of " + state + " state should start with 5. \n";
                  }
                  break;
                  
            case "TAS":
                  if (firstDigit !=7 ){
                  errMsg = "The postcode of " + state + " state should start with 7. \n";
                  }
                  break;
            default:
                  errMsg = "You have insert a wrong state.\n";
      }
      return errMsg;
}

/*return the species selected contact option as a string*/
function getPreferredContact() {
      //initialise variable in case does not get reinitialised properly
      var preferredContact = "Unknown";

      //get an array of all input elements inside the fieldset element with id="species"
      var preferredContactArray = document.getElementById("preferredContact").getElementsByTagName("input");

      for (var i = 0 ;i<preferredContactArray.length ;i++) {
            if (preferredContactArray[i].checked)  //test if radio button is selected
            preferredContact=preferredContactArray[i].value;  //assign the value attribute
      }
      return preferredContact;

}


function storeInformation(firstName,lastName,email,streetAddress,suburb,state,postcode,phoneNumber,preferredContact,product,quantity,comment,black,white,green,Ram3G,Ram4G,is1YWarranty,is2YWarranty) {
      //get values and assign them to a sessionStorage attribute.
      //we use the same name for the attribute and the element id to avoid confusion
      var color  ="";
      if (black) color+=" black ";
      if (white) color += " white ";
      if (green) color += " green ";
      var ram  ="";
      if (Ram3G) ram += " 3G Ram ";
      if (Ram4G) ram += " 4G Ram ";
      var warranty  ="";
      if (is1YWarranty) warranty += " 1 Year Warranty ";
      if (is2YWarranty) warranty += " 2 Year Warranty ";
      sessionStorage.color=color;
      sessionStorage.ram=ram;
      sessionStorage.warranty = warranty;
      sessionStorage.firstName = firstName;
      sessionStorage.lastName = lastName;
      sessionStorage.email = email;
      sessionStorage.streetAddress = streetAddress;
      sessionStorage.suburb = suburb;
      sessionStorage.state = state;
      sessionStorage.postcode = postcode;
      sessionStorage.phoneNumber = phoneNumber;
      sessionStorage.preferredContact = preferredContact;
      sessionStorage.product = product;
      sessionStorage.quantity = quantity;
      sessionStorage.comment = comment;
}


function init() {
      var EnquiryForm =document.getElementById("EnquiryForm");
      EnquiryForm.onsubmit = validate;
      enhancements1();

}

window.onload = init;  