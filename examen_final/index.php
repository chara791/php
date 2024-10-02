<?php
session_start();


if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
} elseif (isset($_POST['usuario'])) {
 
    $_SESSION['usuario'] = $_POST['usuario'];
    $usuario = $_POST['usuario'];
} else {
    $usuario = "anonimo";
}
?>

<form method="POST" action="index.php">
  <input type="text" name="usuario" value="<?php echo $usuario; ?>" placeholder="Ingresa tu nombre">
  <input type="text" name="mensaje" placeholder="Escribe tu mensaje">
  <button type="submit">Enviar</button>
</form>