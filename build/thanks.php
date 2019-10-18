<!-- <!DOCTYPE html> -->
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=800, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Ремонт квартир</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/animate.css">
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
              Спасибо за заявку
            </h1>
            <span class="hero-text__subtitle">
              мы перезваним вам через 15 минут
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
        <form id="modal-form" action="#">
            <input type="text" name="username" class="input modal-dialog__input" placeholder="Ваше имя">
            <input type="text" name="phone" class="input modal-dialog__input phone" placeholder="Ваш телефон">
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
  <script>
    new WOW().init();
    $(document).ready(function() {
      $('.slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('.arrows__left'),
        nextArrow: $('.arrows__right'),
        responsive: [
            {
            breakpoint: 1200,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    })
  </script>
</body>

</html>