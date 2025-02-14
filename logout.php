<?php
session_start();
session_destroy();
header("Location: buildingmanagement.html"); // Redirect to the login page
exit();
?>
