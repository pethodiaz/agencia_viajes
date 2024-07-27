<?php
include 'conexion.php';

$sql = "SELECT * FROM VUELO";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Vuelos</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h2>Vuelos Disponibles</h2>
        <?php
        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>ID Vuelo</th>
                        <th>Origen</th>
                        <th>Destino</th>
                        <th>Fecha</th>
                        <th>Plazas Disponibles</th>
                        <th>Precio</th>
                    </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id_vuelo"]. "</td>
                        <td>" . $row["origen"]. "</td>
                        <td>" . $row["destino"]. "</td>
                        <td>" . $row["fecha"]. "</td>
                        <td>" . $row["plazas_disponibles"]. "</td>
                        <td>" . $row["precio"]. "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No hay vuelos disponibles</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
