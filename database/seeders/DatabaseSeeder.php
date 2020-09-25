<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Student::factory(10)->create();
        Subject::factory(20)->create();

        // $this->call([
        //     UserSeeder::class,
        //     RoleSeeder::class,
        //     StudentsTableSeeder::class,
        //     SubjectsTableSeeder::class,
        // ]);
    }
}
