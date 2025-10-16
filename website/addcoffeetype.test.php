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
if ((trim($CoffeeTypeID) == '') or (!is_numeric($CoffeeTypeID))) {
  echo "<h2>Sorry, you must enter a valid coffee type ID number</h2>\n";
} else {
  $CoffeeTypeCode = $_POST['CoffeeTypeCode'];
  $CoffeeTypeName = $_POST['CoffeeTypeName'];
  $CoffeeTypeAisleNumber = $_POST['CoffeeTypeAisleNumber'];
  $category = new Category($CoffeeTypeID, $CoffeeTypeCode, $CoffeeTypeName, $CoffeeTypeAisleNumber);
  $result = $category->saveCoffeeType();
  if ($result) {
      echo "<h2>New coffee type #$CoffeeTypeID successfully added</h2>\n";
      echo "<h2>$category</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that coffee type</h2>\n";
  }
}
?>
