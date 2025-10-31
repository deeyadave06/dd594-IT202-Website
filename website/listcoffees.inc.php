<?php
/*
Deeya Dave
October 31, 2025
IT-202-003 Internet Applications
Phase 3 Assignment: HTML Website Layout
dd594@njit.edu
*/
require_once("coffee.php");
$items = Item::getCoffees();
if ($items) {
?>
 <h2>Select Coffee</h2>
  <form name="CoffeeIDs" method="post">
   <select name="CoffeeID" size="20">
       <?php
foreach ($items as $item) {
   $CoffeeID = $item->CoffeeID;
   $CoffeeCode = $item->CoffeeCode;
   $CoffeeName = $item->CoffeeName;
   $CoffeeDescription = $item->CoffeeDescription;
   $CoffeeOrigin = $item->CoffeeOrigin;
   $CoffeeRoastLevel = $item->CoffeeRoastLevel;
   $CoffeeTypeID = $item->CoffeeTypeID;
   $CoffeeWholesalePrice = $item->CoffeeWholesalePrice;
   $CoffeeListPrice = $item->CoffeeListPrice;
   $formattedListPrice = '$' . number_format($CoffeeListPrice, 2);
   $formattedWholesalePrice = '$' . number_format($CoffeeWholesalePrice, 2);
   $option = $CoffeeID . " - " . $CoffeeName . " - " . $formattedListPrice . " - " . $formattedWholesalePrice . " - " . $CoffeeCode . " - " . $CoffeeDescription . " - " . $CoffeeOrigin . " - " . $CoffeeRoastLevel . " - " . $CoffeeTypeID;
   echo "<option value=\"$CoffeeID\">$option</option>\n";
}
?>
   </select>
 </form>
<?php
} else {
  echo "<h2>No coffees found.</h2>";
}
?>
