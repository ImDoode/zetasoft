<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'products'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><?php include './partials/_header.php'; ?></div>
    <div class="container__content">
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title">Продукты 1С</h1>
          <div class="our-products">
            <div class="our-products__title">При&nbsp;покупке программы 1C бесплатная подписка на&nbsp;сервис в&nbsp;подарок</div>
            <img src="./i/tip-arrow_yellow.svg" alt="arrow" class="our-products__arrow">
            <div class="our-products__button-container">
              <div class="our-products__button-title">С&nbsp;2006&nbsp;года являемся официальным партнёром фирмы 1С </div>
              <a class="button button--bg button--mobile-full-width button--yellow our-products__button" href="./services1c.html">подписка на продукты 1С</a>
            </div>
          </div>
          <div class="cols js-tabs-wrapper">
            <div class="cols__item">
              <div class="swiper swiper--m" data-swiper-id="products-1c">
                <div class="products products--1c swiper-wrapper">
                  <a href="#serviceDetail" class="swiper-slide products__item panel--compact panel panel--shadow-black" data-tabs-toggler-id="service1c1">
                    <div class="panel__head panel__head--yellow panel__head--reverse">
                      <div class="panel__top">
                        <div class="products__title">1С: Бухгалтерия 8 ПРОФ</div>
                        <div class="products__price hide-md-down">13 000 ₽</div>
                      </div>
                    </div>
                    <div class="panel__content">
                      <div class="products__text">Полноценная автоматизация бухгалтерского и налогового учета, включая подготовку регламентированной отчетности.</div>
                      <div class="panel__bottom hide-md-up">
                        <div class="bottom__block">
                          <div class="products__price">13 000 ₽</div>
                        </div>
                      </div>
                      <img src="https://placehold.co/60x60" alt="" class="products__image">
                    </div>
                  </a>
                  <a href="#serviceDetail" class="swiper-slide products__item panel--compact panel--no-price panel panel--shadow-black" data-tabs-toggler-id="service1c2">
                    <div class="panel__head panel__head--yellow panel__head--reverse">
                      <div class="panel__top">
                        <div class="products__title">1С: Бухгалтерия 8 ПРОФ</div>
                      </div>
                    </div>
                    <div class="panel__content">
                      <div class="products__text">Полноценная автоматизация бухгалтерского и налогового учета, сокращение до двух строк.</div>
                      <img src="https://placehold.co/80x80" alt="" class="products__image">
                    </div>
                  </a>
                  <a href="#serviceDetail" class="swiper-slide products__item panel--compact panel panel--shadow-black" data-tabs-toggler-id="service1c3">
                    <div class="panel__head panel__head--yellow panel__head--reverse">
                      <div class="panel__top">
                        <div class="products__title">1С: Бухгалтерия 8 ПРОФ</div>
                        <div class="products__price hide-md-down">13 000 ₽</div>
                      </div>
                    </div>
                    <div class="panel__content">
                      <div class="products__text">Полноценная автоматизация бухгалтерского и налогового учета, включая подготовку регламентированной отчетности.</div>
                      <div class="panel__bottom hide-md-up">
                        <div class="bottom__block">
                          <div class="products__price hide-md-up">13 000 ₽</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#serviceDetail" class="swiper-slide products__item panel--compact panel panel--shadow-black" data-tabs-toggler-id="service1c4">
                    <div class="panel__head panel__head--yellow panel__head--reverse">
                      <div class="panel__top">
                        <div class="products__title">1С: Бухгалтерия 8 ПРОФ</div>
                        <div class="products__price hide-md-down">13 000 ₽</div>
                      </div>
                    </div>
                    <div class="panel__content">
                      <div class="products__text">Полноценная автоматизация бухгалтерского и налогового учета, включая подготовку регламентированной отчетности.</div>
                      <div class="panel__bottom hide-md-up">
                        <div class="bottom__block">
                          <div class="products__price hide-md-up">13 000 ₽</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#serviceDetail" class="swiper-slide products__item panel--compact panel panel--shadow-black" data-tabs-toggler-id="service1c2">
                    <div class="panel__head panel__head--yellow panel__head--reverse">
                      <div class="panel__top">
                        <div class="products__title">1С: Бухгалтерия 8 ПРОФ</div>
                        <div class="products__price hide-md-down">13 000 ₽</div>
                      </div>
                    </div>
                    <div class="panel__content">
                      <div class="products__text">Полноценная автоматизация бухгалтерского и налогового учета, включая подготовку регламентированной отчетности.</div>
                      <div class="panel__bottom hide-md-up">
                        <div class="bottom__block">
                          <div class="products__price hide-md-up">13 000 ₽</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a class="button button--bg button--mobile-full-width button--yellow our-products__button our-products__button--big" href="#1cSolutions">Другие решения 1С</a>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="cols__item">
            <div class="anchor" id="serviceDetail"></div>
              <div class="services1c">
                <div class="services1c__item js-tabs-default panel panel--white" data-tabs-item-id="default">
                  <div class="panel__content">
                    <div class="services1c__top">
                      <div class="services1c__title">1С:КП Проф (дефолтный)</div>
                      <div class="services1c__price">от 3 381 ₽/месяц</div>
                    </div>
                    <div class="services1c__info">Является самым популярным пакетом и включает в&nbsp;себя ряд сервисов и услуг, необходимых для нормального функционирования организации:</div>
                    <ul class="services1c__list ul">
                      <li>доступ к Порталу ИТС на сайте portal.1c.ru для получения обновлений программ и конфигураций;</li>
                      <li>доступ к Порталу ИТС на сайте portal.1c.ru для получения обновлений программ и конфигураций;</li>
                      <li>доступ информационной системе 1С:ИТС на сайте 1c.ru – без ограничений,</li>
                      <li>техническая поддержка по Линии консультации 1С и аудиторами – без ограничения количества обращений;</li>
                      <li>1С ЭДО - 100 пакетов документов;</li>
                      <li>электронные версии журнала «БУХ.1С» (в формате pdf или epub) в&nbsp;Личном кабинете пользователя на сайте <a href="https://its.1c.ru/personal/souvenir" target="_blank">https://its.1c.ru/personal/souvenir</a>;</li>
                      <li>ежемесячные сувениры: электронные книги, аудио и видеозаписи (также доступны в&nbsp;Личном кабинете <a href="https://its.1c.ru/personal/souvenir" target="_blank">https://its.1c.ru/personal/souvenir</a>).</li>
                    </ul>
                  </div>
                </div>
                <div class="services1c__item panel panel--white" data-tabs-item-id="service1c1">
                  <div class="panel__content">
                    <div class="services1c__top">
                      <div class="services1c__title">1С:КП Проф 1</div>
                      <div class="services1c__price">от 3 381 ₽/месяц</div>
                    </div>
                    <div class="services1c__info">Является самым популярным пакетом и включает в&nbsp;себя ряд сервисов и услуг, необходимых для нормального функционирования организации:</div>
                    <ul class="services1c__list ul">
                      <li>доступ к Порталу ИТС на сайте portal.1c.ru для получения обновлений программ и конфигураций;</li>
                      <li>доступ к Порталу ИТС на сайте portal.1c.ru для получения обновлений программ и конфигураций;</li>
                      <li>доступ информационной системе 1С:ИТС на сайте 1c.ru – без ограничений,</li>
                      <li>техническая поддержка по Линии консультации 1С и аудиторами – без ограничения количества обращений;</li>
                      <li>1С ЭДО - 100 пакетов документов;</li>
                      <li>1С Отчетность - возможность сдать все виды отчетности из 1С на 1 юридическое лицо;</li>
                      <li>1С:Предприятие 8 через Интернет – «облачная» технология для работы с программами 1С через Интернет (доступное количество информационных баз - 10, количество сеансов – 5);</li>
                      <li>1С Контрагент - автозаполнение по ИНН 7200 организаций, а также 360 запросов досье на контрагентов;</li>
                      <li>обновление 1 типовой базы на 1 компьютере сертифицированным специалистом нашей компании;</li>
                      <li>электронные версии журнала «БУХ.1С» (в формате pdf или epub) в&nbsp;Личном кабинете пользователя на сайте <a href="https://its.1c.ru/personal/souvenir" target="_blank">https://its.1c.ru/personal/souvenir</a>;</li>
                      <li>ежемесячные сувениры: электронные книги, аудио и видеозаписи (также доступны в&nbsp;Личном кабинете <a href="https://its.1c.ru/personal/souvenir" target="_blank">https://its.1c.ru/personal/souvenir</a>).</li>
                    </ul>
                    <button class="services1c__order-button button  button--bg button--yellow" data-modal="contact-form" data-modal-title="Заполните данные на запрос подписки">оставить заявку</button>
                  </div>
                </div>
                <div class="services1c__item panel panel--white" data-tabs-item-id="service1c2">
                  <div class="panel__content">
                    <div class="services1c__top">
                      <div class="services1c__title">1С-Отчетность 2</div>
                      <div class="services1c__price">от 1 800 ₽/год</div>
                    </div>
                    <div class="services1c__info">Современный и удобный сервис, применяемый для быстрой отправки электронной отчетности и других видов электронного документооборота между предприятием и контролирующими органами напрямую в&nbsp;один клик из программы 1С.</div>
                    <div class="services1c__tip">Для пользователей, имеющих действующий договор 1С:ИТС ПРОФ, предусмотрена льгота – сдача отчетности для одного юридического лица или индивидуального предпринимателя предоставляется бесплатно!</div>
                    <ul class="services1c__list ul">
                      <li>Основные возможности и преимущества сервиса «1С-Отчетность»:</li>
                      <li>отправка отчетности в&nbsp;ФНС, ПФР, ФСС, Росстат, Росалкогольрегулирование и Росприроднадзор и ФТС;</li>
                      <li>неформализованная переписка с ФНС, ПФР и Росстат;</li>
                      <li>сверки с налоговой и ПФР (запросы ИОН и ИОС);</li>
                      <li>получение требований и уведомлений из ФНС и пересылка документов в&nbsp;электронном виде в&nbsp;ответ на эти уведомления;</li>
                      <li>получение юридически значимых выписок из ЕГРЮЛ/ЕГРИП с электронной подписью ФНС;</li>
                      <li>онлайн-проверка правильности заполнения файлов отчетности перед отправкой в&nbsp;контролирующие органы;</li>
                      <li>предоставление бесплатной СКЗИ (VipNet CSP);</li>
                      <li>предоставление электронной подписи и возможность произвести внеплановую дистанционную замену подписи до 2-х раз в&nbsp;год;</li>
                      <li>круглосуточная профессиональная техническая поддержка компанией «Калуга Астрал».</li>
                    </ul>
                    <button class="services1c__order-button button  button--bg button--yellow" data-modal="contact-form" data-modal-title="Заполните данные на запрос подписки">оставить заявку</button>
                  </div>
                </div>
                <div class="services1c__item panel panel--white" data-tabs-item-id="service1c3">
                  <div class="panel__content">
                    <div class="services1c__top">
                      <div class="services1c__title">1С:КП Проф 3</div>
                      <div class="services1c__price">от 3 381 ₽/месяц</div>
                    </div>
                    <div class="services1c__info">Является самым популярным пакетом и включает в&nbsp;себя ряд сервисов и услуг, необходимых для нормального функционирования организации:</div>
                    <ul class="services1c__list ul">
                      <li>доступ к Порталу ИТС на сайте portal.1c.ru для получения обновлений программ и конфигураций;</li>
                      <li>доступ к Порталу ИТС на сайте portal.1c.ru для получения обновлений программ и конфигураций;</li>
                      <li>доступ информационной системе 1С:ИТС на сайте 1c.ru – без ограничений,</li>
                      <li>техническая поддержка по Линии консультации 1С и аудиторами – без ограничения количества обращений;</li>
                      <li>1С ЭДО - 100 пакетов документов;</li>
                      <li>1С Отчетность - возможность сдать все виды отчетности из 1С на 1 юридическое лицо;</li>
                      <li>1С:Предприятие 8 через Интернет – «облачная» технология для работы с программами 1С через Интернет (доступное количество информационных баз - 10, количество сеансов – 5);</li>
                      <li>1С Контрагент - автозаполнение по ИНН 7200 организаций, а также 360 запросов досье на контрагентов;</li>
                      <li>обновление 1 типовой базы на 1 компьютере сертифицированным специалистом нашей компании;</li>
                      <li>электронные версии журнала «БУХ.1С» (в формате pdf или epub) в&nbsp;Личном кабинете пользователя на сайте https://its.1c.ru/personal/souvenir;</li>
                      <li>ежемесячные сувениры: электронные книги, аудио и видеозаписи (также доступны в&nbsp;Личном кабинете https://its.1c.ru/personal/souvenir).</li>
                    </ul>
                    <button class="services1c__order-button button  button--bg button--yellow" data-modal="contact-form" data-modal-title="Заполните данные на запрос подписки">оставить заявку</button>
                  </div>
                </div>
                <div class="services1c__item panel panel--white" data-tabs-item-id="service1c4">
                  <div class="panel__content">
                    <div class="services1c__top">
                      <div class="services1c__title">1С-Отчетность 4</div>
                      <div class="services1c__price">от 1 800 ₽/год</div>
                    </div>
                    <div class="services1c__info">Современный и удобный сервис, применяемый для быстрой отправки электронной отчетности и других видов электронного документооборота между предприятием и контролирующими органами напрямую в&nbsp;один клик из программы 1С.</div>
                    <div class="services1c__tip">Для пользователей, имеющих действующий договор 1С:ИТС ПРОФ, предусмотрена льгота – сдача отчетности для одного юридического лица или индивидуального предпринимателя предоставляется бесплатно!</div>
                    <ul class="services1c__list ul">
                      <li>Основные возможности и преимущества сервиса «1С-Отчетность»:</li>
                      <li>отправка отчетности в&nbsp;ФНС, ПФР, ФСС, Росстат, Росалкогольрегулирование и Росприроднадзор и ФТС;</li>
                      <li>неформализованная переписка с ФНС, ПФР и Росстат;</li>
                      <li>сверки с налоговой и ПФР (запросы ИОН и ИОС);</li>
                      <li>получение требований и уведомлений из ФНС и пересылка документов в&nbsp;электронном виде в&nbsp;ответ на эти уведомления;</li>
                      <li>получение юридически значимых выписок из ЕГРЮЛ/ЕГРИП с электронной подписью ФНС;</li>
                      <li>онлайн-проверка правильности заполнения файлов отчетности перед отправкой в&nbsp;контролирующие органы;</li>
                      <li>предоставление бесплатной СКЗИ (VipNet CSP);</li>
                      <li>предоставление электронной подписи и возможность произвести внеплановую дистанционную замену подписи до 2-х раз в&nbsp;год;</li>
                      <li>круглосуточная профессиональная техническая поддержка компанией «Калуга Астрал».</li>
                    </ul>
                    <button class="services1c__order-button button  button--bg button--yellow" data-modal="contact-form" data-modal-title="Заполните данные на запрос подписки">оставить заявку</button>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </section>
      <div class="anchor" id="licensesDetail"></div>
      <section class="section section--black">
        <div class="wrapper">
          <h2 class="section__title">Лицензии 1С</h2>
          <div class="cols cols--licenses js-tabs-wrapper">
            <div class="cols__item">
              <div class="panel services1c__info-panel panel--white panel--shadow-yellow" data-tabs-item-id="default">
                <div class="panel__content">
                    <div class="services1c__top">
                      <div class="services1c__title">1С:КП Проф 1 ДЕФОЛТНАЯ</div>
                      <div class="services1c__price">от 3 381 ₽/месяц</div>
                    </div>
                    <div class="services1c__info">Является самым популярным пакетом и включает в&nbsp;себя ряд сервисов и услуг, необходимых для нормального функционирования организации:</div>
                    <ul class="services1c__list ul">
                      <li>доступ к Порталу ИТС на сайте portal.1c.ru для получения обновлений программ и конфигураций;</li>
                      <li>доступ к Порталу ИТС на сайте portal.1c.ru для получения обновлений программ и конфигураций;</li>
                      <li>доступ информационной системе 1С:ИТС на сайте 1c.ru – без ограничений,</li>
                      <li>техническая поддержка по Линии консультации 1С и аудиторами – без ограничения количества обращений;</li>
                      <li>1С ЭДО - 100 пакетов документов;</li>
                      <li>1С Отчетность - возможность сдать все виды отчетности из 1С на 1 юридическое лицо;</li>
                      <li>1С:Предприятие 8 через Интернет – «облачная» технология для работы с программами 1С через Интернет (доступное количество информационных баз - 10, количество сеансов – 5);</li>
                      <li>1С Контрагент - автозаполнение по ИНН 7200 организаций, а также 360 запросов досье на контрагентов;</li>
                      <li>обновление 1 типовой базы на 1 компьютере сертифицированным специалистом нашей компании;</li>
                      <li>электронные версии журнала «БУХ.1С» (в формате pdf или epub) в&nbsp;Личном кабинете пользователя на сайте <a href="https://its.1c.ru/personal/souvenir" target="_blank">https://its.1c.ru/personal/souvenir</a>;</li>
                      <li>ежемесячные сувениры: электронные книги, аудио и видеозаписи (также доступны в&nbsp;Личном кабинете <a href="https://its.1c.ru/personal/souvenir" target="_blank">https://its.1c.ru/personal/souvenir</a>).</li>
                    </ul>
                    <button class="services1c__order-button button  button--bg button--yellow" data-modal="contact-form" data-modal-title="Заполните данные на запрос подписки">оставить заявку</button>
                  </div>
              </div>
              <div class="panel services1c__info-panel panel--white panel--shadow-yellow" data-tabs-item-id="service1c1">
                <div class="panel__content">
                    <div class="services1c__top">
                      <div class="services1c__title">1С:КП Проф 1</div>
                      <div class="services1c__price">от 3 381 ₽/месяц</div>
                    </div>
                    <div class="services1c__info">Является самым популярным пакетом и включает в&nbsp;себя ряд сервисов и услуг, необходимых для нормального функционирования организации:</div>
                    <ul class="services1c__list ul">
                      <li>доступ к Порталу ИТС на сайте portal.1c.ru для получения обновлений программ и конфигураций;</li>
                      <li>доступ к Порталу ИТС на сайте portal.1c.ru для получения обновлений программ и конфигураций;</li>
                      <li>доступ информационной системе 1С:ИТС на сайте 1c.ru – без ограничений,</li>
                      <li>техническая поддержка по Линии консультации 1С и аудиторами – без ограничения количества обращений;</li>
                      <li>1С ЭДО - 100 пакетов документов;</li>
                      <li>1С Отчетность - возможность сдать все виды отчетности из 1С на 1 юридическое лицо;</li>
                      <li>1С:Предприятие 8 через Интернет – «облачная» технология для работы с программами 1С через Интернет (доступное количество информационных баз - 10, количество сеансов – 5);</li>
                      <li>1С Контрагент - автозаполнение по ИНН 7200 организаций, а также 360 запросов досье на контрагентов;</li>
                      <li>обновление 1 типовой базы на 1 компьютере сертифицированным специалистом нашей компании;</li>
                      <li>электронные версии журнала «БУХ.1С» (в формате pdf или epub) в&nbsp;Личном кабинете пользователя на сайте <a href="https://its.1c.ru/personal/souvenir" target="_blank">https://its.1c.ru/personal/souvenir</a>;</li>
                      <li>ежемесячные сувениры: электронные книги, аудио и видеозаписи (также доступны в&nbsp;Личном кабинете <a href="https://its.1c.ru/personal/souvenir" target="_blank">https://its.1c.ru/personal/souvenir</a>).</li>
                    </ul>
                    <button class="services1c__order-button button  button--bg button--yellow" data-modal="contact-form" data-modal-title="Заполните данные на запрос подписки">оставить заявку</button>
                  </div>
              </div>
              <div class="panel services1c__info-panel panel--white panel--shadow-yellow" data-tabs-item-id="service1c2">
                <div class="panel__content">
                    <div class="services1c__top">
                      <div class="services1c__title">1С:КП Проф 2</div>
                      <div class="services1c__price">от 3 381 ₽/месяц</div>
                    </div>
                    <div class="services1c__info">Является самым популярным пакетом и включает в&nbsp;себя ряд сервисов и услуг, необходимых для нормального функционирования организации:</div>
                    <ul class="services1c__list ul">
                      <li>доступ к Порталу ИТС на сайте portal.1c.ru для получения обновлений программ и конфигураций;</li>
                      <li>доступ к Порталу ИТС на сайте portal.1c.ru для получения обновлений программ и конфигураций;</li>
                      <li>доступ информационной системе 1С:ИТС на сайте 1c.ru – без ограничений,</li>
                      <li>техническая поддержка по Линии консультации 1С и аудиторами – без ограничения количества обращений;</li>
                      <li>1С ЭДО - 100 пакетов документов;</li>
                      <li>1С Отчетность - возможность сдать все виды отчетности из 1С на 1 юридическое лицо;</li>
                      <li>1С:Предприятие 8 через Интернет – «облачная» технология для работы с программами 1С через Интернет (доступное количество информационных баз - 10, количество сеансов – 5);</li>
                      <li>1С Контрагент - автозаполнение по ИНН 7200 организаций, а также 360 запросов досье на контрагентов;</li>
                      <li>обновление 1 типовой базы на 1 компьютере сертифицированным специалистом нашей компании;</li>
                      <li>электронные версии журнала «БУХ.1С» (в формате pdf или epub) в&nbsp;Личном кабинете пользователя на сайте <a href="https://its.1c.ru/personal/souvenir" target="_blank">https://its.1c.ru/personal/souvenir</a>;</li>
                      <li>ежемесячные сувениры: электронные книги, аудио и видеозаписи (также доступны в&nbsp;Личном кабинете <a href="https://its.1c.ru/personal/souvenir" target="_blank">https://its.1c.ru/personal/souvenir</a>).</li>
                    </ul>
                    <button class="services1c__order-button button  button--bg button--yellow" data-modal="contact-form" data-modal-title="Заполните данные на запрос подписки">оставить заявку</button>
                  </div>
              </div>
            </div>
            <div class="cols__item">
              <div class="products products--small">
                <a href="#licensesDetail" class="products__item panel panel--white panel--shadow-yellow panel--compact" data-tabs-toggler-id="service1c1">
                  <div class="panel__content">
                    <div class="panel__top">
                      <div class="products__title products__title--wrap">1С: Предприятие 8.3. Сервер МИНИ на 5 подключений</div>
                    </div>
                    <div class="panel__bottom">
                      <div class="products__price">14 400 ₽</div>
                    </div>
                  </div>
                </a>
                <a href="#licensesDetail" class="products__item panel panel--white panel--shadow-yellow panel--compact" data-tabs-toggler-id="service1c2">
                  <div class="panel__content">
                    <div class="panel__top">
                      <div class="products__title products__title--wrap">1С: Предприятие 8.3. Лицензия на&nbsp;сервер (x86–64)</div>
                    </div>
                    <div class="panel__bottom">
                      <div class="products__price">86 400 ₽</div>
                    </div>
                  </div>
                </a>
                <a href="#licensesDetail" class="products__item panel panel--white panel--shadow-yellow panel--compact" data-tabs-toggler-id="service1c3">
                  <div class="panel__content">
                    <div class="panel__top">
                      <div class="products__title products__title--wrap">1С: Предприятие 8.3. Лицензия на сервер (x86-64) (USB)</div>
                    </div>
                    <div class="panel__bottom">
                      <div class="products__price">103 700 ₽</div>
                    </div>
                  </div>
                </a>
                <a href="#licensesDetail" class="products__item panel panel--white panel--shadow-yellow panel--compact" data-tabs-toggler-id="service1c4">
                  <div class="panel__content">
                    <div class="panel__top">
                      <div class="products__title products__title--wrap">1С: Предприятие 8. Клиентская лицензия на 5 рабочих мест</div>
                    </div>
                    <div class="panel__bottom">
                      <div class="products__price">21 600 ₽</div>
                    </div>
                  </div>
                </a>
                <a href="#licensesDetail" class="products__item panel panel--white panel--shadow-yellow panel--compact" data-tabs-toggler-id="service1c5">
                  <div class="panel__content">
                    <div class="panel__top">
                      <div class="products__title products__title--wrap">1С: Предприятие 8. Клиентская лицензия на 5 рабочих мест (USB)</div>
                    </div>
                    <div class="panel__bottom">
                      <div class="products__price">28 100 ₽</div>
                    </div>
                  </div>
                </a>
                <a href="#" class="products__item panel panel--white panel--shadow-yellow panel--compact">
                  <div class="panel__content">
                    <div class="panel__top">
                      <div class="products__title products__title--wrap">1С: Предприятие 10. Клиентская лицензия на 10 рабочих мест</div>
                    </div>
                    <div class="panel__bottom">
                      <div class="products__price">41 400 ₽</div>
                    </div>
                  </div>
                </a>
                <a href="#" class="products__item panel panel--white panel--shadow-yellow panel--compact">
                  <div class="panel__content">
                    <div class="panel__top">
                      <div class="products__title products__title--wrap">1С: Предприятие 8. Клиентская лицензия на 10 рабочих мест (USB)</div>
                    </div>
                    <div class="panel__bottom">
                      <div class="products__price">51 900 ₽</div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="achor" id="1cSolutions"></div>
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title">Лицензии на совместные решения 1С и Microsoft</h2>
          <div class="cols">
            <div class="cols__item">
              <div class="swiper swiper--m" data-swiper-id="licenses">
                <div class="products products--small swiper-wrapper">
                  <a href="#" class="swiper-slide products__item panel panel--yellow panel--compact">
                    <div class="panel__content">
                      <div class="panel__top">
                        <div class="products__title">Лицензия на сервер MS SQL Server Standard 2019 Runtime для пользователей 1С: Предприятие 8</div>
                        <div class="products__price hide-md-down">18 660 ₽</div>
                      </div>
                      <div class="panel__bottom">
                        <div class="bottom__block">
                          <div class="products__link">Электронная поставка</div>
                                              <div class="products__price hide-md-up">18 660 ₽</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="swiper-slide products__item panel panel--compact">
                    <div class="panel__content">
                      <div class="panel__top">
                        <div class="products__title">Клиентский доступ на 1 рабочее место к MS SQL Server 2019 Runtime для 1С: Предприятие 8</div>
                        <div class="products__price hide-md-down">9 450 ₽</div>
                      </div>
                      <div class="panel__bottom">
                        <div class="bottom__block">
                          <div class="products__link">Электронная поставка</div>
                          <div class="products__price hide-md-up">9 450 ₽</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="swiper-slide products__item panel panel--compact">
                    <div class="panel__content">
                      <div class="panel__top">
                        <div class="products__title">Клиентский доступ на 5 рабочих мест к MS SQL Server 2019 Runtime для 1С: Предприятие 8</div>
                        <div class="products__price hide-md-down">47 250 ₽</div>
                      </div>
                      <div class="panel__bottom">
                        <div class="bottom__block">
                          <div class="products__link">Электронная поставка</div>
                          <div class="products__price hide-md-up">47 250 ₽</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="swiper-slide products__item panel panel--yellow panel--compact">
                    <div class="panel__content">
                      <div class="panel__top">
                        <div class="products__title">Клиентский доступ на 10 рабочих мест к MS SQL Server 2019 Runtime для 1С: Предприятие 8</div>
                        <div class="products__price hide-md-down">94 500 ₽</div>
                      </div>
                      <div class="panel__bottom">
                        <div class="bottom__block">
                          <div class="products__link">Электронная поставка</div>
                          <div class="products__price hide-md-up">94 500 ₽</div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="cols__item">
              <div class="panel services1c__info-panel panel--white panel--shadow-black">
              <div class="panel__content">
                    <div class="services1c__top">
                      <div class="services1c__title">1С:КП Проф 1</div>
                      <div class="services1c__price">от 3 381 ₽/месяц</div>
                    </div>
                    <div class="services1c__info">Является самым популярным пакетом и включает в&nbsp;себя ряд сервисов и услуг, необходимых для нормального функционирования организации:</div>
                    <ul class="services1c__list ul">
                      <li>доступ к Порталу ИТС на сайте portal.1c.ru для получения обновлений программ и конфигураций;</li>
                      <li>доступ к Порталу ИТС на сайте portal.1c.ru для получения обновлений программ и конфигураций;</li>
                      <li>доступ информационной системе 1С:ИТС на сайте 1c.ru – без ограничений,</li>
                      <li>техническая поддержка по Линии консультации 1С и аудиторами – без ограничения количества обращений;</li>
                      <li>1С ЭДО - 100 пакетов документов;</li>
                      <li>1С Отчетность - возможность сдать все виды отчетности из 1С на 1 юридическое лицо;</li>
                      <li>1С:Предприятие 8 через Интернет – «облачная» технология для работы с программами 1С через Интернет (доступное количество информационных баз - 10, количество сеансов – 5);</li>
                      <li>1С Контрагент - автозаполнение по ИНН 7200 организаций, а также 360 запросов досье на контрагентов;</li>
                      <li>обновление 1 типовой базы на 1 компьютере сертифицированным специалистом нашей компании;</li>
                      <li>электронные версии журнала «БУХ.1С» (в формате pdf или epub) в&nbsp;Личном кабинете пользователя на сайте <a href="https://its.1c.ru/personal/souvenir" target="_blank">https://its.1c.ru/personal/souvenir</a>;</li>
                      <li>ежемесячные сувениры: электронные книги, аудио и видеозаписи (также доступны в&nbsp;Личном кабинете <a href="https://its.1c.ru/personal/souvenir" target="_blank">https://its.1c.ru/personal/souvenir</a>).</li>
                    </ul>
                    <button class="services1c__order-button button  button--bg button--yellow" data-modal="contact-form" data-modal-title="Заполните данные на запрос подписки">оставить заявку</button>
                  </div>
              </div>
            </div>
          </div>
          <div class="button-panel panel panel--cyan">
            <div class="button-panel__text">
              <img src="./i/panel-zeta__black.svg" alt="zetasoft logo" class="button-panel__image">
              Продукты Зетасофт
            </div>
            <a href="./products.html" class="button-panel__button button button--white button--bg">Выбрать продукт</a>
          </div>
        </div>
      </section>
      <section class="section section--black">
        <div class="wrapper">
          <div class="contact-big">
            <div class="contact-big__title">Напишите нам&nbsp;чтобы&nbsp;заказать или&nbsp;получить полный перечень продуктов 1С</div>
            <img src="./i/panel-contact-big.svg" alt="иллюстрация" class="contact-big__image">
            <button class="button button--bg button--white contact-big__button" data-modal="contact-form">оставить заявку</button>
          </div>
        </div>
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
