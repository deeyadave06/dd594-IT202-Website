<?php
/*
Deeya Dave
October 16, 2025
IT-202-003 Internet Applications
Phase 2 Assignment: CRUD Categories and Items
dd594@njit.edu
*/
require_once('coffee.php');
$CoffeeID = $_POST['CoffeeID'];
if ((trim($CoffeeID) == '') or (!is_numeric($CoffeeID))) {
   echo "<h2>Sorry, you must enter a valid coffee ID number</h2>\n";
} else {
   $CoffeeName = $_POST['CoffeeName'];
   $CoffeeTypeID = $_POST['CoffeeTypeID'];
   $CoffeeListPrice = $_POST['CoffeeListPrice'];
   $CoffeeDescription = $_POST['CoffeeDescription'];
   $CoffeeOrigin = $_POST['CoffeeOrigin'];
   $CoffeeRoastLevel = $_POST['CoffeeRoastLevel'];
   $CoffeeWholesalePrice = $_POST['CoffeeWholesalePrice'];
   $CoffeeCode = $_POST['CoffeeCode'];

   $item = new Item(
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
?>
