<?php

include_once "databaseconnect.php";

$querys = file_get_contents("branco.sql");  

$conn->multi_query($querys);

?>