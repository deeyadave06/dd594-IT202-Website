<?php
/*
Deeya Dave
December 05, 2025
IT-202-003 Internet Applications
Phase 5 Assignment: JavaScript
dd594@njit.edu
*/
require_once('coffee.php');
if (isset($_SESSION['login'])) {
$CoffeeID = $_POST['CoffeeID'];
if ((trim($CoffeeID) == '') or (!is_numeric($CoffeeID))) {
   echo "<h2>Sorry, you must enter a valid coffee ID number</h2>\n";
} else {
   $CoffeeName = htmlspecialchars($_POST['CoffeeName']);
   $CoffeeTypeID = htmlspecialchars($_POST['CoffeeTypeID']);
   $CoffeeListPrice = htmlspecialchars($_POST['CoffeeListPrice']);
   $CoffeeDescription = htmlspecialchars($_POST['CoffeeDescription']);
   $CoffeeOrigin = htmlspecialchars($_POST['CoffeeOrigin']);
   $CoffeeRoastLevel = htmlspecialchars($_POST['CoffeeRoastLevel']);
   $CoffeeWholesalePrice = htmlspecialchars($_POST['CoffeeWholesalePrice']);
   $CoffeeCode = htmlspecialchars($_POST['CoffeeCode']);

   $item = new Coffee(
       $CoffeeID,
       $CoffeeCode,
       $CoffeeName,
       $CoffeeDescription,
       $CoffeeOrigin,
       $CoffeeRoastLevel,
       $CoffeeTypeID,
       $CoffeeWholesalePrice,
       $CoffeeListPrice
   );
   $result = $item->saveCoffee();
   if ($result)
       echo "<h2>New coffee #$CoffeeID successfully added</h2>\n";
   else
       echo "<h2>Sorry, there was a problem adding that coffee</h2>\n";
}
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
