<?php
/*
Deeya Dave
October 31, 2025
IT-202-003 Internet Applications
Phase 3 Assignment: HTML Website Layout
dd594@njit.edu
*/
require_once("coffee.php");
$CoffeeID = $_POST['CoffeeID'];
$item = Item::findCoffee($CoffeeID);
$result = $item->removeCoffee();
if ($result)
   echo "<h2>Coffee $CoffeeID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing coffee $CoffeeID</h2>\n";
?>
