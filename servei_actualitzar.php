<?php include('connexio_woo.php'); ?>
<?php include('header.php'); ?><!-- EL Menú està en el header -->
<?php

foreach ($woocommerce->get('products') as $post) {
    echo '<form method="POST"><div class="row" style="margin-bottom:4px;">';
    echo '<div class="col-md-1 form-group" ><input class="form-control" id="id" name="id" value="' . $post->id . '" readonly type="text"></div>';
    echo '<div class="col-md-1 form-group" ><input class="form-control" img-responsive" name="src_image" src="' . $post->images[0]->src . '" style="width:4vw;" type="image"></div>';
    echo '<div class="col-md-4 form-group"><input class="form-control" name="short_description" value="' . strip_tags($post->short_description) . '"  type="text"></div>';
    echo '<div class="col-md-1 form-group"><button class="btn center" formaction="servei_actualitzar_id.php"><i class="bi bi-arrow-clockwise"></i></button></div>';
    echo "</div></form>";
}

include('footer.php') ?>