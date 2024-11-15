<?php

return [
    'api_id' => env('SENDEO_API_ID', ''),
    'api_password' => env('SENDEO_API_PASSWORD', ''),
    'api_url' => env('SENDEO_API_URL', 'https://api-dev.sendeo.com.tr'),
    'api_test_url' => env('SENDEO_API_TEST_URL', 'https://api-dev.sendeo.com.tr'),
    'test_mode' => env('SENDEO_TEST_MODE', true),
];
