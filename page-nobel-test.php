<?php
/*  ----------------------------------------------------------------------------
    the default page template
 */


get_header();


?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<section class="section-test">
          <div style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/cover-podlozhka.jpg);" class="test_img"></div>
          <div data-test-id="1" data-total-questions="12" class="container test">
            <div class="test_copyright">Fredrika Berghult / NobelMediaAB / imagebank.sweden.se</div>
            <article class="article-test" style="display: none;">
              <h3 class="test_title">Угадайте нобелевского лауреата по цитате из его речи</h3>
              <!--p.test_des В этом году вручение Нобелевской премии по литературе перенесли на неделю: лауреат получит заветные медаль и чек от шведской Академии 13 октября. Пока мир ждёт, что Нобелевка чуть ли не впервые достанется международно популярному автору — Харуки Мураками (а судя по букмекерским ставкам, шансы его велики как никогда), предлагаем поиграть и вспомнить предыдущее премиальное столетие. Попробуйте угадать, кому из лауреатов принадлежат эти цитаты из нобелевских речей.-->
              <!--p.test_author-->
              <!--	span.label Составил&nbsp;-->
              <!--		a(target="_blank" href="#") Никита&nbsp;Петров-->
              <button data-test-id="1" class="test_btn btn btn-white btn-lg start_test">Перейти к вопросам</button>
            </article>
            <!--.question-title-->
            <!--	i Тест-->
            <!--	| Угадайте нобелевского лауреата по цитате из его речи-->
            <div data-question-index="0" class="quest_body question_bound" style="display: block;">
              <div class="question_count">1/12</div>
              <div class="question_title">Жизнь писателя, когда он на высоте, протекает в одиночестве. Писательские организации могут скрасить его одиночество, но едва ли повышают качество его работы. Избавляясь от одиночества, он вырастает как общественная фигура, и нередко это идет во вред его творчеству. Ибо творит он один, и, если он достаточно хороший писатель, его дело — изо дня в день видеть впереди вечность или отсутствие таковой.</div>
              <div class="row answers_list" style="display: none;">
                <div class="col-sm-6">
                  <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test">Эрнест Хэмингуэй</button>
                </div>
                <div class="col-sm-6">
                  <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test">Иван Бунин</button>
                </div>
              </div>
              <div data-question-index="0" class="quest_res" style="display: block;">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Точно! Эта философская цитата — из речи старика Хэма. Он, кстати, к шведским академикам не поехал, и речь за него читал посол.</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ" style="display: block;">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">К сожалению, вы ошиблись. У эмигрировавшего Бунина действительно был повод покритиковать писательские организации, но в своей нобелевской речи он сконцентрировался на теме изгнанничества и справедливости шведской Академии. А цитата — из Эрнеста Хэмингуэя.</p>
                </div>
                <button data-next-question="1" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="1" class="quest_body question_bound">
              <div class="question_count">2/12</div>
              <div class="question_title">Быть может, достопочтенная Европа лучше бы поняла нас, если бы попыталась увидеть нас в своем собственном прошлом. Если бы вспомнила, что Лондону понадобилось триста лет для возведения первой городской стены и еще триста для появления епископа; что Рим боролся в полумгле в течение двадцати веков, пока один этрусский царь не увековечил его в истории; что еще в XVI веке мирные сегодня швейцарцы, чьи мягкие сыры и бесстрастные часы радуют цивилизацию, обагрили кровью Европу, будучи солдатами удачи. Даже в апогее Возрождения двенадцать тысяч ландскнехтов, нанятых на службу в войска империи, разграбили и опустошили Рим, вырезав восемь тысяч его жителей.</div>
              <div class="row answers_list">
                <div class="col-sm-6">
                  <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test">Габриэль Гарсиа Маркес</button>
                </div>
                <div class="col-sm-6">
                  <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test">Орхан Памук</button>
                </div>
              </div>
              <div data-question-index="1" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Да, это был Маркес. Получив Нобелевскую премию в 1982 году с формулировкой «За романы и рассказы, в которых фантазия и реальность, совмещаясь, отражают жизнь и конфликты целого континента», колумбийский писатель и журналист не преминул поговорить о конфликтах.</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Нет, Орхан Памук отношений с Лондоном и Римом не обострял, а вот Габриэль Гарсиа Маркес в своей речи особо не сдерживался.</p>
                </div>
                <button data-next-question="2" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="2" class="quest_body question_bound">
              <div class="question_count">3/12</div>
              <div class="question_title">Начальную школу я так и не закончил, для тяжелой работы был еще мал, силенок не хватало, вот меня и определили пасти скот на поросшем травой берегу реки. Гоня своих коров и коз мимо школьных ворот, я видел бывших одноклассников, игравших во дворе, и всякий раз на сердце ложилась печаль. Это заставило меня глубоко проникнуться тем, как это тяжело для человека — даже для ребенка — оторваться от коллектива.</div>
              <div class="row answers_list">
                <div class="col-sm-6">
                  <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test">Михаил Шолохов</button>
                </div>
                <div class="col-sm-6">
                  <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test">Мо Янь</button>
                </div>
              </div>
              <div data-question-index="2" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Так точно. В 2012 году китайский писатель подробнейше пересказал в нобелевской речи свою биографию и охарактеризовал, кажется, каждый из своих романов. Впрочем, за своеобразное сказительство мир его и полюбил.</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">А вот и нет. Автор «Тихого Дона» хоть и проучился только четыре года в гимназии и вырос на хуторе, но трогательных историй из детства в своей нобелевской речи не рассказывал. Это цитата из речи Мо Яня.</p>
                </div>
                <button data-next-question="3" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="3" class="quest_body question_bound">
              <div class="question_count">4/12</div>
              <div class="question_title">Еще мальчиком я слышал в школе лихое изречение, что война есть мать всех вещей; одновременно же я слышал в школе и в церкви, что незлобивые, кроткие, короче отвергающие насилие, наследуют землю обитания. До конца дней своих человеку не избавиться от убийственного противоречия, состоящего в том, что одному сулят и небо и землю, другому — лишь небо, причем в стране, где церковь тоже стремилась к господству, достигала его и осуществляла вплоть до сего дня. Да, это был долгий путь — для меня, того, кто, подобно миллионам, вернулся с войны, не имея при себе ничего, кроме двух рук, засунутых в карманы, и отличался от этих миллионов лишь страстью писать и писать, снова и снова.</div>
              <div class="row answers_list">
                <div class="col-sm-6">
                  <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test">Генрих Белль</button>
                </div>
                <div class="col-sm-6">
                  <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test">Уильям Батлер Йейтс</button>
                </div>
              </div>
              <div data-question-index="3" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Да, это цитата из нобелевской речи Генриха Белля, который в 1972 году получил премию в том числе за вклад в послевоенное возрождение немецкой литературы.</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Пожалуй, Йейтс тоже много чего мог бы порассказать о роли церкви, но вот никакая война, кроме вечной борьбы за независимость Ирландии, на его творчество не повлияла. Нобелевскую премию он получил в 1923, а умер 1939 и не застал того, о чем говорится в этой цитате из речи Генриха Белля.</p>
                </div>
                <button data-next-question="4" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="4" class="quest_body question_bound">
              <div class="question_count">5/12</div>
              <div class="question_title">Флобер говорил о себе, что он — человек-перо, я могу сказать о себе, что я — человек-ухо. Когда я иду по улице и ко мне прорываются какие-то слова, фразы, восклицания, всегда думаю: сколько же романов бесследно исчезают во времени. В темноте.</div>
              <div class="row answers_list">
                <div class="col-sm-6">
                  <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test">Светлана Алексиевич</button>
                </div>
                <div class="col-sm-6">
                  <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test">Дорис Лессинг</button>
                </div>
              </div>
              <div data-question-index="4" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Да. Это цитата из прошлогодней речи Светланы Алексиевич.</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">А вот и нет. Дорис Лессинг — человек-социальная критика, к тому же мастерица выстраивать затейливые сюжеты из области фантастики, поэтому в своей нобелевской речи она ничего подобного сказать не могла. Это была Светлана Алексиевич.</p>
                </div>
                <button data-next-question="5" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="5" class="quest_body question_bound">
              <div class="question_count">6/12</div>
              <div class="question_title">Сегодняшний поэт скептичен и подозрителен даже — а возможно, прежде всего — по отношению к самому себе. Он неохотно вслух называет себя поэтом — словно бы немножечко этого стыдится. В нашу крикливую эпоху куда легче признать собственные недостатки — конечно, если они эффектно выглядят, — чем достоинства, которые глубже спрятаны и в которых мы сами не до конца уверены... В различных анкетах или в беседах со случайными попутчиками, когда поэт вынужден обозначить род своих занятий, он обходится неопределенным „литератор“ — или называет свою дополнительную специальность. Сообщение о том, что перед ними поэт, чиновники или пассажиры автобуса принимают с легким недоверием и опаской.</div>
              <div class="row answers_list">
                <div class="col-sm-6">
                  <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test">Вислава Шимборская</button>
                </div>
                <div class="col-sm-6">
                  <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test">Иосиф Бродский</button>
                </div>
              </div>
              <div data-question-index="5" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Да, это цитата из речи польской поэтессы, получившей Нобелевскую премию в 1996 году. И, кстати, в ней она немало говорит о Бродском, который не согласился бы с ее скепсисом по поводу своего самоопределения: «Я заметила, что изо всех известных мне стихотворцев он один любил говорить о себе „поэт“, произнося это слово без внутреннего сопротивления, даже с какой-то вызывающей свободой».</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Ну что вы, конечно, нет. Бродский немало претерпел от чиновников за то, что считал себя поэтом, но никакой подозрительности по отношению к себе в связи с этим не испытывал. Об этом говорит в своей речи и Вислава Шиборская, которой принадлежит цитата.</p>
                </div>
                <button data-next-question="6" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="6" class="quest_body question_bound">
              <div class="question_count">7/12</div>
              <div class="question_title">Если бы в этом выступлении мне нужно было назвать всех писателей, которым я чем-то обязан — многим или малым, — их тени погрузили бы нас во тьму. Им нет числа. Они не только поделились со мной секретами мастерства рассказчика, но и побудили меня исследовать человека во всей его бездонной глубине, восхищаться его подвигами и ужасаться его жестокости. Они были моими лучшими друзьями, из их книг я понял, что и в самых худших ситуациях всегда есть надежда, а жить стоит хотя бы потому, что, не живя, мы не могли бы читать и придумывать истории.</div>
              <div class="row answers_list">
                <div class="col-sm-6">
                  <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test">Марио Варгас Льоса</button>
                </div>
                <div class="col-sm-6">
                  <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test">Рабиндранат Тагор</button>
                </div>
              </div>
              <div data-question-index="6" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Да! Это цитата из речи перуанского писателя, которую он назвал «Похвала чтению и литературе» и прочитал на вручении премии в 2010 году.</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Упс. Нет. На самом деле индийский поэт вообще не говорил речь на своем чествовании в 1913 году, потому что не смог на него приехать. Зато послал академикам телеграмму. А цитата принадлежит Марио Варгасу Льоса.</p>
                </div>
                <button data-next-question="7" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="7" class="quest_body question_bound">
              <div class="question_count">8/12</div>
              <div class="question_title">Я думаю, что этой премией награжден не я как частное лицо, но мой труд — труд  всей моей  жизни, творимый в муках и поте человеческого духа, труд, осуществляемый не ради славы и, уж конечно, не ради денег, но во имя того, чтобы из  элементов человеческого духа создать нечто такое, что раньше не существовало. Вот почему мне эта премия выдается только по доверенности. Денежной ее части нетрудно будет найти применение, достойное ее истинного назначения и сущности.</div>
              <div class="row answers_list">
                <div class="col-sm-6">
                  <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test">Чеслав Милош</button>
                </div>
                <div class="col-sm-6">
                  <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test">Уильям Фолкнер</button>
                </div>
              </div>
              <div data-question-index="7" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Совершенно верно. Уильям Фолкнер получил Нобелевскую премию в 1949 за вклад в развитие современного американского романа.</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Э, нет. Польский поэт, диссидент и праведник мира получил Нобелевскую премию по литературе в 1980 году, но странно себе представить, как он говорит что-нибудь о своих муках. Эта цитата — из нобелевской речи Уильяма Фолкнера.</p>
                </div>
                <button data-next-question="8" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="8" class="quest_body question_bound">
              <div class="question_count">9/12</div>
              <div class="question_title">На эту кафедру, с которой прочитывается Нобелевская лекция, кафедру, предоставляемую далеко не всякому писателю и только раз в жизни, я поднялся не по трем-четырем примощенным ступенькам, но по сотням или даже тысячам их — неуступным, обрывистым, обмерзлым, из тьмы и холода, где было мне суждено уцелеть, а другие — может быть с большим даром, сильнее меня — погибли. &lt;...&gt; Целая национальная литература осталась там, погребенная не только без гроба, но даже без нижнего белья, голая, с биркой на пальце ноги.</div>
              <div class="row answers_list">
                <div class="col-sm-6">
                  <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test">Александр Солженицын</button>
                </div>
                <div class="col-sm-6">
                  <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test">Тумас Транстремер</button>
                </div>
              </div>
              <div data-question-index="8" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Да, это был легкий вопрос, конечно, Солженицын.</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Не-не-не. Шведский поэт несомненно представлял себе, что такое холод, а еще, кстати, работал психологом в тюрьме для подростков, но все же никакого повода говорить в своей нобелевской речи такие вещи у него, к счастью, не было. А вот у Солженицына — да.</p>
                </div>
                <button data-next-question="9" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="9" class="quest_body question_bound">
              <div class="question_count">10/12</div>
              <div class="question_title">Да, я люблю свою профессию. Благодаря ей я обзавожусь обществом, которое хочет многоголосо заявить о себе и по возможности точно запечатлеться в рукописи. Когда я читаю вслух перед публикой свои давно сбежавшие от меня или присвоенные читателем книги, где написанное и выраженное обрело наконец покой, — именно тогда я охотнее всего встречаюсь с ними. Тогда перед молодой, рано отлученной от языка, перед седоголовой, но все еще не насытившейся публикой написанное и выраженное слово опять становится устным. И из раза в раз эти чары действуют. Так писатель шаманством зарабатывает себе на хлеб с маслом. И хотя пишет он вопреки протекающему времени, хотя навирает с три короба складных правд, ему верят, верят его непроизнесенному обещанию „Продолжение следует...”</div>
              <div class="row answers_list">
                <div class="col-sm-6">
                  <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test">Джон Кутзее</button>
                </div>
                <div class="col-sm-6">
                  <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test">Гюнтер Грасс</button>
                </div>
              </div>
              <div data-question-index="9" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Да. Это цитата из речи Грасса, которую он произнес в 1999 году. Премию немецкому писателю присудили «За то, что его игривые и мрачные притчи освещают забытый образ истории».</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">А вот и нет. Кутзее, конечно, тоже умеет затейливо выражать свои мысли и тоже получил Нобелевку (2003 год), но в остальном едва ли у него много общего с Гюнтером Грассом, которому принадлежат эти слова.</p>
                </div>
                <button data-next-question="10" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="10" class="quest_body question_bound">
              <div class="question_count">11/12</div>
              <div class="question_title">Истинному художнику чуждо высокомерное презрение: он почитает своим долгом понимать, а не осуждать.</div>
              <div class="row answers_list">
                <div class="col-sm-6">
                  <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test">Светлана Алексиевич</button>
                </div>
                <div class="col-sm-6">
                  <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test">Альбер Камю</button>
                </div>
              </div>
              <div data-question-index="10" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Да. Эти слова произнес в 1957 году Альбер Камю, награжденный нобелевской премией с формулировкой «За огромный вклад в литературу, высветивший значение человеческой совести».</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Хорошо бы Светлана Алексиевич так выражала свои мысли, правда? Но это цитата из нобелевской речи Альбера Камю.</p>
                </div>
                <button data-next-question="11" class="test_btn btn btn-white btn-lg start_test">Следующий</button>
              </div>
            </div>
            <div data-question-index="11" class="quest_body question_bound">
              <div class="question_count">12/12</div>
              <div class="question_title">Я лично глубоко чувствую противоречие между этими двумя культурами [восточной и западной]: я сам продукт этих противоречий. Мои симпатии неизбежно склоняются к социализму и к так называемому восточному блоку, но я родился и воспитывался в буржуазной семье. Это и позволяет мне сотрудничать со всеми, кто хочет сближения двух культур. Однако я надеюсь, естественно, что «победит лучший», то есть социализм. Поэтому я не хочу принимать никаких наград ни от восточных, ни от западных высших культурных инстанций, хотя прекрасно понимаю, что они существуют. Несмотря на то, что все мои симпатии на стороне социализма, я в равной степени не смог бы принять, например, Ленинскую премию, если бы кто-нибудь вдруг предложил мне ее.</div>
              <div class="row answers_list">
                <div class="col-sm-6">
                  <button data-weight="1" class="test_btn btn btn-block btn-white btn-lg start_test">Жан-Поль Сартр</button>
                </div>
                <div class="col-sm-6">
                  <button data-weight="0" class="test_btn btn btn-block btn-white btn-lg start_test">Борис Пастернак</button>
                </div>
              </div>
              <div data-question-index="11" class="quest_res">
                <div class="answer_status answer_status-success right_answ">
                  <div class="answer_status__title">Верно</div>
                  <p class="answer_status__des">Вы правы! И, конечно, это не нобелевская речь, а заявление, которое Сартр сделал в 1964 году, объясняя шведским журналистами, почему он отказывается от премии.</p>
                </div>
                <div class="answer_status answer_status-fail wrong_answ">
                  <div class="answer_status__title">Неверно</div>
                  <p class="answer_status__des">Борис Леонидович действительно был вынужден отказаться от Нобелевской премии из-за давления правительства Союза советских социалистических республик, но уж точно не от большой любви к социализму. А эта цитата — из заявления, которое Жан-Поль Сартр сделал в 1964 году, объясняя шведским журналистами, почему он отказывается премии.</p>
                </div>
                <button class="test_btn btn btn-white btn-lg start_test show-results_btn">Показать результаты</button>
              </div>
            </div>
            <article data-min-result="0" data-max-result="4" class="article-result">
              <div class="row">
                <div class="col-sm-4">
                  <div class="result_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tolstoy.jpg"></div>
                </div>
                <div class="col-sm-8">
                  <div class="total_answers">Ваш результат — <span class="total_answers__result">5</span>/12</div>
                  <div class="result_title">Вы Лев Толстой</div>
                  <div class="result_des">Признайтесь: вы выше суетных премий. Поэтому какой вам прок от чужих нобелевских речей?</div>
                </div>
              </div>
            </article>
            <article data-min-result="5" data-max-result="7" class="article-result">
              <div class="row">
                <div class="col-sm-4">
                  <div class="result_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/evtushenko.jpg"></div>
                </div>
                <div class="col-sm-8">
                  <div class="total_answers">Ваш результат — <span class="total_answers__result">5</span>/12</div>
                  <div class="result_title">Вы Евгений Евтушенко</div>
                  <div class="result_des">Нобелевскую премию вам прочат не первый год, но шансы по-прежнему невелики, поэтому, чтобы не расстраиваться, вы стараетесь не обращать внимания на более удачливых конкурентов</div>
                </div>
              </div>
            </article>
            <article data-min-result="8" data-max-result="11" class="article-result">
              <div class="row">
                <div class="col-sm-4">
                  <div class="result_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/murakami.jpg"></div>
                </div>
                <div class="col-sm-8">
                  <div class="total_answers">Ваш результат — <span class="total_answers__result">5</span>/12</div>
                  <div class="result_title">Вы Харуки Мураками</div>
                  <div class="result_des">Готовитесь к своей речи? Похоже, вы неплохо ориентируетесь в том, что говорят литераторы, когда получают Нобелевскую премию. С такими познаниями и свою будет написать легче — был бы наконец повод!</div>
                </div>
              </div>
            </article>
            <article data-min-result="12" data-max-result="12" class="article-result">
              <div class="row">
                <div class="col-sm-4">
                  <div class="result_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/academic.jpg"></div>
                </div>
                <div class="col-sm-8">
                  <div class="total_answers">Ваш результат — <span class="total_answers__result">5</span>/12</div>
                  <div class="result_title">Вы — шведский академик?</div>
                  <div class="result_des">Есть подозрение, что вы не просто так узнаете цитаты из речей нобелевских лауреатов за сто лет. А если так — напишите нам, пожалуйста, каких сюрпризов ждать в следующем году? Волнуемся</div>
                </div>
              </div>
            </article>
            <div class="result-event">
              <button data-test-id="1" class="test_btn btn btn-white btn-lg start_test run-again_btn">Пройти еще раз</button>
              <div class="result_share">
                <div class="result_share__title">Поделиться:</div>
                <div class="shareBlock-list"><a href="#" data-type="vkontakte" class="shareBlock-link share-btn-test-js"><span class="icon-vk-xs"></span></a><a href="#" data-type="facebook" class="shareBlock-link share-btn-test-js"><span class="icon-fb-xs"></span></a><a href="#" data-type="twitter" class="shareBlock-link share-btn-test-js"><span class="icon-tw-xs"></span></a><a href="#" data-type="telegram" class="shareBlock-link share-btn-test-js"><span class="icon-telegram-xs"></span></a></div>
              </div>
            </div>
          </div>
        </section>

        
    <?php


get_footer();
