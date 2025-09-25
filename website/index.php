<?php
/*
Deeya Dave
October 3, 2025
IT-202-003 Internet Applications
Phase 1 Assignment: Login and Logout
dd594@njit.edu
*/
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Coffee Shop Inventory Website</title></head>
<body>
   <section id="container">
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
</body>
</html>
