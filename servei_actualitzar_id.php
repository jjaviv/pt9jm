<?php
include('connexio_woo.php'); 
$id=$_POST['id'];

$short_description=$_POST['short_description'];
$data = [
    'short_description' => $short_description,
];

print_r($woocommerce->put('products/'.$id, $data));
?>