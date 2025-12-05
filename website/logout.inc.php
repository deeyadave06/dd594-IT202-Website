<?php
/*
Deeya Dave
December 05, 2025
IT-202-003 Internet Applications
Phase 5 Assignment: JavaScript
dd594@njit.edu
*/

if (isset($_SESSION['login'])) {
    unset($_SESSION['login']);
}
if (headers_sent()) {
    echo 'Click <a href="index.php?content=logout"><strong>here</strong></a> to logout.';
} else {
header("Location: index.php");
}
?>