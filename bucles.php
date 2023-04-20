

<?php
include 'bucles.html';

$nombre = null;

if (isset($_POST['datos'])) {
$a=1;
$cant = $_POST['cantidad'];
$nombre = $_POST['nombre'];

   //while ($a <= $cant) {
   //echo'Hola Mundo'.$a .'<br>';
   //$a++;
   //}

   for ($a=1; $a <= $cant ; $a++) { 
    echo $nombre.$a .'<br>';
   }
}
?>