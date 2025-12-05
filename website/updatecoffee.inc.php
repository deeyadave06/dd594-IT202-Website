<?php 
/*
Deeya Dave
December 05, 2025
IT-202-003 Internet Applications
Phase 5 Assignment: JavaScript
dd594@njit.edu
*/

if (!isset($_POST['CoffeeID']) || !is_numeric($_POST['CoffeeID'])) {
    ?>
    <h2>You did not select a valid CoffeeID value</h2>
    <a href="index.php?content=listitems">List Coffees</a>
    <?php
}

$CoffeeID = $_POST['CoffeeID'] ?? null;
$Coffee = Coffee::findCoffee($CoffeeID);

if (!$Coffee) {
    ?>
    <h2>Sorry, coffee <?php echo $CoffeeID; ?> not found</h2>
    <a href="index.php?content=listcoffees">List coffees</a>
    <?php
}

if (isset($_POST['answer']) && $_POST['answer'] === 'Update Coffee') {

    $errors = [];

    $CoffeeTypeID = filter_input(INPUT_POST, 'CoffeeTypeID', FILTER_VALIDATE_INT);
    $CoffeeWholesalePrice = filter_input(INPUT_POST, 'CoffeeWholesalePrice', FILTER_VALIDATE_FLOAT);
    $CoffeeListPrice = filter_input(INPUT_POST, 'CoffeeListPrice', FILTER_VALIDATE_FLOAT);

    if ($CoffeeTypeID === false) $errors[] = "Coffee Type ID must be a number";
    if ($CoffeeWholesalePrice === false) $errors[] = "Wholesale Price must be a number";
    if ($CoffeeListPrice === false) $errors[] = "List Price must be a number";

    $CoffeeName = $_POST['CoffeeName'] ?? '';
    $CoffeeCode = $_POST['CoffeeCode'] ?? '';
    $CoffeeDescription = $_POST['CoffeeDescription'] ?? '';
    $CoffeeOrigin = $_POST['CoffeeOrigin'] ?? '';
    $CoffeeRoastLevel = $_POST['CoffeeRoastLevel'] ?? '';

    if (empty($CoffeeName)) $errors[] = "Coffee Name cannot be blank";
    if (empty($CoffeeCode)) $errors[] = "Coffee Code cannot be blank";
    if (empty($CoffeeDescription)) $errors[] = "Coffee Description cannot be blank";

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        $Coffee->CoffeeName = $CoffeeName;
        $Coffee->CoffeeTypeID = $CoffeeTypeID;
        $Coffee->CoffeeCode = $CoffeeCode;
        $Coffee->CoffeeDescription = $CoffeeDescription;
        $Coffee->CoffeeOrigin = $CoffeeOrigin;
        $Coffee->CoffeeRoastLevel = $CoffeeRoastLevel;
        $Coffee->CoffeeWholesalePrice = $CoffeeWholesalePrice;
        $Coffee->CoffeeListPrice = $CoffeeListPrice;

        $Coffee->updateCoffee();
        echo "<p style='color:green;'>Coffee updated successfully!</p>";
    }
}
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
            <td><input type="text" name="CoffeeName" value="<?php echo htmlspecialchars($_POST['CoffeeName'] ?? $Coffee->CoffeeName); ?>"></td>
        </tr>
        <tr>
            <td>Coffee Type ID</td>
            <td><input type="number" name="CoffeeTypeID" value="<?php echo $_POST['CoffeeTypeID'] ?? $Coffee->CoffeeTypeID; ?>"></td>
        </tr>
        <tr>
            <td>Coffee Code</td>
            <td><input type="text" name="CoffeeCode" value="<?php echo htmlspecialchars($_POST['CoffeeCode'] ?? $Coffee->CoffeeCode); ?>"></td>
        </tr>
        <tr>
            <td>Coffee Description</td>
            <td><input type="text" name="CoffeeDescription" value="<?php echo htmlspecialchars($_POST['CoffeeDescription'] ?? $Coffee->CoffeeDescription); ?>"></td>
        </tr>
        <tr>
            <td>Coffee Origin</td>
            <td><input type="text" name="CoffeeOrigin" value="<?php echo htmlspecialchars($_POST['CoffeeOrigin'] ?? $Coffee->CoffeeOrigin); ?>"></td>
        </tr>
        <tr>
            <td>Coffee Roast Level</td>
            <td><input type="text" name="CoffeeRoastLevel" value="<?php echo htmlspecialchars($_POST['CoffeeRoastLevel'] ?? $Coffee->CoffeeRoastLevel); ?>"></td>
        </tr>
        <tr>
            <td>Coffee Wholesale Price</td>
            <td><input type="number" step="0.01" name="CoffeeWholesalePrice" value="<?php echo $_POST['CoffeeWholesalePrice'] ?? $Coffee->CoffeeWholesalePrice; ?>"></td>
        </tr>
        <tr>
            <td>List Price</td>
            <td><input type="number" step="0.01" name="CoffeeListPrice" value="<?php echo $_POST['CoffeeListPrice'] ?? $Coffee->CoffeeListPrice; ?>"></td>
        </tr>
    </table><br><br>
    <input type="submit" name="answer" value="Update Coffee">
    <input type="submit" name="answer" value="Cancel">
    <input type="hidden" name="CoffeeID" value="<?php echo $CoffeeID; ?>">
    <input type="hidden" name="content" value="changecoffee">
</form>
