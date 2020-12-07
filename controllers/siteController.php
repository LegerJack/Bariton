<?php
include ROOT.'/models/Product.php';
class SiteController
{
    public function actionIndex()
    {
        $getsproducts = Product::getProducts(6);
        $getcalltarifs = Product:: getConnectTarifs(3);
        require(ROOT.'/views/site/index.php');

        return true;
    }
}
