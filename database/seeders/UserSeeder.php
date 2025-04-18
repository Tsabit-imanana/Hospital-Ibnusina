<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Admin::create([
            'name' => 'admin1',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin123'),
        ]);

        $admin->assignRole('admin');


        $patient = Patient::create([
            'name' => 'patient1',
            'email' => 'patient@example.com',
            'password' => bcrypt('patient123'),
            'birthdate' => '2003-04-23',
            'address' => 'Singosari, Malang',
            'gender' => 'male'
        ]);

        $patient->assignRole('patient');
    }
}
