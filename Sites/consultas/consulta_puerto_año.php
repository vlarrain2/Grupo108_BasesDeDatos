<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $nombre = $_POST["puerto"];
  $año = $_POST["año"];

 	$query = "SELECT * FROM naviera WHERE tipo LIKE '%$tipo%' AND nombre LIKE '%$nombre%';";
	$result = $db -> prepare($query);
	$result -> execute();
	$buques = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Tipo</th>
    </tr>
  <?php
	foreach ($pokemones as $pokemon) {
  		echo "<tr> <td>$pokemon[0]</td> <td>$pokemon[1]</td> <td>$pokemon[2]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
