<?php include('templates/header.html');   ?>

<body>
  <h1 align="center">Informacion Navieras y buques </h1>

  <br>

  <h3 align="center"> Buscar los nombres de todas las Navieras</h3>

  <form align="center" action="consultas/consulta_todas_navieras.php" method="post">
    <input type="submit" value="Buscar">
  </form>


  <h3 align="center"> Buscar buques por el nombre de la naviera </h3>

  <form align="center" action="consultas/consulta_tipo_nombre.php" method="post">
    Buques de la naviera:
    <input type="text" name="nombre_naviera">
    <br/>
    <br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>

  <h3 align="center">Buscar por puerto y año de atraque</h3>

  <form align="center" action="consultas/consulta_puerto_año.php" method="post">
    Buques que hayan atracado en:
    <input type="text" name="puerto">
    <br/>
    el año:
    <input type="text" name="año">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>

  <h3 align="center"> Buscar por puerto atracado al mismo tiempo </h3>

  <form align="center" action="consultas/consulta_al_mismo_tiempo.php" method="post">
  Buscar todos los buques que hayan estado en:
    <input type="text" name="puerto">
    <br/>
    al mismo tiempo que :
    <input type="text" name="otro_buque">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>

  <h3 align="center"> Encontrar capitanes por genero y Puerto:</h3>

  <form align="center" action="consultas/consulta_genero_puerto.php" method="post">
    Encontrar todo(a)s lo(a)s capitanes de genero:
    <input type="text" name="genero">
    <br/>
    Que hayan pasado por:
    <input type="text" name="puerto">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <h3 align="center"> Buscar buque pesquero con mayor numero de personas trabajando </h3>
<form align="center" action="consultas/consulta_pesquero.php" method="post">
  <input type="submit" value="Buscar">
</form>

</body>
</html>
