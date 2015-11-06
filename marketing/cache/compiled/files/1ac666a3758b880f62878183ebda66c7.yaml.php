<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/config/site.yaml',
    'modified' => 1446241055,
    'data' => [
        'title' => 'NoHassl',
        'author' => [
            'name' => 'Biyers Tech',
            'email' => 'dazmiller@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Woo is a free and responsive theme for **Grav**. Its a port of Woo template by Styleshout.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => [
            '/redirect-test' => '/',
            '/old/(.*)' => '/new/$1'
        ],
        'routes' => [
            '/something/else' => '/blog/sample-3',
            '/new/(.*)' => '/blog/$1'
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'email' => 'your-email@domain.com',
        'description' => 'Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search results) and in your feed.xml site description.',
        'social' => [
            0 => [
                'url' => '#',
                'icon' => 'facebook'
            ],
            1 => [
                'url' => '#',
                'icon' => 'twitter'
            ],
            2 => [
                'url' => '#',
                'icon' => 'google-plus'
            ]
        ],
        'menu' => [
            0 => [
                'text' => 'Features',
                'link' => '#features'
            ],
            1 => [
                'text' => 'Pricing',
                'link' => '#pricing'
            ],
            2 => [
                'text' => 'Screenshots',
                'link' => '#screenshots'
            ],
            3 => [
                'text' => 'Testimonials',
                'link' => '#testimonials'
            ],
            4 => [
                'text' => 'Subscribe',
                'link' => '#subscribe'
            ]
        ],
        'footer' => [
            'text' => 'This is Photoshop\'s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.',
            'address' => [
                'title' => 'COME VISIT',
                'lines' => [
                    0 => [
                        'line' => '1600 Amphitheatre Parkway'
                    ],
                    1 => [
                        'line' => 'Mountain View, CA'
                    ],
                    2 => [
                        'line' => '94043 US'
                    ]
                ]
            ],
            'social_title' => 'Socialize',
            'contact' => [
                'title' => 'CONTACT US',
                'lines' => [
                    0 => [
                        'text' => '647.343.8234',
                        'url' => '#'
                    ],
                    1 => [
                        'text' => '123.456.7890',
                        'url' => '#'
                    ],
                    2 => [
                        'text' => 'someone@woosite.com',
                        'url' => 'mailto:someone@woosite.com'
                    ]
                ]
            ]
        ]
    ]
];
