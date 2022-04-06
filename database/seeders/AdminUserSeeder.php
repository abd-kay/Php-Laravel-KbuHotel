<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'admin', 'email'=>'admin@admin.com', 'email_verified_at'=> now(),    'password'=> bcrypt('adminpass')]);
    }
}
