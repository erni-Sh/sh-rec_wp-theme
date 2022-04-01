<!DOCTYPE html(lang="ru")>
<!-- [if IE 8]><html class="no-js lt-ie9" lang="ru"> <![endif]-->
<!-- [if gt IE 8]>-->
<html class="no-js" lang="ru">
  <!-- <![endif]-->
  <head>
    <title>Сведение. Мастеринг | Звукорежиссер Эрнест Шеремет</title>
    <?php get_header(); ?>
    
  </head>
  <body>
     
     
    <?php
    include get_template_directory() . "/page-parts/header-nav.php";
    ?>
    <main class="cd-main-content"></main>
    <div class="section">
      <div class="container header-big-text">
        <div class="twelve columns">
          <div class="title-page-text padding-top-bottom-title">
            <h2>FAQ</h2>
            <p>подробности</p>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
    <div class="section padding-bottom">
      <div class="container">
        <div class="twelve columns">
          <!--
          <div class="img-wrap">
          <img src="img/blog/2.jpg" alt="">
          </div>
          -->
          <div class="post-block"><?php $countTab = 0 ?>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">КАК ПРОИСХОДИТ ОПЛАТА И РАБОТА?</summary><?php $count = 0 ?>
              <p><i>(описан полный тариф)</i></p>
              <p><?php echo ($count += 1) ?>. Присылаются все необходимые материалы:<br/>— для сведения →<br/>— для аранжировки →</p>
              <p><?php echo ($count += 1) ?>. Вносится предоплата минимум 50%<br/><i>Предоплата исключает случайных клиентов, подтверждает вашу платежеспособность и замотивированность. Также она поднимает приоритет вашего проекта среди других. Предоплата явлется обязательным условием. <br/>При 100%-й предоплате предоставляется скидка.<br/>Чтобы зараннее понять как будет звучать ваш трек после сведения, послушайте примеры работ:<br/>— в паблике <a href="https://vk.com/sheremet_records">https://vk.com/sheremet_records</a><br/>— на сайте <a href="https://ernestsheremet.com/">https://ernestsheremet.com/</a><br/>— в кратком audio showreel ниже</i></p>
              <div class="container audio_showreel"></div>
              <p><?php echo ($count += 1) ?>. Я планирую свою работу и сообщаю о сроках.<br/><i>Обычно, требуется максимум неделя на производство.<br/>Я целиком и полностью погружаюсь в проект и не показываю половину своей работы.</i></p>
              <p><?php echo ($count += 1) ?>. После показа первого микса, дается безлимит на правки в течении 2 недель.<br/><i>Я никуда не пропадаю и всегда на связи!<br/>Правки высылаются списком по пунктам (не голосовыми сообщениями!) Пункты должны быть сформулированы лаконично, без «воды», с указанием тайм-кода, если это необходимо.<br/>После двух недель правки оплачиваются отдельно.<br/>При работе над альбомом и постоянным клиентам безлимит на правки предоставляется на год.<br/>Наша с вами задача — сделать качественную музыку, поэтому будем «пилить» пока не «допилим»!</i></p>
              <p><?php echo ($count += 1) ?>. Когда микс готов на 95%, вы можете думать самых детальных правках неторопливо. Но после постоплаты.</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">КАК ПОДГОТОВИТЬ МУЛЬТИТРЕК?</summary><?php $count = 0 ?>
              <p><?php echo ($count += 1) ?>. Выключить обработку на всех каналах<i>(кроме тех, где эффекты участвуют в формировании принципиального звучания инструмента, например эмуляции комбиков, стерео-тремоляция синтезированных партий и подобное. Эти каналы можно прислать «чистыми» отдельно тоже)</i></p>
              <p><?php echo ($count += 1) ?>. Экспортировать каждый канал по-отдельности в формате 48000 Гц 24 или 32 бита. Моно-дорожки → моно-файлы <i>(желательно, но не обязательно)</i></p>
              <p><?php echo ($count += 1) ?>. Экпортировать проект как midi файл.</p>
              <p><?php echo ($count += 1) ?>. Упаковать получившиеся файлы в архив с именем типа «multitrack name BPM», где name — название композиции, BPM — темп композиции<i>(если темп меняется, указать основной)</i></p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">ЭКСПОРТИРУЕМ МУЛЬТИТРЕК ИЗ LOGIС X</summary>
              <p>— Выставляем маркеры цикла<br/><i>(начало маркера на 1 доле такта)</i><br/>— menu → File → Export → All Tracks as Audio Files<br/><i>(Замьютированные дорожки будут экспортированы.<br/>Замьютированные клипы не будут эспортированы)</i></p>
              <p>В отрывшемся окне:<br/>— поставить галочку Bypass Effect Plug-ins<br/>— normalize →"Overload Protection Only"<br/>— жмем Save</p>
              <p>Экспорт дорожки с эффектами:<br/>— выделяем нужную дорожку<br/>— menu → Files → Export → Track as Audio Files<br/>— галочку Bypass Effect Plug-ins не ставим<br/>— жмем Save</p>
              <p>Экспорт midi:<br/>— menu → Edit → Select → All<br/>— menu → Export → Selection as MIDI File</p>
              <p>— упаковываем получившиеся файлы в архив с именем «Multitrack Name BPM». Name — имя композии. BPM — темп.</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">ЭКСПОРТИРУЕМ МУЛЬТИТРЕК ИЗ STUDIO ONE</summary>
              <p>— Выключаем всю обработку на каналах. Оставляем только там, где она является неотьемлимой частью звука<br/>— Устанавливаем все фейдеры в 0 или меньше, если возникает перегрузка<br/>— Ставим маркеры Start и End в начало и конец песни<br/><i>(маркер Start должен стоять на 1 доле в такте)</i><br/>— menu → Song → Export Stems</p>
              <p>В открывшимся окне:<br/>— Sources → Channels → ставим галочки напротив дорожек<br/><i>(групповые треки и каналы эффектов не отмечаем)</i><br/>— Location → выбираем папку сохранения<br/>— Format → Wave Files/32 bit Float/ 48.0 kHz<br/>— Export Range → Between Song Start/End Marker<br/>— Options → ✓ Preserve mono tracks<br/>— жмем OK</p>
              <p>далее:<br/>— menu → File → Save As…<br/>— тип файла ставим MIDI File<br/>— Сохраняем</p>
              <p>— упаковываем получившиеся файлы в архив с именем «Multitrack Name BPM». Name — имя композии. BPM — темп.</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">ЭКСПОРТИРУЕМ МУЛЬТИТРЕК ИЗ PRO TOOLS</summary>
              <p>— выделяем все треки по всей длине песни<br/><i>(начало выделения на 1 доле в такте)</i><br/>— menu → Edit → Consolidate Clip<br/>— в папке с аудиофайлами копируем последние созданные файлы<br/><i>(они имеют одинаковый размер и дату создания)</i></p>
              <p>Экспорт midi:<br/>— выделяем все midi в проекте<br/>— menu → File → Export → Selection as MIDI File</p>
              <p>— упаковываем получившиеся файлы в архив с именем «Multitrack Name BPM». Name — имя композии. BPM — темп.</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">ЭКСПОРТИРУЕМ МУЛЬТИТРЕК ИЗ CUBASE 5</summary>
              <p>— Выключаем всю обработку на каналах. Оставляем только там, где она является неотьемлимой частью звука<br/>— Устанавливаем все фейдеры в 0 или меньше, если возникает перегрузка<br/>— Ставим маркеры L и R в начало и конец песни<br/><i>(маркер L должен стоять на 1 доле в такте)</i><br/>— menu → File → Export → Audio Mixdown…</p>
              <p>В открывшемся окне:<br/>— Channel Selection →✓Channel Batch Export → отмечаем нужные треки<br/>— File Location → указываем имя и место сохранения<br/>— File Format → Wave File → все галочки снимаем<br/>— Audio Engine Output → 48.000 kHz/32 bit(float) → все галочки снимаем<br/>— Import into Project → все галочки снимаем<br/>— жмем Export</p>
              <p>далее:<br/>— menu → File → Export → MIDI File…<br/>— Сохраняем</p>
              <p>— упаковываем получившиеся файлы в архив с именем «Multitrack Name BPM». Name — имя композии. BPM — темп.</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">ЭКСПОРТИРУЕМ МУЛЬТИТРЕК ИЗ REAPER</summary>
              <p>Экспортировать мультитрек из Reaper для работы со мной не нужно. Просто сохраните проект и пришлите мне его. Отдельно заморозьте всю концептуальную обработку, если она есть. </p>
              <p>Делается это следующим образом:<br/>— выделяем нужные клипы<br/>— menu → Item → Apply track/take FX to items as new take</p>
              <p>или:<br/>— выделяем необходимые дорожки<br/>— menu → Track → Render/freeze tracks → render tracks to mono/stereo stem tracks (and mute originals)</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">Что нужно, чтобы заказать сведение?</summary><?php $count = 0 ?>
              <p><?php echo ($count += 1) ?>. Мультитрек<br/><?php echo ($count += 1) ?>. Текст песни<br/><?php echo ($count += 1) ?>. Комментарии<br/><?php echo ($count += 1) ?>. Референсы (2-4 шт)<br/><?php echo ($count += 1) ?>. Оплата</p>
              <p>на выходе: аудиофайлы плюс, минус<br/><i>(форматы WAV 44100 Гц 16 бит и MP3 320bit)</i></p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">ЧТО ВХОДИТ В УСЛУГУ СВЕДЕНИЯ?</summary>
              <p><i>(полный тариф)</i></p>
              <p>— тюн голосов<br/>— выравнивание ударных<br/>— выравнивание всех инструментов<br/>— любовь к вашему творчеству<br/>— удаление артефактов<br/>— комплексная обработка всех каналов<br/>— внесение правок</p>
              <p>В неполный тариф не входят первые 3 пункта</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">ЧТО НУЖНО, ЧТОБЫ ЗАКАЗАТЬ АРАНЖИРОВКУ?</summary><?php $count = 0 ?>
              <p><?php echo ($count += 1) ?>. Мелодия и гармония<br/><i>(ноты или аудиозапись любого качества)</i><br/><?php echo ($count += 1) ?>. Текст<br/><?php echo ($count += 1) ?>. Определение жанра<br/><?php echo ($count += 1) ?>. Пожелания по форме<br/><i>(хронометраж, последовательность куплетов, припевов, проигрышей и т.д)</i><br/><?php echo ($count += 1) ?>. Вся дополнительная информация<br/><i>(когда день рождения собачки автора 2-й ноты в 5-м такте)</i><br/><?php echo ($count += 1) ?>. Референс (2-4 шт)<br/><?php echo ($count += 1) ?>. Оплата</p>
              <p>на выходе: <br/>— мультитрек<i>(wav 48000 Гц 32 бит)</i><br/>— midi<br/>— демо-микс</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">ЧТО НУЖНО, ЧТОБЫ ЗАКАЗАТЬ МИНУСОВКУ?</summary><?php $count = 0 ?>
              <p><?php echo ($count += 1) ?>. Аудиозапись оригинальной композиции<br/><?php echo ($count += 1) ?>. Комментарии<br/><i>(меняем ли тональность, сокращаем, удлиняем композицию и проч.)</i><br/><?php echo ($count += 1) ?>. Финансирование</p>
              <p>на выходе: аудиофайл минусовки<br/><i>(формат WAV 44100 Гц и MP3 320bit)</i></p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">ЧТО НУЖНО, ЧТО ЗАКАЗАТЬ МУЗЫКУ К ВИДЕО?</summary><?php $count = 0 ?>
              <p><?php echo ($count += 1) ?>. Емкое и исчерпывающее ТЗ<br/><?php echo ($count += 1) ?>. Хронометраж<br/><?php echo ($count += 1) ?>. Ключевые момент по таймингу<br/><?php echo ($count += 1) ?>. Референсы<br/><?php echo ($count += 1) ?>. Комментарии</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">ЧТО ВХОДИТ В УСЛУГУ «ПЕСНЯ ПОД КЛЮЧ»?</summary><?php $count = 0 ?>
              <p><i>(многосоставной модуль)</i></p>
              <p><?php echo ($count += 1) ?>. Аранжировка<br/><?php echo ($count += 1) ?>. Запись голоса на студии (2 часа)<br/><?php echo ($count += 1) ?>. Сведение<br/><?php echo ($count += 1) ?>. Мастеринг</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">КАК ПОЛУЧИТЬ СКИДКУ?</summary>
              <p>— сократить количество правок<br/>— самостоятельно выбрать чистовые дубли<br/>— самостоятельно выровнять партии<br/>— самостоятельно потюнить голос<br/>— внести 100% предоплату<br/>— заказать комплексную услугу<br/><i>(например, «песня под ключ»)</i><br/>— заказать несколько песен<br/>— быть постоянным клиентом<br/>— прислать емкое и исчерпывающее ТЗ<br/>— разрешить использовать проект для скринкастов на моем канале YouTube<br/>— предложить медиаподдержку<br/>— привести нового клиента</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">КАК СДЕЛАТЬ ПЕСНЮ БЕСПЛАТНО?</summary>
              <p>— быть известной медиа-личностью класса А</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">КАК МОЖНО ЗАРАБОТАТЬ?</summary>
              <p>Я отдаю 1000 руб с предоплаты за рекомендацию, обернувшуюся заказом.</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">САМЫЕ «ДОРОГИЕ» ФРАЗЫ</summary>
              <p><i>(увеличение суммы чека)</i></p>
              <p>— «нужно на вчера»<br/>— «мы не стремимся на радио, наш трек больше 4 минут»<br/>— «у нас очень много инструментов»<br/>— «мы тебе скинули все дубли, выбери, пожалуйста»<br/>— «у нас барабаны все в midi, подберешь семплы?»<br/>— «а гитары в линию записаны, накинешь комбик?»<br/>— «надо поискать синты пожирнее»<br/>— «мы писали в дешевой студии с пьяным звукорежиссером»<br/>— «забыли прислать еще одну дорожку»<br/>— «сможешь сыграть пару партий?»<br/>— «я хочу переписать вокал»</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">БЕСПЛАТНЫЕ ФРАЗЫ</summary>
              <p>— «важно, чтобы было очень круто»<br/>— «это очень важно»<br/>— «когда мы станем звездами, тогда…»<br/>— «главное, чтобы вокал было слышно»<br/>— «должно быть мегасуперофигенномощнокачово»</p>
              <p><i>Ваш успех — мой успех. Я всегда вкладываюсь на все 100%</i></p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">КАК ПОДГОТОВИТЬ РЕФЕРЕНСЫ?</summary>
              <p>Референс является необязательным условием, но существенно увеличивает вероятность получения нужного результата.</p>
              <p>Референс — пример готового продукта, который можно использовать для начального представления о задачах, стоящих перед проектом. Этот пример может демонстрировать как отдельные элементы, так и совокупность их.</p>
              <p>Конечный результат не призван копировать референс, если не стоит такая задача.</p>
              <p><strong>неправильно:</strong><br/>— присылать музыку, потому что она «нравится». Смысл референса — наглядность, а не фан<br/>— присылать много разных треков. Польза этого уменьшается обратнопропорционально хаосу в ТЗ.<br/>— предлагать творчество отдельной группы. Практически любая группа экспериментирует со звучанием на протяжении своего творчества. Также меняются стандарты звука, студии звукозаписи и саунд-продюссеры коллектива, состав и т.д. Слишком много вводных. Нужно присылать конкретный трек.</p>
              <p><strong>правильно:</strong><br/>— использовать современные примеры<br/>— использовать близкие жанры<br/>— прикреплять к каждому референсу комментарий, что именно нравится в этом треке.<br/>— присылать референсы «как не надо делать» с соответствующим комментарием<br/>— присылать аудиозапись в личку, а не «послушай у меня на странице в третьем посте снизу»</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">ЗАЧЕМ НУЖЕН ТЕКСТ ПЕСНИ?</summary>
              <p>Напечатанный текст — дополнительной источник идей для реализации смыслов и образов песни. Также он помогает уточнить спорное слово и правильно вызвучить его. Тем более, если песня на иностранном языке.</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">КАК СЛУШАТЬ ПЕРВЫЙ МИКС?</summary>
              <p>Часто встречается ментальная ошибка мышления некоторых артистов, когда они думаю, что после того, как материал был отдан звукорежиссеру больше ни о чем думать не надо и ждут микса как готовой окончательной работы.</p>
              <p>Несмотря на референсы и ТЗ реализация была точна не на 100%, и это было бы очень страшно, если бы … даже не знаю, что. Это совсем не страшно. Ведь в эпоху цифровых DAW можно вернуть к проекту и поправить его. К этому человечество стремилой ввсю цифровую эпоху. Но чувствительные натуры уходят в себя и пропадают на долго, не отвечают на звонки и сообщения. А потом все решается за 15 мин поворотом 3 ручек. Уважаемые музыканты, готовьтесь к тому, что после первого микса есть жизнь правки! В отличие от концерта, где лажу уже не исправить, чем коонцерты и прекрасны.</p>
              <p>Сведение — все еще не конвеерное производство. Можно печатать открытки тиражом 1000 экз, а можно рисовать картины.</p>
              <p>Автор придумал себе свое звучание, а получил обманутые ожидания.</p>
              <p>На самом деле — первый микс — это первый микс. Это не точка, а лишь запятая.</p>
              <p>Бывали случае, когда возражение «это совсем не то, что мы хотели» решалось поворотом 3 ручек за 15 мин.</p>
              <p>А бывали случаи, когда отклики были «вау, супер, это то, что мы хотели», а потом правки «по мелочам» длились дольше, чем вся звукозапись.</p>
              <p>Т.е. авторы сфокусированны на чем-то своем и не замечают проделанной работы в общем. </p>
              <p>Готовьтесь к тому, что первый микс с вероятностью 90% придется допиливать в той или иной степени. И дело тут не в компетенции звукорежиссера, а в логистике работы. </p>
              <p><strong>правильно:</strong></p>
              <p>— не уходить в рассматривание собственных миров, а давать фидбек, пусть даже невнятный. Выходить на общение и не тормозить процесс.</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">ПОЧЕМУ НЕЛЬЗЯ СРАЗУ ПОЛУЧИТЬ ИДЕАЛЬНЫЙ МИКС?</summary>
              <p>На планете Земля много интересных вещей. Но каждый выбирает дело себе по вкусу.</p>
              <p>Песня — это маленький мир, в котором каждый видит свое. Я, звукорежиссер, участвуя в создании этого пространства тщательно выстраиваю баланс между всеми составляющими. </p>
              <p>Правки, комментарии, впечатления артистов помогают сместить мой фокус восприятия и обратить внимание на детали, оставшиеся незамеченными. А также взглянуть на весь микс с точки зрения этих деталей. Т.е. увидеть все на периферии сознания, чтобы попасть напрямую в чувственную сферу, обходя прифронтовую кору головного мозга.</p>
              <p>Помните Доктора Хауса? Ему всегда нужны были участники для мыслительного пинг-понга. Потому что если идею можно сбить или оспорить, то и нечего её думать.</p>
              <p>Накопленная критическая база — самое мощное подспорье для крутого результата. Постоянным клиентам в этом смысле крупно везет.</p>
              <p>Процесс сотворчества интересен и увлекателен. Люблю фидбеки.</p>
              <p>А идеального микса не существует.</p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">ПОЧЕМУ Я НЕ ДЕЛАЮ «КУСОЧЕК» АРАНЖИРОВКИ И СВЕДЕНИЯ?</summary>
              <p>Музыка — искуство, развивающееся во времени. Музыкальная форма определяет в какой части что и как будет работать. Кода может определять вступление. 3 куплет может определять решения 2-го. Количество припевов — модуляцию. Мелодия — темп. Голос — тональность. Манера пения — фактуру и плотность микса. И т.д и т.п.</p>
              <p>Работа над треком происходит комплексно. Часто первоначальные решения абсолютно не работают в окончательном результате. И чтобы сформировать убедительный фрагмент, выражающий весь потенциал материала — необходимо проработать весь материал.</p>
              <p>Чтобы сьесть кусочек торта, нужно приготовить весь торт. Кусочек торта невозможен без целого торта. Тем более, если он слоеный.</p>
              <p>Попробуйте взять только переднюю часть машины и устроить ей тест-драйв. Вряд ли вы уедете вообще куда-либо на этом.</p>
              <p>Нельзя построить дом только с четными квартирами, сдать его в эксплуатацию, а нечетные достроить потом.</p>
              <p>Чтобы понять, как будет выглядеть ваш трек после сведение или аранжировки обратитесь к примерам моих работ:<br/>—<i>в паблике <a href="https://vk.com/sheremet_records">https://vk.com/sheremet_records</a>,<br/>— на сайте<a href="https://ernestsheremet.com/">https://ernestsheremet.com/</a><br/>— в кратком audio showreel ниже</i></p>
              <div class="container audio_showreel2"></div>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">КАК ПРАВИЛЬНО ПУБЛИКОВАТЬ?</summary>
              <p>При официальных релизах считаю хорошим тоном указывать всех людей, учавствовавших в создании нетленки.</p>
              <p>При указании моей персоны ссылки давать на:<br/></p>
              <p>site: <a href="https://ernestsheremet.com/">https://ernestsheremet.com/</a><br/>VK:<a href="https://vk.com/sheremet_records">https://vk.com/sheremet_records</a><br/>instagram:<a href="https://www.instagram.com/sheremet_records/">@sheremet_records</a></p>
            </details>
            <details>
              <summary tabindex="&lt;?php echo ($countTab += 1) ?&gt;">КАК ДОЛГО ХРАНЯТСЯ ПРОЕКТЫ?</summary>
              <p>По завершении сотрудничества результирующие файлы хранятся в облаке пол-года и доступны по ссылке. После этого удаляются.</p>
              <p>Также файлы проекта архивируются на внешний жесткий диск и хранятся там год. После этого удаляются.</p>
              <p>Более длительное хранение и возможность вернуться к проекту через год, два, три и т.д — оплачивается отдельно.</p>
              <p>Так же запрос «мы потеряли мастер-файлы, не мог бы ты прислать нам их» удовлетворяется за финансовое бонусирование.</p>
            </details>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
    <?php get_footer(); ?>
    
  </body>
</html>