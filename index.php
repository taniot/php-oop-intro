<?php
require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Address.php';
require_once __DIR__ . '/Models/Helper.php';

//$address = new Address('Via del codice, 99', 'Booleandia');


$addresses = [
    new Address('Via del codice, 99', 'Booleandia'),
    new Address('Indirizzo di domicilio', 'Città')
];

$massimiliano = new User('Massimiliano', $addresses, 18);

var_dump($massimiliano);


// // $rosa = new User('Rosa', 18);

// // // echo $massimiliano['email'];
// // echo $massimiliano->email;

// var_dump($massimiliano);
// // var_dump($massimiliano->address->country);

// $address_test = new Address('Via del codice, 99', 'Booleandia');

// var_dump($address_test->post_code);
// var_dump($address_test->getCountry());
// var_dump(Address::$country);
// // var_dump($rosa);

// Helper::replaceString();

//non statico

// $helper = new Helper();
// $helper->noStatic();

// //statico
// Helper::siStatic();
