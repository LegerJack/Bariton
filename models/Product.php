<?php

class Product
{
    const SHOW_BY_DEFAULT = 12;
    /**
    * 
    */
    public static function  getProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);

        $db = Db::getDbConnection();
        $products = array();

        $result = $db->query('SELECT `id товара`,`Название`,`Вид товара`,`Цена`,`Фотография` FROM `товар` ORDER BY `id товара` DESC LIMIT ' . $count);


        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id товара'];
            $products[$i]['name'] = $row['Название'];
            $products[$i]['type'] = $row['Вид товара'];
            $products[$i]['price'] = $row['Цена'];
            $products[$i]['photo'] = $row['Фотография'];
            $i++;
        }
        return $products;
    }

    /**
     * 
     * 
     * 
     */
    public static function  getConnectTarifs($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);

        $db = Db::getDbConnection();
        $products = array();

        $result = $db->query('SELECT `id тарифа`,`Название`,`Минуты`,`СМС`,`Интернет`,`Цена_за_месяц` FROM `связные тарифы` ORDER BY `id тарифа` LIMIT ' . $count);


        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id тарифа'];
            $products[$i]['name'] = $row['Название'];
            $products[$i]['minuts'] = $row['Минуты'];
            $products[$i]['sms'] = $row['СМС'];
            $products[$i]['internet'] = $row['Интернет'];
            $products[$i]['price'] = $row['Цена_за_месяц'];
            $i++;
        }
        return $products;
    }

    /**
     * 
     * 
     * 
     */
    public static function getAllDevices()
    {
        $db = Db::getDbConnection();
        $products = array();

        $result = $db->query('SELECT `id товара`,`Название`,`Вид товара`,`Цена`,`Фотография` FROM `товар` ORDER BY `id товара`');

        $i = 0;
        while($row = $result->fetch()){
            $products[$i]['id'] = $row['id товара'];
            $products[$i]['name'] = $row['Название'];
            $products[$i]['type'] = $row['Вид товара'];
            $products[$i]['price'] = $row['Цена'];
            $products[$i]['photo'] = $row['Фотография'];
            $i++;
        }
        return $products;
    }

    /**
     * 
     * 
     */
    public static function getAllTarifs()
    {
        $db = Db::getDbConnection();
        $products = array();

        $result = $db->query('SELECT `id тарифа`,`Название`,`Минуты`,`СМС`,`Интернет`,`Цена_за_месяц` FROM `связные тарифы` ORDER BY `id тарифа`');


        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id тарифа'];
            $products[$i]['name'] = $row['Название'];
            $products[$i]['minuts'] = $row['Минуты'];
            $products[$i]['sms'] = $row['СМС'];
            $products[$i]['internet'] = $row['Интернет'];
            $products[$i]['price'] = $row['Цена_за_месяц'];
            $i++;
        }
        return $products;
    }
}
