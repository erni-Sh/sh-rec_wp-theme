<?php if($album_BD[0]['cover']) : ?>
<div class="six columns">
  <div class="img-wrap"><img src="<?php echo $album_BD[0]['cover']; ?>" alt=""/></div>
</div><?php endif; ?>			
<div class="six columns">
  <div class="project-details">
    <h5><?php echo $album_BD[0]['albumName']; ?></h5>
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
    <p></p>
    <p><strong>release:</strong><?php echo $album_BD[0]['date']; ?></p>
    <p><strong>studio:</strong><?php echo $album_BD[0]['studio']; ?></p>
  </div>
</div>
<div class="clear"></div>