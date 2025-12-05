<?php
/*
Deeya Dave
November 21, 2025
IT-202-003 Internet Applications
Phase 4 Assignment: Input Filtering and CSS Styling
dd594@njit.edu
*/
require_once('database.php');
class Coffee
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
        $wholesalePrice = number_format($this->CoffeeWholesalePrice, 2);
        $listPrice = number_format($this->CoffeeListPrice, 2);
        $output = "<h2>Coffee ID: $this->CoffeeID</h2>" .
            "<h2>Coffee Code: $this->CoffeeCode</h2>\n" .
            "<h2>Name: $this->CoffeeName</h2>\n" .
            "<h2>Description: $this->CoffeeDescription</h2>\n" .
            "<h2>Origin: $this->CoffeeOrigin</h2>\n" .
            "<h2>Roast Level: $this->CoffeeRoastLevel</h2>\n" .
            "<h2>Wholesale Price: $$wholesalePrice</h2>\n" .
            "<h2>Coffee Type ID: $this->CoffeeTypeID at $$listPrice</h2>\n";
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
               $item = new Coffee(
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
           $item = new Coffee(
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
      static function getCoffeesByCoffeeType($CoffeeTypeID)
   {
       $db = getDB();
       $query = "SELECT * from Coffees where CoffeeTypeID = $CoffeeTypeID";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $coffees = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $coffee = new Coffee(
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
               array_push($coffees, $coffee);
           }
           $db->close();
           return $coffees;
       } else {
           $db->close();
           return NULL;
       }
   }
   static function getTotalCoffees()
   {
       $db = getDB();
       $query = "SELECT COUNT(CoffeeID) FROM Coffees";
       $result = $db->query($query);
       $row = $result->fetch_array();
       if ($row) {
           return $row[0];
       } else {
           return NULL;
       }
   }
static function getTotalListPrice()
{
    $db = getDB();
    $query = "SELECT SUM(CoffeeListPrice) FROM Coffees";
    $result = $db->query($query);
    $row = $result->fetch_array();
    if ($row) {
        return $row[0];
    } else {
        return NULL;
    }
}
static function getTotalWholesalePrice()
{
    $db = getDB();
    $query = "SELECT SUM(CoffeeWholesalePrice) FROM Coffees";
    $result = $db->query($query);
    $row = $result->fetch_array();
    if ($row) {
        return $row[0];
    } else {
        return NULL;
    }
}
}
?>
