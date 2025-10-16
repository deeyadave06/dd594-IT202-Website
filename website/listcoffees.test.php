<?php
require_once("coffee.php");
$items = Item::getCoffees();
foreach ($items as $item) {
   $CoffeeID = $item->CoffeeID;
   $CoffeeName = $item->CoffeeName;
   $CoffeeListPrice = $item->CoffeeListPrice;
   $CoffeeWholesalePrice = $item->CoffeeWholesalePrice;
   $CoffeeCode = $item->CoffeeCode;
   $CoffeeDescription = $item->CoffeeDescription;
   $CoffeeOrigin = $item->CoffeeOrigin;
   $CoffeeRoastLevel = $item->CoffeeRoastLevel;
   $CoffeeTypeID = $item->CoffeeTypeID;
   $option = $CoffeeID . " - " . $CoffeeName . " - " . $CoffeeListPrice . " - " . $CoffeeWholesalePrice . " - " . $CoffeeCode . " - " . $CoffeeDescription . " - " . $CoffeeOrigin . " - " . $CoffeeRoastLevel . " - " . $CoffeeTypeID;
   echo "$option<br>";
}
?>
