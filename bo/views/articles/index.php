<div class="row">
<?php $col = 0; foreach($articles as $article): ?>

<div  class="col-sm-4">
    <h2 class="bg-primary p-3"><a href="/articles/lire/<?= $article['slug'] ?>" class="text-light"><?= $article['titre'] ?></a></h2>

    <p><?= substr($article['contenu'],0,30)."..." ?></p>
</div>
<?php 
$col++;
if($col%3==0) {
?>
</div>
<div class="row">
<?php
}
endforeach ?>
</div>