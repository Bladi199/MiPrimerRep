<?php
include "conexion.in.php";
$id=$_GET["id"];
$sql="delete from alumno where id=$id";
$fila=mysql_fetch_array($resultado)
$resultado;
//header("Location: index.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar alumno</h1>
    <form action="guardar.php" method="GET">
        <div>
            <label for="id">ID</label>
            <input type="text" id="id" name="id" value="<?php echo $id;?>" >
        </div>
        <div>
            <label for="id">NOMBRE</label>
            <input type="text" id="id" name="nombre" value="<?php echo $nombre;?>" >
        </div>
        <div>
            <label for="id">PATERNO</label>
            <input type="text" id="id" name="paterno" value="<?php echo $paternp;?>" >
        </div>
    <input type="submit" name="aceptar" value="aceptar" >

    </form>
</body>
</html>

Desarrolle conexion con como colocar hora,min,seg