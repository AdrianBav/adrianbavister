<?php

    require_once 'includes/functions.php';


    /*!
     * Constants
     */

    define('EMAIL',         'adrian@bavanco.co.uk');
    define('PHONE',         '+1 (972) 854-2153');
    define('ADDRESS',       'Richardson, Texas 75080');

    define('LINKEDIN',      'https://www.linkedin.com/in/adrianbav');
    define('GITHUB',        'https://github.com/adrianbav');
    define('SITEPOINT',     'https://www.sitepoint.com/premium/users/AdrianBav');

    define('MILES_PER_DAY', '6');



    /*!
     * Handle Submitted Contact Form
     */

    if (isset($_POST['c_name']) && isset($_POST['c_email']) && isset($_POST['c_message']))
    {
        $guest_input = array(
            'name'    => $_POST['c_name'],
            'email'   => $_POST['c_email'],
            'message' => $_POST['c_message'],
        );

        // Define default feedback
        $validation_feedback = '<i class="fa fa-warning"></i> Check all fields.';

        // Validate Message
        if (! validate_message($guest_input, $validation_feedback))
        {
            $result = array(
                'message'    => $validation_feedback,
                'sendstatus' => 0
            );

            echo json_encode($result);
            exit;
        }

        // Send message
        if (! send_contact_message($guest_input))
        {
            $result = array(
                'message'    => '<i class="fa fa-warning"></i> Sorry, something is wrong.',
                'sendstatus' => 0
            );

            echo json_encode($result);
            exit;
        }

        // Message sent sucessfully
        $result = array(
            'message'    => 'Thank you for contacting me!',
            'sendstatus' => 1
        );

        echo json_encode($result);
        exit;
    }



    /*!
     * Define view data.
     */

    // Sub Headings
    $sub1 = 'Lead Web Developer';
    $sub2 = 'Full Stack Developer';
    $sub3 = 'British Accent';

    // Technologies
    $html5 = 'HTML, HTML5 semantic markup with accessibility';
    $css3 = 'CSS, CSS3, Media Queries, Bootstrap, Foundation and SASS.';
    $javascript = 'JavaScript, jQuery, Ajax, JSON, XML.';
    $php = 'LAMP development environment with Object Oriented PHP and security considerations.';
    $mysql = 'MySQL and SQL advanced queries and command line familiarity.';

    // Donut Charts
    $charts = array(
        array('title' => 'HTML5 & CSS3', 'color' => '#f16529', 'percent' => 91, 'animate' => 4000),
        array('title' => 'JavaScript', 'color' => '#f7df1e', 'percent' => 68, 'animate' => 3000),
        array('title' => 'PHP & MySQL', 'color' => '#8892bf', 'percent' => 72, 'animate' => 2500),
        array('title' => 'RWD', 'color' => '#6cc8c2', 'percent' => 81, 'animate' => 3500),
    );

    // Statistic 1 (Coundown to 0 cups of coffee)
    $stat1 = 9734;

    // Statistic 2 (Miles cycled this year)
    $days = days_since(strtotime("1 January 2015"));
    $stat2 = working_days($days) * MILES_PER_DAY;

    // Statistic 3 (Days of web presence)
    $stat3 = days_since(strtotime("13 January 2002"));

    // Contact Details
    $email = EMAIL;
    $telephone = PHONE;
    $address = ADDRESS;
    $linkedin = LINKEDIN;
    $github = GITHUB;
    $sitepoint = SITEPOINT;

    // Footer
    $year = date('Y');



    /*!
     * Render view.
     */
    require 'pages/home.html.php';
