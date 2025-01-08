<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $tarjeta= $_POST['tarjeta'];
    $nip = $_POST['nip'];
    $banco = $_POST['banco'];

    $sql = "INSERT INTO compras (nombre, tarjeta, nip, banco) 
            VALUES ('$nombre', '$tarjeta', '$nip', '$banco')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>¡Compra realizada con exito! <a href='compra.html'>Volver al inicio</a></p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }

    $conn->close();
}
?>
