<?php
return [
    'IP2LocationAPIKey'   => env('IP_2_LOCATION_API_KEY', 'your_api_key'), // Required. Your IP2Location API key.
    'IP2LocationPackage'  => 'WS1', // Required. Choose the package you would like to use.
    'IP2LocationUsessl'   => false, // Optional. Use https or http.
    'IP2LocationAddons'   => [], // Optional. Refer to https://www.ip2location.com/web-service/ip2location for the list of available addons.
    'IP2LocationLanguage' => 'zh-tw', // Optional. Refer to https://www.ip2location.com/web-service/ip2location for available languages.
];
