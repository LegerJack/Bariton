<?
class Db{
    public static function getDbConnection(){
        $parametrs = ROOT.'/config/db_parametrs.php';
        $params = include($parametrs);
        
        try {
            $dbdata = "mysql:host={$params['host']};dbname={$params['dbname']}";
            $db = new PDO($dbdata, $params['user'], $params['password']);
            $db->exec("set name utf8");
        }
        catch(PDOException $exp){
            die("Could not connect to {$params['dbname']}: ". mb_convert_encoding($exp->getMessage(), 'UTF-8', 'windows-1251'));
        }

        return $db;
    }
}
?>