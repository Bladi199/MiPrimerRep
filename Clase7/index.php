<?php
include "conexion.in.php";
$sql="select* from alumno";
$resultado=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi pagina</title>
</head>
<body>
    <h1>Alumno</h1>
    <table>
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>paterno</td>
            <td>Operaciones</td>
        </tr>
        <?php
        while($fila=mysqli_fetch_array($resultado)){
            echo"<tr>";
            echo"<td>$fila[id]</td>";
            echo"<td>$fila[nombre]</td>";
            echo"<td>$fila[paterno]</td>";
            echo "<td>";
            echo "<a href='editar.php?id=$fila[id]'>Editar</a>" ;
            echo "<a href='eliminar.php?id=$fila[id]'>Eliminar</a>" ;
            echo "</td>";
            echo"</tr>";
        }
        ?>

    </table>
    
</body>
</html>