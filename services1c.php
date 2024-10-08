<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" >
<head>
  <?php $stylesName = 'services1c'; ?>
  <?php include './partials/_head.php'; ?>
</head>
<body>
  <div class="container">
    <div class="container__header"><?php include './partials/_header.php'; ?></div>
    <div class="container__content">
      <section class="section">
        <div class="wrapper">
          <h2 class="section__title">Сервисы компании 1С</h2>
          <div class="cols disclaimer">
            <div class="cols__item">1C:Комплект поддержки (1C:КП) – это лицензионный бесконтактный продукт, включающий в&nbsp;себя сервисы и базы данных фирмы «1С», услуги линии технической поддержки фирмы «1С» и услуги официальных партнеров фирмы «1С», которые повышают продуктивность работы с ПП «1С:Предприятие 8».
              1С:КП является полным аналогом привычному пользователю 1С:ИТС без физических комплектов - DVD-дисков и «бумажных» выпусков журнала.</div>
            <div class="cols__item">Вся информация, ранее поставляемая на DVD-носителях, размещена на сайте <a href="https://its.1c.ru" target="_blank">its.1c.ru</a>, релизы конфигураций 1С:Предприятие 8 – releases.1c.ru, релизы конфигураций 1С:Предприятие 7.7 - в&nbsp;Личном кабинете на сайте <a href="https://its.1c.ru" target="_blank">its.1c.ru</a>.
              Важной особенностью комплексного сопровождения в&nbsp;рамках договора 1С:КП является то, что стоимость такого договора значительно ниже, чем стоимость каждого предоставляемого в&nbsp;его рамках сервиса.</div>
          </div>
        </div>
      </section>
      <section class="section section--grey">
        <div class="wrapper">
          <h2 class="section__title">Описание и стоимость основных сервисов 1С</h2>
          <!-- Чтобы не ломать текущую архитектуру, я оставляю рабочий код выводиться на мобиле, а для десктопа пишу новое решение -->
          <div class="cols js-tabs-wrapper hide-md-down">
            <div class="cols__item">
              <div class="services1c__item panel panel--white" data-tabs-item-id="service1">
                <div class="panel__content">
                  <div class="services1c__top">
                    <div class="services1c__title">1С:КП Проф</div>
                    <div class="services1c__price">от 3 381 ₽/месяц</div>
                  </div>
                  <div class="services1c__info">
                    Является самым популярным пакетом и включает в&nbsp;себя ряд сервисов и услуг, необходимых для нормального функционирования организации:
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
                  </div>
                  
                  <button class="services1c__order-button button  button--bg button--yellow" data-modal="contact-form" data-modal-title="Заполните данные на запрос подписки">оставить заявку</button>
                </div>
              </div>
              <div class="services1c__item panel panel--white" data-tabs-item-id="service2">
                <div class="panel__content">
                  <div class="services1c__top">
                    <div class="services1c__title">1С-Отчетность</div>
                    <div class="services1c__price">от 1 800 ₽/год</div>
                  </div>
                  <div class="services1c__info">Современный и удобный сервис, применяемый для быстрой отправки электронной отчетности и других видов электронного документооборота между предприятием и контролирующими органами напрямую в&nbsp;один клик из программы 1С.</div>
                  <div class="services1c__tip">
                    Для пользователей, имеющих действующий договор 1С:ИТС ПРОФ, предусмотрена льгота – сдача отчетности для одного юридического лица или индивидуального предпринимателя предоставляется бесплатно!
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
                  </div>
                  <button class="services1c__order-button button  button--bg button--yellow" data-modal="contact-form" data-modal-title="Заполните данные на запрос подписки">оставить заявку</button>
                </div>
              </div>
              <div class="services1c__item panel panel--white" data-tabs-item-id="service3">
                <div class="panel__content">
                  <div class="services1c__top">
                    <div class="services1c__title">1С:КП Проф</div>
                    <div class="services1c__price">от 3 381 ₽/месяц</div>
                  </div>
                  <div class="services1c__info">
                    Является самым популярным пакетом и включает в&nbsp;себя ряд сервисов и услуг, необходимых для нормального функционирования организации:
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
                  </div>
                  
                  <button class="services1c__order-button button  button--bg button--yellow" data-modal="contact-form" data-modal-title="Заполните данные на запрос подписки">оставить заявку</button>
                </div>
              </div>
              <div class="services1c__item panel panel--white" data-tabs-item-id="service4">
                <div class="panel__content">
                  <div class="services1c__top">
                    <div class="services1c__title">1С-Отчетность</div>
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
            <div class="cols__item">
              <div class="products products--1c">
                <button class="products__item panel panel--compact" data-tabs-toggler-id="service1">
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
                </button>
                <button class="products__item panel panel--compact" data-tabs-toggler-id="service2">
                  <div class="panel__head panel__head--yellow panel__head--reverse">
                    <div class="panel__top">
                      <div class="products__title">1С: Бухгалтерия 8 ПРОФ 2</div>
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
                </button>
                <button class="products__item panel panel--compact" data-tabs-toggler-id="service3">
                  <div class="panel__head panel__head--yellow panel__head--reverse">
                    <div class="panel__top">
                      <div class="products__title">1С: Бухгалтерия 8 ПРОФ 3</div>
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
                </button>
                <button class="products__item panel panel--compact" data-tabs-toggler-id="service4">
                  <div class="panel__head panel__head--yellow panel__head--reverse">
                    <div class="panel__top">
                      <div class="products__title">1С: Бухгалтерия 8 ПРОФ 4</div>
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
                </button>
              </div>
            </div>
          </div>
          <!-- Чтобы не ломать текущую архитектуру, я оставляю рабочий код выводиться на мобиле, а для десктопа пишу новое решение -->
          <div class="swiper swiper--l hide-md-up" data-swiper-id="services-1c">
            <div class="services1c services1c--two-cols swiper-wrapper">
              <div class="swiper-slide services1c__item panel panel--white">
                <div class="panel__content">
                  <div class="services1c__top">
                    <div class="services1c__title">1С:КП Проф</div>
                    <div class="services1c__price">от 3 381 ₽/месяц</div>
                  </div>
                  <div class="services1c__info">
                    Является самым популярным пакетом и включает в&nbsp;себя ряд сервисов и услуг, необходимых для нормального функционирования организации:
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
                  </div>
                  
                  <button class="services1c__order-button button  button--bg button--yellow" data-modal="contact-form" data-modal-title="Заполните данные на запрос подписки">оставить заявку</button>
                </div>
              </div>
              <div class="swiper-slide services1c__item panel panel--white">
                <div class="panel__content">
                  <div class="services1c__top">
                    <div class="services1c__title">1С-Отчетность</div>
                    <div class="services1c__price">от 1 800 ₽/год</div>
                  </div>
                  <div class="services1c__info">Современный и удобный сервис, применяемый для быстрой отправки электронной отчетности и других видов электронного документооборота между предприятием и контролирующими органами напрямую в&nbsp;один клик из программы 1С.</div>
                  <div class="services1c__tip">
                    Для пользователей, имеющих действующий договор 1С:ИТС ПРОФ, предусмотрена льгота – сдача отчетности для одного юридического лица или индивидуального предпринимателя предоставляется бесплатно!
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
                  </div>
                  <button class="services1c__order-button button  button--bg button--yellow" data-modal="contact-form" data-modal-title="Заполните данные на запрос подписки">оставить заявку</button>
                </div>
              </div>
              <div class="swiper-slide services1c__item panel panel--white">
                <div class="panel__content">
                  <div class="services1c__top">
                    <div class="services1c__title">1С:КП Проф</div>
                    <div class="services1c__price">от 3 381 ₽/месяц</div>
                  </div>
                  <div class="services1c__info">
                    Является самым популярным пакетом и включает в&nbsp;себя ряд сервисов и услуг, необходимых для нормального функционирования организации:
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
                  </div>
                  
                  <button class="services1c__order-button button  button--bg button--yellow" data-modal="contact-form" data-modal-title="Заполните данные на запрос подписки">оставить заявку</button>
                </div>
              </div>
              <div class="swiper-slide services1c__item panel panel--white">
                <div class="panel__content">
                  <div class="services1c__top">
                    <div class="services1c__title">1С-Отчетность</div>
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
      </section>
    </div>
    <div class="container__footer"><?php include './partials/_footer.html'?></div>
  </div>
</body>
</html>
 