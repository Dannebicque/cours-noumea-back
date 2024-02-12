<div id="demo" class="carousel slide h-75" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
  <?php $premier = true; $index = 0; foreach($carousels as $carousel): ?>
    <li data-target="#demo" data-slide-to="<?= $index++ ?>" class="<?= ($premier?'active':'') ?>"></li>
    <?php
    $premier=false;
    endforeach ?>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
<?php $premier = true; foreach($carousels as $carousel): ?>
    <div class="carousel-item <?php if($premier) echo 'active';?>">
      <img src="<?= $carousel['lien'] ?>" alt="<?= $carousel['alt'] ?>"/>
      <div class="carousel-caption">
        <p class="bg-dark"><?= $carousel['description'] ?></p>
      </div>
    </div>
<?php
$premier=false;
endforeach ?>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
