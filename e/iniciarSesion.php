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
        <h1>USUARIO</h1>
    </section>
    <section id="imagen"> <img src="imagenes/que-es-el-sena.jpg" alt="" style="height: 70px;"> </section>

    <section id="barraOpciones">
    
        <a href="iniciarSesion.php"><button id="boton" type="button" class="btn btn-lg" style="height: max-content; border-color: white; border-width: 2px;"> INSTRUCTOR </button></a><br>
        <a href="iniciarSesion.php"><button id="boton" type="button" class="btn btn-lg" style="height: max-content; border-color: white; border-width: 2px;"> APRENDIZ </button></a><br>
        <a href="index.php"><button id="boton" type="button" class="btn btn-lg" style="height: max-content; border-color: white; border-width: 2px;"> INICIO </button></a>
    </section>
    <section id="formularioRegistro">
        <section>
            <table style=" height: 260px; display: flex; padding: 30px;">
                <tr id="paddingTr">
                    <td style="padding: 5px;">
                        <label for=""><h5>Correo</h5></label>
                    </td>
                    
                    <td>
                        <input type="text">
                    </td>           
                </tr>

                <tr style="height: 40px;"></tr>
                
                <tr id="paddingTr">
                    <td>                        
                        <label for=""><h5>Contraseña</h5></label>
                    </td>                    
                    <td>
                        <input type="password">
                    </td>
                </tr>
                <tr style="height: 30px;"></tr>
                <tr style="display: flex; justify-content: center;">
                    <td>
                        <a href="foro.php"><button id="boton" type="button" class="btn btn-lg"> Entrar </button></a>
                    </td>
                </tr>
            </table>
        </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>