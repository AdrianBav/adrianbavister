<?php

    /*!
     * Validate Message.
     */
    function validate_message(&$guest_input, &$validation_feedback)
    {
        // Sanitize Name
        $guest_input['name'] = filter_var($guest_input['name'], FILTER_SANITIZE_STRING);

        if ($guest_input['name'] === false)
        {
            return false;
        }

        // Sanitize E-mail
        $guest_input['email'] = filter_var($guest_input['email'], FILTER_SANITIZE_EMAIL);

        if ($guest_input['email'] === false)
        {
            return false;
        }

        // Sanitize Message
        $guest_input['message'] = filter_var($guest_input['message'], FILTER_SANITIZE_STRING);

        if ($guest_input['message'] === false)
        {
            return false;
        }

        // Validate Name
        $name_is_valid = (strlen($guest_input['name']) >= 2) ? true : false;

        if ($name_is_valid === false)
        {
            $validation_feedback = '<i class="fa fa-warning"></i> Name must be at least 2 characters.';
            return false;
        }

        // Validate E-mail
        $email_is_valid = filter_var($guest_input['email'], FILTER_VALIDATE_EMAIL);

        if ($email_is_valid === false)
        {
            $validation_feedback = '<i class="fa fa-warning"></i> Invalid E-mail address.';
           return false;
        }

        // Validate Message
        $message_is_valid = (strlen($guest_input['message']) >= 5) ? true : false;

        if ($message_is_valid === false)
        {
            $validation_feedback = '<i class="fa fa-warning"></i> Message must be at least 5 characters.';
            return false;
        }

        // All tests passed
        return true;
    }


    /*!
     * Send Contact Message.
     */
    function send_contact_message(&$guest_input)
    {
        $to = 'Adrian Bavister <adrian.bavister@gmail.com>';
        $subject = 'Message from guest via personal resume site';
        $message = '';
        $headers = array();

        // Construct the message
        $message = sprintf('%s (%s) says: %s', $guest_input['name'], $guest_input['email'], $guest_input['message']);

        // Each line should be separated with a CRLF (\r\n).
        // Lines should not be larger than 70 characters.
        $message = wordwrap($message, 70, "\r\n");

        // Define message headers
        $headers[] = 'From: Adrian Bavister <webmaster@adrianbavister.com>';
        $headers[] = 'Reply-To: contact@adrianbavister.com';
        $headers[] = 'X-Mailer: PHP/' . phpversion();

        // Send the email
        $success = mail($to, $subject, $message, implode("\r\n", $headers));

        return $success;
    }


    /*!
     * Days Since.
     */
    function days_since($start_date)
    {
        $now = time();
        $datediff = $now - $start_date;
        return floor($datediff / (60 * 60 * 24));
    }


    /*!
     * Working Days.
     */
    function working_days($days)
    {
        return floor($days * (5 / 7));
    }
