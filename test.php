<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php echo '<p>Test de GitHub</p>'; ?>
 
 <?php echo '<p>Ejemplo Simple de PHP</p>'; ?>

<?php echo 'Versión actual de PHP: ' . phpversion(); ?>
 
<?php echo '<p>Hola Mundo!!!</p>'; ?>
 
 <?php echo "<h1>Estaditicas del sitio:</h1>";
echo $_SERVER['SERVER_NAME'];
 
//Recuperar informacion del visitante de la variabler globa $_SERVER
echo "<h4>nombre de la pagina web actual</h4>";
echo $_SERVER['PHP_SELF'];
 
echo "<h4>Pagina web de donde viene el visitante</h4>";
echo $_SERVER['HTTP_REFERER'];
 
echo "<h4> Nombre del navegador</h4>";
echo $_SERVER['HTTP_USER_AGENT'];
 
echo "<h4>Direccion Ip del visitante</h4>";
echo $_SERVER['REMOTE_ADDR'];

//Utilizamos api de geolocalizacion
$data = @file_get_contents("https://api.ipgeolocationapi.com/geolocate/" . $_SERVER['REMOTE_ADDR']);
$items = json_decode($data, true);
 
echo "<h4>La visita se realiza desde: <h4>";
echo $items["continent"];
echo ", ";
echo $items["name"];

?> 
 </body>
</html>
