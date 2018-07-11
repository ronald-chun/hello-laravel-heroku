<?php

use App\User;
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
        $user = new User;
        $user->name = "Ronald";
        $user->email = "ronald@playa.hk";
        $user->password = bcrypt('beta1234');
        $user->save();
    }
}
