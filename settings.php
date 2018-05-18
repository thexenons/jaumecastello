<?php

/* REDIRECCIÓN SI NO EXISTE SECCIÓN */
if (!isset($_GET['seccion']))
{
    header('Location: ?seccion=index.php');
}

$seccion = $_GET['seccion'];