<?php

use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'imageURL' => 'images/smartphone.png',
        'DPimageURL' => 'images/default_user.png'
    ];
});
