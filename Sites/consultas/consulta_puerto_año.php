<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  $puerto = $_POST["puerto"];
  $año = $_POST["año"];

 	$query = "SELECT * FROM buques.bid,nombre,patente,pais,capitan WHERE atraques.bid = buques.bid AND LOWER(atraques.puerto) LIKE LOWER('%$puerto%') AND EXTRACT(year FROM fecha_atraque)= $año;";
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
     </tr>
   <?php
   foreach ($buques as $buque) {
       echo "<tr> <td>$buque[0]</td> <td>$buque[1]</td> <td>$buque[2]</td><td>$buque[3]</td><td>$buque[4]</td> </tr>";
   }
   ?>
   </table>

<?php include('../templates/footer.html'); ?>
