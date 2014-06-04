<?php
require 'vendor/autoload.php';

$number = '##########';
$message = 'YO! james what up';

$phpsms = new PHPSMS\PHPSMS($number,$message);
