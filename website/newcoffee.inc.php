<?php
/*
Deeya Dave
December 05, 2025
IT-202-003 Internet Applications
Phase 5 Assignment: JavaScript
dd594@njit.edu
*/
?>

<h1>Deeya's Coffee Shop</h1>
<h2>Inventory Management</h2>
<h2>Enter New Coffee Information</h2>
<form name="newcoffee" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Coffee ID:</td>
           <td><input type="number" name="CoffeeID" size="4" min="1" max="50000" required></td>
       </tr>
       <tr>
           <td>Coffee Name:</td>
           <td><input type="text" name="CoffeeName" size="20" minlength="10" maxlength="100" required></td>
       </tr>
       <tr>
           <td>Coffee Type ID:</td>
           <td><input type="number" name="CoffeeTypeID" size="4" min="1" max="100000" required></td>
        </tr>
        <tr>
           <td>Coffee Code:</td>
           <td><input type="text" name="CoffeeCode" size="4" minlength="3" maxlength="10" required></td>
        </tr>
        <tr>
           <td>Coffee Description:</td>
           <td><input type="text" name="CoffeeDescription" size="4" minlength="100" maxlength="255" required></td>
        </tr>
        <tr>
           <td>Coffee Origin:</td>
           <td><input type="text" name="CoffeeOrigin" size="4" minlength="1" maxlength="50" required></td>
        </tr>
        <tr>
           <td>Coffee Roast Level:</td>
           <td><input type="text" name="CoffeeRoastLevel" size="4" minlength="1" maxlength="50" required></td>
        </tr>
        <tr>
           <td>Coffee Wholesale Price:</td>
           <td><input type="number" name="CoffeeWholesalePrice" size="4" min="1" max="500" step="0.01" required></td>
       </tr>
       <tr>
           <td>Coffee List Price:</td>
           <td><input type="number" name="CoffeeListPrice" size="10" min="1" max="600" step="0.01" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Coffee">
   <input type="hidden" name="content" value="addcoffee">
</form>