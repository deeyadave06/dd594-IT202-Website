<?php
ob_start();
include("coffeetype.php");
include("coffee.php");
$totalCategories = Category::getTotalCoffeeTypes();
$totalItems = Coffee::getTotalCoffees();
$listpricetotal = Coffee::getTotalListPrice();
$wholesalepricetotal = Coffee::getTotalWholesalePrice();
$doc = new DOMDocument("1.0");
$inventoryElement = $doc->createElement("inventory");
$inventoryElement = $doc->appendChild($inventoryElement);
// Add <categories> XML element with value
$categoriesElement = $doc->createElement("categories", $totalCategories);
$categoriesElement = $inventoryElement->appendChild($categoriesElement);
// Add <items> XML element with value
$itemsElement = $doc->createElement("items", $totalItems);
$itemsElement = $inventoryElement->appendChild($itemsElement);

$wholesaleElement = $doc->createElement("wholesalepricetotal", $wholesalepricetotal);
$wholesaleElement = $inventoryElement->appendChild($wholesaleElement);
// Add <listpricetotal> XML element with value
$listpricetotalElement = $doc->createElement("listpricetotal", $listpricetotal);
$listpricetotalElement = $inventoryElement->appendChild($listpricetotalElement);
$output = $doc->saveXML();
header("Content-type: application/xml");
ob_end_clean();
echo $output;
?>