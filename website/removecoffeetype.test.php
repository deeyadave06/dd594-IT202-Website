<?php
error_log("\$_POST " . print_r($_POST, true));
require_once("coffeetype.php");
$CoffeeTypeID = $_POST['CoffeeTypeID'];
$category = Category::findCoffeeType($CoffeeTypeID);
$result = $category->removeCoffeeType();
if ($result)
   echo "<h2>Coffee type #$CoffeeTypeID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing coffee type #$CoffeeTypeID</h2>\n";
?>
