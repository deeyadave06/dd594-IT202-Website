<?php
/*
Deeya Dave
October 31, 2025
IT-202-003 Internet Applications
Phase 3 Assignment: HTML Website Layout
dd594@njit.edu
*/
require_once("coffeetype.php");
$categories = Category::getCoffeeTypes();
if ($categories) {
?>
 <h2>Select Coffee Type</h2>
  <form name="coffeetypes" method="post">
   <select name="CoffeeTypeID" size="20">
       <?php
foreach($categories as $category) {
   $CoffeeTypeID = $category->CoffeeTypeID;
   $name = $CoffeeTypeID . " - " . $category->CoffeeTypeCode . ", " . $category->CoffeeTypeName . ", " . $category->CoffeeTypeAisleNumber;
   echo "<option value=\"$CoffeeTypeID\">$name</option>\n";
}
?>
   </select>
  </form>
<?php
} else {
  echo "<h2>No coffee types found.</h2>";
}
?>
