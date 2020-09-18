<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('roles')->count() == 0) {
            Role::factory()
                ->times(2)
                ->create();
        } else {
            echo 'Bang roles da co du lieu' . PHP_EOL;
        }
    }
}
