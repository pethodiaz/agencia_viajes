<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $ubicación = $_POST['ubicación'];
    $habitaciones_disponibles = $_POST['habitaciones_disponibles'];
    $tarifa_noche = $_POST['tarifa_noche'];

    $sql = "INSERT INTO HOTEL (nombre, ubicación, habitaciones_disponibles, tarifa_noche) VALUES ('$nombre', '$ubicación', $habitaciones_disponibles, $tarifa_noche)";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo hotel agregado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

