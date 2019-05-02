<?php

return [
    'production' => false,
    'baseUrl' => '',
    'event_name' => 'PHPeste',
    'event_ticket' => null,
    'event_location' => 'Recife',
    'event_period' => 'April 17-21, 2019',
    'event_contact_email' => 'contato@phpeste.net',
    'event_facebook' => '',
    'event_twitter' => '',
    'event_instagram' => '',
    'event_vimeo' => '',
    'collections' => [
        'organizers' => [
            'path' => 'organizers',
            'sort' => 'first_name',
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
