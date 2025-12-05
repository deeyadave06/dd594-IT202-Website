<?php
/*
Deeya Dave
November 21, 2025
IT-202-003 Internet Applications
Phase 4 Assignment: Input Filtering and CSS Styling
dd594@njit.edu
*/
require_once('database.php');
class Category
{
   public $CoffeeTypeID;
   public $CoffeeTypeCode;
   public $CoffeeTypeName;
   public $CoffeeTypeAisleNumber;
   function __construct($CoffeeTypeID, $CoffeeTypeCode, $CoffeeTypeName, $CoffeeTypeAisleNumber)
   {
       $this->CoffeeTypeID = $CoffeeTypeID;
       $this->CoffeeTypeCode = $CoffeeTypeCode;
       $this->CoffeeTypeName = $CoffeeTypeName;
       $this->CoffeeTypeAisleNumber = $CoffeeTypeAisleNumber;
   }
   function __toString()
   {
       $output = "<h2>Coffee Type ID Number: $this->CoffeeTypeID</h2>\n" .
           "<h2>$this->CoffeeTypeCode, $this->CoffeeTypeName, $this->CoffeeTypeAisleNumber</h2>\n";
       return $output;
   }
function saveCoffeeType()
   {
       $db = getDB();
       $query = "INSERT INTO CoffeeTypes (CoffeeTypeID, CoffeeTypeCode, CoffeeTypeName, CoffeeTypeAisleNumber) VALUES (?, ?, ?, ?)";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issi",
           $this->CoffeeTypeID,
           $this->CoffeeTypeCode,
           $this->CoffeeTypeName,
           $this->CoffeeTypeAisleNumber
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   static function getCoffeeTypes()
   {
       $db = getDB();
       $query = "SELECT * FROM CoffeeTypes";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $categories = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $category = new Category(
                   $row['CoffeeTypeID'],
                   $row['CoffeeTypeCode'],
                   $row['CoffeeTypeName'],
                   $row['CoffeeTypeAisleNumber']
               );
               array_push($categories, $category);
               unset($category);
           }
           $db->close();
           return $categories;
       } else {
           $db->close();
           return NULL;
       }
   }
static function findCoffeeType($CoffeeTypeID)
   {
       $db = getDB();
       $query = "SELECT * FROM CoffeeTypes WHERE CoffeeTypeID = $CoffeeTypeID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $category = new Category(
               $row['CoffeeTypeID'],
               $row['CoffeeTypeCode'],
               $row['CoffeeTypeName'],
               $row['CoffeeTypeAisleNumber']
           );
           $db->close();
           return $category;
       } else {
           $db->close();
           return NULL;
       }
   }
function updateCoffeeType()
   {
       $db = getDB();
       $query = "UPDATE CoffeeTypes SET CoffeeTypeID= ?, " .
           "CoffeeTypeCode= ?, CoffeeTypeName= ?, CoffeeTypeAisleNumber= ? " .
           "WHERE CoffeeTypeID = $this->CoffeeTypeID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issi",
           $this->CoffeeTypeID,
           $this->CoffeeTypeCode,
           $this->CoffeeTypeName,
           $this->CoffeeTypeAisleNumber
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
function removeCoffeeType()
   {
       $db = getDB();
       $query = "DELETE FROM CoffeeTypes WHERE CoffeeTypeID = $this->CoffeeTypeID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }
static function getTotalCoffeeTypes()
{
   $db = getDB();
   $query = "SELECT COUNT(CoffeeTypeID) FROM CoffeeTypes";
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
