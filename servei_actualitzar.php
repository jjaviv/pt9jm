<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
echo '<form method="POST"><div class="row" style="margin-bottom:4px;">;
echo '<div class="col-md-1 form-group" ><input class="form-control" id="id" name="id" value="'.$post->id.'" readonly type="text"></div>';

echo <div class="col-md-1 form-group" ><input class="form-control" img-responsive" name="src_image" src="'.$src_image.'" style="width:4vw;" type="image"></div>';
echo <div class="col-md-1 form-group" ><input class="form-control"
echo '<div class="col-md-4 form-group"><input class="form-control" name="short_description" value="'.strip_tags($post->short_description).'"  type="text"></div>';
echo '<div class="col-md-1 form-group"><button class="btn center" formaction="seevei_actualitzar_id.php"><i class="bi bi-arrow-clockwise"></i></button></div>';
echo "</form></div>";
?>   
</body>
</html>
