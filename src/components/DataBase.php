<?php
namespace Src\Components;

use PDO;
use PDOException;

class DataBase {

    const PARAMETERS_PATH = ROOT.'/config/db_parametrs.php';
    private $parameters;

    public function __construct()
    {
        $this->parameters = self::getData();
    }

    public static function getDbConnection() 
    {

        try {
            $dbdata = self::getData();

            $db = new PDO("mysql:host={$dbdata['host']};dbname={$dbdata['dbname']}", $dbdata['user'], $dbdata['password']);
            $db->exec("set name utf8");

        } catch(PDOException $exp) {

            die("Could not connect to {$dbdata['dbname']}: ". mb_convert_encoding($exp->getMessage(), 'UTF-8', 'windows-1251'));
        }

        return $db;
    }

    protected static function getData() {
        return require(self::PARAMETERS_PATH);
    }
}
?>