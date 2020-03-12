<?php

use App\User;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    public function run()
    {
        // Admin
        User::findOrFail(1)->roles()->sync(1);
        // Mod
        User::findOrFail(2)->roles()->sync(2);
        // User
        User::findOrFail(3)->roles()->sync(3);
    }
}
