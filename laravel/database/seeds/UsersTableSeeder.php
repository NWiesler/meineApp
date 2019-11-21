<?php

use Illuminate\Database\Seeder;

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

        $adminRole = Role::where('name','admin') ->first();
        $authornRole = Role::where('name','author') ->first();
        $userRole = Role::where('name','user') ->first();

        $admin = User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'name'=> bcrypt('admin'),
        ])

        $author= User::create([
            'name'=>'author',
            'email'=>'author@author.com',
            'name'=> bcrypt('author'),
        ])

        $user = User::create([
            'name'=>'user',
            'email'=>'user@user.com',
            'name'=> bcrypt('user'),
        ])
        
        /**
         * verbindet Rollen mit User
         */
        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);


    }
}
