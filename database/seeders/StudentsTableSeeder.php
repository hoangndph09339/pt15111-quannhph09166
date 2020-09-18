<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('students')->count() == 0) {
            DB::table('students')->insert([
                'name' => 'Nguyen Van A',
                'age' => 20,
                'phone_number' => '0914946200',
                'gender' => 1,
                'address' => 'Nam Dinh',
                'is_active' => true,
            ]);
        } else {
            echo 'Bang students da co du lieu' . PHP_EOL;
        }
    }
}
