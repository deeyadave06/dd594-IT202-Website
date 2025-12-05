<?php
/*
Deeya Dave
December 05, 2025
IT-202-003 Internet Applications
Phase 5 Assignment: JavaScript
dd594@njit.edu
*/
require_once("coffee.php");
if (isset($_SESSION['login'])){
$CoffeeID = $_POST['CoffeeID'];
$item = Coffee::findCoffee($CoffeeID);
$result = $item->removeCoffee();
if ($result)
   echo "<h2>Coffee $CoffeeID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing coffee $CoffeeID</h2>\n";
} else {
   echo "<h2>Please log in first.</h2>\n";
}
?>
