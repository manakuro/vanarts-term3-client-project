<?php

$config = array(

    // Title
    'title' => 'Biz Coach Plus',

    // Meta
    'meta' => array(
        'desc' => ''
    ),

    // Navigation
    'nav' => array(

        'products' => array(
            'name' => 'products',
            'href' => 'products.php',
            'only_member' => false
        ),
        'testimonials' => array(
            'name' => 'testimonials',
            'href' => 'testimonials.php',
            'only_member' => false
        ),
        'sign_up' => array(
            'name' => 'sign up',
            'href' => 'signup.php',
            'only_member' => false
        ),
        'log_in' => array(
            'name' => 'log in',
            'href' => 'login.php',
            'only_member' => false
        ),
        'contact' => array(
            'name' => 'Contact',
            'href' => 'contact.php',
            'only_member' => false
        ),
        'resource' => array(
            'name' => 'resource',
            'href' => 'resources.php',
            'only_member' => true
        ),

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

        // Home / Introduction
        'intro' => array(
            'coaching' => array(
                'img' => 'img/home/intro/coaching.png',
                'alt' => 'Image of coaching products',
                'caption' => 'coaching',
                'class' => 'first-row'
            ),
            'self_development' => array(
                'img' => 'img/home/intro/self_development.png',
                'alt' => 'Image of self development products',
                'caption' => 'self development',
                'class' => 'first-row'
            ),
            'presentation' => array(
                'img' => 'img/home/intro/presentation.png',
                'alt' => 'Image of presentation products',
                'caption' => 'presentation',
                'class' => ''
            ),
            'communicate' => array(
                'img' => 'img/home/intro/communicate.png',
                'alt' => 'Image of communicate products',
                'caption'=> 'communicate',
                'class' => ''
            )
        ),

        'instructors' => array(

            array(
                'img' => 'img/home/instructors/instructor_1.jpg',
                'alt' => 'Image of instructor',
                'class' => ''
            ),
            array(
                'img' => 'img/home/instructors/instructor_2.jpg',
                'alt' => 'Image of instructor',
                'class' => ''
            ),
            array(
                'img' => 'img/home/instructors/instructor_3.jpg',
                'alt' => 'Image of instructor',
                'class' => ''
            ),
            array(
                'img' => 'img/home/instructors/instructor_4.jpg',
                'alt' => 'Image of instructor',
                'class' => ''
            ),
            array(
                'img' => 'img/home/instructors/instructor_5.jpg',
                'alt' => 'Image of instructor',
                'class' => ''
            ),
            array(
                'img' => 'img/home/instructors/instructor_6.jpg',
                'alt' => 'Image of instructor',
                'class' => ''
            )
        )

    ),

    // Testimonials
    'testimonials' => array(
        1 => array(
            'img' => 'img/rockies.jpg',
            'alt' => 'Image of Rockies in Canada',
            'location' => 'Rockies',
            'fee' => '$169'
        )

    ),

    // Footer
    'footer' => array(
        'featured_products' => array(
            array(
                'name' => 'Working with Coaching Tips'
            ),
            array(
                'name' => 'Coaching and Mentoring Your Team'
            ),
            array(
                'name' => 'Learning from Failure'
            ),
            array(
                'name' => 'Organizaion Communication Fundamentals'
            )

        )

    )


);