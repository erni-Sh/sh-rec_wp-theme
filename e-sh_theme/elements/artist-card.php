
<div class="card">
  <div class="card__container card__container--closed"><a href="<?php echo '#' . $band_name; ?>" data-id="<?php echo $id; ?>">
      <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
        <defs>
          <clippath id="<?php echo $band_BD[bandDiv]; ?>">
            <circle class="clip" cx="960" cy="250" r="992"></circle>
          </clippath>
        </defs>
        <image clip-path="url(#<?php echo $band_BD[bandDiv]; ?>)" width="1920" height="600" xlink:href="<?php echo $band_BD[foto]; ?>"></image>
      </svg></a>
    <div class="card__content"><a href="#"><i class="card__btn-close fa fa-times"></i></a>
      <div class="card__caption">
        <h2 class="card__title"><?php echo $band_BD[bandName]; ?></h2>
        <p class="card__subtitle"><?php echo $band_BD[genre]; ?></p>
      </div>
      <div class="card__copy">
        <div class="container <?php echo $band_BD[bandDiv]; ?>"><?php echo $band_BD[description]; ?><br/><?php 
          	foreach($band_BD[albums] as $album_BD) {
          		getMusicAlbum($album_BD);
          	};
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="section padding-bottom"></div>
</div>