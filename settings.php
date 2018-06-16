<?php

/* REDIRECCIÓN SI NO EXISTE SECCIÓN */
if (!isset($_GET['seccion']))
{
    header('Location: ?seccion=index.php');
}

/*
*
*   AJUSTES BÁSICOS
*
*/
$page_title = "Jaume Castelló";
$page_subtitle = "Blog personal";

/*
*
*   Redes Sociales
*
*/
$url_facebook = "#";
$url_twitter = "#";
$url_instagram = "#";

$server_name = 'http://'.$_SERVER['SERVER_NAME'];
$url_actual = $server_name.$_SERVER['PHP_SELF'];

$seccion = $_GET['seccion'];

/* MENÚ */
$array_menu = [
    [
        'nombre' => 'Ejemplo',
        'url' => '#'
    ]
];