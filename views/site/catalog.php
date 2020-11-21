<? require_once(ROOT.'/views/layout/header.php');?>
<section class="bg-secondary">
    <div class="container">
        <div class="row">
            
            <? if(stristr($_SERVER['REQUEST_URI'],'device')): ?>

            <? foreach($getdevices as $devices): ?>
            <div class="col-sm-4 col-md-4 col-lg-3">
                <div class="shadow rounded card my-4">
                    <div class="card-body">
                        <h5 class="card-title ">
                            <? echo $devices['name'] ?>
                        </h5>
                        <img class="card-img-top mb-3" src="/template/img/JPG/1_184818.jpg" alt="">
                        <div class="card-footer text-center">
                            <div class="d-flex justify-content-between border-bottom mb-2">
                                <div class="text-black-50 align-bottom pt-2">Цена:</div>
                                <h3 class="text-dark font-weight-bold ">
                                    <? echo $devices['price'] ?><object data="/template/img/SVG/ruble.svg" type="image/svg+xml"></object></h3>
                            </div>
                            <a href="#" class="btn btn-dark btn-block">
                                Купить <object data="/template/img/SVG/cart.svg" type="image/svg+xml"></object>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <? endforeach; ?>

            <? else: ?>

            <? foreach($gettarifs as $tarifs): ?>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="shadow rounded card my-4">
                    <div class="card-body">
                        <a href="#" class="card-title text-center h3 text-dark">
                            <? echo $tarifs['name']?></a>
                        <div class="my-3">
                            <div class="d-flex justify-content-between">Звонки <span>
                                    <? echo $tarifs['minuts'] ?> Мин</span></div>
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
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit,
                            amet consectetur adipisicing elit.</p>
                        <div class="card-footer text-center">
                            <div class="d-flex justify-content-between border-bottom mb-2">
                                <div class="text-black-50 align-bottom pt-2">Цена:</div>
                                <h3 class="text-dark font-weight-bold ">
                                    <? echo $tarifs['price']?><object data="/template/img/SVG/ruble.svg" type="image/svg+xml"></object></h3>
                            </div>
                            <button class="btn btn-dark btn-block">Купить</button>
                        </div>
                    </div>
                </div>
            </div>
            <? endforeach; ?>

            <? endif; ?>
        </div>
    </div>
</section>
<? require_once(ROOT.'/views/layout/footer.php')?>