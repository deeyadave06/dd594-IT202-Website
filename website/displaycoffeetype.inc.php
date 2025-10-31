<?php
/*
Deeya Dave
October 31, 2025
IT-202-003 Internet Applications
Phase 3 Assignment: HTML Website Layout
dd594@njit.edu
*/
if (!isset($_REQUEST['CoffeeTypeID']) or (!is_numeric($_REQUEST['CoffeeTypeID']))) {
?>
 <h2>You did not select a valid CoffeeTypeID to view.</h2>
 <a href="index.php?content=listcategories">List Coffee Types</a>
 <?php
} else {
 $CoffeeTypeID = $_REQUEST['CoffeeTypeID'];
 $category = Category::findCoffeeType($CoffeeTypeID);
 if ($category) {
   echo $category;
   $items = Item::getCoffeesByCoffeeType($CoffeeTypeID);
   if ($items) {
 ?>
     <br><br>
     <b>Coffees:</b><br>
     <table>
       <tr>
         <th>Coffee</th>
         <th>Name</th>
         <th>List Price</th>
       </tr>
       <?php
       $itemtotal = 0;
       foreach ($items as $item) {
       ?>
         <tr>
           <td><?php echo $item->CoffeeID; ?></td>
           <td><?php echo $item->CoffeeName; ?></td>
           <td><?php echo '$' . number_format($item->CoffeeListPrice, 2); ?></td>
         </tr>
       <?php
         $itemtotal = $itemtotal + $item->CoffeeListPrice;
       }
       ?>
       <tr>
         <td></td>
         <td>Total</td>
         <td><?php echo '$' . number_format($itemtotal, 2); ?></td>
       </tr>
     </table>
<?php
   } else {
     echo "<h2>There are no coffees for this coffee type</h2>\n";
   }
 } else {
   echo "<h2>Sorry, Coffee Type $CoffeeTypeID not found</h2>\n";
 }
}
?>