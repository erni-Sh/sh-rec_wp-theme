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
      
      <?php if($post) : 
      the_post(); ?>
      
      <div class="section">
        <div class="container header-big-text">
          <div class="twelve columns">
            <div class="title-page-text padding-top-bottom-title">
              <h2><?php the_title(); ?></h2>
              <p><?php the_time('j F Y'); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="section padding-bottom">
        <div class="container">
          <div class="nine columns">
            <?php $link_trumb = get_the_post_thumbnail_url();
            if($link_trumb) : ?>
            <div class="post-trumb img-wrap"><img src="<?php echo $link_trumb; ?>" alt=""/></div><?php endif; ?>
            <div class="post-block">
              <?php 
              $html = str_get_html('<div>' . get_the_content() . '</div>');
              $count = 0;
              foreach($html->find('div',0) -> children() as $block_html) : ?>
              <?php $iframe = str_get_html('<div>' . $block_html . '</div>')->find('iframe', 0); ?>
              <?php $music = str_get_html('<div>' . $block_html . '</div>')->find('music', 0); ?>
              <?php if($iframe) : ?>
              <div class="video-wrapper">
                <figure><?php echo $iframe; ?></figure>
              </div><?php elseif($block_html->hasClass('wp-block-gallery')) : ?>
              <div class="post-block-slider owl-carousel owl-theme"><?php foreach($block_html->find('img') as $img) : ?>
                <div class="item">
                  <?php
                  echo $img; ?>
                </div><?php endforeach; ?>
              </div><?php elseif($music) :
              $band = $music->getAttribute ('band');
              $album = $music->getAttribute ('album'); 
              foreach($music_BD[$band]['albums'] as $key => $albumItem):
              	if($albumItem['albumName'] = $album) :
              $album_BD = $music_BD[$band]['albums'][$key]; ?>
              <div class="post-block-music project-details">
                <div class="listOfSongs" id="<?php echo $album_BD[0]['marker'] . '_songname'; ?>">
                  <?php 
                  $num = '1 isPlayed';
                  for ($i = 1; $i < count($album_BD); $i++) : ?>
                  <div class="<?php echo $num; ?>"><?php echo $album_BD[$i][0]; ?></div><?php 
                  $num = $i + 1;
                  endfor;
                  ?>
                </div>
                <div class="waveform-wrapper" id="<?php echo $album_BD[0]['container']; ?>" data-release-BD="<?php echo $album_BD[0]['name_this_BD']; ?>"></div>
                <div class="transp-bar">
                  <ul><?php if($album_BD[0]['type'] === 'single'): ?>
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/knobempty.png"/></li><?php else: ?>
                    <li id="<?php echo $album_BD[0]['marker'] . '_prev'; ?>"><img src="<?php echo get_template_directory_uri() ?>/img/knobprev_black.png"/></li><?php endif; ?>
                    <li><img id="<?php echo $album_BD[0]['marker'] . '_pause'; ?>" src="<?php echo get_template_directory_uri() ?>/img/knobpause_black.png" style="opacity: 0; position: absolute;"/><img id="<?php echo $album_BD[0]['marker'] . '_play'; ?>" src="<?php echo get_template_directory_uri() ?>/img/knobplay_black.png"/></li><?php if($album_BD[0]['type'] === 'single'): ?>
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/knobempty.png"/></li><?php else: ?>
                    <li id="<?php echo $album_BD[0]['marker'] . '_next'; ?>"><img src="<?php echo get_template_directory_uri() ?>/img/knobnext_black.png"/></li><?php endif; ?>
                  </ul>
                </div>
              </div>
              <div class="clear"></div><?php endif;
              endforeach; ?>
              <?php
              else:
              echo $block_html; ?>
              <?php
              endif;
              endforeach;
              ?>
              <div class="tags-block grey-background">
                
                <?php 
                	$posttags = get_the_tags();
                	if( $posttags ){
                		foreach( $posttags as $tag ){
                ?><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                <?php 
                		}
                	}
                ?>
              </div>
              <div class="clear"></div>
              <form id="ajax-form" name="ajax-form" action="" method="post">
                <label for="name"><span class="error" id="err-name">please enter name</span></label>
                <input id="name" name="name" type="text" placeholder="Имя: *"/>
                <label for="email"><span class="error" id="err-email">please enter e-mail</span><span class="error" id="err-emailvld">e-mail is not a valid format</span></label>
                <input id="email" name="email" type="text" placeholder="E-Mail: *"/>
                <label for="message"></label>
                <textarea id="message" name="message" placeholder="Комментарий"></textarea>
                <div id="button-con">
                  <button class="send_message button button--moema button--text-thick button--text-upper button--size-s" id="send" data-lang="en">Отправить</button>
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
              <input name="search" type="text" placeholder="кто ищет, тот найдет"/>
              <div class="separator-sidebar"></div>
              <h6>Другие посты</h6>
              <div class="link-recents">
                <?php 
                $arg = array(
                	'category' => 2,
                		'showposts' => 6,
                  'orderby' => 'rand',
                  'order'    => 'ASC'
                );
                
                $posts = get_posts($arg);
                if ($posts) :
                foreach ($posts as $other_post) :	
                ?>									<a href="<?php the_permalink($other_post->ID); ?>"><?php echo $other_post->post_title; ?></a><?php 
                	endforeach;
                endif;
                ?>
              </div>
              <div class="separator-sidebar"></div>
              <h6>Последние релизы</h6>
              <div class="lat-pro">
                <?php 
                $arg = array(
                	'category' => 2,
                	'numberposts' => 4,
                	'tag' => 'releases'
                );
                
                $posts = get_posts($arg);
                if ($posts) :
                foreach ($posts as $release_post) :	
                $link_img = get_the_post_thumbnail_url($release_post->ID);
                if($link_img) :
                ?>									<a href="<?php the_permalink($release_post->ID); ?>">
                  <div class="lat-pro-img"><img src="<?php echo $link_img; ?>" alt=""/></div></a><?php 
                endif;
                	endforeach;
                endif;
                ?>
              </div>
              <div class="separator-sidebar"></div>
              <h6>Хэштеги</h6>
              <div class="link-tag">
                
                <?php 
                	$posttags = get_tags();
                	if( $posttags ){
                		foreach( $posttags as $tag ){
                ?><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                <?php 
                		}
                	}
                ?>
              </div>
              <div class="separator-sidebar"></div>
            </div>
          </div>
        </div>
      </div><?php endif; ?>
      <div class="clear"></div>
    </main>
    <?php get_footer(); ?>
    
  </body>
</html>