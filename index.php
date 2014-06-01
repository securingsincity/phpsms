<?php
require 'vendor/autoload.php';

$number = '##########';
$message = 'YO! james what up';

$phpmailer = new PHPSMS\PHPSMS($number,$message);
