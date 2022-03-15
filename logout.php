<?php 
include "dbConfig.php";

session_destroy();

echo "<script>window.open('index.php','_self')</script>";

?>