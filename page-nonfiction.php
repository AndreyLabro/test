<?php
/*  ----------------------------------------------------------------------------
    the default page template
 */


get_header();


?>
 <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
 <link href="<?php echo get_stylesheet_directory_uri(); ?>/vendors/colorbox/colorbox.css" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet">



    <div class="nf-nav-fixed-top">
        <div class="container">
          <div class="row nf-nav-for-books">
            <div class="col-xs-8 col-sm-8 col-md-9 col-lg-9">
              <div class="nf-nav-scroll">
                <div class="btn-scroll-left hide">
                  <svg width="12px" height="19px" viewBox="-1 0 12 19">
                    <path d="M7.4878,9.3019 C7.3978,9.2229 7.3338,9.1739 7.2778,9.1179 C4.9988,6.8399 2.7208,4.5609 0.4408,2.2839 C0.2638,2.1059 0.1288,1.9039 0.0648,1.6599 C0.0448,1.5859 0.0458,1.5059 0.0358,1.4289 C-0.0022,1.1329 0.0288,0.9099 0.1838,0.6539 C0.3768,0.3379 0.6138,0.1499 0.9968,0.0439 C1.1728,-0.0051 1.3448,-0.0061 1.5138,0.0079 C1.7018,0.0239 1.8708,0.1259 2.0308,0.2239 C2.1368,0.2879 2.2328,0.3739 2.3208,0.4629 C4.9278,3.0669 7.5328,5.6729 10.1398,8.2779 C10.3508,8.4889 10.5148,8.7299 10.5818,9.0189 C10.6368,9.2569 10.6278,9.5019 10.5388,9.7379 C10.4648,9.9349 10.3548,10.1119 10.2088,10.2579 C7.5598,12.9109 4.9078,15.5619 2.2568,18.2139 C2.0628,18.4079 1.8058,18.4919 1.5678,18.6079 C1.1778,18.6279 0.8048,18.5919 0.4958,18.3139 C0.3118,18.1499 0.2218,18.0349 0.1318,17.8599 C0.0738,17.7489 0.0328,17.6379 0.0338,17.5099 C0.0338,17.4669 0.0068,17.4229 0.0018,17.3789 C-0.0032,17.3359 0.0028,17.2909 0.0088,17.2469 C0.0148,17.2099 0.0338,17.1739 0.0348,17.1369 C0.0388,16.8509 0.1888,16.6299 0.3528,16.4159 C0.3778,16.3839 0.4098,16.3579 0.4388,16.3299 C2.7168,14.0509 4.9958,11.7729 7.2748,9.4949 C7.3318,9.4379 7.3938,9.3869 7.4878,9.3019" id="path-1" fill="#132132"></path>
                  </svg>
                </div>
                <div class="nf-nav-scroll-wrapper">
                  <button type="button" data-toggle="collapse" data-target="#nf-navbar-collapse" aria-expanded="false" class="navbar-toggle with-label collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="btn-label">Темы</span></button>
                  <ul id="nf-navbar-collapse" class="nf-nav-list nf-nav-list-js collapse navbar-collapse">
                    <li data-nf-block="#nf-section-rus_prose" class="nf-nav-item -active -border">Русская литература</li>
                    <li data-nf-block="#nf-section-foreign_prose" class="nf-nav-item -border">Зарубежная литература</li>
                    <li data-nf-block="#nf-section-diarys" class="nf-nav-item -border">Биографии и мемуары</li>
                    <li data-nf-block="#nf-section-rus_history" class="nf-nav-item -border">История</li>
                    <li data-nf-block="#nf-section-power" class="nf-nav-item -border">Власть | Сегодня</li>
                    <li data-nf-block="#nf-section-art" class="nf-nav-item -border">Искусство</li>
                    <li data-nf-block="#nf-section-philosophy" class="nf-nav-item -border">Философия</li>
                    <li data-nf-block="#nf-section-nauchpop" class="nf-nav-item -border">Научпоп</li>
                    <li data-nf-block="#nf-section-literary" class="nf-nav-item -border">Литературоведение</li>
                    <li data-nf-block="#nf-section-1917" class="nf-nav-item -border">1917</li>
                    <li data-nf-block="#nf-section-reissues" class="nf-nav-item -border">Переиздания</li>
                  </ul>
                </div>
                <div class="btn-scroll-right">
                  <svg width="12px" height="19px" viewBox="-1 0 12 19">
                    <path d="M7.4878,9.3019 C7.3978,9.2229 7.3338,9.1739 7.2778,9.1179 C4.9988,6.8399 2.7208,4.5609 0.4408,2.2839 C0.2638,2.1059 0.1288,1.9039 0.0648,1.6599 C0.0448,1.5859 0.0458,1.5059 0.0358,1.4289 C-0.0022,1.1329 0.0288,0.9099 0.1838,0.6539 C0.3768,0.3379 0.6138,0.1499 0.9968,0.0439 C1.1728,-0.0051 1.3448,-0.0061 1.5138,0.0079 C1.7018,0.0239 1.8708,0.1259 2.0308,0.2239 C2.1368,0.2879 2.2328,0.3739 2.3208,0.4629 C4.9278,3.0669 7.5328,5.6729 10.1398,8.2779 C10.3508,8.4889 10.5148,8.7299 10.5818,9.0189 C10.6368,9.2569 10.6278,9.5019 10.5388,9.7379 C10.4648,9.9349 10.3548,10.1119 10.2088,10.2579 C7.5598,12.9109 4.9078,15.5619 2.2568,18.2139 C2.0628,18.4079 1.8058,18.4919 1.5678,18.6079 C1.1778,18.6279 0.8048,18.5919 0.4958,18.3139 C0.3118,18.1499 0.2218,18.0349 0.1318,17.8599 C0.0738,17.7489 0.0328,17.6379 0.0338,17.5099 C0.0338,17.4669 0.0068,17.4229 0.0018,17.3789 C-0.0032,17.3359 0.0028,17.2909 0.0088,17.2469 C0.0148,17.2099 0.0338,17.1739 0.0348,17.1369 C0.0388,16.8509 0.1888,16.6299 0.3528,16.4159 C0.3778,16.3839 0.4098,16.3579 0.4388,16.3299 C2.7168,14.0509 4.9958,11.7729 7.2748,9.4949 C7.3318,9.4379 7.3938,9.3869 7.4878,9.3019" id="path-1" fill="#132132"></path>
                  </svg>
                </div>
              </div>
            </div>
              <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
                  <ul class="nf-nav-list text-right">
                      <li class="nf-nav-item to-section-map-js"><i class="icon-map-nav"></i><span>Интерактивная карта</span></li>
                  </ul>
              </div>
          </div>
          
          <div class="row nf-nav-for-map">
              <div class="col-xs-2 col-sm-4 col-md-2 col-lg-3">
                <ul class="nf-nav-list">
                  <li class="nf-nav-item to-section-book-js"><i class="icon-book-nav"></i><span>100 лучших книг</span></li>
                </ul>
              </div>
              <div class="col-xs-8 col-sm-4 col-md-8 col-lg-6 text-center">
                  <div class="nf-nav-map">
                    <div data-nf-block="nf-floor_2" class="nf-nav-item -active -border">2 этаж</div>
                    <div data-nf-block="nf-floor_3" class="nf-nav-item -border">3 этаж</div>
                  </div>
                </div>
                <div class="col-xs-2 col-sm-4 col-md-2 col-lg-3">
                  <ul class="nf-nav-list text-right">
                    <li class="nf-nav-item to-section-list-js"><i class="icon-stand-nav"></i><span>Список участников</span></li>
                  </ul>
               </div>
          </div>
        </div>
      </div>
      <header class="nf-header nf-section fp-section">
        <div class="container">
          <h1 class="nf-title">Путеводитель по ярмарке Non/fiction</h1>
          <div class="row">
            <div class="col-md-6"><a href="#" class="nf-subtitle to-section-book-js"><i class="icon-book-big"></i><span>100 книг: выбор «Горького»</span></a></div>
              <div class="col-md-6"><a href="#" class="nf-subtitle to-section-map-js"><i class="icon-map-big"></i><span>Интерактивная карта</span></a></div>
            <div style="margin-top: 30px" class="col-md-12 text-center nf-download"><a href="https://gorky.media/wp-content/uploads/2016/11/Prilozhenie_NonFiction.pdf" target="_blank" class="nf-subtitle"><i class="icon-map-big _xs"></i><span style="font-size:20px">Скачать путеводитель</span></a></div>
          </div>
          <div class="nf-book-share">
            <div class="article-share">
              <div class="nf-book-share-title">Рассказать друзьям:</div>
              <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-btn-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-btn-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-btn-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-btn-js"><span class="icon-telegram-xs"></span></a></div>
            </div>
          </div>
        </div>
        <div class="icon-arrow-bottom-big scroll-bottom-js">
          <svg width="68px" height="35px" viewBox="616 397 68 35">
            <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
          </svg>
        </div>
      </header>
      <div id="nf-section-rus_prose" class="nf-books">
        <section id="poterjal_slepoj_dudu" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/grigorenko.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Александр Григоренко</div>
                    <div class="nf-book-name">Потерял слепой дуду</div>
                    <div class="nf-book-publisher">АрсисБукс</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">История хиреющей деревни и глухонемого мальчика с печальной судьбой — неодеревенский нуар и социальная драма, этой осенью получившая премию «Ясная Поляна» в один миллион рублей.</div>
                    <div><a href="https://gorky.media/reviews/neoderevenskij-nuar-na-million/" target="_blank" class="btn-blue">Читать рецензию</a></div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="tobol" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/ivanov.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Алексей Иванов</div>
                    <div class="nf-book-name">Тобол. Много званых</div>
                    <div class="nf-book-publisher">АСТ</div>
                    <div class="nf-book-stand">
                      <p>Стенд С-5</p><a href="#" data-stand-number="C-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Новый роман Алексея Иванова про Сибири в XVIII веке — нечто среднее между политическим детективом и фэнтези: лиходеи, шаманы, каторжники, инородцы, царедворцы творят судьбу русской Азии.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="ochered" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/odnobibl.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Михаил Однобибл</div>
                    <div class="nf-book-name">Очередь</div>
                    <div class="nf-book-publisher">Время</div>
                    <div class="nf-book-stand">
                      <p>Стенд A-2</p><a href="#" data-stand-number="A-2" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Новая книга загадочного автора, чуть не завоевавшего премию «Национальный бестселлер» — фантасмагорическая антиутопия о советской жизни, напоминающая разом Сорокина и Кафку.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="zhezejel" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/basirov.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Марат Басыров</div>
                    <div class="nf-book-name">ЖеЗеэЛ</div>
                    <div class="nf-book-publisher">Лимбус Пресс</div>
                    <div class="nf-book-stand">
                      <p>Стенд G-5</p><a href="#" data-stand-number="G-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Сборник рассказов Марата Басырова о нескольких молодых поэтах, которые пытаются найти место в жизни, но в основном его теряют.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="monstry" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/prigov.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Дмитрий Александрович Пригов</div>
                    <div class="nf-book-name">Монстры</div>
                    <div class="nf-book-publisher">Новое литературное обозрение</div>
                    <div class="nf-book-stand">
                      <p>Стенд A-4, G-12</p><a href="#" data-stand-number="A-4" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">В третий том неполного собрания сочинений вошли произведения Пригова, представляющие его одновременно пародийный и серьезный «теологический проект» — поиск универсального равновесия с помощью упразднения различий между трансцендентным и повседневным, божественным и дьявольским, человеческим и звериным.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="f20" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/kozlova.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Анна Козлова</div>
                    <div class="nf-book-name">F20</div>
                    <div class="nf-book-publisher">РИПОЛ классик</div>
                    <div class="nf-book-stand">
                      <p>Стенд F-9</p><a href="#" data-stand-number="F-9" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Трогательный роман воспитания с нейролептиками, сексом и суицидом. Автор, писательница Анна Козлова, прославилась в том числе сценарием к сериалу Валерии Гай-Германики «Краткий курс счастливой жизни».</div>
                    <div><a href="https://gorky.media/reviews/detskij-doktor-skazal-nishtyak/" target="_blank" class="btn-blue">Читать рецензию</a></div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="transfuristy" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-transfuristy" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-transfuristy" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-transfuristy" data-slide-to="1"></li>
                    <li data-target="#carousel-transfuristy" data-slide-to="2"></li>
                    <li data-target="#carousel-transfuristy" data-slide-to="3"></li>
                    <li data-target="#carousel-transfuristy" data-slide-to="4"></li>
                    <li data-target="#carousel-transfuristy" data-slide-to="5"></li>
                    <li data-target="#carousel-transfuristy" data-slide-to="6"></li>
                    <li data-target="#carousel-transfuristy" data-slide-to="7"></li>
                    <li data-target="#carousel-transfuristy" data-slide-to="8"></li>
                    <li data-target="#carousel-transfuristy" data-slide-to="9"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/transfuristy.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans1.png" rel="transfuristy" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans2.png" rel="transfuristy" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans3.png" rel="transfuristy" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans3.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans4.png" rel="transfuristy" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans4.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans5.png" rel="transfuristy" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans5.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans6.png" rel="transfuristy" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans6.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans7.png" rel="transfuristy" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans7.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans8.png" rel="transfuristy" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans8.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans9.png" rel="transfuristy" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/trans9.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-name">Трансфуристы: Избранные тексты Ры Никоновой, Сергея Сигея, А. Ника, Б. Констриктора</div>
                    <div class="nf-book-publisher">Гилея</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Первый в России сборник поэтов — постоянных авторов самиздатского журнала «Транспонанс» (1979-1987), выпускавшегося Ры Никоновой и Сергеем Сигеем. Трансфуристы рассматривали себя в качестве прямых продолжателей дела русских футуристов и заумников, а также европейских дадаистов.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="sobranie_sochinenij" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-sobranie_sochinenij" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-sobranie_sochinenij" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-sobranie_sochinenij" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/samoryadov.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/samoryadov.png" rel="sobranie_sochinenij" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/russian_prose/contents/samoryadov.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Петр Луцык, Алексей Саморядов</div>
                    <div class="nf-book-name">Собрание сочинений</div>
                    <div class="nf-book-publisher">Оренбургское книжное издательство</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Переизданные сценарии Луцыка и Саморядова, авторов «Дюба-дюба», «Гонгофер», «Лимита», «Савой» и «Дети чугунных богов» — потерянное сокровище литературы 90-х и редкий случай, когда сценарии снискали чуть ли не большую известность, чем снятые по ним фильмы.</div>
                    <div><a href="https://gorky.media/reviews/stepnoj-polk/" target="_blank" class="btn-blue">Читать рецензию</a></div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--include ../include/footer.jade-->
      </div>
      <div id="nf-section-foreign_prose" class="nf-books">
        <section id="malenkaja_zhizn" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/foreign_prose/yanagihara.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Ханья Янагихара</div>
                    <div class="nf-book-name">Маленькая жизнь</div>
                    <div class="nf-book-publisher">Corpus</div>
                    <div class="nf-book-stand">
                      <p>Стенд С-5</p><a href="#" data-stand-number="C-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Едва ли не самая громкая художественная новинка года: роман молодой писательницы Ханьи Янагихары про четырех друзей в Нью-Йорке, у одного из которых в прошлом есть мрачная тайна.</div>
                    <div><a href="https://gorky.media/context/v-ozhidanii-malenkoj-zhizni/" target="_blank" class="btn-blue">Читать рецензию</a></div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="pod_pokrovom_nochi" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/foreign_prose/right.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Остин Райт</div>
                    <div class="nf-book-name">Под покровом ночи</div>
                    <div class="nf-book-publisher">Corpus</div>
                    <div class="nf-book-stand">
                      <p>Стенд С-5</p><a href="#" data-stand-number="C-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Крепкий триллер, устроенный по принципу “роман в романе” и вдохновивший дизайнера Тома Форда на фильм, который в этом году получил главный приз на Венецианском кинофестивале.</div>
                    <div><a href="https://gorky.media/reviews/nochnye-zhivotnye-v-temnom-lesu/" target="_blank" class="btn-blue">Читать рецензию</a></div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="ryzhevolosaja_zhenshhina" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/foreign_prose/pamuk.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Орхан Памук</div>
                    <div class="nf-book-name">Рыжеволосая Женщина</div>
                    <div class="nf-book-publisher">Азбука-Аттикус</div>
                    <div class="nf-book-stand">
                      <p>Стенд С-3</p><a href="#" data-stand-number="C-3" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Новый роман нобелевского лауреата по литературе о безоглядной страсти юного стамбульского лицеиста к таинственной женщине значительно старше него.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="istorija_osady_lissabona" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/foreign_prose/saramago.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Жозе Сарамаго</div>
                    <div class="nf-book-name">История осады Лиссабона</div>
                    <div class="nf-book-publisher">Азбука-Аттикус</div>
                    <div class="nf-book-stand">
                      <p>Стенд С-3</p><a href="#" data-stand-number="C-3" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Роман еще одного нобелевского лауреата по литературе в жанре альтернативной истории: герой-корректор, готовя к печати книгу про осаду Лиссабона в XII века, вставляет в ключевом эпизоде лишнюю частицу «не» — и выходит так, будто португальская столица была отвоевана у мавров без помощи крестоносцев, после чего история — мировая и личная — течет по другому руслу.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="genialnaja_podruga" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/foreign_prose/ferrante.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Элена Ферранте</div>
                    <div class="nf-book-name">Гениальная подруга</div>
                    <div class="nf-book-publisher">Синдбад</div>
                    <div class="nf-book-stand">
                      <p>Стенд J-10</p><a href="#" data-stand-number="J-10" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Главный итальянский бестселлер XXI века — история взросления двух девочек из неблагополучного квартала в Неаполе в 1950-е годы</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="kratkaja_istorija_semi_ubijstv" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/foreign_prose/marlon.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Джеймс Марлон</div>
                    <div class="nf-book-name">Краткая история семи убийств</div>
                    <div class="nf-book-publisher">Эксмо</div>
                    <div class="nf-book-stand">
                      <p>Стенд D-11</p><a href="#" data-stand-number="D-11" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">История о неудавшемся покушении на Боба Марли, рассказанная виртуозным языком: в ход идет все, от ямайских ругательств и диалектов до канцелярита, военных терминов и хип-хоп-речитативов. Роман-лауреат Букеровской премии 2015 года.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="uillard_i_ego_kegelbannye_prizy" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/foreign_prose/brotigan.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Ричард Бротиган</div>
                    <div class="nf-book-name">Уиллард и его кегельбанные призы</div>
                    <div class="nf-book-publisher">Додо Пресс</div>
                    <div class="nf-book-stand">
                      <p>Стенд J-41</p><a href="#" data-stand-number="J-41" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Роман классика американского постмодернизма, ранее на русском не выходивший, — издание подготовлено в рамках программы “Скрытое золото XX века”. Здесь пародия на садомазохистскую литературу оборачивается притчей о разъединенности людей и невозможности понять друг друга.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="kolca_saturna" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/foreign_prose/zebald.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Винфрид Георг Зебальд</div>
                    <div class="nf-book-name">Кольца сатурна</div>
                    <div class="nf-book-publisher">Новое издательство</div>
                    <div class="nf-book-stand">
                      <p>Стенд D-3</p><a href="#" data-stand-number="D-3" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Текст немецкого прозаика и эссеиста, сочетающий в себе несколько жанров разом: это и путевые записки, и литературоведческое эссе, и личные воспоминания.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="podlinnaja_istorija_akju" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/foreign_prose/sin.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Лу Синь</div>
                    <div class="nf-book-name">Подлинная история Акью</div>
                    <div class="nf-book-publisher">Гиперион</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Марксистский дух встречается с конфуцианством и восточными реалиями — первые переводы Лу Синя, одного из отцов современной китайской литературы, были опубликованы в России еще в 1929 году.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="vozvrashhenie_v_suhumi" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/foreign_prose/odisharia.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Гурам Одишария</div>
                    <div class="nf-book-name">Возвращение в Сухуми</div>
                    <div class="nf-book-publisher">Культурная революция</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">История Сухуми от мирных и беспечных довоенных дней до трагических событий войны 1992–1993 годов. Писатель Гурам Одишария в ту эпоху был редактором литературного журнала в Сухуми и очевидцем всех событий, благодаря чему лирика и трагизм сочетаются с жесткой документальностью.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <!-- newmat -->
        <section id="den_nezavisimosti" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="https://gorky.media/wp-content/uploads/2016/11/Richard-Ford-Den-nezavisimosti.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Ричард Форд</div>
                    <div class="nf-book-name">День независимости</div>
                    <div class="nf-book-publisher">Phantom Press</div>
                    <div class="nf-book-stand">
                      <p>Стенд D-7</p><a href="#" data-stand-number="D-7" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Роман-лауреат Пулитцеровской премии и Премии Фолкнера, в разговоре о котором критики вспоминают Айдайка и других титанов американской литературы: экзистенциальная хроника о нескольких днях из жизни обычного риелтора, переживающего кризис среднего возраста.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="nomer_11" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="https://gorky.media/wp-content/uploads/2016/11/Dzhonatan-Kou-Nomer-11-kopiya.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Джонатан Коу</div>
                    <div class="nf-book-name">Номер 11</div>
                    <div class="nf-book-publisher">Phantom Press</div>
                    <div class="nf-book-stand">
                      <p>Стенд D-7</p><a href="#" data-stand-number="D-7" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Новый роман живого классика британской литературы: сатирическая картина нынешнего общества, выстроенная на примере жизней нескольких женщин, оборачивается то семейной драмой, то уморительной комедией, то и вовсе детективом.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- newmat end -->
        <!--include ../include/footer.jade-->
      </div>
      <div id="nf-section-power" class="nf-books">
        <section id="utopija_pravil_o_tehnologijah_gluposti_i_tajnom_obajanii_bjurokratii" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-utopija_pravil" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-utopija_pravil" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-utopija_pravil" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/greber.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/greber.png" rel="utopija_pravil" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/greber.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Дэвид Гребер</div>
                    <div class="nf-book-name">Утопия правил. О технологиях, глупости и тайном обаянии бюрократии</div>
                    <div class="nf-book-publisher">Ad Marginem</div>
                    <div class="nf-book-stand">
                      <p>Стенд D-1</p><a href="#" data-stand-number="D-1" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Откуда появилась тяга к бюрократии, бесконечным правилам и уставам? Как так получилось, что сегодня мы тратим массу времени, заполняя различные формуляры? И действительно ли это шифр к разгадке сути государственного насилия? Чтобы ответить на эти вопросы, антрополог Дэвид Гребер исследует неожиданные связи современного человека с бюрократией и показывает, как эти взаимоотношения формируют нашу повседневность.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="avtoritet_ili_podchinenie_bez_nasilija" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-avtoritet" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-avtoritet" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-avtoritet" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/marei.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/marei_1.png" rel="avtoritet" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/marei_1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/marei_2.png" rel="avtoritet" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/marei_2.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Александр Марей</div>
                    <div class="nf-book-name">Авторитет, или подчинение без насилия</div>
                    <div class="nf-book-publisher">Европейский университет в Санкт-Петербурге</div>
                    <div class="nf-book-stand">
                      <p>Стенд J21</p><a href="#" data-stand-number="J21" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Наряду с&nbsp;властью, авторитет&nbsp;&mdash; одно из&nbsp;наиболее значимых понятий политической и&nbsp;социальной философии. И&nbsp;вроде&nbsp;бы мы&nbsp;знаем, в&nbsp;каких контекстах оно используется и&nbsp;что означает. Но&nbsp;при этом оно остается слабо проработанным, а&nbsp;его история не&nbsp;написана. Марей пытается определить границы этого понятия.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="respublikanizm_teorija_svobody_i_gosudarstvennogo_pravlenija" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/pettit.png" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Филип Петтит</div>
                    <div class="nf-book-name">Республиканизм. Теория свободы и государственного правления</div>
                    <div class="nf-book-publisher">Издательство института Гайдара</div>
                    <div class="nf-book-stand">
                      <p>Стенд К-4</p><a href="#" data-stand-number="K-4" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Первое полноценное изложение республиканской альтернативы либеральным и&nbsp;коммунитаристским теориям, господствующим в&nbsp;современной политической философии.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="pravitelnost_vlast_i_pravlenie_v_sovremennyh_obshhestvah" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/din.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Митчелл Дин</div>
                    <div class="nf-book-name">Правительность: власть и правление в современных обществах</div>
                    <div class="nf-book-publisher">РАНХиГС Издательский дом «Дело»</div>
                    <div class="nf-book-stand">
                      <p>Стенд J-4</p><a href="#" data-stand-number="J-4" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Вышедшая в&nbsp;1999 году книга Дина стала базовым обзором исследований правительности&nbsp;&mdash; одного из&nbsp;ключевых терминов в&nbsp;работах Фуко второй половины 1970-х. Работа Дина&nbsp;&mdash; не&nbsp;только введение в&nbsp;тематическое поле, но&nbsp;и&nbsp;разработка особой &laquo;аналитики управления&raquo;&nbsp;&mdash; самостоятельное развитие подхода Мишеля Фуко в&nbsp;историческом и&nbsp;социально-политическом анализе.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="konservatizm_pro_et_contra_antologija" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-konservatizm" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-konservatizm" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-konservatizm" data-slide-to="1"></li>
                    <li data-target="#carousel-konservatizm" data-slide-to="2"></li>
                    <li data-target="#carousel-konservatizm" data-slide-to="3"></li>
                    <li data-target="#carousel-konservatizm" data-slide-to="4"></li>
                    <li data-target="#carousel-konservatizm" data-slide-to="5"></li>
                    <li data-target="#carousel-konservatizm" data-slide-to="6"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/konservatizm.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/konservatizm_1.png" rel="konservatizm" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/konservatizm_1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/konservatizm_2.png" rel="konservatizm" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/konservatizm_2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/konservatizm_3.png" rel="konservatizm" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/konservatizm_3.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/konservatizm_4.png" rel="konservatizm" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/konservatizm_4.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/konservatizm_5.png" rel="konservatizm" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/konservatizm_5.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/konservatizm_6.png" rel="konservatizm" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/konservatizm_6.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-name">«Консерватизм: pro et contra». Антология</div>
                    <div class="nf-book-publisher">РХГА</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Русская христианская гуманитарная академия представляет в рамках серии «Русский Путь» новую антологию отечественной философской и политической мысли «Консерватизм: pro et contra». В настоящем издании собраны произведения выдающихся российских и советских мыслителей, политиков, писателей, поэтов, публицистов, которые отражают эволюцию консерватизма в России в столкновении с его идеологическими оппонентами — либерализмом и социализмом. Представленные тексты охватывают двухвековой период в истории нашей страны — с начала XIX до начала XXI в. и показывают специфику феномена русского консерватизма. Издание снабжено обширным комментарием и указателем имен.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="armija_zhizni" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-armija_zhizni" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-armija_zhizni" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-armija_zhizni" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/armia.png"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/armija_zhizni.jpg" rel="armija_zhizni" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/armija_zhizni.jpg"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Юрий Щекочихин</div>
                    <div class="nf-book-name">Армия жизни</div>
                    <div class="nf-book-publisher">Common place</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Основные темы книги Юрия Щекочихина — проблемы подростков в восьмидесятые годы, непонимание между старшим и младшим поколениями, переломные события последнего десятилетия Советского Союза и их влияние на молодежь. 20 лет назад эти тексты были разбором текущих проблем, однако сегодня мы читаем их как памятник эпохи, показывающий истоки социальной драмы, которая приняла катастрофический размах в девяностые и результаты которой мы наблюдаем по сей день.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="pochemu_vlastvuet_zapad" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-pochemu_vlastvuet_zapad" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-pochemu_vlastvuet_zapad" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-pochemu_vlastvuet_zapad" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/morris.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/morris.png" rel="pochemu_vlastvuet_zapad" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/morris.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Иэн Моррис</div>
                    <div class="nf-book-name">Почему властвует запад… по крайней мере, пока еще. Закономерности истории, и что они сообщают нам о будущем</div>
                    <div class="nf-book-publisher">Карьера Пресс</div>
                    <div class="nf-book-stand">
                      <p>Стенд G-3</p><a href="#" data-stand-number="G-3" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Моррис тщательно рассматривает 15 тысяч лет истории и выстраивает логику событий – что такое Восток и Запад, как менялось их доминирование в истории человечества. Моррис использует самые последние исследования разных наук – от античной истории до нейропсихологии.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="kinopolitika_skrytye_smysly_sovremennyh_gollivudskih_filmov" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-kinopolitika" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-kinopolitika" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-kinopolitika" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/usev.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/usev_1.png" rel="kinopolitika" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/usev_1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/usev_2.png" rel="kinopolitika" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/usev_2.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Алексей Юсев</div>
                    <div class="nf-book-name">Кинополитика. Скрытые смыслы современных голливудских фильмов</div>
                    <div class="nf-book-publisher">Альпина Паблишер</div>
                    <div class="nf-book-stand">
                      <p>Стенд А-6</p><a href="#" data-stand-number="A-6" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Что объединяет голливудское кино и  политику США? Юсев строит захватывающую картину отвечая на этот вопрос. Связывая политику, войны, манипуляции, PR, большие деньги, киноиндустрию, мы сможем получить отчетливые представления о «кухне» маскульта.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="zasun_sebe_v_zadnicu" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/solanas.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Валери Соланс</div>
                    <div class="nf-book-name">Засунь себе в задницу!</div>
                    <div class="nf-book-publisher">Kolonna Publications</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">В&nbsp;книгу вошли пьесы и&nbsp;публикации радикальной феминистки Валери Соланс. 3&nbsp;июня 1968 года Соланас пыталась убить Энди Уорхола, которого обвиняла в&nbsp;краже ее&nbsp;пьесы &laquo;Засунь себе в&nbsp;задницу!&raquo;. После смерти писательницы рукопись была найдена и&nbsp;впервые поставлена в&nbsp;2000&nbsp;году.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="velikoross_velikorus_iz_istorii_konstruirovanija_jetnichnosti" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-velikoross" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-velikoross" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-velikoross" data-slide-to="1"></li>
                    <li data-target="#carousel-velikoross" data-slide-to="2"></li>
                    <li data-target="#carousel-velikoross" data-slide-to="3"></li>
                    <li data-target="#carousel-velikoross" data-slide-to="4"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/leskinen.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/leskinen_1.png" rel="velikoross" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/leskinen_1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/leskinen_2.png" rel="velikoross" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/leskinen_2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/leskinen_3.png" rel="velikoross" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/leskinen_3.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/leskinen_4.png" rel="velikoross" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/power/contents/leskinen_4.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Мария Лескинен</div>
                    <div class="nf-book-name">Великоросс/великорус. Из истории конструирования этничности. Век XIX</div>
                    <div class="nf-book-publisher">Индрик</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">В монографии представлена реконструкция ключевых понятий, научных теорий и идей, с помощью которых осуществлялось создание концепта «великорусы» в российской научной и популярной этногеографической литературе XIX в.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--include ../include/footer.jade-->
      </div>
      <div id="nf-section-diarys" class="nf-books">
        <section id="igry_razuma" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/silvia.png" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Сильвия Назар</div>
                    <div class="nf-book-name">Игры разума</div>
                    <div class="nf-book-publisher">Corpus</div>
                    <div class="nf-book-stand">
                      <p>Стенд С-5</p><a href="#" data-stand-number="C-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">О&nbsp;герое этой книги многие слышали благодаря известному фильму, который был снят как раз по&nbsp;биографии, написанной Сильвией Назар. Джон Нэш&nbsp;&mdash; нобелевский лауреат, математик, чью творческую деятельность на&nbsp;тридцать с&nbsp;лишним лет прерывала шизофрения. В&nbsp;книге научные достижения Нэша и&nbsp;его личная история описаны гораздо подробнее, чем в&nbsp;фильме.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="astrid_lindgren_jetot_den_i_est_zhizn" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/yens.jpeg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Йенс Андерсен</div>
                    <div class="nf-book-name">Астрид Линдгрен. Этот день и есть жизнь</div>
                    <div class="nf-book-publisher">Азбука-Аттикус</div>
                    <div class="nf-book-stand">
                      <p>Стенд С-3</p><a href="#" data-stand-number="C-3" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Новая и&nbsp;уже успевшая нашуметь биография великой шведской сказочницы, первая за&nbsp;сорок лет. &laquo;Бунтарка в&nbsp;брюках&raquo;, мать-одиночка в&nbsp;пуританской Швеции&nbsp;&mdash; жизнь Линдгрен была далеко не&nbsp;сказочной, но&nbsp;именно ее&nbsp;мужество и&nbsp;независимость унаследовала Пеппи Длинныйчулок.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="promelk_belly_romanticheskaja_hronika" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/messerer.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Борис Мессерер</div>
                    <div class="nf-book-name">Промельк Беллы. Романтическая хроника</div>
                    <div class="nf-book-publisher">АСТ</div>
                    <div class="nf-book-stand">
                      <p>Стенд С-5</p><a href="#" data-stand-number="C-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Мемуары известного художника-живописца, графика, сценографа, мужа Беллы Ахмадулиной: быт послевоенной Москвы, андеграунд шестидесятых-семидесятых и&nbsp;многое другое.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="koe_chto_eshhe" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/kiton.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Дайан Китон</div>
                    <div class="nf-book-name">Кое-что еще...</div>
                    <div class="nf-book-publisher">АСТ</div>
                    <div class="nf-book-stand">
                      <p>Стенд С-5</p><a href="#" data-stand-number="C-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Автобиография Дайан Китон, обладательницы премии &laquo;Оскар&raquo; и&nbsp;музы Вуди Аллена. Знаменитая актриса рассказывает о&nbsp;своем детстве, первых шагах на&nbsp;театральной сцене и&nbsp;романтических отношениях с&nbsp;Аль Пачино, Уорреном Битти и&nbsp;Вуди Алленом.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="vidennoe_najavu" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/lungin.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Семен Лунгин</div>
                    <div class="nf-book-name">Виденное наяву</div>
                    <div class="nf-book-publisher">АСТ</div>
                    <div class="nf-book-stand">
                      <p>Стенд С-5</p><a href="#" data-stand-number="C-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Автобиография советского сценариста&nbsp;&mdash; создателя фильмов &laquo;Жил певчий дрозд&raquo;, &laquo;Добро пожаловать, или Посторонним вход воспрещен&raquo;, &laquo;Трое в&nbsp;лодке, не&nbsp;считая собаки&raquo;, &laquo;Розыгрыш&raquo;.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="dnevniki_v_10_h_tomah_12_toma" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-dnevniki_v_10_h_tomah_12_toma" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-dnevniki_v_10_h_tomah_12_toma" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-dnevniki_v_10_h_tomah_12_toma" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/uvachev.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/06_yuvachev-morozov-kopiya.jpg" rel="dnevniki_v_10_h_tomah_12_toma" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/06_yuvachev-morozov-kopiya.jpg"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Иван Ювачев</div>
                    <div class="nf-book-name">Дневники в 10-х томах. 1,2 тома</div>
                    <div class="nf-book-publisher">Галеев-Галерея</div>
                    <div class="nf-book-stand">
                      <p>Стенд E-5</p><a href="#" data-stand-number="E-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Издание двух первых томов из&nbsp;будущего десятитомника собрания дневников отца Даниила Хармса. Иван Ювачев, безусловно, является одним из&nbsp;важнейших книжных событий 2016&nbsp;года. Уникальные дневники Ювачева в&nbsp;таком объеме не&nbsp;издавались. Глубина и&nbsp;откровенность дневников удивительна.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="pisma_na_zametku" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-pisma_na_zametku" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-pisma_na_zametku" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-pisma_na_zametku" data-slide-to="1"></li>
                    <li data-target="#carousel-pisma_na_zametku" data-slide-to="2"></li>
                    <li data-target="#carousel-pisma_na_zametku" data-slide-to="3"></li>
                    <li data-target="#carousel-pisma_na_zametku" data-slide-to="4"></li>
                    <li data-target="#carousel-pisma_na_zametku" data-slide-to="5"></li>
                    <li data-target="#carousel-pisma_na_zametku" data-slide-to="6"></li>
                    <li data-target="#carousel-pisma_na_zametku" data-slide-to="7"></li>
                    <li data-target="#carousel-pisma_na_zametku" data-slide-to="8"></li>
                    <li data-target="#carousel-pisma_na_zametku" data-slide-to="9"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/pisma.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-1.png" rel="pisma_na_zametku" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-2.png" rel="pisma_na_zametku" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-3.png" rel="pisma_na_zametku" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-3.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-4.png" rel="pisma_na_zametku" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-4.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-5.png" rel="pisma_na_zametku" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-5.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-6.png" rel="pisma_na_zametku" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-6.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-7.png" rel="pisma_na_zametku" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-7.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-8.png" rel="pisma_na_zametku" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-8.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-9.png" rel="pisma_na_zametku" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/07_pisma-na-zametku-9.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-name">Письма на заметку</div>
                    <div class="nf-book-publisher">Гаятри/Livebook</div>
                    <div class="nf-book-stand">
                      <p>Стенд K-19</p><a href="#" data-stand-number="K-19" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Сборник интересных, неожиданных и&nbsp;необычных писем, записок и&nbsp;телеграмм известных людей. Среди них: записка Елизаветы II&nbsp;президенту Соединенных Штатов с&nbsp;личным рецептом шотландских оладий, трогательные письма Джона Стейнбека и&nbsp;Рональда Рейгана своим сыновьям о&nbsp;первой любви и&nbsp;семейной жизни и&nbsp;многие другие.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="znak_ne_sotretsja" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-znak_ne_sotretsja" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-znak_ne_sotretsja" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-znak_ne_sotretsja" data-slide-to="1"></li>
                    <li data-target="#carousel-znak_ne_sotretsja" data-slide-to="2"></li>
                    <li data-target="#carousel-znak_ne_sotretsja" data-slide-to="3"></li>
                    <li data-target="#carousel-znak_ne_sotretsja" data-slide-to="4"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/znak.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/08_znak-ne-sotretsya-oglavlenie.png" rel="znak_ne_sotretsja" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/08_znak-ne-sotretsya-oglavlenie.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/08_znak-ne-sotretsya-oglavlenie-2.png" rel="znak_ne_sotretsja" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/08_znak-ne-sotretsya-oglavlenie-2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/08_znak-ne-sotretsya-oglavlenie-3.png" rel="znak_ne_sotretsja" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/08_znak-ne-sotretsya-oglavlenie-3.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/08_znak-ne-sotretsya-oglavlenie-4.png" rel="znak_ne_sotretsja" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/08_znak-ne-sotretsya-oglavlenie-4.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-name">«Знак не сотрется». Судьбы остарбайтеров  в письмах, воспоминаниях и устных рассказах</div>
                    <div class="nf-book-publisher">Издательская программа Международного общества «Мемориал»</div>
                    <div class="nf-book-stand">
                      <p>Стенд J-39</p><a href="#" data-stand-number="J-39" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Остарбайтеры&nbsp;&mdash; люди, которых из&nbsp;городов и&nbsp;сел России, Украины, Белоруссии угнали работать в&nbsp;гитлеровскую Германию. О&nbsp;том, что они пережили в&nbsp;неволе и&nbsp;что им&nbsp;пришлось испытать после возвращения на&nbsp;родину, рассказывают сохраненные в&nbsp;архиве &laquo;Мемориала&raquo; интервью, воспоминания, письма, фотоснимки.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="jejzenshtejn" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/kushnirov.jpeg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Марк Кушниров</div>
                    <div class="nf-book-name">Эйзенштейн</div>
                    <div class="nf-book-publisher">Молодая гвардия</div>
                    <div class="nf-book-stand">
                      <p>Стенд H-14</p><a href="#" data-stand-number="H-14" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Новая книга Марка Кушнирова, исследователя жизни и&nbsp;творчества Эйзенштейна&nbsp;&mdash; попытка разобраться во&nbsp;внутреннем мире великого режиссера, породившем его многообразные достижения в&nbsp;кинематографе, театре, графике и&nbsp;публицистике.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="vstrechi_i_znakomstva" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-vstrechi_i_znakomstva" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-vstrechi_i_znakomstva" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-vstrechi_i_znakomstva" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/sokolova.png"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/10_sokolova-dnevniki.png" rel="vstrechi_i_znakomstva" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/10_sokolova-dnevniki.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Александра Соколова</div>
                    <div class="nf-book-name">Встречи и знакомства</div>
                    <div class="nf-book-publisher">Новое литературное обозрение</div>
                    <div class="nf-book-stand">
                      <p>Стенд A-4, G12</p><a href="#" data-stand-number="A-4" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Писательница Александра Ивановна Соколова (1833&ndash;1914), мать известного журналиста Власа Дорошевича, много повидала на&nbsp;своем веку&nbsp;&mdash; от&nbsp;великосветских салонов до&nbsp;московских трущоб. В&nbsp;живо написанных мемуарных очерках она повествует о&nbsp;различных эпизодах своей жизни.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="beglyj_vzgljad_na_vysokuju_politiku" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/charikov.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Николай Чарыков</div>
                    <div class="nf-book-name">Беглый взгляд на высокую политику</div>
                    <div class="nf-book-publisher">Русский путь</div>
                    <div class="nf-book-stand">
                      <p>Стенд K-10</p><a href="#" data-stand-number="K-10" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Первое издание воспоминаний Николая Чарыкова (1855&ndash;1931), одного из&nbsp;высокопоставленных русский дипломатов конца XIX&nbsp;&mdash; начала XX&nbsp;века, опубликованных в&nbsp;Англии вскоре после смерти автора.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="zaveshhanie_sofi" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-zaveshhanie_sofi" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-zaveshhanie_sofi" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-zaveshhanie_sofi" data-slide-to="1"></li>
                    <li data-target="#carousel-zaveshhanie_sofi" data-slide-to="2"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/prior.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/12_zaveshanie-sofii-1.png" rel="zaveshhanie_sofi" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/12_zaveshanie-sofii-1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/12_zaveshanie-sofii-2.png" rel="zaveshhanie_sofi" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/12_zaveshanie-sofii-2.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Ингеборг Приор</div>
                    <div class="nf-book-name">Завещание Софи. От Ганновера до Сибири: трагическая история Софи Лисицкой-Кюпперс и ее похищенных картин</div>
                    <div class="nf-book-publisher">Свиньин и сыновья</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Жизнеописание Софи Лисицкая-Кюпперс&nbsp;&mdash; жены Эль Лисицкого, светской дамы Ганновера, &laquo;первооткрывателя&raquo; множества имен в&nbsp;искусстве&nbsp;ХХ века, ссыльной в&nbsp;Новосибирске. Судьба ее&nbsp;неразрывно связана с&nbsp;искусством.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="po_sledam_van_Goga" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-po_sledam_van_Goga" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-po_sledam_van_Goga" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-po_sledam_van_Goga" data-slide-to="1"></li>
                    <li data-target="#carousel-po_sledam_van_Goga" data-slide-to="2"></li>
                    <li data-target="#carousel-po_sledam_van_Goga" data-slide-to="3"></li>
                    <li data-target="#carousel-po_sledam_van_Goga" data-slide-to="4"></li>
                    <li data-target="#carousel-po_sledam_van_Goga" data-slide-to="5"></li>
                    <li data-target="#carousel-po_sledam_van_Goga" data-slide-to="6"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/burluki.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/13_burlyuki1.png" rel="po_sledam_van_Goga" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/13_burlyuki1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/13_burlyuki2.png" rel="po_sledam_van_Goga" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/13_burlyuki2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/13_burlyuki3.png" rel="po_sledam_van_Goga" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/13_burlyuki3.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/13_burlyuki4.png" rel="po_sledam_van_Goga" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/13_burlyuki4.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/13_burlyuki5.png" rel="po_sledam_van_Goga" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/13_burlyuki5.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/13_burlyuki6.png" rel="po_sledam_van_Goga" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/contents/13_burlyuki6.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Мария и Давид Бурлюки</div>
                    <div class="nf-book-name">«По следам Ван Гога». Записки 1949 года</div>
                    <div class="nf-book-publisher">Grundrisse</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Это дневник путешествия (23&nbsp;сентября&nbsp;&mdash; 1&nbsp;декабря 1949) из&nbsp;Нью-Йорка к&nbsp;Лазурному берегу и&nbsp;далее, по&nbsp;послевоенному Провансу и&nbsp;Лангедоку. Главную роль в&nbsp;этом путешествии играли вангоговские места (Арль, Сен-Реми, Сен-Мари, Тараскон) ― поиск его мотивов и&nbsp;людей, которые еще помнят художника.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="komandirovka_v_belovode" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/diarys/savoskul.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Сергей Савоскул</div>
                    <div class="nf-book-name">Командировка в Беловодье</div>
                    <div class="nf-book-publisher">Индрик</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Жанр книги очень трудно установить, это воспоминания, антропологические зарисовки и даже треволог. Автор в почти художественной форме описывает свои антропологические экспедиции к подножию горы Белухи, в места которые манили и манят старообрядцев и мечтателей – легендарное Беловодье.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--include ../include/footer.jade-->
      </div>
      <div id="nf-section-rus_history" class="nf-books">
        <section id="russkie_knjazja_pri_dvore_hanov_zolotoj_ordy" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-russkie_knjazja" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-russkie_knjazja" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-russkie_knjazja" data-slide-to="1"></li>
                    <li data-target="#carousel-russkie_knjazja" data-slide-to="2"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/seleznev.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/seleznev1.png" rel="russkie_knjazja" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/seleznev1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/seleznev2.png" rel="russkie_knjazja" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/seleznev2.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Юрий Селезнев</div>
                    <div class="nf-book-name">Русские князья при дворе ханов Золотой Орды</div>
                    <div class="nf-book-publisher">Ломоносовъ</div>
                    <div class="nf-book-stand">
                      <p>Стенд F-13</p><a href="#" data-stand-number="F-13" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Книга о&nbsp;взаимоотношениях русской элиты XIII века и&nbsp;Золотой Орды: о&nbsp;поездках русских князей к&nbsp;ханам Джучиева Улуса и&nbsp;том, какое место они занимали в&nbsp;системе ордынской государственности.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="cherez_sibir_s_nansenom" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-cherez_sibir_s_nansenom" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-cherez_sibir_s_nansenom" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-cherez_sibir_s_nansenom" data-slide-to="1"></li>
                    <li data-target="#carousel-cherez_sibir_s_nansenom" data-slide-to="2"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/cherez_sibir_s_nansenom.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/sibir1.png" rel="cherez_sibir_s_nansenom" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/sibir1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/sibir2.png" rel="cherez_sibir_s_nansenom" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/sibir2.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Эйвинд Равна</div>
                    <div class="nf-book-name">Через Сибирь с Нансеном</div>
                    <div class="nf-book-publisher">Паульсен</div>
                    <div class="nf-book-stand">
                      <p>Стенд Н-10а</p><a href="#" data-stand-number="H-10a" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Спустя сто лет после похода Йонаса Лида и&nbsp;Фритьофа Нансена российско-норвежская группа отправилась в&nbsp;экспедицию по&nbsp;тому&nbsp;же маршруту, чтобы своими глазами увидеть произошедшие за&nbsp;век изменения. Цитаты из&nbsp;труда Нансена &laquo;Через Сибирь&raquo;, которыми изобилует книга, позволяют наглядно сравнить ситуацию в&nbsp;1913 и&nbsp;2013&nbsp;годах.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="reformy_rossii" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/reformi.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-name">Реформы России с древнейших времен до конца ХХ в. В 4 томах</div>
                    <div class="nf-book-publisher">РОССПЭН</div>
                    <div class="nf-book-stand">
                      <p>Стенд F-11</p><a href="#" data-stand-number="F-11" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">История России богата разного рода реформами. Если реформы осуществлялись своевременно и&nbsp;были адекватны вызовам времени, то&nbsp;они позволяли снять напряжение в&nbsp;обществе, обеспечивали его стабилизацию и&nbsp;способствовали динамизму развития страны. Если&nbsp;же реформы осуществлялись с&nbsp;опозданием, то&nbsp;приводили к&nbsp;политическим и&nbsp;социальным взрывам. Осмысление причин эффективности или несостоятельности реформ остается одной из&nbsp;актуальных исследовательских задач.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="klejmo_sudby_sovetskih_voennoplennyh" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-klejmo_sudby_sovetskih_voennoplennyh" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-klejmo_sudby_sovetskih_voennoplennyh" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-klejmo_sudby_sovetskih_voennoplennyh" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/kleimo.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/kleimo1.png" rel="klejmo_sudby_sovetskih_voennoplennyh" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/kleimo1.png"></a></div>
                  </div><div class="icon-arrow-right scroll-right-js"></div>
              </div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Оксана Дворниченко</div>
                    <div class="nf-book-name">Клеймо: судьбы советских военнопленных</div>
                    <div class="nf-book-publisher">Культурная революция</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Дворниченко&nbsp;&mdash; режиссер-документалист, ее&nbsp;фильм &laquo;Почему ты&nbsp;жив?&raquo; о&nbsp;советских военнопленных отмечен на&nbsp;международном фестивале &laquo;Приз Европы&raquo; и&nbsp;представлен в&nbsp;авторской программе фильмов MoMA. &laquo;Клеймо&raquo; Дворниченко писала 20&nbsp;лет, пересматривая военную хронику, работая в&nbsp;архивах и&nbsp;встречаясь с&nbsp;вернувшимися с&nbsp;Великой Отечественной войны. 700-страничный документальный роман в&nbsp;итоге стал детальным свидетельством трагического опыта почти шести миллионов советских солдат и&nbsp;офицеров.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a><a data-flip-widget="flipit" href="https://flipboard.com" class="shareBlock-link"><span class="icon-flip-xs"></span></a>
                          <script src="https://cdn.flipboard.com/web/buttons/js/flbuttons.min.js" type="text/javascript"></script>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="seryj_muzhik" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/serii.png" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-name">«Серый мужик». Народная жизнь в рассказах забытых русских писателей XIX века</div>
                    <div class="nf-book-publisher">Common place</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">«Серый мужик» – выражение из публицистики 1880-х годов: это обычный представитель народа, чаще всего он жертва обстоятельств, произвола власти или собственных заблуждений. Литература, посвященная «серому мужику», велика и многообразна, но почти полностью вытеснена за пределы «высокого» канона.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="spqr_istorija_drevnego_rima" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-spqr_istorija_drevnego_rima" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-spqr_istorija_drevnego_rima" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-spqr_istorija_drevnego_rima" data-slide-to="1"></li>
                    <li data-target="#carousel-spqr_istorija_drevnego_rima" data-slide-to="2"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/bird.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/SPQR1.png" rel="spqr_istorija_drevnego_rima" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/SPQR1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/SPQR2.png" rel="spqr_istorija_drevnego_rima" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/SPQR2.png"></a></div>

                  </div>
                </div><div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Мэри Бирд</div>
                    <div class="nf-book-name">SPQR: История Древнего Рима</div>
                    <div class="nf-book-publisher">Альпина нон-фикшен</div>
                    <div class="nf-book-stand">
                      <p>Стенд А-6</p><a href="#" data-stand-number="A-6" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Бирд объясняет, почему так важна римская история сегодня и&nbsp;каким образом маленький городок центральной Италии превратился в&nbsp;империю с&nbsp;огромной территорией на&nbsp;трех континентах, а&nbsp;также развенчивает мифы о&nbsp;Вечном городе. Рим завещал цивилизации идеи не&nbsp;только свободы и&nbsp;гражданства, но&nbsp;и&nbsp;империалистической эксплуатации.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a><a data-flip-widget="flipit" href="https://flipboard.com" class="shareBlock-link"><span class="icon-flip-xs"></span></a>
                          <script src="https://cdn.flipboard.com/web/buttons/js/flbuttons.min.js" type="text/javascript"></script>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="vizantijskaja_respublika_narod_i_vlast_v_novom_rime" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-vizantijskaja_respublika" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-vizantijskaja_respublika" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-vizantijskaja_respublika" data-slide-to="1"></li>
                    <li data-target="#carousel-vizantijskaja_respublika" data-slide-to="2"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/vizantijskaja_respublika_narod_i_vlast_v_novom_rime.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/kaldelis1.png" rel="vizantijskaja_respublika" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/kaldelis1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/kaldelis2.png" rel="vizantijskaja_respublika" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/kaldelis2.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Энтони Калделлис</div>
                    <div class="nf-book-name">Византийская республика: народ и власть в Новом Риме</div>
                    <div class="nf-book-publisher">Дмитрий Буланин</div>
                    <div class="nf-book-stand">
                      <p>Стенд G-7</p><a href="#" data-stand-number="G-7" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Калделлис исследует влияние народа на&nbsp;принятие решений и&nbsp;даже престолонаследования византийских императоров. Такое влияние граждан на&nbsp;политику стало неминуемым следствием того, что Византийская империя стала продолжением Римской империи&nbsp;и, соответственно, Римской республики. Политическая идеология Византии была светской, поскольку была основана на&nbsp;республиканском представлении, что правительство обязано служить народу.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a><a data-flip-widget="flipit" href="https://flipboard.com" class="shareBlock-link"><span class="icon-flip-xs"></span></a>
                          <script src="https://cdn.flipboard.com/web/buttons/js/flbuttons.min.js" type="text/javascript"></script>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="sobirateli_zemledelcy_i_iskopaemoe_toplivo_kak_izmenjajutsja_chelovecheskie_cennosti" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-sobirateli_zemledelcy" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-sobirateli_zemledelcy" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-sobirateli_zemledelcy" data-slide-to="1"></li>
                    <li data-target="#carousel-sobirateli_zemledelcy" data-slide-to="2"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/sobirateli_zemledelcy.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/sobirateli1.png" rel="sobirateli_zemledelcy" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/sobirateli1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/sobirateli2.png" rel="sobirateli_zemledelcy" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/sobirateli2.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Иэн Моррис</div>
                    <div class="nf-book-name">Собиратели, земледельцы и ископаемое топливо. Как изменяются человеческие ценности</div>
                    <div class="nf-book-publisher">Издательство института Гайдара</div>
                    <div class="nf-book-stand">
                      <p>Стенд К-4</p><a href="#" data-stand-number="K-4" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Опираясь на данные археологии, антропологии, биологии и истории, Иэн Моррис предлагает убедительное объяснение эволюции человеческих ценностей, утверждая, что за принципиальными долгосрочными изменениями ценностей стоит наиболее фундаментальная из всех сил — энергия.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a><a data-flip-widget="flipit" href="https://flipboard.com" class="shareBlock-link"><span class="icon-flip-xs"></span></a>
                          <script src="https://cdn.flipboard.com/web/buttons/js/flbuttons.min.js" type="text/javascript"></script>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="troja_pjat_tysjach_let_realnosti_i_mifa" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-troja_pjat_tysjach_let" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-troja_pjat_tysjach_let" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-troja_pjat_tysjach_let" data-slide-to="1"></li>
                    <li data-target="#carousel-troja_pjat_tysjach_let" data-slide-to="2"></li>
                    <li data-target="#carousel-troja_pjat_tysjach_let" data-slide-to="3"></li>
                    <li data-target="#carousel-troja_pjat_tysjach_let" data-slide-to="4"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/ivik.jpeg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/ivik1.png" rel="troja_pjat_tysjach_let" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/ivik1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/ivik2.png" rel="troja_pjat_tysjach_let" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/ivik2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/ivik3.png" rel="troja_pjat_tysjach_let" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/ivik3.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/ivik4.png" rel="troja_pjat_tysjach_let" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/ivik4.png"></a></div>

                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Олег Ивик</div>
                    <div class="nf-book-name">Троя. Пять тысяч лет реальности и мифа</div>
                    <div class="nf-book-publisher">Ломоносовъ</div>
                    <div class="nf-book-stand">
                      <p>Стенд F-13</p><a href="#" data-stand-number="F-13" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Коллектив авторов, скрывающейся под псевдонимом Олег Ивик, восстанавливает пятитысячелетнюю историю легендарного города, оперируя самыми свежими археологическими данными.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="morskie_chudovishha_na_kartah_srednih_vekov_i_jepohi_vozrozhdenija" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-morskie_chudovishha" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-morskie_chudovishha" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-morskie_chudovishha" data-slide-to="1"></li>
                    <li data-target="#carousel-morskie_chudovishha" data-slide-to="2"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/morskie_chudovishha.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/morskie1.png" rel="morskie_chudovishha" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/morskie1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/morskie2.png" rel="morskie_chudovishha" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/morskie2.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Чет Ван Дузер</div>
                    <div class="nf-book-name">Морские чудовища на картах Средних веков и эпохи Возрождения</div>
                    <div class="nf-book-publisher">Паульсен</div>
                    <div class="nf-book-stand">
                      <p>Стенд Н-10а</p><a href="#" data-stand-number="H-10a" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Книга Ван Дузера&nbsp;&mdash; прекрасный настольный справочник по&nbsp;истории картографии и&nbsp;изобразительного искусства.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a><a data-flip-widget="flipit" href="https://flipboard.com" class="shareBlock-link"><span class="icon-flip-xs"></span></a>
                          <script src="https://cdn.flipboard.com/web/buttons/js/flbuttons.min.js" type="text/javascript"></script>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="chernaja_afrika_proshloe_i_nastojashhee" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-chernaja_afrika" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-chernaja_afrika" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-chernaja_afrika" data-slide-to="1"></li>
                    <li data-target="#carousel-chernaja_afrika" data-slide-to="2"></li>
                    <li data-target="#carousel-chernaja_afrika" data-slide-to="3"></li>
                    <li data-target="#carousel-chernaja_afrika" data-slide-to="4"></li>
                    <li data-target="#carousel-chernaja_afrika" data-slide-to="5"></li>
                    <li data-target="#carousel-chernaja_afrika" data-slide-to="6"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/afrika.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/afrika1.png" rel="chernaja_afrika" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/afrika1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/afrika2.png" rel="chernaja_afrika" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/afrika2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/afrika3.png" rel="chernaja_afrika" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/afrika3.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/afrika4.png" rel="chernaja_afrika" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/afrika4.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/afrika5.png" rel="chernaja_afrika" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/afrika5.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/afrika6.png" rel="chernaja_afrika" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/afrika6.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-name">Черная Африка: прошлое и настоящее</div>
                    <div class="nf-book-publisher">Русский фонд содействия образованию и науки / Университет Дмитрия Пожарского</div>
                    <div class="nf-book-stand">
                      <p>Стенд Н-2</p><a href="#" data-stand-number="H-2" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Работа о&nbsp;Новой и&nbsp;Новейшей истории Тропической и&nbsp;Южной Африки. В&nbsp;ней изложены основные проблемы истории этой территории с&nbsp;XV века по&nbsp;настоящее время: развитие африканских цивилизаций, создание и&nbsp;распад колониальной системы, становление колониального общества, формирование антиколониализма и&nbsp;идеологии африканского национализма, события, проблемы и&nbsp;вызовы второй половины XX&nbsp;&mdash; начала XXI&nbsp;вв.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="morskie_piraty_ot_srednevekovja_k_sovremennosti" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/sidorchenko.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Виктор Сидорченко</div>
                    <div class="nf-book-name">Морские пираты: от Средневековья к современности</div>
                    <div class="nf-book-publisher">СПГУ</div>
                    <div class="nf-book-stand">
                      <p>Стенд Н-22</p><a href="#" data-stand-number="H-22" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Монография завершает цикл работ автора по&nbsp;истории морского пиратства, раскрывающих возникновение и&nbsp;совершенствование антипиратского законодательства.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="kitaj_kusochkami" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-kitaj_kusochkami" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-kitaj_kusochkami" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-kitaj_kusochkami" data-slide-to="1"></li>
                    <li data-target="#carousel-kitaj_kusochkami" data-slide-to="2"></li>
                    <li data-target="#carousel-kitaj_kusochkami" data-slide-to="3"></li>
                    <li data-target="#carousel-kitaj_kusochkami" data-slide-to="4"></li>
                    <li data-target="#carousel-kitaj_kusochkami" data-slide-to="5"></li>
                    <li data-target="#carousel-kitaj_kusochkami" data-slide-to="6"></li>
                    <li data-target="#carousel-kitaj_kusochkami" data-slide-to="7"></li>
                    <li data-target="#carousel-kitaj_kusochkami" data-slide-to="8"></li>
                    <li data-target="#carousel-kitaj_kusochkami" data-slide-to="9"></li>
                    <li data-target="#carousel-kitaj_kusochkami" data-slide-to="10"></li>
                    <li data-target="#carousel-kitaj_kusochkami" data-slide-to="11"></li>
                    <li data-target="#carousel-kitaj_kusochkami" data-slide-to="12"></li>
                    <li data-target="#carousel-kitaj_kusochkami" data-slide-to="13"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/china1.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china2.png" rel="kitaj_kusochkami" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china3.png" rel="kitaj_kusochkami" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china3.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china4.png" rel="kitaj_kusochkami" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china4.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china5.png" rel="kitaj_kusochkami" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china5.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china6.png" rel="kitaj_kusochkami" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china6.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china7.png" rel="kitaj_kusochkami" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china7.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china8.png" rel="kitaj_kusochkami" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china8.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china9.png" rel="kitaj_kusochkami" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china9.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china10.png" rel="kitaj_kusochkami" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china10.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china11.png" rel="kitaj_kusochkami" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china11.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china12.png" rel="kitaj_kusochkami" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china12.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china13.png" rel="kitaj_kusochkami" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china13.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china14.png" rel="kitaj_kusochkami" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/contents/china14.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Юрий Иляхин</div>
                    <div class="nf-book-name">Китай кусочками</div>
                    <div class="nf-book-publisher">Петербургское Востоковедение</div>
                    <div class="nf-book-stand">
                      <p>Стенд J-7</p><a href="#" data-stand-number="J-7" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Исследование посвящено современному Китаю. Автор уже долгое время живет и&nbsp;работает в&nbsp;КНР и&nbsp;пытается раскрыть перед читателями Срединную империю под разными углами.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="vena_roman_s_gorodom" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/jan_de_kar.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Жан де Кар</div>
                    <div class="nf-book-name">Вена. Роман с городом</div>
                    <div class="nf-book-publisher">Издательство Ольги Морозовой</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Жан де&nbsp;Кар&nbsp;&mdash; известный французский популяризатор истории. Среди его бестселлеров монографии о&nbsp;великих королевских династиях и&nbsp;знаменитых столицах Европы. В&nbsp;Вену Жан де&nbsp;Кар влюбился в&nbsp;1967&nbsp;году, когда впервые оказался здесь. С&nbsp;тех пор ему приходилось не&nbsp;раз бывать в&nbsp;городе пирожных, вальса и&nbsp;психоанализа.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="puteshestvie_ibn_fadlana_volzhskij_put_ot_bagdada_do_bulgara" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/rus_history/torgoev.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Асан Торгоев, Игорь Ахмедов</div>
                    <div class="nf-book-name">Путешествие Ибн Фадлана: волжский путь от Багдада до Булгара</div>
                    <div class="nf-book-publisher">Издательский дом Марджани</div>
                    <div class="nf-book-stand">
                      <p>Стенд 18-12, 3 этаж</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">В&nbsp;книгу вошел новый перевод рукописи Ахмада ибн Фадлана&nbsp;&mdash; ценнейшего источника по&nbsp;истории Руси и&nbsp;других государств, находившихся на&nbsp;территории современной России в&nbsp;VIII веке&nbsp;&mdash; а&nbsp;также современные статьи о&nbsp;времени ибн Фадлана и&nbsp;народах Восточной Европы.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--include ../include/footer.jade-->
      </div>
      <div id="nf-section-art" class="nf-books">
        <section id="moskva_arhitektura_sovetskogo_modernizma" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/bronovitskaya.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Броновицкая А., Малинин Н.</div>
                    <div class="nf-book-name">Москва. Архитектура советского модернизма. 1955-1991. Справочник-путеводитель</div>
                    <div class="nf-book-publisher">Музей современного искусства Гараж</div>
                    <div class="nf-book-stand">
                      <p>Стенд F-4</p><a href="#" data-stand-number="F-4" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Пожалуй, первый столь объемный путеводитель по модернистской архитектуре Москвы, снабжённый уникальными фотографиями.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="turist_novaja_teorija_prazdnogo_klassa" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                 <div id="carousel-turist_novaja_teorija" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-turist_novaja_teorija" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-turist_novaja_teorija" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/din.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/din1.png" rel="sobranie_sochinenij" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/din1.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Дин Макканелл</div>
                    <div class="nf-book-name">Турист. Новая теория праздного класса</div>
                    <div class="nf-book-publisher">Ad Marginem</div>
                    <div class="nf-book-stand">
                      <p>Стенд D-1</p><a href="#" data-stand-number="D-1" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Профессор ландшафтной архитектуры Калифорнийского университета исследует понятия аутентичности и культуру, связанную с построением социальной реальности вокруг феномена туризма, захватившего западный мир во второй половине XX века.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="ivan_zholtovskij_arhitektor_sovetskogo_palladianstva" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/joltovsky.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Дмитрий Хмельницкий</div>
                    <div class="nf-book-name">Иван Жолтовский. Архитектор советского палладианства</div>
                    <div class="nf-book-publisher">DOM Publishers</div>
                    <div class="nf-book-stand">
                      <p>Стенд К-17</p><a href="#" data-stand-number="K-17" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Иван Жолтовский, победитель конкурса на Дворец советов в 1932 году, был одной из ключевых фигур в истории советской архитектуры. После разгрома современной архитектуры в СССР именно Жолтовский возглавил систему обучения и переобучения советских архитекторов в соответствии с новыми правилами. В то же время обстоятельства его биографии до сегодняшнего дня почти неизвестны.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="plot_i_kamen_telo_i_gorod_v_zapadnoj_civilizacii" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/sennet.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Ричард Сеннет</div>
                    <div class="nf-book-name">Плоть и камень. Тело и город в западной цивилизации</div>
                    <div class="nf-book-publisher">Strelka Press</div>
                    <div class="nf-book-stand">
                      <p>Стенд D-3</p><a href="#" data-stand-number="D-3" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Классика современной урбанистики — монументальный труд о том, как меняется представление человека о теле и как это влияет на структуру города, от древних Афин до современного Нью-Йорка.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="dlja_muzeev_net_tabu_50_statej_za_10_let" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                
                 <div id="carousel-dlja_muzeev_net_tabu" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-dlja_muzeev_net_tabu" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-dlja_muzeev_net_tabu" data-slide-to="1"></li>
                    <li data-target="#carousel-dlja_muzeev_net_tabu" data-slide-to="2"></li>
                    <li data-target="#carousel-dlja_muzeev_net_tabu" data-slide-to="3"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/piotrovsky.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/piotrovsky1.png" rel="dlja_muzeev_net_tabu" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/piotrovsky1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/piotrovsky2.png" rel="dlja_muzeev_net_tabu" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/piotrovsky2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/piotrovsky3.png" rel="dlja_muzeev_net_tabu" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/piotrovsky3.png"></a></div>

                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Михаил Пиотровский</div>
                    <div class="nf-book-name">Для музеев нет табу. 50 статей за 10 лет</div>
                    <div class="nf-book-publisher">Арка</div>
                    <div class="nf-book-stand">
                      <p>Стенд J-29</p><a href="#" data-stand-number="J-29" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Книга директора Эрмитажа, название которой говорит само за себя. Особенно актуальна сегодня, когда различные общественные (да и не только общественные) организации склонны вмешиваться в работу музеев и других культурных институтов.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="jeffekt_prisutstvija" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/gerchuk.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Юрий Герчук</div>
                    <div class="nf-book-name">Эффект присутствия</div>
                    <div class="nf-book-publisher">Арт Волхонка</div>
                    <div class="nf-book-stand">
                      <p>Стенд F-1</p><a href="#" data-stand-number="F-1" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Посмертная книга известного искусствоведа и художественного критика Юрия Герчука. Впервые целиком публикуется его работа «Искусство "оттепели"» и другие статьи.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="rjegtajm" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/rost.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Юрий Рост</div>
                    <div class="nf-book-name">Рэгтайм</div>
                    <div class="nf-book-publisher">Бослен</div>
                    <div class="nf-book-stand">
                      <p>Стенд K-18</p><a href="#" data-stand-number="K-18" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Новый альбом воспоминаний и фотографий замечательного российского фотографа Юрия Роста.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="mashina_pesen_vnutri_fabriki_hitov" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-mashina_pesen" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-mashina_pesen" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-mashina_pesen" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/sibruk.png"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/sibruk1.png" rel="mashina_pesen" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/sibruk1.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Джон Сибрук</div>
                    <div class="nf-book-name">Машина песен. Внутри фабрики хитов</div>
                    <div class="nf-book-publisher">Музей современного искусства  «Гараж»</div>
                    <div class="nf-book-stand">
                      <p>Стенд А-10</p><a href="#" data-stand-number="A-10" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Американский культуролог и журналист исследует феномен поп-музыки, ее влияние на современное общество, а также подробно разбирает «анатомию» хита и приходит к интересному выводу — оказывается, при создании песни совсем не важна оригинальность. Изучая историю появления шлягеров, Сибрук подводит нас к другой, не менее поразительной мысли: так было почти всегда.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="brikolazh_rezhissera_balabanova" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/whait.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Фредерик Х. Уайт</div>
                    <div class="nf-book-name">Бриколаж режиссера Балабановa</div>
                    <div class="nf-book-publisher">Деком</div>
                    <div class="nf-book-stand">
                      <p>Стенд Е-7</p><a href="#" data-stand-number="E-7" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Интервью, документы, воспоминания, а&nbsp;также ряд аналитических статей, так или иначе посвященных создателю &laquo;Жмурок&raquo;, &laquo;Брата&raquo; и&nbsp;&laquo;Груза 200&raquo; и&nbsp;его наследию.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="natalija_goncharova" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/lukanova.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Алла Луканова</div>
                    <div class="nf-book-name">Наталия Гончарова</div>
                    <div class="nf-book-publisher">Искусство - XXI век</div>
                    <div class="nf-book-stand">
                      <p>Стенд Е-3</p><a href="#" data-stand-number="E-3" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Биография Наталии Сергеевны Гончаровой, одного из&nbsp;самых ярких и&nbsp;интересных художников&nbsp;ХХ века. Отличаясь универсальностью дарования и&nbsp;невероятным трудолюбием, она с&nbsp;равным успехом работала в&nbsp;станковой и&nbsp;театрально-декорационной живописи, иллюстрировала книги, оформляла интерьеры, создавала эскизы модной одежды&nbsp;&mdash; вот и&nbsp;биограф стремится охватить все.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="sovetskaja_fotografija" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-sovetskaja_fotografija" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-sovetskaja_fotografija" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-sovetskaja_fotografija" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/valran.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/valran1.png" rel="sobranie_sochinenij" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/valran1.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Валерий Вальран</div>
                    <div class="nf-book-name">Советская фотография. 1917-1955</div>
                    <div class="nf-book-publisher">Лимбус Пресс</div>
                    <div class="nf-book-stand">
                      <p>Стенд G-5</p><a href="#" data-stand-number="G-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Книга посвящена истории отечественной фотографии в&nbsp;ее&nbsp;наиболее драматичный период с&nbsp;1917 по&nbsp;1955&nbsp;годы, когда новые школы боролись с&nbsp;традиционными, государство стремилось взять искусство под контроль, репрессируя одних фотографов и&nbsp;поддерживая других в&nbsp;попытке превратить фотографию в&nbsp;орудие политической пропаганды.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="chernyj_istorija_cveta" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-chernyj_istorija_cveta" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-chernyj_istorija_cveta" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-chernyj_istorija_cveta" data-slide-to="1"></li>
                    <li data-target="#carousel-chernyj_istorija_cveta" data-slide-to="2"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/pasturo.png"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/pasturo1.png" rel="chernyj_istorija_cveta" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/pasturo1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/pasturo2.png" rel="chernyj_istorija_cveta" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/pasturo2.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Мишель Пастуро</div>
                    <div class="nf-book-name">Черный. История цвета</div>
                    <div class="nf-book-publisher">Новое литературное обозрение</div>
                    <div class="nf-book-stand">
                      <p>Стенд A-4, G12</p><a href="#" data-stand-number="A-4" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Продолжение масштабного проекта французского историка Мишеля Пастуро — истории цвета в западноевропейских обществах, от Древнего Рима до XVIII века. В этой книге в центре внимания Пастуро один из самых загадочных и противоречивых цветов с весьма непростой судьбой — черный. Автор предпринимает настоящее детективное расследование приключений, а нередко и злоключений черного цвета в западноевропейской культуре.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="istorija_sverdlovskogo_roka" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-istorija_sverdlovskogo_roka" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-istorija_sverdlovskogo_roka" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-istorija_sverdlovskogo_roka" data-slide-to="1"></li>
                    <li data-target="#carousel-istorija_sverdlovskogo_roka" data-slide-to="2"></li>
                    <li data-target="#carousel-istorija_sverdlovskogo_roka" data-slide-to="3"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/karasuk.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/karasuk1.png" rel="istorija_sverdlovskogo_roka" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/karasuk1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/karasuk2.png" rel="istorija_sverdlovskogo_roka" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/karasuk2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/karasuk3.png" rel="istorija_sverdlovskogo_roka" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/contents/karasuk3.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Дмитрий Карасюк</div>
                    <div class="nf-book-name">История Свердловского рока 1961–1991. От «Эльмашевских битлов» до «Смысловых галлюцинаций»</div>
                    <div class="nf-book-publisher">Кабинетный ученый</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Дотошный путеводитель по&nbsp;свердловскому року, немало места в&nbsp;котором отводится выяснению причин возникновения множества групп и&nbsp;особой интонации на&nbsp;Урале.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="ot_bekmana_do_brekera_stati_i_fragmenty" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/chechot.png" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Иван Чечот</div>
                    <div class="nf-book-name">От Бекмана до Брекера. Статьи и фрагменты</div>
                    <div class="nf-book-publisher">Мастерская «Сеанс»</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Сборник статей искусствоведа, сотрудника Европейского университета и&nbsp;Российской академии наук, о&nbsp;западноевропейском искусстве, прежде всего немецком.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="golosa_voobrazhaemogo_muzeja_andre_malro" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/golosa.png" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-name">Голоса воображаемого музея Андре Мальро</div>
                    <div class="nf-book-publisher">Музей изобразительных искусств им. А. С. Пушкина</div>
                    <div class="nf-book-stand">
                      <p>Стенд Е-9</p><a href="#" data-stand-number="E-9" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Каталог выставки, посвященной жизни и&nbsp;творчеству Андре Мальро, которая откроется в&nbsp;ГМИИ им. Пушкина аккурат во&nbsp;время Non/fiction. Далеко не&nbsp;всякий министр культуры удостаивается такой чести, да&nbsp;еще и&nbsp;за&nbsp;пределами своего отечества.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="tekstil_avangarda_risunki_dlja_tkani" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/art/tulovskaya.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Юлия Туловская</div>
                    <div class="nf-book-name">Текстиль авангарда. Рисунки для ткани</div>
                    <div class="nf-book-publisher">TATLIN</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Книга посвящена рисункам для ткани, созданным художниками русского и&nbsp;европейского авангарда&nbsp;&mdash; в&nbsp;середине 1920-х годов ряд выдающихся мастеров России и&nbsp;Европы одновременно обратился к&nbsp;проектированию текстиля, сделав его основной сферой для разработки своих новаторских идей.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--include ../include/footer.jade-->
      </div>
      <div id="nf-section-philosophy" class="nf-books">
        <section id="hozjajstvo_i_obshhestvo_ocherki_ponimajushhej_sociologii_t_i" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-hozjajstvo_i_obshhestvo" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-hozjajstvo_i_obshhestvo" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-hozjajstvo_i_obshhestvo" data-slide-to="1"></li>
                    <li data-target="#carousel-hozjajstvo_i_obshhestvo" data-slide-to="2"></li>
                    <li data-target="#carousel-hozjajstvo_i_obshhestvo" data-slide-to="3"></li>
                    <li data-target="#carousel-hozjajstvo_i_obshhestvo" data-slide-to="4"></li>
                    <li data-target="#carousel-hozjajstvo_i_obshhestvo" data-slide-to="5"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/vaber.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/1_maks-veber1.png" rel="hozjajstvo_i_obshhestvo" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/1_maks-veber1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/1_maks-veber2.png" rel="hozjajstvo_i_obshhestvo" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/1_maks-veber2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/1_maks-veber3.png" rel="hozjajstvo_i_obshhestvo" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/1_maks-veber3.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/1_maks-veber4.png" rel="hozjajstvo_i_obshhestvo" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/1_maks-veber4.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/1_maks-veber5.png" rel="hozjajstvo_i_obshhestvo" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/1_maks-veber5.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Макс Вебер</div>
                    <div class="nf-book-name">Хозяйство и общество: очерки понимающей социологии. Т. I</div>
                    <div class="nf-book-publisher">Высшая Школа Экономики</div>
                    <div class="nf-book-stand">
                      <p>Стенд К-2</p><a href="#" data-stand-number="K-2" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Долгожданный первый том четырехтомного &laquo;Хозяйства и&nbsp;общества&raquo;, одного из&nbsp;важнейших трудов Макса Вебера, включает в&nbsp;себя характеристику основных понятий понимающей социологии, в&nbsp;нем сформулированы принципы экономической социологии и&nbsp;дан краткий очерк социологии господства.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="filosofija_odinochestva" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/svendsen.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Ларс Свендсен</div>
                    <div class="nf-book-name">Философия одиночества</div>
                    <div class="nf-book-publisher">Прогресс-Традиция</div>
                    <div class="nf-book-stand">
                      <p>Стенд Н-20</p><a href="#" data-stand-number="Н-20" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Книги норвежского философа Ларса Свендсена, посвященные разным темам&nbsp;&mdash; философия свободы, скуки, страха и&nbsp;так далее&nbsp;&mdash; выходят на&nbsp;русском регулярно. Новое издание посвящено одиночеству. Свендсен, руководствуясь статистическими данными, анализирует феномен одиночества в&nbsp;современном мире и&nbsp;показывает, как связаны одиночество и&nbsp;доверие, одиночество и&nbsp;дружба, одиночество и&nbsp;любовь, а&nbsp;также пытается понять, где проходит граница между&nbsp;Я и&nbsp;другими людьми.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="o_gosudarstve_kurs_lekcij_v_kollezh_de_frans" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-o_gosudarstve" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-o_gosudarstve" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-o_gosudarstve" data-slide-to="1"></li>
                    <li data-target="#carousel-o_gosudarstve" data-slide-to="2"></li>
                    <li data-target="#carousel-o_gosudarstve" data-slide-to="3"></li>
                    <li data-target="#carousel-o_gosudarstve" data-slide-to="4"></li>
                    <li data-target="#carousel-o_gosudarstve" data-slide-to="5"></li>
                    <li data-target="#carousel-o_gosudarstve" data-slide-to="6"></li>
                    <li data-target="#carousel-o_gosudarstve" data-slide-to="7"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/burdier.png"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/burdier1.png" rel="o_gosudarstve" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/burdier1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/burdier2.png" rel="o_gosudarstve" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/burdier2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/burdier3.png" rel="o_gosudarstve" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/burdier3.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/burdier4.png" rel="o_gosudarstve" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/burdier4.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/burdier5.png" rel="o_gosudarstve" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/burdier5.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/burdier6.png" rel="o_gosudarstve" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/burdier6.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/burdier7.png" rel="o_gosudarstve" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/burdier7.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Пьер Бурдье</div>
                    <div class="nf-book-name">О государстве: курс лекций в Коллеж де Франс (1989–1992)</div>
                    <div class="nf-book-publisher">РАНХиГС Издательский дом «Дело»</div>
                    <div class="nf-book-stand">
                      <p>Стенд К16</p><a href="#" data-stand-number="J-4" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">В&nbsp;этом курсе лекций Пьер Бурдье, для которого вопрос о&nbsp;государстве всегда был центральным, предлагает социологическую теорию генезиса европейского государства. Понятия, введенные в&nbsp;прежних работах&nbsp;&mdash; культурный и&nbsp;символический капитал, символическое насилие, поля и&nbsp;пространства, практические логики,&nbsp;&mdash; получают в&nbsp;этом курсе о&nbsp;государстве новую трактовку.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="mir_sistema_moderna_tom_iv_triumf_centristskogo_liberalizma" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-mir_sistema_moderna" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-mir_sistema_moderna" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-mir_sistema_moderna" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/vallersty.jpeg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/4_vallerstayn.png" rel="mir_sistema_moderna" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/4_vallerstayn.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Иммануил Валлерстайн</div>
                    <div class="nf-book-name">Мир-система Модерна. Том IV. Триумф центристского либерализма, 1789–1914</div>
                    <div class="nf-book-publisher">Русский фонд содействия образованию и науки / Университет Дмитрия Пожарского</div>
                    <div class="nf-book-stand">
                      <p>Стенд Н-2</p><a href="#" data-stand-number="H-2" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Четвертый (и&nbsp;последний из&nbsp;опубликованных, пятый еще пишется) том труда Иммануила Валлерстайна &laquo;Мир-система Модерна&raquo; начинается с&nbsp;Великой Французской революции и&nbsp;заканчивается Первой мировой. Речь в&nbsp;нем идет о&nbsp;становлении либерального государства в&nbsp;странах центра капиталистического мира-экономики, классовых конфликтах в&nbsp;процессе развития либерального государства, истории борьбы за&nbsp;гражданские права и&nbsp;возникновении современных социальных наук.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="tetradi" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-tetradi" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-tetradi" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-tetradi" data-slide-to="1"></li>
                    <li data-target="#carousel-tetradi" data-slide-to="2"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/veil.png"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/5_simona-veyl1.png" rel="tetradi" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/5_simona-veyl1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/5_simona-veyl2.png" rel="tetradi" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/5_simona-veyl2.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Симона Вейль</div>
                    <div class="nf-book-name">Тетради 1933 – 1942. В 2 т.</div>
                    <div class="nf-book-publisher">Ивана Лимбаха</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">В&nbsp;&laquo;Издательстве Ивана Лимбаха&raquo; вышли &laquo;Тетради 1933-1942&raquo; Симоны Вейль&nbsp;&mdash; религиозного философа, прошедшего путь от&nbsp;марксизма и&nbsp;атеизма до&nbsp;христианского аскетизма и&nbsp;мистицизма.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="zhelanie_oderzhimogo_nevroz_navjazchivosti_v_lakanovskoj_teorii" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-zhelanie_oderzhimogo" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-zhelanie_oderzhimogo" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-zhelanie_oderzhimogo" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/6_smulyanskiy.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/6_smulyanskiy.png" rel="zhelanie_oderzhimogo" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/6_smulyanskiy.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Александр Смулянский</div>
                    <div class="nf-book-name">Желание одержимого: невроз навязчивости в лакановской теории</div>
                    <div class="nf-book-publisher">Алетейя</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Александр Смулянский&nbsp;&mdash; философ из&nbsp;Санкт-Петербурга, занимается исследованием и&nbsp;разработкой лакановского психоанализа. Во&nbsp;второй своей книге (первая включала в&nbsp;себя расшифровку семинаров из&nbsp;серии &laquo;Лакан-ликбез&raquo;) он&nbsp;обращается к&nbsp;неврозу навязчивости, который, по&nbsp;мнению автора, является неотъемлемой характеристикой современного субъекта.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="kak_zhit_vmeste" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-kak_zhit_vmeste" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-kak_zhit_vmeste" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-kak_zhit_vmeste" data-slide-to="1"></li>
                    <li data-target="#carousel-kak_zhit_vmeste" data-slide-to="2"></li>
                    <li data-target="#carousel-kak_zhit_vmeste" data-slide-to="3"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/bart.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/7_rolan-bart1.png" rel="kak_zhit_vmeste" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/7_rolan-bart1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/7_rolan-bart2.png" rel="kak_zhit_vmeste" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/7_rolan-bart2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/7_rolan-bart3.png" rel="kak_zhit_vmeste" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/7_rolan-bart3.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Ролан Барт</div>
                    <div class="nf-book-name">Как жить вместе: романические симуляции некоторых пространств повседневности</div>
                    <div class="nf-book-publisher">Издательская программа Музея современного искусства «Гараж» и Ad Marginem</div>
                    <div class="nf-book-stand">
                      <p>Стенд D-1</p><a href="#" data-stand-number="D-1" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">В&nbsp;1977 году Ролан Барт прочел в&nbsp;парижском Коллеж де&nbsp;Франс курс, посвященный теме человеческих отношений&nbsp;&mdash; их&nbsp;различных форм и&nbsp;социальных моделей. Эта книга не&nbsp;похожа на&nbsp;классические работы Барта, она сложнее для восприятия и&nbsp;гораздо более обрывочна, зато позволяет ухватить живую мысль философа.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="summa_ateologii" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-summa_ateologii" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-summa_ateologii" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-summa_ateologii" data-slide-to="1"></li>
                    <li data-target="#carousel-summa_ateologii" data-slide-to="2"></li>
                    <li data-target="#carousel-summa_ateologii" data-slide-to="3"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/8_batay.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/8_batay1.png" rel="summa_ateologii" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/8_batay1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/8_batay2.png" rel="summa_ateologii" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/8_batay2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/8_batay3.png" rel="summa_ateologii" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/philosophy/contents/8_batay3.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Жорж Батай</div>
                    <div class="nf-book-name">Сумма атеологии</div>
                    <div class="nf-book-publisher">Ладомир</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Третий том сочинений французского писателя и&nbsp;философа Жоржа Батая готовился к&nbsp;изданию много лет. В&nbsp;него входят его главные работы по&nbsp;философии и&nbsp;мистике, в&nbsp;основном написанные в&nbsp;годы Второй мировой войны: &laquo;Внутренний опыт&raquo;, &laquo;Виновный&raquo;, а&nbsp;также корпус текстов, посвященных Ницше.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--include ../include/footer.jade-->
      </div>
      <div id="nf-section-nauchpop" class="nf-books">
        <section id="nasha_matematicheskaja_vselennaja" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/tagmark.png" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Макс Тегмарк</div>
                    <div class="nf-book-name">Наша математическая вселенная</div>
                    <div class="nf-book-publisher">Corpus</div>
                    <div class="nf-book-stand">
                      <p>Стенд С-5</p><a href="#" data-stand-number="C-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Космолог и&nbsp;профессор Массачусетского технологического института Макс Тегмарк о&nbsp;математических основах физической действительности; в&nbsp;работе исследуется как микрокосм субатомных частиц, так и&nbsp;макрокосм Вселенной. По&nbsp;словам обозревателя New Scientist, это &laquo;прекрасное руководство по&nbsp;новейшей квантовой космологии и&nbsp;продолжающемуся спору о&nbsp;параллельных вселенных&raquo;.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="money_neoficialnaja_biografija_deneg" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-money" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-money" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-money" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/martin.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/contents/martin.png" rel="money" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/contents/martin.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Феликс Мартин</div>
                    <div class="nf-book-name">Money. Неофициальная биография денег</div>
                    <div class="nf-book-publisher">Синдбад</div>
                    <div class="nf-book-stand">
                      <p>Стенд J-10</p><a href="#" data-stand-number="J-10" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">История денег от&nbsp;первых монет до&nbsp;криптовалют. Автор знаком с&nbsp;предметом исследования не&nbsp;понаслышке&nbsp;&mdash; макроэкономист по&nbsp;специальности, он&nbsp;десять лет проработал во&nbsp;Всемирном банке. В&nbsp;своей работе Мартин аргументирует, что конвенциональные представления о&nbsp;деньгах ошибочны, из-за чего страны не&nbsp;могут проводить такую политику, которая помогла&nbsp;бы избежать долговых кризисов. Мартин формулирует альтернативное понимание феномена денег и&nbsp;пытается спрогнозировать будущее капитализма.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="pochemu_my_do_sih_por_zhivy" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/ben_barak.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Айдан Бен-Барак</div>
                    <div class="nf-book-name">Почему мы до сих пор живы? Путеводитель по иммунной системе</div>
                    <div class="nf-book-publisher">Ламартис</div>
                    <div class="nf-book-stand">
                      <p>Стенд Е-2</p><a href="#" data-stand-number="E-2" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Человека повсюду подстерегает несметное множество невидимых глазу бактерий и&nbsp;вирусов, норовящих проникнуть внутрь нашего организма. Многие из&nbsp;них&nbsp;&mdash; возбудители опасных и&nbsp;тяжких болезней. Бен-Барак объясняет, как иммунная система противостоит нашествию инфекций, что такое вакцины, как бороться с&nbsp;аллергией и&nbsp;что придет на&nbsp;смену антибиотикам.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="nikolaj_morozov_mistifikacija_dlinoju_v_vek" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-nikolaj_morozov" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-nikolaj_morozov" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-nikolaj_morozov" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/shikman.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/contents/shikman.png" rel="nikolaj_morozov" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/contents/shikman.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Анатолий Шикман</div>
                    <div class="nf-book-name">Николай Морозов. Мистификация длиною в век</div>
                    <div class="nf-book-publisher">Весь мир</div>
                    <div class="nf-book-stand">
                      <p>Стенд К-12</p><a href="#" data-stand-number="K-12" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Герой книги историка и литератора А.П. Шикмана – народоволец Николай Морозов (1854–1946), 23 года отсидевший в Шлиссельбургской крепости за участие в покушении на Александра II. Биография посвящена в основном о другому, менее трагичному периоде жизни «вечного узника». Морозов опубликовал бессчетное число работ с претензиями на открытия в самых разных отраслях знания, от математики до истории и библеистики. Он был популярен и востребован властью.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="dostatochno_li_my_umny_chtoby_sudit_ob_ume_zhivotnyh" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-dostatochno_li_my_umny" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-dostatochno_li_my_umny" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-dostatochno_li_my_umny" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/frans_de_vaal.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/contents/frans_de_vaal.png" rel="dostatochno_li_my_umny" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/contents/frans_de_vaal.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Франс де Вааль</div>
                    <div class="nf-book-name">Достаточно ли мы умны, чтобы судить об уме животных?</div>
                    <div class="nf-book-publisher">Альпина нон-фикшен</div>
                    <div class="nf-book-stand">
                      <p>Стенд А-6</p><a href="#" data-stand-number="A-6" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">В&nbsp;течение большей части прошедшего столетия наука была чрезмерно осторожна и&nbsp;скептична в&nbsp;отношении интеллекта животных. Исследователи поведения животных либо не&nbsp;задумывались об&nbsp;их&nbsp;интеллекте, либо отвергали само это понятие. Сейчас не&nbsp;проходит и&nbsp;недели, как появляются новые сообщения о&nbsp;сложности познавательных процессов у&nbsp;животных. Де&nbsp;Вааль рассказывает об&nbsp;истории изучения звериного сознания, о&nbsp;многочисленных экспериментах и&nbsp;наблюдениях за&nbsp;животными и&nbsp;их&nbsp;мыслительными процессами.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="zahvatchiki_ljudi_i_sobaki_protiv_neandertalcev" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-zahvatchiki" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-zahvatchiki" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-zahvatchiki" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/shipman.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/contents/shipman.png" rel="zahvatchiki" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/contents/shipman.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Пэт Шипман</div>
                    <div class="nf-book-name">Захватчики: Люди и собаки против неандертальцев</div>
                    <div class="nf-book-publisher">Альпина нон-фикшен</div>
                    <div class="nf-book-stand">
                      <p>Стенд А-6</p><a href="#" data-stand-number="A-6" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">В&nbsp;книге выдвигается несколько предположений, почему Homo sapiens, а&nbsp;не&nbsp;неандертальцы покорили мир. У&nbsp;наших предков были мощные союзники, а&nbsp;сейчас их&nbsp;потомки&nbsp;&mdash; наши самые верные друзья. Неандертальцам&nbsp;же удача не&nbsp;улыбнулась&nbsp;&mdash; они не&nbsp;смогли одомашнить собак.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="zaraza_kak_infekcii_peredajushhiesja_ot_zhivotnyh_mogut_privesti_k_smertelnoj_globalnoj_jepidemii" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-zaraza" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-zaraza" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-zaraza" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/kuammen.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/contents/kuammen.jpg" rel="zaraza" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/contents/kuammen.jpg"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Дэвид Куаммен</div>
                    <div class="nf-book-name">Зараза. Как инфекции, передающиеся от животных, могут привести к смертельной глобальной эпидемии</div>
                    <div class="nf-book-publisher">АСТ</div>
                    <div class="nf-book-stand">
                      <p>Стенд С-5</p><a href="#" data-stand-number="C-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Несмотря на&nbsp;все успехи современной медицины, человечество под угрозой глобальной смертельной эпидемии. И&nbsp;хотя медицина справиляется со&nbsp;многими болезнями, некогда уносившими миллионы жизней, на&nbsp;смену им&nbsp;приходят новые, и&nbsp;самые опасные из&nbsp;них передаются человеку от&nbsp;животных. Автор описывает, какие смертельные инфекции угрожают существованию человечества.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="o_nekotoryh_mifah_v_psihologii_deti_volki_govorjashhie_obezjany_i_fantomnye_dvojniki" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-o_nekotoryh_mifah" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-o_nekotoryh_mifah" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-o_nekotoryh_mifah" data-slide-to="1"></li>
                    <li data-target="#carousel-o_nekotoryh_mifah" data-slide-to="2"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/suzuki.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/contents/suzuki_1.png" rel="o_nekotoryh_mifah" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/contents/suzuki_1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/contents/suzuki_2.png" rel="o_nekotoryh_mifah" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/nauchpop/contents/suzuki_2.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Катаро Сузуки, Жак Воклер</div>
                    <div class="nf-book-name">О некоторых мифах в психологии: Дети-волки, говорящие обезьяны и фантомные двойники</div>
                    <div class="nf-book-publisher">Кучково поле</div>
                    <div class="nf-book-stand">
                      <p>Стенд F-8</p><a href="#" data-stand-number="F-8" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Авторы развенчивают укрепившиеся мифы из&nbsp;истории психологии и&nbsp;предлагают анализ явлений, до&nbsp;недавнего времени считавшихся научными: индийских детей-волков, эффективности сублиминальной рекламы, наследуемости интеллекта и&nbsp;других мифов.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--include ../include/footer.jade-->
      </div>
      <div id="nf-section-literary" class="nf-books">
        <section id="nabokov_v_amerike_po_doroge_k_lolite" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/rouper.png" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Роберт Роупер</div>
                    <div class="nf-book-name">Набоков в Америке. По дороге к Лолите</div>
                    <div class="nf-book-publisher">Corpus</div>
                    <div class="nf-book-stand">
                      <p>Стенд С-5</p><a href="#" data-stand-number="C-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Книга посвящена жизни Набокова в&nbsp;Америке с&nbsp;1940 по&nbsp;1958&nbsp;год: он&nbsp;преподавал в&nbsp;университетах, профессионально занимался энтомологией, написал&nbsp;&mdash; уже по-английски&nbsp;&mdash; несколько романов, в&nbsp;том числе &laquo;Лолиту&raquo;, принесшую ему мировую известность. Кроме того, это рассказ об&nbsp;Америке того периода, о&nbsp;том, какой Набоков увидел страну и&nbsp;как описывал ее&nbsp;в&nbsp;своих произведениях.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="mnimoe_sirotstvo_hlebnikov_i_harms_v_kontekste_russkogo_i_evropejskogo_modernizma" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-mnimoe_sirotstvo" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-mnimoe_sirotstvo" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-mnimoe_sirotstvo" data-slide-to="1"></li>
                    <li data-target="#carousel-mnimoe_sirotstvo" data-slide-to="2"></li>
                    <li data-target="#carousel-mnimoe_sirotstvo" data-slide-to="3"></li>
                    <li data-target="#carousel-mnimoe_sirotstvo" data-slide-to="4"></li>
                    <li data-target="#carousel-mnimoe_sirotstvo" data-slide-to="5"></li>
                    <li data-target="#carousel-mnimoe_sirotstvo" data-slide-to="6"></li>
                    <li data-target="#carousel-mnimoe_sirotstvo" data-slide-to="7"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/2_mnimoe-sirotstvo.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/2_mnimoe-sirotstvo_fragment-1.jpg" rel="mnimoe_sirotstvo" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/2_mnimoe-sirotstvo_fragment-1.jpg"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/2_mnimoe-sirotstvo_fragment-2.jpg" rel="mnimoe_sirotstvo" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/2_mnimoe-sirotstvo_fragment-2.jpg"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/2_mnimoe-sirotstvo_fragment-3.jpg" rel="mnimoe_sirotstvo" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/2_mnimoe-sirotstvo_fragment-3.jpg"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/2_mnimoe-sirotstvo_fragment-4.jpg" rel="mnimoe_sirotstvo" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/2_mnimoe-sirotstvo_fragment-4.jpg"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/2_mnimoe-sirotstvo_fragment-5.jpg" rel="mnimoe_sirotstvo" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/2_mnimoe-sirotstvo_fragment-5.jpg"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/2_mnimoe-sirotstvo_fragment-6.jpg" rel="mnimoe_sirotstvo" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/2_mnimoe-sirotstvo_fragment-6.jpg"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/2_mnimoe-sirotstvo_fragment-7.jpg" rel="mnimoe_sirotstvo" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/2_mnimoe-sirotstvo_fragment-7.jpg"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Лада Панова</div>
                    <div class="nf-book-name">Мнимое сиротство: Хлебников и Хармс в контексте русского и европейского модернизма</div>
                    <div class="nf-book-publisher">Высшая школа экономики</div>
                    <div class="nf-book-stand">
                      <p>Стенд К-2</p><a href="#" data-stand-number="K-2" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Лада Панова&nbsp;&mdash; литературовед и&nbsp;лингвист. Ее&nbsp;книга о&nbsp;Хлебникове и&nbsp;Хармсе&nbsp;&mdash; попытка подвергнуть художественные произведения, манифесты и&nbsp;жизнетворческие практики первого авангарда непредвзятому рассмотрению, независимому как от&nbsp;культа авангарда, так и&nbsp;от&nbsp;сложившейся за&nbsp;столетие инерции его восприятия.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="gomer_iliada_troja" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-gomer_iliada_troja" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-gomer_iliada_troja" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-gomer_iliada_troja" data-slide-to="1"></li>
                    <li data-target="#carousel-gomer_iliada_troja" data-slide-to="2"></li>
                    <li data-target="#carousel-gomer_iliada_troja" data-slide-to="3"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/panchenko.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/panchenko1.png" rel="gomer_iliada_troja" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/panchenko1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/panchenko2.png" rel="gomer_iliada_troja" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/panchenko2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/panchenko3.png" rel="gomer_iliada_troja" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/panchenko3.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Дмитрий Панченко</div>
                    <div class="nf-book-name">Гомер, Илиада, Троя</div>
                    <div class="nf-book-publisher">Европейский университет в Санкт-Петербурге</div>
                    <div class="nf-book-stand">
                      <p>Стенд J-21</p><a href="#" data-stand-number="J-21" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Каким образом вместо очередного повествования о&nbsp;могучих получудесных героях &laquo;Илиада&raquo; оказалась поэмой о&nbsp;товариществе, великодушии и&nbsp;сострадании? Какое сочетание исторических и&nbsp;биографических обстоятельств вызвало к&nbsp;жизни произведение столь исключительной художественной силы? Что позволило соединить мифологическую традицию о&nbsp;похищении Елены Парисом Троянским с&nbsp;отголосками подлинных исторических событий? На&nbsp;эти и&nbsp;другие вопросы отвечает предлагаемая вниманию читателя книга.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="bedlam_kak_vifleem_besedy_ljubitelej_russkogo_slova" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-bedlam_kak_vifleem" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-bedlam_kak_vifleem" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-bedlam_kak_vifleem" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/4_bedlam.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/bedlam1.png" rel="bedlam_kak_vifleem" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/bedlam1.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Борис Парамонов, Иван Толстой</div>
                    <div class="nf-book-name">Бедлам как Вифлеем. Беседы любителей русского слова</div>
                    <div class="nf-book-publisher">РАНХиГС Издательский дом «Дело»</div>
                    <div class="nf-book-stand">
                      <p>Стенд К-16</p><a href="#" data-stand-number="К-16" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Предмет литературно-философских бесед Бориса Парамонова и&nbsp;Ивана Толстого&nbsp;&mdash; русская литература, которую соавторы рассматривают в&nbsp;&laquo;персональных&raquo; главах. Хронологический диапазон&nbsp;&mdash; ХХ&nbsp;столетие, но&nbsp;с&nbsp;запасом: от&nbsp;Владимира Соловьева до&nbsp;Александра Солженицына. Жанровый принцип&nbsp;&mdash; разбор литературной фигуры, взятой целиком, в&nbsp;завершенности своего мифа. Собеседников интересуют концептуальные, психологические и&nbsp;стилистические вопросы творчества, причем их&nbsp;суждения меньше всего носят академический характер.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="formalnyj_metod_antologija_russkogo_modernizma_v_3_t" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-formalnyj_metod" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-formalnyj_metod" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-formalnyj_metod" data-slide-to="1"></li>
                    <li data-target="#carousel-formalnyj_metod" data-slide-to="2"></li>
                    <li data-target="#carousel-formalnyj_metod" data-slide-to="3"></li>
                    <li data-target="#carousel-formalnyj_metod" data-slide-to="4"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/5_formal_1.jpg"></div>
                    <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/5_formal_2.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/5_formalnyy-metod-1.png" rel="formalnyj_metod" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/5_formalnyy-metod-1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/5_formalnyy-metod-2.png" rel="formalnyj_metod" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/5_formalnyy-metod-2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/5_formalnyy-metod-3.png" rel="formalnyj_metod" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/5_formalnyy-metod-3.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-name">Формальный метод: антология русского модернизма. В 3 т.</div>
                    <div class="nf-book-publisher">Кабинетный ученый</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Трехтомная антология текстов русских формалистов, конструктивистов и&nbsp;авангардистов содержит важнейшие теоретические труды художников, поэтов, архитекторов и&nbsp;литературоведов первой трети XX&nbsp;века.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="sergej_dovlatov_v_fotografijah_i_vospominanijah_niny_alovert" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/dovlatov.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-name">Сергей Довлатов в фотографиях и воспоминаниях Нины Аловерт</div>
                    <div class="nf-book-publisher">Владивосток, ООО «Полиграф-сервис-Плюс»</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Уникальный альбом, содержащий почти 200 фотографий Сергея Довлатова и&nbsp;его круга, которые были сделаны с&nbsp;1979 по&nbsp;1987&nbsp;год.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="lev_tolstoj_svobodnyj_chelovek" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/7_basinsky.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Павел Басинский</div>
                    <div class="nf-book-name">Лев Толстой - свободный человек</div>
                    <div class="nf-book-publisher">Молодая гвардия</div>
                    <div class="nf-book-stand">
                      <p>Стенд H-14</p><a href="#" data-stand-number="H-14" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Павел Басинский изучает Льва Толстого уже давно и&nbsp;в&nbsp;этой книге подводит итог своим исследованиям. Он&nbsp;ищет ответы на&nbsp;многие вопросы, которые остаются как&nbsp;бы в&nbsp;тени огромной фигуры Толстого, однако именно они дают новые ключи к&nbsp;пониманию жизни и&nbsp;творчества Льва Николаевича.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="apokalipsis_v_bytu_pojetika_neostranenija_u_andreja_platonova" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-apokalipsis_v_bytu" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-apokalipsis_v_bytu" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-apokalipsis_v_bytu" data-slide-to="1"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/8_meerson.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/8_meerson-apokalipsis-v-bytu-oglavlenie.png" rel="apokalipsis_v_bytu" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/contents/8_meerson-apokalipsis-v-bytu-oglavlenie.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Ольга Меерсон</div>
                    <div class="nf-book-name">Апокалипсис в быту. Поэтика неостранения у Андрея Платонова</div>
                    <div class="nf-book-publisher">Гранат</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Книга посвящена анализу роли представлений о&nbsp;конце света в&nbsp;мире героев Платонова, с&nbsp;которыми в&nbsp;его творчестве связан метод неостранения.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="territorija_knigoedstva" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/9_etoev.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Александр Етоев</div>
                    <div class="nf-book-name">Территория книгоедства</div>
                    <div class="nf-book-publisher">Лимбус Пресс</div>
                    <div class="nf-book-stand">
                      <p>Стенд G-5</p><a href="#" data-stand-number="G-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Ранее писатель Александр Етоев посвятил &laquo;книгоедству&raquo; две книги&nbsp;&mdash; &laquo;Книгоедство&raquo; и&nbsp;&laquo;Экстремальное книгоедство&raquo;, и&nbsp;вот теперь вышла третья, в&nbsp;которой автор продолжает пропагандировать вдумчивое чтение.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="razvitie_russkoj_literatury_panorama" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/literary/10_palievsky.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Петр Палиевский</div>
                    <div class="nf-book-name">Развитие русской литературы XIX - начала XX в.: Панорама</div>
                    <div class="nf-book-publisher">Росток</div>
                    <div class="nf-book-stand">
                      <p>Стенд Н-18</p><a href="#" data-stand-number="H-18" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Петр Палиевский представляет русскую литературу XIX&nbsp;&mdash; начала&nbsp;ХХ века (в&nbsp;самых значительных ее&nbsp;произведениях) как некоторый генеральный путь, объединенный одной идеей. Мнение более чем спорное, но&nbsp;от&nbsp;этого не&nbsp;менее интересное.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--include ../include/footer.jade-->
      </div>
      <div id="nf-section-1917" class="nf-books">
        <section id="poslednij_otchet_o_dejatelnosti_sibirskoj_flotilii" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/stark.png" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Юрий Старк</div>
                    <div class="nf-book-name">Последний. Отчет о деятельности Сибирской флотилии 1920–1924</div>
                    <div class="nf-book-publisher">Блиц</div>
                    <div class="nf-book-stand">
                      <p>Стенд К-1</p><a href="#" data-stand-number="K-1" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">В&nbsp;основу книги положен &laquo;Отчет о&nbsp;деятельности Сибирской флотилии&raquo;, написанный в&nbsp;1920-1924 годах контр-адмиралом Ю.К. Старком. Уникальные мемуары командующего Сибирской флотилией Белой армии адмирала Старка открывают многие неизвестные ранее страницы истории гражданской войны.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="neostanovlennaja_revoljucija_1917_100_let_v_sta_fragmentah" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div id="carousel-neostanovlennaja_revoljucija" data-ride="carousel" class="nf-carousel carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-neostanovlennaja_revoljucija" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-neostanovlennaja_revoljucija" data-slide-to="1"></li>
                    <li data-target="#carousel-neostanovlennaja_revoljucija" data-slide-to="2"></li>
                    <li data-target="#carousel-neostanovlennaja_revoljucija" data-slide-to="3"></li>
                    <li data-target="#carousel-neostanovlennaja_revoljucija" data-slide-to="4"></li>
                    <li data-target="#carousel-neostanovlennaja_revoljucija" data-slide-to="5"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="item active"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/gefter.jpg"></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/contents/gefter1.png" rel="neostanovlennaja_revoljucija" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/contents/gefter1.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/contents/gefter2.png" rel="neostanovlennaja_revoljucija" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/contents/gefter2.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/contents/gefter3.png" rel="neostanovlennaja_revoljucija" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/contents/gefter3.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/contents/gefter4.png" rel="neostanovlennaja_revoljucija" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/contents/gefter4.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/contents/gefter5.png" rel="neostanovlennaja_revoljucija" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/contents/gefter5.png"></a></div>
                    <div class="item"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/contents/gefter6.png" rel="neostanovlennaja_revoljucija" class="contents"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/contents/gefter6.png"></a></div>
                  </div>
                </div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Михаил Гефтер, Глеб Павловский</div>
                    <div class="nf-book-name">Неостановленная Революция 1917. 100 лет в ста фрагментах</div>
                    <div class="nf-book-publisher">Европа</div>
                    <div class="nf-book-stand">
                      <p>Стенд Н-10</p><a href="#" data-stand-number="H-10" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Книга бесед Глеба Павловского с&nbsp;историком и&nbsp;философом Михаилом Гефтером (1918&ndash;1995), посвященная политике и&nbsp;метафизике Революции 1917&nbsp;года.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="oktjabr_istorija_odnoj_revoljucii" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/oktober.png" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-name">Октябрь. История одной революции</div>
                    <div class="nf-book-publisher">Common place</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">В&nbsp;этой книге вы&nbsp;найдете хронику событий последних месяцев 1917 года в&nbsp;Петрограде, основанную на&nbsp;дневниках и&nbsp;мемуарах участников и&nbsp;очевидцев Октябрьской революции.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="rubikon_1917_1918_publicistika" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/potresov.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Александр Потресов</div>
                    <div class="nf-book-name">Рубикон. 1917-1918. Публицистика</div>
                    <div class="nf-book-publisher">РОССПЭН</div>
                    <div class="nf-book-stand">
                      <p>Стенд F-11</p><a href="#" data-stand-number="F-11" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">В&nbsp;книгу вошли статьи социал-демократа, выдающегося теоретика марксизма, Александра Потресова, написанные в&nbsp;1917-1918&nbsp;годах. Потресов не&nbsp;принял октябрьскую революцию категорически, а&nbsp;в&nbsp;1918 году даже перешел на&nbsp;нелегальное положение. Эта книга&nbsp;&mdash; важнейший пример критики большевиков слева.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="russkaja_revoljucija" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/1917/bublikov.png" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Бубликов А. А. </div>
                    <div class="nf-book-name">Русская революция. Впечатления  и мысли очевидца и участника. 1917-1918</div>
                    <div class="nf-book-publisher">Кучково поле</div>
                    <div class="nf-book-stand">
                      <p>Стенд F-8</p><a href="#" data-stand-number="F-8" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Воспоминания депутата Государственной думы, комиссара железнодорожного транспорта Временного правительства А.&nbsp;А.&nbsp;Бубликова (1875&ndash;1941), посвященные периоду от&nbsp;Февральской революции 1917 года и&nbsp;до&nbsp;заключения большевиками Брест-Литовского сепаратного мира.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--include ../include/footer.jade-->
      </div>
      <div id="nf-section-reissues" class="nf-books">
        <section id="dolg" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/reissues/1_greber-dolg.png" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Дэвид Гребер</div>
                    <div class="nf-book-name">Долг</div>
                    <div class="nf-book-publisher">Ad Marginem</div>
                    <div class="nf-book-stand">
                      <p>Стенд D-1</p><a href="#" data-stand-number="D-1" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Масштабное и революционное исследование истории товарно-денежных отношений с древнейших времен до наших дней, предпринятое американским антропологом, профессором Лондонской школы экономики. Гребер, опираясь на антропологические методы, выдвигает тезис, что в основе того, что мы традиционно называем экономикой, лежит категория долга, которая на разных этапах развития общества может принимать формы денег, бартера, залогов, кредитов, акций и так далее.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="bolshie_cikly_konjunktury_i_teorija_predvidenija_izbrannye_trudy" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/reissues/2_kondratev.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Николай Кондратьев</div>
                    <div class="nf-book-name">Большие циклы конъюнктуры и теория предвидения: Избранные труды</div>
                    <div class="nf-book-publisher">Академический проект</div>
                    <div class="nf-book-stand">
                      <p>Стенд F-3</p><a href="#" data-stand-number="F-3" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Классическое исследования советского экономиста Кондратьева, посвященное длинным экономическим циклам продолжительностью около полувека. Ученый получил всемирное признание и&nbsp;на&nbsp;его теории опираются до&nbsp;сих пор&nbsp;&mdash; в&nbsp;частности, кондратьевские циклы лежат в&nbsp;основе аргументации журналиста Пола Мейсона в&nbsp;его книге &laquo;Посткапитализм&raquo;.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="kultura_dva" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/reissues/3_papernyy-kultura-dva.jpeg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Владимир Паперный</div>
                    <div class="nf-book-name">Культура Два</div>
                    <div class="nf-book-publisher">Новое литературное обозрение</div>
                    <div class="nf-book-stand">
                      <p>Стенд A-4, G12</p><a href="#" data-stand-number="A-4" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">В ставшей бестселлером работе Владимира Паперного, название которой давно стало в искусствознании общеупотребительным понятием, на примере сталинской архитектуры и скульптуры исследуются смысловые и стилевые особенности тоталитарной культуры.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="iskusstvo_rassuzhdat_o_knigah_kotoryh_vy_ne_chitali" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/reissues/4_bayyar-iskusstvo-rassuzhdat.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Пьер Байяр</div>
                    <div class="nf-book-name">Искусство рассуждать о книгах, которых вы не читали</div>
                    <div class="nf-book-publisher">Текст</div>
                    <div class="nf-book-stand">
                      <p>Стенд G-1</p><a href="#" data-stand-number="G-1" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Книга французского профессора литературы о&nbsp;том, что мы&nbsp;совершенно спокойно можем говорить о&nbsp;книгах, которые никогда не&nbsp;читали и&nbsp;не&nbsp;прочтем. Автор призывает не&nbsp;стыдиться тех, кто не&nbsp;прочел великие классические произведения&nbsp;&mdash; например, Илиаду или &laquo;Улисса&raquo;&nbsp;&mdash; потому что на&nbsp;самом деле тех, кто их&nbsp;прочел целиком, единицы. По&nbsp;словам Байяра, с&nbsp;этой книгой читатели &laquo;могут побороть чувство вины без помощи психоаналитика, а&nbsp;это куда дешевле&raquo;.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="dnevnik" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/reissues/5_prokofev-dnevniki.png" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Сергей Прокофьев</div>
                    <div class="nf-book-name">Дневник. 1907–1933. В 3-х томах</div>
                    <div class="nf-book-publisher">Издательский дом «Классика-XXI»</div>
                    <div class="nf-book-stand">
                      <p>Стенд Независимого альянса 5 зал</p><a href="#" data-stand-number="SNA-5" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Дневник Прокофьева — уникальное произведение, которое имеет полное право получить свой номер опуса в его каталоге. Прокофьев жил в эпоху, богатую значительными событиями в истории России и всего мира; время бурного развития культуры, значительных событий. Люди, с которыми сводила его судьба с самого детства, в свою очередь были неординарны и оставили свой след на Земле.
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="pod_senju_dev_uvenchannyh_cvetami" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/reissues/6_prust-marsel-pod-senyu-drev.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Марсель Пруст</div>
                    <div class="nf-book-name">Под сенью дев, увенчанных цветами</div>
                    <div class="nf-book-publisher">Азбука-Аттикус</div>
                    <div class="nf-book-stand">
                      <p>Стенд C-3</p><a href="#" data-stand-number="C-3" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Второй том цикла в новом переводе Елены Баевской.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="o_psihologicheskoj_proze_o_literaturnom_geroe" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/reissues/7_ginzburg-o-psihologicheskoy-proze.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Лидия Гинзбург</div>
                    <div class="nf-book-name">О психологической прозе. О литературном герое</div>
                    <div class="nf-book-publisher">Азбука-Аттикус</div>
                    <div class="nf-book-stand">
                      <p>Стенд С-3</p><a href="#" data-stand-number="C-3" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Под одной обложкой вышли две классические книги Лидии Яковлевны Гинзбург: об&nbsp;образах литературного героя и&nbsp;приемах передачи мыслей и&nbsp;чувств в&nbsp;художественной литературе.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="istorija_chastnoj_zhizni_t_1_ot_rimskoj_imperii_do_nachala_vtorogo_tysjacheletija" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/reissues/8_istoriya-odnoy-zhizni.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-name">История частной жизни. Т. 1: От Римской империи до начала второго тысячелетия</div>
                    <div class="nf-book-publisher">Новое литературное обозрение</div>
                    <div class="nf-book-stand">
                      <p>Стенд A-4, G12</p><a href="#" data-stand-number="A-4" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Первый том монументальной истории частной жизни под общей редакцией Арьеса и&nbsp;Дюби вышел первый раз по-русски совсем недавно, но&nbsp;очень быстро был раскуплен. Среди авторов такие знаменитые антиковеды, как Поль Вейн и&nbsp;Питер Браун. В&nbsp;этом году был опубликован уже третий том, весь&nbsp;же пятитомник охватывает историю Запада от&nbsp;Античности до&nbsp;конца XX&nbsp;века.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="voobrazhaemoe_soobshhestvo_razmyshlenie_ob_istokah_i_rasprostranenii_nacionalizma" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/reissues/9_anderson-benedikt-voobrazhaemye-soobshestva.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Бенедикт Андерсон</div>
                    <div class="nf-book-name">Воображаемые сообщества: размышление об истоках и распространении национализма</div>
                    <div class="nf-book-publisher">Кучково поле</div>
                    <div class="nf-book-stand">
                      <p>Стенд F-8</p><a href="#" data-stand-number="F-8" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">Переиздание книги сейчас очень важно для российского общества. Андерсон научил европейских интеллектуалов по новому трактовать понятие национализм и нация.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-arrow-bottom-big scroll-bottom-js">
            <svg width="68px" height="35px" viewBox="616 397 68 35">
              <path d="M678.2532,397.9552 C680.0672,400.6282 681.4782,402.7052 683.2072,405.2522 C678.3092,409.4232 673.6162,413.4532 668.8862,417.4402 C663.8972,421.6452 658.8542,425.7852 653.8742,430.0002 C651.5852,431.9362 649.2022,432.0892 646.9352,430.2492 C637.2452,422.3832 627.6182,414.4392 617.9822,406.5072 C617.5672,406.1662 617.2852,405.6652 616.7002,404.9382 C618.2282,402.7542 619.7342,400.6002 621.6582,397.8502 C631.2982,404.9982 640.5702,411.8742 650.2022,419.0172 C659.4702,412.0592 668.6032,405.2012 678.2532,397.9552" id="arrow_bottom" stroke="none" fill="#E1C88D" fill-rule="evenodd"></path>
            </svg>
          </div>
        </section>
        <section id="orientalizm_zapadnaja_koncepcija_vostoka" class="nf-section fp-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-5">
                <div class="nf-book_col text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nf-books/reissues/10_said-orientalizm.jpg" class="nf-book-cover"></div>
                <div class="icon-arrow-right scroll-right-js"></div>
              </div>
              <div class="col-sm-6 col-md-7">
                <div class="icon-arrow-left scroll-left-js"></div>
                <div class="nf-book_col">
                  <div class="nf-book_info">
                    <div class="nf-book-author">Эдвард В. Саид</div>
                    <div class="nf-book-name">Ориентализм: Западная концепция Востока</div>
                    <div class="nf-book-publisher">Русский Мiръ</div>
                    <div class="nf-book-stand">
                      <p>Стенд D-2</p><a href="#" data-stand-number="D-3" class="btn-blue show-map-js"><i class="icon-map"></i>Показать на карте</a>
                    </div>
                    <div class="nf-book-des">«Ориентализм» относится к хорошо известным, прочитанным, вошедшим в научный оборот, одним словом «классическим» книгам. Саид в 80-е года ХХ века писал о ложных западных представлении о Востоке. Представления тем не менее не изменились. С каждым взрывом смертника на Западе книга становится все более актуальной.</div>
                    <div class="nf-book-share">
                      <div class="article-share">
                        <div class="shareBlock-list"><a data-type="vkontakte" class="shareBlock-link share-nf-book-js"><span class="icon-vk-xs"></span></a><a data-type="facebook" class="shareBlock-link share-nf-book-js"><span class="icon-fb-xs"></span></a><a data-type="twitter" class="shareBlock-link share-nf-book-js"><span class="icon-tw-xs"></span></a><a data-type="telegram" class="shareBlock-link share-nf-book-js"><span class="icon-telegram-xs"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--include ../include/footer.jade-->
      </div>
      <div id="nf-section-map" class="nf-books">
        <section class="nf-section fp-section">
          <div class="container">
            <div class="text-center">
<!--
              <div class="form-group">
                <div class="input-group nf-search"><span class="nf-search-span">Поиск по выставке:</span>
                  <input type="text" placeholder="Поиск" class="nf-search-input form-control">
                </div>
              </div>
-->
              <div class="nf-help-info">Для получения информации - наведите курсор на стенд</div>
              <div data-floor="nf-floor_2" id="nf-floor_2" class="nf-floor">
                 <div class="preloader"><svg width='120px' height='120px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-ring"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><defs><filter id="uil-ring-shadow" x="-100%" y="-100%" width="300%" height="300%"><feOffset result="offOut" in="SourceGraphic" dx="0" dy="0"></feOffset><feGaussianBlur result="blurOut" in="offOut" stdDeviation="0"></feGaussianBlur><feBlend in="SourceGraphic" in2="blurOut" mode="normal"></feBlend></filter></defs><path d="M10,50c0,0,0,0.5,0.1,1.4c0,0.5,0.1,1,0.2,1.7c0,0.3,0.1,0.7,0.1,1.1c0.1,0.4,0.1,0.8,0.2,1.2c0.2,0.8,0.3,1.8,0.5,2.8 c0.3,1,0.6,2.1,0.9,3.2c0.3,1.1,0.9,2.3,1.4,3.5c0.5,1.2,1.2,2.4,1.8,3.7c0.3,0.6,0.8,1.2,1.2,1.9c0.4,0.6,0.8,1.3,1.3,1.9 c1,1.2,1.9,2.6,3.1,3.7c2.2,2.5,5,4.7,7.9,6.7c3,2,6.5,3.4,10.1,4.6c3.6,1.1,7.5,1.5,11.2,1.6c4-0.1,7.7-0.6,11.3-1.6 c3.6-1.2,7-2.6,10-4.6c3-2,5.8-4.2,7.9-6.7c1.2-1.2,2.1-2.5,3.1-3.7c0.5-0.6,0.9-1.3,1.3-1.9c0.4-0.6,0.8-1.3,1.2-1.9 c0.6-1.3,1.3-2.5,1.8-3.7c0.5-1.2,1-2.4,1.4-3.5c0.3-1.1,0.6-2.2,0.9-3.2c0.2-1,0.4-1.9,0.5-2.8c0.1-0.4,0.1-0.8,0.2-1.2 c0-0.4,0.1-0.7,0.1-1.1c0.1-0.7,0.1-1.2,0.2-1.7C90,50.5,90,50,90,50s0,0.5,0,1.4c0,0.5,0,1,0,1.7c0,0.3,0,0.7,0,1.1 c0,0.4-0.1,0.8-0.1,1.2c-0.1,0.9-0.2,1.8-0.4,2.8c-0.2,1-0.5,2.1-0.7,3.3c-0.3,1.2-0.8,2.4-1.2,3.7c-0.2,0.7-0.5,1.3-0.8,1.9 c-0.3,0.7-0.6,1.3-0.9,2c-0.3,0.7-0.7,1.3-1.1,2c-0.4,0.7-0.7,1.4-1.2,2c-1,1.3-1.9,2.7-3.1,4c-2.2,2.7-5,5-8.1,7.1 c-0.8,0.5-1.6,1-2.4,1.5c-0.8,0.5-1.7,0.9-2.6,1.3L66,87.7l-1.4,0.5c-0.9,0.3-1.8,0.7-2.8,1c-3.8,1.1-7.9,1.7-11.8,1.8L47,90.8 c-1,0-2-0.2-3-0.3l-1.5-0.2l-0.7-0.1L41.1,90c-1-0.3-1.9-0.5-2.9-0.7c-0.9-0.3-1.9-0.7-2.8-1L34,87.7l-1.3-0.6 c-0.9-0.4-1.8-0.8-2.6-1.3c-0.8-0.5-1.6-1-2.4-1.5c-3.1-2.1-5.9-4.5-8.1-7.1c-1.2-1.2-2.1-2.7-3.1-4c-0.5-0.6-0.8-1.4-1.2-2 c-0.4-0.7-0.8-1.3-1.1-2c-0.3-0.7-0.6-1.3-0.9-2c-0.3-0.7-0.6-1.3-0.8-1.9c-0.4-1.3-0.9-2.5-1.2-3.7c-0.3-1.2-0.5-2.3-0.7-3.3 c-0.2-1-0.3-2-0.4-2.8c-0.1-0.4-0.1-0.8-0.1-1.2c0-0.4,0-0.7,0-1.1c0-0.7,0-1.2,0-1.7C10,50.5,10,50,10,50z" fill="#132439" filter="url(#uil-ring-shadow)"><animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" repeatCount="indefinite" dur="1s"></animateTransform></path></svg></div> 
              </div>
              <div data-floor="nf-floor_3" id="nf-floor_3" style="display:none;" class="nf-floor">
                 <div class="preloader"><svg width='120px' height='120px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-ring"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><defs><filter id="uil-ring-shadow" x="-100%" y="-100%" width="300%" height="300%"><feOffset result="offOut" in="SourceGraphic" dx="0" dy="0"></feOffset><feGaussianBlur result="blurOut" in="offOut" stdDeviation="0"></feGaussianBlur><feBlend in="SourceGraphic" in2="blurOut" mode="normal"></feBlend></filter></defs><path d="M10,50c0,0,0,0.5,0.1,1.4c0,0.5,0.1,1,0.2,1.7c0,0.3,0.1,0.7,0.1,1.1c0.1,0.4,0.1,0.8,0.2,1.2c0.2,0.8,0.3,1.8,0.5,2.8 c0.3,1,0.6,2.1,0.9,3.2c0.3,1.1,0.9,2.3,1.4,3.5c0.5,1.2,1.2,2.4,1.8,3.7c0.3,0.6,0.8,1.2,1.2,1.9c0.4,0.6,0.8,1.3,1.3,1.9 c1,1.2,1.9,2.6,3.1,3.7c2.2,2.5,5,4.7,7.9,6.7c3,2,6.5,3.4,10.1,4.6c3.6,1.1,7.5,1.5,11.2,1.6c4-0.1,7.7-0.6,11.3-1.6 c3.6-1.2,7-2.6,10-4.6c3-2,5.8-4.2,7.9-6.7c1.2-1.2,2.1-2.5,3.1-3.7c0.5-0.6,0.9-1.3,1.3-1.9c0.4-0.6,0.8-1.3,1.2-1.9 c0.6-1.3,1.3-2.5,1.8-3.7c0.5-1.2,1-2.4,1.4-3.5c0.3-1.1,0.6-2.2,0.9-3.2c0.2-1,0.4-1.9,0.5-2.8c0.1-0.4,0.1-0.8,0.2-1.2 c0-0.4,0.1-0.7,0.1-1.1c0.1-0.7,0.1-1.2,0.2-1.7C90,50.5,90,50,90,50s0,0.5,0,1.4c0,0.5,0,1,0,1.7c0,0.3,0,0.7,0,1.1 c0,0.4-0.1,0.8-0.1,1.2c-0.1,0.9-0.2,1.8-0.4,2.8c-0.2,1-0.5,2.1-0.7,3.3c-0.3,1.2-0.8,2.4-1.2,3.7c-0.2,0.7-0.5,1.3-0.8,1.9 c-0.3,0.7-0.6,1.3-0.9,2c-0.3,0.7-0.7,1.3-1.1,2c-0.4,0.7-0.7,1.4-1.2,2c-1,1.3-1.9,2.7-3.1,4c-2.2,2.7-5,5-8.1,7.1 c-0.8,0.5-1.6,1-2.4,1.5c-0.8,0.5-1.7,0.9-2.6,1.3L66,87.7l-1.4,0.5c-0.9,0.3-1.8,0.7-2.8,1c-3.8,1.1-7.9,1.7-11.8,1.8L47,90.8 c-1,0-2-0.2-3-0.3l-1.5-0.2l-0.7-0.1L41.1,90c-1-0.3-1.9-0.5-2.9-0.7c-0.9-0.3-1.9-0.7-2.8-1L34,87.7l-1.3-0.6 c-0.9-0.4-1.8-0.8-2.6-1.3c-0.8-0.5-1.6-1-2.4-1.5c-3.1-2.1-5.9-4.5-8.1-7.1c-1.2-1.2-2.1-2.7-3.1-4c-0.5-0.6-0.8-1.4-1.2-2 c-0.4-0.7-0.8-1.3-1.1-2c-0.3-0.7-0.6-1.3-0.9-2c-0.3-0.7-0.6-1.3-0.8-1.9c-0.4-1.3-0.9-2.5-1.2-3.7c-0.3-1.2-0.5-2.3-0.7-3.3 c-0.2-1-0.3-2-0.4-2.8c-0.1-0.4-0.1-0.8-0.1-1.2c0-0.4,0-0.7,0-1.1c0-0.7,0-1.2,0-1.7C10,50.5,10,50,10,50z" fill="#132439" filter="url(#uil-ring-shadow)"><animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" repeatCount="indefinite" dur="1s"></animateTransform></path></svg></div> 
              </div>
              <div class="nf-toggle hide">
                <div class="nf-toggle-number">№310</div>
                <div class="nf-toggle-stand">Издательство “Пумба”</div>
              </div>
              <div class="nf-stand-list">
                <div class="row">
                	<div data-floor="nf-floor_2">
		                <div class="col-sm-6">
		 					<div class="row">
		  						<div class="col-md-6"></div>
		  						<div class="col-md-6"></div>
		 					</div>
						</div>
						<div class="col-sm-6">
		 					<div class="row">
		  						<div class="col-md-6"></div>
		  						<div class="col-md-6"></div>
		 					</div>
						</div>
					</div>
					<div data-floor="nf-floor_3" style="display: none;">
		                <div class="col-sm-6">
		 					<div class="row">
		  						<div class="col-md-6"></div>
		  						<div class="col-md-6"></div>
		 					</div>
						</div>
						<div class="col-sm-6">
		 					<div class="row">
		  						<div class="col-md-6"></div>
		  						<div class="col-md-6"></div>
		 					</div>
						</div>
					</div>
				</div>

              </div>
            </div>
          </div>
        </section>
      </div>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/vendors/colorbox/jquery.colorbox.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nnf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    
    <?php
get_footer();
?>