<?php
session_start();

// Remove all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to index.php
header("Location: index.php");
exit();
?>
 