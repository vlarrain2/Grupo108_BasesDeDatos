<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

 	$query = "SELECT nombre FROM navieras ;";
	$result = $db -> prepare($query);
	$result -> execute();
	$navieras = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>Nombre</th>
    </tr>
  <?php
	foreach ($navieras as $navieras) {
  		echo "<tr> <td>$pokemon[0]</td></tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
