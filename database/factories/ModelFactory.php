<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
   
    return [
        'title' =>  $faker->sentence(3),
        'slug' =>  $faker->slug(),
        'content' =>  $faker->text(500),
        'category_id' => '',
        'featured' => $faker->imageUrl(),
        'user_id' => 1,

    ];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    
    return [
        'tag' => $faker->name
    ];
});




