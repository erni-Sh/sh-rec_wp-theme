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
    <main class="cd-main-content">
      <div class="section">
        <div class="container header-big-text">
          <div class="twelve columns">
            <div class="title-page-text padding-top-bottom-title">
              <h2>БЛОГ</h2>
              <p>все последние новости!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="section padding-bottom">
        <div class="container">
          <div class="twelve columns">
            <div id="blog-filter">
              <ul id="filter">
                <li><a class="current" href="#" data-filter="*" title="">все</a></li>
                <li><a href="#" data-filter=".release" title="">релизы</a></li>
                <li><a href="#" data-filter=".gallery" title="">галерея</a></li>
                <li><a href="#" data-filter=".video" title="">видео</a></li>
                <li><a href="#" data-filter=".quote" title="">цитаты</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="clear"></div>
        <div id="blog-grid">
          
          <?php get_new_cards(2); ?>
          
        </div>
      </div>
      <div class="clear"></div>
    </main>
    <?php get_footer(); ?>
    
  </body>
</html>