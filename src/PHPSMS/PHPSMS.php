<?php

  namespace PHPSMS;

  use PHPSMS\Providers;

  class PHPSMS {
    public function __construct($number,$message,$region = 'us') {
      $providers = new Providers();
      $providerList;

      switch($region) {
        case 'us' :
          $providerList = $providers->us;
        break;
        case 'canada':
          $providerList = $providers->canada;
        break;
        case 'intl':
          $providerList = $providers->intl;
        break;
      }
      if(!$number || !$message ) {
        return false;
      }

      foreach($providerList as $provider) {
        $from = 'test@email.com';
        $to = str_replace('%s',$number,$provider);
        if(mail($to , $message ,$message)) echo 'success to '.$to.'\n';
      }

    }

  }
