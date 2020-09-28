<?php

namespace Database\Seeders;

use App\Models\Subject;
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
            Subject::factory()
            ->times(20)
            ->create();
        } else {
            echo 'Bang subjects da co du lieu' . PHP_EOL;
        }
    }
}
