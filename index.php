<?php
include 'controllers/consulta.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>Sistema de Subastas</title>
  </head>
  <body>
    <h1 style="text-align:center">Bienvenido al Sistema de Subastas</h1>
    <hr>
    <div style="text-align: center" class="container">
        <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#regulares" role="button" aria-expanded="false" aria-controls="collapseExample">
                Subastas Regulares Activas
            </a>
            <a class="btn btn-primary" data-toggle="collapse" href="#especiales" role="button" aria-expanded="false" aria-controls="collapseExample">
                Subastas Especiales Activas
            </a>
        </p>
    </div>
    
    <!-- TABLA SUBASTAS REGULARES -->
    <div class="collapse" id="regulares">
        <div class="container">
            <h3>Subastas regulares</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">startDate</th>
                <th scope="col">endDate</th>
                <th scope="col">price</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result_regular as $r): ?>
                <tr>

                <td><h6><?php echo $r['id'];?> </h6></td>
                <td><h6><?php echo $r['name'] ;?> </h6></td>
                <td><h6><?php echo $r['description'] ;?> </h6></td>
                <td><h6><?php echo $r['startDate'] ;?> </h6></td>
                <td><h6><?php echo $r['endDate'] ;?> </h6></td>
                <td><h6><?php echo $r['price'] ;?> </h6></td>
                <td><?php echo "<a href='view/regular.php?id=".$r['id']."'>Realiza Puja</a>";?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>

    <!-- TABLA SUBASTAS ESPECIALES -->
    <div class="container">
        <div class="collapse" id="especiales">
        <h3>Subastas especiales</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">startDate</th>
                    <th scope="col">endDate</th>
                    <th scope="col">price</th>
                    <th scope="col">deposit</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($result_especial as $r): ?>
                    <tr>
                    <td><h6><?php echo $r['id'];?> </h6></td>
                    <td><h6><?php echo $r['name'] ;?> </h6></td>
                    <td><h6><?php echo $r['description'] ;?> </h6></td>
                    <td><h6><?php echo $r['startDate'] ;?> </h6></td>
                    <td><h6><?php echo $r['endDate'] ;?> </h6></td>
                    <td><h6><?php echo $r['price'] ;?> </h6></td>
                    <td><h6><?php echo $r['deposit'] ;?> </h6></td>
                    <td><?php echo "<a href='view/especial.php?id=".$r['id']."'>Realiza Puja</a>";?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                
            </table>
        </div>
    </div>
    

    <!-- <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Subasta Regular</h1>
                        <p class="lead">Realice su puja regular...!!!</p>
                        <a href="view/regular.php"><button style="margin-left: 40%" class="btn btn-primary">Aqui</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Subasta Especial</h1>
                        <p class="lead">Realice su puja especial...!!!</p>
                        <a href="view/especial.php"><button style="margin-left: 40%" class="btn btn-primary">Aqui</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>