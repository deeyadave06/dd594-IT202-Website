<?php
/*
Deeya Dave
October 16, 2025
IT-202-003 Internet Applications
Phase 2 Assignment: CRUD Categories and Items
dd594@njit.edu
*/
error_log("\$_POST " . print_r($_POST, true));
require_once("coffeetype.php");
$CoffeeTypeID = $_POST['CoffeeTypeID'];
$category = Category::findCoffeeType($CoffeeTypeID);
$result = $category->removeCoffeeType();
if ($result)
   echo "<h2>Coffee type #$CoffeeTypeID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing coffee type #$CoffeeTypeID</h2>\n";
?>
