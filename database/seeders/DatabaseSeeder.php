<?php

namespace Database\Seeders;

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
           User::truncate();
           $users = [
            [
              'name' => 'Admin',
              'email' => 'admin@gmail.com',
              'password' => '12345678',
              'is_admin' => 1,
            ],
            [
              'name' => 'User',
              'email' => 'user@gmail.com',
              'password' => '13456',
              'is_admin' => 0,
            ],
             [
              'name' => 'Client',
              'email' => 'client@gmail.com',
              'password' => '13456',
              'is_admin' => 0,
            ]
          ];

          foreach($users as $user)
          {
              User::create([
               'name' => $user['name'],
               'email' => $user['email'],
               'password' => Hash::make($user['password'])
             ]);
           }        User::truncate();
           $users = [
            [
              'name' => 'Admin',
              'email' => 'admin@gmail.com',
              'password' => '12345678',
              'is_admin' => 1,
            ],
            [
              'name' => 'User',
              'email' => 'user@gmail.com',
              'password' => '13456',
              'is_admin' => 0,
            ],
             [
              'name' => 'Client',
              'email' => 'client@gmail.com',
              'password' => '13456',
              'is_admin' => 0,
            ]
          ];

          foreach($users as $user)
          {
              User::create([
               'name' => $user['name'],
               'email' => $user['email'],
               'password' => Hash::make($user['password'])
             ]);
           }
        // \App\Models\User::factory(10)->create();
    }
}
