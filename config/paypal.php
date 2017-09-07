<?php
return array(
    // set your paypal credential
    'client_id' => 'AcQyTuV0cCtKhfIqfNg-LKTWhBXUQGTzHXBHPj2xly-U0cjtK_rfODfoQoSbbKPt31CkmZXCUQQMgpTv',
    'secret' => 'EHHXWnXmZG4jzCcdnvYZ090t7sgI8c6kaB9Onq51o7SCZYVfWg8fyncnTKbGFEbXE_rld5eomq3zfvvq',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);