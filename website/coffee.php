<?php
/*
Deeya Dave
October 16, 2025
IT-202-003 Internet Applications
Phase 2 Assignment: CRUD Categories and Items
dd594@njit.edu
*/
require_once('database.php');
class Item
{
    public $CoffeeID;
    public $CoffeeCode;
    public $CoffeeName;
    public $CoffeeDescription;
    public $CoffeeOrigin;
    public $CoffeeRoastLevel;
    public $CoffeeTypeID;
    public $CoffeeWholesalePrice;
    public $CoffeeListPrice;

   function __construct(
        $CoffeeID,
        $CoffeeCode,
        $CoffeeName,
        $CoffeeDescription,
        $CoffeeOrigin,
        $CoffeeRoastLevel,
        $CoffeeTypeID,
        $CoffeeWholesalePrice,
        $CoffeeListPrice
       ) {
       $this->CoffeeID = $CoffeeID;
        $this->CoffeeCode = $CoffeeCode;
        $this->CoffeeName = $CoffeeName;
        $this->CoffeeDescription = $CoffeeDescription;
        $this->CoffeeOrigin = $CoffeeOrigin;
        $this->CoffeeRoastLevel = $CoffeeRoastLevel;
        $this->CoffeeTypeID = $CoffeeTypeID;
        $this->CoffeeWholesalePrice = $CoffeeWholesalePrice;
        $this->CoffeeListPrice = $CoffeeListPrice;
   }
   function __toString()
   {
       $output = "<h2>Coffee ID: $this->CoffeeID</h2>" .
            "<h2>Coffee Code: $this->CoffeeCode</h2>\n" .
            "<h2>Name: $this->CoffeeName</h2>\n" .
            "<h2>Description: $this->CoffeeDescription</h2>\n" .
            "<h2>Origin: $this->CoffeeOrigin</h2>\n" .
            "<h2>Roast Level: $this->CoffeeRoastLevel</h2>\n" .
            "<h2>Wholesale Price: $this->CoffeeWholesalePrice</h2>\n" .
            "<h2>Coffee Type ID: $this->CoffeeTypeID at $this->CoffeeListPrice</h2>\n";
       return $output;
   }
   function saveCoffee()
   {
       $db = getDB();
       $query = "INSERT INTO Coffees (CoffeeID, CoffeeCode, CoffeeName, CoffeeDescription, CoffeeOrigin, CoffeeRoastLevel, CoffeeTypeID, CoffeeWholesalePrice, CoffeeListPrice) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "isssssidd",
           $this->CoffeeID,     
           $this->CoffeeCode,
           $this->CoffeeName,  
           $this->CoffeeDescription,
           $this->CoffeeOrigin,
           $this->CoffeeRoastLevel,
           $this->CoffeeTypeID,
           $this->CoffeeWholesalePrice, 
           $this->CoffeeListPrice   
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   static function getCoffees()
   {
       $db = getDB();
       $query = "SELECT * FROM Coffees";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $items = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $item = new Item(
                   $row['CoffeeID'],
                    $row['CoffeeCode'],
                    $row['CoffeeName'],
                    $row['CoffeeDescription'],
                    $row['CoffeeOrigin'],
                    $row['CoffeeRoastLevel'],
                    $row['CoffeeTypeID'],
                    $row['CoffeeWholesalePrice'],
                    $row['CoffeeListPrice']
               );
               array_push($items, $item);
           }
           $db->close();
           return $items;
       } else {
           $db->close();
           return NULL;
       }
   }
   static function findCoffee($CoffeeID)
   {
       $db = getDB();
       $query = "SELECT * FROM Coffees WHERE CoffeeID = $CoffeeID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $item = new Item(
               $row['CoffeeID'],
                $row['CoffeeCode'],
                $row['CoffeeName'],
                $row['CoffeeDescription'],
                $row['CoffeeOrigin'],
                $row['CoffeeRoastLevel'],
                $row['CoffeeTypeID'],
                $row['CoffeeWholesalePrice'],
                $row['CoffeeListPrice']
           );
           $db->close();
           return $item;
       } else {
           $db->close();
           return NULL;
       }
   }
function updateCoffee()
   {
       $db = getDB();
       $query = "UPDATE Coffees SET CoffeeCode = ?, CoffeeName = ?, CoffeeDescription = ?, CoffeeOrigin = ?,
            CoffeeRoastLevel = ?, CoffeeTypeID = ?, CoffeeWholesalePrice = ?, CoffeeListPrice = ? WHERE CoffeeID = ?";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "sssssiddi",
            $this->CoffeeCode,
            $this->CoffeeName,
            $this->CoffeeDescription,
            $this->CoffeeOrigin,
            $this->CoffeeRoastLevel,
            $this->CoffeeTypeID,
            $this->CoffeeWholesalePrice,
            $this->CoffeeListPrice,
            $this->CoffeeID
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   function removeCoffee()
   {
       $db = getDB();
       $query = "DELETE FROM Coffees WHERE CoffeeID = $this->CoffeeID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }

}
?>
