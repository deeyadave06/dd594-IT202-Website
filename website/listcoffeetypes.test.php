<?php
require_once("coffeetype.php");
$categories = Category::getCoffeeTypes();
foreach($categories as $category) {
   $CoffeeTypeID = $category->CoffeeTypeID;
   $name = $CoffeeTypeID . " - " . $category->CoffeeTypeCode . ", " . $category->CoffeeTypeName . ", " . $category->CoffeeTypeAisleNumber;
   echo "$name<br>";
}
?>
