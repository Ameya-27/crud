<?php
session_start();
$_SESSION["user"] = "Student";
echo $_SESSION["user"];
session_unset(); 
?>