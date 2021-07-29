<?php

declare(strict_types=1);

$container->loadFromExtension('sylius_ui', [
    'events' => [
        'sylius.shop.layout.after_body'     => [
            'blocks' => ['cookie' => [
                'template' => '@BlackSyliusCookieAlertPlugin/_cookieAlert.html.twig'

            ]],
        ]
    ],
]);
