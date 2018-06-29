<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'nama' =>$faker->word,
        'detail'=> $faker->paragraph,
        'harga'=>$faker->numberBetween(100,1000000),
        'stock'=>$faker->randomDigit,
        'diskon'=>$faker->numberBetween(1,99)
    ];
});
