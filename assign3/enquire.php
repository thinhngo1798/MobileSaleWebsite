<!-- filename: enquire.php
 author: Quang Thinh Ngo
 created: Tuesday 18/03/2020
 last modified: Tuesday 07/04/2020-->
 
 <!DOCTYPE html>
<html lang="en"> 
    <head> 
        <meta charset="utf-8" /> 
        <meta name="description" content=" Inquiry Page" /> 
        <meta name="keywords" content=" InquiryPage" /> 
        <meta name="author"   content="Quang Thinh Ngo" />
        <link href="styles/style.css" rel="stylesheet"/>
        <!-- Viewport set to sclae 1.0 -->
        <meta name="viewport" content="width = device-width, initial-scale=1.0"/> 
        <!-- Reference to external responsive CSS file -->
        <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 600px)"/> 
        
        <script src="scripts/part2.js"></script>
        <script src="scripts/enhancements2.js"></script>
        <title> Enquiry Page </title>
     </head> 
     <body> 
         <!--Header and Logo-->
    <?php
         $page = "enquiry";
         include 'header.inc';
    ?>
        <!--Navigation Bar-->
    <?php
        $page = "enquiry";
        include 'menu.inc';
    ?>
         <hr/>
        <!--All the page content is in article. It include main section and aside.-->
        <article>
            <!--Main section which contains the main content.-->
            <section id="main">
            <h1>Enquiry Form</h1>
            <p>Please fill in the following form to buy the product:</p>
            <div class="container">
            <form id="EnquiryForm" method="post" action="payment.php" novalidate="novalidate" >
            <div class="row">
                <div class="col-25">
                <label for="fname">First Name: </label>
                </div>
                <div class="col-75">
                <input type="text" id="fname" name="firstName" placeholder="Your name.."
                        maxlength="25" pattern="[a-zA-Z]+" required="required"/>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="lname">Last Name: </label>
                </div>
                <div class="col-75">
                <input type="text" id="lname" name="lastName" placeholder="Your last name.."
                        maxlength="25" pattern="[a-zA-Z]+" required="required"/>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="email">Email: </label>
                </div>
                <div class="col-75">
                <input type="email" id="email" name="email" placeholder="name@domain.com"
                        required="required"/>
                </div>
            </div>
            <fieldset> 
                <legend>Billing Address:</legend>
                <div class="row">
                <div class="col-25">
                 <label for="streetAddress"> Street address: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="streetAddress" id="streetAddress" required="required" maxlength="40"/>
                 </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="suburb"> Suburb/town: </label>
                   </div>
                    <div class="col-75">
                       <input type="text" name="suburb" id="suburb" required="required" maxlength="20"/>
                    </div>
                </div>
                <div class="row">
                 <div class="col-25">
                    <label for="state"> State: </label>
                </div>
                <div class="col-75">
                <select id="state" name="state" >
                    <option value="VIC">VIC</option>
                    <option value="NSW">NSW</option>
                    <option value="QLD">QLD</option>
                    <option value="NT">NT</option>
                    <option value="WA">WA</option>
                    <option value="SA">SA</option>
                    <option value="TAS">TAS</option>
                    <option value="ACT">ACT</option>
                </select>
                </div>
                </div>
                <div class="row">
                    <div class="col-25">
                     <label for="postcode"> Postcode: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="postcode" id="postcode" required="required" pattern="[0-9]{4}" maxlength="4"/>
                     </div>
                    </div>
            </fieldset>

            <fieldset> 
                <legend id="addressSelection">Billing address different from delivery address: </legend>
                 <label for="deliveredAddress"><input type="checkbox" name="features[]" id="deliveredAddress" value="deliveredAddress"  /> Billing address and shipping address are different.</label> 
            </fieldset>

            <fieldset id="secondAddress" > 
                <legend> Delivery Address:</legend>
                <div class="row">
                <div class="col-25">
                 <label for="streetAddress2"> Street address: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="streetAddress2" id="streetAddress2"  maxlength="40"/>
                 </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="suburb2"> Suburb/town: </label>
                   </div>
                    <div class="col-75">
                       <input type="text" name="suburb2" id="suburb2"  maxlength="20"/>
                    </div>
                </div>
                <div class="row">
                 <div class="col-25">
                    <label for="state2"> State: </label>
                </div>
                <div class="col-75">
                <select id="state2" name="state2" >
                    <option value="VIC">VIC</option>
                    <option value="NSW">NSW</option>
                    <option value="QLD">QLD</option>
                    <option value="NT">NT</option>
                    <option value="WA">WA</option>
                    <option value="SA">SA</option>
                    <option value="TAS">TAS</option>
                    <option value="ACT">ACT</option>
                </select>
                </div>
                </div>
                <div class="row">
                    <div class="col-25">
                     <label for="postcode2"> Postcode: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="postcode" id="postcode2"  pattern="[0-9]{4}" maxlength="4"/>
                     </div>
                    </div>
            </fieldset>



            <div class="row">
                <div class="col-25">
                <label for="phoneNumber">Phone Number: </label>
                </div>
                <div class="col-75">
                <input type="text" id="phoneNumber" name="phoneNumber" placeholder="0400 000 000" pattern="[0-9]{10}"
                maxlength="12" required="required"/>
                </div>
            </div>
            <fieldset id="preferredContact"> 
                <legend>Prederred Contact:</legend>
                <input type="radio" id="emailOption" name="preferredContant" value="email" checked="checked" />
                <label for="emailOption">Email</label>
                <input type="radio" id="postOption" name="preferredContant" value="post" />
                <label for="postOption">Post</label>
                <input type="radio" id="phoneOption" name="preferredContant" value="phone" />
                <label for="phoneOption">Phone</label>   

            </fieldset>
            <div class="row">
                 <div class="col-25">
                    <label for="product"> Product: </label>
                </div>
                <div class="col-75">
                <select id="product" name="product">
                    <option value="Iphone11">Iphone 11 - 1279&#36;</option>
                    <option value="IphoneX">Iphone X - 1749&#36; </option>
                    <option value="SamsungGalaxyS20">Samsung Galaxy S20 - 1899&#36; </option>
                    <option value="SamsungGalaxyNote10">Samsung Galaxy Note10 - 999&#36; </option>
                    <option value="SamsungGalaxyA20">SamsungGalaxyA20 - 279&#36; </option>
                </select>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                 <label for="quantity"> Quantity: </label>
                </div>
                <div class="col-75">
                    <input type="text" name="quantity" id="quantity" required="required" 
                    pattern="[0-9]+"
                    maxlength="3" size="3" />
                 </div>
                </div>

            <fieldset> 
                <legend>Product Features: </legend>
                 <label for="black"><input type="checkbox" name="features[]" id="black" value="black" /> Colour: Black</label> 
                 <label for="white"><input type="checkbox" name="features[]" value="white" id="white">Colour: White</label>
                 <label for="green"><input type="checkbox" name="features[]" value="green" id="green"/>Colour: Green</label>
            </fieldset>

            <fieldset> 
                <legend>Additional Features: </legend>
                 <label for="Ram3G"><input type="checkbox" name="addFeatures[]" value="Ram3G" id="Ram3G"/>Ram 3GB</label>
                 <label for="Ram4G"><input type="checkbox" name="addFeatures[]" value="Ram4G" id="Ram4G"/>Ram 4GB</label>
                 <label for="1YWarranty"><input type="checkbox" name="addFeatures[]" id="1YWarranty" value="1YWarranty" />Wanrranty: 1Y</label>
                 <label for="2YWarranty"><input type="checkbox" name="addFeatures[]" value="2YWarranty" id="2YWarranty" />Warranty: 2Y</label>
            </fieldset>

            <div class="row">
                <div class="col-25">
                <label for="subject">Comment: </label>
                </div>
                <div class="col-75">
                <textarea id="subject" name="subject" placeholder="Write your comments here. For example the date to deliver or any other requests.." style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Pay Now" >
                <input type="reset" value="Reset"/>
            </div>
            </form>
            </div>
            </section>

            <!--Aside section which contains the link to multiple sections in the main content.-->
            <aside id="aside"></aside>
        </article>
        <?php
        include 'footer.inc';
        ?>
    </body>