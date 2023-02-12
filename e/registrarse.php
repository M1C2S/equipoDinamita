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
        <h1>REGISTRO</h1>
    </section>
    <section id="imagen"> <img src="imagenes/que-es-el-sena.jpg" alt="" style="height: 70px;"> </section>

    <section id="barraOpciones">
    
        <a href="iniciarSesion.php"><button id="boton" type="button" class="btn btn-lg" style="height: max-content; border-color: white; border-width: 2px;"> INSTRUCTOR </button></a><br>
        <a href="iniciarSesion.php"><button id="boton" type="button" class="btn btn-lg" style="height: max-content; border-color: white; border-width: 2px;"> APRENDIZ </button></a><br>
        <a href="index.php"><button id="boton" type="button" class="btn btn-lg" style="height: max-content; border-color: white; border-width: 2px; "> INICIO </button></a><br>
        

    </section>
    <section id="formularioRegistro">
        <section>
            <form action="insertar.php" method="POST">

                <div class="form-group">
                    <label for="formGroupExampleInput">Correo</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="example@gmail.com" name="correo">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Contraseña</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="password" name="password">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="password">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Documento</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="ID" name="documento">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nombre</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre Completo" name="nombre">
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control" placeholder="registrar">
                </div>

            </form>
        </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>