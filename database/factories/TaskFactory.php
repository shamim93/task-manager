<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title' =>$faker->sentence(),
        'description' =>$faker->paragraph(),
        'user_id' =>factory(App\User::class),
        'completed' =>false
    ];
});
