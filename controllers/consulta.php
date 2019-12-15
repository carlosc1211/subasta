<?php
include 'config/conexion.php';

$especial = "SELECT id, name, description, startDate, endDate, price, deposit FROM especial;";
$result_especial = $conn->query($especial);

    if ($result_especial->num_rows > 0) {    
        while($row = $result_especial->fetch_assoc()) {
        //echo "Tengo algo";
        }
    } else {
            echo "0 results";
    }


$regular = "SELECT id, name, description, startDate, endDate, price FROM regular;";
$result_regular = $conn->query($regular);

    if ($result_regular->num_rows > 0) {
        while($row = $result_regular->fetch_assoc()) {
            //echo "Tengo algo";
        }
    } else {
        echo "0 resultados";
    }