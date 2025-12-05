<?php
/*
Deeya Dave
November 21, 2025
IT-202-003 Internet Applications
Phase 4 Assignment: Input Filtering and CSS Styling
dd594@njit.edu
*/
require_once("coffee.php");
if (isset($_SESSION['login'])) {
$CoffeeID = $_POST['CoffeeID'];
$answer = $_POST['answer'];
if ($answer == "Update Coffee") {
$item = Coffee::findCoffee($CoffeeID);
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
} else {
       echo "<h2>Update canceled for Coffee $CoffeeID</h2>\n";
   }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>