<?php
    /*
     * Timothy Bartsch
     * 4/11/2023
     * 328/icecream/index.php
     * Order form for Ice Cream Shoppe
     * */

    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //Define array
    $flavors = array("vanilla","chocolate","strawberry","caramel");
    $cones = array("sugar"=>"Sugar Cone", "waffle"=>"Waffle Cone", "cup"=>"Cup");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Ice Cream Shoppe</title>
</head><body>
<div class="container">
    <h1>Welcome to my Ice Cream Shoppe!</h1>
    <form action="process.php" method="post">

        <h3>Choose a flavor</h3>
        <?php

        foreach ($flavors as $flavor) {
            echo "<label><input type='checkbox' name='flavor[]' value='$flavor'> " . ucfirst($flavor) . "</label><br>";
        }
        ?>

        <h3>Choose One</h3>
        <?php
        foreach ($cones as $value=>$label){
            echo "<label><input type='radio' name='cone' value='$value'> ".$label."</label><br>";
        }
        ?>
        <h3>How many scoops?</h3>
        <input type="text" name="scoops" ><br>

        <br>
        <button type="submit">Place Order</button>
    </form>
</div>
</body>
</html>