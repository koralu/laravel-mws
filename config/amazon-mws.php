<?php

return [
    'store' => [
        'store1' => [
            'merchantId' => $_ENV['MWS_MERCHANT_ID'],
            'marketplaceId' => $_ENV['MWS_MARKETPLACE_ID'],
            'keyId' => $_ENV['MWS_KEY_ID'],
            'secretKey' => $_ENV['MWS_SECRET_KEY'],
            'authToken' => '',
            'amazonServiceUrl' => 'https://mws.amazonservices.com/',
            /** Optional settings for SOCKS5 proxy
             *
            'proxy_info' => [
            'ip' => '127.0.0.1',
            'port' => 8080,
            'user_pwd' => 'user:password',
            ],
             */
        ]
    ],

    // Default service URL
    'AMAZON_SERVICE_URL' => 'https://mws.amazonservices.com/',

    'muteLog' => false
];
