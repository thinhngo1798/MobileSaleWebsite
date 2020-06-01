<!-- filename: manager.php
 author: Quang Thinh Ngo
 created: Sunday 17/05/2020
 last modified: Monday 01/06/2020  -->


<!DOCTYPE html>
 <html lang="en"> 
     <head> 
         <meta charset="utf-8" /> 
         <meta name="description" content=" Manager Page" /> 
         <meta name="keywords" content=" manager" /> 
         <meta name="author"   content="Quang Thinh Ngo" />
         <link href="styles/style.css" rel="stylesheet"/> 
         <!-- Viewport set to sclae 1.0 -->
         <meta name="viewport" content="width = device-width, initial-scale=1.0"/> 
         <!-- Reference to external responsive CSS file -->
         <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
         
         <script src="scripts/payment.js"></script>
         <script src="scripts/enhancements2.js"></script>
         <title> Manager Page </title>
      </head> 
     <body> 
         <!--Header and Logo-->
    <?php
         $page = "manager";
         include 'header.inc';
    ?>
        <!--Navigation Bar-->
    <?php
        $page = "manager";
        include 'menu.inc';
    ?>
         <hr/>
         <!--All the page content is in article. It include main section and aside.-->
         <article>   
              <section id="main">

                  <form id="updateform" method="post" action="update.php" novalidate="novalidate" >
                  <h1>Display all orders: </h1>
                 <p><label for="allOrders">Click on the checkbox and submit to get all the orders </label><input type="checkbox" name="allOrders" id="allOrders" value="allOrders" /> 
                 </p>
                 <br>

                 <h1>Display orders for a customer by entering their name: </h1>
                 <p><label for="personNameOrder">Click on the checkbox and fill in the name of customer</label> <input type="checkbox" name="personNameOrder" id="personNameOrder" value="personNameOrder" /> 
                 </p>
                  <p><label for="name">Name of the customer you are looking for his/her order:</label>
                        <input type="text" id="name" name="name" required="required" maxlength="40"
                        placeholder ="First Name + Last Name"
                        pattern="[a-zA-Z ]+" />
                  </p>
               <br>

               <h1>Display orders for a specific product by entering its name: </h1>
                 <p><label for="productNameOrder">Click on the checkbox and fill in the name of customer</label> <input type="checkbox" name="productNameOrder" id="productNameOrder" value="productNameOrder" /> 
                 </p>
                  <p><label for="product">Name of the customer you are looking for his/her order:</label>
                        <input type="text" id="product" name="product" required="required" maxlength="40"
                        placeholder ="Example: Iphone11 IphoneX SamsungGalaxyNote10"
                        pattern="[a-zA-Z ]+" />
                  </p>
               <br>

               <h1>Display all orders that are pending: </h1>
                 <p><label for="allPendingOrders">Click on the checkbox and submit to get all the orders </label><input type="checkbox" name="allPendingOrders" id="allPendingOrders" value="allPendingOrders" /> 
                 </p>
                 <br>

                 <h1>Display orders sorted by total cost: </h1>
                 <p><label for="sortedOrders">Click on the checkbox and submit to get all the orders </label><input type="checkbox" name="sortedOrders" id="sortedOrders" value="sortedOrders" /> 
                 </p>
                 <br>
                  
               <input type="submit" value="Process Request" >
                <input type="reset" value="Reset"/>
              </form>
           
             </section>
             <aside id="aside">
              </aside>
         </article>
         <?php
         include 'footer.inc';
         ?>
     </body>
