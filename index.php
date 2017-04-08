<?php

require_once 'src/Requesty.php';

use Wattanar\Requesty;

$response = Requesty::post('http://example.com/api/v1/user/save', ['foo' => 'bar']);

echo '<pre>' . print_r($response, true) . '</pre>';