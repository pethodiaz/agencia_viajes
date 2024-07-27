<?php
include 'conexion.php';

$sql = "SELECT h.nombre, h.ubicación, COUNT(r.id_reserva) as numero_reservas
        FROM HOTEL h
        JOIN RESERVA r ON h.id_hotel = r.id_hotel
        GROUP BY h.id_hotel
        HAVING COUNT(r.id_reserva) > 2";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Hotel: " . $row["nombre"]. " - Ubicación: " . $row["ubicación"]. " - Reservas: " . $row["numero_reservas"]. "<br>";
    }
} else {
    echo "No se encontraron hoteles con más de dos reservas.";
}

$conn->close();
?>
