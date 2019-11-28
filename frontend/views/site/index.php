<?php

/* @var $this yii\web\View */

$this->title = 'Заказ авто. пропусков РЭУ';
?>

  <section class="services">
    <div class="container">
      <div class="services__top">
        <div class="services__title-box">
          <div class="services__title">Наши услуги</div>
          <div class="services__text">Обработка заявок на разные виды пропусков.</div>
        </div>
        <div class="services__btn">
          <a href="#">Показать все услуги
          </a>
        </div>
      </div>
      <div class="services__items">
        <div class="services__item">
          <img src="img/services-1.png" alt="">
          <div class="services__item-title">Автомобильные пропуска</div>
          <div class="services__item-text">Подача заявки на автомобильный пропуск в РЭУ Им. Г.В. Плеханова</div>
          <div class="services__item-btn">
            <a href="" class="services__item-link">Подробнее</a>
            <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
              Заказать
            </a>
          </div>
        </div>
        <div class="services__item">
          <img src="img/services-2.png" alt="">
          <div class="services__item-title">Временные пропуска</div>
          <div class="services__item-text">Подача заявки на временный пропуск в РЭУ Им. Г.В. Плеханова</div>
          <div class="services__item-btn">
            <a href="" class="services__item-link">Подробнее</a>
            <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
              Заказать
            </a>
          </div>
        </div>
        <div class="services__item">
          <img src="img/services-3.png" alt="">
          <div class="services__item-title">Обычные пропуска</div>
          <div class="services__item-text">Подача заявки на обычный пропуск в РЭУ Им. Г.В. Плеханова</div>
          <div class="services__item-btn">
            <a href="" class="services__item-link">Подробнее</a>
            <a data-fancybox data-src="#modal" href="javascript:;" class="default-btn">
              Заказать
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> <!-- Services -->
    </div>
  </footer>

  <div id="modal">
      <form>
        <input type="text" placeholder="Ваше имя">
        <input type="text" placeholder="Ваше телефон">
        <input type="submit" value="Отправить">
      </form>
    </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>