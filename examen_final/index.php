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

<form method="POST" action="guardarmensaje.php">
  <input type="text" name="usuario" value="<?php echo $usuario; ?>" placeholder="Ingresa tu nombre">
  <input type="text" name="mensaje" placeholder="Escribe tu mensaje">
  <button type="submit">Enviar</button>
</form>
<table>
    <?php
    include "conexion.php";
    $sql ='SELECT * FROM blog ORDER BY 1 DESC';
    $resultado=$conexion->query($sql);
    if($resultado->num_rows>0){
        while($fila= $resultado->fetch_assoc()){
        print("<tr>");
        print("<td>".$fila['usuario']."</td><td>".$fila['mensaje']."</td>");
        print("</tr>");
        }
    
    }
    ?>
</table>