<? include ROOT . '/views/layout/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mx-auto m-2 bg-light">

                        <?php if (isset($errors) && is_array($errors)) : ?>
                            <ul>
                                <? foreach ($errors as $error) : ?>
                                    <li> - <? echo $error ?></li>
                                <? endforeach; ?>
                            </ul>
                        <? endif; ?>
                    <div class="row no-gutters">
                        <div class="col-6">
                            <div class="card-body">
                                <form action=" " method="POST" class="mx-auto">

                                    <h2>Вход</h2>
                                    <div class="form-group">
                                        <label for="">Номер телефона</label>
                                        <input type="tel" name="phone" class="form-control" placeholder="+7(901)-111-11-11"
                                               value="<? echo $phone ?>">
                                        <label for="">Пароль</label>
                                        <input type="password" name="password" class="form-control" placeholder=" "
                                               value="<? echo $password ?>">
                                        <button class="btn btn-dark m-2" name="submit" type="submit">Войти</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col-6">
                            <img src="<? ROOT ?>/template/img/JPG/e3de1c928314f.JPG" alt="london_telephony" style="width: 100%; height: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? include ROOT . '/views/layout/footer.php' ?>