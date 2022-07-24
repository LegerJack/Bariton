<?php
namespace Src\Components;

use PDO;
use PDOException;
use Src\Components\DataBaseParameters;

class DataBaseConnection {

    const PARAMETERS_PATH = ROOT.'/config/db_parametrs.php';

    /**@var \Src\Components\DataBaseParameters */
    private $parameters;

    /**
     * Метод инициализирует класс PDO для пордключения к Базе Данных
     * @return PDO
     */
    public static function getDbConnection()
    {
        $connection = new DataBaseConnection();

        try {
            $db = new PDO(
                $connection->getStringDSN(),
                $connection->parameters->get('user'),
                $connection->parameters->get('password')
            );
            $db->exec("set name utf8");

        } catch(PDOException $exp) {

            die("Could not connect to {$connection->parameters->get('dbname')}: " .
                mb_convert_encoding($exp->getMessage(), 'UTF-8', 'windows-1251')
            );
        }

        return $db;
    }

    /**
     * DataBaseConnection constructor.
     */
    private function __construct()
    {
        self::initCollectingData();
        $this->parameters = DataBaseParameters::getInstance();
    }

    /**
     * Метод возвращает строку с данными подключения в Базе Данных
     * @return string
     */
    protected function getStringDSN()
    {
        return "mysql:host={$this->parameters->get('host')};dbname={$this->parameters->get('dbname')}";
    }

    /**
     * Метод подключает файл сбора параметров для подключения к Базе Данных
     */
    protected static function initCollectingData(): void
    {
        require_once(self::PARAMETERS_PATH);
    }
}
?>