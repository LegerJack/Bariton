<?
include ROOT.'/models/User.php';
class userController
{

    public function actionSignin()
    {
        $phone = '';
        $password = '';

        if (isset($_POST['submit'])){
            $phone = $_POST['phone'];
            $password = $_POST['password'];

            $errors = false;

            if(User::checkPassword($password)){
            }else {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            //Проверка на существование пользователя
            $userLogin = User::checkUserData($phone, $password);

            if ($userLogin == false){
                $errors[] = 'Неверный логин или пароль';
            }
            else{
                header('Location: /user/account/');

                User::auth($userLogin);
            }
        }

        require_once(ROOT.'/views/user/signin.php');

        return true;
    }

    public function actionSignout()
    {
        header('Location: ');
        unset($_SESSION['user']);
    }

    public function actionAccount()
    {
        $userLogin = User::checkLogged();

        $user = User::getUserById($userLogin);

        require_once(ROOT . '/views/user/account.php');

        return true;
    }
}