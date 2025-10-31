<?php
/*
Deeya Dave
October 31, 2025
IT-202-003 Internet Applications
Phase 3 Assignment: HTML Website Layout
dd594@njit.edu
*/
session_start();
require_once("coffee.php");
require_once("coffeetype.php");
?>
<!DOCTYPE html>
<html>
<head><title>Coffee Shop Inventory Website</title></head>
<body>
    <header>
       <?php include("header.inc.php"); ?>
   </header>
   <section style="height: 425px;">
       <nav>
           <?php include("nav.inc.php"); ?>
       </nav>
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
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>