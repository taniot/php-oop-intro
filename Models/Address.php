<?php


/**
 * Address
 */
class Address
{

    public string $street_address;
    // public $city;
    public $post_code = '12345';
    public static $country = 'Italy';

    public function __construct(string $street_address, public string $city)
    {
        $this->street_address = $street_address;
        $this->city = $city;
    }

    public function getCountry()
    {
        return self::$country;
    }


    function pippo()
    {
    }
}
