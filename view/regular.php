<?php
include '../config/conexion.php';
$id = $_GET['id'];


$regular = "SELECT id, name, description, startDate, endDate, price FROM regular WHERE id = $id;";
$result_regular = $conn->query($regular);

    if ($result_regular->num_rows > 0) {
        while($row = $result_regular->fetch_assoc()) {
            $name = $row['name'];
            $description = $row['description'];
            $startDate = $row['startDate'];
            $endDate = $row['endDate'];
            $price = $row['price'];
        }
        
    } else {
        echo "0 resultados";
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Sistema de Subastas</title>
  </head>
  <body>
    <h1 style="text-align:center">Subasta Regular</h1>
    <hr>
    <div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input disabled type="email" class="form-control" value="<?php echo $name; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input disabled type="email" class="form-control" value="<?php echo $description; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Start Date</label>
            <input disabled type="email" class="form-control" value="<?php echo $startDate; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">End Date</label>
            <input disabled type="email" class="form-control" value="<?php echo $endDate; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input disabled type="email" class="form-control" value="<?php echo $price; ?>">
        </div>
    </div>

    <div class="container">
        <div class="form-group">
            <form action="../controllers/insert.php" method="POST">
                <label for="exampleInputEmail1">Inserte su puja</label>
                <input type="text" hidden name="tipo" value="<?php echo "Regular"; ?>">
                <input type="text" hidden name="description" value="<?php echo $description; ?>">
                <input type="text" hidden name="idSubasta" value="<?php echo $id; ?>">
                <input type="text" hidden name="price" value="<?php echo $price; ?>">
                <input type="number" class="form-control" name="montoPuja">
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>