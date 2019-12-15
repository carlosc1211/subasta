<?php
include '../config/conexion.php';

$tipo = $_POST['tipo'];
$idSubasta = $_POST['idSubasta'];
$description = $_POST['description'];
$montoPuja = $_POST['montoPuja'];
$price = $_POST['price'];

/* echo $price;
echo $montoPuja;
 */
if ($montoPuja > $price) {
    echo "<script>alert('La puja no puede ser mayor al price, ingrese otro monto') window.location.href='../index.php';</script>";
} else {
    $sql = "INSERT INTO puja (tipo, idSubasta, montoPuja, description) VALUES ('$tipo','$idSubasta','$montoPuja', '$description')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Su puja se ha realizado con exito')</script>";
        echo "<script>window.location.href='../index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>