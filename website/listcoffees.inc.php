<?php
/*
Deeya Dave
December 05, 2025
IT-202-003 Internet Applications
Phase 5 Assignment: JavaScript
dd594@njit.edu
*/
?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
 function listbox_dblclick() {
   document.coffees.displaycoffee.click();
 }


 function button_click(target) {
   var userConfirmed = true;
   if (target == 1) {
     userConfirmed = confirm("Are you sure you want to remove this coffee?");
   }
   if (userConfirmed) {
     var $form = $('form[name="coffees"]');
     if (target == 0) coffees.action = 'index.php?content=displaycoffee';
     if (target == 1) coffees.action = 'index.php?content=removecoffee';
     if (target == 2) coffees.action = 'index.php?content=updatecoffee';
   } else {
     alert("Action canceled.");
   }
 }
</script>
<?php
require_once("coffee.php");
$items = Coffee::getCoffees();
if ($items) {
?>
 <h2>Select Coffee</h2>
  <form name="coffees" method="post">
   <select name="CoffeeID" size="20">
       <?php
foreach ($items as $item) {
   $CoffeeID = $item->CoffeeID;
   $CoffeeCode = $item->CoffeeCode;
   $CoffeeName = $item->CoffeeName;
   $CoffeeDescription = $item->CoffeeDescription;
   $CoffeeOrigin = $item->CoffeeOrigin;
   $CoffeeRoastLevel = $item->CoffeeRoastLevel;
   $CoffeeTypeID = $item->CoffeeTypeID;
   $CoffeeWholesalePrice = $item->CoffeeWholesalePrice;
   $CoffeeListPrice = $item->CoffeeListPrice;
   $formattedListPrice = '$' . number_format($CoffeeListPrice, 2);
   $formattedWholesalePrice = '$' . number_format($CoffeeWholesalePrice, 2);
   $option = $CoffeeID . " - " . $CoffeeName . " - " . $formattedListPrice . " - " . $formattedWholesalePrice . " - " . $CoffeeCode . " - " . $CoffeeDescription . " - " . $CoffeeOrigin . " - " . $CoffeeRoastLevel . " - " . $CoffeeTypeID;
   echo "<option value=\"$CoffeeID\">$option</option>\n";
}
?>
   </select>
   <br>
  <input type="submit" name="displaycoffee" value="View Coffee">
  <input type="submit" name="deletecoffee" value="Delete Coffee">
  <input type="submit" name="updatecoffee" value="Update Coffee">
 </form>
<?php
} else {
  echo "<h2>No coffees found.</h2>";
}
?>
<script>
 jQuery(document).ready(function() {
   $('select[name="CoffeeID"]').on('dblclick', listbox_dblclick);
   $('input[name="displaycoffee"]').on('click', function() {
     button_click(0);
   });
   $('input[name="deletecoffee"]').on('click', function() {
     button_click(1);
   });
   $('input[name="updatecoffee"]').on('click', function() {
     button_click(2);
   });
 });
 function selectFirstItem() {
   var $select = $('select[name="CoffeeID"]');
   if ($select.length && $select[0].options.length > 0) {
     $select.prop('selectedIndex', 0);
   }
 }
 selectFirstItem();
</script>