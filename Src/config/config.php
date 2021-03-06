<?php
declare(strict_types=1);

$domainName = 'boutiquecommerce.org';

return [

    'businessName' => 'Boutique Commerce',

    'domainName' => $domainName,

    'hostName' => $domainName,

    'domainUseWww' => false,

    'session' => [
        'ttlHours' => 24,
        'savePath' => APP_ROOT . '../storage/sessions',
    ],

    'storage' => [
        'logs' => [
            'pathPhpErrors' => APP_ROOT . '../storage/logs/phpErrors.log',
            'pathEvents' => APP_ROOT . '../storage/logs/events.log'
        ],

        'pathCache' => APP_ROOT . '../storage/cache/'
    ],

    'pathTemplates' => APP_ROOT . 'templates/',

    'errors' => [
        'emailTo' => ['owner', 'programmer'], // emails must be set in 'emails' section
        'fatalMessage' => 'Apologies, there has been an error on our site. We have been alerted and will correct it as soon as possible.',
        'echoDev' => true, // echo on dev servers (note, live server will never echo)
        'emailDev' => false // email on dev servers (note, live server will always email)
    ],

    'emails' => [
        'owner' => "owner@$domainName",
        'programmer' => "programmer@$domainName",
        'service' => "service@$domainName"
    ],

    'adminMinimumPermissions' => [
        'admins.index' => 'store',
        'admins.insert' => 'director',
        'admins.update' => 'director',
        'admins.delete' => 'director',
        'testimonials.index' => 'admin',
        'testimonials.insert' => 'admin',
        'testimonials.update' => 'admin',
        'testimonials.delete' => 'admin',
        'adCodes.index' => 'manager',
        'adCodes.insert' => 'manager',
        'adCodes.update' => 'manager',
        'adCodes.delete' => 'manager',
        'orders.index' => 'admin',
        'order.show' => 'admin',
    ],

    'maxFailedLogins' => 5
];
