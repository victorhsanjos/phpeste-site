<?php

return [
    'production' => false,
    'baseUrl' => '',
    'event_name' => 'PHPeste',
    'event_ticket' => 'https://loja.phpeste.net/phpeste-2019',
    'event_location' => 'Uninabuco - Recife/PE',
    'event_period' => '19 e 20 de outubro',
    'event_contact_email' => 'contato@phpeste.net',
    'submit_link_lecture' => 'https://speakerfight.com/events/call4papers-phpeste-2019-recifepe/',
    'event_facebook' => 'https://www.facebook.com/events/328835701143838/',
    'event_twitter' => 'https://twitter.com/phpestene',
    'event_instagram' => '',
    'event_vimeo' => '',
    'categories' => [
        'diamond' => [
            'description' => 'Diamante',
        ],
        'gold' => [
            'description' => 'Ouro',
        ],
        'silver' => [
            'description' => 'Prata',
        ],
        'bronze' => [
            'description' => 'Bronze',
        ],
        'support' => [
            'description' => 'Apoio',
        ],
    ],
    'collections' => [
        'organizers' => [
            'path' => 'organizers',
            'sort' => 'first_name',
        ],
        'sponsors' => [
            'path' => 'sponsors',
            'sort' => 'name',
        ],
        'speakers' => [
            'path' => 'speakers',
            'sort' => 'first_name',
        ]
    ],
    'selected' => function ($page, $section) {
        return $page->getPath() === $section || str_contains($page->getPath(), $section) ? 'active' : '';
    },
];
