<?php require 'templates/header.php';
session_start();
if(isset($_SESSION["nombre"])){
    echo "<h2>Bienvenido ".$_SESSION["nombre"];
}
?>
<p>prueba Registro/Login</p>

<form>
    <a href="web/verUsuarios.php">
        <input type="button" value="Ver usuarios registrados" />
    </a>
    <?php
        if(!isset($_SESSION["nombre"])){
    ?>
    <a href="web/registro.php">
        <input type="button" value="Registro" />
    </a>
    <a href="web/login.php">
        <input type="button" value="Login" />
    </a>
    
    <?php
        }
        if(isset($_SESSION["nombre"])){
            echo "<a href='web/logout.php'><input type='button' value='Logout'/></a>";
        }
    ?>
    
</form> 
<br>
<?php require 'templates/footer.php';?>

