<?php require '../templates/header.php';?>

<?php
    $conexionBD = mysqli_connect('localhost', 'root', 'root', 'login');
    if(!$conexionBD){
        die("No se pudo conectar con la BD".  mysqli_connect_error());
    }
    $query = "SELECT nombre, apellido, email FROM usuarios";
    $resultado = mysqli_query($conexionBD, $query);
    
    if(mysqli_num_rows($resultado)>0){
        echo "<table border='1'><tr><th>NOMBRE</th><th>APELLIDO</th><th>EMAIL</th></tr>";
        while($tupla = mysqli_fetch_array($resultado)){
            echo "<tr><td>".$tupla["nombre"]."</td><td>".$tupla["apellido"]."</td><td>".$tupla["email"]."</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "<h2>Aun no hay usuarios registrados</h2>";
    }
    mysqli_close($conexionBD);
?>
    
<a href="../index.php">Volver</a>
<?php require '../templates/footer.php';?>