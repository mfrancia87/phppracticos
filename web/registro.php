<?php require '../templates/header.php';?>

<h2>Ingrese sus datos para registrarse:</h2>
<form method="post" action="../php/registro.php">
    <p>Nombre:</p>
    <input type="text" name="nombre" required>
    <p>Apellido:</p>
    <input type="text" name="apellido" required>
    <p>Biografia:</p>
    <textarea cols="10" rows="5" name="biografia" style="resize: none" required></textarea>
    <p>Mail:</p>
    <input type="email" name="mail" required>
    <p>Password:</p>
    <input type="password" name="password" required>
    <p>Imagen:</p>
    <input type="file" name="imagen">
    
    <input type="submit" value="Enviar">
</form> 

<?php require '../templates/footer.php';?>