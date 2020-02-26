<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Portret;
use App\User;
use App\Writer;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Portret::class, function (Faker $faker) {
    return [
        'image' => $faker->image('public/storage/images',640,480, null, false),
        'writer_id' => function () {
            return factory(App\Writer::class)->create()->id;
        }, 
    ];
});

$factory->define(Writer::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName($gender = null),
        'surname' => $faker->lastName(),
        'sex' => $faker->randomElement($array = array ('m', 'f')) ,
    ];
});
