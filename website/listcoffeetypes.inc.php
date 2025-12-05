<?php
/*
Deeya Dave
December 05, 2025
IT-202-003 Internet Applications
Phase 5 Assignment: JavaScript
dd594@njit.edu
*/
?>
<script>
    function selectFirstCategory() {
        const select = document.querySelector('select[name="CoffeeTypeID"]');
        if (select && select.options.length > 0) {
            select.selectedIndex = 0;
        }
    }
    selectFirstCategory();
</script>
<script language="javascript">
   function listbox_dblclick() {
       document.coffeetypes.displaycoffeetype.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this coffee type?");
       }
       if (userConfirmed) {
           if (target == 0) coffeetypes.action = "index.php?content=displaycoffeetype";
           if (target == 1) coffeetypes.action = "index.php?content=removecoffeetype";
           if (target == 2) coffeetypes.action = "index.php?content=updatecoffeetype";
       } else {
           alert("Action canceled.");
       }
   }
</script>
<?php
require_once("coffeetype.php");
$categories = Category::getCoffeeTypes();
if ($categories) {
?>
 <h2>Select Coffee Type</h2>
  <form name="coffeetypes" method="post">
   <select ondblclick="listbox_dblclick()" name="CoffeeTypeID" size="20">
       <?php
foreach($categories as $category) {
   $CoffeeTypeID = $category->CoffeeTypeID;
   $name = $CoffeeTypeID . " - " . $category->CoffeeTypeCode . ", " . $category->CoffeeTypeName . ", " . $category->CoffeeTypeAisleNumber;
   echo "<option value=\"$CoffeeTypeID\">$name</option>\n";
}
?>
   </select>
      <br>
   <input type="submit" onClick="button_click(0)" name="displaycoffeetype" value="View Coffee Type">
   <input type="submit" onClick="button_click(1)" name="deletecoffeetype" value="Delete Coffee Type">
   <input type="submit" onClick="button_click(2)" name="updatecoffeetype" value="Update Coffee Type">
  </form>
<?php
} else {
  echo "<h2>No coffee types found.</h2>";
}
?>
