<!--/* filename: fix_order.php
 author: Quang Thinh Ngo
 purpose: to create a payment page for user to input there credit card information. It also shows a summary of customer's details and product's details.
 created: Tuesday 21/04/2020
 last modified: Tuesday 05/05/2020 
 */
-->


<!DOCTYPE html>
 <html lang="en"> 
     <head> 
         <meta charset="utf-8" /> 
         <meta name="description" content=" Fixing Order Page" /> 
         <meta name="keywords" content="Fix_order" /> 
         <meta name="author"   content="Quang Thinh Ngo" />
         <link href="styles/style.css" rel="stylesheet"/> 
         <!-- Viewport set to sclae 1.0 -->
         <meta name="viewport" content="width = device-width, initial-scale=1.0"/> 
         <!-- Reference to external responsive CSS file -->
         <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
         
         
         <!--For enhancement-->
         
          <!-- <script src="http://code.jquery.com/jquery-git2.js"></script>
          -->
         <script src="scripts/fix_order.js"></script>
         <script src="scripts/enhancements2.js"></script>

         <title> Fixing Order Page </title>
      </head> 
     <body> 
         <!--Header and Logo-->
    <?php
         $page = "fix_order";
         include 'header.inc';
    ?>
        <!--Navigation Bar-->
    <?php
        $page = "fix_order";
        include 'menu.inc';
    ?>
         <hr/>
         <!--All the page content is in article. It include main section and aside.-->
         <article>   
              <section id="main">
                  <form id="buyingForm" method="post" action="process_order.php" novalidate="novalidate" >
                        <fieldset id="formFieldset">
                              <legend id="formLegend">Your Information and Product Detail</legend>
                              <h3>Your personal contact: </h3>
                              <?php
                              session_start();
                              foreach($_SESSION['err_msg'] as $value)
                                     {
                                           echo "$value \n";
                                     }
                              if (isset($_SESSION['err_msg'])) {
                              $firstName = $_SESSION['firstName'];
                              $lastName= $_SESSION['lastName']; 
                              $email = $_SESSION['email'];
                              $BillingStreetAddress = $_SESSION['BillingStreetAddress']; 
                              $BillingSuburb = $_SESSION['BillingSuburb'];
                              $BillingState = $_SESSION['BillingState'];
                              $BillingPostcode = $_SESSION['BillingPostcode'];
                              $phoneNumber = $_SESSION['phoneNumber'];
                              $preferredContact = $_SESSION['preferredContact'];
                              $product = $_SESSION['product'];
                              $quantity = $_SESSION['quantity'];
                              $feature = $_SESSION['feature'];
                              $additionalFeature = $_SESSION['additionalFeature'];
                              $comment = $_SESSION['comment'];
                              $cardType = $_SESSION['cardType'];
                              $nameOnCard = $_SESSION['nameOnCard'];
                              $cardNumber = $_SESSION['cardNumber'];
                              $expireDate = $_SESSION['expireDate'];
                              $cvv = $_SESSION['cvv'];
                              $err_msg = $_SESSION['err_msg'];
                              
                               if (isset($_SESSION['firstName']))
                               {
                                     $firstNameFlag = true;
                                     $lastNameFlag = true;
                                     $emailFlag = true;
                                     $phoneFlag = true;
                                     $contactFlag = true;
                                     $streetFlag = true;
                                     $suburbFlag = true;
                                     $stateFlag = true;
                                     $postcodeFlag = true;
                                     $productFlag = true;
                                     $quantityFlag = true;
                                     $featureFlag = true;
                                     $additionalFlag = true;

                                     $nameFlagReturn = true;
                                     $emailFlagReturn = true;
                                     $phoneFlagReturn = true;
                                     $contactFlagReturn = true;
                                     $streetFlagReturn = true;
                                     $suburbFlagReturn = true;
                                     $stateFlagReturn = true;
                                     $postcodeFlagReturn = true;
                                     $productFlagReturn = true;
                                     $quantityFlagReturn = true;
                                     $featureFlagReturn = true;
                                     $additionalFlagReturn = true;

                                     foreach($err_msg as $value)
                                     {
                                          // $errorOn=false;
                                           if ( $firstNameFlag) {
                                           if (($value == "First name cannot be empty" )||  ($value == "First name can only contain alphabetical characters") || ($value == "First name can be maximum of 25 characters") )
                                           {
                                                 echo "<p class='error'> $value </p>";
                                                 echo "<label for='firstName'>First Name: </label>";
                                                 echo "<input type='text' id='firstName' name='firstName' placeholder='Your name..'
                                                 maxlength='25' pattern='[a-zA-Z]+' required='required'/>";
                                                 $firstNameFlag = false;
                                                 continue;
                                           }
                                           else
                                           {
                                                echo "<input type='hidden' name='firstName' id='firstName' value='$firstName' />";
                                           }
                                          }
                                          if ( $lastNameFlag) {
                                           if (($value == "Last name cannot be empty" )||  ($value == "Last name can only contain alphabetical characters") || ($value == "Last name can be maximum of 25 characters") )
                                           {
                                                echo "<p class='error'> $value </p>";
                                                echo "<label for='lastName'>Last Name: </label>";
                                                echo "<input type='text' id='lastName' name='lastName' placeholder='Your name..'
                                                maxlength='25' pattern='[a-zA-Z]+' required='required'/>";
                                                $lastNameFlag = false;
                                                continue;
                                           }
                                           else
                                           {
                                                echo "<input type='hidden' name='lastName' id='lastName' value='$lastName' />";
                                           }

                                           }
                                           if ($firstNameFlag && $lastNameFlag)
                                           {
                                                 if ($nameFlagReturn){
                                                      echo "<p>Your Name: $firstName $lastName</p>";
                                                      $nameFlagReturn = false;
                                                 }
                                           }
                                         
                                    
                                          
                                           
                                    if ( $emailFlag) {
                                           if (($value == "Email cannot be empty" )||  ($value == "Invalid email format"))
                                           {
                                                 echo "<p class='error'> $value </p>";
                                                 echo "<label for='email'>Email: </label>";
                                                 echo "<input type='text' id='email' name='email' placeholder='Your email..'
                                                 required='required'/>";
                                                 $emailFlag = false;
                                                 continue;
                                           }                                           
                                           else 
                                           {
                                                 if ($emailFlagReturn)
                                                 {
                                                echo "<p>Your email: $email </p>";
                                                $emailFlagReturn = false;       
                                                
                                                echo "<input type='hidden' name='email' id='email' value='$email' />";
                                                 }
                                           }
                                    }
                                    if ( $streetFlag) {
                                           if (($value == "Street Address cannot be empty" )||  ($value == "Street address can be maximum of 40 characters"))
                                           {
                                                 echo "<p class='error'> $value </p>";
                                                 echo "<label for='BillingStreetAddress'>Street address: </label>";
                                                 echo "<input type='text' id='BillingStreetAddress' name='BillingStreetAddress' placeholder='Your street address..'
                                                 required='required'/>";
                                                 $streetFlag = false;
                                                 continue;
                                           }                                           
                                           else 
                                           {
                                                 if ($streetFlagReturn)
                                                 {
                                                echo "<p>Your street address: $BillingStreetAddress </p>";
                                                $streetFlagReturn = false;
                                                 
                                                 echo "<input type='hidden' name='BillingStreetAddress' id='BillingStreetAddress' value='$BillingStreetAddress' />";
                                                 }
                                           }
                                          }
                                          if ( $suburbFlag) {
                                           if (($value == "Suburb cannot be empty" )||  ($value == "Suburb can be maximum of 20 characters"))
                                           {
                                                 echo "<p class='error'> $value </p>";
                                                 echo "<label for='BillingSuburb'>Suburb address: </label>";
                                                 echo "<input type='text' id='BillingSuburb' name='BillingSuburb' placeholder='Your suburb..'
                                                 maxlength='20'
                                                 required='required'/>";
                                                 $suburbFlag = false;
                                                 continue;
                                           }                                           
                                           else 
                                           {
                                                 if ($suburbFlag)
                                                 {
                                                echo "<p>Your suburb address: $BillingSuburb </p>";
                                                $suburbFlag = false;
                                                 }
                                                 echo "<input type='hidden' name='BillingSuburb' id='BillingSuburb' value='$BillingSuburb' />";
                                           }
                                          }
                                          if ( $stateFlag) {
                                           if (($value == "State cannot be empty" )||  ($value == "State is invalid"))
                                           {
                                                 echo "<p class='error'> $value </p>";
                                                 echo "<label for='BillingState'>State: </label>";
                                                 echo "<select id='BillingState' name='BillingState' >
                                                 <option value='VIC'>VIC</option>
                                                 <option value='NSW'>NSW</option>
                                                 <option value='QLD'>QLD</option>
                                                 <option value='NT'>NT</option>
                                                 <option value='WA'>WA</option>
                                                 <option value='SA'>SA</option>
                                                 <option value='TAS'>TAS</option>
                                                 <option value='ACT'>ACT</option>
                                             </select>";
                                                 $stateFlag = false;
                                                 continue;
                                           }                                           
                                           else 
                                           {
                                                 if ($stateFlag)
                                                 {
                                                echo "<p>Your state address: $BillingState </p>";
                                                $stateFlag = false;
                                                 }
                                                 echo "<input type='hidden' name='BillingState' id='BillingState' value='$BillingState' />";
                                           }
                                          }
                                          if ( $postcodeFlag) {
                                           if (($value == "Postcode cannot be empty" )||  ($value == "Postcode must be exactly 4 digits"
                                           || substr($value,0,12) == "The postcode" ))
                                           {
                                                 echo "<p class='error'> $value </p>";
                                                 echo "<label for='BillingPostcode'>Postcode address: </label>";
                                                 echo "<input type='text' id='BillingPostcode' name='BillingPostcode' placeholder='Your postcode..'
                                                 pattern='[0-9]{4}' maxlength='4'/>";
                                                 $postcodeFlag = false;
                                                 continue;
                                           }                                           
                                           else 
                                           {
                                                 if ($postcodeFlag)
                                                 {
                                                echo "<p>Your postcode address: $BillingPostcode </p>";
                                                $postcodeFlag = false;
                                                 }
                                                 echo "<input type='hidden' name='BillingPostcode' id='BillingPostcode' value='$BillingPostcode' />";
                                           }
                                          }
                                          if ( $phoneFlag) {
                                           if (($value == "Phone number cannot be empty" ) ||  ($value == "Your phone number is in wrong format. It must be 04XX XXX XXX or 04XXXXXXXX") || ($value=="Phone number must be exactly 10 digits and 2 spaces"))
                                           {
                                                 echo "<p class='error'> $value </p>";
                                                 echo "<label for='phoneNumber'>Phone number: </label>";
                                                 echo "<input type='text' id='phoneNumber' name='phoneNumber' placeholder='Your phone number..'
                                                 maxlength='12'
                                                 pattern='[0-9]{10}'
                                                 required='required'/>";
                                                 $phoneFlag = false;
                                                 continue;
                                           }                                           
                                           else 
                                           {
                                                 if ($phoneFlag)
                                                 {
                                                echo "<p>Your phone number: $phoneNumber </p>";
                                                $phoneFlag = false;
                                                 }
                                                 echo "<input type='hidden' name='phoneNumber' id='phoneNumber' value='$phoneNumber' />";
                                           }
                                          }
                                          if ( $contactFlag) {
                                           if (($value == "Preferred contact cannot be empty" )||  ($value == "Preferred contact is invalid"))
                                           {
                                                 echo "<p class='error'> $value </p>";
                                                 echo " <legend>Prederred Contact:</legend>";
                                                 echo "<input type='radio' id='emailOption' name='preferredContant' value='email' checked='checked' />
                                                 <label for='emailOption'>Email</label>
                                                 <input type='radio' id='postOption' name='preferredContant' value='post' />
                                                 <label for='postOption'>Post</label>
                                                 <input type='radio' id='phoneOption' name='preferredContant' value='phone' />
                                                 <label for='phoneOption'>Phone</label>";
                                                 $contactFlag = false;
                                                 continue;
                                           }                                           
                                           else 
                                           {
                                                 if ($contactFlag)
                                                 {
                                                echo "<p>Your preferred contact: $preferredContact </p>";
                                                $contactFlag = false;
                                                 }
                                                 echo "<input type='hidden' name='preferredContact' id='preferredContact' value='$preferredContact' />";
                                           }
                                          }
                                          if ( $productFlag) {
                                           if (($value == "Product cannot be empty" ) ||  ($value == "Product is invalid"))
                                           {
                                                 echo "<p class='error'> $value </p>";
                                                 echo "<label for='product'>Product: </label>";
                                                 echo "<select id='product' name='product' >
                                                 <option value='Iphone11'>VIC</option>
                                                 <option value='IphoneX'>NSW</option>
                                                 <option value='SamsungGalaxyS20'>QLD</option>
                                                 <option value='SamsungGalaxyNote10'>NT</option>
                                                 <option value='SamsungGalaxyA20'>WA</option>
                                                </select>";
                                                 $productFlag = false;
                                                 continue;
                                           }                                           
                                           else 
                                           {
                                                 if ($productFlag)
                                                 {
                                                echo "<p>Your product: $product </p>";
                                                $productFlag = false;
                                                 }
                                                 echo "<input type='hidden' name='product' id='product' value='$product' />";
                                           }
                                          }
                                          if ( $quantityFlag) {
                                           if (($value == "Quantity cannot be empty" ) ||  ($value == "Your quantity must be a number") || ($value == "Quantity cannot be negative or 0."))
                                           {
                                                 echo "<p class='error'> $value </p>";
                                                 echo "<label for='quantity'>Quantity: </label>";
                                                 echo "<input type='text' id='quantity' name='quantity' placeholder='Your quantity..'
                                                 required='required' 
                                                pattern='[0-9]+'
                                                maxlength='3' size='3'/>";
                                                 $quantityFlag = false;
                                                 continue;
                                           }                                           
                                           else 
                                           {
                                                 if ($quantityFlag)
                                                 {
                                                echo "<p>Your quantity: $quantity </p>";
                                                $quantityFlag = false;
                                                 }
                                                 echo "<input type='hidden' name='quantity' id='quantity' value='$quantity' />";
                                           }
                                          }
                                          if ( $featureFlag) {
                                           if ($value == "Feature cannot be empty" )
                                           {
                                                 echo "<p class='error'> $value </p>";
                                                 echo "<legend>Product Features: </legend>
                                                 <label for='black'><input type='checkbox' name='features[]' id='black' value='black' /> Colour: Black</label> 
                                                 <label for='white'><input type='checkbox' name='features[]' value='white' id='white'>Colour: White</label>
                                                 <label for='green'><input type='checkbox' name='features[]' value='green' id='green'/>Colour: Green</label>";
                                                 $featureFlag = false;
                                                 continue;
                                           }                                           
                                           else 
                                           {
                                                 if ($featureFlag)
                                                 {
                                                echo "<p>Your features: $feature </p>";
                                                $featureFlag = false;
                                                 }
                                                 echo "<input type='hidden' name='feature' id='feature' value='$feature' />";
                                           }
                                          }
                                          if ( $additionalFlag) {
                                           if ($value == "Additional feature cannot be empty" )
                                           {
                                                 echo "<p class='error'> $value </p>";
                                                 echo "<legend>Product Features: </legend>
                                                 <label for='black'><input type='checkbox' name='addFeatures[]' id='Ram3G' value='Ram3G' /> Ram 3GB</label> 
                                                 <label for='white'><input type='checkbox' name='addFeatures[]' value='Ram4G' id='Ram4G'>Ram 4GB</label>
                                                 <label for='1YWarranty'><input type='checkbox' name='addFeatures[]' id='1YWarranty' value='1YWarranty' />Wanrranty: 1Y</label>
                                                 <label for='2YWarranty'><input type='checkbox' name='addFeatures[]' value='2YWarranty' id='2YWarranty' />Warranty: 2Y</label>";
                                                 $additionalFlag = false;
                                                 continue;
                                           }                                           
                                           else 
                                           {
                                                 if ($additionalFlag)
                                                 {
                                                echo "<p>Your additional feature: $additionalFeature </p>";
                                                $additionalFlag = false;
                                                 }
                                                 echo "<input type='hidden' name='additionalFeature' id='additionalFeature' value='$additionalFeature' />";
                                           }
                                          }
                                     }
                                     echo "<p>Comment: $comment </p>";
                                     echo "<input type='hidden' name='comment' id='comment' value='$comment' />";
                                     // Display payment error:
                                     foreach( $err_msg as $value) {
                                     if (($value == "Type of card cannot be empty" )||  ($value == "Type of card is invalid") || ($value=="Name on card cannot be empty") || ($value=="Name on card can only contain alphabetical characters and spaces") || ($value=="First name can be maximum of 40 characters") || ($value=="Card number cannot be empty") || ($value=="Card number must be 15 or 16 digits") || (substr($value,0,4)=="Visa")|| (substr($value,0,10)=="Mastercard")|| (substr($value,0,8)=="American")||($value=="You have insert a wrong type of credit card.")|| ($value=="Expire date cannot be empty")|| ($value=="Expire date is in wrong format")|| ($value=="CVV cannot be empty")|| ($value=="CVV cannot be empty"))
                                     {
                                           echo "<p class='error'> $value </p>";
                                          
                                     }                                           
                                    }
                              }
                               }
                               else
                               {
                                     // The purpose of this is that fix_order.php will not be accessed directly by the url.
                                    header("Location:enquire.php");
                               }
                              ?>
                              
                             
                              <!-- For delivery address
                              <div id="deliverredAddressInput">
                              <input type="hidden" name="DeliveryStreetAddress" id="streetAddress2" disabled />
                              <input type="hidden" name="DeliverySuburb2" id="suburb2" disabled/>
                              <input type="hidden" name="DeliveryState2" id="state2" disabled />   
                              <input type="hidden" name="DeliveryPostcode2" id="postcode2" disabled/>
                             </div> -->

                              <h3>Payment Details: </h3>
                              <p>
                                <label for="cardType">Credit Card Type: </label>
                                <select name="cardType" id="cardType">
                                    <option value="none">Please select</option>
                                    <option value="visa">Visa</option>
                                    <option value="mastercard">Mastercard</option>
                                    <option value="americanExpress">American Express</option>
                                </select>
                            </p>
                            <p><label for="name">Name on Credit Card:</label>
                                <input type="text" id="name" name="name" required="required" maxlength="40"
                                pattern="[a-zA-Z ]+" />
                            </p>
                            <p><label for="cardNumber">Credit Card Number: </label>
                                <input type="text" id="cardNumber" name="cardNumber" required="required"
                                maxlength="16" 
                                pattern ="\d{15,16}"/>
                            </p>
                            <p><label for="expireDate">Credit card expiry date: </label>
                                <input type="text" id="expireDate" name="expireDate" 
                                placeholder="mm-yy"
                                required="required"
                                pattern = "^[0-9]{2}[/][0-9]{2}$" />
                            </p>
                            <p><label for="cvv">Card verification value (CVV): </label>
                                <input type="text" id="cvv" name="cvv"
                                required="required" 
                                maxlength= "4"
                                pattern ="\d{3,4}"/>
                            </p>
                            <input type="submit" value="Check Out" />
                          <button type="button" id="cancelButton" >Cancel Order</button>
                      </fieldset>
                  
              </form>
           
             </section>
             <aside id="aside">
                    <div id ="timing">To make your payment secured, this window will be close in <br/> <span id="time">05:00</span> <span id="unit" >minutes!</span></div>
              </aside>
         </article>
         <?php
         include 'footer.inc';
         ?>
     </body>
