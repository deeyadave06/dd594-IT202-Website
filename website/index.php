<?php
/*
Deeya Dave
December 05, 2025
IT-202-003 Internet Applications
Phase 5 Assignment: JavaScript
dd594@njit.edu
*/
ob_start();
session_start();
require_once("config.php");
require_once("coffee.php");
require_once("coffeetype.php");
?>
<!DOCTYPE html>
<html>
<head>
    <script src="realtime.js"></script>
    <title>Coffee Shop Inventory Website</title>
    <link rel="stylesheet" type="text/css" href="ih_styles.css">
    <link rel="icon" type="image/png" href="images/logo.png">
</head>
<body>
    <header>
       <?php include("header.inc.php"); ?>
   </header>
   <section style="height: 425px;">
       <nav>
           <?php include("nav.inc.php"); ?>
       </nav>
       <main>
        <?php if (isset($_SESSION['login'])) { ?>
        <aside>
           <?php include("aside.inc.php"); ?>
           <script>
               getRealTime();
               setInterval(getRealTime, 5000);
           </script>
       </aside>
       <?php } ?>
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
<?php
ob_end_flush();
?>