<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo get_theme_mod('img_1'); ?>" alt="...">
      <div class="carousel-caption">
          <?php echo get_theme_mod('text_img_1'); ?>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_theme_mod('img_2'); ?>" alt="...">
      <div class="carousel-caption">
          <?php echo get_theme_mod('text_img_2'); ?>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_theme_mod('img_3'); ?>" alt="...">
      <div class="carousel-caption">
          <?php echo get_theme_mod('text_img_3'); ?>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only"><?php __('Anterior', 'Eri_Art'); ?></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only"><?php __('Siguiente, Eri_Art'); ?></span>
  </a>
</div>