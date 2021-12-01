<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Evangelions Felix Yehdeya GSD',
            'email' => '10052@students.uajy.ac.id',
            'username' => 'yehdeya',
            'password' => '$2b$10$SSBcih6Ijw5VLTk4l7iUEOnGm1hR883w923nb1.mRZc8ouvWgmuZe',
            'status' => '0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
