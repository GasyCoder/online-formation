<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
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
            'formateur',
            'apprenant'
        ];

        $label_permissions = [
            'Créer un rôle',
            'Modifier un rôle',
            'Supprimer un rôle',
            'Créer un utilisateur',
            'Modifier un utilisateur',
            'Supprimer un utilisateur',
            'Créer un cours',
            'Modifier un cours',
            'Supprimer un cours',
            'Voir un cours',
            'Commenter un cours',
            'Interface Dashboard',
            'Coté Admin',
            'Coté Formateur',
            'Coté Apprenant'
        ];

        $descriptions_permissions = [
            'Permet de créer un nouveau rôle dans le système.',
            'Autorise la modification des paramètres d\'un rôle existant.',
            'Permet de supprimer un rôle du système.',
            'Permet la création d\'un nouvel utilisateur.',
            'Autorise la modification des informations d\'un utilisateur existant.',
            'Permet de supprimer un utilisateur du système.',
            'Permet de créer un nouveau cours',
            'Autorise la modification des détails d\'un cours existant',
            'Permet de supprimer un cours du système',
            'Permet de voir la detail de cours',
            'Autorise de commenter le cours',
            'Interface Dashboard - Admin/Enseignant',
            'Coté Admin, vie privé',
            'Coté Formateur, vie privé',
            'Coté Apprenant, vie privé'
        ];

        // Loop through the permissions and create them using Spatie
        foreach ($permissions as $key => $permissionName) {
            Permission::create([
                'name' => $permissionName,
                'label' => $label_permissions[$key],
                'description' => $descriptions_permissions[$key],
            ]);
        }
    }
}
