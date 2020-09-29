<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$nombre = $_POST["nombre_naviera"];


 	$query = "SELECT buques.bid,nombre,patente,pais,capitan,navieras.nombre from buques,tiene WHERE LOWER(tiene.nombre_naviera) LIKE LOWER('%$nombre%') AND buques.bid = tiene.bid;";
	$result = $db -> prepare($query);
	$result -> execute();
	$buques = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Patente</th>
      <th>Pais</th>
      <th>ID_Capitan</th>
      <th>Naviera</th>

    </tr>
  <?php
	foreach ($buques as $buque) {
  		echo "<tr> <td>$buque[0]</td> <td>$buque[1]</td> <td>$buque[2]</td><td>$buque[3]</td><td>$buque[4]</td><td>$buque[5]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
