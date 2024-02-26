<?php

require __DIR__ . '/vendor/autoload.php';
use Automattic\WooCommerce\Client;

$url_wordpress = "http://192.168.56.11/wordpress";
$url_wordpress_rest = $url_wordpress . '/index.php';
$woocommerce = new Client(
    $url_wordpress_rest,
    'ck_4257aee91c2b6cb0fe85fe9ecaa5ec79ab9d9e67',
    'cs_479318bf84c49b236f7727838d18394d81aae095',
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