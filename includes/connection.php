
<!-- process of connection

1 download composer from this link ( https://getcomposer.org/download/ )
2 check it by using termilar
    -composer
    -composer init
    -PHP tutorial(description)
    -author <email which you want to access> or skip
    -dev
    -project
    -GNU3(licence)
    -no
    -no
    -yes
    -composer install ( after that the composer folder are created )
    -composer require kreait/firebase-php ^4.17 (or simply without version)


    now try coding best luck for you

 -->


<?php
require_once('vendor/autoload.php');
   use Kreait\Firebase\Factory;
   use Kreait\Firebase\ServiceAccount;

   // This assumes that you have placed the Firebase credentials in the same directory
   // as this PHP file.
   $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ .'/php-tutorial-183bc-88c4dfb2d3dd.json');
   $firebase = (new Factory)
      ->withServiceAccount($serviceAccount)
      ->create();
      
   $database = $firebase->getDatabase();
?>


 <!-- 
     
                for coding help
     http://fundaofwebit.com/tutorial/php-firebase/firebase-inphp-2-how-to-install-firebase-and-connect-database -->