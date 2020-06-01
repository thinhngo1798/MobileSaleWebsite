<!-- filename: receipt.php
 author: Quang Thinh Ngo
 created: Sunday 17/05/2020
 last modified: Monday 01/06/2020-->

 
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
            <section id="main">
      <?php
      /* To prevent user directly access update.php*/
      if (!isset($_SERVER['HTTP_REFERER'])) {
            header('location:manager.php');
            exit;
            }     
      function santitise_input($data) {
            //Removing leading or trailing spaces.
            $data = trim($data);
            //Removing backslashes.
            $data = stripslashes($data);
            //Removing HTML special/control characters.
            $data = htmlspecialchars($data);
            return $data; 
      } 
      if (isset($_POST["status"]) || (isset($_POST["cancelOrder"]))) {
            if (isset($_POST["status"])) {
                  $status = $_POST["status"];
            }
            else
            {
                  $status=0;
            }
            $order_id = $_POST["order_id"];
            if (isset($_POST["cancelOrder"])) {
                  $cancelOrder = $_POST["cancelOrder"];
            }
            else
            {
                  $cancelOrder=0;
            }
            require_once ("settings.php");

      $conn = mysqli_connect($host, $user, $pwd, $sql_db);

      if (!$conn) {
            echo "<p>Database connection failure </p>";
      }
      else {
            $sql_table ="orders";
            if ($cancelOrder)
            {
            $query = "DELETE FROM $sql_table WHERE ((order_id='$order_id') and (order_status='PENDING'))";
            }
            else
            {
            $query = "UPDATE $sql_table SET order_status='$status' WHERE order_id='$order_id'";
            }
            $result = mysqli_query($conn, $query);
            if (!$result) {
                  echo "<p>Something is wrong with " ,$query, "</p>";
            } else {
                  if ($cancelOrder)
                  {
                        echo "The request to delete the order  $order_id has been processed. Only pending orders can be deleted.
                        Otherwise, the order still exists";
                  }
                  else
                  {
                  echo "The request to change the status of  $order_id is successful";
                  }
                  mysqli_close($conn);
      }
      }
      session_start();
      $_POST["allOrders"]              =$_SESSION['allOrders'];
      $_POST["personNameOrder"]       =$_SESSION['personNameOrder'];
      $_POST["productNameOrder"]              =$_SESSION['productNameOrder'];
      $_POST["allPendingOrders"]       =$_SESSION['allPendingOrders'];
      $_POST["sortedOrders"]             =$_SESSION['sortedOrders'];
      $_POST["product"]       =$_SESSION['product'];
      $_POST["name"]           =$_SESSION['name'];
}
      else
      {
            session_start();
            if (isset($_POST["allOrders"]))
            {
                  $_SESSION['allOrders']              =$_POST["allOrders"];
            }
            else
            $_SESSION['allOrders'] = 0;

             if (isset($_POST["personNameOrder"]))
            {
                  $_SESSION['personNameOrder']        =$_POST["personNameOrder"];
            }
            else
            $_SESSION['personNameOrder'] =0;
            if (isset($_POST["name"]))
            {
                  $_SESSION['name']                   =$_POST["name"];
            }
            else
            $_SESSION['name'] =0;
            if (isset($_POST["productNameOrder"]))
            {
                  $_SESSION['productNameOrder']       =$_POST["productNameOrder"];
            }
            else
            $_SESSION['productNameOrder'] =0;
            if (isset($_POST["product"]))
            {
                  
                  $_SESSION['product']                =$_POST["product"];
            }
            else
            $_SESSION['product'] =0;
            if (isset($_POST["allPendingOrders"]))
            {
                  
                  $_SESSION['allPendingOrders']       =$_POST["allPendingOrders"];
            }
            else
            $_SESSION['allPendingOrders'] =0;
             if (isset($_POST["sortedOrders"]))
            {
                  
                  $_SESSION['sortedOrders']           =$_POST["sortedOrders"];
            }
            else
            $_SESSION['sortedOrders'] =0;
      
     
      
      }

      if ((isset($_POST["allOrders"]) || (isset($_POST["personNameOrder"]))|| (isset($_POST["productNameOrder"]))|| (isset($_POST["allPendingOrders"]))|| (isset($_POST["sortedOrders"]))))  { 
            if (isset($_POST["allOrders"]))
            {
                  $allOrdersSelect = $_POST["allOrders"];
            }
            else
            $allOrdersSelect = 0;
             if (isset($_POST["personNameOrder"]))
            {
                  $personNameOrdersSelect = $_POST["personNameOrder"];
            }
            else 
            $personNameOrdersSelect = 0;
            if (isset($_POST["name"]))
            {
                  $personNameOrder = $_POST["name"];
            }
            else 
            $personNameOrder = 0;
            if (isset($_POST["productNameOrder"]))
            {
                  $productNameOrderSelect = $_POST["productNameOrder"];
            }
            else 
            $productNameOrderSelect = 0;
            if (isset($_POST["product"]))
            {
                  
                  $productNameOrder = $_POST["product"];
            }
            else 
            $productNameOrder = 0;
            if (isset($_POST["allPendingOrders"]))
            {
                  
                  $allPendingOrdersSelect = $_POST["allPendingOrders"];
            }
            else
            $allPendingOrdersSelect = 0;
             if (isset($_POST["sortedOrders"]))
            {
                  
                  $sortedOrdersSelect = $_POST["sortedOrders"];
            }
            else
            {
                  $sortedOrdersSelect = 0;
            }

      
      // Adding security:
      //$criteria = htmlspecialchars($_POST["criteria"]);
      //$detail = htmlspecialchars($_POST["detail"]);
      $allOrdersSelect = santitise_input($allOrdersSelect);
      $personNameOrdersSelect = santitise_input($personNameOrdersSelect);
      $personNameOrder = santitise_input($personNameOrder);
      $productNameOrderSelect = santitise_input($productNameOrderSelect);
      $productNameOrder = santitise_input($productNameOrder);
      $allPendingOrdersSelect = santitise_input($allPendingOrdersSelect);
      $sortedOrdersSelect = santitise_input($sortedOrdersSelect);
          
      
      
      require_once ("settings.php");

      $conn = mysqli_connect($host, $user, $pwd, $sql_db);

      if (!$conn) {
            echo "<p>Database connection failure </p>";
      }
      else {
            $sql_table ="orders";
            $query = array();
            // Retrieve all orders and display in html table
            if ($allOrdersSelect)
            {
                  $query[] = "select * FROM $sql_table WHERE 1;";
            }
            if ($personNameOrdersSelect)
            {
                  $query[] = "select * FROM $sql_table WHERE (concat(firstName,' ',lastName) = '$personNameOrder');";
            }
            if ($productNameOrderSelect)
            {
                  $query[] = "select * FROM $sql_table WHERE (product = '$productNameOrder');";
            }
            if ($allPendingOrdersSelect)
            {
                  $query[] = "select * FROM $sql_table WHERE order_status='PENDING';";
            }
            if ($sortedOrdersSelect)
            {
                  
                  $query[] = "select * FROM $sql_table ORDER BY order_cost;";
            }
            $counter=1;
            foreach ($query as $value)
            {
                  if ( $value == "select * FROM $sql_table WHERE 1;")
                  {
                       echo "<p>Table $counter : Printing out all records</p>";
                       $counter++;
                  }
                  if ( $value == "select * FROM $sql_table WHERE (concat(firstName,' ',lastName) = '$personNameOrder');")
                  {
                        echo "<p>Table $counter : Printing out the record with the name $personNameOrder </p>";
                        $counter++;
                  }
                  if ( $value == "select * FROM $sql_table WHERE (product = '$productNameOrder');")
                  {
                        echo "<p>Table $counter : Printing out the record with the product name $productNameOrder </p>";
                        $counter++;
                  }
                  if (  $value == "select * FROM $sql_table WHERE order_status='PENDING';")
                  {
                        echo "<p>Table $counter : Printing out all records that are pending</p>";
                        $counter++;
                  }
                  if ($value == "select * FROM $sql_table ORDER BY order_cost;")
                  {
                        
                        echo "<p>Table $counter : Printing out all records sorting by cost</p>";
                        $counter++;
                  }
                  $result = mysqli_query($conn, $value);
                  if (!$result) {
                        echo "<p>Something is wrong with " ,$value, "</p>";
                  } else {
                        // Printing out the request
                       
                        echo "<table >\n";
                        echo "<tr>\n "
                        ."<th scope='col'>Change Order Status</th>\n"
                        ."<th scope='col'>cancelOrder Order</th>\n"
                        ."<th scope='col'>Order_Id</th>\n"
                        ."<th scope='col'>Order status</th>\n"
                        ."<th scope='col'>First name</th>\n"
                        ."<th scope='col'>Last name</th>\n"
                        ."<th scope='col'>Email</th>\n"
                        ."<th scope='col'>Street Address</th>\n"
                        ."<th scope='col'>Suburb</th>\n"
                        ."<th scope='col'>State</th>\n"
                        ."<th scope='col'>Postcode</th>\n"
                        ."<th scope='col'>Phone number</th>\n"
                        ."<th scope='col'>Preferred contact</th>\n"
                        ."<th scope='col'>Product</th>\n"
                        ."<th scope='col'>Quantity</th>\n"
                        ."<th scope='col'>Feature</th>\n"
                        ."<th scope='col'>Additional Feature</th>\n"
                        ."<th scope='col'>Comment</th>\n"
                        ."<th scope='col'>Order Cost</th>\n"
                        ."<th scope='col'>Order name</th>\n"
                        ."</tr>\n ";
      
                        while ($row = mysqli_fetch_assoc($result) ) {
                              echo "<tr>\n";
                              $currentID = $row["order_id"];
                              echo "<td> 
                        <form method='post' action='update.php' novalidate='novalidate' >
                        <label for='status'>New status:</label>
                        <input type='text' id='status' name='status' 
                        placeholder ='PENDING/FULFILLED/PAID/ACHIEVED' />
                        <input type='hidden' id='order_id' name='order_id' value='$currentID'/> 
                        <input id ='updateButton' type='submit' value='Change status' />
                        </form>
                        </td>\n";
                        echo "<td> 
                        <form method='post' action='update.php' novalidate='novalidate' >
                        <input type='hidden' id='order_id' name='order_id' value='$currentID'/> 
                        <input type='hidden' id='cancelOrder' name ='cancelOrder' value ='1' />
                        <input type='submit' id ='updateButton' value = 'cancelOrder order' />
                        </form>
                        </td>\n";
                              echo "<td> ",$row["order_id"],"</td>\n";
                              echo "<td> ",$row["order_status"],"</td>\n";
                              echo "<td> ",$row["firstName"],"</td>\n";
                              echo "<td> ",$row["lastName"],"</td>\n";
                              echo "<td> ",$row["email"],"</td>\n";
                              echo "<td> ",$row["streetAddress"],"</td>\n";
                              echo "<td> ",$row["suburb"],"</td>\n";
                              echo "<td> ",$row["state"],"</td>\n";
                              echo "<td> ",$row["postcode"],"</td>\n";
                              echo "<td> ",$row["phoneNumber"],"</td>\n";
                              echo "<td> ",$row["preferredContact"],"</td>\n";
                              echo "<td> ",$row["product"],"</td>\n";
                              echo "<td> ",$row["quantity"],"</td>\n";
                              echo "<td> ",$row["features"],"</td>\n";
                              echo "<td> ",$row["addFeatures"],"</td>\n";
                              echo "<td> ",$row["subject"],"</td>\n";
                              echo "<td> ",$row["order_cost"],"</td>\n";
                              echo "<td> ",$row["order_time"],"</td>\n";
                              echo "</tr>\n ";   
                  }
                  echo "</table >\n";
                  
                        
            }
            
            
            
            
            

      }
      mysqli_close($conn);
      }
}
?>
 </section>

</article>
    </body>