<?php

use Illuminate\Database\Seeder;

class TaskStatusSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'name' => 'View',],
            ['id' => 2, 'name' => 'In Progress',],
            ['id' => 3, 'name' => 'Done',],

        ];

        foreach ($items as $item) {
            \App\TaskStatus::create($item);
        }
    }
}
