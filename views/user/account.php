<?php include ROOT . '/views/layout/header.php';
// print_r($user);
?>
<div class="container">
    <div class="d-flex align-items-center p-3 my-3 text-white bg-secondary rounded shadow-sm">
        <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
        </svg>
        <div class="mx-3">
            <h4 lh-100>
                <?= $user['Имя'] . " " . $user['Фамилия'] ?>
                <br>
                <strong><?= $user['Телефон'] ?></strong>
            </h4>
        </div>
    </div>

    <div class="card-group p-3 my-4 rounded shadow-sm">
        <div class="card border-0">
            <div class="card-body">
                <a href="#" class="card-title text-center h3 text-dark">
                    <? echo $tarifs['name']?>
                </a>
                <div class="my-3">
                    <div class="d-flex justify-content-between">
                        Звонки
                        <span>
                            <? echo $tarifs['minuts'] ?> Мин</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <? echo ($tarifs['minuts']*100)/1000 ?>%" aria-valuenow="<? echo $tarifs['minuts'] ?>" aria-valuemin="0" aria-valuemax="1000"></div>
                    </div>
                </div>
                <div class="my-3">
                    <div class="d-flex justify-content-between">Сообщения <span>
                            <? echo $tarifs['sms'] ?> Смс</span></div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <? echo ($tarifs['sms']*100)/1000 ?>%" aria-valuenow="<? echo $tarifs['sms'] ?>" aria-valuemin="0" aria-valuemax="500"></div>
                    </div>
                </div>
                <div class="my-3">
                    <div class="d-flex justify-content-between">Интернет <span>
                            <? echo $tarifs['internet'] ?> Гб</span></div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width:<? echo ($tarifs['internet']*100)/50 ?>%" aria-valuenow="<? echo $tarifs['internet'] ?>" aria-valuemin="0" aria-valuemax="200"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row mb-4">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <a href="" class="btn btn-block btn-lg bg-dark text-white shadow-sm">
                    Доп.услуги
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <a href="" class="btn btn-block btn-lg bg-secondary text-white shadow-sm">
                    Пополнить баланс
                </a>
            </div>
        </div>
</div>

</div>
<?php include ROOT . '/views/layout/footer.php' ?>