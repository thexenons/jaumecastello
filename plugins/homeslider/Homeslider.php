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

        $html =    "<div class='homeslider'>
                        <div class='homeslider_div'>";
        
        foreach($images as $image)
        {
            $html .=       "<div class='homeslider_img'>
                                <img src='{$image['url']}' alt='{$image['alt']}'>
                            </div>";
        }
        
        $html .=       "</div>
                    </div>";

        return $html;
    }
}