phpsms
======

Php sms mailer based on textbelt https://github.com/typpo/textbelt


##Still a work in progress
example usage:
```
require 'vendor/autoload.php';

//number to text
$number = '##########';

//message to be sent
$message = 'YO! james what up';

$phpmailer = new PHPSMS\PHPSMS($number,$message);
```

##To Do:

- [] Get mailer sent
- [] Abstract set up
- [] Put on packagist
- [] Write tests
