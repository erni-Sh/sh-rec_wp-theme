
<?php $html = str_get_html(get_the_content());
$iframe = $html->find('iframe', 0);
$gallery = $html->find('.wp-block-gallery', 0);
if(has_tag('releases')) $filter_class = 'release';
if($iframe) $filter_class = 'video';
if($gallery) $filter_class = 'gallery';
?>
<div class="blog-box-1 black-background <?php echo $filter_class; ?>">
  
  <?php $link = get_the_permalink(); ?>
  
  <div class="date">
    <p>
      <?php 
      $date = explode(' ', get_the_time('j M Y')); ?>
       <span><?php echo $date[0]; ?>/</span><?php echo mb_strtolower($date[1]); ?>.<?php echo $date[2]; ?><em><?php the_author(); ?></em>
    </p>
  </div><?php if($iframe) : ?>
  <div class="video-wrapper">
    <figure><?php echo $iframe ?></figure>
  </div><?php elseif($gallery) : ?>
  <div class="blog-card-slider owl-carousel owl-theme"><?php foreach($gallery->find('img') as $img) : ?>
    <div class="item">
      <?php
      echo $img; ?>
    </div><?php endforeach; ?>
  </div>
  <?php
  else :
  $link_trumb = get_the_post_thumbnail_url();
  if($link_trumb) : ?><a class="animsition-link" href="<?php echo $link; ?>"><img src="<?php echo $link_trumb; ?>" alt=""/></a><?php endif; ?>
  <?php endif; ?><a class="animsition-link" href="<?php echo $link; ?>">
    <h6><?php the_title(); ?></h6></a>
  <div class="p-box">
    <p><?php the_excerpt(); ?></p>
  </div><a class="animsition-link blog-link chaffle" href="<?php echo $link; ?>" data-lang="ru">читать</a>
</div>