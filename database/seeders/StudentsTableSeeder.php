<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

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
            Student::factory()
            ->time(5)
            ->create();
        } else {
            echo 'Bang students da co du lieu' . PHP_EOL;
        }
    }
}
