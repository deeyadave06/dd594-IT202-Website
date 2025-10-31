<?php
/*
Deeya Dave
October 31, 2025
IT-202-003 Internet Applications
Phase 3 Assignment: HTML Website Layout
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
           <td><input type="text" name="CoffeeID" size="4"></td>
       </tr>
       <tr>
           <td>Coffee Name:</td>
           <td><input type="text" name="CoffeeName" size="20"></td>
       </tr>
       <tr>
           <td>Coffee Type ID:</td>
           <td><input type="text" name="CoffeeTypeID" size="4"></td>
        </tr>
        <tr>
           <td>Coffee Code:</td>
           <td><input type="text" name="CoffeeCode" size="4"></td>
        </tr>
        <tr>
           <td>Coffee Description:</td>
           <td><input type="text" name="CoffeeDescription" size="4"></td>
        </tr>
        <tr>
           <td>Coffee Origin:</td>
           <td><input type="text" name="CoffeeOrigin" size="4"></td>
        </tr>
        <tr>
           <td>Coffee Roast Level:</td>
           <td><input type="text" name="CoffeeRoastLevel" size="4"></td>
        </tr>
        <tr>
           <td>Coffee Wholesale Price:</td>
           <td><input type="text" name="CoffeeWholesalePrice" size="4"></td>
       </tr>
       <tr>
           <td>Coffee List Price:</td>
           <td><input type="text" name="CoffeeListPrice" size="10"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Coffee">
   <input type="hidden" name="content" value="addcoffee">
</form>