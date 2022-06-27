<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(RoleSeeder::class);
        \App\Models\User::factory(5)->create();
        \App\Models\Trainee::factory(10)->create();
        \App\Models\Leave::factory(10)->create();
        \App\Models\Networks::factory(10)->create();
        \App\Models\LeavePermission::factory(10)->create();
        \App\Models\Attendance::factory(10)->create();
        $this->call(AdminSeeder::class);
    }
}
