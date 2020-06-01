<!-- filename: receipt.php
 author: Quang Thinh Ngo
 created: Tuesday 18/03/2020
 last modified: Tuesday 07/04/2020-->
 <!DOCTYPE html>
<html lang="en"> 
    <head> 
        <meta charset="utf-8" /> 
        <meta name="description" content=" Receipt Page" /> 
        <meta name="keywords" content=" ReceiptPage" /> 
        <meta name="author"   content="Quang Thinh Ngo" />
        <link href="styles/style.css" rel="stylesheet"/>
        <!-- Viewport set to sclae 1.0 -->
        <meta name="viewport" content="width = device-width, initial-scale=1.0"/> 
        <!-- Reference to external responsive CSS file -->
        <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 600px)"/> 
        
        <script src="scripts/part2.js"></script>
        <script src="scripts/enhancements2.js"></script>
        <title> Receipt Page </title>
     </head> 
     <body> 
         <!--Header and Logo-->
    <?php
         $page = "receipt";
         include 'header.inc';
    ?>
        <!--Navigation Bar-->
    <?php
        $page = "receipt";
        include 'menu.inc';
    ?>
         <hr/>
        <!--All the page content is in article. It include main section and aside.-->
        <article>
            <!--Main section which contains the main content.-->
            <?php

            /* To prevent user directly access receipt.php*/
            if (!isset($_SERVER['HTTP_REFERER'])) {
            header('location:enquire.php');
            exit;
            }
            
            echo "<section id='main'>";
            session_start();
            if (isset($_SESSION['firstName'])) {
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
                  $cardNumber = $_SESSION['cardNumber'];
                  $expireDate = $_SESSION['expireDate'];
                  $cvv = $_SESSION['cvv'];
                  $order_id = $_SESSION['order_id'];
                  $cost = $_SESSION['cost'];
                  $order_time = $_SESSION['order_time'];
                  $order_status = $_SESSION['order_status'];
                  $securityCardNumber = substr($cardNumber,0,strlen($cardNumber)-4) . "****";
                  if (strlen($cvv) == 3)
                  {
                        $securityCVV = "***";
                  }
                  else
                  {
                        $securityCVV = "****";
                  }
            echo "<h1> Your receipt is:</h1>";
            echo "<h3>Your order ID: $order_id </h3>";
            echo "<h3>Your order time: $order_time </p>";
            echo "<h3>Your order status: $order_status </p>";
            echo "</br>";
            echo "<h3>Your personal contact: </h3>";
            echo "<p>Your Name: $firstName $lastName </p>";
            echo "<p>Email: $email</p>";
            echo "<p>Phone Number: $phoneNumber</p>";
            echo "<p>Preferred Contact:  $preferredContact</p>";
            echo "</br>";
            echo "<h3>Billing Address: </h3>";
            echo "<p>Street Address:  $BillingStreetAddress</p>";
            echo "<p>Suburb:  $BillingSuburb </p>";
            echo "<p>State:  $BillingState</p>";
            echo "<p>Postcode:  $BillingPostcode</p>";
            echo "</br>";
            echo "<h3>Product Detail: </h3>";
            echo "<p>Product: $product</p>";
            echo "<p>Quantity:  $quantity</p>";
            echo "<p>Product Features: $feature</p>";
            echo "<p>Additional Features: $additionalFeature</p>";
            echo "<p>Comment: $comment</p>";
            echo "<p>Total Cost:$cost $ </p>";
            echo "</br>";
            echo "<h3>Payment Detail: </h3>";
            echo "<p>Name on card: $nameOnCard</p>";
            echo "<p>Type of card:  $cardType</p>";
            echo "<p>Card number: $securityCardNumber</p>";
            echo "<p>Expire date: $expireDate</p>";
            echo "<p>CVV: $securityCVV </p>";
          
            }
            echo "</section>";

            
            ?>
            <!--Aside section which contains the link to multiple sections in the main content.-->
            <aside id="aside"></aside>
        </article>
        <?php
        include 'footer.inc';
        ?>
    </body>