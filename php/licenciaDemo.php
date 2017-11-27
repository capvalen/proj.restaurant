<?php 
$hoy=date('Y-m-d');
$fechaInicial = date('Y-m-d', strtotime("2017-11-16"));
$fechaFinal = date('Y-m-d', strtotime("2017-12-04"));

//echo $hoy."<br>";
if (($hoy >= $fechaInicial) && ( $hoy <= $fechaFinal))
{
  //echo "Está en el rango";
  /*Lo que si va con licencia*/
  ?>
  
<!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Bienvendio: Infocat Snack</title>
 </head>
 <body>
 	<h2>Bienvenido al sistema</h2>
 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, aspernatur, quos, suscipit, molestias asperiores sed quasi nulla doloribus vitae repudiandae animi tenetur similique provident pariatur aperiam quidem itaque qui illo!</p>

</body>
</html>

  <?php  
  /*Fin de contenido de licencia*/
}
else
{ include 'php/finLicencia.php';} ?>