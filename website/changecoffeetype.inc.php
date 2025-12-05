<?php
/*
Deeya Dave
November 21, 2025
IT-202-003 Internet Applications
Phase 4 Assignment: Input Filtering and CSS Styling
dd594@njit.edu
*/
require_once("coffeetype.php");
if (isset($_SESSION['login'])){
$CoffeeTypeID = $_POST['CoffeeTypeID'];
$answer = $_POST['answer'];
if ($answer == "Update Coffee Type") {
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
} else {
   echo "<h2>Update cancelled for coffee type #$CoffeeTypeID</h2>\n";
}
} else {
   echo "<h2>Please login first.</h2>\n";
}
?>
