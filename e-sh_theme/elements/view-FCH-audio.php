
<div class="waveform-wrapper" id="<?php echo $database[0]['container']; ?>" data-release-bd="<?php echo $database[0]['way_to_BD']; ?>"></div>
<div class="transp-bar">
  <ul><?php if($database[0]['type'] === 'single'): ?>
    <li><img src="<?php echo get_template_directory_uri(); ?>/img/knobempty.png"/></li><?php else: ?>
    <li id="<?php echo $database[0]['marker'] . '_prev'; ?>"><img src="<?php echo get_template_directory_uri() . '/img/knobprev_' . $database[0]['knobs'] . '.png'; ?>"/></li><?php endif; ?>
    <li><img id="<?php echo $database[0]['marker'] . '_pause'; ?>" src="<?php echo get_template_directory_uri() . '/img/knobpause_' . $database[0]['knobs'] . '.png'; ?>" style="opacity: 0; position: absolute;"/><img id="<?php echo $database[0]['marker'] . '_play'; ?>" src="<?php echo get_template_directory_uri() . '/img/knobplay_' . $database[0]['knobs'] . '.png ';?>"/></li><?php if($database[0]['type'] === 'single'): ?>
    <li><img src="<?php echo get_template_directory_uri(); ?>/img/knobempty.png"/></li><?php else: ?>
    <li id="<?php echo $database[0]['marker'] . '_next'; ?>"><img src="<?php echo get_template_directory_uri() . '/img/knobnext_' . $database[0]['knobs'] . '.png'; ?>"/></li><?php endif; ?>
  </ul>
</div>
<div id="<?php echo $database[0]['marker'] . '_songname'; ?>">
  <?php 
  $num = '1 isPlayed';
  for ($i = 1; $i < count($database); $i++) : ?><span class="<?php echo $num; ?>"><?php echo $database[$i][0]; ?></span><?php 
  $num = $i + 1;
  endfor;
  ?>
</div>