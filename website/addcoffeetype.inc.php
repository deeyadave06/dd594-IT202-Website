<?php
/*
Deeya Dave
November 21, 2025
IT-202-003 Internet Applications
Phase 4 Assignment: Input Filtering and CSS Styling
dd594@njit.edu
*/
require_once("coffeetype.php");
if (isset($_SESSION['login'])) {
$CoffeeTypeID = filter_input(INPUT_POST, 'CoffeeTypeID', FILTER_VALIDATE_INT);
if ((trim($CoffeeTypeID) == '') or (!is_int($CoffeeTypeID))) {
  echo "<h2>Sorry, you must enter a valid coffee type ID number</h2>\n";
} else if (Category::findCoffeeType($CoffeeTypeID)) {
       echo "<h2>Sorry, a coffee type with the ID #$CoffeeTypeID already exists</h2>\n";
} else {
  $CoffeeTypeCode = htmlspecialchars($_POST['CoffeeTypeCode']);
  $CoffeeTypeName = htmlspecialchars($_POST['CoffeeTypeName']);
  $CoffeeTypeAisleNumber = htmlspecialchars($_POST['CoffeeTypeAisleNumber']);
  $category = new Category($CoffeeTypeID, $CoffeeTypeCode, $CoffeeTypeName, $CoffeeTypeAisleNumber);
  $result = $category->saveCoffeeType();
  if ($result) {
      echo "<h2>New coffee type #$CoffeeTypeID successfully added</h2>\n";
      echo "<h2>$category</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that coffee type</h2>\n";
  }
}
} else {
   echo "<h2>Please log in first</h2>\n";
}
?>
