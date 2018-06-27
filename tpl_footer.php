<footer>
    <div class="container display-lg-flex align-items-lg-center">
        <div id="logo_footer" class="display-flex justify-content-center justify-content-lg-start mb-2 mb-lg-0 mr-lg-5">
            <a href="#">
                <img src="img/logo2.png">
            </a>
        </div>
        <div id="copyright" class="display-flex align-items-center align-items-lg-start">
            <span>@
                <?php echo $page_title." ".date("Y") ?>
            </span>
            <span>
                <?php echo $page_subtitle; ?>
            </span>
        </div>
        <div id="menu_footer">
            <?php foreach($array_menu as $item_menu): ?>
            <a href="<?php echo $item_menu['url'] ?>">
                <?php echo $item_menu['nombre'] ?>
            </a>
            <?php endforeach; ?>
            <a href="#top">Volver arriba
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </div>
</footer>