<?php
/*  ----------------------------------------------------------------------------
    the default page template
 */


get_header();


?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <section class="section-test">
          <div style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/animals_bg.jpg);" class="test_img"></div>
          <div data-test-id="1" data-total-questions="12" class="container test">
            <article class="article-test">
              <h3 class="test_title">Сказочные звери и другие мифические создания</h3>
              <button data-test-id="1" class="test_btn btn btn-white btn-lg start_test">Перейти к вопросам</button>
            </article>
            <div data-question-index="0" class="quest_body question_bound">
              <div class="question_count">1/10</div>
              <div class="question_title">Когда он выпрямился во весь рост, его чешуйчатая, увенчанная острыми шипами голова с тремя языками вознеслась выше самой высокой башни, а передние лапы опирались на развалины старинных домов, как на осколки камней. Чешуя темно-стального цвета словно полированная отражала свет солнца. Дракон был жилистый и поджарый, словно гончий пес, и огромный, как гора.</div>
              <div class="answers_list">
                <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test -radio">«Игра престолов» Джорджа Мартина</button>
                <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test -radio">«Волшебник Земноморья» Урсулы ле Гуин</button>
              </div>
              <div data-question-index="0" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Да, это Старый Дракон с острова Пендор, досаждающий местным жителям. </p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Заблуждаетесь! Главный дракон Дейнерис по прозвищу Дрогон действительно черного цвета, но спина его покрыта красными пластинами.</p>
                </div>
                <button data-next-question="1" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="1" class="quest_body question_bound">
              <div class="question_count">2/10</div>
              <div class="question_title">Но внезапно, стремительно сквозь облака пролетая,<br>Гарпии изо рта и из рук неизменно хватали <br>Клювами пищу его, порой не оставив ни крошки <br>Иль иногда оставляя хоть что-то для жизни убогой.</div>
              <div class="answers_list">
                <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test -radio">Аполлоний Родосский</button>
                <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test -radio">Данте Алигьери</button>
              </div>
              <div data-question-index="1" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Да! Гарпии плоть от плоти античные сказочные создания. В «Аргонавтике» они досаждают прорицателю Финею, проклятому богами.  </p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Неправильно! Хотя в «Божественной комедии» тоже есть гарпии — в седьмом круге ада.</p>
                </div>
                <button data-next-question="2" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="2" class="quest_body question_bound">
              <div class="question_count">3/10</div>
              <div class="question_title">Широкоплечая, очень коренастая фигура с тонкой талией, на двух низких волосатых ногах и без всякой головы, равно как без шеи. На груди, там, где у людей находятся соски, открывались миндалевидные выразительные очи; между ними невысокое вздутие с двумя ноздрями и округлая дыра, весьма подвижная, так что стоило пришельцу заговорить, отверстие заерзало и закривилось в зависимости от того, какие оно исторгало звуки.</div>
              <div class="answers_list">
                <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test -radio">«Естественная история» Плиния Старшего</button>
                <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test -radio">«Баудолино» Умберто Эко</button>
              </div>
              <div data-question-index="2" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Верно! Это так называемый блегм — одно из мифических существ, встречающихся главному герою. Хотя, по правде сказать, за основу Эко взял описание схожего существа у Плиния.</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Увы! В «Естественной истории» и правда описаны разные мифические создания, но этот фрагмент не оттуда. </p>
                </div>
                <button data-next-question="3" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="3" class="quest_body question_bound">
              <div class="question_count">4/10</div>
              <div class="question_title">Оно [мантикора — прим. ред.] имеет три ряда зубов, соединяющихся наподобие гребня, человеческие лицо и уши и серо–голубые глаза; кожа у него кровавого цвета, а тело львиное; оно наносит удары концом хвоста, подобно скорпиону; голос его напоминает одновременно звуки свирели и трубы; скорость огромна; особенно его привлекает человеческое мясо.</div>
              <div class="answers_list">
                <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test -radio">Ктесий Книдский</button>
                <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test -radio">Абердинский бестиарий</button>
              </div>
              <div data-question-index="3" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Правильно! Это описание обитающей в Индии мантикоры, которое древнегреческий историк оставил в трактате «Индика».</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Нет! Средневековая иллюстрированная энциклопедия действительно содержит описания фантастических животных (хотя страничка с мантикорой не сохранилась), но это не она</p>
                </div>
                <button data-next-question="4" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="4" class="quest_body question_bound">
              <div class="question_count">5/10</div>
              <div class="question_title">— Мышонок, ты о ком?<br>— О, это очень крупный зверь, я с ним давно знаком:<br>Есть у него клыки, и когти тоже есть,<br>И преогромнейшая пасть, а в ней зубов не счесть.</div>
              <div class="answers_list">
                <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test -radio">Это Бармаглот Льюиса Кэрролла</button>
                <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test -radio">«Груффало» Джулии Дональдсон</button>
              </div>
              <div data-question-index="4" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Угадали. Несмотря на страшноватый облик, Груффало — один из самых популярных недавно выдуманных персонажей детской литературы.</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Нет, что вы! Конечно, Бармаглот выглядит не менее свирепо, но все-таки его главная отличительная черта — крылья.</p>
                </div>
                <button data-next-question="5" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="5" class="quest_body question_bound">
              <div class="question_count">6/10</div>
              <div class="question_title">Нижняя его часть была подобна лошади, с чем-то вроде плавников на ногах, с широченной, словно у кита, пастью, из которой вырывался пар, как из кипящего котла. У него был один огненно-красный глаз. На нем сидел здоровенный безногий детина или, точнее, вырастал из его спины. Его руки доставали чуть ли не до земли, голова была не менее трех футов в диаметре и беспрестанно перекатывалась с плеча на плечо, словно вот-вот оторвется. Но самым жутким в облике чудовища было отсутствие кожи, виднелась красная плоть; темная, словно деготь, кровь бежала по желтым венам. Белые сухожилия, с лошадиные путы толщиной, сокращались и растягивались во время его движения.</div>
              <div class="answers_list">
                <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test -radio">Наклави из мифологии Оркнейских островов</button>
                <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test -radio">Дагон из мифов Ктулху Говарда Лавкрафта</button>
              </div>
              <div data-question-index="5" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Точно. Наклави — самое ужасное чудище из шотладнских сказаний. Это фрагмент из «Шотландских народных сказок», вышедших в 1893 году под редакцией поэта и писателя Джорджа Брисбена Скотта Дугласа.</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Ошибаетесь! Дагон выглядит столь же ужасающе и напоминает амфибию, но на лошадь лавкрафтовское чудище не похоже. </p>
                </div>
                <button data-next-question="6" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="6" class="quest_body question_bound">
              <div class="question_count">7/10</div>
              <div class="question_title">Посредине стола стоял кувшин с густым молоком для ребят — мистер Бобр остался верен пиву — и лежал огромный кусок желтого сливочного масла — бери его к картофелю сколько угодно. А что на свете может быть вкуснее, думали ребята, — и я вполне с ними согласен, — речной рыбы, если всего полчаса назад она была выловлена и только минуту назад сошла со сковороды.</div>
              <div class="answers_list">
                <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test -radio">«Сказки дядюшки Римуса»</button>
                <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test -radio">«Хроники Нарнии» Клайва Льюиса</button>
              </div>
              <div data-question-index="6" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Конечно! Это те самые бобры, которые помогают семейству Певенси в самом начале их приключений.</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Неправильно. В историях дядюшки Римуса фигурируют енот, опоссум, хорек и даже норка (и ведутся они тоже от первого лица), но вот бобра у него нет!</p>
                </div>
                <button data-next-question="7" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="7" class="quest_body question_bound">
              <div class="question_count">8/10</div>
              <div class="question_title">Ноги как стволы деревьев, огромные паруса-уши, хобот изогнулся, как змея для удара, маленькие красные глазки горят яростью, украшенные золотом бивни в крови. Алая с золотом упряжь съехала набок. Остатки боевой башенки на спине цеплялись за деревья и разваливались на глазах. А высоко-высоко, на шее зверя, отчаянно пытался удержаться казавшийся отсюда маленьким могучий южанин.</div>
              <div class="answers_list">
                <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test -radio">«Властелин колец» Толкина</button>
                <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test -radio">Это же Флавий Арриан описывает боевых слонов, с которыми столкнулся Александр Великий в Индии!</button>
              </div>
              <div data-question-index="7" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Совершенно верно! Это мумак, которого увидел Сэм Гэмджи в «Двух крепостях».</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">К сожалению, нет, хотя у Арриана в «Походе Александра» действительно множество упоминаний слонов, которых инды использовали в военных действиях.</p>
                </div>
                <button data-next-question="8" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="8" class="quest_body question_bound">
              <div class="question_count">9/10</div>
              <div class="question_title">Существует поверие, что некогда один василиск был убит копьем сидящего на коне человека и стекающие по копью выделения убили не только человека, но и коня. Но и на такое чудовище — в самом деле, цари часто хотели видеть его мертвым и уже не представлявшим опасности — находится управа: для него смертельно опасен яд ласок.</div>
              <div class="answers_list">
                <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test -radio">«Естественная история» Плиния Старшего</button>
                <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test -radio">«Игра престолов» Джорджа Мартина</button>
              </div>
              <div data-question-index="8" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Да, древнеримский историк полагал, что василиски обитают в Киренаике — провинции Римской империи на территории современной Ливии.</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Нет. Во вселенной Мартина тоже обитают василиски, но этот не из нее.</p>
                </div>
                <button data-next-question="9" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="9" class="quest_body question_bound">
              <div class="question_count">10/10</div>
              <div class="question_title">Однорогие имеют рог посредине головы; так, лучше всего единый рог будет принадлежать каждой из сторон, ибо середина в одинаковой мере является общей для обоих концов. Естественно думать, что единорог будет скорее однокопытным, чем двукопытным; ведь копыто — простое и раздвоенное — имеет ту же природу, что и рог, так что у одних и тех же животных одновременно происходит расщепление копыт и рогов.</div>
              <div class="answers_list">
                <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test -radio">«Гарри Поттер»</button>
                <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test -radio">«О частях животных» Аристотеля</button>
              </div>
              <div data-question-index="9" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Верно! Великий философ всерьез рассматривал существование единорогов, физиологию которых описал в своем зоологическом трактате</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Ну что вы! Конечно, единороги водятся в мире Роулинг, но пишет она все-таки менее топорным языком.</p>
                </div>
                <button class="test_btn btn btn-white btn-lg start_test show-results_btn">Показать результаты</button>
              </div>
            </div>
            <article data-min-result="0" data-max-result="3" class="article-result">
              <div class="row">
                <div class="col-sm-4">
                  <div class="result_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aristotel.jpg"></div>
                </div>
                <div class="col-sm-8">
                  <div class="total_answers">Ваш результат — <span class="total_answers__result">5</span>/10</div>
                  <div class="result_title">Вы Аристотель</div>
                  <div class="result_des">Разбираетесь в воображаемых существах, но единороги и ежи для вас одинаково реальны. Будьте менее доверчивы, чем древние греки!</div>
                </div>
              </div>
            </article>
            <article data-min-result="4" data-max-result="6" class="article-result">
              <div class="row">
                <div class="col-sm-4">
                  <div class="result_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rimus.jpg"></div>
                </div>
                <div class="col-sm-8">
                  <div class="total_answers">Ваш результат — <span class="total_answers__result">5</span>/10</div>
                  <div class="result_title">Вы дядюшка Римус</div>
                  <div class="result_des">Говорящие хорьки и норки — это по вашей части, но до Азатота и Йог-Сотота вам далеко!</div>
                </div>
              </div>
            </article>
            <article data-min-result="7" data-max-result="9" class="article-result">
              <div class="row">
                <div class="col-sm-4">
                  <div class="result_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lavkraft.jpg"></div>
                </div>
                <div class="col-sm-8">
                  <div class="total_answers">Ваш результат — <span class="total_answers__result">5</span>/10</div>
                  <div class="result_title">Вы Говард Лавкрафт</div>
                  <div class="result_des">Вы повелитель хтонических созданий и ваше воображение в одиночку создаст целую вселенную невиданных существ. Пх’нглуи мглв’нафх Ктулху Р’льех вгах’нагл фхтагн!</div>
                </div>
              </div>
            </article>
            <article data-min-result="10" data-max-result="10" class="article-result">
              <div class="row">
                <div class="col-sm-4">
                  <div class="result_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nuckelavee.jpg"></div>
                </div>
                <div class="col-sm-8">
                  <div class="total_answers">Ваш результат — <span class="total_answers__result">5</span>/10</div>
                  <div class="result_title">Вы наклави</div>
                  <div class="result_des">Вы сами пришли сюда из потусторонней реальности и плоть от плоти народных сказок и фольклора. Познакомите нас с феями и бааван ши?</div>
                </div>
              </div>
            </article>
            <div class="result-event">
              <button data-test-id="1" class="test_btn btn btn-white btn-lg start_test run-again_btn">Пройти еще раз</button>
              <div class="result_share">
                <div class="result_share__title">Поделиться:</div>
                <div class="shareBlock-list">
                  <a href="#" data-type="vkontakte" class="shareBlock-link share-btn-test-js"><span class="icon-vk-xs"></span></a>
                  <a href="#" data-type="facebook" class="shareBlock-link share-btn-test-js"><span class="icon-fb-xs"></span></a>
                  <a href="#" data-type="twitter" class="shareBlock-link share-btn-test-js"><span class="icon-tw-xs"></span></a>
                  <a href="#" data-type="telegram" class="shareBlock-link share-btn-test-js"><span class="icon-telegram-xs"></span></a>
                  <!-- <a href="#" data-type="whatsapp" class="shareBlock-link share-btn-test-js hidden-md hidden-lg"><span class="icon-whatsapp-xs"></span></a> -->
                </div>
              </div>
            </div>
          </div>
        </section>

        
    <?php


get_footer();
