<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('subjects')->count() == 0) {
            DB::table('subjects')->insert([
                'name' => 'Toan',
                'is_active' => 1,
                'time' => '2020/07/28',
            ]);
        } else {
            echo 'Bang subjects da co du lieu' . PHP_EOL;
        }
    }
}
