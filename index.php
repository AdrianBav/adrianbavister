<?php


    /*!
     * Constants
     */

    define('EMAIL', 'adrian@bavanco.co.uk');
    define('PHONE', '+1 (972) 854-2153');
    define('ADDRESS', 'Richardson, Texas 75080');
    define('LINKEDIN', 'https://www.linkedin.com/in/adrianbav');
    define('GITHUB', 'https://github.com/adrianbav');
    define('SITEPOINT', 'https://www.sitepoint.com/premium/users/AdrianBav');
    define('MILES_PER_DAY', '6');



    /*!
     * Contact Form
     */

    $to = EMAIL;
    $subject = 'Portfolio Contact Page';

    if (isset($_POST['c_name']) && isset($_POST['c_email']) && isset($_POST['c_message']))
    {
        $name    = $_POST['c_name'];
        $from    = $_POST['c_email'];
        $message = $_POST['c_message'];

        if (mail($to, $subject, $message, $from))
        {
            $result = array(
                'message' => 'Thank you for contacting me!',
                'sendstatus' => 1
            );

            echo json_encode($result);
        }
        else
        {
            $result = array(
                'message' => 'Sorry, something is wrong',
                'sendstatus' => 1
            );

            echo json_encode($result);
        }

        exit;
    }



    /*!
     * Functions
     */

    function days_since($start_date)
    {
        $now = time();
        $datediff = $now - $start_date;
        return floor($datediff / (60 * 60 * 24));
    }

    function working_days($days)
    {
        return floor($days * (5 / 7));
    }



    /*!
     * Variables
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

    /*
    // Statistic 1 (US States visited)
    $states = array(
        'New York',
        'Virginia',
        'Texas',
        'Arizona',
        'California',
        'Hawaii',
        'Massachusetts',
        'Pennsylvania',
        'Maryland',
        'North Carolina',
        'Georgia',
        'Florida',
        'Illinois',
        'Michigan'
    );
    $stat1 = count($states);
    */

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
     * View
     */
    require 'pages/home.html.php';
