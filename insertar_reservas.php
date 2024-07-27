<?php
include 'conexion.php';

// Asumiendo que ya tienes algunos datos en las tablas VUELO y HOTEL
// Para simplificar, estos datos se insertan manualmente en este script
$reservas = [
    ['id_cliente' => 1, 'fecha_reserva' => '2024-07-01', 'id_vuelo' => 1, 'id_hotel' => 1],
    ['id_cliente' => 2, 'fecha_reserva' => '2024-07-02', 'id_vuelo' => 2, 'id_hotel' => 2],
    ['id_cliente' => 3, 'fecha_reserva' => '2024-07-03', 'id_vuelo' => 3, 'id_hotel' => 3],
    ['id_cliente' => 4, 'fecha_reserva' => '2024-07-04', 'id_vuelo' => 1, 'id_hotel' => 1],
    ['id_cliente' => 5, 'fecha_reserva' => '2024-07-05', 'id_vuelo' => 2, 'id_hotel' => 2],
    ['id_cliente' => 6, 'fecha_reserva' => '2024-07-06', 'id_vuelo' => 3, 'id_hotel' => 3],
    ['id_cliente' => 7, 'fecha_reserva' => '2024-07-07', 'id_vuelo' => 1, 'id_hotel' => 1],
    ['id_cliente' => 8, 'fecha_reserva' => '2024-07-08', 'id_vuelo' => 2, 'id_hotel' => 2],
    ['id_cliente' => 9, 'fecha_reserva' => '2024-07-09', 'id_vuelo' => 3, 'id_hotel' => 3],
    ['id_cliente' => 10, 'fecha_reserva' => '2024-07-10', 'id_vuelo' => 1, 'id_hotel' => 1],
];

foreach ($reservas as $reserva) {
    $sql = "INSERT INTO RESERVA (id_cliente, fecha_reserva, id_vuelo, id_hotel)
            VALUES ('{$reserva['id_cliente']}', '{$reserva['fecha_reserva']}', '{$reserva['id_vuelo']}', '{$reserva['id_hotel']}')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Reserva insertada correctamente<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

