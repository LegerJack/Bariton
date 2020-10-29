<?php
class Db{
    public function getDbConnection(){
        $parametrs = ROOT.'/config/db_parametrs.php';
        $params = include($parametrs);

        $dbdata = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dbdata, $params['login'], $params['password']);
        $db->exec("set name utf8");

        return $db;
    }
}


?>