<?php
namespace core\models;



class BaseView
{
    public static string $footer = 'footer';
    public static string $header = 'header';
    public static function render(string $layout, array $data = [])
    {
        extract($data, EXTR_SKIP);
        ob_start();
        $fileHeader = COMPONENTS_PATH . self::$header . ".php";
       require $fileHeader;
       
       $fileLayout = LAYOUT_PATH . $layout . ".php";
       require $fileLayout;

       $fileFooter = COMPONENTS_PATH . self::$footer . ".php";
       require $fileFooter;
       
       echo ob_get_clean();

    }

    public static function renderSingle(string $layout, array $data = []) {
        extract($data, EXTR_SKIP);
        ob_start();
       
        $fileLayout = LAYOUT_PATH . $layout . ".php";
        require $fileLayout;
       
        echo ob_get_clean();
    }
}