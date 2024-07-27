<?php
include 'conexion.php';

$sql = "SELECT * FROM HOTEL";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Hoteles</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h2>Hoteles Disponibles</h2>
        <?php
        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>ID Hotel</th>
                        <th>Nombre</th>
                        <th>Ubicación</th>
                        <th>Habitaciones Disponibles</th>
                        <th>Tarifa por Noche</th>
                    </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id_hotel"]. "</td>
                        <td>" . $row["nombre"]. "</td>
                        <td>" . $row["ubicación"]. "</td>
                        <td>" . $row["habitaciones_disponibles"]. "</td>
                        <td>" . $row["tarifa_noche"]. "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No hay hoteles disponibles</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
