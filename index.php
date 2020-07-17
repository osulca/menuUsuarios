<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="username" placeholder="Ingrese usuario">
    <input type="text" name="password" placeholder="Ingrese contraseña">
    <input type="submit" name="submit" value="Login">
</form>
<?php
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $userdb = "omar";
    $passbd = password_hash("123", PASSWORD_BCRYPT);;
    //TODO extraer datos de la db
        //primero comparar usuario
        if($userdb == $username){
        //TODO si encuentro usuario comparar contraseña
            if(password_verify($password, $passbd)){
            //TODO ingreso al sistema
                //TODO extraer de la bd elementos necesarios para identificar a mi usuario
            session_start();
            $_SESSION["id"] = 3;
            $_SESSION["usuario"] = "Omar Sulca";
            $_SESSION["tipo"] = "administrador";
                // Redireccionar
            header("location: welcome.php");
            }
            else{
                echo "usuario y/o contraseña no encontrado";
            }
        }else{
            echo "usuario y/o contraseña no encontrado";
        }
}
