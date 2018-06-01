<?php

/* REDIRECCIÓN SI NO EXISTE SECCIÓN */
if (!isset($_GET['seccion']))
{
    header('Location: ?seccion=index.php');
}

$server_name = 'http://'.$_SERVER['SERVER_NAME'];
$url_actual = $url_web.$_SERVER['PHP_SELF'];

$seccion = $_GET['seccion'];

/* MENÚ */
$array_menu = [
    [
        'nombre' => 'Ejemplo',
        'url' => '#'
    ]
];