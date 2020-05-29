
/* filename: part2.js
 author: Quang Thinh Ngo
 purpose: to create a responsive enquiry website which can notify uses with input error and store information/data into client side's storage.
 created: Tuesday 21/04/2020
 last modified: Tuesday 05/05/2020 
 */

"use strict";

// The new delivery address is stored to sessionStorage by the following codes.
function storeDeliverredAddress() {
     
      var deliverredAddress = document.getElementById("deliveredAddress");    
      if (deliverredAddress.checked) {
            var streetAddress2 = document.getElementById("streetAddress2").value;
            var suburb2 = document.getElementById("suburb2").value;
      
            //For dropbox type
            var stateTemp2 = document.getElementById("state2");
            var state2 = stateTemp2.options[stateTemp2.selectedIndex].value;
            var postcode2 = document.getElementById("postcode2").value;

      }
      sessionStorage.streetAddress2 = streetAddress2;
      sessionStorage.suburb2 = suburb2;
      sessionStorage.state2 = state2;
      sessionStorage.postcode2 = postcode2;
}
// Showing the second address (delivery address) when the user tick the box.
function secondAddress() {

      var checked = document.getElementById("deliveredAddress").checked;
      if (checked) {
         document.getElementById("secondAddress").style.display="block";
      //   document.getElementById('deliver_firstname').value = ''; 
	} else {
            document.getElementById("secondAddress").style.display="none";
	// 	document.getElementById('deliver_firstname').value = document.getElementById('firstname').value; 
	}
}
// StartTimer function use 
function startTimer(duration, display) {
      var timer = duration, minutes, seconds;
      // SetInterval make the following function repeated every 1000 ms = 1s.
      setInterval(function () {
          minutes = parseInt(timer / 60, 10);
          seconds = parseInt(timer % 60, 10);
            // for displying minute and second ( when they have 1 digit, we show a 0 in the front.
          minutes = minutes < 10 ? "0" + minutes : minutes;
          seconds = seconds < 10 ? "0" + seconds : seconds;
  
          display.textContent = minutes + ":" + seconds;
  
          if (--timer < 0) {
              timer = duration;
              // Whe the time runs out, it delete all the information and heading back to index.php page.
              cancelBuying();
          }
      }, 1000);
  }

// Create a timer for payment page.
function enhancement2() {
      // Creating a timer
      var limitedTime = 60 * 5,
      display = document.querySelector('#time');
      startTimer(limitedTime, display);
}


// For display some input space so users can input one more address
function enhancements1() {
      // Taking the object from the tickbox of different addresses.
      var deliverredAddress = document.getElementById("deliveredAddress");
      deliverredAddress.onclick = secondAddress;

}