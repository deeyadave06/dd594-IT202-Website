<?php
/*
Deeya Dave
October 16, 2025
IT-202-003 Internet Applications
Phase 2 Assignment: CRUD Categories and Items
dd594@njit.edu
*/
require_once("coffeetype.php");
$CoffeeTypeID = $_POST['CoffeeTypeID'];
$category = Category::findCoffeeType($CoffeeTypeID);
$category->CoffeeTypeID = $_POST['CoffeeTypeID'];
$category->CoffeeTypeCode = $_POST['CoffeeTypeCode'];
$category->CoffeeTypeName = $_POST['CoffeeTypeName'];
$category->CoffeeTypeAisleNumber = $_POST['CoffeeTypeAisleNumber'];
$result = $category->updateCoffeeType();
if ($result) {
   echo "<h2>Coffee type #$CoffeeTypeID updated</h2>\n";
} else {
   echo "<h2>Problem updating Coffee type #$CoffeeTypeID</h2>\n";
}
?>
