<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\UserRol;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(100)->create();
        //\App\Models\Task::factory(300)->create();

        $this->call([
            UserSeeder::class,
            PermisoSeeder::class,
            RolSeeder::class

        ]);
    }
}
