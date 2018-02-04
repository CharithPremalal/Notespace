<?php
session_start();
unset($_SESSION['lstuno']);
session_destroy();
header('Location:index.php')

?>