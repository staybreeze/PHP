<?php

$mobileArr = array(
    array(
        'id' => 1,
        'name' => 'iphone10',
        'price' => 10000,
        'location' => array('台北', '台中', '高雄')
    ),
    array(
        'id' => 2,
        'name' => 'iphone11',
        'price' => 10000,
        'location' => array('台北', '台中', '高雄')
    ),
    array(
        'id' => 3,
        'name' => 'iphone12',
        'price' => 10000,
        'location' => array('台北', '台中', '高雄')
    ),
    array(
        'id' => 4,
        'name' => 'iphone13',
        'price' => 10000,
        'location' => array('台北', '台中', '高雄')
    )
);

echo  json_encode($mobileArr);





