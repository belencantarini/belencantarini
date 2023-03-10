<?php

// CARGAR IMAGEN DESDE ARCHIVO
echo '<pre>';
print_r($_FILES['archivo']);
echo '<pre>';

$original = $_FILES['archivo'];
$nombre = $original['name'];
$array_nombre = explode('.',$nombre);
$extension = array_pop($array_nombre);
$array = glob('imagenes/'.$array_nombre[0]."*".$extension);
$cantidad=count($array);
$nombre_final = $array_nombre[0].$cantidad.".".$extension;


move_uploaded_file($original['tmp_name'], 'imagenes/' . $nombre_final);

// header("Location: administrador.php?preview");


// Abrir la foto original

// $original = $_FILES['archivo']$_FILES['temp_name'];
// $nombre = $_FILES['archivo']$_FILES['name'];

// if ($_FILES ['archivo']['type'] == 'image/jpeg'){
//     $original = imagecreatefromjpeg($temporal);
// } elseif ($_FILES ['archivo']['type'] == 'image/png'){
//     $original = imagecreatefrompng($temporal);
// } else {
//     die ('No se pudo generar la imagen');
// }

// echo $original;


// Ajustar tamano de la imagen
// $ancho_original = imagesx($original);
// $alto_original = imagesy($original);
// $ancho_nuevo = 700;
// $alto_nuevo = round($ancho_nuevo * $alto_original / $ancho_original);
// $copia = imagecreatetruecolor($ancho_nuevo, $alto_nuevo);
// imagecopyresampled($copia, $original, 0, 0, 0, 0, $ancho_nuevo, $alto_nuevo, $ancho_original, $alto_original);
// imagejpeg($copia, "imagenes/" . $nombre, 100);
// move_uploaded_file($copia, "imagenes/" . $nombre);
// imagedestroy($original);
// imagedestroy($copia);
