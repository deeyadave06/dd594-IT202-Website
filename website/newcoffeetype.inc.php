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
<h2>Enter New Coffee Type Information</h2>
<form name="newcoffeetype" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Coffee Type ID:</td>
           <td><input type="text" name="CoffeeTypeID" size="4"></td>
       </tr>
       <tr>
           <td>Coffee Type Code:</td>
           <td><input type="text" name="CoffeeTypeCode" size="20"></td>
       </tr>
       <tr>
           <td>Coffee Type Name:</td>
           <td><input type="text" name="CoffeeTypeName" size="50"></td>
        </tr>
        <tr>
           <td>Coffee Type Aisle Number:</td>
           <td><input type="text" name="CoffeeTypeAisleNumber" size="50"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Coffee Type">
   <input type="hidden" name="content" value="addcoffeetype">
</form>