<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'name' => 'Admin', 'email' => 'tasktracker@gmail.com', 'password' => '$2y$10$dX8nQ9OrMkIDLJ9IE7BYT.V./tDDRkvek2h0X16wbY5asDFlqemUG', 'role_id' => 1, 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
