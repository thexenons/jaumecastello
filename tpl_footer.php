<footer>
    <div class="container display-lg-flex align-items-lg-center">
        <div id="footer_logo" class="display-flex justify-content-center justify-content-lg-start my-5 my-lg-0 mr-lg-5">
            <a href="#">
                <img src="img/logo2.png">
            </a>
        </div>
        <div id="copyright" class="display-flex flex-direction-column flex-direction-lg-row align-items-center align-items-lg-start my-5 my-lg-0">
            <span>@
                <?php echo $page_title." ".date("Y") ?>
            </span>
            <span>
                <?php echo $page_subtitle; ?>
            </span>
        </div>
        <div id="menu_footer" class="display-flex align-items-center justify-content-center my-5 my-lg-0">
            <?php foreach($array_menu_footer as $item_menu): ?>
            <a href="<?php echo $item_menu['url'] ?>" class="link footer_menu_item">
                <?php echo $item_menu['nombre'] ?>
            </a>
            <?php endforeach; ?>
        </div>
        <a href="#top" class="link display-flex align-items-center justify-content-center my-5 my-lg-0">
            Volver arriba <i class="fa fa-angle-up ml-1 font-size-4"></i>
        </a>
    </div>
</footer>