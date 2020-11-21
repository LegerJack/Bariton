<? include_once ROOT.'/views/layout/header.php';?>
<main>
    <section>
      <div class="container position-absolute t-2">
        <div class="jumbotron bg-transparent text-center">
          <h4 class="display-4 text-uppercase ml-5"><b>Всегда на связи</b></h4>
          <h4 class="display-4 text-uppercase mr-5">С лучшим тоном</h4>
          <hr class="my2">
          <div class="lead text-uppercase text-center">Без переплат и прочих затрат</div>
        </div>
      </div>

      <div class="text-right">
        <img src="/template/img/PNG/1254377365_phone_man_39a3e-removebg-preview.png" width="550px" alt=""
          class="img-fluid mirror">
      </div>
    </section>
    <!-- Секция с тарифами  -->
    <section class="bg-secondary">
      <div class="container">
        <div class="row">

          <? foreach($getcalltarifs as $tarifs): ?>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="shadow rounded card my-4">
              <div class="card-body">
                <a href="#" class="card-title text-center h3 text-dark"><? echo $tarifs['name']?></a>
                <div class="my-3">
                  <div class="d-flex justify-content-between">Звонки <span><? echo $tarifs['minuts'] ?> Мин</span></div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <? echo ($tarifs['minuts']*100)/1000 ?>%" aria-valuenow="<? echo $tarifs['minuts'] ?>"
                      aria-valuemin="0" aria-valuemax="1000"></div>
                  </div>
                </div>
                <div class="my-3">
                  <div class="d-flex justify-content-between">Сообщения <span><? echo $tarifs['sms'] ?> Смс</span></div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <? echo ($tarifs['sms']*100)/1000 ?>%" aria-valuenow="<? echo $tarifs['sms'] ?>"
                      aria-valuemin="0" aria-valuemax="500"></div>
                  </div>
                </div>
                <div class="my-3">
                  <div class="d-flex justify-content-between">Интернет <span><? echo $tarifs['internet'] ?> Гб</span></div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width:<? echo ($tarifs['internet']*100)/50 ?>%" aria-valuenow="<? echo $tarifs['internet'] ?>" aria-valuemin="0"
                      aria-valuemax="200"></div>
                  </div>
                </div>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit,
                  amet consectetur adipisicing elit.</p>
                <div class="card-footer text-center">
                  <div class="d-flex justify-content-between border-bottom mb-2">
                    <div class="text-black-50 align-bottom pt-2">Цена:</div>
                    <h3 class="text-dark font-weight-bold "><? echo $tarifs['price']?><object data="/template/img/SVG/ruble.svg"
                        type="image/svg+xml"></object></h3>
                  </div>
                  <button class="btn btn-dark btn-block">Купить</button>
                </div>
              </div>
            </div>
          </div>
          <? endforeach; ?>
        </div>

        <div class="text-center mt-2 pb-2">
          <a href="/tarifs/" class="text-light">Все тарифы</a>
        </div>

      </div>
    </section>

    <section>
      <div class="container my-4">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <img src="/template/img/JPG/Razgovor-po-telefonu-na-angliyskom.jpg" alt="" class="card-img mirror">
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <p class="lead">
                  Переходите к нам с своим номером телефона!
                  <br>
                  Оставляйте заявку на сайте и наши сотрудники свяжутся с вами в ближайшее время.
                </p>
                <form action="" class="form-group">
                  <div class="mt-2">
                    <label for="client-name">Как вас зовут?</label>
                    <input type="text" class="form-control" id="client-name">
                  </div>
                  <div class="mt-2">
                    <label for="client-phone">Ваш номер телефона</label>
                    <input type="tel" class="form-control" id="client-phone">
                  </div>
                  <input type="submit" class="btn btn-block btn-secondary mt-4" value="Оставить заявку">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Секция с товарами -->

    <section class="bg-secondary">
      <div class="container">
        <div class="row">
          <? foreach($getsproducts as $products): ?>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="shadow rounded card my-4">
              <div class="card-body">
                <h5 class="card-title "><? echo $products['name'] ?></h5>
                <img class="card-img-top mb-3" src="/template/img/JPG/1_184818.jpg" alt="">
                <div class="card-footer text-center">
                  <div class="d-flex justify-content-between border-bottom mb-2">
                    <div class="text-black-50 align-bottom pt-2">Цена:</div>
                    <h3 class="text-dark font-weight-bold "><? echo $products['price'] ?><object data="/template/img/SVG/ruble.svg"
                        type="image/svg+xml"></object></h3>
                  </div>
                  <a href="#" class="btn btn-dark btn-block">
                    Купить <object data="/template/img/SVG/cart.svg" type="image/svg+xml"></object>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <? endforeach; ?>
        </div>

        <div class="text-center mt-2 pb-2">
          <a href="/catalog/" class="text-light">Все товары</a>
        </div>

      </div>
    </section>
  </main>
<? include_once ROOT.'/views/layout/footer.php'; ?>