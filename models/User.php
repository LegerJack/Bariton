<?php
class User
{
    /**
     * @param $login
     * @param $pass
     * @return bool
     * Регистрирует нового пользователя в системе
     */
    public static function register($login, $pass){
        $db = Db::getDbConnection();

        $sql = "INSERT INTO `пользователи` (`Логин`, `Пароль`, `этоСотрудник`)".
        "VALUES (:login, :pass, 0)";


        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':pass', $pass, PDO::PARAM_STR);

        return $result->execute();
    }

    /**
     * @param $email
     * @return bool
     * Проверяет входяший e-mail на существование в базе данных
     */
    public static function checkEmailExists($email){
        $db = Db::getDbConnection();

        $sql = 'SELECT COUNT(*) FROM `покупатели`,`сотрудники` WHERE `E-mail` = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn())
            return true;
        return false;
    }

    public static function checkEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }

    /**
     * @param $phone
     * @param $password
     * @return false|string
     * Проверяет наличие пользователя в базе данных
     */
    public static function checkUserData($phone, $password){
        $db = Db::getDbConnection();

        $sql = 'SELECT * FROM `покупатели`,`пользователи` WHERE `Телефон` = :phone AND `Пароль` = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();
        if($user){
            return $user['Логин'];
        }

        return $user;
    }

    public static function checkLogin($login){
        if (strlen($login) >= 2){
            return true;
        }
        return false;
    }

    public static function checkPassword($password){
        if (strlen($password) >= 6){
            return true;
        }
        return false;
    }

    public static function auth($userLogin){
        $_SESSION['user'] = $userLogin;
    }

    /**
     * @return boolean
     * Проверка пользователя на
     * гостя сайта
     */
    public static function isGuest(){
        if(isset($_SESSION['user'])){
            return false;
        }
        return true;
    }

    /**
     * @return string
     * $_SESSION['user'] = $userLogin
     * <br>
     * Проверяет нахождение пользователя
     * в сессии
     */
    public static function checkLogged(){
        //Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])){
            return $_SESSION['user'];
        }

        header("Location: /user/login");
    }

    public static function checkBox($consent){
        if($consent == 'true'){
            return true;
        }
        return false;
    }

    public static function checkTel($userTel){
        if (strlen($userTel) >= 8){
            return true;
        }
        return false;
    }

    /**
     * @param $login
     * @return mixed
     */
    public static function getUserById($login){
        if($login){
            $db = Db::getDbConnection();
            $sql = 'SELECT * FROM `покупатели` WHERE `Логин` = :login';

            $result = $db->prepare($sql);
            $result->bindParam(':login', $login, PDO::PARAM_STR);

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();


            return $result->fetch();
        }
    }
}