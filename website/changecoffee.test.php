<?php
/*
Deeya Dave
October 16, 2025
IT-202-003 Internet Applications
Phase 2 Assignment: CRUD Categories and Items
dd594@njit.edu
*/
require_once("coffee.php");
$CoffeeID = $_POST['CoffeeID'];
$item = Item::findCoffee($CoffeeID);
$item->CoffeeID = $_POST['CoffeeID'];
$item->CoffeeName = $_POST['CoffeeName'];
$item->CoffeeTypeID = $_POST['CoffeeTypeID'];
$item->CoffeeListPrice = $_POST['CoffeeListPrice'];
$item->CoffeeWholesalePrice = $_POST['CoffeeWholesalePrice'];
$item->CoffeeCode = $_POST['CoffeeCode'];
$item->CoffeeDescription = $_POST['CoffeeDescription'];
$item->CoffeeOrigin = $_POST['CoffeeOrigin'];
$item->CoffeeRoastLevel = $_POST['CoffeeRoastLevel'];
$result = $item->updateCoffee();
if ($result) {
   echo "<h2>Coffee $CoffeeID updated</h2>\n";
} else {
   echo "<h2>Problem updating coffee $CoffeeID</h2>\n";
}
?>
