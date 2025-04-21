<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patient = Patient::create([
            'name' => 'patient2',
            'email' => 'patient2@example.com',
            'password' => bcrypt('patient123'),
            'birthdate' => '2003-04-23',
            'address' => 'Lumajang',
            'gender' => 'male'
        ]);

        $patient->assignRole('patient');
    }
}
