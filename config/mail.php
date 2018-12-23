<?php

/**
 * Mail configuration options.
 *
 * Changes to these config files are not supported by BookStack and may break upon updates.
 * Configuration should be altered via the `.env` file or environment variables.
 * Do not edit this file unless you're happy to maintain any changes yourself.
 */

return [

    // Mail driver to use.
    // Options: smtp, mail, sendmail, log
    'driver' => env('MAIL_DRIVER', 'smtp'),

    // SMTP host address
    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),

    // SMTP host port
    'port' => env('MAIL_PORT', 587),

    // Global "From" address & name
    'from' => [
        'address' => env('MAIL_FROM', 'mail@bookstackapp.com'),
        'name' => env('MAIL_FROM_NAME','BookStack')
    ],

    // Email encryption protocol
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    // SMTP server username
    'username' => env('MAIL_USERNAME'),

    // SMTP server password
    'password' => env('MAIL_PASSWORD'),

    // Sendmail application path
    'sendmail' => '/usr/sbin/sendmail -bs',

    // Email markdown configuration
    'markdown' => [
        'theme' => 'default',
        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
