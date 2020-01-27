<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array();  
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_port'] = 465;
        $config['smtp_user'] = 'aasit.analyst@gmail.com';
        $config['smtp_pass'] = 'iConnect2Me';
        $config['useragent'] = 'eMail-AIN007';
       // $config['smtp_crypto'] = 'tls'; //can be 'ssl' or 'tls' for example
        $config['mailtype'] = 'html'; //plaintext 'text' mails or 'html'
        $config['charset'] = 'iso-8859-1'; // utf-8
        $config['smtp_timeout'] = 7;
        $config['wordwrap'] = TRUE;
/*
$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'email-smtp.ap-south-1.amazonaws.com', 
    'smtp_port' => 587,
    'smtp_user' => 'AKIASMDUD3MU36L6WV5V',
    'smtp_pass' => 'BNQLgzwpWdp+YiJjG5+RkF9hTg5cIOZ72w0oCvaNLc6r',
    'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
    'mailtype' => 'text', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '4', //in seconds
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE
);
*/