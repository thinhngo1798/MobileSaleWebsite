<!DOCTYPE html>
<html lang="en">
<head>
<meta charset ="utf-8" />
<meta name="description" content="Processing order and direct to fix_order.php when there is an error." />
<meta name ="keywords" content = "PHP,MySql" />
<title>Processing input data from payment.php</title>
</head>
<body>
<?php
      /* To prevent user directly access process_order.php*/
      if (!isset($_SERVER['HTTP_REFERER'])) {
      header('location:enquire.php');
      exit;
      }     

      /*destroy old session*/
      session_start();
      $_SESSION = array();
      session_destroy();   
      
      /* Sanitizing the input data for security*/ 
      function santitise_input($data) {
            //Removing leading or trailing spaces.
            $data = trim($data);
            //Removing backslashes.
            $data = stripslashes($data);
            //Removing HTML special/control characters.
            $data = htmlspecialchars($data);
            return $data; 
      }

      /* Checking the validation of credit card based on each credit card type.*/
      function checkCreditCardNumber($cardType,$cardNumber) {
            $errMsg = "";
            $firstTwoDigit=substr($cardNumber,0,2);
            switch ($cardType){
                  case "visa":
                  if (strlen($cardNumber)!= 16){
                        $errMsg="Visa card must have 16 numbers.";
                  }      
                  else if (substr($firstTwoDigit,0,1) != "4"){
                              $errMsg = "Visa card must start with a 4.\n";
                        }
                  break;
                  case "mastercard":
                  if (strlen($cardNumber)!= 16){
                        $errMsg="Mastercard must have 16 numbers.";
                  }      
                  else if ($firstTwoDigit != "51" && $firstTwoDigit != "52" && $firstTwoDigit != "53" && $firstTwoDigit != "54"&& $firstTwoDigit != "55"){
                              $errMsg = "Mastercard must start with a digits 51 though to 55. \n";
                        }
                  break;
                  case "americanExpress":
                        if (strlen($cardNumber)!= 15){
                              $errMsg="American express card must have 15 numbers.";
                        }      
                        else if ($firstTwoDigit != "34" && $firstTwoDigit != "37") {
                                    $errMsg = "American express card must starts with 34 or 37. \n";
                              }
                        break;
                  default:
                        $errMsg = "You have insert a wrong type of credit card.\n";
            }
            return $errMsg;
      }

      function checkPostcode($state,$postcode) { 
            $errMsg = "";
            $firstDigit=substr($postcode, 0, 1);
            switch ($state){
                  case "VIC":
                        if ($firstDigit != "3" && $firstDigit !="8"){
                              $errMsg = "The postcode of VIC state should start with 3 or 8. \n";
                        }
                        break;
                  case "NSW":
                        if ($firstDigit != "1" && $firstDigit !="2"){
                              $errMsg = "The postcode of NSW state should start with 1 or 2. \n";
                        }
                        break;
                  case "QLD":
                  if ($firstDigit != "4" && $firstDigit !="9"){
                        $errMsg = "The postcode of QLD state should start with 4 or 9. \n";
                  }
                  break;
                  case "ACT":
                  case "NT":
                        if ($firstDigit != "0" ){
                              $errMsg = "The postcode of " + state + " state should start with 0. \n";
                        }
                        break;
                  case "WA":
                        if ($firstDigit != "6" ){
                              $errMsg = "The postcode of " + state + " state should start with 6. \n";
                        }
                        break;
                  case "SA":
                        if ($firstDigit != "5" ){
                              $errMsg = "The postcode of " + state + " state should start with 5. \n";
                        }
                        break;
                        
                  case "TAS":
                        if ($firstDigit != "7" ){
                              $errMsg = "The postcode of " + state + " state should start with 7. \n";
                        }
                        break;
                  default:
                  $errMsg = "You have insert a wrong state.\n";
            }
            return $errMsg;
      }

      function calcCost($product, $quantity){
            $cost = 0;
            switch ($product) {
            case "Iphone11":
                  $cost =1279 * $quantity;
                  break;
            case "IphoneX":
                  $cost =1749 * $quantity;
                  break;
            case "SamsungGalaxyS20":
                  $cost =1899 * $quantity;
                  break; 
            case "SamsungGalaxyNote10":
                  $cost =999 * $quantity;
                  break;
            case "SamsungGalaxyA20":
                  $cost =279 * $quantity;
                  break;
            
            default:
                  $cost=0;
            }
            return $cost;
      }

      if (isset($_POST["firstName"])) {   
      $firstName = $_POST["firstName"];
      $lastName = $_POST["lastName"];
      $email = $_POST["email"];
      $BillingStreetAddress = $_POST["BillingStreetAddress"];
      $BillingSuburb = $_POST["BillingSuburb"];
      $BillingState = $_POST["BillingState"];
      $BillingPostcode = $_POST["BillingPostcode"];
      $phoneNumber = $_POST["phoneNumber"];
      $preferredContact = $_POST["preferredContact"];
      $product = $_POST["product"];
      $quantity = $_POST["quantity"];
      $feature = $_POST["feature"];
      $additionalFeature = $_POST["additionalFeature"];
      $comment = $_POST["comment"];
      $cardType = $_POST["cardType"];
      $nameOnCard = $_POST["name"];
      $cardNumber = $_POST["cardNumber"];
      $expireDate = $_POST["expireDate"];
      $cvv = $_POST["cvv"];

      

      //Sanitising data
      $firstName = santitise_input($firstName);
      $lastName =santitise_input($lastName);
      $email = santitise_input($email);
      $BillingStreetAddress = santitise_input($BillingStreetAddress);
      $BillingSuburb = santitise_input($BillingSuburb);
      $BillingState = santitise_input($BillingState);
      $BillingPostcode =santitise_input($BillingPostcode);
      $phoneNumber =santitise_input($phoneNumber);
      $preferredContact = santitise_input($preferredContact);
      $product = santitise_input($product);
      $quantity = santitise_input($quantity);
      $feature = santitise_input($feature);
      $additionalFeature = santitise_input($additionalFeature);
      $comment = santitise_input($comment);
      $cardType = santitise_input($cardType);
      $nameOnCard =santitise_input($nameOnCard);
      $cardNumber = santitise_input($cardNumber);
      $expireDate = santitise_input($expireDate);
      $cvv = santitise_input($cvv);


      
      //Error messages will be stored in an array.
      $err_msg =array();

      if (strlen($firstName) == 0) {
            $err_msg[] = "First name cannot be empty";
      } 
      else if (!preg_match("/^[a-zA-Z]*$/",$firstName)) {
            $err_msg[] = "First name can only contain alphabetical characters";
      }
      else if (strlen($firstName) >25) {
            $err_msg[]="First name can be maximum of 25 characters";
      }

      if (strlen($lastName) == 0) {
            $err_msg[] = "Last name cannot be empty";
      } 
      else if (!preg_match("/^[a-zA-Z]*$/",$lastName)) {
            $err_msg[] = "Last name can only contain alphabetical characters";
      }
      else if (strlen($lastName) >25) {
            $err_msg[]="Last name can be maximum of 25 characters";
      }

      if (strlen($email) == 0) {
            $err_msg[] = "Email cannot be empty";
      } 
      else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $err_msg[] = "Invalid email format";
      }

      if (strlen($BillingStreetAddress) == 0) {
            $err_msg[] = "Street Address cannot be empty";
      } 
      else if (strlen($BillingStreetAddress) >40) {
            $err_msg[]="Street address can be maximum of 40 characters";
      }

      if (strlen($BillingSuburb) == 0) {
            $err_msg[] = "Suburb cannot be empty";
      } 
      else if (strlen($BillingSuburb) >20) {
            $err_msg[]="Suburb can be maximum of 20 characters";
      }

      if (strlen($BillingState) == 0) {
            $err_msg[] = "State cannot be empty";
      } 
      else if ($BillingState != "VIC" && $BillingState != "NSW" && $BillingState != "QLD" && $BillingState != "NT" && $BillingState != "WA"&& $BillingState != "SA" && $BillingState != "TAS" && $BillingState != "ACT" ) {
            $err_msg[]="State is invalid";
      }

      if (strlen($BillingPostcode) == 0) {
            $err_msg[] = "Postcode cannot be empty";
      } 
      else if (strlen($BillingPostcode) != 4) {
            $err_msg[]="Postcode must be exactly 4 digits";
      }
      else if (true)
      {
            $err_msg[] = checkPostcode($BillingState,$BillingPostcode);
      }

      if (strlen($phoneNumber) == 0) {
            $err_msg[] = "Phone number cannot be empty";
      } 
      else if (!preg_match("/^\d\d\d\d \d\d\d \d\d\d$/",$phoneNumber) && !preg_match("/^\d\d\d\d\d\d\d\d\d\d$/",$phoneNumber) ) {
            $err_msg[] = "Your phone number is in wrong format. It must be 04XX XXX XXX or 04XXXXXXXX";
      }
      else if (strlen($phoneNumber) > 12) {
            $err_msg[]="Phone number must be exactly 10 digits and 2 spaces";
      }

      if (strlen($preferredContact) == 0) {
            $err_msg[] = "Preferred contact cannot be empty";
      } 
      else if ($preferredContact != "email" && $preferredContact != "post" && $preferredContact != "phone" ) {
            $err_msg[]="Preferred contact is invalid";
      }

      if (strlen($product) == 0) {
            $err_msg[] = "Product cannot be empty";
      } 
      else if ($product != "Iphone11" && $product != "IphoneX" && $product != "SamsungGalaxyS20" && $product != "SamsungGalaxyNote10" && $product != "SamsungGalaxyA20") {
            $err_msg[]="Product is invalid";
      }

      if (strlen($quantity) == 0) {
            $err_msg[] = "Quantity cannot be empty";
      } 
      else if (!preg_match("/\d{1,4}/",$quantity)) {
            $err_msg[] = "Your quantity must be a number";
      }
      else if ($quantity <= 0) {
            $err_msg[] = "Quantity cannot be negative or 0.";
      } 

      if (strlen($feature) == 0) {
            $err_msg[] = "Feature cannot be empty";
      }
      
      if (strlen($additionalFeature) == 0) {
            $err_msg[] = "Additional feature cannot be empty";
      } 


      
      if (strlen($cardType) == 0) {
            $err_msg[] = "Type of card cannot be empty";
      } 
      else if ($cardType != "visa" && $cardType != "mastercard" && $cardType != "americanExpress" && $cardType == "none") {
            $err_msg[]="Type of card is invalid";
      }

      if (strlen($nameOnCard) == 0) {
            $err_msg[] = "Name on card cannot be empty";
      } 
      else if (!preg_match("/^[a-zA-Z ]*$/",$nameOnCard)) {
            $err_msg[] = "Name on card can only contain alphabetical characters and spaces";
      }
      else if (strlen($nameOnCard) >40) {
            $err_msg[]="First name can be maximum of 40 characters";
      }

         
      if (strlen($cardNumber) == 0) {
            $err_msg[] = "Card number cannot be empty";
      } 
      else if (!preg_match("/\d{15,16}/",$cardNumber)) {
            $err_msg[] = "Card number must be 15 or 16 digits";
      }
      else if (true)
      {
      //Validation the card number based on certain rules.
        $err_msg[] = checkCreditCardNumber($cardType,$cardNumber);    
      }


      if (strlen($expireDate) == 0) {
            $err_msg[] = "Expire date cannot be empty";
      } 
      else if (!preg_match("/^[0-9]{2}-[0-9]{2}$/",$expireDate)) {
            $err_msg[] = "Expire date is in wrong format";
      } 
     
      if (strlen($cvv) == 0) {
            $err_msg[] = "CVV cannot be empty";
      } 
      else if (!preg_match("/\d{3,4}/",$cvv)) {
            $err_msg[] = "CVV must be 3 or 4 digits";
      }

      }
      //Saving data into Session.
      session_start();
      $_SESSION['firstName'] = $firstName;
      $_SESSION['lastName'] = $lastName;
      $_SESSION['email'] = $email;
      $_SESSION['BillingStreetAddress'] = $BillingStreetAddress;
      $_SESSION['BillingSuburb'] = $BillingSuburb;
      $_SESSION['BillingState'] = $BillingState;
      $_SESSION['BillingPostcode'] = $BillingPostcode;
      $_SESSION['phoneNumber'] = $phoneNumber;
      $_SESSION['preferredContact'] = $preferredContact;
      $_SESSION['product'] = $product;
      $_SESSION['quantity'] = $quantity;
      $_SESSION['feature'] = $feature;
      $_SESSION['additionalFeature'] = $additionalFeature;
      $_SESSION['comment'] = $comment;
      $_SESSION['cardType'] = $cardType;
      $_SESSION['nameOnCard'] = $nameOnCard;
      $_SESSION['cardNumber'] = $cardNumber;
      $_SESSION['expireDate'] = $expireDate;
      $_SESSION['cvv'] = $cvv;
      $_SESSION['err_msg'] = $err_msg;

      //For checking if there are any errors.
      $errorFreeFlag = true;
      foreach ($err_msg as $value)
      {
            if ($value != "")
      {
            header("Location:fix_order.php");
            $errorFreeFlag = false;
      }

      }

      if ($errorFreeFlag) {
      // Calculate cost.
      $cost = calcCost( $product,$quantity);
      $currentTime = date('Y-m-d H:i:s');
      $order_status = "PENDING";

      // Storing cost, currentTime and order_status into session storage.
      $_SESSION['cost'] = $cost;
      $_SESSION['order_time'] = $currentTime;
      $_SESSION['order_status'] = $order_status;
      // Saving all the order information into mysql
      require_once ("settings.php");

      $conn = mysqli_connect($host, $user, $pwd, $sql_db);

      if (!$conn) {
            echo "<p>Database connection failure </p>";
      }
      else {
            echo "<p>Database connection successful.</p>";

            $sql_table ="orders";
            $query = "CREATE TABLE IF NOT EXISTS $sql_table (
            `order_id` int(11) NOT NULL auto_increment PRIMARY KEY,   
            `firstName` varchar(25) NOT NULL,  
            `lastName` varchar(25) NOT NULL,
            `email` varchar(40) NOT NULL,     
            `streetAddress` varchar(40) NOT NULL,
            `suburb` varchar(20) NOT NULL,
            `state` varchar(3) NOT NULL,
            `postcode` int(4) NOT NULL,
            `phoneNumber` varchar(12) NOT NULL,
            `preferredContact` varchar(20) NOT NULL,
            `product` varchar(20) NOT NULL,
            `quantity` varchar(2) NOT NULL,
            `features` varchar(40) NOT NULL,
            `addFeatures` varchar(40) NOT NULL,
            `subject` varchar(40) NOT NULL,
            `cardType` varchar(20) NOT NULL,
            `nameOnCard` varchar(50) NOT NULL,
            `cardNumber` int(25) NOT NULL,
            `expireDate` varchar(5) NOT NULL,
            `cvv` varchar(4) NOT NULL,
            `order_cost` float  NOT NULL,
            `order_time` date  NOT NULL,
            `order_status` varchar(10) NOT NULL
            )";
            $query1 = "INSERT INTO `$sql_table` (`order_id`,`firstName`, `lastName`, `email`, `streetAddress`, `suburb`, `state`, `postcode`, `phoneNumber`, `preferredContact`, `product`, `quantity`, `features`,`addFeatures`, `subject`, `cardType`, `nameOnCard`, `cardNumber`, `expireDate`, `cvv`,`order_cost`, `order_time`, `order_status`) VALUES (NOT NULL,'$firstName','$lastName','$email', '$BillingStreetAddress','$BillingSuburb','$BillingState','$BillingPostcode','$phoneNumber','$preferredContact', '$product','$quantity','$feature','$additionalFeature','$comment','$cardType','$nameOnCard','$cardNumber','$expireDate','$cvv','$cost','$currentTime','$order_status')";
           //$query = "select make, model, price from $sql_table where 1";
            $query2 = "select order_id FROM $sql_table WHERE order_time = '$currentTime'";
            

            $result = mysqli_query($conn, $query);
            $result1 = mysqli_query($conn, $query1);
            $result2=mysqli_query($conn,$query2);

            if (!$result) {
                  echo "<p>Something is wrong with " ,$query, "</p>";
                  while ($row = mysqli_fetch_assoc($result) ) {
                        echo "<tr>\n";
                        echo "<td> ",$row["make"],"</td>\n";
                        echo "<td> ",$row["model"],"</td>\n";
                        echo "<td> ",$row["price"],"</td>\n";
                        echo "</tr>\n ";   
                  }
            } else {
                 echo "<p class=\"ok\">Successfully creating orders table if the table does not exist </p>";
                 
   
            //mysqli_free_result($result);

            mysqli_close($conn);

      }
      if (!$result1) {
            echo "<p>Something is wrong with " ,$query1, "</p>";

      } else {
           echo "<p class=\"ok\">Successfully adding information to the orders table </p>";

      //mysqli_free_result($result);

      mysqli_close($conn);

      }  
      if (!$result2) {
            echo "<p>Something is wrong with " ,$query2, "</p>";
            
      }
      else {
      echo "<p class=\"ok\">Successfully taking the id from orders </p>";
      $row = mysqli_fetch_assoc($result2);
      if ($row)  {
            $_SESSION['order_id'] = $row["order_id"];
            mysqli_close($conn);
      } 
      else
      {
            $_SESSION['order_id'] = 1; 
      } 
      echo "<p> <a href='enhancements2.php'> hahaha </a> </p>";
      }     
      }
      if ($result2)
      {
      header("Location:receipt.php");
      }
      }
      
?>
</body>
</html>