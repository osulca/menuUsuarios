<ul>
    <?php
    switch($tipo){
    case "administrador":
        echo "<h3>Administrador</h3>
              <li><a href='reportes.php'>Ver Reportes</a></li>";
        break;
    case "vendedor":
        echo "<h3>Vendedor</h3>
              <li><a href='#'>Registrar Venta</a></li>";
        break;
    case "cliente":
        echo "<h3>Cliente</h3>
              <li><a href='#'>Ver Productos</a></li>";
        break;
    }
    ?>
    <li><a href="#">Cambiar Contraseña</a></li>
    <li><a href="salir.php">Salir</a></li>
</ul>