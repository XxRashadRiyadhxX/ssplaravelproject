<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

 return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can be 'sandbox' or 'live'
    'sandbox' => [
        'client_id'         => env('ASrPfyUiWMks2HyoaOb29qQChW428emtj6gxCezybkyHyv-ya6lX8i09SP8cbIG9SegYDBobd52gFTjL'),
        'client_secret'     => env('ELJor8Bs8XnTGca7fw2-92-G6sxGQ1R6izxVHuIDZwowJwdafEb5k75evo_uiTSfiqIbn-OsMtS9v1PW'),
        'app_id'            => '',
    ],
    'live' => [
        'client_id'         => env('AXtmNiaGdYIRBauOU7aemJ6K12TxCICMxqMf0fc8evVGKANMwZK5UGAAb7RI2KlVcfNgUrhoKTA0M7dC'),
        'client_secret'     => env('EN953DGyyOixphztfXqfq6_2fF-c8pt7cYqy3YHMFA7oSqF-XiDX-92wmJoIBvyaFtpgt-_5ovitdyY-'),
        'app_id'            => '',
    ],

    'payment_action' => 'Sale',
    'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    'notify_url'     => '', // Change this accordingly for your application.
    'locale'         => env('PAYPAL_LOCALE', 'en_US'),
    'validate_ssl'   => true,
];
