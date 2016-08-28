<?php require '../templates/header.php';?>

<?php
    $nombre = filter_input(INPUT_POST, "nombre");
    $apellido = filter_input(INPUT_POST, "apellido");
    $biografia = filter_input(INPUT_POST, "biografia");
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");
    //imagen
    
    $errores = "Se detectaron los siguientes errores:<br>";
    $usuarioValido = true;
    
    if (!preg_match("/^[a-zA-Z ]*$/",$nombre)){
        $errores .= "El nombre debe estar compuesto unicamente por letras<br>"; 
        $usuarioValido = false;
    }
    if(strlen($nombre)>20){
        $errores .= "El nombre debe tener un largo menor a 20 caracteres<br>";
        $usuarioValido = false;
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$apellido)){
        $errores .= "El apellido debe estar compuesto unicamente por letras<br>"; 
        $usuarioValido = false;
    }
    if(empty($biografia)){
        $errores .= "La biografia no puede ser vacia<br>";
        $usuarioValido = false;
    }
    /*
    if(filter_var($email, FILTER_VALIDATE_EMAIL)==false){
        $errores .= "El mail ingresado no es valido<br>";
        $usuarioValido = false;
    }
     */
    if(strlen($password)<6){
        $errores .= "La contrasenia debe tener mas de 6 caracteres<br>";
        $usuarioValido = false;
    }
    //validacion imagen (puede ser null)
    
    if($usuarioValido){
        //se registra en BD
        $mysqli = mysqli_connect('localhost', 'root', 'root', 'login');
        if(!$mysqli){
            die("No se pudo conectar con la BD ".mysqli_connect_error());
        }
        
        //$mysqli->select_db("login");
        $query = "INSERT INTO usuarios (nombre, apellido, biografia, email, contrasenia, imagen) VALUES ('$nombre', '$apellido', '$biografia', '$email', '$password', NULL);";
        if(mysqli_query($mysqli, $query)){
?>
            <h3>Se ha registrado correctamente!</h3>
            <a href="../index.php">Volver</a>
<?php  
        mysqli_close($mysqli);
        }
        else{
            die("No se pudo INSERTAR DATOS EN LA BD ".  mysqli_error($mysqli));
        }
    }
    else{
?>
        <p><?php echo $errores;?></p>
        <h3>Sus datos son incorrectos. Intentelo nuevamente.</h3>
        <a href="../index.php">Volver</a>
<?php
    }
?>

<?php require '../templates/footer.php';?>
