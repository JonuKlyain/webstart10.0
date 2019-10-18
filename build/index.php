<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=320, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Ремонт квартир</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <a id="totop" class="show hidden"></a>
  
  <?php include('navbar.php');?>

  <main>
    <section class="hero">
      <div class="container">
        <div class="hero-block">
          <div class="hero-text">
            <h1 class="hero-text__title">
              Внутренняя отделка помещений "под ключ"
            </h1>
            <span class="hero-text__subtitle">
              с гарантией качества, прописанной в договоре
            </span>
            <ul class="hero-list">
              <li class="hero-list__item wow fadeInLeft" data-wow-delay=".1s">
                <div class="hero-list__image">
                  <img src="img/clock.png" alt="Часы" />
                </div>
                <span class="hero-list__text">
                  Точно соблюдаем сроки
                </span>
              </li>
              <li class="hero-list__item wow fadeInLeft" data-wow-delay=".5s">
                <div class="hero-list__image">
                  <img src="img/calculator.png" alt="Калькулятор" />
                </div>
                <span class="hero-list__text">
                  Рассчитаем смету на работы и материалы в день обращения
                </span>
              </li>
              <li class="hero-list__item wow fadeInLeft" data-wow-delay=".9s">
                <div class="hero-list__image">
                  <img src="img/paint.png" alt="Краски" />
                </div>
                <span class="hero-list__text test">
                  Предложим более 100 вариантов исполнения дизайна Вашего
                  жилья
                </span>
              </li>
            </ul>
          </div>
          <div class="hero-image">
            <img src="img/hero-img.jpg" alt="План квартиры" />
          </div>
        </div>
      </div>
    </section>
  </main>

  <section class="offer section">
    <div class="container">
      <div class="offer-block wow fadeInLeft" data-wow-delay="0.2s">
        <h1 class="section-title offer__title">
          Мы бесплатно разработаем дизайн-проект Вашего жилья и реализуем его!
        </h1>
        <span class="section-subtitle offer__subtitle">Оставьте заявку на разработку бесплатного дизайн-проекта!</span>

        <form id="offer-form" action="mail.php" method="POST" class="form offer-form">

          <input class="input offer-block__input" name="username" type="text" placeholder="Ваше имя">
          <input class="input offer-block__input phone" name="phone" type="tel" placeholder="Ваш телефон">
          <button id="button-form" class="button offer-block__button">
            Получить бесплатный дизайн-проект</button>
          <p class="submitted-form show">Форма отправлена</p>

          <div class="offer-trigger">
            <span class="offer-trigger__text">Наш менеджер перезвонит Вам в течение 60 секунд</span>
            <div class="offer-trigger__phone">
              <span class="tel-teg">или перезвоните нам сами</span>
              <a href="tell:+7(495)42-251-31" class="navbar__phone number">+7 (495) 42-251-31</a>
            </div>
          </div>

        </form>
      </div>
    </div>
  </section>

  <section class="section portfolio">
    <div class="container">
      <h2 class="section-title portfolio__title wow fadeInDown" data-wow-delay="0.2s">
        Работая с 2007 года, мы сделали более 500 ремонтов в квартирах и домах
      </h2>

      <div class="slider">
        <div class="slider__item">
          <img class="slider__image" src="img/portfolio/portfolio-img-1.jpg" alt="Картинка">
        </div>
        <div class="slider__item">
          <img class="slider__image" src="img/portfolio/portfolio-img-2.jpg" alt="Картинка">
        </div>
        <div class="slider__item">
          <img class="slider__image" src="img/portfolio/portfolio-img-3.jpg" alt="Картинка">
        </div>
        <div class="slider__item">
          <img class="slider__image" src="img/portfolio/portfolio-img-1.jpg" alt="Картинка">
        </div>
        <div class="slider__item">
          <img class="slider__image" src="img/portfolio/portfolio-img-2.jpg" alt="Картинка">
        </div>
        <div class="slider__item">
          <img class="slider__image" src="img/portfolio/portfolio-img-3.jpg" alt="Картинка">
        </div>
      </div>

      <div class="arrows portfolio__arrows">
        <div class="arrows__left"><img src="img/portfolio/left-arrow.png" alt="Левая кнопка"></div>
        <div class="arrows__right"><img src="img/portfolio/right-arrow.png" alt="Правая кнопка"></div>
      </div>
    </div>
  </section>

  <section class="section price">
    <div class="container">
      <h2 class="section-title price__title element">У нас очень гибкая система скидок на комплексные работы!</h2>
      <span class="section-subtitle price__subtitle">Прайс на наши услуги</span>
      <div class="cards">
        <div class="card price__card wow fadeInUp" data-wow-delay="0.1s">
          <div class="card__img"><img src="img/price/price-img-1.jpg" alt="Здесь каринка"></div>
          <h4 class="price__text">Ремонт ванных комнат и с/у</h4>
          <a href="#" class="price__link">Узнать цены</a>
        </div>
        <div class="card price__card wow fadeInUp" data-wow-delay="0.2s">
          <div class="card__img"><img src="img/price/price-img-1.jpg" alt="Здесь каринка"></div>
          <h4 class="price__text">Ремонт комнат и квартир</h4>
          <a href="#" class="price__link">Узнать цены</a>
        </div>
        <div class="card price__card wow fadeInUp" data-wow-delay="0.3s">
          <div class="card__img"><img src="img/price/price-img-1.jpg" alt="Здесь каринка"></div>
          <h4 class="price__text">Отделка офисных помещений</h4>
          <a href="#" class="price__link">Узнать цены</a>
        </div>
        <div class="card price__card wow fadeInUp" data-wow-delay="0.4s">
          <div class="card__img"><img src="img/price/price-img-1.jpg" alt="Здесь каринка"></div>
          <h4 class="price__text">Ремонт в новостройках</h4>
          <a href="#" class="price__link">Узнать цены</a>
        </div>
        <div class="card price__card wow fadeInUp" data-wow-delay="0.5s">
          <div class="card__img"><img src="img/price/price-img-1.jpg" alt="Здесь каринка"></div>
          <h4 class="price__text">Ремонт кухонь</h4>
          <a href="#" class="price__link">Узнать цены</a>
        </div>
        <div class="card price__card wow fadeInUp" data-wow-delay="0.6s">
          <div class="card__img"><img src="img/price/price-img-1.jpg" alt="Здесь каринка"></div>
          <h4 class="price__text">Ремонт дач и коттеджей</h4>
          <a href="#" class="price__link">Узнать цены</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section step">
    <div class="container">
      <h2 class="section-title step__title">Наши специалисты готовы выехать на замер в любое удобное для Вас время</h2>
      <span class="section-subtitle step__subtitle">5 шагов до ремонта</span>
      <div class="steps-block steps__block">
        <div class="steps__item">
          <div class="steps__img"><img src="img/step/woman.png" alt="Женщина"></div>
          <p class="steps__text">Вы звоните нам или оставляете заявку</p>
        </div>
        <div class="steps__item">
          <div class="steps__img"><img src="img/step/clock.png" alt="Часы"></div>
          <p class="steps__text">Согласуем удобное для Вас время выезда специалиста на замер</p>
        </div>
        <div class="steps__item">
          <div class="steps__img"><img src="img/step/money.png" alt="Деньги"></div>
          <p class="steps__text">Рассчитываем смету согласовываем с Вами</p>
        </div>
        <div class="steps__item">
          <div class="steps__img"><img src="img/step/document.png" alt="Документ"></div>
          <p class="steps__text">Подписываем договор закупаем материал по оптовым ценам</p>
        </div>
        <div class="steps__item">
          <div class="steps__img"><img src="img/step/calendar.png" alt="Календарь"></div>
          <p class="steps__text">Выполняем ремонт в указанные сроки</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section feature">
    <div class="feature-title"><h2 class="section__title feature__title">Ремонт обойдется Вам дешевле, так как мы используем качественные материалы по оптовым ценам</h2></div>
    <div class="container">
      <div class="feature-block">
        <div class="features">
          <p class="features__text">Поможем закупить все материалы по оптовым ценам у проверенных поставщиков</p>
          <div class="features__img"><img src="img/feature/feature-img-1.png" alt=""></div>
        </div>
        <div class="features">
          <p class="features__text">Мы дадим Вам <strong>максимальные скидки</strong> у наших партнеров для закупки материалов оптом</p>
          <div class="features__img"><img src="img/feature/feature-img-2.png" alt=""></div>
        </div>
        <div class="features">
          <p class="features__text">Все, что не сможете найти в городе - поможем заказать <strong>у проверенных поставщиков</strong></p>
          <div class="features__img"><img src="img/feature/feature-img-3.png" alt=""></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section docs">
    <div class="container">
      <div class="docs-title">
        <h2 class="section__title docs__title">Все наши гарантийные обязательства подробно и прозрачно описаны в договоре</h2>
      </div>
      <div class="docs-block">
        <div class="doc">
          <div class="doc__img"><img src="img/docs/doc-1.png" alt=""></div>
          <p class="doc__text">Гарантия на качество выполняемых работ</p>
        </div>
        <div class="doc">
          <div class="doc__img"><img src="img/docs/doc-1.png" alt=""></div>
          <p class="doc__text">Гарантия на фиксированные цены Виды работ и цены на них прописаны в договоре</p>
        </div>
        <div class="doc">
          <div class="doc__img"><img src="img/docs/doc-1.png" alt=""></div>
          <p class="doc__text">Гарантия на точное соблюдение сроков и ответственность за их невыполнение</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section brif">
    <div class="container">
      <div class="brif-block">
        <div class="brif__interview">
          <h3 class="interview__title">Мы можем озвучить Вам примерную стоимость работы и материалов по телефону</h3>
          <span class="interview__subtitle">Для этого нужно ответить на 4 вопроса:</span>
          <ul class="interview__list">
            <li class="interview__item">
              <span class="number">1.</span>
              <span class="contain">Какова площадь помещения?</span>
            </li>
            <li class="interview__item">
              <span class="number">2.</span>
              <span class="contain">У Вас новостройка или вторичное жилье?</span>
            </li>
            <li class="interview__item">
              <span class="number">3.</span>
              <span class="contain">Где находится помещение, в котором будет производиться ремонт?</span>
            </li>
            <li class="interview__item">
              <span class="number">4.</span>
              <span class="contain">Назначение помещения?</span>
            </li>
          </ul>
        </div>
        <div class="brif__form">
          <h3 class="form__title">Оставьте заявку на бесплатный расчет ремонта по телефону</h3>
          <span class="form__subtitle">Для этого заполните форму ниже</span>
          <form  action="mail.php" method="POST" id="brif-form">
            <div class="input-group"><input type="text" name="username" class="input form__input" placeholder="Ваше имя"></div>
            <div class="input-group"><input type="email" name="email" class="input form__input" placeholder="Ваш email"></div>
            <div class="input-group"><input type="tel" name="phone" class="input form__input phone" placeholder="Ваш телефон"></div>
            <button class="button form__button">Рассчитать стоимость</button>
            <p class="submitted-form show">Форма отправлена</p>
            <span class="form__description">Мы перезвоним Вам в течение 60 секунд</span>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div id="map" class="map">
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7e994603a7524c707d1700493fa6796826249b3bc0c73c17cd0636032622a34b&amp;width=100%25&amp;height=640&amp;lang=ru_RU&amp;scroll=follse"></script>
    </div>
    <div class="contacts-block">
      <div class="contacts">
          <h3 class="contacts__title">Приезжайте к нам в гости! <br> Проконсультируем Вас по всем вопросам ремонта</h3>
          <ul class="contacts__list">
            <li class="contacts__item">
              <span class="contacts__icon">
                <img src="img/footer/map.png" alt="Карта">
              </span>
              <span class="contacts__text">г. Москва <br><strong>ул. Ленинга, д. 10,<br>корпус 2, оф. 308</strong></span>
            </li>
            <li class="contacts__item">
              <span class="contacts__icon">
                <img src="img/footer/clock.png" alt="Часы">
              </span>
              <span class="contacts__text">Режим работы: <br><strong>с 9:00 до 18:00</strong></span>
            </li>
            <li class="contacts__item">
              <span class="contacts__icon">
                <img src="img/footer/phone.png" alt="Телефон">
              </span>
              <span class="contacts__text">Телефон: <br>   
                  <a href="tel:+7(495)42-251-31" class="navbar__phone">+ 7 (495) 42-251-31</a></span>
            </li>
          </ul>
      </div>
    </div>
  </footer>

  <div class="modal" id="modal">
    <div class="modal-dialog">
      <button class="modal-dialog__close" id="close">&times</button>
      <h4 class="modal-dialog__title">
          Узнайте точную стоимость ремонта по телефону!          
      </h4>
      <span class="modal-dialog__subtitle">
          Заполните поля ниже - мы свяжемся с Вами
      </span>
        <form id="modal-form" action="mail.php" method="POST">
            <input type="text" name="username" class="input modal-dialog__input" placeholder="Ваше имя">
            <input type="tel" name="phone" class="input modal-dialog__input phone" placeholder="Ваш телефон">
            <button class="button modal-dialog__button">Узнать стоимость</button>
        </form>
      <span class="modal-dialog__telteg">Или Вы можете перезвонить нам сами<br> по телефону:</span>
      <a href="tell:+7(495)42-251-31" class="navbar__phone modal-dialog__tel">+7 (495) 42-251-31</a>
    </div>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>

</body>

</html>