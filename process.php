<?php
/*
 * Timothy Bartsch
 * 4/11/2023
 * 328/icecream/index.php
 * Process Order for Ice Cream Shoppe
 * */

/*
 * array(3) {
  ["flavor"]=>
  array(1) {
    [0]=>
    string(7) "vanilla"
  }
  ["cone"]=>
  string(6) "waffle"
  ["scoops"]=>
  string(2) "33"
}
 * */
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

define('PRICE_PER_SCOOP', 1.00);
define('SALES_TAX', 0.08);
$title = "Order Form";
//Include Header
include('header.php');

?>

<body>
    <div class="container">
        <h1>Thank you for your order!</h1>
        <?php
//            echo "<pre>";
//            var_dump($_POST);
//            echo "</pre>"

              //Get Data from POST array
              $numScoops = $_POST['scoops'];
              $cone = $_POST['cone'];
              $flavors = $_POST['flavor'];
              $flavorList = implode(", ", $flavors);

              //Make sure flavors does not exceed scoops.
              if(sizeof($flavors) > $numScoops){
                  echo "<h2>Oops! You have more flavors than scoops.</h2>";
                  return;
              }

              //Calculate price
              $subtotal = $numScoops * PRICE_PER_SCOOP;
              $total = $subtotal + ($subtotal * SALES_TAX);

              //Display summary
              echo "<p>Number of scoops: $numScoops</p>";
              echo "<p>Cone Selection: $cone</p>";
              echo "<p>Flavors: $flavorList</p>";
              echo "<p>Subtotal: " . number_format($subtotal, 2) . "</p>";
              echo "<p>Total: " . number_format($total,2) . "</p>";
        ?>
    </div>
</body>
