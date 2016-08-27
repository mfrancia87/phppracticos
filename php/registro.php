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
    if(empty($biografia)){
        $errores .= "La biografia no puede ser vacia<br>";
        $usuarioValido = false;
    }
    if(filter_var($email, FILTER_VALIDATE_EMAIL)==false){
        $errores .= "El mail ingresado no es valido<br>";
        $usuarioValido = false;
    }
    if(strlen($password)<6){
        $errores .= "La contrasenia debe tener mas de 6 caracteres<br>";
        $usuarioValido = false;
    }
    //validacion imagen (puede ser null)
    
    if($usuarioValido){
        //se registra en BD
    }
    else{
        ?>
        <h3>Sus datos son incorrectos. Intentelo nuevamente.</h3>
        <a href="../index.php">Volver</a>
<?php
        
    }
    
?>

<form method="post" action="registro.php">
    
    
</form> 

<?php require '../templates/footer.php';?>
