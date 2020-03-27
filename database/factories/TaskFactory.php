<?php

$factory->define(App\Task::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "description" => $faker->name,
        "status_id" => factory('App\TaskStatus')->create(),
        "assigned_to_id" => factory('App\User')->create(),
    ];
});
