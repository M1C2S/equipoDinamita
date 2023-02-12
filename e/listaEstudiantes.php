<?php
    include("conexion.php");
    $con = conectar();

    $sql="SELECT * FROM estudiante";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SENA</title>
    <link rel="stylesheet" href="CSS1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <section id="encabezado">
        <h1>Lista de aprendices</h1>
    </section>
    <section id="imagen"> <img src="imagenes/que-es-el-sena.jpg" alt="" style="height: 70px;"> </section>

    <section id="barraOpcionesInstructor">
    
        <a href="foro.php"><button id="boton" type="button" class="btn btn-lg" style="height: max-content; border-color: white; border-width: 2px;"> FORO </button></a><br>
        <a href=""><button id="boton" type="button" class="btn btn-lg" style="height: max-content; border-color: white; border-width: 2px;"> APRENDICES </button></a><br>
        <a href="index.php"><button id="boton" type="button" class="btn btn-lg" style="height: max-content; border-color: white; border-width: 2px; "> CERRAR SESION </button></a><br>
    </section>
        <section id="seccionLista">
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Hora llegada</th>
                        <th>Hora salida</th>
                        <th></th>
                        <th></th>
                 
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row=mysqli_fetch_array($query)){
                    ?>
                        <tr>
                            <th><?php echo $row['id']?></th>
                            <th><?php echo $row['documento']?></th>
                            <th><?php echo $row['nombre']?></th>
                            <th><?php echo $row['horallegada']?></th>
                            <th><?php echo $row['horasalida']?></th>

                            <th><a href="actualizar.php?id=<?php echo $row['id']?>" class="btn btn-info">Editar</a></th>
                            
                            <th><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a></th>
                        </tr>
                        <?php
                        }?>
                </tbody>
            </table>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>