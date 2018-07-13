<?php
class Homeslider
{
    public static $images;
    public static $options;

    function __construct($images,$options)
    {
        self::setImages($images);
        self::setOptions($options);
    }
    function setImages($images)
    {
        self::$images = $images;
    }
    static function getImages()
    {
        return self::$images;
    }
    function setOptions($options)
    {
        self::$options = $options;
    }
    static function getOptions()
    {
        return self::$options;
    }

    static function renderWidget()
    {
        $images = self::getImages();
        $options = self::getOptions();
        ?>
            <div class='homeslider'>
                <div class='homeslider_div'>
        
        <?php        
        foreach($images as $image)
        {
            ?>
            
                    <div class='homeslider_img'>
                        <img src='<?php echo $image['url']; ?>' alt='<?php echo $image['alt']; ?>'>
                    </div>
            <?php
        }
        ?>
                </div>
                <div class='homeslider_nav'>
                    <div class='homeslider_nav_button homeslider_nav_prev'><i class='fa fa-angle-left'></i></div>
                    <div class='homeslider_nav_button homeslider_nav_next'><i class='fa fa-angle-right'></i></div>
                </div>
            </div>
        <?php
    }
}