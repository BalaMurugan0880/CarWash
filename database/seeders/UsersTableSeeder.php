<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\role;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = role::where('name', 'Admin')->first();
        $editorRole = role::where('name', 'Editor')->first();
        $userRole = role::where('name', 'User')->first();

        $admin = User::create([
        	'name' => 'Admin User',
        	'email' => 'admin@admin.com',
        	'password' => Hash::make('password'),
            'role' => 'Admin',
        	'email_verified_at' =>  now(),
        ]);

         $editor = User::create([
        	'name' => 'Editor User',
        	'email' => 'editor@editor.com',
        	'password' => Hash::make('password'),
            'role' => 'Editor',
        	'email_verified_at' =>  now(),
        ]);

         $user = User::create([
            'name' => 'Writer User',
            'email' => 'writer@writer.com',
            'password' => Hash::make('password'),
            'role' => 'User',
            'email_verified_at' =>  now(),
        ]);

         $admin->roles()->attach($adminRole);
         $editor->roles()->attach($editorRole);
         $user->roles()->attach($userRole);
    }
    
}
