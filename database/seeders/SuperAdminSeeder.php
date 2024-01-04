<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Admin User
        $admin = User::create([
            'name' => 'LanguisticA',
            'email' => 'adminx@mail.com',
            'password' => Hash::make('adminx@mail.com')
        ]);
        $admin->assignRole('admin');

        // Creating Formateur User
        $formateur = User::create([
            'name' => 'Formateur',
            'email' => 'formateur@mail.com',
            'password' => Hash::make('formateur')
        ]);
        $formateur->assignRole('formateur');

        // Creating Apprenant User
        $apprenant = User::create([
            'name' => 'Apprenant',
            'email' => 'apprenant@mail.com',
            'password' => Hash::make('apprenant')
        ]);
        $apprenant->assignRole('apprenant');
    }
}
