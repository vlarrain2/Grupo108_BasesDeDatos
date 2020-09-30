<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

 	$query = "SELECT bid, patente, nombre, pais, capitan, tipo_pesca, COUNT(bid) FROM (buquespesca INNER JOIN buques USIN
	 G(bid)) INNER JOIN tiene_personal USING(bid) GROUP BY buquespesca.bid, buques.nombre, buques.patente, buques.pais, buque
	 s.capitan, buquespesca.tipo_pesca ORDER BY COUNT(bid) DESC LIMIT 1;";
	$result = $db -> prepare($query);
	$result -> execute();
	$navieras = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>Nombre</th>
    </tr>
  <?php
	foreach ($navieras as $naviera) {
  		echo "<tr> <td>$naviera[0]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
