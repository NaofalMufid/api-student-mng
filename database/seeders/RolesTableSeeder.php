<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_name = ['admin', 'staff'];
        for ($i=0; $i < 2; $i++) { 
            Role::create([
                'name' => $role_name[$i]
            ]);
        }
    }
}
