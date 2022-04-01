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
    <main class="cd-main-content" id="top">
      <div class="first_background">
        <div class="hero-top">
          <div class="container">
            <div class="twelve columns">
              <div class="owl-carousel owl-theme" id="owl-text-home">
                <div class="item">
                  <h2>Сведение</h2>
                </div>
                <div class="item">
                  <h2>Мастеринг</h2>
                </div>
                <div class="item">
                  <h2>Саунд-дизайн</h2>
                </div>
              </div>
              <p>звукорежиссер Эрнест Шеремет</p>
            </div>
          </div>
          <div class="container">
            <div class="twelve columns">
              <div class="fast_audio_check"><?php fastPlayer($music_BD[fast_audio_check]); ?></div>
            </div>
          </div>
        </div>
      </div>
      <!-- =================== ARTISTs ===========================-->
      <div class="container-1">
        <div class="container header-big-text">
          <div class="twelve columns">
            <div class="title-page-text padding-top-bottom-title">
              <h2 id="artists">АРТИСТЫ</h2>
              <!-- <p>которая вдохновляет</p>-->
              <div class="small-text text-center">При нажатии на изображение откроется карточка исполнителя</div>
            </div>
          </div>
        </div>
        <div class="content">
          <!-- trianglify pattern container-->
          <div class="pattern pattern--hidden"></div>
          <!-- cards-->
          <div class="wrapper">
            <?php 
            $id = 0;
            foreach($music_BD as $greatBand => $band_BD) :
            if($greatBand!= 'fast_audio_check') :
            getArtistCard($greatBand, $band_BD, $id);
            $id++;
            endif;
            endforeach;
            ?>
          </div>
          <!-- /cards-->
        </div>
        <!-- /content-->
      </div>
      <div class="section padding-bottom"><a class="js-scroll" href="#contact">
          <div class="button button--moema button--text-thick button--text-upper button--size-s">заказать сведение<br/>моей песни</div></a></div>
      <div class="audio-showreel black-background">
        <div class="audio-showreel-wrapper">
          <div class="container header-big-text">
            <div class="title-page-text padding-top-bottom-title">
              <h2>AUDIO SHOWREEL</h2>
              <p>от киностудии ALTAMONTE</p>
            </div>
            <div class="twelve columns">
              <div class="video-wrapper">
                <figure class="vimeo"><a href="https://player.vimeo.com/video/574645019"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/audioshowreel.jpg" alt="image"/></a></figure>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================= СТОИМОСТЬ ======================================-->
      <div class="clear"></div>
      <div class="section">
        <div class="container header-big-text">
          <div class="twelve columns">
            <div class="title-page-text padding-top-bottom-title">
              <h2 id="price">Стоимость</h2>
              <!-- <p>Ценностность</p>-->
            </div>
          </div>
        </div>
        <div class="container">
          <div class="seven columns">
            <div class="img-wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/price/mixer.jpg" alt=""/></div>
          </div>
          <div class="five columns">
            <div class="project-details">
              <h5>Сведение</h5>
              <p>&#9679; Мультиканальное аудио-микширование</p>
              <p>&#9679; Тюнинг и выравнивание включены</p>
              <p>&#9679; Аранжировка и дозапись не включены</p>
              <p>&#9679; Опция пред-мастеринга</p>
              <p>&#9679; Стоимость может измениться в любую сторону в зависимости от сложности проекта </p>
              <p>&#9679; Формат аудио-файлов: 48000Гц и выше, 24/32 бита</p><a href="#contact">
                <div class="button button--moema button--text-thick button--text-upper button--size-s">узнать стоимость</div></a>
              <!-- <p style="float: right;"><span>12 000</span> руб</p>-->
            </div>
          </div>
          <div class="crear"></div>
          <div class="seven columns">
            <div class="img-wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/price/vinyl.jpg" alt=""/></div>
          </div>
          <div class="five columns">
            <div class="project-details">
              <h5>МАСТЕРИНГ</h5>
              <p>&#9679; Финализация релиза</p>
              <p>&#9679; Мастеринг стерео-файлов</p>
              <!-- <p style="float: right;"><span>1 500</span> руб/трек</p><br>-->
              <p>&#9679; Стем-мастеринг</p>
              <!-- <p style="float: right;"><span>3 000</span> руб/трек</p><br>-->
              <p>&#9679; Формат аудио-файлов: 48000Гц и выше, 32 бита</p><a href="#contact">
                <div class="button button--moema button--text-thick button--text-upper button--size-s">узнать стоимость</div></a>
            </div>
          </div>
          <div class="crear"></div>
          <div class="seven columns">
            <div class="img-wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/price/notes.jpg" alt=""/></div>
          </div>
          <div class="five columns">
            <div class="project-details">
              <h5>КОНСУЛЬТАЦИЯ</h5>
              <p>&#9679; Консультация по аранжировке (логика музыкальной формы, тембральные характеристики инструментов, нюансы исполнения, корректность сэмплов, соответсвие жанру и прочее)</p><br/>
              <p>&#9679; Консультация по сведению (проработанность пространства, ошибки детализации, баланса, проблемы частотного спектра и др.)</p>
              <!-- <p style="float: right;"><span>1 000</span> руб/трек</p>--><a href="#contact">
                <div class="button button--moema button--text-thick button--text-upper button--size-s">узнать стоимость</div></a>
            </div>
          </div>
          <div class="crear"></div>
          <div class="seven columns">
            <div class="img-wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/price/studio.jpg" alt=""/></div>
          </div>
          <div class="five columns">
            <div class="project-details">
              <h5>ИНДИВИДУАЛЬНОЕ ЗАНЯТИЕ</h5>
              <p>&#9679; Индивидуальное online или offline занятие по звукозаписи, сведению, обработке</p>
              <!-- <p>&#9679; Проводится по форме "вопрос-ответ"</p>-->
              <p>&#9679; Разрешена аудио и видео запись для личного использования</p>
              <!-- <p style="float: right;"><span>1 000</span> руб/час</p>--><a href="#contact">
                <div class="button button--moema button--text-thick button--text-upper button--size-s">узнать стоимость</div></a>
            </div>
          </div>
        </div>
      </div>
      <div class="section padding-top-bottom-smaller black-background">
        <div class="container">
          <div class="twelve columns">
            <div class="owl-carousel owl-theme" id="owl-logo">
              <div class="about-box">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/musicInstr/019-electric guitar.png" height="50px" alt=""/></div>
                <h6>Rock</h6>
                <p>Dругой Ветер</p>
              </div>
              <div class="about-box">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/musicInstr/021-flute.png" height="50px" alt=""/></div>
                <h6>folk</h6>
                <p>Камерный оркестр Карелия</p>
              </div>
              <div class="about-box">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/musicInstr/009-cello.png" height="50px" alt=""/></div>
                <h6>Psyhobylli</h6>
                <p>MEANTRAITORS</p>
              </div>
              <div class="about-box">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/musicInstr/016-drum set.png" height="50px" alt=""/></div>
                <h6>Metal</h6>
                <p>CORRODED REALMS</p>
              </div>
              <div class="about-box">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/musicInstr/014-dj controller.png" height="50px" alt=""/></div>
                <h6>Electronic</h6>
                <p>erni_Sh</p>
              </div>
              <div class="about-box">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/musicInstr/035-microphone.png" height="50px" alt=""/></div>
                <h6>Singer-Songwriter</h6>
                <p>Стас Тихо</p>
              </div>
              <div class="about-box">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/musicInstr/026-guitar.png" height="50px" alt=""/></div>
                <h6>Acoustick</h6>
                <p>Лева Сазонов</p>
              </div>
              <div class="about-box">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/img/musicInstr/042-piano.png" height="50px" alt=""/></div>
                <h6>Melancholic rock</h6>
                <p>KEIPA</p>
              </div>
              <!--
              <div class="item">
              <img src!="<?php echo get_template_directory_uri(); ?>/img/logos/1.png" alt="">
              </div>
              
              -->
            </div>
          </div>
        </div>
      </div>
      <!-- ======================= ABOUT ME ===================================-->
      <div class="clear"></div>
      <div class="section">
        <div class="container header-big-text">
          <div class="twelve columns">
            <div class="title-page-text padding-top-bottom-title">
              <h2 id="aboutme">ОБО МНЕ</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="section">
        <div class="container">
          <div class="seven columns">
            <div class="owl-carousel owl-theme" id="owl-image-slider">
              <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/me/about5.jpg" alt=""/></div>
              <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/me/about3.jpg" alt=""/></div>
              <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/me/about4.jpg" alt=""/></div>
              <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/me/erni_Sh 3.jpg" alt=""/></div>
            </div>
          </div>
          <div class="five columns">
            <div class="small-text">
              <p>Эрнест Шеремет / erni_Sh  - профессиональный звукорежиссер, саунддизайнер из Санкт-Петербурга</p><br/>
              <p>&#9679; рожден на Казантипе в 1985 году</p><br/>
              <p>&#9679; прошел огонь, воду и консерваторию</p><br/>
              <p>&#9679; исследует звуковые переплетения в студии звукозаписи Сергея Наветного(экс-СПЛИН) ИНТЕРЗВУК (Санкт-Петербург). Записывал таких артистов как Александр Воронов(TequilaJazzz, Ноль), Андрей Кандаков, Валерий Белинов, Антон Давидянц, Аркадий Корнев</p><br/>
              <p>&#9679; сейчас анализирует химические реакции гармоний в собственной звуковой лаборатории на платформе HIBOLL STUDIO(Санкт-Петербург). Подробнее на странице <a href="#music">МУЗЫКА</a></p><br/>
              <p>&#9679; продолжает находиться в самом тесном творческом переплетении с Камерным Оркестром Карелия и развивает свой собственный музыкальный проект erni_Sh</p><br/>
              <p>&#9679; занимается разработкой автоматических музыкальных сервисов</p><br/>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <!-- ============== VK Coments ==========================-->
      <div class="section padding-top-bottom-small">
        <div class="container header-big-text">
          <div class="twelve columns">
            <div class="title-page-text padding-top-bottom-title">
              <h2 id="feedback">Отзывы</h2>
              <!-- <p>Ценностность</p>-->
            </div>
          </div>
        </div>
        <div class="twelve columns">
          <div class="container">
            <div id="vk_comments"></div>
          </div>
        </div>
      </div>
      <!-- =====================================-->
      <div class="clear"></div>
      <div class="section padding-top-bottom-small black-background">
        <div class="container">
          <div class="four columns">
            <div class="contact-block">
              <div class="text">
                <h6>Звони:</h6>
                <p><span>&#xf095;</span><a href="tel:+79633062201">+7(963)306-22-01</a></p>
              </div>
            </div>
          </div>
          <div class="four columns">
            <div class="contact-block">
              <div class="text">
                <h6>Приходи:</h6>
                <p><span>&#xf041;</span>Санкт-Петербург, наб.Черной речки 41В</p>
              </div>
            </div>
          </div>
          <div class="four columns">
            <div class="contact-block">
              <div class="text">
                <h6>Пиши:</h6>
                <p><span>&#xf0e0;</span><a href="mailto:ernest22@mail.ru?subject=Нужен звукорежиссер">ernest22@mail.ru</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <!-- =========================== ОБРАТНАЯ СВЯЗЬ ========================================-->
      <div class="clear"></div>
      <div class="section">
        <div class="container header-big-text">
          <div class="twelve columns">
            <div class="title-page-text padding-top-bottom-title">
              <h2 id="contact">Заполни форму</h2>
              <p>Я отвечу в течение 24 часов</p>
              <div class="small-text" style="text-align: center;"><br/>(Я не занимаюсь рассылкой спама!)</div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
        <div class="section padding-bottom">
          <div class="container">
            <form id="ajax-form" name="ajax-form" action="mail-it1.php" method="post">
              <div class="three columns"></div>
              <div class="six columns">
                <label for="name"><span class="error" id="err-name">Напиши свое имя</span></label>
                <input id="name" name="name" type="text" placeholder="Имя: *"/>
              </div>
              <div class="clear"></div>
              <div class="three columns"></div>
              <div class="six columns">
                <label for="email"><span class="error" id="err-email">Напиши свою почту</span><span class="error" id="err-emailvld">неправильный формат почты</span></label>
                <input id="email" name="email" type="text" placeholder="Почта: *"/>
              </div>
              <div class="clear"></div>
              <div class="three columns"></div>
              <div class="six columns">
                <label for="message"></label>
                <input id="message" name="message" placeholder="Телефон"/>
              </div>
              <div class="clear"></div>
              <div class="three columns"></div>
              <div class="six columns">
                <div id="button-con">
                  <button class="send_message button button--moema button--text-thick button--text-upper button--size-s" id="send" data-lang="en" onclick="ym(57382957, 'reachGoal', 'TARGET_FillForm); return true;">Отправить</button>
                </div>
              </div>
              <div class="clear"></div>
              <div class="error text-align-center" id="err-form">Тут есть какая-то ошибка. Проверьте, пожалуйста!</div>
              <div class="error text-align-center" id="err-timedout">Время подключения к серверу истекло!</div>
              <div class="error" id="err-state"></div>
            </form>
            <div class="clear"></div>
            <div id="ajaxsuccess" style="text-align: center;">Успешно отправлено!!!</div>
            <div class="clear"></div>
          </div>
        </div>
        <!-- ====================================================-->
      </div>
    </main>
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?167"></script>
    <script type="text/javascript">
      VK.init({apiId: 2759661, onlyWidgets: true});
      VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
    </script>
    <?php get_footer(); ?>
    
  </body>
</html>