<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "agencia_viajes";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$destination = $_GET['destination'];
$start_date = $_GET['travel_start_date'];
$end_date = $_GET['travel_end_date'];

// Consultar la base de datos
$sql = "SELECT * FROM VUELO WHERE destino LIKE '%$destination%' AND fecha BETWEEN '$start_date' AND '$end_date'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los resultados
    while ($row = $result->fetch_assoc()) {
        echo "<div class='result'>";
        echo "<h3>Destino: " . $row["destino"] . "</h3>";
        echo "<p>Origen: " . $row["origen"] . "</p>";
        echo "<p>Fecha: " . $row["fecha"] . "</p>";
        echo "<p>Plazas disponibles: " . $row["plazas_disponibles"] . "</p>";
        echo "<p>Precio: $" . $row["precio"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No se encontraron resultados.";
}

$conn->close();
?>
