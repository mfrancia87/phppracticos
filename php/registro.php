<?php require '../templates/header.php';?>

<?php
    $nombre = filter_input(INPUT_POST, "nombre");
    $apellido = filter_input(INPUT_POST, "apellido");
    $biografia = filter_input(INPUT_POST, "biografia");
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");
    //imagen
    
    $usuarioValido = true;
    
    if (!preg_match("/^[a-zA-Z ]*$/",$nombre)){
        $nombreErrorLetras = "El nombre debe estar compuesto unicamente por letras"; 
        $usuarioValido = false;
    }
    if(strlen($nombre)>20){
        $nombreErrorLargo = "El nombre debe tener un largo menor a 20 caracteres";
        $usuarioValido = false;
    }
    
    
?>

<form method="post" action="registro.php">
    
    
</form> 

<?php require '../templates/footer.php';?>
