<header>
    <div class="container display-lg-flex">
        <div id="mobile_menu">
            <div id="mobile_menu_icon" class="display-lg-none">
                <div id="mobile_menu_open">
                    <i class="fa fa-bars"></i>
                </div>
                <div id="mobile_menu_close">
                    <i class="fa fa-close"></i>
                </div>
            </div>
            <nav id="mobile_menu_nav">
                <?php foreach($array_menu as $item_menu): ?>
                <a href="<?php echo $item_menu['url'] ?>">
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
        <div id="desktop_menu" class="display-none display-lg-flex">
            <div class="container">
                <?php foreach($array_menu as $item_menu): ?>
                <a href="<?php echo $item_menu['url'] ?>">
                    <?php echo $item_menu['nombre'] ?>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="social_header_links">
            <a href="<?php echo $url_facebook ?>">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="<?php echo $url_twitter ?>">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="<?php echo $url_instagram ?>">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
</header>