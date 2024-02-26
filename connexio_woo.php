<?php

require __DIR__ . '/vendor/autoload.php';
use Automattic\WooCommerce\Client;

$url_wordpress = "http://192.168.56.11/wordpress";
$url_wordpress_rest = $url_wordpress . '/index.php';
$woocommerce = new Client(
    $url_wordpress_rest,
    'ck_f5433fe640137160d88384a5cf8d53cb361fe927',
    'cs_7d2ca9f90d6e44668f077bcf6bb19bb9e3f5c4e1',
    [
        'wp_api' => true,
        'query_string_auth' => true,
        'timeout' => 400
    ]
);


/* print("<pre>");
print_r($woocommerce->get('products'));
print("</pre>"); */
?>