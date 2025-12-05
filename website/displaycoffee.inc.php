<?php
if (!isset($_REQUEST['CoffeeID']) or (!is_numeric($_REQUEST['CoffeeID']))) {
?>
 <h2>You did not select a valid CoffeeID to view.</h2>
 <a href="index.php?content=listcoffees">List Coffees</a>
 <?php
} else {
 $CoffeeID = $_REQUEST['CoffeeID'];
 $coffee = Coffee::findCoffee($CoffeeID);
 if ($coffee) {
 ?>
   <h2>Coffee ID: <?php echo $coffee->CoffeeID; ?></h2>
   <h2>Coffee Name: <?php echo $coffee->CoffeeName; ?></h2>
   <h2>Coffee List Price: <?php echo $coffee->CoffeeListPrice; ?></h2>
   <h2>Coffee Wholesale Price: <?php echo $coffee->CoffeeWholesalePrice; ?></h2>
   <h2>Coffee Code: <?php echo $coffee->CoffeeCode; ?></h2>
    <h2>Coffee Description: <?php echo $coffee->CoffeeDescription; ?></h2>
    <h2>Coffee Origin: <?php echo $coffee->CoffeeOrigin; ?></h2>
    <h2>Coffee Roast Level: <?php echo $coffee->CoffeeRoastLevel; ?></h2>
    <h2>Coffee Type ID: <?php echo $coffee->CoffeeTypeID; ?></h2>
   <br>
<?php
 } else {
   echo "<h2>Sorry, coffee not found.</h2>\n";
 }
}
?>