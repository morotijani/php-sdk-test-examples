<?php

use Api\Client\ClientBuilder;
use Api\Client\Options;
use Api\Client\Sdk;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;

require_once __DIR__ . '/../vendor/autoload.php';


$clientBuilder = new ClientBuilder();
$clientBuilder->addPlugin(new HeaderDefaultsPlugin([
    'Accept' => 'application/json',
]));

$options = new Options([
    'client_builder' => $clientBuilder,
]);

$sdk = new Sdk($options);

// All Posts
$id = 4;
$response = $sdk->todos()->getPost($id);
$sdk->dnd($response);