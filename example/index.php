<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Celitech\Client;

$sdk = new Client();

$response = $sdk->Destinations->listDestinations();

print_r($response);
