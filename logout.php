<?php
// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect the user to the previous page
$previousPage = $_SERVER['HTTP_REFERER'];
header('Location: ' . $previousPage);
exit();
?>
