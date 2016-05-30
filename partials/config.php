<?php

$config = array(
    // Title
    'title' => 'WWM',

    // Meta
    'meta' => array(
        'desc' => ''
    ),

    // Navigation
    'nav' => array(
        'news' => array(
            'name' => 'News',
            'href' => 'news.php',
            'class' => 'parent-list',

            'sub_menu' => array(
                'hip_hop' => array(
                    'name' => 'Hip Hop',
                    'class' => '',
                    'href' => 'news.php?genre=hip_hop',
                ),
                'rb' => array(
                    'name' => 'R&B',
                    'class' => '',
                    'href' => 'news.php?genre=rb',
                ),
                'pop' => array(
                    'name' => 'Pop',
                    'class' => '',
                    'href' => 'news.php?genre=pop',
                ),
                'rock' => array(
                    'name' => 'Rock',
                    'class' => '',
                    'href' => 'news.php?genre=rock',
                ),
                'punk' => array(
                    'name' => 'Punk',
                    'class' => '',
                    'href' => 'news.php?genre=punk',
                ),
                'reggae' => array(
                    'name' => 'Reggae',
                    'class' => '',
                    'href' => 'news.php?genre=reggae',
                ),
                'dance' => array(
                    'name' => 'Dance',
                    'class' => '',
                    'href' => 'news.php?genre=dance',
                )
            )
        ),
        'hot_songs' => array(
            'name' => 'Hot Songs',
            'class' => '',
            'href' => 'hotsongs.php',
            'sub_menu' => array()
        ),
        'charts' => array(
            'name' => 'Charts',
            'class' => '',
            'href' => 'charts.php',
            'sub_menu' => array()
        ),
        'features' => array(
            'name' => 'Features',
            'class' => '',
            'href' => 'features.php',
            'sub_menu' => array()
        ),
        'reviews' => array(
            'name' => 'reviews',
            'class' => '',
            'href' => 'reviews.php',
            'sub_menu' => array()
        ),
        'videos' => array(
            'name' => 'videos',
            'class' => '',
            'href' => 'videos.php',
            'sub_menu' => array()
        ),
        'events' => array(
            'name' => 'events',
            'class' => '',
            'href' => 'events.php',
            'sub_menu' => array()
        ),
        'interviews' => array(
            'name' => 'interviews',
            'class' => '',
            'href' => 'interviews.php',
            'sub_menu' => array()
        )

    ),

    // Social Media
    'social_media' => array(
        'twitter' => array(
            'name' => 'twitter',
            'class' => 'fa fa-twitter',
            'href' => '#'
        ),
        'facebook' => array(
            'name' => 'facebook',
            'class' => 'fa fa-facebook-square',
            'href' => '#'
        
        ),
        'instagram' => array(
            'name' => 'instagram',
            'class' => 'fa fa-instagram',
            'href' => '#'
        
        ),
        'pinterest' => array(
            'name' => 'pinterest',
            'class' => 'fa fa-pinterest-square',
            'href' => '#'

        )

    ),

    // Home
    'home' => array(
    ),

    // Footer
    'footer' => array(
        'categories' => array(
            array(
                'name' => 'hiphop'
            ),
            array(
                'name' => 'r&b'
            ),
            array(
                'name' => 'pop'
            ),
            array(
                'name' => 'rock'
            ),
            array(
                'name' => 'punk'
            ),
            array(
                'name' => 'reggae'
            ),
            array(
                'name' => 'reviews'
            ),
            array(
                'name' => 'news'
            )

        )

    ),

    // News
    'news' => array(
        'pagination_per_page_limit' => 10,
        'pagination_range' => 5

    ),

    // Events
    'events' => array(
        'pagination_per_page_limit' => 10,
        'pagination_range' => 5

    ),

    // Reviews
    'reviews' => array(
        'pagination_per_page_limit' => 12,
        'pagination_range' => 5

    ),

    // Features
    'features' => array(
        'pagination_per_page_limit' => 12,
        'pagination_range' => 5

    ),

    // Charts
    'charts' => array(
        'limit' => 100

    ),

    // Videos
    'videos' => array(
        'pagination_per_page_limit' => 12,
        'pagination_range' => 5
    ),

    // Interviews
    'interviews' => array(
        'pagination_per_page_limit' => 12,
        'pagination_range' => 5
    ),

    // Hot Sings
    'hotsongs' => array(
        'pagination_per_page_limit' => 12,
        'pagination_range' => 5
    ),

);