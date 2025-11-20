<?php
/*
Deeya Dave
November 21, 2025
IT-202-003 Internet Applications
Phase 4 Assignment: Input Filtering and CSS Styling
dd594@njit.edu
*/
if (!isset($_POST['CoffeeID']) or (!is_numeric($_POST['CoffeeID']))) {
?>
   <h2>You did not select a valid CoffeeID value</h2>
   <a href="index.php?content=listitems">List Coffees</a>
   <?php
} else {
   $CoffeeID = $_POST['CoffeeID'];
   $Coffee = Item::findCoffee($CoffeeID);
   if ($Coffee) {
   ?>
       <h2>Update Coffee <?php echo $Coffee->CoffeeID; ?></h2><br>
       <form name="coffees" action="index.php" method="post">
           <table>
               <tr>
                   <td>CoffeeID</td>
                   <td><?php echo $Coffee->CoffeeID; ?></td>
               </tr>
               <tr>
                   <td>Coffee Name</td>
                   <td><input type="text" name="CoffeeName" value="<?php echo $Coffee->CoffeeName; ?>"></td>
               </tr>
               <tr>
                   <td>Coffee Type ID</td>
               <td><input type="number" name="CoffeeTypeID" value="<?php echo $Coffee->CoffeeTypeID; ?>"></td>
               </tr>
               <tr>
                <td>Coffee Code</td>
                   <td><input type="text" name="CoffeeCode" value="<?php echo $Coffee->CoffeeCode; ?>"></td>
               </tr>
               <tr>
                <td>Coffee Description</td>
                   <td><input type="text" name="CoffeeDescription" value="<?php echo $Coffee->CoffeeDescription; ?>"></td>
                   </tr>
               <tr>
                   <td>Coffee Origin</td>
                   <td><input type="text" name="CoffeeOrigin" value="<?php echo $Coffee->CoffeeOrigin; ?>"></td>
                </tr>
               <tr>
                   <td>Coffee Roast Level</td>
                   <td><input type="text" name="CoffeeRoastLevel" value="<?php echo $Coffee->CoffeeRoastLevel; ?>"></td>
               </tr>
               <tr>
                <td>Coffee Wholesale Price</td>
                   <td><input type="number" name="CoffeeWholesalePrice" value="<?php echo $Coffee->CoffeeWholesalePrice; ?>"></td>
               </tr>
               <tr>
                   <td>List Price</td>
                 <td><input type="number" name="CoffeeListPrice" value="<?php echo $Coffee->CoffeeListPrice; ?>"></td>
               </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Coffee">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="CoffeeID" value="<?php echo $CoffeeID; ?>">
           <input type="hidden" name="content" value="changecoffee">
       </form>
   <?php
   } else {
   ?>
       <h2>Sorry, coffee <?php echo $CoffeeID; ?> not found</h2>
       <a href="index.php?content=listcoffees">List coffees</a>
<?php
   }
}
?>