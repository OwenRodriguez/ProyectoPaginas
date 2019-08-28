 <?php
 
	ECHO "<!DOCTYPE html>

<html>
    <head>
        <title>DATOS INGRESADOS</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>
    <body bgcolor=\"pink\">
        <div>Informacion Proporcionada</div>
        ";



$nombre = $_POST['desarrolladora' ];
echo $nombre;

$distribuidoras = $_POST['distribuidora'];
echo $distribuidoras;

$produ = $_POST['produccion'];
echo $produ;

$diseno = $_POST['disenadora'];
echo $diseno;

$arte = $_POST['artista'];
echo $arte;

$plataform = $_POST['plataformas'];
echo $plataform;

$title = $_POST['titulos'];
echo $title;

$gender = $_POST['generos'];
echo $gender;

$clasification = $_POST['clasificaciones'];
echo $clasification;

$fecha = $_POST['Fecha'];
echo $fecha;

$format = $_POST['formatos'];
echo $format;

$play = $_POST['Tipodejugabilidad'];
echo $play;


ECHO "

    </body>
</html>";
?>