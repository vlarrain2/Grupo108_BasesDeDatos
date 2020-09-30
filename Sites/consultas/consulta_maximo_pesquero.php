<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

 	$query = "SELECT bid, patente, nombre, pais, capitan, tipo_pesca, COUNT(bid) FROM (buquespesca INNER JOIN buques USING(bid)) INNER JOIN tiene_personal USING(bid) GROUP BY buquespesca.bid, buques.nombre, buques.patente, buques.pais, buques.capitan, buquespesca.tipo_pesca ORDER BY COUNT(bid) DESC LIMIT 1;";
	$result = $db -> prepare($query);
	$result -> execute();
	$buques = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>ID</th>
	  <th>Patente</th>
	  <th>Nombre</th>
	  <th>Pais</th>
	  <th>Capitan</th>
	  <th>TipoPesca</th>
	  <th>Nro_personas</th>
    </tr>
  <?php
	foreach ($buques as $buque) {
  		echo "<tr> <td>$buque[0]</td><td>$buque[1]</td><td>$buque[2]</td><td>$buque[3]</td><td>$buque[4]</td><td>$buque[5]</td><td>$buque[6]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
