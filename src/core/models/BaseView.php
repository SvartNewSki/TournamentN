<?php
namespace core\models;

class BaseView
{
    public string $layout = 'main';
    public function render()
    {
        $fileLayout = LAYOUT_PATH . $this->layout . ".php";
        echo file_get_contents($fileLayout);
    }
}