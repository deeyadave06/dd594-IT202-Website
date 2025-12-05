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
<h2>Enter New Coffee Type Information</h2>
<form name="newcoffeetype" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Coffee Type ID:</td>
           <td><input type="number" name="CoffeeTypeID" size="4" min="1" max="999" required></td>
       </tr>
       <tr>
           <td>Coffee Type Code:</td>
           <td><input type="text" name="CoffeeTypeCode" placeholder="XXX" minlength="3" maxlength="10" required></td>
       </tr>
       <tr>
           <td>Coffee Type Name:</td>
           <td><input type="text" name="CoffeeTypeName" size="50" minlength="10" maxlength="100" required></td>
        </tr>
        <tr>
           <td>Coffee Type Aisle Number:</td>
           <td><input type="text" name="CoffeeTypeAisleNumber" size="50" minlength="1" maxlength="10" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Coffee Type">
   <input type="hidden" name="content" value="addcoffeetype">
</form>