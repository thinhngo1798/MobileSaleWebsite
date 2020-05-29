<!--/* filename: payment.php
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
         <meta name="description" content=" Payment Page" /> 
         <meta name="keywords" content=" Payment" /> 
         <meta name="author"   content="Quang Thinh Ngo" />
         <link href="styles/style.css" rel="stylesheet"/> 
         <!-- Viewport set to sclae 1.0 -->
         <meta name="viewport" content="width = device-width, initial-scale=1.0"/> 
         <!-- Reference to external responsive CSS file -->
         <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
         
         
         <!--For enhancement-->
         
         <!-- <script src="http://code.jquery.com/jquery-git2.js"></script> -->
         
         <script src="scripts/payment.js"></script>
         <script src="scripts/enhancements2.js"></script>
         <title> Payment Page </title>
      </head> 
     <body> 
         <!--Header and Logo-->
    <?php
         $page = "payment";
         include 'header.inc';
    ?>
        <!--Navigation Bar-->
    <?php
        $page = "payment";
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
                              <p>Your Name: <span id="confirm_name"></span></p>
                              <p>Email: <span id="confirm_email"></span></p>
                              <p>Phone Number: <span id="confirm_phoneNumber"></span></p>
                              <p>Preferred Contact: <span  id="confirm_preferredContact"></span></p>
                              <h3>Billing Address: </h3>
                              <p>Street Address: <span  id="confirm_streetAddress"></span></p>
                              <p>Suburb: <span  id="confirm_suburb"></span></p>
                              <p>State: <span  id="confirm_state"></span></p>
                              <p>Postcode: <span  id="confirm_postcode"></span></p>
                              <div id="deliveredAddress_PaymentPage">
                                <h3>Delivery Address: </h3>
                                <p>Street Address: <span  id="confirm_streetAddress2"></span></p>
                                <p>Suburb: <span  id="confirm_suburb2"></span></p>
                                <p>State: <span  id="confirm_state2"></span></p>
                                <p>Postcode: <span  id="confirm_postcode2"></span></p>
                              </div>
                              <h3>Product Detail: </h3>
                              <p>Product: <span  id="confirm_product"></span></p>
                              <p>Quantity: <span  id="confirm_quantity"></span></p>
                              <p>Product Features: <span  id="confirm_feature"></span></p>
                              <p>Additional Features: <span  id="confirm_additionalFeature"></span></p>
                              <p>Comment: <span  id="confirm_comment"></span></p>
                              <p>Total Cost: $<span  id="confirm_cost"></span></p>
                              <input type="hidden" name="firstName" id="firstName" />
                              <!--Create the other hidden input here  -->
                              <input type="hidden" name="lastName" id="lastName" />
                              <input type="hidden" name="email" id="email" />
                              <input type="hidden" name="BillingStreetAddress" id="streetAddress" />
                              <input type="hidden" name="BillingSuburb" id="suburb" />
                              <input type="hidden" name="BillingState" id="state" />   
                              <input type="hidden" name="BillingPostcode" id="postcode" />
                              <input type="hidden" name="phoneNumber" id="phoneNumber" />
                              <input type="hidden" name="preferredContact" id="preferredContact" />
                              <input type="hidden" name="product" id="product" />
                              <input type="hidden" name="quantity" id="quantity" />
                              <input type="hidden" name="feature" id="feature" />
                              <input type="hidden" name="additionalFeature" id="additionalFeature" />
                              <input type="hidden" name="comment" id="comment" />
                              <input type="hidden" name="cost" id="cost" />
                             
                              <!--For delivery address-->
                              <div id="deliverredAddressInput">
                              <input type="hidden" name="DeliveryStreetAddress" id="streetAddress2" disabled />
                              <input type="hidden" name="DeliverySuburb2" id="suburb2" disabled/>
                              <input type="hidden" name="DeliveryState2" id="state2" disabled />   
                              <input type="hidden" name="DeliveryPostcode2" id="postcode2" disabled/>
                             </div>
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
