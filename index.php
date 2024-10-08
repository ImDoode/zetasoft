<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'index'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header">
      <!-- copy inside <header id="ccphupper" -->
      <?php include './partials/_header.php'; ?>
      <!-- end copy inside <header id="ccphupper" -->
    </div>
    <div class="container__content">
      <!-- copy inside <section id="ccphworkarea" class="page_full-width"> -->
      <section class="section section--main">
        <div class="wrapper wrapper--main-bg-image">
          <h1 class="section__title">Автоматизируем бизнес-процессы с&nbsp;помощью собственных IT-решений и&nbsp;продуктов 1С</h1>
          <div class="tools">
            <div class="tools__item js-tool-item">
              <button class="button  js-tool-toggler button--dot">Kanban</button>
              <div class="tools__panel js-tool-panel">
                <div class="panel panel--no-shadow panel--sm">
                  <div class="panel__head panel__head--black">
                    <button class="panel__close button button--no-decoration js-tool-panel-close"><span class="icon icon--cross"></span></button>
                  </div>
                  <div class="panel__content">Это система постановки задач и организации рабочих процессов для эффективного достижения поставленных целей, которая предполагает максимальную прозрачность продвижения работ</div>
                </div>
              </div>              
            </div>
            <div class="tools__item js-tool-item">
              <button class="button  js-tool-toggler button--dot button--cyan">Gherkin</button>
              <div class="tools__panel js-tool-panel">
                <div class="panel panel--no-shadow panel--sm">
                  <div class="panel__head panel__head--black">
                    <button class="panel__close button button--no-decoration js-tool-panel-close"><span class="icon icon--cross"></span></button>
                  </div>
                  <div class="panel__content">Итеративный подход к управлению проектами и разработке программного обеспечения, который помогает командам быстрее и с меньшими проблемами поставлять ценность клиентам</div>
                </div>
              </div>
              
            </div>
            <div class="tools__item js-tool-item">
              <button class="button  js-tool-toggler button--dot button--blue">CI/CD</button>
              <div class="tools__panel js-tool-panel">
                <div class="panel panel--no-shadow panel--sm">
                  <div class="panel__head panel__head--black">
                    <button class="panel__close button button--no-decoration js-tool-panel-close"><span class="icon icon--cross"></span></button>
                  </div>
                  <div class="panel__content">Набор принципов и практик, которые позволяют разработчикам чаще и надежнее развертывать изменения программного обеспечения</div>
                </div>
              </div>
            </div>
            <div class="tools__item js-tool-item">
              <button class="button  js-tool-toggler button--dot button--red">Git</button>
              <div class="tools__panel js-tool-panel">
                <div class="panel panel--no-shadow panel--sm">
                  <div class="panel__head panel__head--black">
                    <button class="panel__close button button--no-decoration js-tool-panel-close"><span class="icon icon--cross"></span></button>
                  </div>
                  <div class="panel__content">Развитая система контроля версий с активной поддержкой и открытым исходным кодом, которую используют тысячи разработчиков во всем мире</div>
                </div>
              </div>
            </div>
            <div class="tools__item js-tool-item">
              <button class="button  js-tool-toggler button--dot button--yellow">База знаний</button>
              <div class="tools__panel js-tool-panel">
                <div class="panel panel--no-shadow panel--sm">
                  <div class="panel__head panel__head--black">
                    <button class="panel__close button button--no-decoration js-tool-panel-close"><span class="icon icon--cross"></span></button>
                  </div>
                  <div class="panel__content">Онлайн-библиотека, в&nbsp;которой хранится информация о продукте или проекте</div>
                </div>
              </div>
            </div>
            <div class="tools__item js-tool-item">
              <button class="button  js-tool-toggler button--dot">Контроль качества кода</button>
              <div class="tools__panel js-tool-panel">
                <div class="panel panel--no-shadow panel--sm">
                  <div class="panel__head panel__head--black">
                    <button class="panel__close button button--no-decoration js-tool-panel-close"><span class="icon icon--cross"></span></button>
                  </div>
                  <div class="panel__content">Минимизация ошибок перед выпуском программного обеспечения, проверка на наличие недостатков и дефектов с целью минимизации ошибок перед выпуском программного обеспечения</div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <section class="section section--black">
        <div class="wrapper">
          <h2 class="section__title">Этапы работы по задаче</h2>
          <div class="steps">
            <div class="steps__item">
              <div class="steps__item-number">1</div>
              <div class="steps__item-text">Принимаем задачу в&nbsp;виде бизнес-потребности</div>
              <img class="steps__item-image" alt="step illustration" src="./i/037-data analysis.svg">
            </div>
            <div class="steps__item">
              <div class="steps__item-number">2</div>
              <div class="steps__item-text">Аналитик вместе с&nbsp;клиентом превращают потребность в&nbsp;сценарий действий по&nbsp;определённой методике</div>
              <img class="steps__item-image" alt="step illustration" src="./i/022-iteration.svg">
            </div>
            <div class="steps__item">
              <div class="steps__item-number">3</div>
              <div class="steps__item-text">Утверждаем сценарий и&nbsp;передаём его&nbsp;архитектору для&nbsp;выбора наилучшего варианта решения</div>
              <img class="steps__item-image" alt="step illustration" src="./i/006-confirmation.svg">
            </div>
            <div class="steps__item">
              <div class="steps__item-number">4</div>
              <div class="steps__item-text">Формируем бюджет решения и&nbsp;передаём в&nbsp;разработку</div>
              <img class="steps__item-image" alt="step illustration" src="./i/011-calculator.svg">
            </div>
            <div class="steps__item">
              <div class="steps__item-number">5</div>
              <div class="steps__item-text">Наши разработчики пишут профессиональный&nbsp;код</div>
              <img class="steps__item-image" alt="step illustration" src="./i/031-statistics.svg">
            </div>
            <div class="steps__item">
              <div class="steps__item-number">6</div>
              <div class="steps__item-text">Внедряем результат совместно с&nbsp;клиентом и&nbsp;аналитиком</div>
              <img class="steps__item-image" alt="step illustration" src="./i/017-light bulb.svg">
            </div>
            <div class="steps__item">
              <div class="steps__item-number">7</div>
              <div class="steps__item-text">Описываем бизнес-процесс и&nbsp;прикладные инструкции в&nbsp;базе знаний</div>
              <img class="steps__item-image" alt="step illustration" src="./i/042-data storage.svg">
            </div>
          </div>

          <div class="button-panel panel panel--yellow panel--no-shadow">
            <div class="button-panel__text">Протестируйте вашу бизнес-задачу бесплатно</div>
            <button class="button-panel__button button button--white button--bg" data-modal="contact-form" data-modal-title="Заполните данные, чтобы протестировать вашу бизнес-задачу">Поставить&nbsp;задачу</button>
          </div>
          
        </div>
      </section>
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title">Для большого бизнеса</h2>
          <div class="business-tip">
            Для&nbsp;компаний с&nbsp;бюджетом на&nbsp;IT от&nbsp;0,9&nbsp;млн в&nbsp;месяц
          </div>
          <div class="block-group block-group--3">
            <div class="block-group__item panel panel--no-shadow">
              <div class="panel__content">Сбор и анализ Big Data</div>
              <img src="./i/032-data visualization.svg" alt="иллюстрация" class="panel__image">
            </div>
            <div class="block-group__item panel panel--black panel--no-shadow">
              <div class="panel__content">Систематическая доработка и&nbsp;модернизация архитектуры 1С по&nbsp;мере накопления запросов пользователей</div>
              <img src="./i/016-effective.svg" alt="иллюстрация" class="panel__image">
            </div>
            <a class="block-group__item panel panel--cyan" href="./services.html#big-business">
              <div class="panel__content">
                <div class="">Разработка информационной системы с&nbsp;выделенным ИТ&nbsp;директором от&nbsp;проекта до&nbsp;эффективной рабочей версии. Система масштабируется параллельно с&nbsp;ростом вашего бизнеса</div>
                <div class="panel__link">Подробнее</div>
                <img src="./i/025-structured data.svg" alt="иллюстрация" class="panel__image">
              </div>
            </a>
        </div>
      </section>
      <section class="section section--black">
        <div class="wrapper">
          <h2 class="section__title">
            Для всех, кому нужен учёт чего-либо
          </h2>
          <div class="accounting-tip">
            Мы&nbsp;— франчайзи программы 1С и&nbsp;предлагаем&nbsp;собственные решения
          </div>
          <div class="accounting">
            <a href="#" class="accounting__item panel panel--white">
              <div class="panel__content">
                <div class="panel__title">Наши решения</div>
                <div class="panel__text">Вы&nbsp;можете выбрать интересующий вас&nbsp;продукт, направление или&nbsp;посмотреть схему взаимодействия наших решений</div>
                <div class="panel__link">Выбрать решение</div>
                <img src="./i/panel-zeta.svg" alt="zeta logo" class="panel__image panel__image--logo">
              </div>
            </a>
            <a href="#" class="accounting__item panel panel--yellow">
              <div class="panel__content">
                <div class="panel__title">Продукты 1С</div>
                <div class="panel__text">C&nbsp;2006&nbsp;года мы&nbsp;оказываем комплексные услуги по&nbsp;постановке учёта, автоматизации предприятий и&nbsp;сопровождению наших клиентов на&nbsp;базе конфигураций 1С</div>
                <div class="panel__link">Выбрать продукт 1С</div>
                <img src="./i/panel-1c.svg" alt="1c logo" class="panel__image panel__image--logo">
              </div>
            </a>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title">Кейсы</h2>
          <div class="categories">
            <a href="./cases.html" class="categories__item button  button--dot">Все продукты</a>
            <a href="./cases.html#filter-by-blue" class="categories__item js-case-category button button--cyan  button--dot">Автозапчасти</a>
            <a href="./cases.html#filter-by-red" class="categories__item js-case-category button button--red  button--dot">Вендинг</a>
            <a href="./cases.html#filter-by-blue-dark" class="categories__item js-case-category button button--blue  button--dot">Продажа времени</a>
            <a href="./cases.html#filter-by-green" class="categories__item js-case-category button button--green  button--dot">Универсальный</a>
            <a href="./cases.html#filter-by-yellow" class="categories__item js-case-category button button--yellow  button--dot">1C</a>
          </div>
          <div class="swiper" data-swiper-id="cases">
            <div class="cases js-cases swiper-wrapper">
              <a href="./case.html" class="swiper-slide cases__item panel" data-case-category="yellow">
                <div class="panel__head panel__head--yellow">
                  <img src="./i/panel-1c.svg" alt="1c logo" class="case__image">
                </div>
                <div class="panel__content case">
                  <div class="case__title">АТОЛ онлайн и&nbsp;1С: готовое решение для&nbsp;интеграции</div>
                  <div class="case__text">Подсистема предназначена для компаний, работающих в&nbsp;1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
              <a href="./case.html" class="swiper-slide cases__item panel" data-case-category="blue">
                <div class="panel__head panel__head--blue">
                <img src="./i/panel-zeta.svg" alt="zeta logo" class="case__image">
                </div>
                <div class="panel__content case">
                  <div class="case__title">Проектное решение<br/>«Продажа автозапчастей»</div>
                  <div class="case__text">Подсистема предназначена для компаний, работающих в&nbsp;1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
              <a href="./case.html" class="swiper-slide cases__item panel" data-case-category="blue">
                <div class="panel__head panel__head--blue">
                <img src="./i/panel-1c.svg" alt="1c logo" class="case__image">
                </div>
                <div class="panel__content case">
                  <div class="case__title">Подсистема учета б/у запчастей в&nbsp;торговой конфигурации 1С</div>
                  <div class="case__text">Подсистема предназначена для компаний, работающих в&nbsp;1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
              <a href="./case.html" class="swiper-slide cases__item panel" data-case-category="yellow">
                <div class="panel__head panel__head--yellow">
                <img src="./i/panel-zeta.svg" alt="zeta logo" class="case__image">

                </div>
                <div class="panel__content case">
                  <div class="case__title">Проектное решение<br/>«Управление торговым комплексом»</div>
                  <div class="case__text">Подсистема предназначена для компаний, работающих в&nbsp;1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
              <a href="./case.html" class="swiper-slide cases__item panel" data-case-category="green">
                <div class="panel__head panel__head--green">
                <img src="./i/panel-zeta.svg" alt="zeta logo" class="case__image">

                </div>
                <div class="panel__content case">
                  <div class="case__title">Проектное решение<br/>«Учёт в&nbsp;вендинговом бизнесе»</div>
                  <div class="case__text">Подсистема предназначена для компаний, работающих в&nbsp;1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
              <a href="./case.html" class="swiper-slide cases__item panel" data-case-category="blue">
                <div class="panel__head panel__head--blue">
                <img src="./i/panel-zeta.svg" alt="zeta logo" class="case__image">

                </div>
                <div class="panel__content case">
                  <div class="case__title">Проектное решение<br/>«Управление торговым комплексом»</div>
                  <div class="case__text">Подсистема предназначена для компаний, работающих в&nbsp;1С и использующих онлайн-кассы АТОЛ Онлайн</div>
                </div>
              </a>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          
        </div>
      </section>
      <section class="section section--black">
        <div class="wrapper">
          <h2 class="section__title">Чем&nbsp;мы еще можем вам&nbsp;помочь?</h2>
          <div class="help">
            <div class="help__item panel panel--white panel--no-shadow">
              <div class="panel__content help">
                <div class="help__block">
                  <div class="panel__title help__title">Проанализировать код</div>
                  <div class="panel__text help__text">с точки зрения его технической реализации и оформления </div>
                </div>
                <img src="./i/039-research and development.svg" alt="иллюстрация" class="help__image panel__image">
              </div>
            </div>
            <div class="help__item panel panel--white panel--no-shadow">
              <div class="panel__content help">
                <div class="help__block">
                  <div class="panel__title help__title">Оценить скорость 1С с&nbsp;методикой&nbsp;APDEX</div>
                  <div class="panel__text help__text">с точки зрения его технической реализации и оформления </div>
                </div>
                <img src="./i/046-profit.svg" alt="иллюстрация" class="help__image panel__image">
              </div>
            </div>
            <div class="help__item panel panel--white panel--no-shadow">
              <div class="panel__content help">
                <div class="help__block">
                  <div class="panel__title help__title">Показать подход и совместно описать ваши бизнес-процессы</div>
                  <div class="panel__text help__text">чтобы&nbsp;снизить зависимость от&nbsp;«сотрудников на&nbsp;местах»</div>
                </div>
                <img src="./i/019-effort.svg" alt="иллюстрация" class="help__image panel__image">
              </div>
            </div>
            <div class="help__item panel panel--white panel--no-shadow">
              <div class="panel__content help">
                <div class="help__block">
                  <div class="panel__title help__title">Расставить метрики</div>
                  <div class="panel__text help__text">чтобы посмотреть, сколько времени занимает каждая операция</div>
                </div>
                <img src="./i/005-analytics.svg" alt="иллюстрация" class="help__image panel__image">
              </div>
            </div>
            <div class="help__item panel panel--white panel--no-shadow">
              <div class="panel__content help">
                <div class="help__block">
                  <div class="panel__title help__title">Применить методы глубокой автоматизации</div>
                  <div class="panel__text help__text">на основе детальных бизнес-процессов</div>
                </div>
                <img src="./i/009-concentrate2.svg" alt="иллюстрация" class="help__image panel__image">
              </div>
            </div>
            <div class="help__item panel panel--white panel--no-shadow">
              <div class="panel__content help">
                <div class="help__block">
                  <div class="panel__title help__title">Обсудить и настроить основные управленческие отчеты</div>
                  <div class="panel__text help__text">кэш-фло, прибыли и убытки, баланс</div>
                </div>
                <img src="./i/038-agreement.svg" alt="иллюстрация" class="help__image panel__image">
              </div>
            </div>
          </div>
          <div class="contact-big">
            <div class="contact-big__title">Оставьте заявку для&nbsp;бесплатной консультации с&nbsp;нашим специалистом</div>
            <img src="./i/panel-contact-big.svg" alt="иллюстрация" class="contact-big__image">
            <button class="button button--white button--bg contact-big__button" data-modal="contact-form" data-modal-title="Заполните данные, чтобы протестировать вашу бизнес-задачу">оставить заявку</button>
          </div>
        </div>
      </section>
      <!-- end copy inside <section id="ccphworkarea" class="page_full-width"> -->

    </div>
    <div class="container__footer">
      <!-- copy inside <footer id="ccphbottom" class="footer"> -->
      <?php include './partials/_footer.html'?>
      <!-- end copy inside <footer id="ccphbottom" class="footer"> -->
    </div>
  </div>
</body>
</html>
