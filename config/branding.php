<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Public logo URL (emails, PDFs)
    |--------------------------------------------------------------------------
    | Absolute HTTPS URL so images load in email clients and when embedding in PDFs.
    */
    'mail_logo_url' => env(
        'MAIL_LOGO_URL',
        'https://www.dallaslimoandblackcars.com/new_assets/assets/black-car-service-dallas-logo.png'
    ),
];
