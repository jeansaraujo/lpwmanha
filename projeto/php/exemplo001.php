<?php
    
session_start();

echo session_id();

$_SESSION["usuario"]="cowgirl";

echo "<br>";

echo $_SESSION["usuario"];

unset($_SESSION["usuario"]);

echo $_SESSION["usuario"];

session_destroy();

//echo session_id();

//session_destroy();

//echo session_save_path();

//echo "<hr>";

//echo session_id();

//echo "<hr>";

//$_SESSION["nome"] = "IFPE --- LPW";

?>