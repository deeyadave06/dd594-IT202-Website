<?php
/*
Deeya Dave
October 3, 2025
IT-202-003 Internet Applications
Phase 1 Assignment: Login and Logout
dd594@njit.edu
*/
session_start();

$_SESSION = [];

session_unset();
session_destroy();

header("Location: index.php");
?>