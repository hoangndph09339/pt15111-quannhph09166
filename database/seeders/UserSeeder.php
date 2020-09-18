<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('users')->count() == 0) {
            User::factory()
            ->times(5)
            ->create();
        }else {
            echo 'Bang users da co du lieu' . PHP_EOL;
        }
    }
}
