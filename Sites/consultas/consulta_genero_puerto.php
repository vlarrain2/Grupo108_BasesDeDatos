<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario
  $genero = $_POST["genero"];
  $puerto = $_POST["puerto"];

  #Se construye la consulta como un string
 	$query = "SELECT DISTINCT personal.pid,personal.nombre,edad,genero,nacionalidad,nro_pasaporte FROM personal,buques,atraques,tiene_personal WHERE = tiene_personal.pid AND buques.bid = tiene_personal.bid AND atraques.bid = buques.bid AND buques.capitan = tiene_personal.pid AND LOWER (personal.genero) LIKE LOWER ('%$genero%') AND LOWER (atraques.puerto) LIKE LOWER ('%$puerto%');";

  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$personal = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Edad</th>
      <th>Genero</th>
      <th>Nacionalidad</th>
      <th>Pasaporte</th>
    </tr>
  
      <?php
        foreach ($personal as $p) {
          echo "<tr><td>$p[0]</td><td>$p[1]</td><td>$p[2]</td><td>$p[3]</td><td>$p[4]</td><td>$p[5]</td></tr>";
      }
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>
