<?php
/*
Deeya Dave
December 05, 2025
IT-202-003 Internet Applications
Phase 5 Assignment: JavaScript
dd594@njit.edu
*/
?>
<style>
   form[name="coffeetype"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   form[name="coffeetype"] label {
       text-align: left;
       padding-right: 5px;
   }
   form[name="coffeetype"] input[type="text"] {
       width: 100%;
   }
   form[name="coffeetype"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>
<?php
$CoffeeTypeID = $_POST['CoffeeTypeID'];
$coffeetype = Category::findCoffeeType($CoffeeTypeID);
if ($coffeetype) {
?>
   <h2>Update Coffee Type <?php echo $CoffeeTypeID; ?></h2><br>
   <form name="coffeetype" action="index.php" method="post">
       <label for="CoffeeTypeCode">Coffee Type Code:</label>
       <input type="text" name="CoffeeTypeCode" id="CoffeeTypeCode" value="<?php echo $coffeetype->CoffeeTypeCode; ?>">
       <label for="CoffeeTypeName">Coffee Type Name:</label>
       <input type="text" name="CoffeeTypeName" id="CoffeeTypeName" value="<?php echo $coffeetype->CoffeeTypeName; ?>">
       <label for="CoffeeTypeAisleNumber">Aisle Number:</label>
       <input type="text" name="CoffeeTypeAisleNumber" id="CoffeeTypeAisleNumber" value="<?php echo $coffeetype->CoffeeTypeAisleNumber; ?>">
       <input type="submit" name="answer" value="Update Coffee Type">
       <input type="submit" name="answer" value="Cancel">
       <input type="hidden" name="CoffeeTypeID" value="<?php echo $CoffeeTypeID; ?>">
       <input type="hidden" name="content" value="changecoffeetype">
   </form>
<?php
} else {
?>
   <h2>Sorry, coffee type <?php echo $CoffeeTypeID; ?> not found</h2>
   <a href="index.php?content=listcoffeetypes">List Coffee Types</a>
<?php
}
?>
<script language="javascript">
   document.coffeetype.CoffeeTypeCode.focus();
   document.coffeetype.CoffeeTypeCode.select();
</script>