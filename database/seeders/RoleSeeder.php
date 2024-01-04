<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $admin = Role::create([
            'name' => 'admin',
            'label' => 'Administrateur',
            'description' => 'Administrateur de Système'
        ]);
        $formateur = Role::create([
            'name' => 'formateur',
            'label' => 'Formateur',
            'description' => 'Formateur expert'
        ]);
        $apprenant = Role::create([
            'name' => 'apprenant',
            'label' => 'Apprenant',
            'description' => 'Apprenant régulière'
        ]);

        $admin->givePermissionTo([
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
            'create-course',
            'edit-course',
            'delete-course',
            'view-course',
            'comment-course',
            'dashboard',
            'admin',
        ]);

        $formateur->givePermissionTo([
            'create-course',
            'edit-course',
            'view-course',
            'comment-course',
            'dashboard',
            'formateur',
        ]);

        $apprenant->givePermissionTo([
            'view-course',
            'comment-course',
            'apprenant'
        ]);
    }
}
