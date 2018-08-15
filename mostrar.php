<?php  
 function create_image()  
 {  
   $texto=$_POST['campo'];
   //$texto='Estamos hechos de fuego y de papel, y ocultar que.';
   $lines = explode("\n", $texto);
   $y = 20;
      $image = imagecreate(520, 180);  
      imagecolorallocate($image, 255, 255, 255);  
      $textcolor = imagecolorallocate($image, 0,0,0);  
      $font = "fonts/Renner_400.ttf";
      imagettftext($image, 16, 0, 0, $y, $textcolor, $font, $texto);
      //imagettftext($image, 11, 0, 10, $y+80, $textcolor, $font, $texto);
      // foreach newline, create text with new y coords
      
      header("Content-type: image/png");  
      imagepng($image, 'temp.png');  // ::para mostrar la imagen debes sólo poner $image, para guardar archivo , poner la ruta
      imagedestroy($image);  
 }  
echo '<img scr="'.create_image().'" />';  

 ?>  