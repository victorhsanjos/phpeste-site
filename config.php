<?php

return [
    'production' => false,
    'baseUrl' => '',
    'event_name' => 'Confe.',
    'event_location' => 'Vancouver',
    'event_period' => 'April 17-21, 2019',
    'event_contact_email' => 'info@yoursite.com',
    'event_facebook' => '',
    'event_twitter' => '',
    'event_instagram' => '',
    'event_vimeo' => '',
    'collections' => [
        'speakers' => [
            'path' => 'speakers',
            'sort' => 'first_name',
        ]
    ],
    'selected' => function ($page, $section) {
        return $page->getPath() === $section || str_contains($page->getPath(), $section) ? 'active' : '';
    },
];
