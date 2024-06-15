<?php
// Start session
session_start();

// Destroy session data
session_destroy();

// Redirect to index.php
header("Location: index.php");
exit; // Ensure script execution stops after redirection
?>