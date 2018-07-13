<div id="top" class="anchor"></div>
<header>
    <div class="container display-lg-flex">
        <div id="mobile-menu">
            <div id="mobile-menu_icon" class="display-lg-none">
                <div id="mobile-menu_open">
                    <i class="fa fa-bars"></i>
                </div>
                <div id="mobile-menu_close">
                    <i class="fa fa-close"></i>
                </div>
            </div>
            <nav id="mobile-menu_nav">
                <?php foreach($array_menu as $item_menu): ?>
                <a href="<?php echo $item_menu['url'] ?>" class="link mobile-menu_item p-5 col-12">
                    <?php echo $item_menu['nombre'] ?>
                </a>
                <?php endforeach; ?>
            </nav>
        </div>
        <div id="logo">
            <a href="<?php echo $server_name ?>">
                <img src="img/logo.png" alt="">
            </a>
        </div>
        <div id="desktop-menu" class="display-none display-lg-flex">
            <div class="container">
                <?php foreach($array_menu as $item_menu): ?>
                <a href="<?php echo $item_menu['url'] ?>">
                    <?php echo $item_menu['nombre'] ?>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="header_social-links" class="active display-flex justify-content-center align-items-center">
            <a href="<?php echo $url_facebook ?>" class="link p-3">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="<?php echo $url_twitter ?>" class="link p-3">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="<?php echo $url_instagram ?>" class="link p-3">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
</header>