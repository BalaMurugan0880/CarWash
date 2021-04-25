<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       role::truncate();

       role::create(['name' => 'Admin']);
       role::create(['name' => 'Editor']);
       role::create(['name' => 'User']);
    }
}
