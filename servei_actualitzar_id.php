<?php
$data = [
    'regular_price' => '24.54'
];

print_r($woocommerce->put('products/794', $data));
?>