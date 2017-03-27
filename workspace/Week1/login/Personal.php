<?php
$cookie_name = "loggedin";
if (isset($_COOKIE[$cookie_name])){
    $cookie_value = $_COOKIE[$cookie_name];
    echo "Welkom tot je eigen pagina $cookie_value!!";
    echo '<a href= "logout.php">Uiloggen</a>';
}

?>