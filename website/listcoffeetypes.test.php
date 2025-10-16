<?php
/*
Deeya Dave
October 16, 2025
IT-202-003 Internet Applications
Phase 2 Assignment: CRUD Categories and Items
dd594@njit.edu
*/
require_once("coffeetype.php");
$categories = Category::getCoffeeTypes();
foreach($categories as $category) {
   $CoffeeTypeID = $category->CoffeeTypeID;
   $name = $CoffeeTypeID . " - " . $category->CoffeeTypeCode . ", " . $category->CoffeeTypeName . ", " . $category->CoffeeTypeAisleNumber;
   echo "$name<br>";
}
?>
