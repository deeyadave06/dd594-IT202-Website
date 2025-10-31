<?php
/*
Deeya Dave
October 31, 2025
IT-202-003 Internet Applications
Phase 3 Assignment: HTML Website Layout
dd594@njit.edu
*/
 function getDB() {
   $host = 'sql1.njit.edu';
   $port = 3306;
   $dbname = 'dd594';
   $username = 'dd594';
   $password = 'DDphp_0726';
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  try {
   $db = new mysqli($host, $username, $password, $dbname, $port);
   error_log("You are connected to the $host database!");
   // echo "You are connected to the $host database!";
   return $db;
  } catch (mysqli_sql_exception $e) {
   error_log($e->getMessage(), 0);
   // echo $e->getMessage();
  }
 }
// getDB();
?>
