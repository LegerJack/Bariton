<?php include ROOT . '/views/layout/header.php';
print_r($user);
?>
        <div class="container">
            <h1>Личный кабинет</h1>
            <h3><? echo $user['Имя'] . ' ' . $user['Фамилия']; ?></h3>
            <a href="user/edit" class="redact">Редактировать данные</a>
        </div>
<?php include ROOT . '/views/layout/footer.php' ?>