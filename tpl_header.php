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
                <a href="<?php echo $item_menu['url'] ?>"><?php echo $item_menu['nombre'] ?></a>
                <?php endforeach; ?>
            </nav>
        </div>
        <div id="logo">
            <a href="<?php echo $server_name ?>">
                <img src="img/logo.png" alt="">
            </a>
        </div>
        <div class="desktop_menu display-none display-lg-flex">
            <div class="container">
                <?php foreach($array_menu as $item_menu): ?>
                <a href="<?php echo $item_menu['url'] ?>"><?php echo $item_menu['nombre'] ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</header>