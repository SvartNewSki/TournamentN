<?php
namespace core\models;



class BaseView
{
    public string $layout = 'main';
    public string $footer = 'footer';
    public string $header = 'header';
    public function render()
    {
       $fileLayout = LAYOUT_PATH . $this->layout . ".php";
       $layoutContent = file_get_contents($fileLayout);

       $fileFooter = BLOCKS_PATH . $this->footer . ".php";
       $footerContent = file_get_contents($fileFooter);
       
       $fileHeader = BLOCKS_PATH . $this->header . ".php";
       $headerContent = file_get_contents($fileHeader);

       echo $headerContent . $layoutContent . $footerContent;

    }
}