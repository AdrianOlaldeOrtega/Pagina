        <?php
        include_once('PHP\Conexion.php');
        if(!$conexion){
          echo "que pasó aqui";
          die("Conexión con la base de datos fallida".mysqli_connect_error());
        }
        $n = $_POST["inputNoControl"];
        $consulta = "SELECT NumeroControl, NombrePila, PrimerApellido, SegundoApellido, Foraneo FROM alumno WHERE NumeroControl = $n";
        $result = mysqli_query($conexion, $consulta);
        if(mysqli_num_rows($result)){
while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <!DOCTYPE html>
          <html lang="es">
            <head>
              <meta charset="utf-8">
              <title>Datos de pago</title>
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
              <link rel="stylesheet" href="Estilos.css">
            </head>
            <body class="texto">
          <div>
            <h1>Datos de pago</h1>
            <br>
          </div>
              <table class="table" style="color:white">
                <thead>
                  <th scope="col">Número de control</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Cuenta dónde a pagar</th>
                </thead>
                <tbody>
          <td> <?php echo $row['NumeroControl']; ?></td>
          <td><?php echo $row['NombrePila']." ".$row['PrimerApellido']." ".$row['SegundoApellido'];?></td>
          <td><?php
          if ($row['Foraneo'] == "si") {
            echo "5555-5555-5555";
          }
          else {
            echo "4444-4444-4444";
          }
        }?></td>

      </tbody>
    </table>
    <br>
<h2 style="text-align: center;">Preguntas frecuentes:</h2>
    <br>
<p style="font-weight: bold;">¿En qué banco puedo pagar?</p>
<p>-Debes pagar a la cuenta que se te indica en la columna "Cuenta a donde pagar".<br>
puede ser por transferencia electrónica o en cualquier establecimiente dónde se puedan realizar transferencias.
</p>
<p style="font-weight: bold;">¿A cuál número puedo marcar en caso de alguna duda?</p>
<p>numero:</p>
<br>
<br>
    <footer style="text-align: center">
      <p>Prestige English School <br>
      Direccion: Constelaciones 357-1 Col. Cosmos Morelia Mich.<br>
      cp: 58050 <br>
      Telefono: 443 565 0206</p>
    </footer>
  </body>
</html>
            <?php
        }else{
          echo "<script>
            alert(\"No hay algún alumno con este numero de control\");
            window.location.replace('index.html');
          </script>";
           }
         ?>
