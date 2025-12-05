<?php
/*
Deeya Dave
November 21, 2025
IT-202-003 Internet Applications
Phase 4 Assignment: Input Filtering and CSS Styling
dd594@njit.edu
*/
error_log("\$_POST " . print_r($_POST, true));
require_once("coffeetype.php");
if (isset($_SESSION['login'])){
$CoffeeTypeID = $_POST['CoffeeTypeID'];
$category = Category::findCoffeeType($CoffeeTypeID);
$result = $category->removeCoffeeType();
if ($result)
   echo "<h2>Coffee type #$CoffeeTypeID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing coffee type #$CoffeeTypeID</h2>\n";
} else {
   echo "<h2>Please login first.</h2>\n";
}
?>
