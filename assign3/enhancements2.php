<!-- filename: enhancements2.php
 author: Quang Thinh Ngo
 created: Tuesday 18/03/2020
 last modified: Tuesday 07/04/2020-->

 <!DOCTYPE html>
 <html lang="en"> 
     <head> 
         <meta charset="utf-8" /> 
         <meta name="description" content=" Second Enhancements Page" /> 
         <meta name="keywords" content="Enhancements" /> 
         <meta name="author"   content="Quang Thinh Ngo" />
         <link href="styles/style.css" rel="stylesheet"/> 
         <!-- Viewport set to sclae 1.0 -->
         <meta name="viewport" content="width = device-width, initial-scale=1.0"/> 
         <!-- Reference to external responsive CSS file -->
         <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
         <title> Second Enhancements Page </title>
      </head> 
     <body> 
    <!--Header and Logo-->
    <?php
         $page = "enhancements2";
         include 'header.inc';
    ?>
        <!--Navigation Bar-->
    <?php
        $page = "enhancements2";
        include 'menu.inc';
    ?>
    <?php
    session_start();
     if (isset($_SESSION['firstName']) && isset($_SESSION['lastName'])&& isset($_SESSION['email']))
    echo "<p>". $_SESSION['firstName'] . "". $_SESSION['lastName'] . "is a ". $_SESSION['email'] . $_SESSION['err_msg'][0] ."</p>";
    ?>
         <hr/>
         <!--All the page content is in article. It include main section and aside.-->
         <article>
             <!--Main section which contains the main content.-->
             <section id="main">
             <h1 id="deliveryAddress">
             Enhancements Feature 1: More interacting option (two address inputs)
             </h1>
               <!--All the content such as passage, list, table, images will be format in the ListingContent class. It makes the content consistent.-->
             <div class="ListingContent">
             <h2>
                 Enhancements In Details:
             </h2>
             <ul>
                 <li>      
                 <h3>
                     Overview: 
                 </h3>
                 In a real experience with ordering and payment website. Almost every shop has a selection for customer when they have different billing address and delivery address. It may be a gift from the customer to other friends/family. That's why a tickbox which allows users to input there second address. In addition, it also can send this information to the payment website by local storage and then send it to mercury server.
                 </li>
                 <li>
                     <h3>
                         Link to the feature: 
                     </h3>
                     The feature is implemented in enquire page in the following link. 
                 <br/>
                 <a href="enquire.php#addressSelection">Linking to tickbox in enquire page</a>
                 </li>
                 <li>
                 <h3>
                     Description: 
                 </h3>
                     <p>Firstly, to have the second address input to appear when user click on the tickbox, it is done by using javascript.Also, to be able to do that, the html file must be modified as well</p>
                     <p> Secondly, the tickbox must be checked and based on that result, the information in the additional address will be saved into the storage.  
                     </p>
                     <p> Lastly, using Jquery Library to activate hidden input field so if user chose that box, the input will not only appear in the second website but also be sent to the server. 
                    </p>
                 </li>
                 <li>
                     <h3>
                         Reference: 
                     </h3>
                     Third party source: <a href="https://stackoverflow.com/questions/16636594/hide-and-show-textbox-in-javascript" >Stackoverflow Reference on Toggling element</a>
                     <br/>
                     <a href="https://www.w3schools.com/cssref/pr_class_display.asp" >W3Schools</a>

                 </li>
             </ul>
             </div>
             <h1 id="timer">
                 Enhancements Feature 2: Timer And Additional Action
             </h1>
             <div class="ListingContent">
                 <h2>
                     Enhancements In Details:
                 </h2>
                 <ul>
                     <li>      
                     <h3>
                         Overview: 
                     </h3>
                     Nowadays, security is an important factor in any website, especially when it relates to banking and money. Therefore, installing a timer in the payment website is necessary. Also, after the time runs out, all the data store in the client's side will be deleted and it changed back to the welcoming website.
                     </li>
                     <li>
                         <h3>
                             Link to the feature: 
                         </h3>
                         The following link is going to payment website and the timer is on the right hand side. 
                         <br/>
                     <br/>
                     <a href="payment.php">Payment Page </a>
                     </li>
                     <li>
                     <h3>
                         Description: 
                     </h3>
                         <p>A certain amount of time is create and passed to a function called startTimer.</p>
                         <p> Then the startTimer function call a set interval function to repeatedly counting down the time.
                         </p>
                         <br/>
                     </li>
                     <li>
                         <h3>
                             Reference: 
                         </h3>
                         Third party source: <a href="https://stackoverflow.com/questions/20618355/the-simplest-possible-javascript-countdown-timer" >Stackoverflow For Creating a Timer</a>
                     </li>
                 </ul>
                 </div>
             </section>
 
             <!--Aside section which contains the link to multiple sections in the main content.-->
             <aside id="aside">
                 <nav>
                 <a href="enhancements2.php#deliveryAddress">More interacting option (two address inputs)</a>
                 <a href="enhancements2.php#timer">Timer and Additional Action</a>
                 </nav>
              </aside>
         </article>
         <?php
         include 'footer.inc';
         ?>
     </body>