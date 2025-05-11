<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id = $id"; //podría pedir una advertencia

if ($connection->query($sql) === TRUE) {
    header("Location: index.php");
    exit; //¿es necesario este exit?
} else {
    echo "Error al borrar: " . $connection->error;
}
?>
