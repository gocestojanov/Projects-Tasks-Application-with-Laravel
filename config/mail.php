<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mail Driver
    |--------------------------------------------------------------------------
    |
    | Supported: "smtp", "sendmail", "mailgun", "mandrill", "ses",
    |            "sparkpost", "postmark", "log", "array"
    |
    */

    'driver' => env('MAIL_DRIVER', 'smtp'),

    // 'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
    'host' => env('MAIL_HOST', ''),

    'port' => env('MAIL_PORT', ),

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', ''),
        'name' => env('MAIL_FROM_NAME', 'Stojanov Goce'),
    ],

    'encryption' => env('MAIL_ENCRYPTION', ''),

    'username' => env('MAIL_USERNAME', ''),

    'password' => env('MAIL_PASSWORD',''),

    'allow_self_signed' => true,
    'verify_peer' => false,
    'verify_peer_name' => false,

    /*
    |--------------------------------------------------------------------------
    | Sendmail System Path
    |--------------------------------------------------------------------------
    |
    | When using the "sendmail" driver to send e-mails, we will need to know
    | the path to where Sendmail lives on this server. A default path has
    | been provided here, which will work well on most of your systems.
    |
    */

    'sendmail' => '/usr/sbin/sendmail -bs',

    /*
    |--------------------------------------------------------------------------
    | Markdown Mail Settings
    |--------------------------------------------------------------------------
    |
    | If you are using Markdown based email rendering, you may configure your
    | theme and component paths here, allowing you to customize the design
    | of the emails. Or, you may simply stick with the Laravel defaults!
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Log Channel
    |--------------------------------------------------------------------------
    |
    | If you are using the "log" driver, you may specify the logging channel
    | if you prefer to keep mail messages separate from other log entries
    | for simpler reading. Otherwise, the default channel will be used.
    |
    */

    'log_channel' => env('MAIL_LOG_CHANNEL'),

];
