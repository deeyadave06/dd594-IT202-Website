<?php
/*
Deeya Dave
November 21, 2025
IT-202-003 Internet Applications
Phase 4 Assignment: Input Filtering and CSS Styling
dd594@njit.edu
*/
session_start();

$_SESSION = [];

session_unset();
session_destroy();

header("Location: index.php");
?>