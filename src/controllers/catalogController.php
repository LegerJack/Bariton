<?php
include ROOT . '/models/Product.php';
class catalogController
{
    public function actionDevices()
    {
        $getdevices = Product::getAllDevices();

        require_once(ROOT.'/views/site/catalog.php');
        return true;
    }

    public function actionTarifs()
    {
        $gettarifs = Product::getAllTarifs();
        
        require_once(ROOT.'/views/site/catalog.php');
        return true;
    }
}
