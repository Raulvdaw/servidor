<!DOCTYPE html>
<html>
<body>

    <?php
    require_once 'conexion.php';

// probando otra vez regrgggftgh
    $id = intval($_GET['id']);

    $con = mysqli_connect($db['host'], $db['username'], $db['password'], $db['db']);

    //$con= myqli_connect(SERVIDOR,USUARIO,CLAVE,BBDD)

    //AQUÍ VA EL CÓDIGO PARA OBTENER LA CONEXIÓN

    $sql = "SELECT * FROM pacientes WHERE id = '" . $id . "'";
    $pacientes = mysqli_query($con, $sql);

    echo "<table border='1'>
        <tr>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Edad</th>
        <th>Localidad</th>

        </tr>";

    while ($paciente = mysqli_fetch_array($pacientes)) {
        echo "<tr>";
        echo "<td>" . $paciente['nombre'] . "</td>";
        echo "<td>" . $paciente['direccion'] . "</td>";
        echo "<td>" . $paciente['edad'] . "</td>";
        echo "<td>" . $paciente['localidad'] . "</td>";
       
        echo "</tr>";
    }

    echo "</table>";
    //mysqli_close($con);
    ?>

</body>

</html>