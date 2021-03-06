<?php

use Illuminate\Database\Seeder;
use Someline\Models\Foundation\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");
        DB::table('users')->truncate();
        DB::statement("SET foreign_key_checks=1");

        User::create([
//            'slid' => '1',
            'name' => "test",
            'email' => 'test@someline.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
            'gender' => 'M',
            'birthday' => '1999-07-08',
            'country' => 'CN',
            'timezone' => 'Asia/Shanghai',
            'locale' => 'en',
            'username' => 'test',
            'phone_number' => '+1234567890',
            'status' => 1,
        ]);

        //factory(User::class, 50)->create();
    }
}
