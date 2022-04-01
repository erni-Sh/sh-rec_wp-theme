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
              <h2>Moments From A Life</h2>
              <p>05.apr.2015. - John Doe</p>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="section padding-bottom">
        <div class="container">
          <div class="nine columns">
            <div class="img-wrap"><img src="images/blog/2.jpg" alt=""/></div>
            <div class="post-block">
              <p>Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus. Praesent sed nisi eleifend, fermentum orci amet, iaculis ultricies purus. Praesent sed nisi eleifend, fermentum orci amet, iaculis ultricies purus. Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus.</p>
              <p>Praesent sed nisi eleifend, fermentum orci amet, iaculis ultricies purus. Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus.</p>
              <p>Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus. Praesent sed nisi eleifend, fermentum orci amet, iaculis ultricies purus.</p>
              <div class="tags-block grey-background"><a href="#">image</a><a href="#">video</a><a href="#">audio</a><a href="#">photo</a><a class="autor-link" href="#">John Doe</a></div>
              <div class="clear"></div>
              <form id="ajax-form" name="ajax-form" action="" method="post">
                <label for="name"><span class="error" id="err-name">please enter name</span></label>
                <input id="name" name="name" type="text" placeholder="Your Name: *"/>
                <label for="email"><span class="error" id="err-email">please enter e-mail</span><span class="error" id="err-emailvld">e-mail is not a valid format</span></label>
                <input id="email" name="email" type="text" placeholder="E-Mail: *"/>
                <label for="message"></label>
                <textarea id="message" name="message" placeholder="Comment"></textarea>
                <div id="button-con">
                  <button class="send_message button button--moema button--text-thick button--text-upper button--size-s" id="send" data-lang="en">submit</button>
                </div>
                <div class="clear"></div>
                <div class="error text-align-center" id="err-form">There was a problem validating the form please check!</div>
                <div class="error text-align-center" id="err-timedout">The connection to the server timed out!</div>
                <div class="error" id="err-state"></div>
              </form>
              <div class="clear"></div>
              <div id="ajaxsuccess">Successfully sent!!</div>
              <div class="clear"></div>
            </div>
          </div>
          <div class="three columns">
            <div class="post-sidebar">
              <input name="search" type="text" placeholder="To search type and hit enter"/>
              <div class="separator-sidebar"></div>
              <h6>Recent Posts</h6>
              <div class="link-recents"><a href="#">Quisque rutrum.</a><a href="#">Fringilla vel, aliquet nec.</a><a href="#">Ligula leo, porttitor eu.</a><a href="#">Aenean imperdiet.</a><a href="#">Nulla consequat massa.</a><a href="#">Vivamus elementum semper.</a></div>
              <div class="separator-sidebar"></div>
              <h6>Latest Projects</h6>
              <div class="lat-pro"><a href="#">
                  <div class="lat-pro-img"><img src="images/portfolio/a1.jpg" alt=""/></div></a><a href="#">
                  <div class="lat-pro-img"><img src="images/portfolio/a2.jpg" alt=""/></div></a><a href="#">
                  <div class="lat-pro-img"><img src="images/portfolio/b1.jpg" alt=""/></div></a><a href="#">
                  <div class="lat-pro-img"><img src="images/portfolio/b2.jpg" alt=""/></div></a></div>
              <div class="separator-sidebar"></div>
              <h6>Latest Video</h6>
              <iframe src="http://player.vimeo.com/video/96696089?title=0&amp;amp;byline=0&amp;amp;portrait=0&amp;amp;color=cfa144" width="940" height="450"></iframe>
              <div class="separator-sidebar"></div>
              <h6>Tags</h6>
              <div class="link-tag"><a href="#">Analysis</a><a href="#">Art</a><a href="#">Articles</a><a href="#">Audio</a><a href="#">Business</a><a href="#">Culture</a><a href="#">Development</a><a href="#">Ecology</a><a href="#">Events</a><a href="#">Information</a><a href="#">Inspiration</a><a href="#">Nature</a><a href="#">Opportunities</a><a href="#">Science</a><a href="#">Trends</a><a href="#">Video</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </main>
    <?php get_footer(); ?>
    
  </body>
</html>