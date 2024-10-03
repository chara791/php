i <?php
    include"conexion.php";
    if(isset($_POST['usuario'])and isset($_POST['mensaje'])){
        $user=$_POST['usuario'];
        $men= $_POST['mensaje'];

        $sql="insert into blog values(default,'$user', '$men');";

        $conexion->query($sql);
    }
    header('Location: index.php');
    exit;
?>