<?php include 'settings.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <!-- <CSS> -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- </CSS> -->

</head>
<body>

    <!-- <HEADER> -->
    <header>
        <?php include 'tpl_header.php'; ?>    
    </header>
    <!-- </HEADER> -->

    <!-- <CONTENT> -->
    <main>
        <?php include 'contents/'.$seccion; ?>
    </main>
    <!-- </CONTENT> -->

    <!-- <FOOTER> -->
    <footer>
        <?php include 'tpl_footer.php'; ?>
    </footer>
    <!-- </FOOTER> -->

    <!-- <JS> -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
    <!-- </JS> -->

</body>
</html>