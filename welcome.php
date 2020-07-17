<?php
    session_start();
    // validar si el usuario tiene credenciales
    if(!isset($_SESSION["id"])){
        header("location: index.php");
    }

    // datos para funcionamiento de menu
    $tipo = $_SESSION["tipo"];
    include_once "menu.php";
?>
<h1>Bienvenido <?=$_SESSION["usuario"]?></h1>
<?php
